<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t124
 *
 * @ORM\Table(name="tecdoc.t124")
 * @ORM\Entity(repositoryClass="App\Repository\T124Repository")
 */
class T124
{
    /**
     * @var string
     *
     * @ORM\Column(name="Reserviert", type="string", length=22, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tecdoc.t124_Reserviert_seq", allocationSize=1, initialValue=1)
     */
    private $reserviert;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dlnr", type="string", length=4, nullable=true)
     */
    private $dlnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SA", type="string", length=3, nullable=true)
     */
    private $sa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="KtypeNr", type="decimal", precision=9, scale=0, nullable=true)
     */
    private $ktypenr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Lkz", type="string", length=3, nullable=true)
     */
    private $lkz;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Bjvon", type="string", length=6, nullable=true)
     */
    private $bjvon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Bjbis", type="string", length=6, nullable=true)
     */
    private $bjbis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ccmSteuer", type="string", length=5, nullable=true)
     */
    private $ccmsteuer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Lit", type="string", length=4, nullable=true)
     */
    private $lit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Zyl", type="string", length=2, nullable=true)
     */
    private $zyl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tueren", type="string", length=1, nullable=true)
     */
    private $tueren;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tanklnhalft", type="string", length=4, nullable=true)
     */
    private $tanklnhalft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Spannung", type="string", length=2, nullable=true)
     */
    private $spannung;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ABS", type="string", length=1, nullable=true)
     */
    private $abs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ASR", type="string", length=1, nullable=true)
     */
    private $asr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="KrStoffArt", type="string", length=3, nullable=true)
     */
    private $krstoffart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="KatArt", type="string", length=3, nullable=true)
     */
    private $katart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="GetrArt", type="string", length=3, nullable=true)
     */
    private $getrart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BremsArt", type="string", length=3, nullable=true)
     */
    private $bremsart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BremSys", type="string", length=3, nullable=true)
     */
    private $bremsys;

    public function getReserviert(): ?string
    {
        return $this->reserviert;
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

    public function getKtypenr(): ?string
    {
        return $this->ktypenr;
    }

    public function setKtypenr(?string $ktypenr): self
    {
        $this->ktypenr = $ktypenr;

        return $this;
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

    public function getCcmsteuer(): ?string
    {
        return $this->ccmsteuer;
    }

    public function setCcmsteuer(?string $ccmsteuer): self
    {
        $this->ccmsteuer = $ccmsteuer;

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

    public function getTanklnhalft(): ?string
    {
        return $this->tanklnhalft;
    }

    public function setTanklnhalft(?string $tanklnhalft): self
    {
        $this->tanklnhalft = $tanklnhalft;

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

    public function getBremsart(): ?string
    {
        return $this->bremsart;
    }

    public function setBremsart(?string $bremsart): self
    {
        $this->bremsart = $bremsart;

        return $this;
    }

    public function getBremsys(): ?string
    {
        return $this->bremsys;
    }

    public function setBremsys(?string $bremsys): self
    {
        $this->bremsys = $bremsys;

        return $this;
    }


}
