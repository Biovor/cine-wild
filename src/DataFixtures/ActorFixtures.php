<?php
/**
 * Created by PhpStorm.
 * User: biovor
 * Date: 17/06/18
 * Time: 03:39
 */
namespace App\DataFixtures;

use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ActorFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $i = 1;
        $actor = new Actor();
        $actor->setLastName('Andrea');
        $actor->setFirstName('Santamaria');
        $actor->setCareerYear(mt_rand(3, 45));
        $actor->setNumberOfFilmsPlayed(mt_rand(1, 28));
        $manager->persist($actor);
        $this->addReference('actor'.$i, $actor );
        $i++;

        $actor = new Actor();
        $actor->setLastName('Benjamin');
        $actor->setFirstName('Bratt');
        $actor->setCareerYear(mt_rand(3, 45));
        $actor->setNumberOfFilmsPlayed(mt_rand(1, 28));
        $manager->persist($actor);
        $this->addReference('actor'.$i, $actor );
        $i++;

        $actor = new Actor();
        $actor->setLastName('Tom');
        $actor->setFirstName('Hanks');
        $actor->setCareerYear(mt_rand(3, 45));
        $actor->setNumberOfFilmsPlayed(mt_rand(1, 28));
        $manager->persist($actor);
        $this->addReference('actor'.$i, $actor );
        $i++;

        $actor = new Actor();
        $actor->setLastName('Gary');
        $actor->setFirstName('Sinise');
        $actor->setCareerYear(mt_rand(3, 45));
        $actor->setNumberOfFilmsPlayed(mt_rand(1, 28));
        $manager->persist($actor);
        $this->addReference('actor'.$i, $actor );
        $i++;

        $actor = new Actor();
        $actor->setLastName('Michael');
        $actor->setFirstName('Clarke');
        $actor->setCareerYear(mt_rand(3, 45));
        $actor->setNumberOfFilmsPlayed(mt_rand(1, 28));
        $manager->persist($actor);
        $this->addReference('actor'.$i, $actor );
        $i++;

        $actor = new Actor();
        $actor->setLastName('Ryunosuke');
        $actor->setFirstName('Kamiki');
        $actor->setCareerYear(mt_rand(3, 45));
        $actor->setNumberOfFilmsPlayed(mt_rand(1, 28));
        $manager->persist($actor);
        $this->addReference('actor'.$i, $actor );
        $i++;

        $actor = new Actor();
        $actor->setLastName('Liam');
        $actor->setFirstName('Neeson');
        $actor->setCareerYear(mt_rand(3, 45));
        $actor->setNumberOfFilmsPlayed(mt_rand(1, 28));
        $manager->persist($actor);
        $this->addReference('actor'.$i, $actor );
        $i++;

        $actor = new Actor();
        $actor->setLastName('Ben');
        $actor->setFirstName('Kingsley');
        $actor->setCareerYear(mt_rand(3, 45));
        $actor->setNumberOfFilmsPlayed(mt_rand(1, 28));
        $manager->persist($actor);
        $this->addReference('actor'.$i, $actor );
        $i++;

        $actor = new Actor();
        $actor->setLastName('Robert');
        $actor->setFirstName('Downey');
        $actor->setCareerYear(mt_rand(3, 45));
        $actor->setNumberOfFilmsPlayed(mt_rand(1, 28));
        $manager->persist($actor);
        $this->addReference('actor'.$i, $actor );
        $i++;

        $actor = new Actor();
        $actor->setLastName('Henry');
        $actor->setFirstName('Fonda');
        $actor->setCareerYear(mt_rand(3, 45));
        $actor->setNumberOfFilmsPlayed(mt_rand(1, 28));
        $manager->persist($actor);
        $this->addReference('actor'.$i, $actor );
        $i++;

        $actor = new Actor();
        $actor->setLastName('Martin');
        $actor->setFirstName('Balsam');
        $actor->setCareerYear(mt_rand(3, 45));
        $actor->setNumberOfFilmsPlayed(mt_rand(1, 28));
        $manager->persist($actor);
        $this->addReference('actor'.$i, $actor );
        $i++;

        $actor = new Actor();
        $actor->setLastName('Dev');
        $actor->setFirstName('Patel');
        $actor->setCareerYear(mt_rand(3, 45));
        $actor->setNumberOfFilmsPlayed(mt_rand(1, 28));
        $manager->persist($actor);
        $this->addReference('actor'.$i, $actor );
        $i++;

        $actor = new Actor();
        $actor->setLastName('Quentin');
        $actor->setFirstName('Tarantino');
        $actor->setCareerYear(mt_rand(3, 45));
        $actor->setNumberOfFilmsPlayed(mt_rand(1, 28));
        $manager->persist($actor);
        $this->addReference('actor'.$i, $actor );
        $i++;

        $actor = new Actor();
        $actor->setLastName('Jamie');
        $actor->setFirstName('Foxx');
        $actor->setCareerYear(mt_rand(3, 45));
        $actor->setNumberOfFilmsPlayed(mt_rand(1, 28));
        $manager->persist($actor);
        $this->addReference('actor'.$i, $actor );
        $i++;

        $actor = new Actor();
        $actor->setLastName('Christoph');
        $actor->setFirstName('Waltz');
        $actor->setCareerYear(mt_rand(3, 45));
        $actor->setNumberOfFilmsPlayed(mt_rand(1, 28));
        $manager->persist($actor);
        $this->addReference('actor'.$i, $actor );
        $i++;

        $actor = new Actor();
        $actor->setLastName('Andrew');
        $actor->setFirstName('Garfield');
        $actor->setCareerYear(mt_rand(3, 45));
        $actor->setNumberOfFilmsPlayed(mt_rand(1, 28));
        $manager->persist($actor);
        $this->addReference('actor'.$i, $actor );
        $i++;

        $actor = new Actor();
        $actor->setLastName('Vince');
        $actor->setFirstName('Vaughn');
        $actor->setCareerYear(mt_rand(3, 45));
        $actor->setNumberOfFilmsPlayed(mt_rand(1, 28));
        $manager->persist($actor);
        $this->addReference('actor'.$i, $actor );
        $i++;

        $actor = new Actor();
        $actor->setLastName('Christian');
        $actor->setFirstName('Bale');
        $actor->setCareerYear(mt_rand(3, 45));
        $actor->setNumberOfFilmsPlayed(mt_rand(1, 28));
        $manager->persist($actor);
        $this->addReference('actor'.$i, $actor );
        $i++;

        $actor = new Actor();
        $actor->setLastName('Brad');
        $actor->setFirstName('Pitt');
        $actor->setCareerYear(mt_rand(3, 45));
        $actor->setNumberOfFilmsPlayed(mt_rand(1, 28));
        $manager->persist($actor);
        $this->addReference('actor'.$i, $actor );
        $i++;

        $actor = new Actor();
        $actor->setLastName('Albert');
        $actor->setFirstName('Dupontel');
        $actor->setCareerYear(mt_rand(3, 45));
        $actor->setNumberOfFilmsPlayed(mt_rand(1, 28));
        $manager->persist($actor);
        $this->addReference('actor'.$i, $actor );
        $i++;

        $actor = new Actor();
        $actor->setLastName('Mathew');
        $actor->setFirstName('McConaughey');
        $actor->setCareerYear(mt_rand(3, 45));
        $actor->setNumberOfFilmsPlayed(mt_rand(1, 28));
        $manager->persist($actor);
        $this->addReference('actor'.$i, $actor );
        $i++;

        $actor = new Actor();
        $actor->setLastName('Anne');
        $actor->setFirstName('Hathaway');
        $actor->setCareerYear(mt_rand(3, 45));
        $actor->setNumberOfFilmsPlayed(mt_rand(1, 28));
        $manager->persist($actor);
        $this->addReference('actor'.$i, $actor );
        $i++;

        $actor = new Actor();
        $actor->setLastName('Michael');
        $actor->setFirstName('Berryman');
        $actor->setCareerYear(mt_rand(3, 45));
        $actor->setNumberOfFilmsPlayed(mt_rand(1, 28));
        $manager->persist($actor);
        $this->addReference('actor'.$i, $actor );
        $i++;

        $actor = new Actor();
        $actor->setLastName('Mamoru');
        $actor->setFirstName('Hosada');
        $actor->setCareerYear(mt_rand(3, 45));
        $actor->setNumberOfFilmsPlayed(mt_rand(1, 28));
        $manager->persist($actor);
        $this->addReference('actor'.$i, $actor );
        $i++;

        $actor = new Actor();
        $actor->setLastName('Dean');
        $actor->setFirstName('R');
        $actor->setCareerYear(mt_rand(3, 45));
        $actor->setNumberOfFilmsPlayed(mt_rand(1, 28));
        $manager->persist($actor);
        $this->addReference('actor'.$i, $actor );
        $i++;

        $actor = new Actor();
        $actor->setLastName('Kumiko');
        $actor->setFirstName('Aso');
        $actor->setCareerYear(mt_rand(3, 45));
        $actor->setNumberOfFilmsPlayed(mt_rand(1, 28));
        $manager->persist($actor);
        $this->addReference('actor'.$i, $actor );
        $i++;

        $actor = new Actor();
        $actor->setLastName('Elijah');
        $actor->setFirstName('Wood');
        $actor->setCareerYear(mt_rand(3, 45));
        $actor->setNumberOfFilmsPlayed(mt_rand(1, 28));
        $manager->persist($actor);
        $this->addReference('actor'.$i, $actor );
        $i++;

        $actor = new Actor();
        $actor->setLastName('Sean');
        $actor->setFirstName('Astin');
        $actor->setCareerYear(mt_rand(3, 45));
        $actor->setNumberOfFilmsPlayed(mt_rand(1, 28));
        $manager->persist($actor);
        $this->addReference('actor'.$i, $actor );
        $i++;

        $actor = new Actor();
        $actor->setLastName('Hug');
        $actor->setFirstName('Jackman');
        $actor->setCareerYear(mt_rand(3, 45));
        $actor->setNumberOfFilmsPlayed(mt_rand(1, 28));
        $manager->persist($actor);
        $this->addReference('actor'.$i, $actor );
        $i++;

        $actor = new Actor();
        $actor->setLastName('Edward');
        $actor->setFirstName('Norton');
        $actor->setCareerYear(mt_rand(3, 45));
        $actor->setNumberOfFilmsPlayed(mt_rand(1, 28));
        $manager->persist($actor);
        $this->addReference('actor'.$i, $actor );

        $manager->flush();
    }
}