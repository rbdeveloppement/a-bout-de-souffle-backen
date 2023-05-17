<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $category1=new Category();
        $category1->setName("action");
        $manager->persist($category1);
        $category2=new Category();
        $category2->setName("arcade");
        $manager->persist($category2);
        $category3=new Category();
        $category3->setName("aventure");
        $manager->persist($category3);
        $category4=new Category();
        $category4->setName("fps");
        $manager->persist($category4);
        $category5=new Category();
        $category5->setName("rpg");
        $manager->persist($category5);
        $category6=new Category();
        $category6->setName("sport");
        $manager->persist($category6);
        $category7=new Category();
        $category7->setName("wargame");
        $manager->persist($category7);
        $category8=new Category();
        $category8->setName("simulation");
        $manager->persist($category8);
        $manager->flush();
        $this->addReference("action",$category1);
        $this->addReference("arcade",$category2);
        $this->addReference("aventure",$category3);
        $this->addReference("fps",$category4);
        $this->addReference("rpg",$category5);
        $this->addReference("sport",$category6);
        $this->addReference("wargame",$category7);
        $this->addReference("simulation",$category8);
    }
}
