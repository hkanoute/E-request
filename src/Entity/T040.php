<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t040
 *
 * @ORM\Table(name="tecdoc.t040", indexes={@ORM\Index(name="idxt040_dlnr2102", columns={"dlnr"})})
 * @ORM\Entity(repositoryClass="App\Repository\T040Repository")
 */
class T040
{
    /**
     * @var string
     *
     * @ORM\Column(name="adressart", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $adressart;

    /**
     * @var string
     *
     * @ORM\Column(name="dlnr", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
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
     * @ORM\Column(name="bez", type="string", length=40, nullable=true)
     */
    private $bez;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bez2", type="string", length=40, nullable=true)
     */
    private $bez2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="strasse", type="string", length=40, nullable=true)
     */
    private $strasse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="strasse2", type="string", length=40, nullable=true)
     */
    private $strasse2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="postfach", type="string", length=10, nullable=true)
     */
    private $postfach;

    /**
     * @var string|null
     *
     * @ORM\Column(name="plzlkz", type="string", length=3, nullable=true)
     */
    private $plzlkz;

    /**
     * @var string|null
     *
     * @ORM\Column(name="plzort", type="string", length=8, nullable=true)
     */
    private $plzort;

    /**
     * @var string|null
     *
     * @ORM\Column(name="plzpf", type="string", length=8, nullable=true)
     */
    private $plzpf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="plzgr", type="string", length=8, nullable=true)
     */
    private $plzgr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ort", type="string", length=40, nullable=true)
     */
    private $ort;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ort2", type="string", length=40, nullable=true)
     */
    private $ort2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telefon", type="string", length=20, nullable=true)
     */
    private $telefon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fax", type="string", length=20, nullable=true)
     */
    private $fax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=60, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="web", type="string", length=60, nullable=true)
     */
    private $web;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lflag", type="string", length=1, nullable=true)
     */
    private $lflag;

    public function getAdressart(): ?string
    {
        return $this->adressart;
    }

    public function getDlnr(): ?string
    {
        return $this->dlnr;
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

    public function getBez(): ?string
    {
        return $this->bez;
    }

    public function setBez(?string $bez): self
    {
        $this->bez = $bez;

        return $this;
    }

    public function getBez2(): ?string
    {
        return $this->bez2;
    }

    public function setBez2(?string $bez2): self
    {
        $this->bez2 = $bez2;

        return $this;
    }

    public function getStrasse(): ?string
    {
        return $this->strasse;
    }

    public function setStrasse(?string $strasse): self
    {
        $this->strasse = $strasse;

        return $this;
    }

    public function getStrasse2(): ?string
    {
        return $this->strasse2;
    }

    public function setStrasse2(?string $strasse2): self
    {
        $this->strasse2 = $strasse2;

        return $this;
    }

    public function getPostfach(): ?string
    {
        return $this->postfach;
    }

    public function setPostfach(?string $postfach): self
    {
        $this->postfach = $postfach;

        return $this;
    }

    public function getPlzlkz(): ?string
    {
        return $this->plzlkz;
    }

    public function setPlzlkz(?string $plzlkz): self
    {
        $this->plzlkz = $plzlkz;

        return $this;
    }

    public function getPlzort(): ?string
    {
        return $this->plzort;
    }

    public function setPlzort(?string $plzort): self
    {
        $this->plzort = $plzort;

        return $this;
    }

    public function getPlzpf(): ?string
    {
        return $this->plzpf;
    }

    public function setPlzpf(?string $plzpf): self
    {
        $this->plzpf = $plzpf;

        return $this;
    }

    public function getPlzgr(): ?string
    {
        return $this->plzgr;
    }

    public function setPlzgr(?string $plzgr): self
    {
        $this->plzgr = $plzgr;

        return $this;
    }

    public function getOrt(): ?string
    {
        return $this->ort;
    }

    public function setOrt(?string $ort): self
    {
        $this->ort = $ort;

        return $this;
    }

    public function getOrt2(): ?string
    {
        return $this->ort2;
    }

    public function setOrt2(?string $ort2): self
    {
        $this->ort2 = $ort2;

        return $this;
    }

    public function getTelefon(): ?string
    {
        return $this->telefon;
    }

    public function setTelefon(?string $telefon): self
    {
        $this->telefon = $telefon;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getWeb(): ?string
    {
        return $this->web;
    }

    public function setWeb(?string $web): self
    {
        $this->web = $web;

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
