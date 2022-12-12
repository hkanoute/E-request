<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t204
 *
 * @ORM\Table(name="tecdoc.t204", indexes={@ORM\Index(name="idxt204_lkz2102", columns={"lkz"}), @ORM\Index(name="idxt204_ersatznr2102", columns={"ersatznr"}), @ORM\Index(name="idxt204_dlnr2102", columns={"dlnr"}), @ORM\Index(name="idxt204_artnr2102", columns={"artnr", "dlnr"})})
 * @ORM\Entity(repositoryClass="App\Repository\T204Repository")
 */
class T204
{
    /**
     * @var string
     *
     * @ORM\Column(name="ersatznr_artnr_dlnr", type="string", length=48, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tecdoc.t204_ersatznr_artnr_dlnr_seq", allocationSize=1, initialValue=1)
     */
    private $ersatznrArtnrDlnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lkz", type="string", length=3, nullable=true)
     */
    private $lkz;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sa", type="string", length=3, nullable=true)
     */
    private $sa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ersatznr_raw", type="string", length=22, nullable=true)
     */
    private $ersatznrRaw;

    /**
     * @var string|null
     *
     * @ORM\Column(name="exclude", type="string", length=1, nullable=true)
     */
    private $exclude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sort", type="string", length=5, nullable=true)
     */
    private $sort;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lflag", type="string", length=5, nullable=true)
     */
    private $lflag;

    /**
     * @var string
     *
     * @ORM\Column(name="ersatznr", type="string", length=22, nullable=false)
     */
    private $ersatznr;

    /**
     *
     * @ORM\ManyToOne(targetEntity="T200")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="artnr", referencedColumnName="artnr"),
     *   @ORM\JoinColumn(name="dlnr", referencedColumnName="dlnr")
     * })
     */
    private $artnr;

    public function getErsatznrArtnrDlnr(): ?string
    {
        return $this->ersatznrArtnrDlnr;
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

    public function getSa(): ?string
    {
        return $this->sa;
    }

    public function setSa(?string $sa): self
    {
        $this->sa = $sa;

        return $this;
    }

    public function getErsatznrRaw(): ?string
    {
        return $this->ersatznrRaw;
    }

    public function setErsatznrRaw(?string $ersatznrRaw): self
    {
        $this->ersatznrRaw = $ersatznrRaw;

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

    public function getSort(): ?string
    {
        return $this->sort;
    }

    public function setSort(?string $sort): self
    {
        $this->sort = $sort;

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

    public function getErsatznr(): ?string
    {
        return $this->ersatznr;
    }

    public function setErsatznr(string $ersatznr): self
    {
        $this->ersatznr = $ersatznr;

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
