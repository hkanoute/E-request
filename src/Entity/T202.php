<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t202
 *
 * @ORM\Table(name="tecdoc.t202", indexes={@ORM\Index(name="idxt202_lkz2714", columns={"lkz"}), @ORM\Index(name="idxt202_lkz2102", columns={"lkz"}), @ORM\Index(name="idxt202_lkz0714", columns={"lkz"}), @ORM\Index(name="idxt202_dlnr2102", columns={"dlnr"}), @ORM\Index(name="idxt202_artnr2102", columns={"dlnr", "artnr"})})
 * @ORM\Entity(repositoryClass="App\Repository\T202Repository")
 */
class T202
{
    /**
     * @var string
     *
     * @ORM\Column(name="artnr", type="string", length=22, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $artnr;

    /**
     * @var string
     *
     * @ORM\Column(name="dlnr", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dlnr;

    /**
     * @var string
     *
     * @ORM\Column(name="lkz", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $lkz;

    /**
     * @var string
     *
     * @ORM\Column(name="sa", type="string", length=3, nullable=false)
     */
    private $sa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="exclude", type="string", length=1, nullable=true)
     */
    private $exclude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="losch_flag", type="string", length=1, nullable=true)
     */
    private $loschFlag;

    public function getArtnr(): ?string
    {
        return $this->artnr;
    }

    public function getDlnr(): ?string
    {
        return $this->dlnr;
    }

    public function getLkz(): ?string
    {
        return $this->lkz;
    }

    public function getSa(): ?string
    {
        return $this->sa;
    }

    public function setSa(string $sa): self
    {
        $this->sa = $sa;

        return $this;
    }

    public function getExclude(): ?string
    {
        return $this->exclude;
    }

    public function setExclude(?string $exclude): self
    {
        $this->exclude = $exclude;

        return $this;
    }

    public function getLoschFlag(): ?string
    {
        return $this->loschFlag;
    }

    public function setLoschFlag(?string $loschFlag): self
    {
        $this->loschFlag = $loschFlag;

        return $this;
    }


}
