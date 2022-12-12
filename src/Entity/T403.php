<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t403
 *
 * @ORM\Table(name="tecdoc.t403", indexes={@ORM\Index(name="idxt403_vknzielnr2102", columns={"vknzielnr"}), @ORM\Index(name="idxt403_vknzielart2102", columns={"vknzielart"}), @ORM\Index(name="idxt403_lfdnr2102", columns={"lfdnr"}), @ORM\Index(name="idxt403_genartnr2102", columns={"genartnr"}), @ORM\Index(name="idxt403_dlnr2102", columns={"dlnr"}), @ORM\Index(name="idxt403_artnr2102", columns={"artnr", "dlnr"})})
 * @ORM\Entity(repositoryClass="App\Repository\T403Repository")
 */
class T403
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
     * @ORM\Column(name="genartnr", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $genartnr;

    /**
     * @var string
     *
     * @ORM\Column(name="vknzielart", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $vknzielart;

    /**
     * @var int
     *
     * @ORM\Column(name="vknzielnr", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $vknzielnr;

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
     * @ORM\Column(name="lkz", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $lkz;

    /**
     * @var string
     *
     * @ORM\Column(name="sa", type="string", length=3, nullable=false)
     */
    private $sa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="exclude", type="string", length=1, nullable=true)
     */
    private $exclude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="losch_flag", type="string", length=1, nullable=true)
     */
    private $loschFlag;

    public function getArtnr(): ?string
    {
        return $this->artnr;
    }

    public function getDlnr(): ?string
    {
        return $this->dlnr;
    }

    public function getGenartnr(): ?string
    {
        return $this->genartnr;
    }

    public function getVknzielart(): ?string
    {
        return $this->vknzielart;
    }

    public function getVknzielnr(): ?int
    {
        return $this->vknzielnr;
    }

    public function getLfdnr(): ?string
    {
        return $this->lfdnr;
    }

    public function getLkz(): ?string
    {
        return $this->lkz;
    }

    public function getSa(): ?string
    {
        return $this->sa;
    }

    public function setSa(string $sa): self
    {
        $this->sa = $sa;

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

    public function getLoschFlag(): ?string
    {
        return $this->loschFlag;
    }

    public function setLoschFlag(?string $loschFlag): self
    {
        $this->loschFlag = $loschFlag;

        return $this;
    }


}
