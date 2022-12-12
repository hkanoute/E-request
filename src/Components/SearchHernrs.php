<?php

namespace App\Components;

use App\Repository\T100Repository;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent('search_hernrs')]
class SearchHernrs
{
    use DefaultActionTrait;

    #[LiveProp(writable : true)]
    public ?string $query = null;

    public function __construct(private readonly T100Repository $t100Repository)
    {
    }

    public function getHernrs(): array
    {
        return $this->t100Repository->findByQuery($this->query);
    }

}