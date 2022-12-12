<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t156
 *
 * @ORM\Table(name="tecdoc.t156", indexes={@ORM\Index(name="idxt156_motnr2102", columns={"motnr"})})
 * @ORM\Entity(repositoryClass="App\Repository\T156Repository")
 */
class T156
{
    /**
     * @var string
     *
     * @ORM\Column(name="motnr", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $motnr;

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
     * @ORM\Column(name="dlnr", type="string", length=4, nullable=false)
     */
    private $dlnr;

    /**
     * @var string
     *
     * @ORM\Column(name="sa", type="string", length=3, nullable=false)
     */
    private $sa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="losch_flag", type="string", length=1, nullable=true)
     */
    private $loschFlag;

    public function getMotnr(): ?string
    {
        return $this->motnr;
    }

    public function getLkz(): ?string
    {
        return $this->lkz;
    }

    public function getDlnr(): ?string
    {
        return $this->dlnr;
    }

    public function setDlnr(string $dlnr): self
    {
        $this->dlnr = $dlnr;

        return $this;
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
