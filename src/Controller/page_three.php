<?php


namespace App\Controller;


use phpDocumentor\Reflection\Types\String_;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class page_three extends AbstractController
{
    /**
     * @Route("/announcements/{page}/{detail}", name = "home3")
     * @param int $page
     * @param String $detail
     * @return Response
     * @Method("GET")
     */
    public function page_three(int $page, String $detail)
    {
        return new Response('<html lang="fr"><body> <h1>PAGE N°3 : get page ='.$page.' and detail ='.$detail.'</h1></body></html>');
    }
}