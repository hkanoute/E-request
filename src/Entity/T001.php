<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t001
 *
 * @ORM\Table(name="tecdoc.t001", indexes={@ORM\Index(name="idxt001_marke2102", columns={"marke"})})
 * @ORM\Entity(repositoryClass="App\Repository\T001Repository")
 */
class T001
{
    /**
     * @var string
     *
     * @ORM\Column(name="dlnr", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tecdoc.t001_dlnr_seq", allocationSize=1, initialValue=1)
     */
    private $dlnr;

    public function getDlnr(): ?string
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

    public function getSa(): ?string
    {
        return $this->sa;
    }

    public function setSa(?string $sa): self
    {
        $this->sa = $sa;

        return $this;
    }

    public function getRelease(): ?string
    {
        return $this->release;
    }

    public function setRelease(?string $release): self
    {
        $this->release = $release;

        return $this;
    }

    public function getDatum(): ?string
    {
        return $this->datum;
    }

    public function setDatum(?string $datum): self
    {
        $this->datum = $datum;

        return $this;
    }

    public function getKzvoll(): ?string
    {
        return $this->kzvoll;
    }

    public function setKzvoll(?string $kzvoll): self
    {
        $this->kzvoll = $kzvoll;

        return $this;
    }

    public function getKhernr(): ?string
    {
        return $this->khernr;
    }

    public function setKhernr(?string $khernr): self
    {
        $this->khernr = $khernr;

        return $this;
    }

    public function getMarke(): ?string
    {
        return $this->marke;
    }

    public function setMarke(?string $marke): self
    {
        $this->marke = $marke;

        return $this;
    }

    public function getReferenzdat(): ?string
    {
        return $this->referenzdat;
    }

    public function setReferenzdat(?string $referenzdat): self
    {
        $this->referenzdat = $referenzdat;

        return $this;
    }

    public function getVorversion(): ?string
    {
        return $this->vorversion;
    }

    public function setVorversion(?string $vorversion): self
    {
        $this->vorversion = $vorversion;

        return $this;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(?string $format): self
    {
        $this->format = $format;

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

    /**
     * @var string|null
     *
     * @ORM\Column(name="sa", type="string", length=3, nullable=true)
     */
    private $sa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="release", type="string", length=4, nullable=true)
     */
    private $release;

    /**
     * @var string|null
     *
     * @ORM\Column(name="datum", type="string", length=8, nullable=true)
     */
    private $datum;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kzvoll", type="string", length=1, nullable=true)
     */
    private $kzvoll;

    /**
     * @var string|null
     *
     * @ORM\Column(name="khernr", type="string", length=6, nullable=true)
     */
    private $khernr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="marke", type="string", length=20, nullable=true)
     */
    private $marke;

    /**
     * @var string|null
     *
     * @ORM\Column(name="referenzdat", type="string", length=4, nullable=true)
     */
    private $referenzdat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vorversion", type="string", length=4, nullable=true)
     */
    private $vorversion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="format", type="string", length=3, nullable=true)
     */
    private $format;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lflag", type="string", length=1, nullable=true)
     */
    private $lflag;


}
