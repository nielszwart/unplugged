<?php


namespace App\Controller\Account;


use App\Controller\BaseController;
use App\Service\Localization;

class AccountController extends BaseController
{
    public function account(Localization $localization)
    {
        if ($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            return $localization->redirectToLocalizedRoute('admin_dashboard');
        }

        return $this->render('website/account/account.twig', []);
    }
}