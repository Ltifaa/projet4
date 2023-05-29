<?php

namespace App\DataFixtures;

use App\Entity\Video;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class VideoFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $video = new Video();
        $video->setTitle('Yoga prénatal');
        $video->setDescription('Lorem opsum');
        $video->setTime();
        $video->setSlug('yoga-prénatal');
        $video->setSponsor('');
        $video->setCategorie('');



        $manager->persist($video);

        $manager->flush();
    }
}
