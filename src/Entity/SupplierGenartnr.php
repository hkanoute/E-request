<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Supplier4337.supplierGenartnr
 *
 * @ORM\Table(name="supplier_4337.supplier_genartnr", indexes={@ORM\Index(name="supplier_supplier_genartnr_idx", columns={"genartnr"})})
 * @ORM\Entity(repositoryClass="App\Repository\SupplierGenartnrRepository")
 */
class SupplierGenartnr
{
    /**
     * @return int
     */
    public function getCodeGroupe(): int
    {
        return $this->codeGroupe;
    }

    /**
     * @param int $codeGroupe
     */
    public function setCodeGroupe(int $codeGroupe): void
    {
        $this->codeGroupe = $codeGroupe;
    }

    /**
     * @return int
     */
    public function getCodeSsgroupe(): int
    {
        return $this->codeSsgroupe;
    }

    /**
     * @param int $codeSsgroupe
     */
    public function setCodeSsgroupe(int $codeSsgroupe): void
    {
        $this->codeSsgroupe = $codeSsgroupe;
    }

    /**
     * @return int
     */
    public function getCodeRepere(): int
    {
        return $this->codeRepere;
    }

    /**
     * @param int $codeRepere
     */
    public function setCodeRepere(int $codeRepere): void
    {
        $this->codeRepere = $codeRepere;
    }

    /**
     * @return string
     */
    public function getGenartnr(): string
    {
        return $this->genartnr;
    }

    /**
     * @param string $genartnr
     */
    public function setGenartnr(string $genartnr): void
    {
        $this->genartnr = $genartnr;
    }
    /**
     * @var int
     *
     * @ORM\Column(name="code_groupe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codeGroupe;

    /**
     * @var int
     *
     * @ORM\Column(name="code_ssgroupe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codeSsgroupe;

    /**
     * @var int
     *
     * @ORM\Column(name="code_repere", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codeRepere;

    /**
     * @var string
     *
     * @ORM\Column(name="genartnr", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $genartnr;


}
