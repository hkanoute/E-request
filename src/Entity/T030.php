<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t030
 *
 * @ORM\Table(name="tecdoc.t030", indexes={@ORM\Index(name="idxt030_sprachnr2102", columns={"sprachnr"}), @ORM\Index(name="idxt030_dlnr2102", columns={"dlnr"}), @ORM\Index(name="idxt030_beznr2102", columns={"beznr"}), @ORM\Index(name="idxt030_bez2102", columns={"bez"})})
 * @ORM\Entity(repositoryClass="App\Repository\T030Repository")
 */
class T030
{
    /**
     * @var string
     *
     * @ORM\Column(name="beznr", type="string", length=9, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $beznr;

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
     * @ORM\Column(name="bez", type="string", length=60, nullable=true)
     */
    private $bez;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lflag", type="string", length=1, nullable=true)
     */
    private $lflag;

    public function getBeznr(): ?string
    {
        return $this->beznr;
    }

    public function getSprachnr(): ?string
    {
        return $this->sprachnr;
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

    public function getBez(): ?string
    {
        return $this->bez;
    }

    public function setBez(?string $bez): self
    {
        $this->bez = $bez;

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
