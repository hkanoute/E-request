<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t532
 *
 * @ORM\Table(name="tecdoc.t532", indexes={@ORM\Index(name="idxt532_ktypnr2102", columns={"ktypnr"}), @ORM\Index(name="idxt532_kmodnr2102", columns={"kmodnr"})})
 * @ORM\Entity(repositoryClass="App\Repository\T532Repository")
 */
class T532
{
    /**
     * @var int
     *
     * @ORM\Column(name="ktypnr", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tecdoc.t532_ktypnr_seq", allocationSize=1, initialValue=1)
     */
    private $ktypnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reserviert", type="string", length=22, nullable=true)
     */
    private $reserviert;

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
     * @ORM\Column(name="kmodnr", type="string", length=5, nullable=true)
     */
    private $kmodnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sort", type="string", length=4, nullable=true)
     */
    private $sort;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lbeznr", type="string", length=9, nullable=true)
     */
    private $lbeznr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bjvon", type="string", length=6, nullable=true)
     */
    private $bjvon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bjbis", type="string", length=6, nullable=true)
     */
    private $bjbis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bauart", type="string", length=3, nullable=true)
     */
    private $bauart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="motart", type="string", length=3, nullable=true)
     */
    private $motart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kwvon", type="string", length=4, nullable=true)
     */
    private $kwvon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kwbis", type="string", length=4, nullable=true)
     */
    private $kwbis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="psvon", type="string", length=4, nullable=true)
     */
    private $psvon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="psbis", type="string", length=4, nullable=true)
     */
    private $psbis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ccmtech", type="string", length=5, nullable=true)
     */
    private $ccmtech;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tonnage", type="string", length=5, nullable=true)
     */
    private $tonnage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="axleconfig", type="string", length=3, nullable=true)
     */
    private $axleconfig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="delete", type="string", length=1, nullable=true)
     */
    private $delete;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lflag", type="string", length=1, nullable=true)
     */
    private $lflag;

    public function getKtypnr(): ?int
    {
        return $this->ktypnr;
    }

    public function getReserviert(): ?string
    {
        return $this->reserviert;
    }

    public function setReserviert(?string $reserviert): self
    {
        $this->reserviert = $reserviert;

        return $this;
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

    public function getKmodnr(): ?string
    {
        return $this->kmodnr;
    }

    public function setKmodnr(?string $kmodnr): self
    {
        $this->kmodnr = $kmodnr;

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

    public function getLbeznr(): ?string
    {
        return $this->lbeznr;
    }

    public function setLbeznr(?string $lbeznr): self
    {
        $this->lbeznr = $lbeznr;

        return $this;
    }

    public function getBjvon(): ?string
    {
        return $this->bjvon;
    }

    public function setBjvon(?string $bjvon): self
    {
        $this->bjvon = $bjvon;

        return $this;
    }

    public function getBjbis(): ?string
    {
        return $this->bjbis;
    }

    public function setBjbis(?string $bjbis): self
    {
        $this->bjbis = $bjbis;

        return $this;
    }

    public function getBauart(): ?string
    {
        return $this->bauart;
    }

    public function setBauart(?string $bauart): self
    {
        $this->bauart = $bauart;

        return $this;
    }

    public function getMotart(): ?string
    {
        return $this->motart;
    }

    public function setMotart(?string $motart): self
    {
        $this->motart = $motart;

        return $this;
    }

    public function getKwvon(): ?string
    {
        return $this->kwvon;
    }

    public function setKwvon(?string $kwvon): self
    {
        $this->kwvon = $kwvon;

        return $this;
    }

    public function getKwbis(): ?string
    {
        return $this->kwbis;
    }

    public function setKwbis(?string $kwbis): self
    {
        $this->kwbis = $kwbis;

        return $this;
    }

    public function getPsvon(): ?string
    {
        return $this->psvon;
    }

    public function setPsvon(?string $psvon): self
    {
        $this->psvon = $psvon;

        return $this;
    }

    public function getPsbis(): ?string
    {
        return $this->psbis;
    }

    public function setPsbis(?string $psbis): self
    {
        $this->psbis = $psbis;

        return $this;
    }

    public function getCcmtech(): ?string
    {
        return $this->ccmtech;
    }

    public function setCcmtech(?string $ccmtech): self
    {
        $this->ccmtech = $ccmtech;

        return $this;
    }

    public function getTonnage(): ?string
    {
        return $this->tonnage;
    }

    public function setTonnage(?string $tonnage): self
    {
        $this->tonnage = $tonnage;

        return $this;
    }

    public function getAxleconfig(): ?string
    {
        return $this->axleconfig;
    }

    public function setAxleconfig(?string $axleconfig): self
    {
        $this->axleconfig = $axleconfig;

        return $this;
    }

    public function getDelete(): ?string
    {
        return $this->delete;
    }

    public function setDelete(?string $delete): self
    {
        $this->delete = $delete;

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
