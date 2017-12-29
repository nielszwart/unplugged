<?php


namespace App\Controller;


use App\Service\Localization;
use App\Form\ContactType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends BaseController
{
    /**
     * @Route("/contact", name="contact_en")
     * @Route("/contact", name="contact_nl")
     */
    public function contactAction(Request $request, Localization $localization, \Swift_Mailer $mailer)
    {
        // Honeypot
        if (!empty($request->request->get('emailtest'))) {
            return $localization->redirectToLocalizedRoute('homepage');
        }

        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            try {
                $message = (new \Swift_Message($localization->translate('Message through contact form')))
                    ->setFrom($data['email'])
                    ->setTo('info@i-housing.org')
                    ->setBody(
                        $this->renderView(
                            'email/contact.twig',
                            [
                                'name' => $data['name'],
                                'phone' => !empty($data['phone']) ? $data['phone'] : '',
                                'message' => $data['message'],
                            ]
                        ),
                        'text/html'
                    );

                $mailer->send($message);

                $this->addFlash('success', $localization->translate('Your message has been received'));
                return $localization->redirectToLocalizedRoute('contact');
            } catch (\Exception $e) {
                $this->addFlash('error', $localization->translate('Failed to send the message'));
            }
        }

        return $this->render('website/contact.twig', [
            'form' => $form->createView(),
        ]);
    }
}