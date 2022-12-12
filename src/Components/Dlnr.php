<?php

namespace App\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('dlnr')]
class Dlnr
{
    public string $dlnr;
    public string $name;

}