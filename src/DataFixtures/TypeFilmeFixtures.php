<?php
/**
 * Created by PhpStorm.
 * User: biovor
 * Date: 17/06/18
 * Time: 02:52
 */
namespace App\DataFixtures;

use App\Entity\TypeFilms;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TypeFilmeFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $type = new TypeFilms();
        $type->setLabel('Animation');
        $manager->persist($type);
        $this->addReference('Anim', $type );

        $type = new TypeFilms();
        $type->setLabel('Fantastique');
        $manager->persist($type);
        $this->addReference('Fanta', $type );

        $type = new TypeFilms();
        $type->setLabel('Comedie');
        $manager->persist($type);
        $this->addReference('Come', $type );

        $type = new TypeFilms();
        $type->setLabel('Dramatique');
        $manager->persist($type);
        $this->addReference('Drama', $type );

        $type = new TypeFilms();
        $type->setLabel('Romance');
        $manager->persist($type);
        $this->addReference('Romance', $type );

        $type = new TypeFilms();
        $type->setLabel('Policier');
        $manager->persist($type);
        $this->addReference('Polic', $type );

        $type = new TypeFilms();
        $type->setLabel('Historique');
        $manager->persist($type);
        $this->addReference('Histo', $type );

        $type = new TypeFilms();
        $type->setLabel('Action');
        $manager->persist($type);
        $this->addReference('Action', $type );

        $type = new TypeFilms();
        $type->setLabel('Aventure');
        $manager->persist($type);
        $this->addReference('Avent', $type );

        $type = new TypeFilms();
        $type->setLabel('Western');
        $manager->persist($type);
        $this->addReference('West', $type );

        $type = new TypeFilms();
        $type->setLabel('Guerre');
        $manager->persist($type);
        $this->addReference('Guerre', $type );

        $type = new TypeFilms();
        $type->setLabel('Thriller');
        $manager->persist($type);
        $this->addReference('Thriller', $type );

        $type = new TypeFilms();
        $type->setLabel('Science Fiction');
        $manager->persist($type);
        $this->addReference('SF', $type );


        $manager->flush();
    }
}