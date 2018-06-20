<?php
/**
 * Created by PhpStorm.
 * User: biovor
 * Date: 17/06/18
 * Time: 01:45
 */
namespace App\DataFixtures;

use App\Entity\YearOfProduction;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class YearOfProductFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 26; $i++) {
            $year = new YearOfProduction();
            $year->setYear(1993 + $i);
            $manager->persist($year);
            $this->addReference(1993 + $i, $year );
        }

        $manager->flush();
    }
}