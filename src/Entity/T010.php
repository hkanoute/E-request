<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t010
 *
 * @ORM\Table(name="tecdoc.t010")
 * @ORM\Entity(repositoryClass="App\Repository\T010Repository")
 */
class T010
{



    public function getLkz(): ?string
    {
        return $this->lkz;
    }
    /**
     * @param string $lkz
     */
    public function setLkz(string $lkz): void
    {
        $this->lkz = $lkz;
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

    public function getVerkehr(): ?string
    {
        return $this->verkehr;
    }

    public function setVerkehr(?string $verkehr): self
    {
        $this->verkehr = $verkehr;

        return $this;
    }

    public function getWarnr(): ?string
    {
        return $this->warnr;
    }

    public function setWarnr(?string $warnr): self
    {
        $this->warnr = $warnr;

        return $this;
    }

    public function getWkz(): ?string
    {
        return $this->wkz;
    }

    public function setWkz(?string $wkz): self
    {
        $this->wkz = $wkz;

        return $this;
    }

    public function getWarbeznr(): ?string
    {
        return $this->warbeznr;
    }

    public function setWarbeznr(?string $warbeznr): self
    {
        $this->warbeznr = $warbeznr;

        return $this;
    }

    public function getVorwahl(): ?string
    {
        return $this->vorwahl;
    }

    public function setVorwahl(?string $vorwahl): self
    {
        $this->vorwahl = $vorwahl;

        return $this;
    }

    public function getLstgruppe(): ?string
    {
        return $this->lstgruppe;
    }

    public function setLstgruppe(?string $lstgruppe): self
    {
        $this->lstgruppe = $lstgruppe;

        return $this;
    }

    public function getIsocode2(): ?string
    {
        return $this->isocode2;
    }

    public function setIsocode2(?string $isocode2): self
    {
        $this->isocode2 = $isocode2;

        return $this;
    }

    public function getIsocode3(): ?string
    {
        return $this->isocode3;
    }

    public function setIsocode3(?string $isocode3): self
    {
        $this->isocode3 = $isocode3;

        return $this;
    }

    public function getIsocodenr(): ?string
    {
        return $this->isocodenr;
    }

    public function setIsocodenr(?string $isocodenr): self
    {
        $this->isocodenr = $isocodenr;

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

    public function getBeznr(): ?string
    {
        return $this->beznr;
    }

    public function setBeznr(string $beznr): self
    {
        $this->beznr = $beznr;

        return $this;
    }
    /**
     * @var string
     *
     * @ORM\Column(name="lkz", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tecdoc.t010_lkz_seq", allocationSize=1, initialValue=1)
     */
    private $lkz;

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
     * @ORM\Column(name="verkehr", type="string", length=1, nullable=true)
     */
    private $verkehr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="warnr", type="string", length=3, nullable=true)
     */
    private $warnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="wkz", type="string", length=3, nullable=true)
     */
    private $wkz;

    /**
     * @var string|null
     *
     * @ORM\Column(name="warbeznr", type="string", length=9, nullable=true)
     */
    private $warbeznr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vorwahl", type="string", length=5, nullable=true)
     */
    private $vorwahl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lstgruppe", type="string", length=1, nullable=true)
     */
    private $lstgruppe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="isocode2", type="string", length=2, nullable=true)
     */
    private $isocode2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="isocode3", type="string", length=3, nullable=true)
     */
    private $isocode3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="isocodenr", type="string", length=3, nullable=true)
     */
    private $isocodenr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lflag", type="string", length=1, nullable=true)
     */
    private $lflag;

    /**
     * @var string
     *
     * @ORM\Column(name="beznr", type="string", length=9, nullable=false)
     */
    private $beznr;


}
