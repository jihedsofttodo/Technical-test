<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private $hasher;
    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }
    public function load(ObjectManager $manager): void
    {
        // LOAD NORMAL USER
        $normalUser= new User();
        $normalUser->setEmail("user@app.com");
        $normalUser->setPassword($this->hasher->hashPassword($normalUser,'secret123'));
        $normalUser->setFirstName("normal");
        $normalUser->setLastName("user");
        $normalUser->setRoles(['ROLE_NORMAL_USER']);
        $manager->persist($normalUser);
        // LOAD ADMIN USER
        $normalUser= new User();
        $normalUser->setEmail("admin@app.com");
        $normalUser->setPassword($this->hasher->hashPassword($normalUser,'secret123'));
        $normalUser->setFirstName("admin");
        $normalUser->setLastName("user");
        $normalUser->setRoles(['ROLE_ADMIN']);
        $manager->persist($normalUser);
        $manager->flush();
    }
}
