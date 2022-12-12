<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t100
 *
 * @ORM\Table(name="tecdoc.t100", indexes={@ORM\Index(name="idxt100_lbeznr2102s", columns={"lbeznr"}), @ORM\Index(name="idxt100_hernr2102s", columns={"hernr"})})
 * @ORM\Entity(repositoryClass="App\Repository\T100Repository")
 */
class T100
{
    /**
     * @var string
     *
     * @ORM\Column(name="hernr", type="string", length=6, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tecdoc.t100_hernr_seq", allocationSize=1, initialValue=1)
     */
    private $hernr;

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
     * @ORM\Column(name="hkz", type="string", length=10, nullable=true)
     */
    private $hkz;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lbeznr", type="string", length=9, nullable=true)
     */
    private $lbeznr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pkw", type="string", length=1, nullable=true)
     */
    private $pkw;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nkw", type="string", length=1, nullable=true)
     */
    private $nkw;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vgl", type="string", length=1, nullable=true)
     */
    private $vgl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="achse", type="string", length=1, nullable=true)
     */
    private $achse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="getriebe", type="string", length=1, nullable=true)
     */
    private $getriebe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="motor", type="string", length=1, nullable=true)
     */
    private $motor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="transporter", type="string", length=1, nullable=true)
     */
    private $transporter;

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

    public function getHernr(): ?string
    {
        return $this->hernr;
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

    public function getHkz(): ?string
    {
        return $this->hkz;
    }

    public function setHkz(?string $hkz): self
    {
        $this->hkz = $hkz;

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

    public function getPkw(): ?string
    {
        return $this->pkw;
    }

    public function setPkw(?string $pkw): self
    {
        $this->pkw = $pkw;

        return $this;
    }

    public function getNkw(): ?string
    {
        return $this->nkw;
    }

    public function setNkw(?string $nkw): self
    {
        $this->nkw = $nkw;

        return $this;
    }

    public function getVgl(): ?string
    {
        return $this->vgl;
    }

    public function setVgl(?string $vgl): self
    {
        $this->vgl = $vgl;

        return $this;
    }

    public function getAchse(): ?string
    {
        return $this->achse;
    }

    public function setAchse(?string $achse): self
    {
        $this->achse = $achse;

        return $this;
    }

    public function getGetriebe(): ?string
    {
        return $this->getriebe;
    }

    public function setGetriebe(?string $getriebe): self
    {
        $this->getriebe = $getriebe;

        return $this;
    }

    public function getMotor(): ?string
    {
        return $this->motor;
    }

    public function setMotor(?string $motor): self
    {
        $this->motor = $motor;

        return $this;
    }

    public function getTransporter(): ?string
    {
        return $this->transporter;
    }

    public function setTransporter(?string $transporter): self
    {
        $this->transporter = $transporter;

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
