<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Supplier4337.t231
 *
 * @ORM\Table(name="supplier_4337.t231")
 * @ORM\Entity(repositoryClass="App\Repository\SuppT231Repository")
 */
class SuppT231
{
    /**
     * @var string
     *
     * @ORM\Column(name="dlnr", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="supplier_4337.t231_dlnr_seq", allocationSize=1, initialValue=1)
     */
    private $dlnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reserviert", type="string", length=22, nullable=true)
     */
    private $reserviert;

    /**
     * @return string
     */
    public function getDlnr(): string
    {
        return $this->dlnr;
    }

    /**
     * @param string $dlnr
     */
    public function setDlnr(string $dlnr): void
    {
        $this->dlnr = $dlnr;
    }

    /**
     * @return string|null
     */
    public function getReserviert(): ?string
    {
        return $this->reserviert;
    }

    /**
     * @param string|null $reserviert
     */
    public function setReserviert(?string $reserviert): void
    {
        $this->reserviert = $reserviert;
    }

    /**
     * @return string|null
     */
    public function getSa(): ?string
    {
        return $this->sa;
    }

    /**
     * @param string|null $sa
     */
    public function setSa(?string $sa): void
    {
        $this->sa = $sa;
    }

    /**
     * @return string|null
     */
    public function getBildnr(): ?string
    {
        return $this->bildnr;
    }

    /**
     * @param string|null $bildnr
     */
    public function setBildnr(?string $bildnr): void
    {
        $this->bildnr = $bildnr;
    }

    /**
     * @return string|null
     */
    public function getSprachnr(): ?string
    {
        return $this->sprachnr;
    }

    /**
     * @param string|null $sprachnr
     */
    public function setSprachnr(?string $sprachnr): void
    {
        $this->sprachnr = $sprachnr;
    }

    /**
     * @return string|null
     */
    public function getBildname(): ?string
    {
        return $this->bildname;
    }

    /**
     * @param string|null $bildname
     */
    public function setBildname(?string $bildname): void
    {
        $this->bildname = $bildname;
    }

    /**
     * @return string|null
     */
    public function getBildtype(): ?string
    {
        return $this->bildtype;
    }

    /**
     * @param string|null $bildtype
     */
    public function setBildtype(?string $bildtype): void
    {
        $this->bildtype = $bildtype;
    }

    /**
     * @return string|null
     */
    public function getBeznorme(): ?string
    {
        return $this->beznorme;
    }

    /**
     * @param string|null $beznorme
     */
    public function setBeznorme(?string $beznorme): void
    {
        $this->beznorme = $beznorme;
    }

    /**
     * @return string|null
     */
    public function getBreit(): ?string
    {
        return $this->breit;
    }

    /**
     * @param string|null $breit
     */
    public function setBreit(?string $breit): void
    {
        $this->breit = $breit;
    }

    /**
     * @return string|null
     */
    public function getHoch(): ?string
    {
        return $this->hoch;
    }

    /**
     * @param string|null $hoch
     */
    public function setHoch(?string $hoch): void
    {
        $this->hoch = $hoch;
    }

    /**
     * @return string|null
     */
    public function getFarben(): ?string
    {
        return $this->farben;
    }

    /**
     * @param string|null $farben
     */
    public function setFarben(?string $farben): void
    {
        $this->farben = $farben;
    }

    /**
     * @return string|null
     */
    public function getDokumentenart(): ?string
    {
        return $this->dokumentenart;
    }

    /**
     * @param string|null $dokumentenart
     */
    public function setDokumentenart(?string $dokumentenart): void
    {
        $this->dokumentenart = $dokumentenart;
    }

    /**
     * @return string|null
     */
    public function getBeznr(): ?string
    {
        return $this->beznr;
    }

    /**
     * @param string|null $beznr
     */
    public function setBeznr(?string $beznr): void
    {
        $this->beznr = $beznr;
    }

    /**
     * @return string|null
     */
    public function getLflag(): ?string
    {
        return $this->lflag;
    }

    /**
     * @param string|null $lflag
     */
    public function setLflag(?string $lflag): void
    {
        $this->lflag = $lflag;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string|null $url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    /**
     * @var string|null
     *
     * @ORM\Column(name="sa", type="string", length=3, nullable=true)
     */
    private $sa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bildnr", type="string", length=9, nullable=true)
     */
    private $bildnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sprachnr", type="string", length=3, nullable=true)
     */
    private $sprachnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bildname", type="string", length=30, nullable=true)
     */
    private $bildname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bildtype", type="string", length=3, nullable=true)
     */
    private $bildtype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="beznorme", type="string", length=3, nullable=true)
     */
    private $beznorme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="breit", type="string", length=4, nullable=true)
     */
    private $breit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hoch", type="string", length=4, nullable=true)
     */
    private $hoch;

    /**
     * @var string|null
     *
     * @ORM\Column(name="farben", type="string", length=3, nullable=true)
     */
    private $farben;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dokumentenart", type="string", length=2, nullable=true)
     */
    private $dokumentenart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="beznr", type="string", length=6, nullable=true)
     */
    private $beznr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lflag", type="string", length=1, nullable=true)
     */
    private $lflag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;


}
