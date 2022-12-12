<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t110
 *
 * @ORM\Table(name="tecdoc.t110", indexes={@ORM\Index(name="idxt110_kmodnr2102", columns={"kmodnr"}), @ORM\Index(name="idxt110_hernr2102", columns={"hernr"})})
 * @ORM\Entity(repositoryClass="App\Repository\T110Repository")
 */
class T110
{
    /**
     * @var string
     *
     * @ORM\Column(name="kmodnr", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tecdoc.t110_kmodnr_seq", allocationSize=1, initialValue=1)
     */
    private $kmodnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hernr", type="string", length=6, nullable=true)
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
     * @ORM\Column(name="lbeznr", type="string", length=9, nullable=true)
     */
    private $lbeznr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sortnr", type="string", length=3, nullable=true)
     */
    private $sortnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bjvon", type="string", length=6, nullable=true)
     */
    private $bjvon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bjbis", type="string", length=6, nullable=true)
     */
    private $bjbis;

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
     * @ORM\Column(name="achse", type="string", length=1, nullable=true)
     */
    private $achse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="delete", type="string", length=1, nullable=true)
     */
    private $delete;

    /**
     * @var string|null
     *
     * @ORM\Column(name="transporter", type="string", length=1, nullable=true)
     */
    private $transporter;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lflag", type="string", length=1, nullable=true)
     */
    private $lflag;

    public function getKmodnr(): ?string
    {
        return $this->kmodnr;
    }

    public function getHernr(): ?string
    {
        return $this->hernr;
    }

    public function setHernr(?string $hernr): self
    {
        $this->hernr = $hernr;

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

    public function getLbeznr(): ?string
    {
        return $this->lbeznr;
    }

    public function setLbeznr(?string $lbeznr): self
    {
        $this->lbeznr = $lbeznr;

        return $this;
    }

    public function getSortnr(): ?string
    {
        return $this->sortnr;
    }

    public function setSortnr(?string $sortnr): self
    {
        $this->sortnr = $sortnr;

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

    public function getAchse(): ?string
    {
        return $this->achse;
    }

    public function setAchse(?string $achse): self
    {
        $this->achse = $achse;

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

    public function getTransporter(): ?string
    {
        return $this->transporter;
    }

    public function setTransporter(?string $transporter): self
    {
        $this->transporter = $transporter;

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
