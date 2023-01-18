<?php

namespace App\Form;

use App\Form\Autocomplete\T001Autocomplete;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Count;


class Image360Type extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $this->data = $options['data'];

        $builder
            ->add('reference', TextType::class, [
                'label' => 'Référence',

                'attr' => [
                    'placeholder' => 'Veuillez indiquer une référence',
                    'class' => 'form-control',
                    'required' => true
                ],
            ])
            ->add('Valider', SubmitType::class, [
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
