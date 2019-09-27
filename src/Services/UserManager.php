<?php

namespace App\Services;

use App\DTO\Task;
use App\Entity\Announcement;
use App\Repository\AnnouncementRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\User\User;

class UserManager
{
    private $entityManager;
    private $AnnouncementRepository;

    public function __construct(AnnouncementRepository $announcementRepository, ObjectManager $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->AnnouncementRepository = $announcementRepository;
    }

    public function findAnnouncements()
    {
        return $this->AnnouncementRepository->findTableauEnt();
    }
    public function save(Task $task)
    {
        $announcements = new  Announcement($task);
        $this->entityManager->persist($announcements);
        $this->entityManager->flush();
    }
}