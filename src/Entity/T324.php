<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t324
 *
 * @ORM\Table(name="tecdoc.t324", indexes={@ORM\Index(name="idxt324_bgnr2102", columns={"bgnr"}), @ORM\Index(name="idxt324_beznr2102", columns={"beznr"})})
 * @ORM\Entity(repositoryClass="App\Repository\T324Repository")
 */
class T324
{
    /**
     * @var string
     *
     * @ORM\Column(name="bgnr", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tecdoc.t324_bgnr_seq", allocationSize=1, initialValue=1)
     */
    private $bgnr;

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
     * @ORM\Column(name="beznr", type="string", length=9, nullable=true)
     */
    private $beznr;

    public function getBgnr(): ?string
    {
        return $this->bgnr;
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

    public function getBeznr(): ?string
    {
        return $this->beznr;
    }

    public function setBeznr(?string $beznr): self
    {
        $this->beznr = $beznr;

        return $this;
    }


}
