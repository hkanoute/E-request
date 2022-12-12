<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t042
 *
 * @ORM\Table(name="tecdoc.t042")
 * @ORM\Entity(repositoryClass="App\Repository\T042Repository")
 */
class T042
{
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
     * @ORM\Column(name="bildnr", type="string", length=9, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $bildnr;

    /**
     * @var string
     *
     * @ORM\Column(name="dokumentenart", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dokumentenart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sa", type="string", length=3, nullable=true)
     */
    private $sa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lflag", type="string", length=1, nullable=true)
     */
    private $lflag;

    public function getDlnr(): ?string
    {
        return $this->dlnr;
    }

    public function getLkz(): ?string
    {
        return $this->lkz;
    }

    public function getBildnr(): ?string
    {
        return $this->bildnr;
    }

    public function getDokumentenart(): ?string
    {
        return $this->dokumentenart;
    }

    public function getSa(): ?string
    {
        return $this->sa;
    }

    public function setSa(?string $sa): self
    {
        $this->sa = $sa;

        return $this;
    }

    public function getLflag(): ?string
    {
        return $this->lflag;
    }

    public function setLflag(?string $lflag): self
    {
        $this->lflag = $lflag;

        return $this;
    }


}
