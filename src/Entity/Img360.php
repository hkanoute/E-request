<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Supplier4337.img360
 * @ORM\Table(name="supplier_4337.img_360")
 * @ORM\Entity(repositoryClass="App\Repository\Img360Repository")
 */
class Img360
{
    /**
     * @return string
     */
    public function getImg360Id(): string
    {
        return $this->img360_id;
    }

    /**
     * @param string $img360_id
     */
    public function setImg360Id(string $img360_id): void
    {
        $this->img360_id = $img360_id;
    }

    /**
     * @return string|null
     */
    public function getProdIdint(): ?string
    {
        return $this->prod_idint;
    }

    /**
     * @param string|null $prod_idint
     */
    public function setProdIdint(?string $prod_idint): void
    {
        $this->prod_idint = $prod_idint;
    }

    /**
     * @return string|null
     */
    public function getImg360Url(): ?string
    {
        return $this->img360_url;
    }

    /**
     * @param string|null $img360_url
     */
    public function setImg360Url(?string $img360_url): void
    {
        $this->img360_url = $img360_url;
    }
    /**
     * @var string
     *
     * @ORM\Column(name="img360_id", type="string", length=12, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="supplier_4337.img_360_img360_id_seq", allocationSize=1, initialValue=1)
     */
    private $img360_id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prod_idint", type="string", length=22, nullable=true)
     */
    private $prod_idint;

    /**
     * @var string|null
     *
     * @ORM\Column(name="img360_url", type="string", length=250, nullable=true)
     */
    private $img360_url;


}
