<?php


namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DashboardController extends BaseController
{
    /**
     * @Route("/admin/", name="admin_dashboard_en")
     * @Route("/admin/", name="admin_dashboard_nl")
     * @Method("GET")
     */
    public function overviewAction()
    {
        return $this->render(
            'admin/dashboard.twig',
            [

            ]
        );
    }
}