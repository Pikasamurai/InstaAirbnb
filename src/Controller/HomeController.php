<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/{_locale}", name="home page")
     * @param Request $request
     */

    public function local(Request $request)
    {
        $locale = $request->getLocale();
    }

    public function index()
    {
        $array='';
        return $this->render('annonce/index.html.twig' ,
        [
            "HOME PAGE",
            'controller_name' => 'HomeController',
            'value_array' => $array,
            'date' => date('d/m/Y')
        ]);
    }
}