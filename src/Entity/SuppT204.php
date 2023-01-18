<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Supplier4337.t204
 *
 * @ORM\Table(name="supplier_4337.t204", indexes={@ORM\Index(name="IDX_C7E136FCB5CB5742", columns={"artnr"})})
 * @ORM\Entity(repositoryClass="App\Repository\SuppT204Repository")
 */
class SuppT204
{
    /**
     * @var string
     *
     * @ORM\Column(name="ersatznr", type="string", length=22, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="supplier_4337.t204_ersatznr_seq", allocationSize=1, initialValue=1)
     */
    private $ersatznr;

    /**
     * @return string
     */
    public function getErsatznr(): string
    {
        return $this->ersatznr;
    }

    /**
     * @param string $ersatznr
     */
    public function setErsatznr(string $ersatznr): void
    {
        $this->ersatznr = $ersatznr;
    }

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
    public function getSort(): ?string
    {
        return $this->sort;
    }

    /**
     * @param string|null $sort
     */
    public function setSort(?string $sort): void
    {
        $this->sort = $sort;
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
     * @ORM\Column(name="sort", type="string", length=5, nullable=true)
     */
    private $sort;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lflag", type="string", length=5, nullable=true)
     */
    private $lflag;

    /**
     * @var \Supplier4337.t200
     *
     * @ORM\ManyToOne(targetEntity="Supplier4337.t200")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="artnr", referencedColumnName="artnr")
     * })
     */
    private $artnr;


}
