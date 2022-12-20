<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',TextType::class,
            [
                'attr' => ['class' => 'form-control']
            ])
            ->add('nationality',TextType::class,
            [
                'attr' => ['class' => 'form-control']
            ])
            ->add('photo', FileType::class,[
                'label' => false,
                'mapped' => false,
                'required' => true,
            
                'attr' => ['class' => 'form-control']
            
            ])
            ->add('facebookUrl',TextType::class,
            [
                'attr' => ['class' => 'form-control']
            ])
            ->add('instagramUrl',TextType::class,
            [
                'attr' => ['class' => 'form-control']
            ])
            ->add('youtubeUrl',TextType::class,
            [
                'attr' => ['class' => 'form-control']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
