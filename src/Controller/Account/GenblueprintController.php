<?php

namespace App\Controller\Account;


use App\Controller\BaseController;
use App\Entity\Account;
use App\Entity\Answer;
use App\Entity\Genblueprint;
use App\Form\GenblueprintType;
use App\Service\Localization;
use Symfony\Component\HttpFoundation\Request;

class GenblueprintController extends BaseController
{
    public function genblueprint(Request $request, Localization $localization, \Swift_Mailer $mailer)
    {
        $account = $this->getDoctrine()->getRepository(Account::class)->findOneBy(['user' => $this->getUser()->getId()]);

        if (!$this->hasPurchasedGenblueprint($account)) {
            return $localization->redirectToLocalizedRoute('account');
        }

        $first = empty($account->getGenblueprint());
        $genblueprint = $first ? new Genblueprint() : $account->getGenblueprint();

        $form = $this->createForm(GenblueprintType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $data = $form->getData();

                if ($first) {
                    $this->save($genblueprint);
                    $account->setGenblueprint($genblueprint);
                    $this->save($account);

                    foreach ($data as $question => $answers) {
                        $answer = new Answer($genblueprint, $question, $answers);
                        $this->save($answer);
                    }

                    $this->addFlash('success', $localization->translate('Successfully created your GenBluePrint'));
                    $this->sendGenBluePrintEmail($mailer, $localization, $account, true);
                } else {
                    foreach ($data as $question => $answers) {
                        $answer = $this->getDoctrine()->getRepository(Answer::class)->findOneBy([
                            'genblueprint' => $genblueprint,
                            'question' => $question,
                        ]);
                        if (empty($answer)) {
                            $answer = new Answer($genblueprint, $question, $answers);
                            $this->save($answer);
                            continue;
                        }
                        $answer->edit($answers);
                        $this->save($answer);
                    }

                    $this->save($genblueprint);
                    $this->addFlash('success', $localization->translate('Successfully updated your GenBluePrint'));
                    $this->sendGenBluePrintEmail($mailer, $localization, $account);
                }

                return $localization->redirectToLocalizedRoute('account');
            } catch (\Exception $e) {
                echo "<pre>";
                var_dump($e->getMessage(), $e->getFile(), $e->getLine(), $e->getTraceAsString());
                exit;
                $this->addFlash('error', $localization->translate('Failed to save your GenBluePrint'));
            }
        }

        return $this->render('website/account/genblueprint.twig', [
                'form' => $form->createView(),
                'account' => $account,
                'genblueprint' => $genblueprint,
            ]
        );
    }

    private function hasPurchasedGenblueprint(Account $account)
    {
        $orders = $account->getOrders();
        if (empty($orders)) {
            return false;
        }

        foreach ($orders as $order) {
            if ($order->getStatus() !== 'paid') {
                continue;
            }

            foreach ($order->getOrderLines() as $orderLine) {
                echo $orderLine->getProduct()->getTitle();
                if ($orderLine->getProduct()->getHasGenblueprint()) {
                    return true;
                }
            }
        }

        return false;
    }

    private function sendGenBluePrintEmail(\Swift_Mailer $mailer, Localization $localization, Account $account, $new = false)
    {
        $subject = $new ? "A new GenBluePrint has submitted" : "A GenBluePrint was edited";
        $message = (new \Swift_Message($localization->translate($subject)))
            ->setFrom($account->getUser()->getEmail())
            ->setTo('michael@neocaveman.nl')
            ->setBody(
                $this->renderView(
                    'email/genblueprint.twig',
                    [
                        'name' => $account->getFullName(),
                        'new' => $new,
                        'accountId' => $account->getId(),
                    ]
                ),
                'text/html'
            );

        $mailer->send($message);
    }


}