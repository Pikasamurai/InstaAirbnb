<?php


namespace App\Services;


namespace App\Manager;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\User\User;

class UserManager
{
    private $entityManager;

    public function __construct(ObjectManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function save(User $user): void
    {
        $this->entityManager->persist($user);
        $this->entityManager->flush();
    }
}