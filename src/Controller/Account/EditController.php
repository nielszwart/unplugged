<?php

namespace App\Controller\Account;

use App\Controller\BaseController;
use App\Entity\User;
use App\Form\AccountType;
use App\Form\UserType;
use App\Service\Localization;
use App\Entity\Account;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class EditController extends BaseController
{
    public function edit(Request $request, Localization $localization)
    {
        $account = $this->getDoctrine()->getRepository(Account::class)->findOneBy(['user' => $this->getUser()->getId()]);

        $accountForm = $this->createForm(AccountType::class);
        $accountForm->handleRequest($request);
        if ($request->isMethod('post')) {
            if ($accountForm->isValid()) {
                try {
                    $account->edit($request->request->get('account'));
                    $this->save($account);
                    $this->addFlash('success', $localization->translate('Successfully edited your account'));

                    return $localization->redirectToLocalizedRoute('account_edit');
                } catch (\Exception $e) {
                    $this->addFlash('error', $localization->translate('Failed to edit your account'));
                }
            }
        }

        return $this->render('website/account/edit.twig', [
                'accountForm' => $accountForm->createView(),
                'account' => $account,
            ]
        );
    }
}