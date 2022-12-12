<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t231
 *
 * @ORM\Table(name="tecdoc.t231", indexes={@ORM\Index(name="idxt231_sprachnr2102", columns={"sprachnr"}), @ORM\Index(name="idxt231_dokument2102", columns={"dokumentenart"}), @ORM\Index(name="idxt231_dlnr2102", columns={"dlnr"}), @ORM\Index(name="idxt231_bildnr2102", columns={"bildnr"})})
 * @ORM\Entity(repositoryClass="App\Repository\T231Repository")
 */
class T231
{
    /**
     * @var string
     *
     * @ORM\Column(name="bildnr", type="string", length=9, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $bildnr;

    /**
     * @var string
     *
     * @ORM\Column(name="dokumentenart", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dokumentenart;

    /**
     * @var string
     *
     * @ORM\Column(name="sprachnr", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sprachnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dlnr", type="string", length=4, nullable=true)
     */
    private $dlnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reserviert", type="string", length=22, nullable=true)
     */
    private $reserviert;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sa", type="string", length=3, nullable=true)
     */
    private $sa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bildname", type="string", length=30, nullable=true)
     */
    private $bildname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bildtype", type="string", length=3, nullable=true)
     */
    private $bildtype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="beznorm", type="string", length=3, nullable=true)
     */
    private $beznorm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="breit", type="string", length=4, nullable=true)
     */
    private $breit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hoch", type="string", length=4, nullable=true)
     */
    private $hoch;

    /**
     * @var string|null
     *
     * @ORM\Column(name="farben", type="string", length=3, nullable=true)
     */
    private $farben;

    /**
     * @var string|null
     *
     * @ORM\Column(name="beznr", type="string", length=9, nullable=true)
     */
    private $beznr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lflag", type="string", length=1, nullable=true)
     */
    private $lflag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    public function getBildnr(): ?string
    {
        return $this->bildnr;
    }

    public function getDokumentenart(): ?string
    {
        return $this->dokumentenart;
    }

    public function getSprachnr(): ?string
    {
        return $this->sprachnr;
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

    public function getReserviert(): ?string
    {
        return $this->reserviert;
    }

    public function setReserviert(?string $reserviert): self
    {
        $this->reserviert = $reserviert;

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

    public function getBildname(): ?string
    {
        return $this->bildname;
    }

    public function setBildname(?string $bildname): self
    {
        $this->bildname = $bildname;

        return $this;
    }

    public function getBildtype(): ?string
    {
        return $this->bildtype;
    }

    public function setBildtype(?string $bildtype): self
    {
        $this->bildtype = $bildtype;

        return $this;
    }

    public function getBeznorm(): ?string
    {
        return $this->beznorm;
    }

    public function setBeznorm(?string $beznorm): self
    {
        $this->beznorm = $beznorm;

        return $this;
    }

    public function getBreit(): ?string
    {
        return $this->breit;
    }

    public function setBreit(?string $breit): self
    {
        $this->breit = $breit;

        return $this;
    }

    public function getHoch(): ?string
    {
        return $this->hoch;
    }

    public function setHoch(?string $hoch): self
    {
        $this->hoch = $hoch;

        return $this;
    }

    public function getFarben(): ?string
    {
        return $this->farben;
    }

    public function setFarben(?string $farben): self
    {
        $this->farben = $farben;

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

    public function getLflag(): ?string
    {
        return $this->lflag;
    }

    public function setLflag(?string $lflag): self
    {
        $this->lflag = $lflag;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }


}
