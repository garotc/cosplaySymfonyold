<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\InscriptionSolo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class InscriptionSoloFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('createdAt')
            ->add('nomPersoSolo', TextType::class)
            ->add('univerSolo', TextType::class)
            ->add('mediaSolo', ChoiceType::class, [
                'choices'  => [
                    'Musique' => true,
                    'Video' => false,
                ],
            ])
            ->add('envoiMediaSolo', ChoiceType::class,[
                'choices'=>[
                    'Avant mon entrée'=> true,
                    'Après mon entrée'=>false
                ]
            ])
            ->add('aideSolo')
            ->add('accessoireSolo')
            ->add('descriptionAccessoireSolo', TextareaType::class)
            ->add('infosSolo', TextareaType::class)
            //->add('user')
            ->add('categorie',EntityType::class,[
                'class'=>Categorie::class,
            'choice_label'=>'libelleCategorie',
            'multiple'=>false, //choisir plusieurs catégories
            'expanded'=>false
            ])
            ->add('Enregistrer', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => InscriptionSolo::class,
        ]);
    }
}
