<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t205
 *
 * @ORM\Table(name="tecdoc.t205", indexes={@ORM\Index(name="idxt205_dlnr2102", columns={"dlnr"}), @ORM\Index(name="idxt205_artnr2102", columns={"artnr", "dlnr"})})
 * @ORM\Entity(repositoryClass="App\Repository\T205Repository")
 */
class T205
{
    /**
     * @var string
     *
     * @ORM\Column(name="artnr", type="string", length=22, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $artnr;

    /**
     * @var string
     *
     * @ORM\Column(name="dlnr", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dlnr;

    /**
     * @var string
     *
     * @ORM\Column(name="partgenartnr", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $partgenartnr;

    /**
     * @var string
     *
     * @ORM\Column(name="lfdnr", type="string", length=9, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $lfdnr;

    /**
     * @var string
     *
     * @ORM\Column(name="partnr", type="string", length=22, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $partnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sa", type="string", length=3, nullable=true)
     */
    private $sa;

    /**
     * @var int|null
     *
     * @ORM\Column(name="menge", type="integer", nullable=true)
     */
    private $menge;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lflag", type="string", length=1, nullable=true)
     */
    private $lflag;

    public function getArtnr(): ?string
    {
        return $this->artnr;
    }

    public function getDlnr(): ?string
    {
        return $this->dlnr;
    }

    public function getPartgenartnr(): ?string
    {
        return $this->partgenartnr;
    }

    public function getLfdnr(): ?string
    {
        return $this->lfdnr;
    }

    public function getPartnr(): ?string
    {
        return $this->partnr;
    }

    public function getSa(): ?string
    {
        return $this->sa;
    }

    public function setSa(?string $sa): self
    {
        $this->sa = $sa;

        return $this;
    }

    public function getMenge(): ?int
    {
        return $this->menge;
    }

    public function setMenge(?int $menge): self
    {
        $this->menge = $menge;

        return $this;
    }

    public function getLflag(): ?string
    {
        return $this->lflag;
    }

    public function setLflag(?string $lflag): self
    {
        $this->lflag = $lflag;

        return $this;
    }


}
