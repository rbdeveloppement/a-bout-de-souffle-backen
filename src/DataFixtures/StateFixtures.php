<?php

namespace App\DataFixtures;

use App\Entity\State;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class StateFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $state1=new State();
        $state1->setName("Payé");
        $manager->persist($state1);
        $state2=new State();
        $state2->setName("Livré");
        $manager->persist($state2);
        $manager->flush();
        $this->addReference("state",$state1);
    }
}
