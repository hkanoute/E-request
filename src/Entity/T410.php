<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t410
 *
 * @ORM\Table(name="tecdoc.t410", indexes={@ORM\Index(name="idxt410_vknzielnr2102", columns={"vknzielnr"}), @ORM\Index(name="idxt410_vknzielart2102", columns={"vknzielart"}), @ORM\Index(name="idxt410_lfdnr2102", columns={"lfdnr"}), @ORM\Index(name="idxt410_genartnr2102", columns={"genartnr"}), @ORM\Index(name="idxt410_dlnr2102", columns={"dlnr"}), @ORM\Index(name="idxt410_artnr2102", columns={"artnr", "dlnr"})})
 * @ORM\Entity(repositoryClass="App\Repository\T410Repository")
 */
class T410
{
    /**
     * @var string
     *
     * @ORM\Column(name="artnr", type="string", length=22, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tecdoc.t410_artnr_seq", allocationSize=1, initialValue=1)
     */
    private $artnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dlnr", type="string", length=4, nullable=true)
     */
    private $dlnr;

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
     * @ORM\Column(name="vknzielart", type="string", length=3, nullable=true)
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
     * @ORM\Column(name="sortnr", type="string", length=3, nullable=true)
     */
    private $sortnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kritnr", type="string", length=4, nullable=true)
     */
    private $kritnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kritwert", type="string", length=20, nullable=true)
     */
    private $kritwert;

    /**
     * @var string|null
     *
     * @ORM\Column(name="anzsofort", type="string", length=1, nullable=true)
     */
    private $anzsofort;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lkz", type="string", length=3, nullable=true)
     */
    private $lkz;

    /**
     * @var string|null
     *
     * @ORM\Column(name="exclude", type="string", length=1, nullable=true)
     */
    private $exclude;

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

    /**
     * @param string $artnr
     */
    public function setArtnr(string $artnr): void
    {
        $this->artnr = $artnr;
    }

    public function getDlnr(): ?string
    {
        return $this->dlnr;
    }

    public function setDlnr(?string $dlnr): self
    {
        $this->dlnr = $dlnr;

        return $this;
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

    public function getGenartnr(): ?string
    {
        return $this->genartnr;
    }

    public function setGenartnr(?string $genartnr): self
    {
        $this->genartnr = $genartnr;

        return $this;
    }

    public function getVknzielart(): ?string
    {
        return $this->vknzielart;
    }

    public function setVknzielart(?string $vknzielart): self
    {
        $this->vknzielart = $vknzielart;

        return $this;
    }

    public function getVknzielnr(): ?int
    {
        return $this->vknzielnr;
    }

    public function setVknzielnr(?int $vknzielnr): self
    {
        $this->vknzielnr = $vknzielnr;

        return $this;
    }

    public function getLfdnr(): ?string
    {
        return $this->lfdnr;
    }

    public function setLfdnr(?string $lfdnr): self
    {
        $this->lfdnr = $lfdnr;

        return $this;
    }

    public function getSortnr(): ?string
    {
        return $this->sortnr;
    }

    public function setSortnr(?string $sortnr): self
    {
        $this->sortnr = $sortnr;

        return $this;
    }

    public function getKritnr(): ?string
    {
        return $this->kritnr;
    }

    public function setKritnr(?string $kritnr): self
    {
        $this->kritnr = $kritnr;

        return $this;
    }

    public function getKritwert(): ?string
    {
        return $this->kritwert;
    }

    public function setKritwert(?string $kritwert): self
    {
        $this->kritwert = $kritwert;

        return $this;
    }

    public function getAnzsofort(): ?string
    {
        return $this->anzsofort;
    }

    public function setAnzsofort(?string $anzsofort): self
    {
        $this->anzsofort = $anzsofort;

        return $this;
    }

    public function getLkz(): ?string
    {
        return $this->lkz;
    }

    public function setLkz(?string $lkz): self
    {
        $this->lkz = $lkz;

        return $this;
    }

    public function getExclude(): ?string
    {
        return $this->exclude;
    }

    public function setExclude(?string $exclude): self
    {
        $this->exclude = $exclude;

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
