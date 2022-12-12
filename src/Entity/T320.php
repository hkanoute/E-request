<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t320
 *
 * @ORM\Table(name="tecdoc.t320", indexes={@ORM\Index(name="idx320_genartnr2102", columns={"genartnr"}), @ORM\Index(name="idx320_bgnr2102", columns={"bgnr"}), @ORM\Index(name="idx320_beznr2102", columns={"beznr"})})
 * @ORM\Entity(repositoryClass="App\Repository\T320Repository")
 */
class T320
{
    /**
     * @var string
     *
     * @ORM\Column(name="genartnr", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tecdoc.t320_genartnr_seq", allocationSize=1, initialValue=1)
     */
    private $genartnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nartnr", type="string", length=5, nullable=true)
     */
    private $nartnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bgnr", type="string", length=4, nullable=true)
     */
    private $bgnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dlnr", type="string", length=4, nullable=true)
     */
    private $dlnr;

    /**
     * @var string
     *
     * @ORM\Column(name="sa", type="string", length=3, nullable=false)
     */
    private $sa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="verwnr", type="string", length=4, nullable=true)
     */
    private $verwnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="beznr", type="string", length=9, nullable=true)
     */
    private $beznr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ok_pkw", type="string", length=1, nullable=true)
     */
    private $okPkw;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ok_nkw", type="string", length=1, nullable=true)
     */
    private $okNkw;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ok_motor", type="string", length=1, nullable=true)
     */
    private $okMotor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ok_universal", type="string", length=1, nullable=true)
     */
    private $okUniversal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ok_fzgunab", type="string", length=1, nullable=true)
     */
    private $okFzgunab;

    /**
     * @var string|null
     *
     * @ORM\Column(name="delete", type="string", length=1, nullable=true)
     */
    private $delete;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ok_achse", type="string", length=1, nullable=true)
     */
    private $okAchse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lflag", type="string", length=1, nullable=true)
     */
    private $lflag;

    public function getGenartnr(): ?string
    {
        return $this->genartnr;
    }

    public function getNartnr(): ?string
    {
        return $this->nartnr;
    }

    public function setNartnr(?string $nartnr): self
    {
        $this->nartnr = $nartnr;

        return $this;
    }

    public function getBgnr(): ?string
    {
        return $this->bgnr;
    }

    public function setBgnr(?string $bgnr): self
    {
        $this->bgnr = $bgnr;

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

    public function setSa(string $sa): self
    {
        $this->sa = $sa;

        return $this;
    }

    public function getVerwnr(): ?string
    {
        return $this->verwnr;
    }

    public function setVerwnr(?string $verwnr): self
    {
        $this->verwnr = $verwnr;

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

    public function getOkPkw(): ?string
    {
        return $this->okPkw;
    }

    public function setOkPkw(?string $okPkw): self
    {
        $this->okPkw = $okPkw;

        return $this;
    }

    public function getOkNkw(): ?string
    {
        return $this->okNkw;
    }

    public function setOkNkw(?string $okNkw): self
    {
        $this->okNkw = $okNkw;

        return $this;
    }

    public function getOkMotor(): ?string
    {
        return $this->okMotor;
    }

    public function setOkMotor(?string $okMotor): self
    {
        $this->okMotor = $okMotor;

        return $this;
    }

    public function getOkUniversal(): ?string
    {
        return $this->okUniversal;
    }

    public function setOkUniversal(?string $okUniversal): self
    {
        $this->okUniversal = $okUniversal;

        return $this;
    }

    public function getOkFzgunab(): ?string
    {
        return $this->okFzgunab;
    }

    public function setOkFzgunab(?string $okFzgunab): self
    {
        $this->okFzgunab = $okFzgunab;

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

    public function getOkAchse(): ?string
    {
        return $this->okAchse;
    }

    public function setOkAchse(?string $okAchse): self
    {
        $this->okAchse = $okAchse;

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
