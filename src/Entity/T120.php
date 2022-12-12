<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t120
 *
 * @ORM\Table(name="tecdoc.t120", indexes={@ORM\Index(name="idxt120_ktypnr2102", columns={"ktypnr"}), @ORM\Index(name="idxt120_kmodnr2102", columns={"kmodnr"})})
 * @ORM\Entity(repositoryClass="App\Repository\T120Repository")
 */
class T120
{
    /**
     * @var int
     *
     * @ORM\Column(name="ktypnr", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tecdoc.t120_ktypnr_seq", allocationSize=1, initialValue=1)
     */
    private $ktypnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kmodnr", type="string", length=5, nullable=true)
     */
    private $kmodnr;

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
     * @ORM\Column(name="lbeznr", type="string", length=9, nullable=true)
     */
    private $lbeznr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sortnr", type="string", length=2, nullable=true)
     */
    private $sortnr;

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
     * @ORM\Column(name="kw", type="string", length=4, nullable=true)
     */
    private $kw;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ps", type="string", length=4, nullable=true)
     */
    private $ps;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ccmsteuer", type="string", length=5, nullable=true)
     */
    private $ccmsteuer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ccmtech", type="string", length=5, nullable=true)
     */
    private $ccmtech;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lit", type="string", length=4, nullable=true)
     */
    private $lit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zyl", type="string", length=2, nullable=true)
     */
    private $zyl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tueren", type="string", length=1, nullable=true)
     */
    private $tueren;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tankinhalt", type="string", length=4, nullable=true)
     */
    private $tankinhalt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="spannung", type="string", length=2, nullable=true)
     */
    private $spannung;

    /**
     * @var string|null
     *
     * @ORM\Column(name="abs", type="string", length=1, nullable=true)
     */
    private $abs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="asr", type="string", length=1, nullable=true)
     */
    private $asr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="motart", type="string", length=3, nullable=true)
     */
    private $motart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kraft", type="string", length=3, nullable=true)
     */
    private $kraft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="antrart", type="string", length=3, nullable=true)
     */
    private $antrart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bremsart", type="string", length=3, nullable=true)
     */
    private $bremsart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bremssys", type="string", length=3, nullable=true)
     */
    private $bremssys;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ventile", type="string", length=2, nullable=true)
     */
    private $ventile;

    /**
     * @var string|null
     *
     * @ORM\Column(name="krstoffart", type="string", length=3, nullable=true)
     */
    private $krstoffart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="katart", type="string", length=3, nullable=true)
     */
    private $katart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="getrart", type="string", length=3, nullable=true)
     */
    private $getrart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="aufbauart", type="string", length=3, nullable=true)
     */
    private $aufbauart;

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

    public function getKmodnr(): ?string
    {
        return $this->kmodnr;
    }

    public function setKmodnr(?string $kmodnr): self
    {
        $this->kmodnr = $kmodnr;

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

    public function getLbeznr(): ?string
    {
        return $this->lbeznr;
    }

    public function setLbeznr(?string $lbeznr): self
    {
        $this->lbeznr = $lbeznr;

        return $this;
    }

    public function getSortnr(): ?string
    {
        return $this->sortnr;
    }

    public function setSortnr(?string $sortnr): self
    {
        $this->sortnr = $sortnr;

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

    public function getKw(): ?string
    {
        return $this->kw;
    }

    public function setKw(?string $kw): self
    {
        $this->kw = $kw;

        return $this;
    }

    public function getPs(): ?string
    {
        return $this->ps;
    }

    public function setPs(?string $ps): self
    {
        $this->ps = $ps;

        return $this;
    }

    public function getCcmsteuer(): ?string
    {
        return $this->ccmsteuer;
    }

    public function setCcmsteuer(?string $ccmsteuer): self
    {
        $this->ccmsteuer = $ccmsteuer;

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

    public function getLit(): ?string
    {
        return $this->lit;
    }

    public function setLit(?string $lit): self
    {
        $this->lit = $lit;

        return $this;
    }

    public function getZyl(): ?string
    {
        return $this->zyl;
    }

    public function setZyl(?string $zyl): self
    {
        $this->zyl = $zyl;

        return $this;
    }

    public function getTueren(): ?string
    {
        return $this->tueren;
    }

    public function setTueren(?string $tueren): self
    {
        $this->tueren = $tueren;

        return $this;
    }

    public function getTankinhalt(): ?string
    {
        return $this->tankinhalt;
    }

    public function setTankinhalt(?string $tankinhalt): self
    {
        $this->tankinhalt = $tankinhalt;

        return $this;
    }

    public function getSpannung(): ?string
    {
        return $this->spannung;
    }

    public function setSpannung(?string $spannung): self
    {
        $this->spannung = $spannung;

        return $this;
    }

    public function getAbs(): ?string
    {
        return $this->abs;
    }

    public function setAbs(?string $abs): self
    {
        $this->abs = $abs;

        return $this;
    }

    public function getAsr(): ?string
    {
        return $this->asr;
    }

    public function setAsr(?string $asr): self
    {
        $this->asr = $asr;

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

    public function getKraft(): ?string
    {
        return $this->kraft;
    }

    public function setKraft(?string $kraft): self
    {
        $this->kraft = $kraft;

        return $this;
    }

    public function getAntrart(): ?string
    {
        return $this->antrart;
    }

    public function setAntrart(?string $antrart): self
    {
        $this->antrart = $antrart;

        return $this;
    }

    public function getBremsart(): ?string
    {
        return $this->bremsart;
    }

    public function setBremsart(?string $bremsart): self
    {
        $this->bremsart = $bremsart;

        return $this;
    }

    public function getBremssys(): ?string
    {
        return $this->bremssys;
    }

    public function setBremssys(?string $bremssys): self
    {
        $this->bremssys = $bremssys;

        return $this;
    }

    public function getVentile(): ?string
    {
        return $this->ventile;
    }

    public function setVentile(?string $ventile): self
    {
        $this->ventile = $ventile;

        return $this;
    }

    public function getKrstoffart(): ?string
    {
        return $this->krstoffart;
    }

    public function setKrstoffart(?string $krstoffart): self
    {
        $this->krstoffart = $krstoffart;

        return $this;
    }

    public function getKatart(): ?string
    {
        return $this->katart;
    }

    public function setKatart(?string $katart): self
    {
        $this->katart = $katart;

        return $this;
    }

    public function getGetrart(): ?string
    {
        return $this->getrart;
    }

    public function setGetrart(?string $getrart): self
    {
        $this->getrart = $getrart;

        return $this;
    }

    public function getAufbauart(): ?string
    {
        return $this->aufbauart;
    }

    public function setAufbauart(?string $aufbauart): self
    {
        $this->aufbauart = $aufbauart;

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
