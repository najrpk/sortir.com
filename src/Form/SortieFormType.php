<?php

namespace App\Form;

use App\Entity\Sortie;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SortieFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('datedebut')
            ->add('datecloture')
            ->add('nbinscription')
            ->add('descriptioninfos')
            ->add('etatsortie')
            ->add('urlPhoto')
            ->add('nomLieu', EntityType::class, [
                'class' => 'App\Entity\Lieux',
                'mapped' => false,
            ])
            ->add('rue', EntityType::class, [
                'class' => 'App\Entity\Lieux',
                'mapped' => false,
            ])
            ->add('latitude', EntityType::class, [
                'class' => 'App\Entity\Lieux',
                'mapped' => false,
            ])
            ->add('longitude', EntityType::class, [
                'class' => 'App\Entity\Lieux',
                'mapped' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Sortie::class,
        ]);
    }
}
