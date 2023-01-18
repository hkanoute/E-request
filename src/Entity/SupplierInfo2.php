<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Supplier4337.supplierInfo2
 *
 * @ORM\Table(name="supplier_4337.supplier_info2")
 * @ORM\Entity(repositoryClass="App\Repository\SupplierInfo2Repository")
 */
class SupplierInfo2
{
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
    public function getArtnrTecdoc(): ?string
    {
        return $this->artnrTecdoc;
    }

    /**
     * @param string|null $artnrTecdoc
     */
    public function setArtnrTecdoc(?string $artnrTecdoc): void
    {
        $this->artnrTecdoc = $artnrTecdoc;
    }

    /**
     * @return string|null
     */
    public function getDlnrTecdoc(): ?string
    {
        return $this->dlnrTecdoc;
    }

    /**
     * @param string|null $dlnrTecdoc
     */
    public function setDlnrTecdoc(?string $dlnrTecdoc): void
    {
        $this->dlnrTecdoc = $dlnrTecdoc;
    }

    /**
     * @return string|null
     */
    public function getGenartnr(): ?string
    {
        return $this->genartnr;
    }

    /**
     * @param string|null $genartnr
     */
    public function setGenartnr(?string $genartnr): void
    {
        $this->genartnr = $genartnr;
    }

    /**
     * @return string|null
     */
    public function getLibFr(): ?string
    {
        return $this->libFr;
    }

    /**
     * @param string|null $libFr
     */
    public function setLibFr(?string $libFr): void
    {
        $this->libFr = $libFr;
    }

    /**
     * @return string|null
     */
    public function getLibEn(): ?string
    {
        return $this->libEn;
    }

    /**
     * @param string|null $libEn
     */
    public function setLibEn(?string $libEn): void
    {
        $this->libEn = $libEn;
    }

    /**
     * @return string|null
     */
    public function getLibBrande(): ?string
    {
        return $this->libBrande;
    }

    /**
     * @param string|null $libBrande
     */
    public function setLibBrande(?string $libBrande): void
    {
        $this->libBrande = $libBrande;
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
     * @return string|null
     */
    public function getLibModele(): ?string
    {
        return $this->libModele;
    }

    /**
     * @param string|null $libModele
     */
    public function setLibModele(?string $libModele): void
    {
        $this->libModele = $libModele;
    }

    /**
     * @return string
     */
    public function getKmodnr(): string
    {
        return $this->kmodnr;
    }

    /**
     * @param string $kmodnr
     */
    public function setKmodnr(string $kmodnr): void
    {
        $this->kmodnr = $kmodnr;
    }

    /**
     * @return int|null
     */
    public function getKtypnr(): ?int
    {
        return $this->ktypnr;
    }

    /**
     * @param int|null $ktypnr
     */
    public function setKtypnr(?int $ktypnr): void
    {
        $this->ktypnr = $ktypnr;
    }

    /**
     * @return string|null
     */
    public function getVknzielart(): ?string
    {
        return $this->vknzielart;
    }

    /**
     * @param string|null $vknzielart
     */
    public function setVknzielart(?string $vknzielart): void
    {
        $this->vknzielart = $vknzielart;
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
     * @var string
     *
     * @ORM\Column(name="dlnr", type="string", length=4, nullable=false)
     */
    private $dlnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="artnr_tecdoc", type="string", length=22, nullable=true)
     */
    private $artnrTecdoc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dlnr_tecdoc", type="string", length=4, nullable=true)
     */
    private $dlnrTecdoc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="genartnr", type="string", length=5, nullable=true)
     */
    private $genartnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lib_fr", type="string", length=60, nullable=true)
     */
    private $libFr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lib_en", type="string", length=60, nullable=true)
     */
    private $libEn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lib_brande", type="string", length=60, nullable=true)
     */
    private $libBrande;

    /**
     * @var string
     *
     * @ORM\Column(name="khernr", type="string", length=6, nullable=false)
     */
    private $khernr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lib_modele", type="string", length=60, nullable=true)
     */
    private $libModele;

    /**
     * @var string
     *
     * @ORM\Column(name="kmodnr", type="string", length=5, nullable=false)
     */
    private $kmodnr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ktypnr", type="integer", nullable=true)
     */
    private $ktypnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vknzielart", type="string", length=9, nullable=true)
     */
    private $vknzielart;

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
