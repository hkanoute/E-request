<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t122
 *
 * @ORM\Table(name="tecdoc.t122", indexes={@ORM\Index(name="idxt122_ktypenr2102", columns={"KTypeNr", "LKZ"})})
 * @ORM\Entity(repositoryClass="App\Repository\T122Repository")
 */
class T122
{
    /**
     * @var string
     *
     * @ORM\Column(name="Reserviert", type="string", length=22, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tecdoc.t122_Reserviert_seq", allocationSize=1, initialValue=1)
     */
    private $reserviert;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DLNr", type="string", length=4, nullable=true)
     */
    private $dlnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SA", type="string", length=3, nullable=true)
     */
    private $sa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="KTypeNr", type="decimal", precision=9, scale=0, nullable=true)
     */
    private $ktypenr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LKZ", type="string", length=3, nullable=true)
     */
    private $lkz;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Exclude", type="string", length=1, nullable=true)
     */
    private $exclude;

    public function getReserviert(): ?string
    {
        return $this->reserviert;
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

    public function getKtypenr(): ?string
    {
        return $this->ktypenr;
    }

    public function setKtypenr(?string $ktypenr): self
    {
        $this->ktypenr = $ktypenr;

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

    public function getExclude(): ?string
    {
        return $this->exclude;
    }

    public function setExclude(?string $exclude): self
    {
        $this->exclude = $exclude;

        return $this;
    }


}
