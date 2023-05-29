<?php

namespace App\DataFixtures;

use App\Entity\Sponsor;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class SponsorFixtures extends Fixture
{

    public const PAMPERS = "pampers";
    public const VERTBAUDET = "vertbaudet";
    public const LA_MAISON_DES_MATERNELLES = "la-maison-des-maternelles";
    public const LA_BOITE_ROSE = "la-boite-rose";
    public const MUSTELA = "mustela";
    public const KLORANE = "klorane";
    public const GUIGOZ = "guigoz";
    public function load(ObjectManager $manager): void
    {
        $sponsor = new Sponsor();
        $sponsor->setName("Pampers");
        $sponsor->setImageName("pampers.jpg");
        $sponsor->setSiteWeb("www.pampers.fr");
        $sponsor->setSlug("pampers");
        $manager->persist($sponsor);
        $this->addReference(self::PAMPERS, $sponsor);

        $sponsor = new Sponsor();
        $sponsor->setName("La boîte rose");
        $sponsor->setImageName("laboiterose.jpg");
        $sponsor->setSiteWeb("www.laboiterose.fr");
        $sponsor->setSlug("la-boite-rose");
        $manager->persist($sponsor);
        $this->addReference(self::LA_BOITE_ROSE, $sponsor);
       

        $sponsor = new Sponsor();
        $sponsor->setName("Vertbaudet");
        $sponsor->setImageName("vertbaudet.jpg");
        $sponsor->setSiteWeb("www.vertbaudet.fr");
        $sponsor->setSlug("vertbaudet");
        $manager->persist($sponsor);
        $this->addReference(self::VERTBAUDET, $sponsor);
    



        $sponsor = new Sponsor();
        $sponsor->setName("La Maison des Maternelles");
        $sponsor->setImageName("lamaisondesmaternelles.jpg");
        $sponsor->setSiteWeb("https://www.lamaisondesmaternelles.fr/");
        $sponsor->setSlug("la-maison-des-maternelles");
        $manager->persist($sponsor);
        $this->addReference(self::LA_MAISON_DES_MATERNELLES, $sponsor);

        $sponsor = new Sponsor();
        $sponsor->setName("Klorane");
        $sponsor->setImageName("klorane.jpg");
        $sponsor->setSiteWeb("www.klorane.fr");
        $sponsor->setSlug("klorane");
        $manager->persist($sponsor);
        $this->addReference(self::KLORANE, $sponsor);

        $sponsor = new Sponsor();
        $sponsor->setName("Mustela");
        $sponsor->setImageName("mustela.jpg");
        $sponsor->setSiteWeb("www.mustela.fr");
        $sponsor->setSlug("mustela");
        $manager->persist($sponsor);
        $this->addReference(self::MUSTELA, $sponsor);

        $sponsor = new Sponsor();
        $sponsor->setName("Guigoz");
        $sponsor->setImageName("guigoz.jpg");
        $sponsor->setSiteWeb("www.guigoz.fr");
        $sponsor->setSlug("guigoz");
        $manager->persist($sponsor);
        $this->addReference(self::GUIGOZ, $sponsor);
        $manager->flush();
    }
}
