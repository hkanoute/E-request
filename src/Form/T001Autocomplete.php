<?php

namespace App\Form;

use App\Entity\T001;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Count;
use Symfony\UX\Autocomplete\Form\ParentEntityAutocompleteType;
use Symfony\UX\Autocomplete\Form\AsEntityAutocompleteField;

#[AsEntityAutocompleteField]
class T001Autocomplete extends AbstractType
{

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'label' => 'Veuillez choisir au moins un dlnr',
            "choice_label" => 'marke',
            'multiple' => true,
            'constraints' => [
                new Count(min: 1, minMessage: 'We need to eat *something*'),
            ],
           'class' => T001::class
        ]);
    }

    public function getParent(): string
    {
        return ParentEntityAutocompleteType::class;
    }
}
