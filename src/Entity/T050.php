<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t050
 *
 * @ORM\Table(name="tecdoc.t050", indexes={@ORM\Index(name="idxt050_typ2102", columns={"typ"}), @ORM\Index(name="idxt050_kritnr2102", columns={"kritnr"}), @ORM\Index(name="idxt050_beznr2102", columns={"beznr"})})
 * @ORM\Entity(repositoryClass="App\Repository\T050Repository")
 */
class T050
{
    /**
     * @var string
     *
     * @ORM\Column(name="dlnr", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dlnr;

    /**
     * @var string
     *
     * @ORM\Column(name="kritnr", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $kritnr;

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
     * @ORM\Column(name="typ", type="string", length=1, nullable=true)
     */
    private $typ;

    /**
     * @var string|null
     *
     * @ORM\Column(name="maxlen", type="string", length=2, nullable=true)
     */
    private $maxlen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ok_artikel", type="string", length=1, nullable=true)
     */
    private $okArtikel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tabnr", type="string", length=3, nullable=true)
     */
    private $tabnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ok_nkw", type="string", length=1, nullable=true)
     */
    private $okNkw;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ok_okw", type="string", length=1, nullable=true)
     */
    private $okOkw;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ok_motor", type="string", length=1, nullable=true)
     */
    private $okMotor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ok_fahrerhaus", type="string", length=1, nullable=true)
     */
    private $okFahrerhaus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stucklisten", type="string", length=1, nullable=true)
     */
    private $stucklisten;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zuberhor", type="string", length=1, nullable=true)
     */
    private $zuberhor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mehrfach", type="string", length=1, nullable=true)
     */
    private $mehrfach;

    /**
     * @var string|null
     *
     * @ORM\Column(name="beznrabk", type="string", length=9, nullable=true)
     */
    private $beznrabk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="beznreinheint", type="string", length=9, nullable=true)
     */
    private $beznreinheint;

    /**
     * @var string|null
     *
     * @ORM\Column(name="intervalvcriterion", type="string", length=1, nullable=true)
     */
    private $intervalvcriterion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nachfolhe", type="string", length=4, nullable=true)
     */
    private $nachfolhe;

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

    public function getDlnr(): ?string
    {
        return $this->dlnr;
    }

    public function getKritnr(): ?string
    {
        return $this->kritnr;
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

    public function getBeznr(): ?string
    {
        return $this->beznr;
    }

    public function setBeznr(?string $beznr): self
    {
        $this->beznr = $beznr;

        return $this;
    }

    public function getTyp(): ?string
    {
        return $this->typ;
    }

    public function setTyp(?string $typ): self
    {
        $this->typ = $typ;

        return $this;
    }

    public function getMaxlen(): ?string
    {
        return $this->maxlen;
    }

    public function setMaxlen(?string $maxlen): self
    {
        $this->maxlen = $maxlen;

        return $this;
    }

    public function getOkArtikel(): ?string
    {
        return $this->okArtikel;
    }

    public function setOkArtikel(?string $okArtikel): self
    {
        $this->okArtikel = $okArtikel;

        return $this;
    }

    public function getTabnr(): ?string
    {
        return $this->tabnr;
    }

    public function setTabnr(?string $tabnr): self
    {
        $this->tabnr = $tabnr;

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

    public function getOkOkw(): ?string
    {
        return $this->okOkw;
    }

    public function setOkOkw(?string $okOkw): self
    {
        $this->okOkw = $okOkw;

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

    public function getOkFahrerhaus(): ?string
    {
        return $this->okFahrerhaus;
    }

    public function setOkFahrerhaus(?string $okFahrerhaus): self
    {
        $this->okFahrerhaus = $okFahrerhaus;

        return $this;
    }

    public function getStucklisten(): ?string
    {
        return $this->stucklisten;
    }

    public function setStucklisten(?string $stucklisten): self
    {
        $this->stucklisten = $stucklisten;

        return $this;
    }

    public function getZuberhor(): ?string
    {
        return $this->zuberhor;
    }

    public function setZuberhor(?string $zuberhor): self
    {
        $this->zuberhor = $zuberhor;

        return $this;
    }

    public function getMehrfach(): ?string
    {
        return $this->mehrfach;
    }

    public function setMehrfach(?string $mehrfach): self
    {
        $this->mehrfach = $mehrfach;

        return $this;
    }

    public function getBeznrabk(): ?string
    {
        return $this->beznrabk;
    }

    public function setBeznrabk(?string $beznrabk): self
    {
        $this->beznrabk = $beznrabk;

        return $this;
    }

    public function getBeznreinheint(): ?string
    {
        return $this->beznreinheint;
    }

    public function setBeznreinheint(?string $beznreinheint): self
    {
        $this->beznreinheint = $beznreinheint;

        return $this;
    }

    public function getIntervalvcriterion(): ?string
    {
        return $this->intervalvcriterion;
    }

    public function setIntervalvcriterion(?string $intervalvcriterion): self
    {
        $this->intervalvcriterion = $intervalvcriterion;

        return $this;
    }

    public function getNachfolhe(): ?string
    {
        return $this->nachfolhe;
    }

    public function setNachfolhe(?string $nachfolhe): self
    {
        $this->nachfolhe = $nachfolhe;

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
