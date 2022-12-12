<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t212
 *
 * @ORM\Table(name="tecdoc.t212", indexes={@ORM\Index(name="idxt212_dlnrartnr2102", columns={"artnr", "dlnr"}), @ORM\Index(name="idxt212_dlnr2102", columns={"dlnr"}), @ORM\Index(name="idxt212_artnr2102", columns={"artnr"})})
 * @ORM\Entity(repositoryClass="App\Repository\T212Repository")
 */
class T212
{
    /**
     * @var string
     *
     * @ORM\Column(name="artnr", type="string", length=22, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tecdoc.t212_artnr_seq", allocationSize=1, initialValue=1)
     */
    private $artnr;

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
     * @ORM\Column(name="lkz", type="string", length=3, nullable=true)
     */
    private $lkz;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vpe", type="string", length=5, nullable=true)
     */
    private $vpe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mengeprovpe", type="string", length=5, nullable=true)
     */
    private $mengeprovpe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="artstat", type="string", length=3, nullable=true)
     */
    private $artstat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="statusdat", type="string", length=8, nullable=true)
     */
    private $statusdat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lflag", type="string", length=1, nullable=true)
     */
    private $lflag;

    public function getArtnr(): ?string
    {
        return $this->artnr;
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

    public function getLkz(): ?string
    {
        return $this->lkz;
    }

    public function setLkz(?string $lkz): self
    {
        $this->lkz = $lkz;

        return $this;
    }

    public function getVpe(): ?string
    {
        return $this->vpe;
    }

    public function setVpe(?string $vpe): self
    {
        $this->vpe = $vpe;

        return $this;
    }

    public function getMengeprovpe(): ?string
    {
        return $this->mengeprovpe;
    }

    public function setMengeprovpe(?string $mengeprovpe): self
    {
        $this->mengeprovpe = $mengeprovpe;

        return $this;
    }

    public function getArtstat(): ?string
    {
        return $this->artstat;
    }

    public function setArtstat(?string $artstat): self
    {
        $this->artstat = $artstat;

        return $this;
    }

    public function getStatusdat(): ?string
    {
        return $this->statusdat;
    }

    public function setStatusdat(?string $statusdat): self
    {
        $this->statusdat = $statusdat;

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
