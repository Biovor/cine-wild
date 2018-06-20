<?php
/**
 * Created by PhpStorm.
 * User: biovor
 * Date: 17/06/18
 * Time: 03:12
 */
namespace App\DataFixtures;

use App\Entity\Director;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class DirectorFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $i = 1;
        $director = new Director();
        $director->setLastName('Lee');
        $director->setFirstName('Unkrich');
        $director->setCareerYear(mt_rand(2, 35));
        $director->setNumberFilms(mt_rand(1, 20));
        $manager->persist($director);
        $this->addReference('director'.$i, $director );
        $i++;

        $director = new Director();
        $director->setLastName('Robert');
        $director->setFirstName('Zemeckis');
        $director->setCareerYear(mt_rand(2, 35));
        $director->setNumberFilms(mt_rand(1, 20));
        $manager->persist($director);
        $this->addReference('director'.$i, $director );
        $i++;

        $director = new Director();
        $director->setLastName('Frank');
        $director->setFirstName('Darabont');
        $director->setCareerYear(mt_rand(2, 35));
        $director->setNumberFilms(mt_rand(1, 20));
        $manager->persist($director);
        $this->addReference('director'.$i, $director );
        $i++;

        $director = new Director();
        $director->setLastName('Makoto');
        $director->setFirstName('Shinkai');
        $director->setCareerYear(mt_rand(2, 35));
        $director->setNumberFilms(mt_rand(1, 20));
        $manager->persist($director);
        $this->addReference('director'.$i, $director );
        $i++;

        $director = new Director();
        $director->setLastName('Steven');
        $director->setFirstName('Spielberg');
        $director->setCareerYear(mt_rand(2, 35));
        $director->setNumberFilms(mt_rand(1, 20));
        $manager->persist($director);
        $this->addReference('director'.$i, $director );
        $i++;

        $director = new Director();
        $director->setLastName('Joe');
        $director->setFirstName('Russo');
        $director->setCareerYear(mt_rand(2, 35));
        $director->setNumberFilms(mt_rand(1, 20));
        $manager->persist($director);
        $this->addReference('director'.$i, $director );
        $i++;

        $director = new Director();
        $director->setLastName('Anthony');
        $director->setFirstName('Russo');
        $director->setCareerYear(mt_rand(2, 35));
        $director->setNumberFilms(mt_rand(1, 20));
        $manager->persist($director);
        $this->addReference('director'.$i, $director );
        $i++;

        $director = new Director();
        $director->setLastName('Sidney');
        $director->setFirstName('Lumet');
        $director->setCareerYear(mt_rand(2, 35));
        $director->setNumberFilms(mt_rand(1, 20));
        $manager->persist($director);
        $this->addReference('director'.$i, $director );
        $i++;

        $director = new Director();
        $director->setLastName('Garth');
        $director->setFirstName('Davis');
        $director->setCareerYear(mt_rand(2, 35));
        $director->setNumberFilms(mt_rand(1, 20));
        $manager->persist($director);
        $this->addReference('director'.$i, $director );
        $i++;

        $director = new Director();
        $director->setLastName('Francis');
        $director->setFirstName('Ford Coppola');
        $director->setCareerYear(mt_rand(2, 35));
        $director->setNumberFilms(mt_rand(1, 20));
        $manager->persist($director);
        $this->addReference('director'.$i, $director );
        $i++;

        $director = new Director();
        $director->setLastName('Quentin');
        $director->setFirstName('Tarantino');
        $director->setCareerYear(mt_rand(2, 35));
        $director->setNumberFilms(mt_rand(1, 20));
        $manager->persist($director);
        $this->addReference('director'.$i, $director );
        $i++;

        $director = new Director();
        $director->setLastName('Mel');
        $director->setFirstName('Gibson');
        $director->setCareerYear(mt_rand(2, 35));
        $director->setNumberFilms(mt_rand(1, 20));
        $manager->persist($director);
        $this->addReference('director'.$i, $director );
        $i++;

        $director = new Director();
        $director->setLastName('Christopher');
        $director->setFirstName('Nolan');
        $director->setCareerYear(mt_rand(2, 35));
        $director->setNumberFilms(mt_rand(1, 20));
        $manager->persist($director);
        $this->addReference('director'.$i, $director );
        $i++;

        $director = new Director();
        $director->setLastName('Clint');
        $director->setFirstName('Eastwood');
        $director->setCareerYear(mt_rand(2, 35));
        $director->setNumberFilms(mt_rand(1, 20));
        $manager->persist($director);
        $this->addReference('director'.$i, $director );
        $i++;

        $director = new Director();
        $director->setLastName('Peter');
        $director->setFirstName('Jackson');
        $director->setCareerYear(mt_rand(2, 35));
        $director->setNumberFilms(mt_rand(1, 20));
        $manager->persist($director);
        $this->addReference('director'.$i, $director );
        $i++;

        $manager->flush();
    }
}