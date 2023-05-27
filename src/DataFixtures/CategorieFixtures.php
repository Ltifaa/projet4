<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CategorieFixtures extends Fixture
{
    public const EXERCICES_POUR_FEMMES_ENCEINTES = 'exercices-pour-femmes-enceintes';
    public const PREPARATION_A_L_ACCOUCHEMENT = 'preparation-a-l-accouchement';
    public const POST_PARTUM = 'post partum';
    public const CONSEILS_POUR_L_ALLAITEMENT = "conseils-pour-l-alaitement";
    public const ALIMENTATION_PENDANT_LA_GROSSESSE = "alimentation-pendant-la-grossesse";
    public function load(ObjectManager $manager):void
    {
        $categorie = new Categorie();
        $categorie->setTitle("Exercices pour femmes enceintes");
        $categorie->setImageName("lorem ipsum");
        $categorie->setDescription("Lorum ipsum");
        $categorie->setSlug("exercices-pour-femmes-enceintes");
        $manager->persist($categorie);
        $this->addReference(self::EXERCICES_POUR_FEMMES_ENCEINTES,$categorie);

        $categorie = new Categorie();
        $categorie->setTitle("Préparation à l'accouchement");
        $categorie->setImageName("lorem ipsum");
        $categorie->setDescription("Lorum ipsum");
        $categorie->setSlug("preparation-a-l-accouchement");
        $manager->persist($categorie);
        $this->addReference(self::PREPARATION_A_L_ACCOUCHEMENT,$categorie);

        $categorie = new Categorie();
        $categorie->setTitle("Post partum");
        $categorie->setImageName("lorem ipsum");
        $categorie->setDescription("Lorum ipsum");
        $categorie->setSlug("post-partum");
        $manager->persist($categorie);
        $this->addReference(self::POST_PARTUM,$categorie);

        $categorie = new Categorie();
        $categorie->setTitle("Conseils pour l'allaitement");
        $categorie->setImageName("lorem ipsum");
        $categorie->setDescription("Lorum ipsum");
        $categorie->setSlug("conseils-pour-l-allaitement");
        $manager->persist($categorie);
        $this->addReference(self::CONSEILS_POUR_L_ALLAITEMENT,$categorie);

        $categorie = new Categorie();
        $categorie->setTitle("Alimentation pendant la grossesse");
        $categorie->setImageName("lorem ipsum");
        $categorie->setDescription("Lorum ipsum");
        $categorie->setSlug("alimentation-pendant-la-grossesse");
        $manager->persist($categorie);
        $this->addReference(self::ALIMENTATION_PENDANT_LA_GROSSESSE,$categorie);

        $manager->flush();
    }
}
