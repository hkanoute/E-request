<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Supplier4337.t232
 *
 * @ORM\Table(name="supplier_4337.t232")
 * @ORM\Entity(repositoryClass="App\Repository\SuppT232Repository")
 */
class SuppT232
{
    /**
     * @var string
     *
     * @ORM\Column(name="dlnr", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="supplier_4337.t232_dlnr_seq", allocationSize=1, initialValue=1)
     */
    private $dlnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="artnr", type="string", length=22, nullable=true)
     */
    private $artnr;

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
    public function getArtnr(): ?string
    {
        return $this->artnr;
    }

    /**
     * @param string|null $artnr
     */
    public function setArtnr(?string $artnr): void
    {
        $this->artnr = $artnr;
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
    public function getSortnr(): ?string
    {
        return $this->sortnr;
    }

    /**
     * @param string|null $sortnr
     */
    public function setSortnr(?string $sortnr): void
    {
        $this->sortnr = $sortnr;
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
    public function getDocumentart(): ?string
    {
        return $this->documentart;
    }

    /**
     * @param string|null $documentart
     */
    public function setDocumentart(?string $documentart): void
    {
        $this->documentart = $documentart;
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
     * @ORM\Column(name="sortnr", type="string", length=2, nullable=true)
     */
    private $sortnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lkz", type="string", length=3, nullable=true)
     */
    private $lkz;

    /**
     * @var string|null
     *
     * @ORM\Column(name="exclude", type="string", length=1, nullable=true)
     */
    private $exclude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bildnr", type="string", length=9, nullable=true)
     */
    private $bildnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="documentart", type="string", length=2, nullable=true)
     */
    private $documentart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lflag", type="string", length=1, nullable=true)
     */
    private $lflag;


}
