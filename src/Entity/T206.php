<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t206
 *
 * @ORM\Table(name="tecdoc.t206", indexes={@ORM\Index(name="idxt206_dlnr2102", columns={"dlnr"}), @ORM\Index(name="idxt206_artnr2102", columns={"dlnr", "artnr"})})
 * @ORM\Entity(repositoryClass="App\Repository\T206Repository")
 */
class T206
{
    /**
     * @var string
     *
     * @ORM\Column(name="artnr", type="string", length=22, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $artnr;

    /**
     * @var string
     *
     * @ORM\Column(name="dlnr", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dlnr;

    /**
     * @var string
     *
     * @ORM\Column(name="sortnr", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sortnr;

    /**
     * @var string
     *
     * @ORM\Column(name="sa", type="string", length=3, nullable=false)
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
     * @ORM\Column(name="lkz", type="string", length=3, nullable=true)
     */
    private $lkz;

    /**
     * @var string|null
     *
     * @ORM\Column(name="infart", type="string", length=3, nullable=true)
     */
    private $infart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="anzsofort", type="string", length=1, nullable=true)
     */
    private $anzsofort;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tbsnr", type="string", length=6, nullable=true)
     */
    private $tbsnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="exclude", type="string", length=1, nullable=true)
     */
    private $exclude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="losch_flag", type="string", length=1, nullable=true)
     */
    private $loschFlag;

    public function getArtnr(): ?string
    {
        return $this->artnr;
    }

    public function getDlnr(): ?string
    {
        return $this->dlnr;
    }

    public function getSortnr(): ?string
    {
        return $this->sortnr;
    }

    public function getSa(): ?string
    {
        return $this->sa;
    }

    public function setSa(string $sa): self
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

    public function getLkz(): ?string
    {
        return $this->lkz;
    }

    public function setLkz(?string $lkz): self
    {
        $this->lkz = $lkz;

        return $this;
    }

    public function getInfart(): ?string
    {
        return $this->infart;
    }

    public function setInfart(?string $infart): self
    {
        $this->infart = $infart;

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

    public function getTbsnr(): ?string
    {
        return $this->tbsnr;
    }

    public function setTbsnr(?string $tbsnr): self
    {
        $this->tbsnr = $tbsnr;

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

    public function getLoschFlag(): ?string
    {
        return $this->loschFlag;
    }

    public function setLoschFlag(?string $loschFlag): self
    {
        $this->loschFlag = $loschFlag;

        return $this;
    }


}
