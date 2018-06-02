<?php


namespace App\Controller;


use App\Controller\BaseController;

class ToolsController extends BaseController
{
    public function tools()
    {

        return $this->render('website/tools.twig', [

        ]);
    }
}
