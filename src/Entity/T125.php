<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t125
 *
 * @ORM\Table(name="tecdoc.t125", indexes={@ORM\Index(name="idxt125_ktypnr", columns={"ktypnr", "motnr"})})
 * @ORM\Entity(repositoryClass="App\Repository\T125Repository")
 */
class T125
{
    /**
     * @var string
     *
     * @ORM\Column(name="reserviert", type="string", length=22, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tecdoc.t125_reserviert_seq", allocationSize=1, initialValue=1)
     */
    private $reserviert;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dlnr", type="decimal", precision=4, scale=0, nullable=true)
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
     * @ORM\Column(name="ktypnr", type="decimal", precision=9, scale=0, nullable=true)
     */
    private $ktypnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lfdnr", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $lfdnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="motnr", type="string", length=5, nullable=true)
     */
    private $motnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bjvon", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $bjvon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bjbis", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $bjbis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lkz", type="string", length=3, nullable=true)
     */
    private $lkz;

    /**
     * @var string|null
     *
     * @ORM\Column(name="exclude", type="decimal", precision=1, scale=0, nullable=true)
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

    public function getKtypnr(): ?string
    {
        return $this->ktypnr;
    }

    public function setKtypnr(?string $ktypnr): self
    {
        $this->ktypnr = $ktypnr;

        return $this;
    }

    public function getLfdnr(): ?string
    {
        return $this->lfdnr;
    }

    public function setLfdnr(?string $lfdnr): self
    {
        $this->lfdnr = $lfdnr;

        return $this;
    }

    public function getMotnr(): ?string
    {
        return $this->motnr;
    }

    public function setMotnr(?string $motnr): self
    {
        $this->motnr = $motnr;

        return $this;
    }

    public function getBjvon(): ?string
    {
        return $this->bjvon;
    }

    public function setBjvon(?string $bjvon): self
    {
        $this->bjvon = $bjvon;

        return $this;
    }

    public function getBjbis(): ?string
    {
        return $this->bjbis;
    }

    public function setBjbis(?string $bjbis): self
    {
        $this->bjbis = $bjbis;

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
