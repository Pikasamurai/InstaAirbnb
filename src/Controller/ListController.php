<?php
namespace App\Controller;

use App\DTO\Task;
use App\Form\TaskType;
use App\Services\UserManager;
use App\Services\AnnouncementsServices;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
class ListController extends AbstractController
{
    /**
     * @Route("/liste/{_locale}/{page}",
     * name="liste",
     * defaults={"page"=1},
     * requirements={"page"="[0-9]+"}
     * )
     * @var UserManager|UserManager
     * @param UserManager $UserManager
     */

    private $announcementsServices;
    private $userManager;

    public function __construct(UserManager $userManager, AnnouncementsServices $announcementsServices )
    {
        $this->userManager = $userManager;
        $this->announcementsServices = $announcementsServices;
    }

    public function announcements()
    {
        $tableau = $this->userManager->findAnnouncements();
        dump($tableau);
        return $this->render('list/index.html.twig',['tableau'=>$tableau]);
    }

    public function announcementsAdd(Request $request)
    {
        dump($this->announcementsServices->index());
        $task = new Task();
        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->userManager->save($task);
            return $this->redirectToRoute('home');
        }
        return $this->render('creation/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function index()
    {
        return $this->render('list/index.html.twig', [
            'controller_name' => 'ListController',
        ]);
    }
}