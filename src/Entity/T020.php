<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t020
 *
 * @ORM\Table(name="tecdoc.t020", indexes={@ORM\Index(name="t020_beznr_idx0404", columns={"beznr"}), @ORM\Index(name="idxt020_isocode2109", columns={"isocode"})})
 * @ORM\Entity(repositoryClass="App\Repository\T020Repository")
 */
class T020
{
    /**
     * @var string
     *
     * @ORM\Column(name="sprachnr", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tecdoc.t020_sprachnr_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="isocode", type="string", length=2, nullable=true)
     */
    private $isocode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codepage", type="string", length=4, nullable=true)
     */
    private $codepage;

    /**
     * @var string
     *
     * @ORM\Column(name="beznr", type="string", length=9, nullable=false)
     */
    private $beznr;

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

    public function getIsocode(): ?string
    {
        return $this->isocode;
    }

    public function setIsocode(?string $isocode): self
    {
        $this->isocode = $isocode;

        return $this;
    }

    public function getCodepage(): ?string
    {
        return $this->codepage;
    }

    public function setCodepage(?string $codepage): self
    {
        $this->codepage = $codepage;

        return $this;
    }

    public function getBeznr(): ?string
    {
        return $this->beznr;
    }

    public function setBeznr(string $beznr): self
    {
        $this->beznr = $beznr;

        return $this;
    }



}
