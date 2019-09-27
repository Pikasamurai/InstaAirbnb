<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DetailController extends AbstractController
{
    /**
     * @Route("/liste/{_locale}/{page}/detail",
     * name="detail",
     * defaults = {"page" = 1},
     * requirements = {"page" = "[0-9]+"}
     * )
     */
    public function index()
    {
        return $this->render('detail/index.html.twig', [
            'controller_name' => 'DetailController',
        ]);
    }
}
