<?php


namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class IndexController extends BaseController
{
    /**
     * @Route("/", name="homepage_en")
     * @Route("/{_locale}", name="homepage_nl")
     * @Method("GET")
     */
    public function number()
    {
        $number = mt_rand(0, 100);

        return $this->render('website/homepage.twig', array(
            'number' => $number,
        ));
    }
}