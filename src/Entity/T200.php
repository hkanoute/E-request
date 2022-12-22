<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t200
 *
 * @ORM\Table(name="tecdoc.t200", indexes={@ORM\Index(name="idxt200_dlnr2102", columns={"dlnr"}), @ORM\Index(name="idxt200_artnrraw2102", columns={"artnr_raw"}), @ORM\Index(name="idxt200_artnr_raw_vectors_2311", columns={"artnr_raw_vectors"}), @ORM\Index(name="idxt200_artnr2102", columns={"artnr", "dlnr"})})
 * @ORM\Entity(repositoryClass="App\Repository\T200Repository")
 */
class T200
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
     * @ORM\ManyToOne(targetEntity="T200")
     * @ORM\Column(name="dlnr", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dlnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="artnr_raw", type="string", length=22, nullable=true)
     */
    private $artnrRaw;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sa", type="string", length=3, nullable=true)
     */
    private $sa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="beznr", type="string", length=9, nullable=true)
     */
    private $beznr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kzsb", type="string", length=1, nullable=true)
     */
    private $kzsb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kzmat", type="string", length=1, nullable=true)
     */
    private $kzmat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kzat", type="string", length=1, nullable=true)
     */
    private $kzat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kzzub", type="string", length=1, nullable=true)
     */
    private $kzzub;

    /**
     * @var string|null
     *
     * @ORM\Column(name="losgr1", type="string", length=5, nullable=true)
     */
    private $losgr1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="losgr2", type="string", length=5, nullable=true)
     */
    private $losgr2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lflag", type="string", length=1, nullable=true)
     */
    private $lflag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="artnr_raw_vectors", type="text", nullable=true)
     */
    private $artnrRawVectors;

    public function getArtnr(): ?string
    {
        return $this->artnr;
    }

    public function getDlnr(): ?string
    {
        return $this->dlnr;
    }

    public function getArtnrRaw(): ?string
    {
        return $this->artnrRaw;
    }

    public function setArtnrRaw(?string $artnrRaw): self
    {
        $this->artnrRaw = $artnrRaw;

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

    public function getBeznr(): ?string
    {
        return $this->beznr;
    }

    public function setBeznr(?string $beznr): self
    {
        $this->beznr = $beznr;

        return $this;
    }

    public function getKzsb(): ?string
    {
        return $this->kzsb;
    }

    public function setKzsb(?string $kzsb): self
    {
        $this->kzsb = $kzsb;

        return $this;
    }

    public function getKzmat(): ?string
    {
        return $this->kzmat;
    }

    public function setKzmat(?string $kzmat): self
    {
        $this->kzmat = $kzmat;

        return $this;
    }

    public function getKzat(): ?string
    {
        return $this->kzat;
    }

    public function setKzat(?string $kzat): self
    {
        $this->kzat = $kzat;

        return $this;
    }

    public function getKzzub(): ?string
    {
        return $this->kzzub;
    }

    public function setKzzub(?string $kzzub): self
    {
        $this->kzzub = $kzzub;

        return $this;
    }

    public function getLosgr1(): ?string
    {
        return $this->losgr1;
    }

    public function setLosgr1(?string $losgr1): self
    {
        $this->losgr1 = $losgr1;

        return $this;
    }

    public function getLosgr2(): ?string
    {
        return $this->losgr2;
    }

    public function setLosgr2(?string $losgr2): self
    {
        $this->losgr2 = $losgr2;

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

    public function getArtnrRawVectors(): ?string
    {
        return $this->artnrRawVectors;
    }

    public function setArtnrRawVectors(?string $artnrRawVectors): self
    {
        $this->artnrRawVectors = $artnrRawVectors;

        return $this;
    }


}
