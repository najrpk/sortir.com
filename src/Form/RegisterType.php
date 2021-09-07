<?php

namespace App\Form;

use App\Entity\Participants;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pseudo',TextType::class,[
                'label'=> 'Pseudo',
                'attr' => [
                    'placeholder' => 'Saisir votre pseudo'
                ]
            ])
            ->add('prenom',TextType::class,[
                'label'=> 'Prénom',
                'attr' => [
                    'placeholder' => 'Saisir votre prénom'
                ]
            ])
            ->add('nom',TextType::class,[
                'label'=> 'Nom',
                'attr' => [
                    'placeholder' => 'Saisir votre nom'
                ]
            ])
            ->add('telephone',IntegerType::class,[
                'label'=> 'Téléphone',
                'attr' => [
                    'placeholder' => 'Saisir votre numéro de téléphone'
                ]
            ])
            ->add('email',EmailType::class,[
                'label'=> 'Email',
                'attr' => [
                    'placeholder' => 'Saisir votre email'
                ]
            ])
            ->add('password',RepeatedType::class,[
                'type'=> PasswordType::class,
                'invalid_message' => 'Le mot de passe et la confirmation doivent être identique',
                'required'=>true,
                'first_options' =>['label'=> 'Mot de passe'],
                'second_options' =>['label'=> 'Confirmez le mot de passe'],

                'attr' => [
                    'placeholder' => 'Saisir votre mot de passe'
                ]
            ])

            ->add('campus',TextType::class,[
                'label'=> 'Campus',
                'attr' => [
                    'placeholder' => 'Saisir votre campus'
                ]
            ])
            ->add('ma_photo',TextType::class,[
                'label'=> 'Photo',
                'attr' => [
                    'placeholder' => 'Télécharger votre photo'
                ]
            ])
            ->add('submit', SubmitType::class,[
                'label' => 'Enregistrer'
            ])
            ->add('autre_submit', SubmitType::class,[
                'label' => 'Annuler'
            ])







        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Participants::class,
        ]);
    }
}
