<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t014
 *
 * @ORM\Table(name="tecdoc.t014")
 * @ORM\Entity(repositoryClass="App\Repository\T014Repository")
 */
class T014
{
    /**
     * @var string
     *
     * @ORM\Column(name="dokumentenart", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tecdoc.t014_dokumentenart_seq", allocationSize=1, initialValue=1)
     */
    private $dokumentenart;

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

    /**
     * @var string|null
     *
     * @ORM\Column(name="extension", type="string", length=3, nullable=true)
     */
    private $extension;

    public function getDokumentenart(): ?string
    {
        return $this->dokumentenart;
    }

    /**
     * @param string $dokumentenart
     */
    public function setDokumentenart(string $dokumentenart): void
    {
        $this->dokumentenart = $dokumentenart;
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

    public function getExtension(): ?string
    {
        return $this->extension;
    }

    public function setExtension(?string $extension): self
    {
        $this->extension = $extension;

        return $this;
    }


}
