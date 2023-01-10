<?php

namespace App\Form\Autocomplete;

use App\Entity\T001;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Count;
use Symfony\UX\Autocomplete\Form\AsEntityAutocompleteField;
use Symfony\UX\Autocomplete\Form\ParentEntityAutocompleteType;

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
                new Count(min: 1, minMessage: 'Veuillez selectonner au moins une marque'),
            ],
           'class' => T001::class
        ]);
    }

    public function getParent(): string
    {
        return ParentEntityAutocompleteType::class;
    }
}
