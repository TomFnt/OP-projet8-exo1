<?php

namespace App\DataFixtures;

use App\Entity\Voiture;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class VoituresFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $voiture1 = new Voiture();
        $voiture1->setName('Audi q2 életrique');
        $voiture1->setVehicleType('SUV');
        $voiture1->setMotorType('électrique');
        $voiture1->setDescription('test fixture 1');
        $voiture1->setPlaces('5');
        $voiture1->setIsManual(0);
        $voiture1->setDailyPrice(40);
        $voiture1->setMensualPrice(800);


        $voiture2 = new Voiture();
        $voiture2->setName('Peugeot 106');
        $voiture2->setVehicleType('citadine');
        $voiture2->setMotorType('thermique (essence)');
        $voiture2->setDescription('test fixture 2');
        $voiture2->setPlaces('4');
        $voiture2->setIsManual(1);
        $voiture2->setDailyPrice(10);
        $voiture2->setMensualPrice(200);


        $manager->persist($voiture1);
        $manager->persist($voiture2);
        $manager->flush();
    }
}
