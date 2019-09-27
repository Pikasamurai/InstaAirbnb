<?php


namespace App\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class page_two extends AbstractController

{
    /**
     * @Route("/announcements/{page}", name = "home2", defaults={"page"=1})
     * @param int $page
     * @return Response
     * @Method("GET")
     */
    public function page_two(int $page)
    {
        return new Response('<html lang="fr"><body> <h1>PAGE N°2 : get value ='.$page.'</h1></body></html>');
    }
}