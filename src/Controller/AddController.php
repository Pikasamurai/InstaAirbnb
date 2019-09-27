<?php

namespace App\Controller;

use App\DTO\Task;
use App\Entity\Announcement;
use App\Form\TaskType;
use App\Services\UserManager;
use App\Services\AnnouncementsServices;
use DateTime;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddController extends AbstractController
{
    /**
     * @Route("/liste/{_locale}/add", name="add",
     * methods={"POST","GET"})
     * @param Request $request
     * @return RedirectResponse|Response
     * @throws Exception
     */

    public function index(Request $request)
    {
        $task = new Task();
        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $a = new Announcement();
            $a->setTitle($task->getTitle());
            $a->setCreatedAt(new DateTime());
            $a->setContent($task->getContent());
            $a->setPrice($task->getPrice());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($a);
            $entityManager->flush();
           // return $this->redirectToRoute('/');
        }

        return $this->render('creation/index.html.twig', [
            'controller_name' => 'AddController',
            'form' => $form->createView(),
        ]);
    }
}
