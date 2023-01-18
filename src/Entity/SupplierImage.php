<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Supplier4337.supplierImage
 *
 * @ORM\Table(name="supplier_4337.supplier_image")
 * @ORM\Entity(repositoryClass="App\Repository\SupplierImageRepository")
 */

class SupplierImage
{
    /**
     * @var string
     *
     * @ORM\Column(name="artnr", type="string", length=22, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="supplier_4337.supplier_image_artnr_seq", allocationSize=1, initialValue=1)
     */
    private $artnr;

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
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @param string|null $image
     */
    public function setImage(?string $image): void
    {
        $this->image = $image;
    }

    /**
     * @var string|null
     *
     * @ORM\Column(name="dlnr", type="string", length=4, nullable=true)
     */
    private $dlnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="text", nullable=true)
     */
    private $image;


}
