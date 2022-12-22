<?php

namespace App\Form;

use App\Entity\T100;
use App\Form\Autocomplete\T001Autocomplete;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Count;

class T203Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options,): void
    {

        $builder
            ->add('dlnr', T001Autocomplete::class, [
                'label' => 'Veuillez choisir un dlnr',
                'multiple' => true,
                'constraints' => [
                    new Count(min: 1, minMessage: 'Veuillez selectonner au moins un dlnr'),
                    new Count(max: 1, maxMessage: 'Veuillez selectonner au plus un dlnr'),
                ],
            ])
            ->add('Fournisseur', ChoiceType::class, [
                'label' => 'Veuillez choisir le type de fournisseur',
                'choices' => [
                    'Veuillez choisir une marque' => '3',
                    'Equipementier' => '1',
                    'Constructeur' => '0',
                ],
                'choice_attr' => function ($choice, $key, $index) {
                    if ($index === 0 ) {
                        return ['disabled' => true];
                    }
                    return [];
                },
                'placeholder' => false,
                'multiple' => false,
                'label_attr' => ['class' => 'form-label'],
                'attr' => [
                    'class' => 'form-control',
                ]
            ])
            ->add('Marque', TextType::class, [
                'label' => 'Veuillez choisir la marque',
                'label_attr' => ['class' => 'form-label'],
                'attr' => [
                    'class' => 'form-control',
                    'list' => 't203_choice',
                    'value' => ''
                ]
            ])
            ->add('valider', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary mt-5',
                ],


            ]);

    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data' => null
        ]);
    }

}