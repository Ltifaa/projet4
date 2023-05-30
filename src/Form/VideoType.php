<?php

namespace App\Form;

use App\Entity\Video;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class VideoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('description', CKEditorType::class)
            ->add('updatedAt', DateTimeType::class,[ 
                'widget' => 'single_text',
                'data' => new \DateTimeImmutable(),
            ])
            ->add('time')
            ->add('sponsor', EntityType::class,
            ['class' => 'App\Entity\Sponsor', 'expanded' => true])
            ->remove('slug')
            ->add('categorie', EntityType::class,['class' => 'App\Entity\Categorie'])
            // ->remove('relation')
            // ->add('imageFile', FileType::class, [
            //     'required' =>false,
            //     'label' => 'Image de la catégorie'

            // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Video::class,
        ]);
    }
}
