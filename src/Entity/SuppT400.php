<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Supplier4337.t400
 *
 * @ORM\Table(name="supplier_4337.t400")
 * @ORM\Entity(repositoryClass="App\Repository\SuppT400Repository")
 */
class SuppT400
{
    /**
     * @var string
     *
     * @ORM\Column(name="dlnr", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="supplier_4337.t400_dlnr_seq", allocationSize=1, initialValue=1)
     */
    private $dlnr;

    /**
     * @return string
     */
    public function getDlnr(): string
    {
        return $this->dlnr;
    }

    /**
     * @param string $dlnr
     */
    public function setDlnr(string $dlnr): void
    {
        $this->dlnr = $dlnr;
    }

    /**
     * @return string|null
     */
    public function getArtnr(): ?string
    {
        return $this->artnr;
    }

    /**
     * @param string|null $artnr
     */
    public function setArtnr(?string $artnr): void
    {
        $this->artnr = $artnr;
    }

    /**
     * @return string|null
     */
    public function getSa(): ?string
    {
        return $this->sa;
    }

    /**
     * @param string|null $sa
     */
    public function setSa(?string $sa): void
    {
        $this->sa = $sa;
    }

    /**
     * @return string|null
     */
    public function getGenartnr(): ?string
    {
        return $this->genartnr;
    }

    /**
     * @param string|null $genartnr
     */
    public function setGenartnr(?string $genartnr): void
    {
        $this->genartnr = $genartnr;
    }

    /**
     * @return string|null
     */
    public function getVknzielart(): ?string
    {
        return $this->vknzielart;
    }

    /**
     * @param string|null $vknzielart
     */
    public function setVknzielart(?string $vknzielart): void
    {
        $this->vknzielart = $vknzielart;
    }

    /**
     * @return int|null
     */
    public function getVknzielnr(): ?int
    {
        return $this->vknzielnr;
    }

    /**
     * @param int|null $vknzielnr
     */
    public function setVknzielnr(?int $vknzielnr): void
    {
        $this->vknzielnr = $vknzielnr;
    }

    /**
     * @return string|null
     */
    public function getLfdnr(): ?string
    {
        return $this->lfdnr;
    }

    /**
     * @param string|null $lfdnr
     */
    public function setLfdnr(?string $lfdnr): void
    {
        $this->lfdnr = $lfdnr;
    }

    /**
     * @return string|null
     */
    public function getLflag(): ?string
    {
        return $this->lflag;
    }

    /**
     * @param string|null $lflag
     */
    public function setLflag(?string $lflag): void
    {
        $this->lflag = $lflag;
    }

    /**
     * @var string|null
     *
     * @ORM\Column(name="artnr", type="string", length=22, nullable=true)
     */
    private $artnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sa", type="string", length=3, nullable=true)
     */
    private $sa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="genartnr", type="string", length=5, nullable=true)
     */
    private $genartnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vknzielart", type="string", length=9, nullable=true)
     */
    private $vknzielart;

    /**
     * @var int|null
     *
     * @ORM\Column(name="vknzielnr", type="integer", nullable=true)
     */
    private $vknzielnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lfdnr", type="string", length=9, nullable=true)
     */
    private $lfdnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lflag", type="string", length=9, nullable=true)
     */
    private $lflag;


}
