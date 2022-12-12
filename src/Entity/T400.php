<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t400
 *
 * @ORM\Table(name="tecdoc.t400", indexes={@ORM\Index(name="idxt400_vknzielnr2102", columns={"vknzielnr"}), @ORM\Index(name="idxt400_vknzielart2102", columns={"vknzielart"}), @ORM\Index(name="idxt400_lfdnr2102", columns={"lfdnr"}), @ORM\Index(name="idxt400_genartnr2102", columns={"genartnr"}), @ORM\Index(name="idxt400_dlnr2102", columns={"dlnr"}), @ORM\Index(name="idxt400_artnr2102", columns={"artnr", "dlnr"})})
 * @ORM\Entity(repositoryClass="App\Repository\T400Repository")
 */
class T400
{
    /**
     * @var string
     *
     * @ORM\Column(name="artnr_dlnr_genartnr_vknzielart_vknzielnr_lfdnr", type="string", length=52, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tecdoc.t400_artnr_dlnr_genartnr_vknzielart_vknzielnr_lfdnr_seq", allocationSize=1, initialValue=1)
     */
    private $artnrDlnrGenartnrVknzielartVknzielnrLfdnr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="vknzielnr", type="integer", nullable=true)
     */
    private $vknzielnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="genartnr", type="string", length=5, nullable=true)
     */
    private $genartnr;

    /**
     * @var string
     *
     * @ORM\Column(name="sa", type="string", length=3, nullable=false)
     */
    private $sa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lflag", type="string", length=1, nullable=true)
     */
    private $lflag;

    /**
     * @var string
     *
     * @ORM\Column(name="vknzielart", type="string", length=3, nullable=false)
     */
    private $vknzielart;

    /**
     * @var string
     *
     * @ORM\Column(name="lfdnr", type="string", length=9, nullable=false)
     */
    private $lfdnr;

    /**
     *
     * @ORM\ManyToOne(targetEntity="T200")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="artnr", referencedColumnName="artnr"),
     *   @ORM\JoinColumn(name="dlnr", referencedColumnName="dlnr")
     * })
     */
    private $artnr;

    public function getArtnrDlnrGenartnrVknzielartVknzielnrLfdnr(): ?string
    {
        return $this->artnrDlnrGenartnrVknzielartVknzielnrLfdnr;
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

    public function getGenartnr(): ?string
    {
        return $this->genartnr;
    }

    public function setGenartnr(?string $genartnr): self
    {
        $this->genartnr = $genartnr;

        return $this;
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

    public function getLflag(): ?string
    {
        return $this->lflag;
    }

    public function setLflag(?string $lflag): self
    {
        $this->lflag = $lflag;

        return $this;
    }

    public function getVknzielart(): ?string
    {
        return $this->vknzielart;
    }

    public function setVknzielart(string $vknzielart): self
    {
        $this->vknzielart = $vknzielart;

        return $this;
    }

    public function getLfdnr(): ?string
    {
        return $this->lfdnr;
    }

    public function setLfdnr(string $lfdnr): self
    {
        $this->lfdnr = $lfdnr;

        return $this;
    }

    public function getArtnr(): ?T200
    {
        return $this->artnr;
    }

    public function setArtnr(?T200 $artnr): self
    {
        $this->artnr = $artnr;

        return $this;
    }


}
