<?php

namespace App\DataFixtures;

use App\Entity\Address;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class AddressFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        for($i=1; $i<=10;$i++){
            $address=new Address();
            $address->setName(sprintf("maison%d",$i))
                ->setAddress(sprintf("%d rue des lylas",$i))
                ->setPostal(78541)
                ->setCity("Lyon")
                ->setCountry("France")
                ->setIsActive(true)
                ->setUsers($this->getReference('user'. $i));
            $manager->persist($address);
            $this->addReference("address".$i,$address);
        }
        $manager->flush();
    }

    public function getDependencies()
   {
      return [
         UserFixtures::class 
      ];
   }
}
