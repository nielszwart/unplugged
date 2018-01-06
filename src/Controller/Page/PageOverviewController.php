<?php


namespace App\Controller\Page;


use App\Controller\BaseController;
use App\Entity\Page;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PageOverviewController extends BaseController
{
    public function overview()
    {
        $pages = $this->getDoctrine()->getRepository(Page::class)->findAll();

        return $this->render(
            'admin/page/page-overview.twig',
            [
                'pages' => $pages,
            ]
        );
    }
}