<?php

namespace App\Form;

use App\Form\Autocomplete\T001Autocomplete;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Count;


class T001Type extends AbstractType
{
    private $data;

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $this->data = $options['data'];

        $builder
            ->add('dlnr', T001Autocomplete::class)
            ->add('designation', ChoiceType::class, [
                'autocomplete' => true,
                'choices' => $this->data,
                'choice_label' => function ($choice, $key, $value) {
                    return $value;
                },
                'multiple' => true,
                'label' => "Veuillez choisir au moins un langage",
                'label_attr' => ['class' => 'form-label'],
                'constraints' => [
                    new Count(min: 1, minMessage: 'Veuillez selectonner au moins une langage'),
                    new Count(max: 2, maxMessage: 'Veuillez selectonner au plus deux langages'),
                ],
                'attr' => [
                    'class' => 'mt-3'
                ]
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
