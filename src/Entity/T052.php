<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t052
 *
 * @ORM\Table(name="tecdoc.t052", indexes={@ORM\Index(name="idxt052_key2102", columns={"key"})})
 * @ORM\Entity(repositoryClass="App\Repository\T052Repository")
 */
class T052
{
    /**
     * @var string
     *
     * @ORM\Column(name="tabnr", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tabnr;

    /**
     * @var string
     *
     * @ORM\Column(name="key", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $key;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reserviert", type="string", length=22, nullable=true)
     */
    private $reserviert;

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
     * @ORM\Column(name="beznr", type="string", length=9, nullable=true)
     */
    private $beznr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sortnr", type="string", length=3, nullable=true)
     */
    private $sortnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="delete", type="string", length=1, nullable=true)
     */
    private $delete;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lflag", type="string", length=1, nullable=true)
     */
    private $lflag;

    public function getTabnr(): ?string
    {
        return $this->tabnr;
    }

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function getReserviert(): ?string
    {
        return $this->reserviert;
    }

    public function setReserviert(?string $reserviert): self
    {
        $this->reserviert = $reserviert;

        return $this;
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

    public function setSa(?string $sa): self
    {
        $this->sa = $sa;

        return $this;
    }

    public function getBeznr(): ?string
    {
        return $this->beznr;
    }

    public function setBeznr(?string $beznr): self
    {
        $this->beznr = $beznr;

        return $this;
    }

    public function getSortnr(): ?string
    {
        return $this->sortnr;
    }

    public function setSortnr(?string $sortnr): self
    {
        $this->sortnr = $sortnr;

        return $this;
    }

    public function getDelete(): ?string
    {
        return $this->delete;
    }

    public function setDelete(?string $delete): self
    {
        $this->delete = $delete;

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
