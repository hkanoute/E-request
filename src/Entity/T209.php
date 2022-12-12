<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t209
 *
 * @ORM\Table(name="tecdoc.t209", indexes={@ORM\Index(name="idxt209_lkz2102", columns={"lkz"}), @ORM\Index(name="idxt209_eanr2102", columns={"eannr"}), @ORM\Index(name="idxt209_dlnr2102", columns={"dlnr"}), @ORM\Index(name="idxt209_artnr_eannr2102", columns={"artnr", "dlnr", "eannr"}), @ORM\Index(name="idxt209_artnr_dlnr2102", columns={"artnr", "dlnr"})})
 * @ORM\Entity(repositoryClass="App\Repository\T209Repository")
 */
class T209
{
    /**
     * @var string
     *
     * @ORM\Column(name="artnr_dlnr_lkz_eannr", type="string", length=42, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tecdoc.t209_artnr_dlnr_lkz_eannr_seq", allocationSize=1, initialValue=1)
     */
    private $artnrDlnrLkzEannr;

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
     * @ORM\Column(name="exclude", type="string", length=1, nullable=true)
     */
    private $exclude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lflag", type="string", length=1, nullable=true)
     */
    private $lflag;

    /**
     * @var string
     *
     * @ORM\Column(name="eannr", type="string", length=13, nullable=false)
     */
    private $eannr;

    /**
     *
     * @ORM\ManyToOne(targetEntity="T200")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="artnr", referencedColumnName="artnr"),
     *   @ORM\JoinColumn(name="dlnr", referencedColumnName="dlnr")
     * })
     */
    private $artnr;

    public function getArtnrDlnrLkzEannr(): ?string
    {
        return $this->artnrDlnrLkzEannr;
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

    public function getEannr(): ?string
    {
        return $this->eannr;
    }

    public function setEannr(string $eannr): self
    {
        $this->eannr = $eannr;

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
