<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Supplier4337.t203
 *
 * @ORM\Table(name="supplier_4337.t203")
 * @ORM\Entity(repositoryClass="App\Repository\SuppT203Repository")
 */
class SuppT203
{
    /**
     * @var string
     *
     * @ORM\Column(name="dlnr", type="string", length=4, nullable=false)
     */
    private $dlnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sa", type="string", length=3, nullable=true)
     */
    private $sa;

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
    public function getLkz(): ?string
    {
        return $this->lkz;
    }

    /**
     * @param string|null $lkz
     */
    public function setLkz(?string $lkz): void
    {
        $this->lkz = $lkz;
    }

    /**
     * @return string
     */
    public function getKhernr(): string
    {
        return $this->khernr;
    }

    /**
     * @param string $khernr
     */
    public function setKhernr(string $khernr): void
    {
        $this->khernr = $khernr;
    }

    /**
     * @return string
     */
    public function getRefnr(): string
    {
        return $this->refnr;
    }

    /**
     * @param string $refnr
     */
    public function setRefnr(string $refnr): void
    {
        $this->refnr = $refnr;
    }

    /**
     * @return string|null
     */
    public function getExclude(): ?string
    {
        return $this->exclude;
    }

    /**
     * @param string|null $exclude
     */
    public function setExclude(?string $exclude): void
    {
        $this->exclude = $exclude;
    }

    /**
     * @return string
     */
    public function getSort(): string
    {
        return $this->sort;
    }

    /**
     * @param string $sort
     */
    public function setSort(string $sort): void
    {
        $this->sort = $sort;
    }

    /**
     * @return string|null
     */
    public function getAdditiv(): ?string
    {
        return $this->additiv;
    }

    /**
     * @param string|null $additiv
     */
    public function setAdditiv(?string $additiv): void
    {
        $this->additiv = $additiv;
    }

    /**
     * @return string|null
     */
    public function getReferenzinfo(): ?string
    {
        return $this->referenzinfo;
    }

    /**
     * @param string|null $referenzinfo
     */
    public function setReferenzinfo(?string $referenzinfo): void
    {
        $this->referenzinfo = $referenzinfo;
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
    public function getRefnrRaw(): ?string
    {
        return $this->refnrRaw;
    }

    /**
     * @param string|null $refnrRaw
     */
    public function setRefnrRaw(?string $refnrRaw): void
    {
        $this->refnrRaw = $refnrRaw;
    }

    /**
     * @return \Supplier4337
     */
    public function getArtnr(): \Supplier4337
    {
        return $this->artnr;
    }

    /**
     * @param \Supplier4337 $artnr
     */
    public function setArtnr(\Supplier4337 $artnr): void
    {
        $this->artnr = $artnr;
    }

    /**
     * @var string|null
     *
     * @ORM\Column(name="lkz", type="string", length=3, nullable=true)
     */
    private $lkz;

    /**
     * @var string
     *
     * @ORM\Column(name="khernr", type="string", length=6, nullable=false)
     */
    private $khernr;

    /**
     * @var string
     *
     * @ORM\Column(name="refnr", type="string", length=22, nullable=false)
     */
    private $refnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="exclude", type="string", length=1, nullable=true)
     */
    private $exclude;

    /**
     * @var string
     *
     * @ORM\Column(name="sort", type="string", length=5, nullable=false)
     */
    private $sort;

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
     * @var string|null
     *
     * @ORM\Column(name="refnr_raw", type="string", length=22, nullable=true)
     */
    private $refnrRaw;

    /**
     * @var \Supplier4337.t200
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Supplier4337.t200")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="artnr", referencedColumnName="artnr")
     * })
     */
    private $artnr;


}
