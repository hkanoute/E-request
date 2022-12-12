<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t203
 *
 * @ORM\Table(name="tecdoc.t203", indexes={@ORM\Index(name="idxt203_sortnr2102", columns={"sort"}), @ORM\Index(name="idxt203_short_name_vectors_2311", columns={"short_name_vectors"}), @ORM\Index(name="idxt203_refnrraw2102", columns={"refnr_raw"}), @ORM\Index(name="idxt203_refnr2102", columns={"refnr"}), @ORM\Index(name="idxt203_lkz2102", columns={"lkz"}), @ORM\Index(name="idxt203_khernr2102", columns={"khernr"}), @ORM\Index(name="idxt203_dlnr2102", columns={"dlnr"}), @ORM\Index(name="idxt203_artnr2102", columns={"artnr", "dlnr"})})
 * @ORM\Entity(repositoryClass="App\Repository\T203Repository")
 */
class T203
{
    /**
     * @var string
     *
     * @ORM\Column(name="artnr_dlnr_khernr_refnr_sort", type="string", length=60, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tecdoc.t203_artnr_dlnr_khernr_refnr_sort_seq", allocationSize=1, initialValue=1)
     */
    private $artnrDlnrKhernrRefnrSort;

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
     * @ORM\Column(name="refnr_raw", type="string", length=22, nullable=true)
     */
    private $refnrRaw;

    /**
     * @var string|null
     *
     * @ORM\Column(name="exclude", type="string", length=1, nullable=true)
     */
    private $exclude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="additiv", type="string", length=1, nullable=true)
     */
    private $additiv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="referenzinfo", type="string", length=3, nullable=true)
     */
    private $referenzinfo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lflag", type="string", length=1, nullable=true)
     */
    private $lflag;

    /**
     * @var string
     *
     * @ORM\Column(name="sort", type="string", length=5, nullable=false)
     */
    private $sort;

    /**
     * @var string|null
     *
     * @ORM\Column(name="refnr", type="string", length=22, nullable=true)
     */
    private $refnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="short_name_vectors", type="text", nullable=true)
     */
    private $shortNameVectors;

    /**
     *
     * @ORM\ManyToOne(targetEntity="T100")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="khernr", referencedColumnName="hernr")
     * })
     */
    private $khernr;

    /**
     *
     * @ORM\ManyToOne(targetEntity="T200")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="artnr", referencedColumnName="artnr"),
     *   @ORM\JoinColumn(name="dlnr", referencedColumnName="dlnr")
     * })
     */
    private $artnr;

    public function getArtnrDlnrKhernrRefnrSort(): ?string
    {
        return $this->artnrDlnrKhernrRefnrSort;
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

    public function getRefnrRaw(): ?string
    {
        return $this->refnrRaw;
    }

    public function setRefnrRaw(?string $refnrRaw): self
    {
        $this->refnrRaw = $refnrRaw;

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

    public function getAdditiv(): ?string
    {
        return $this->additiv;
    }

    public function setAdditiv(?string $additiv): self
    {
        $this->additiv = $additiv;

        return $this;
    }

    public function getReferenzinfo(): ?string
    {
        return $this->referenzinfo;
    }

    public function setReferenzinfo(?string $referenzinfo): self
    {
        $this->referenzinfo = $referenzinfo;

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

    public function getSort(): ?string
    {
        return $this->sort;
    }

    public function setSort(string $sort): self
    {
        $this->sort = $sort;

        return $this;
    }

    public function getRefnr(): ?string
    {
        return $this->refnr;
    }

    public function setRefnr(?string $refnr): self
    {
        $this->refnr = $refnr;

        return $this;
    }

    public function getShortNameVectors(): ?string
    {
        return $this->shortNameVectors;
    }

    public function setShortNameVectors(?string $shortNameVectors): self
    {
        $this->shortNameVectors = $shortNameVectors;

        return $this;
    }

    public function getKhernr(): ?T100
    {
        return $this->khernr;
    }

    public function setKhernr(?T100 $khernr): self
    {
        $this->khernr = $khernr;

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
