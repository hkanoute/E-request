<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t210
 *
 * @ORM\Table(name="tecdoc.t210", indexes={@ORM\Index(name="idxt210_sortnr2102", columns={"sortnr"}), @ORM\Index(name="idxt210_lkz2102", columns={"lkz"}), @ORM\Index(name="idxt210_dlnr2102", columns={"dlnr"}), @ORM\Index(name="idxt210_artnr2102", columns={"artnr", "dlnr"})})
 * @ORM\Entity(repositoryClass="App\Repository\T210Repository")
 */
class T210
{
    /**
     * @var string
     *
     * @ORM\Column(name="artnr_dlnr_sortnr", type="string", length=29, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tecdoc.t210_artnr_dlnr_sortnr_seq", allocationSize=1, initialValue=1)
     */
    private $artnrDlnrSortnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lkz", type="string", length=3, nullable=true)
     */
    private $lkz;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sa", type="string", length=3, nullable=true)
     */
    private $sa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reserviert", type="string", length=5, nullable=true)
     */
    private $reserviert;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kritnr", type="string", length=4, nullable=true)
     */
    private $kritnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kritwert", type="string", length=20, nullable=true)
     */
    private $kritwert;

    /**
     * @var string|null
     *
     * @ORM\Column(name="anzsofort", type="string", length=1, nullable=true)
     */
    private $anzsofort;

    /**
     * @var string|null
     *
     * @ORM\Column(name="exclude", type="string", length=1, nullable=true)
     */
    private $exclude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lflag", type="string", length=1, nullable=true)
     */
    private $lflag;

    /**
     * @var string
     *
     * @ORM\Column(name="sortnr", type="string", length=3, nullable=false)
     */
    private $sortnr;

    /**
     *
     * @ORM\ManyToOne(targetEntity="T200")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="artnr", referencedColumnName="artnr"),
     *   @ORM\JoinColumn(name="dlnr", referencedColumnName="dlnr")
     * })
     */
    private $artnr;

    public function getArtnrDlnrSortnr(): ?string
    {
        return $this->artnrDlnrSortnr;
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

    public function getSa(): ?string
    {
        return $this->sa;
    }

    public function setSa(?string $sa): self
    {
        $this->sa = $sa;

        return $this;
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

    public function getKritnr(): ?string
    {
        return $this->kritnr;
    }

    public function setKritnr(?string $kritnr): self
    {
        $this->kritnr = $kritnr;

        return $this;
    }

    public function getKritwert(): ?string
    {
        return $this->kritwert;
    }

    public function setKritwert(?string $kritwert): self
    {
        $this->kritwert = $kritwert;

        return $this;
    }

    public function getAnzsofort(): ?string
    {
        return $this->anzsofort;
    }

    public function setAnzsofort(?string $anzsofort): self
    {
        $this->anzsofort = $anzsofort;

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

    public function getLflag(): ?string
    {
        return $this->lflag;
    }

    public function setLflag(?string $lflag): self
    {
        $this->lflag = $lflag;

        return $this;
    }

    public function getSortnr(): ?string
    {
        return $this->sortnr;
    }

    public function setSortnr(string $sortnr): self
    {
        $this->sortnr = $sortnr;

        return $this;
    }

    public function getArtnr(): ?T200
    {
        return $this->artnr;
    }

    public function setArtnr(?T200 $artnr): self
    {
        $this->artnr = $artnr;

        return $this;
    }


}
