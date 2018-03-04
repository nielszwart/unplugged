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
    public function genblueprint(Request $request, Localization $localization)
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
                    foreach ($data as $question => $answers) {
                        $answer = new Answer($genblueprint->getId(), $question, $answers);
                        $this->save($answer);
                    }

                    $account->setGenblueprint($genblueprint);
                    $this->save($account);

                    $this->addFlash('success', $localization->translate('Successfully created your GenBluePrint'));
                } else {
                    foreach ($data as $question => $answers) {
                        $answer = $this->getDoctrine()->getRepository(Answer::class)->findOneBy([
                            'genblueprint' => $genblueprint,
                            'question' => $question,
                        ]);
                        $answer->edit($answers);
                        $this->save($answer);
                    }

                    $this->save($genblueprint);
                    $this->addFlash('success', $localization->translate('Successfully updated your GenBluePrint'));
                }

                return $localization->redirectToLocalizedRoute('account');
            } catch (\Exception $e) {
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

}