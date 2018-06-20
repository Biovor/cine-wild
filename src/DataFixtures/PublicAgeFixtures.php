<?php
/**
 * Created by PhpStorm.
 * User: biovor
 * Date: 17/06/18
 * Time: 01:57
 */

namespace App\DataFixtures;

use App\Entity\PublicAge;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PublicAgeFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $year = new PublicAge();
        $year->setLabel('TP');
        $manager->persist($year);
        $this->addReference('1', $year );

        $year = new PublicAge();
        $year->setLabel('+6');
        $manager->persist($year);
        $this->addReference('2', $year );

        $year = new PublicAge();
        $year->setLabel('+8');
        $manager->persist($year);
        $this->addReference('3', $year );

        $year = new PublicAge();
        $year->setLabel('+10');
        $manager->persist($year);
        $this->addReference('4', $year );

        $year = new PublicAge();
        $year->setLabel('+12');
        $manager->persist($year);
        $this->addReference('5', $year );

        $year = new PublicAge();
        $year->setLabel('+16');
        $manager->persist($year);
        $this->addReference('6', $year );

        $year = new PublicAge();
        $year->setLabel('+18');
        $manager->persist($year);
        $this->addReference('7', $year );


        $manager->flush();
    }
}