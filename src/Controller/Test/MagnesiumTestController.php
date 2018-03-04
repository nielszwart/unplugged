<?php


namespace App\Controller\Test;


use App\Controller\BaseController;
use App\Service\Localization;
use App\Form\MagnesiumTestType;
use Symfony\Component\HttpFoundation\Request;

class MagnesiumTestController extends BaseController
{
    public function test(Request $request, Localization $localization, \Swift_Mailer $mailer)
    {
        // Honeypot
        if (!empty($request->request->get('emailtest'))) {
            return $localization->redirectToLocalizedRoute('homepage');
        }

        $form = $this->createForm(MagnesiumTestType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            try {
                $message = (new \Swift_Message($localization->translate('Magnesium test results')))
                    ->setFrom($data['email'])
                    ->setTo('michael@neocaveman.nl')
                    ->setBody(
                        $this->renderView(
                            'email/magnesium.twig',
                            [
                                'data' => $data,
                            ]
                        ),
                        'text/html'
                    );

                $mailer->send($message);

                $this->addFlash('success', $localization->translate('Your test results have been received'));
                return $localization->redirectToLocalizedRoute('magnesium_test');
            } catch (\Exception $e) {
                $this->addFlash('error', $localization->translate('Failed to send the test'));
            }
        }

        return $this->render('website/test/magnesium.twig', [
            'form' => $form->createView(),
        ]);
    }
}