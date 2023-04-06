<?php

namespace App\Form;

use App\Entity\Auteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;


class AuteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class,[
                'label' =>'Email de l\'auteur',
                'required' => true
            ])
            ->add('nom', TextType::class,[
                'label' =>'Nom de l\'auteur',
                'required' => true
            ])
            ->add('prenom', TextType::class,[
                'label' =>'Prénom de l\'auteur',
                'required' => true
            ])
           
            ->add('adresse', TextType::class,[
                'label' =>'Adresse de l\'auteur',
                'required' => true
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Auteur::class,
        ]);
    }
}
