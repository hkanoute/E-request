<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Supplier4337.supplierModel
 *
 * @ORM\Table(name="supplier_4337.supplier_model")
 * @ORM\Entity(repositoryClass="App\Repository\SupplierModelRepository")
 */
class SupplierModel
{
    /**
     * @return string
     */
    public function getLibBrande(): string
    {
        return $this->libBrande;
    }

    /**
     * @param string $libBrande
     */
    public function setLibBrande(string $libBrande): void
    {
        $this->libBrande = $libBrande;
    }

    /**
     * @return string
     */
    public function getLibModele(): string
    {
        return $this->libModele;
    }

    /**
     * @param string $libModele
     */
    public function setLibModele(string $libModele): void
    {
        $this->libModele = $libModele;
    }

    /**
     * @return string
     */
    public function getKhernr(): string
    {
        return $this->khernr;
    }

    /**
     * @param string $khernr
     */
    public function setKhernr(string $khernr): void
    {
        $this->khernr = $khernr;
    }

    /**
     * @return string
     */
    public function getKmodnr(): string
    {
        return $this->kmodnr;
    }

    /**
     * @param string $kmodnr
     */
    public function setKmodnr(string $kmodnr): void
    {
        $this->kmodnr = $kmodnr;
    }
    /**
     * @var string
     *
     * @ORM\Column(name="lib_brande", type="string", length=60, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="supplier_4337.supplier_model_lib_brande_seq", allocationSize=1, initialValue=1)
     */
    private $libBrande;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_modele", type="string", length=60, nullable=false)
     */
    private $libModele;

    /**
     * @var string
     *
     * @ORM\Column(name="khernr", type="string", length=6, nullable=false)
     */
    private $khernr;

    /**
     * @var string
     *
     * @ORM\Column(name="kmodnr", type="string", length=5, nullable=false)
     */
    private $kmodnr;


}
