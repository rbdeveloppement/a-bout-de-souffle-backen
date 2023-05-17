<?php

namespace App\DataFixtures;

use App\Entity\OrderDetails;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class OrderDetailsFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        for($i=0;$i<=9;$i++){
            $orderDetails=new OrderDetails();
            $orderDetails->setQuantity($i+1)
                ->setPrice(50)
                ->setOrders($this->getReference("order".$i))
                ->setProduct($this->getReference("product".$i+1));
            $manager->persist($orderDetails);
        }

        $manager->flush();
    }
    public function getDependencies()
    {
        return [
            OrderFixtures::class
        ];
    }
}
