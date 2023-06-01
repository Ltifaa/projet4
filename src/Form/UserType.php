<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', TextType::class)
            ->add('plainPassword', PasswordType::class, [
                'mapped' => false,
                "required"=>false
            ])
            ->remove('roles')
            ->remove('password')
            ->remove('isVerified')
            ->add('firstName')
            ->add('lastName')
            ->add('imageName')
            ->add('delivery', null, [
                'format' => 'dd-MM-yyyy',
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
