<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private $encoder;
    public function __construct(UserPasswordHasherInterface $encoder){
        $this->encoder = $encoder;
    }
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail("bloom-in-two@gmail.com");
        $user->setPassword($this->encoder->hashPassword($user,'pass'));
        $user->setRoles(['ROLE_USER', 'ROLE_ADMIN']);
        $user->setIsVerified(true);
        $manager->persist($user);

        $user = new User();
        $user->setEmail('user@user.com');
        $user->setPassword($this->encoder->hashPassword($user, 'pass'));
        $user->setRoles(['ROLE_USER']);
        $user->setIsVerified(true);
        $manager->persist($user);


        $manager->flush();
    }
}
