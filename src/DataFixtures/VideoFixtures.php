<?php

namespace App\DataFixtures;

use App\Entity\Video;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class VideoFixtures extends Fixture
{
    public const YOGA_PRENATAL = "yoga-prénatal";
    public const EXERCICE_AEROBIQUE = "exercices-aerobiques";
    public const GYM = "Gym";
    public const MEILLEURS_EXERCICES = "meilleurs-exercices";
    public const COURS_DE_PREPARATION = "cours-de-preparation";
    public const CHANT_PRRENATAL = "Chant-prénatal";
    public const LA_SOPHROLOGIE = "la-sophrologie";
    public const MASSAGE_PRENATAL = "massage-prénatal";
    public const DEORESSION = "depression";
    public const BABY_BLUE = "baby-blues";
    public const POST_PARTUM_SYMPPTOME = "post-partum-symptômes";
    public const POST_PARTUM_PAPA = "Post partum papa";
    public const LES_POSITION_DE_L_ALAITEMENT = "les-positions-de-l-alaitement";
    public const DIFICULTES_D_ALLAITEMENT_ET_SOULUTIONS = "difficultes-d-allaitement-et-solutions";
    public const CONSEILS_ALLAITEMENT_MIXTE = "conseils-allaitement-mixte";
    public const DUREE_ET_QUANTITE_D_ALLAITEMENT = "duree-et-quantité-d-allaitement";
    public const LALIMENTS_INTERDITS_ET_DECONSEILLES = "Aliments-interdits-et-déconseilles";
    public const BIEN_MANGER = "bien-manger";
    public const QUOI_MANGER = "quoi-manger";
    public const REGIME_ALIMENTAIRE = "regime -alimentaire";

    
    

    public function load(ObjectManager $manager): void
    {
        $video = new Video();
        $video->setTitle('Yoga prénatal');
        $video->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat');
        //$video->setTime('');
        $video->setSlug('yoga-prenatal');
        $video->setCategorie($this->getReference(CategorieFixtures::EXERCICES_POUR_FEMMES_ENCEINTES));
        $video->addSponsor($this->getReference(SponsorFixtures::LA_MAISON_DES_MATERNELLES));
        $manager->persist($video);
        
        $video = new Video();
        $video->setTitle('Exercices aérobiques');
        $video->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat');
        //$video->setTime('');
        $video->setSlug('exercices-aerobiques');
        $video->setCategorie($this->getReference(CategorieFixtures::EXERCICES_POUR_FEMMES_ENCEINTES));
        $video->addSponsor($this->getReference(SponsorFixtures::LA_BOITE_ROSE));
        $manager->persist($video);

        $video = new Video();
        $video->setTitle('Gym');
        $video->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat');
        //$video->setTime('');
        $video->setSlug('gym');
        $video->setCategorie($this->getReference(CategorieFixtures::EXERCICES_POUR_FEMMES_ENCEINTES));
        $video->addSponsor($this->getReference(SponsorFixtures::LA_BOITE_ROSE));
        $manager->persist($video);

        $video = new Video();
        $video->setTitle('Meilleurs exercices');
        $video->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat');
        //$video->setTime('');
        $video->setSlug('meilleurs-exercices');
        $video->setCategorie($this->getReference(CategorieFixtures::EXERCICES_POUR_FEMMES_ENCEINTES));
        $video->addSponsor($this->getReference(SponsorFixtures::VERTBAUDET));
        $manager->persist($video);
        
        $video = new Video();
        $video->setTitle('Cours de préparation');
        $video->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat');
        //$video->setTime('');
        $video->setSlug('cours-de-preparation');
        $video->setCategorie($this->getReference(CategorieFixtures::PREPARATION_A_L_ACCOUCHEMENT));
        $video->addSponsor($this->getReference(SponsorFixtures::VERTBAUDET));
        $manager->persist($video);

        $video = new Video();
        $video->setTitle('Chant prénatal');
        $video->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat');
        $video->setTime('');
        $video->setSlug('chant-prenatal');
        $video->setCategorie($this->getReference(CategorieFixtures::PREPARATION_A_L_ACCOUCHEMENT));
        $video->addSponsor($this->getReference(SponsorFixtures::GUIGOZ));
        $manager->persist($video);
        $manager->flush();

        $video = new Video();
        $video->setTitle('la sophrologie');
        $video->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat');
        $video->setTime('');
        $video->setSlug('la-sophrologie');
        $video->setCategorie($this->getReference(CategorieFixtures::PREPARATION_A_L_ACCOUCHEMENT));
        $video->addSponsor($this->getReference(SponsorFixtures::PAMPERS));
        $manager->persist($video);
        $manager->flush();
        
        $video = new Video();
        $video->setTitle('massage-prénatal');
        $video->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat');
        $video->setTime('');
        $video->setSlug('massage-prenatal');
        $video->setCategorie($this->getReference(CategorieFixtures::PREPARATION_A_L_ACCOUCHEMENT));
        $video->addSponsor($this->getReference(SponsorFixtures::KLORANE));
        $manager->persist($video);
        $manager->flush();
        
        $video = new Video();
        $video->setTitle('Dépression');
        $video->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat');
        $video->setTime('');
        $video->setSlug('depression');
        $video->setCategorie($this->getReference(CategorieFixtures::POST_PARTUM));
        $video->addSponsor($this->getReference(SponsorFixtures::KLORANE));
        $manager->persist($video);
        $manager->flush();
        
        $video = new Video();
        $video->setTitle('Baby blues');
        $video->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat');
        $video->setTime('');
        $video->setSlug('baby-blues');
        $video->setCategorie($this->getReference(CategorieFixtures::POST_PARTUM));
        $video->addSponsor($this->getReference(SponsorFixtures::KLORANE));
        $manager->persist($video);
        $manager->flush();

        $video = new Video();
        $video->setTitle('Post partum symptômes');
        $video->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat');
        //$video->setTime('');
        $video->setSlug('post-partum-symptômes');
        $video->setCategorie($this->getReference(CategorieFixtures::POST_PARTUM));
        $video->addSponsor($this->getReference(SponsorFixtures::MUSTELA));
        $manager->persist($video);
        
        $video = new Video();
        $video->setTitle('Post partum papa');
        $video->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat');
        //$video->setTime('');
        $video->setSlug('post-partum-papa');
        $video->setCategorie($this->getReference(CategorieFixtures::POST_PARTUM));
        $video->addSponsor($this->getReference(SponsorFixtures::VERTBAUDET));
        $manager->persist($video);

        $video = new Video();
        $video->setTitle("Les positions de l'alaitement");
        $video->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat');
        //$video->setTime('');
        $video->setSlug('les-positions-de-l-alaitement');
        $video->setCategorie($this->getReference(CategorieFixtures::CONSEILS_POUR_L_ALLAITEMENT));
        $video->addSponsor($this->getReference(SponsorFixtures::GUIGOZ));
        $manager->persist($video);

        $video = new Video();
        $video->setTitle("Difficultés d'allaitement et solutions");
        $video->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat');
        //$video->setTime('');
        $video->setSlug('difficultes-d-allaitement-et-solutions');
        $video->setCategorie($this->getReference(CategorieFixtures::CONSEILS_POUR_L_ALLAITEMENT));
        $video->addSponsor($this->getReference(SponsorFixtures::MUSTELA));
        $manager->persist($video);

        $video = new Video();
        $video->setTitle("Conseils allaitement mixte");
        $video->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat');
        //$video->setTime('');
        $video->setSlug('conseils-allaitement-mixte');
        $video->setCategorie($this->getReference(CategorieFixtures::CONSEILS_POUR_L_ALLAITEMENT));
        $video->addSponsor($this->getReference(SponsorFixtures::LA_BOITE_ROSE));
        $manager->persist($video);

        $video = new Video();
        $video->setTitle("durée et quantité d'allaitement");
        $video->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat');
        //$video->setTime('');
        $video->setSlug('duree-et-quantite-d-allaitement');
        $video->setCategorie($this->getReference(CategorieFixtures::CONSEILS_POUR_L_ALLAITEMENT));
        $video->addSponsor($this->getReference(SponsorFixtures::LA_BOITE_ROSE));
        $manager->persist($video);

        $video = new Video();
        $video->setTitle("Aliments interdits et déconseillés");
        $video->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat');
        //$video->setTime('');
        $video->setSlug('Aliments-interdits-et-deconseilles');
        $video->setCategorie($this->getReference(CategorieFixtures::ALIMENTATION_PENDANT_LA_GROSSESSE));
        $video->addSponsor($this->getReference(SponsorFixtures::GUIGOZ));
        $manager->persist($video);
        $video = new Video();

        $video->setTitle("Bien manger");
        $video->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat');
        //$video->setTime('');
        $video->setSlug('bien-manger');
        $video->setCategorie($this->getReference(CategorieFixtures::ALIMENTATION_PENDANT_LA_GROSSESSE));
        $video->addSponsor($this->getReference(SponsorFixtures::LA_MAISON_DES_MATERNELLES));
        $manager->persist($video);
        
        $video->setTitle("Quoi manger");
        $video->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat');
        //$video->setTime('');
        $video->setSlug('quoi-manger');
        $video->setCategorie($this->getReference(CategorieFixtures::ALIMENTATION_PENDANT_LA_GROSSESSE));
        $video->addSponsor($this->getReference(SponsorFixtures::LA_MAISON_DES_MATERNELLES));
        $manager->persist($video);
        
        $video->setTitle("Régime alimentaire");
        $video->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat');
        //$video->setTime('');
        $video->setSlug('regime -alimentaire');
        $video->setCategorie($this->getReference(CategorieFixtures::ALIMENTATION_PENDANT_LA_GROSSESSE));
        $video->addSponsor($this->getReference(SponsorFixtures::LA_BOITE_ROSE));
        $manager->persist($video);




        $manager->flush();


        







      








        
    }
}
