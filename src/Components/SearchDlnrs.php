<?php
namespace App\Components;

use App\Repository\T001Repository;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent('search_dlnrs')]
class SearchDlnrs
{
    use DefaultActionTrait;

    #[LiveProp(writable : true)]
    public ?string $query = null;

    public function __construct(private readonly T001Repository $t001Repository)
    {
    }

    public function getDlnrs(): array
    {
        return $this->t001Repository->findByQuery($this->query);
    }
}