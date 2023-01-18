<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Supplier4337.t211
 *
 * @ORM\Table(name="supplier_4337.t211")
 * @ORM\Entity(repositoryClass="App\Repository\SuppT211Repository")
 */
class SuppT211
{
    /**
     * @var string
     *
     * @ORM\Column(name="artnr", type="string", length=22, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="supplier_4337.t211_artnr_seq", allocationSize=1, initialValue=1)
     */
    private $artnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dlnr", type="string", length=4, nullable=true)
     */
    private $dlnr;

    /**
     * @return string
     */
    public function getArtnr(): string
    {
        return $this->artnr;
    }

    /**
     * @param string $artnr
     */
    public function setArtnr(string $artnr): void
    {
        $this->artnr = $artnr;
    }

    /**
     * @return string|null
     */
    public function getDlnr(): ?string
    {
        return $this->dlnr;
    }

    /**
     * @param string|null $dlnr
     */
    public function setDlnr(?string $dlnr): void
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
    public function getGenartnr(): ?string
    {
        return $this->genartnr;
    }

    /**
     * @param string|null $genartnr
     */
    public function setGenartnr(?string $genartnr): void
    {
        $this->genartnr = $genartnr;
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
     * @var string|null
     *
     * @ORM\Column(name="sa", type="string", length=3, nullable=true)
     */
    private $sa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="genartnr", type="string", length=5, nullable=true)
     */
    private $genartnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lflag", type="string", length=1, nullable=true)
     */
    private $lflag;


}
