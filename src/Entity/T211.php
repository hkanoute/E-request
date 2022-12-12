<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t211
 *
 * @ORM\Table(name="tecdoc.t211", indexes={@ORM\Index(name="idxt211_genartnr2102", columns={"genartnr"}), @ORM\Index(name="idxt211_dlnr2102", columns={"dlnr"}), @ORM\Index(name="idxt211_artnr2102", columns={"artnr", "dlnr"})})
 * @ORM\Entity(repositoryClass="App\Repository\T211Repository")
 */
class T211
{
    /**
     * @var string
     *
     * @ORM\Column(name="artnr_dlnr_genartnr", type="string", length=31, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tecdoc.t211_artnr_dlnr_genartnr_seq", allocationSize=1, initialValue=1)
     */
    private $artnrDlnrGenartnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="artnr", type="string", length=22, nullable=true)
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
     * @ORM\Column(name="genartnr", type="string", length=5, nullable=true)
     */
    private $genartnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sa", type="string", length=3, nullable=true)
     */
    private $sa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lflag", type="string", length=1, nullable=true)
     */
    private $lflag;

    public function getArtnrDlnrGenartnr(): ?string
    {
        return $this->artnrDlnrGenartnr;
    }

    public function getArtnr(): ?string
    {
        return $this->artnr;
    }

    public function setArtnr(?string $artnr): self
    {
        $this->artnr = $artnr;

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

    public function getGenartnr(): ?string
    {
        return $this->genartnr;
    }

    public function setGenartnr(?string $genartnr): self
    {
        $this->genartnr = $genartnr;

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
