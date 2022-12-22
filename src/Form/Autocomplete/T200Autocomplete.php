<?php

namespace App\Form\Autocomplete;

use App\Entity\T200;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Count;
use Symfony\UX\Autocomplete\Form\AsEntityAutocompleteField;
use Symfony\UX\Autocomplete\Form\ParentEntityAutocompleteType;

#[AsEntityAutocompleteField]
class T200Autocomplete extends AbstractType
{

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'label' => 'Veuillez choisir un dlnr',
            "choice_label" => 'artnr',
            'multiple' => false,
            'constraints' => [
                new Count(min: 1, minMessage: 'Veuillez selectonner au moins un artnr'),
            ],
           'class' => T200::class
        ]);
    }

    public function getParent(): string
    {
        return ParentEntityAutocompleteType::class;
    }
}
