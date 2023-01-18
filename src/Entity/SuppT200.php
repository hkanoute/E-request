<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Supplier4337.t200
 *
 * @ORM\Table(name="supplier_4337.t200", indexes={@ORM\Index(name="t200_artnr_raw_idx", columns={"artnr_raw"}), @ORM\Index(name="t200_artnr_idx", columns={"artnr"})})
 * @ORM\Entity(repositoryClass="App\Repository\SuppT200Repository")
 */
class SuppT200
{
    /**
     * @return string
     */
    public function getArtnr(): string
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
    public function getBeznr(): ?string
    {
        return $this->beznr;
    }

    /**
     * @param string|null $beznr
     */
    public function setBeznr(?string $beznr): void
    {
        $this->beznr = $beznr;
    }

    /**
     * @return string|null
     */
    public function getKzsb(): ?string
    {
        return $this->kzsb;
    }

    /**
     * @param string|null $kzsb
     */
    public function setKzsb(?string $kzsb): void
    {
        $this->kzsb = $kzsb;
    }

    /**
     * @return string|null
     */
    public function getKzmat(): ?string
    {
        return $this->kzmat;
    }

    /**
     * @param string|null $kzmat
     */
    public function setKzmat(?string $kzmat): void
    {
        $this->kzmat = $kzmat;
    }

    /**
     * @return string|null
     */
    public function getKzat(): ?string
    {
        return $this->kzat;
    }

    /**
     * @param string|null $kzat
     */
    public function setKzat(?string $kzat): void
    {
        $this->kzat = $kzat;
    }

    /**
     * @return string|null
     */
    public function getKzzub(): ?string
    {
        return $this->kzzub;
    }

    /**
     * @param string|null $kzzub
     */
    public function setKzzub(?string $kzzub): void
    {
        $this->kzzub = $kzzub;
    }

    /**
     * @return string|null
     */
    public function getLosgr1(): ?string
    {
        return $this->losgr1;
    }

    /**
     * @param string|null $losgr1
     */
    public function setLosgr1(?string $losgr1): void
    {
        $this->losgr1 = $losgr1;
    }

    /**
     * @return string|null
     */
    public function getLosgr2(): ?string
    {
        return $this->losgr2;
    }

    /**
     * @param string|null $losgr2
     */
    public function setLosgr2(?string $losgr2): void
    {
        $this->losgr2 = $losgr2;
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
     * @return string|null
     */
    public function getArtnrRaw(): ?string
    {
        return $this->artnrRaw;
    }

    /**
     * @param string|null $artnrRaw
     */
    public function setArtnrRaw(?string $artnrRaw): void
    {
        $this->artnrRaw = $artnrRaw;
    }
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
     * @ORM\GeneratedValue(strategy="NONE")
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
     * @ORM\Column(name="artnr_raw", type="string", length=22, nullable=true)
     */
    private $artnrRaw;


}
