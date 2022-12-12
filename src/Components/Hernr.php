<?php

namespace App\Components;


use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('hernr')]
class Hernr
{
    public string $hernr;
    public string $hkz;
}