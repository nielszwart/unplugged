<?php


namespace App\Controller\Account;


use App\Controller\BaseController;
use App\Entity\Account;

class AccountViewController extends BaseController
{
    public function view($id)
    {
        $account = $this->getDoctrine()->getRepository(Account::class)->find($id);

        $now = new \DateTime();
        $dob = new \DateTime($account->getDateOfBirth());
        $diff = $now->diff($dob);
        $account->age = $diff->y;

        return $this->render(
            'admin/account/account-view.twig',
            [
                'a' => $account,
            ]
        );
    }
}