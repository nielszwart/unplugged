<?php


namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class IndexController extends BaseController
{
    /**
     * @Route("/", name="homepage")
     */
    public function number()
    {
        $number = mt_rand(0, 100);

        return $this->render('homepage.twig', array(
            'number' => $number,
        ));
    }
}