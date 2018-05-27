<?php


namespace App\Controller\Account;


use App\Controller\BaseController;
use App\Entity\Account;
use App\Entity\Genblueprint;

class AccountViewController extends BaseController
{
    public function view($id)
    {
        $account = $this->getDoctrine()->getRepository(Account::class)->find($id);

        $now = new \DateTime();
        $dob = new \DateTime($account->getDateOfBirth());
        $diff = $now->diff($dob);
        $account->age = $diff->y;

        $genblueprint = [];
        if (!empty($account->getGenblueprint())) {
            $genblueprint = $this->calculateGenblueprint($account->getGenblueprint());
        }

        return $this->render(
            'admin/account/account-view.twig',
            [
                'a' => $account,
                'genblueprint' => $genblueprint,
            ]
        );
    }

    private function calculateGenblueprint(Genblueprint $genblueprint)
    {
        if (empty($genblueprint)) {
            return [];
        }

        $totals = [
            'green' => 0,
            'blue' => 0,
            'red' => 0,
            'total' => 0,
        ];
        foreach ($genblueprint->getAnswers() as $answer) {
            if ($answer->getGreen()) {
                $totals['green']++;
            }
            if ($answer->getBlue()) {
                $totals['blue']++;
            }
            if ($answer->getRed()) {
                $totals['red']++;
            }
            $totals['total']++;
        }

        return [
            'green' => round(($totals['green'] / $totals['total']) * 100, 0),
            'blue' => round(($totals['blue'] / $totals['total']) * 100, 0),
            'red' => round(($totals['red'] / $totals['total']) * 100, 0),
        ];
    }
}
