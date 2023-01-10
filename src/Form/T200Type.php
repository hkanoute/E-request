<?php

namespace App\Form;

use App\Form\Autocomplete\T001Autocomplete;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Count;


class T200Type extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $builder
            ->add('dlnr', T001Autocomplete::class, [
                'label' => 'Veuillez choisir un dlnr',
                'constraints' => [
                    new Count(min: 1, minMessage: 'Veuillez selectonner au moins un dlnr'),
                    //new Count(max: 1, maxMessage: 'Veuillez selectonner au plus un dlnr'),
                ],
            ])
            ->add('artnr', TextType::class, [
                'label' => 'Veuillez renseigner une référence',
                'label_attr' => ['class' => 'form-label'],
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('valider', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary mt-3'
                ]

            ]);


    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data' => null
        ]);
    }
}
