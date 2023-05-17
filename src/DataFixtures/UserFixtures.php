<?php

namespace App\DataFixtures;


use App\Entity\Users;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private UserPasswordHasherInterface $hashInterface;
    
    public function __construct(UserPasswordHasherInterface $hashInterface)
    {
        $this->hashInterface=$hashInterface;
    }

    public function load(ObjectManager $manager): void
    {
    for($i=1; $i<=10;$i++){
        $user=new Users();
        $hashPassword=$this->hashInterface->hashPassword($user,"password");
        $user->setPassword($hashPassword)
            ->setEmail(sprintf("email%d@email.com",$i))
            ->setFirstName(sprintf("first%d",$i))
            ->setLastName(sprintf("last%d",$i))
            ->setRoles(['ROLE_USER'])
            ->setIsActive(true)
            ->setCreatedAt(new DateTimeImmutable);
        $manager->persist($user);
        $this->addReference('user'. $i, $user);
    }
    $manager->flush();
}
}

