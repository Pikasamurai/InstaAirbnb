<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController
{
    /**
     * @Route("/{_locale}/contact",
     *     name="contact", requirements={"_locale"="fr|en"})
     * @param Request $request
     */
    public function contact(Request $request)
    {
        // ...
    }

    public function send()
    {
        // ...
    }
}