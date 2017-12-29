<?php


namespace App\Controller\Page;


use App\Controller\BaseController;
use App\Entity\Page;
use App\Service\Localization;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class PageViewController extends BaseController
{
    /**
     * @Route("/{slug}", name="page_view_en")
     * @Route("/{slug}", name="page_view_nl")
     * @Method("GET")
     */
    public function viewAction($slug, Request $request, Localization $localization)
    {
        $page = $this->getDoctrine()->getRepository(Page::class)->findOneBy(['slug' => $slug, 'locale' => $request->getLocale()]);
        if (empty($page)) {
            throw new HttpException(404, $localization->translate('Could not find the page you are looking for'));
        }

        return $this->render(
            'website/page/page-view.twig',
            [
                'page' => $page,
            ]
        );
    }
}