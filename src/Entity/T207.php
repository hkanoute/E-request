<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t207
 *
 * @ORM\Table(name="tecdoc.t207", indexes={@ORM\Index(name="idxt207_dlnr2102", columns={"dlnr"}), @ORM\Index(name="idxt207_artnr2102", columns={"dlnr", "artnr"})})
 * @ORM\Entity(repositoryClass="App\Repository\T207Repository")
 */
class T207
{
    /**
     * @var string
     *
     * @ORM\Column(name="artnr", type="string", length=22, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tecdoc.t207_artnr_seq", allocationSize=1, initialValue=1)
     */
    private $artnr;

    /**
     * @var string
     *
     * @ORM\Column(name="dlnr", type="string", length=4, nullable=false)
     */
    private $dlnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sa", type="string", length=3, nullable=true)
     */
    private $sa;

    /**
     * @var string
     *
     * @ORM\Column(name="lkz", type="string", length=3, nullable=false)
     */
    private $lkz;

    /**
     * @var string
     *
     * @ORM\Column(name="gebrnr", type="string", length=35, nullable=false)
     */
    private $gebrnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="exclude", type="string", length=1, nullable=true)
     */
    private $exclude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="anzsofort", type="string", length=1, nullable=true)
     */
    private $anzsofort;

    /**
     * @var string
     *
     * @ORM\Column(name="sort", type="string", length=5, nullable=false)
     */
    private $sort;

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

    public function setDlnr(string $dlnr): self
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

    public function setLkz(string $lkz): self
    {
        $this->lkz = $lkz;

        return $this;
    }

    public function getGebrnr(): ?string
    {
        return $this->gebrnr;
    }

    public function setGebrnr(string $gebrnr): self
    {
        $this->gebrnr = $gebrnr;

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

    public function getAnzsofort(): ?string
    {
        return $this->anzsofort;
    }

    public function setAnzsofort(?string $anzsofort): self
    {
        $this->anzsofort = $anzsofort;

        return $this;
    }

    public function getSort(): ?string
    {
        return $this->sort;
    }

    public function setSort(string $sort): self
    {
        $this->sort = $sort;

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
