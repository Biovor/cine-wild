<?php
/**
 * Created by PhpStorm.
 * User: biovor
 * Date: 17/06/18
 * Time: 04:31
 */
namespace App\DataFixtures;

use App\Entity\Picture;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PictureFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i < 26; $i++) {
            $picture = new Picture();
            $picture->setAlt('Affiche du filme ' . $i);
            $picture->setUpdatedAt(new \DateTime('2000-02-20'));
            $picture->setImage('filme' . $i . '.jpg');
            $manager->persist($picture);
            $this->addReference('picture' . $i, $picture);
        }

        $manager->flush();
    }
}