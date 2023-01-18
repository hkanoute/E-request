<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Supplier4337.t210
 *
 * @ORM\Table(name="supplier_4337.t210")
 * @ORM\Entity(repositoryClass="App\Repository\T210Repository")
 */
class SuppT210
{
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
    public function getLkz(): ?string
    {
        return $this->lkz;
    }

    /**
     * @param string|null $lkz
     */
    public function setLkz(?string $lkz): void
    {
        $this->lkz = $lkz;
    }

    /**
     * @return string
     */
    public function getSortnr(): string
    {
        return $this->sortnr;
    }

    /**
     * @param string $sortnr
     */
    public function setSortnr(string $sortnr): void
    {
        $this->sortnr = $sortnr;
    }

    /**
     * @return string|null
     */
    public function getKritnr(): ?string
    {
        return $this->kritnr;
    }

    /**
     * @param string|null $kritnr
     */
    public function setKritnr(?string $kritnr): void
    {
        $this->kritnr = $kritnr;
    }

    /**
     * @return string|null
     */
    public function getKritwert(): ?string
    {
        return $this->kritwert;
    }

    /**
     * @param string|null $kritwert
     */
    public function setKritwert(?string $kritwert): void
    {
        $this->kritwert = $kritwert;
    }

    /**
     * @return string|null
     */
    public function getAnzsofort(): ?string
    {
        return $this->anzsofort;
    }

    /**
     * @param string|null $anzsofort
     */
    public function setAnzsofort(?string $anzsofort): void
    {
        $this->anzsofort = $anzsofort;
    }

    /**
     * @return string|null
     */
    public function getExclude(): ?string
    {
        return $this->exclude;
    }

    /**
     * @param string|null $exclude
     */
    public function setExclude(?string $exclude): void
    {
        $this->exclude = $exclude;
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
     * @return \Supplier4337
     */
    public function getArtnr(): \Supplier4337
    {
        return $this->artnr;
    }

    /**
     * @param \Supplier4337 $artnr
     */
    public function setArtnr(\Supplier4337 $artnr): void
    {
        $this->artnr = $artnr;
    }

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
     * @var string
     *
     * @ORM\Column(name="sortnr", type="string", length=3, nullable=false)
     */
    private $sortnr;

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
     * @var \Supplier4337.t200
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Supplier4337.t200")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="artnr", referencedColumnName="artnr")
     * })
     */
    private $artnr;


}
