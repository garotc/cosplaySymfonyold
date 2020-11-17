<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\InscriptionSolo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\ChoiceList\ChoiceList;
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
            ->add('envoiMediaSolo')
            ->add('aideSolo')
            ->add('accessoireSolo')
            ->add('descriptionAccessoireSolo', TextareaType::class)
            ->add('infosSolo', TextareaType::class)
            //->add('user')
            ->add('categorie', ChoiceType::class,[ 'choice_name' => ChoiceList::fieldName($this, 'libelleCategorie')
            //'expanded'=>true
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
