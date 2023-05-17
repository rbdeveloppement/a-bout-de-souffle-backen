<?php

namespace App\DataFixtures;

use App\Entity\Order;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class OrderFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        for ($i=0; $i <=10 ; $i++) { 
            $order=new Order();
            $order->setCreatedAt(new \DateTimeImmutable())
                ->setPrice($i*50)
                ->setUsers($this->getReference("user1"))
                ->setState($this->getReference("state"))
                ->setAddress($this->getReference("address1"));
            $manager->persist($order);
            $this->addReference("order".$i,$order);
        }

        $manager->flush();
    }
    public function getDependencies()
    {
        return [
            UserFixtures::class,
            StateFixtures::class
        ];
    }
}
