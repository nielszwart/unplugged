<?php


namespace App\Controller;


use App\Entity\Page;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends BaseController
{
    /**
     * @Route("/", name="homepage_en")
     * @Route("/", name="homepage_nl")
     * @Method("GET")
     */
    public function homepageAction(Request $request)
    {
        $pages = $this->getDoctrine()->getRepository(Page::class)->findBy([
            'locale' => $request->getLocale(),
            'slide' => true,
        ]);

        return $this->render('website/homepage.twig', array(
            'pages' => $pages,
        ));
    }
}