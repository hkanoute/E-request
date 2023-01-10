<?php

namespace App\Form\Autocomplete;

use App\Entity\T100;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\UX\Autocomplete\Form\AsEntityAutocompleteField;
use Symfony\UX\Autocomplete\Form\ParentEntityAutocompleteType;

#[AsEntityAutocompleteField]
class T100AutocompleteField extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        // lang , genartnr , dlnr

        $resolver->setDefaults([
            'class' => T100::class,
            'label' => 'Veuillez choisir au moins un Hkz',
            'choice_label' => 'hkz',
            'multiple' => true


            //'security' => 'ROLE_SOMETHING',
        ]);
    }

    public function getParent(): string
    {
        return ParentEntityAutocompleteType::class;
    }
}
