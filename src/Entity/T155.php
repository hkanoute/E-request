<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tecdoc.t155
 *
 * @ORM\Table(name="tecdoc.t155", indexes={@ORM\Index(name="idxt155_hernr2102", columns={"hernr", "motnr"})})
 * @ORM\Entity(repositoryClass="App\Repository\T155Repository")
 */
class T155
{
    /**
     * @var string
     *
     * @ORM\Column(name="motnr", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tecdoc.t155_motnr_seq", allocationSize=1, initialValue=1)
     */
    private $motnr;

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
     * @ORM\Column(name="hernr", type="string", length=6, nullable=true)
     */
    private $hernr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mcode", type="string", length=60, nullable=true)
     */
    private $mcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bjvon", type="string", length=6, nullable=true)
     */
    private $bjvon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bjbis", type="string", length=6, nullable=true)
     */
    private $bjbis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kwvon", type="string", length=4, nullable=true)
     */
    private $kwvon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kwbis", type="string", length=4, nullable=true)
     */
    private $kwbis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="psvon", type="string", length=4, nullable=true)
     */
    private $psvon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="psbis", type="string", length=4, nullable=true)
     */
    private $psbis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ventile", type="string", length=2, nullable=true)
     */
    private $ventile;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zyl", type="string", length=2, nullable=true)
     */
    private $zyl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="verdichtv", type="string", length=4, nullable=true)
     */
    private $verdichtv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="verdichtb", type="string", length=5, nullable=true)
     */
    private $verdichtb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="drehmv", type="string", length=4, nullable=true)
     */
    private $drehmv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="drehmb", type="string", length=5, nullable=true)
     */
    private $drehmb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ccmsteuerv", type="string", length=5, nullable=true)
     */
    private $ccmsteuerv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ccmsteuerb", type="string", length=5, nullable=true)
     */
    private $ccmsteuerb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ccmtechv", type="string", length=5, nullable=true)
     */
    private $ccmtechv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ccmtechb", type="string", length=5, nullable=true)
     */
    private $ccmtechb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="litsteuerv", type="string", length=4, nullable=true)
     */
    private $litsteuerv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="litsteuerb", type="string", length=4, nullable=true)
     */
    private $litsteuerb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="littechv", type="string", length=4, nullable=true)
     */
    private $littechv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="littechb", type="string", length=4, nullable=true)
     */
    private $littechb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="motverw", type="string", length=3, nullable=true)
     */
    private $motverw;

    /**
     * @var string|null
     *
     * @ORM\Column(name="motbauform", type="string", length=3, nullable=true)
     */
    private $motbauform;

    /**
     * @var string|null
     *
     * @ORM\Column(name="krstoffart", type="string", length=3, nullable=true)
     */
    private $krstoffart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="krstoffauf", type="string", length=3, nullable=true)
     */
    private $krstoffauf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="motbeatm", type="string", length=3, nullable=true)
     */
    private $motbeatm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uminkwv", type="string", length=5, nullable=true)
     */
    private $uminkwv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uminkwb", type="string", length=5, nullable=true)
     */
    private $uminkwb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="umindrehmv", type="string", length=5, nullable=true)
     */
    private $umindrehmv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="umindrehmb", type="string", length=5, nullable=true)
     */
    private $umindrehmb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kurbel", type="string", length=2, nullable=true)
     */
    private $kurbel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bohrung", type="string", length=6, nullable=true)
     */
    private $bohrung;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hub", type="string", length=6, nullable=true)
     */
    private $hub;

    /**
     * @var string|null
     *
     * @ORM\Column(name="motorart", type="string", length=3, nullable=true)
     */
    private $motorart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="abgasnorm", type="string", length=3, nullable=true)
     */
    private $abgasnorm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zylbauform", type="string", length=3, nullable=true)
     */
    private $zylbauform;

    /**
     * @var string|null
     *
     * @ORM\Column(name="motsteuer", type="string", length=3, nullable=true)
     */
    private $motsteuer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ventilsteuer", type="string", length=3, nullable=true)
     */
    private $ventilsteuer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kuehlart", type="string", length=3, nullable=true)
     */
    private $kuehlart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vkbez", type="string", length=30, nullable=true)
     */
    private $vkbez;

    /**
     * @var string|null
     *
     * @ORM\Column(name="exclude", type="string", length=1, nullable=true)
     */
    private $exclude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="delete", type="string", length=1, nullable=true)
     */
    private $delete;

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

    public function getHernr(): ?string
    {
        return $this->hernr;
    }

    public function setHernr(?string $hernr): self
    {
        $this->hernr = $hernr;

        return $this;
    }

    public function getMcode(): ?string
    {
        return $this->mcode;
    }

    public function setMcode(?string $mcode): self
    {
        $this->mcode = $mcode;

        return $this;
    }

    public function getBjvon(): ?string
    {
        return $this->bjvon;
    }

    public function setBjvon(?string $bjvon): self
    {
        $this->bjvon = $bjvon;

        return $this;
    }

    public function getBjbis(): ?string
    {
        return $this->bjbis;
    }

    public function setBjbis(?string $bjbis): self
    {
        $this->bjbis = $bjbis;

        return $this;
    }

    public function getKwvon(): ?string
    {
        return $this->kwvon;
    }

    public function setKwvon(?string $kwvon): self
    {
        $this->kwvon = $kwvon;

        return $this;
    }

    public function getKwbis(): ?string
    {
        return $this->kwbis;
    }

    public function setKwbis(?string $kwbis): self
    {
        $this->kwbis = $kwbis;

        return $this;
    }

    public function getPsvon(): ?string
    {
        return $this->psvon;
    }

    public function setPsvon(?string $psvon): self
    {
        $this->psvon = $psvon;

        return $this;
    }

    public function getPsbis(): ?string
    {
        return $this->psbis;
    }

    public function setPsbis(?string $psbis): self
    {
        $this->psbis = $psbis;

        return $this;
    }

    public function getVentile(): ?string
    {
        return $this->ventile;
    }

    public function setVentile(?string $ventile): self
    {
        $this->ventile = $ventile;

        return $this;
    }

    public function getZyl(): ?string
    {
        return $this->zyl;
    }

    public function setZyl(?string $zyl): self
    {
        $this->zyl = $zyl;

        return $this;
    }

    public function getVerdichtv(): ?string
    {
        return $this->verdichtv;
    }

    public function setVerdichtv(?string $verdichtv): self
    {
        $this->verdichtv = $verdichtv;

        return $this;
    }

    public function getVerdichtb(): ?string
    {
        return $this->verdichtb;
    }

    public function setVerdichtb(?string $verdichtb): self
    {
        $this->verdichtb = $verdichtb;

        return $this;
    }

    public function getDrehmv(): ?string
    {
        return $this->drehmv;
    }

    public function setDrehmv(?string $drehmv): self
    {
        $this->drehmv = $drehmv;

        return $this;
    }

    public function getDrehmb(): ?string
    {
        return $this->drehmb;
    }

    public function setDrehmb(?string $drehmb): self
    {
        $this->drehmb = $drehmb;

        return $this;
    }

    public function getCcmsteuerv(): ?string
    {
        return $this->ccmsteuerv;
    }

    public function setCcmsteuerv(?string $ccmsteuerv): self
    {
        $this->ccmsteuerv = $ccmsteuerv;

        return $this;
    }

    public function getCcmsteuerb(): ?string
    {
        return $this->ccmsteuerb;
    }

    public function setCcmsteuerb(?string $ccmsteuerb): self
    {
        $this->ccmsteuerb = $ccmsteuerb;

        return $this;
    }

    public function getCcmtechv(): ?string
    {
        return $this->ccmtechv;
    }

    public function setCcmtechv(?string $ccmtechv): self
    {
        $this->ccmtechv = $ccmtechv;

        return $this;
    }

    public function getCcmtechb(): ?string
    {
        return $this->ccmtechb;
    }

    public function setCcmtechb(?string $ccmtechb): self
    {
        $this->ccmtechb = $ccmtechb;

        return $this;
    }

    public function getLitsteuerv(): ?string
    {
        return $this->litsteuerv;
    }

    public function setLitsteuerv(?string $litsteuerv): self
    {
        $this->litsteuerv = $litsteuerv;

        return $this;
    }

    public function getLitsteuerb(): ?string
    {
        return $this->litsteuerb;
    }

    public function setLitsteuerb(?string $litsteuerb): self
    {
        $this->litsteuerb = $litsteuerb;

        return $this;
    }

    public function getLittechv(): ?string
    {
        return $this->littechv;
    }

    public function setLittechv(?string $littechv): self
    {
        $this->littechv = $littechv;

        return $this;
    }

    public function getLittechb(): ?string
    {
        return $this->littechb;
    }

    public function setLittechb(?string $littechb): self
    {
        $this->littechb = $littechb;

        return $this;
    }

    public function getMotverw(): ?string
    {
        return $this->motverw;
    }

    public function setMotverw(?string $motverw): self
    {
        $this->motverw = $motverw;

        return $this;
    }

    public function getMotbauform(): ?string
    {
        return $this->motbauform;
    }

    public function setMotbauform(?string $motbauform): self
    {
        $this->motbauform = $motbauform;

        return $this;
    }

    public function getKrstoffart(): ?string
    {
        return $this->krstoffart;
    }

    public function setKrstoffart(?string $krstoffart): self
    {
        $this->krstoffart = $krstoffart;

        return $this;
    }

    public function getKrstoffauf(): ?string
    {
        return $this->krstoffauf;
    }

    public function setKrstoffauf(?string $krstoffauf): self
    {
        $this->krstoffauf = $krstoffauf;

        return $this;
    }

    public function getMotbeatm(): ?string
    {
        return $this->motbeatm;
    }

    public function setMotbeatm(?string $motbeatm): self
    {
        $this->motbeatm = $motbeatm;

        return $this;
    }

    public function getUminkwv(): ?string
    {
        return $this->uminkwv;
    }

    public function setUminkwv(?string $uminkwv): self
    {
        $this->uminkwv = $uminkwv;

        return $this;
    }

    public function getUminkwb(): ?string
    {
        return $this->uminkwb;
    }

    public function setUminkwb(?string $uminkwb): self
    {
        $this->uminkwb = $uminkwb;

        return $this;
    }

    public function getUmindrehmv(): ?string
    {
        return $this->umindrehmv;
    }

    public function setUmindrehmv(?string $umindrehmv): self
    {
        $this->umindrehmv = $umindrehmv;

        return $this;
    }

    public function getUmindrehmb(): ?string
    {
        return $this->umindrehmb;
    }

    public function setUmindrehmb(?string $umindrehmb): self
    {
        $this->umindrehmb = $umindrehmb;

        return $this;
    }

    public function getKurbel(): ?string
    {
        return $this->kurbel;
    }

    public function setKurbel(?string $kurbel): self
    {
        $this->kurbel = $kurbel;

        return $this;
    }

    public function getBohrung(): ?string
    {
        return $this->bohrung;
    }

    public function setBohrung(?string $bohrung): self
    {
        $this->bohrung = $bohrung;

        return $this;
    }

    public function getHub(): ?string
    {
        return $this->hub;
    }

    public function setHub(?string $hub): self
    {
        $this->hub = $hub;

        return $this;
    }

    public function getMotorart(): ?string
    {
        return $this->motorart;
    }

    public function setMotorart(?string $motorart): self
    {
        $this->motorart = $motorart;

        return $this;
    }

    public function getAbgasnorm(): ?string
    {
        return $this->abgasnorm;
    }

    public function setAbgasnorm(?string $abgasnorm): self
    {
        $this->abgasnorm = $abgasnorm;

        return $this;
    }

    public function getZylbauform(): ?string
    {
        return $this->zylbauform;
    }

    public function setZylbauform(?string $zylbauform): self
    {
        $this->zylbauform = $zylbauform;

        return $this;
    }

    public function getMotsteuer(): ?string
    {
        return $this->motsteuer;
    }

    public function setMotsteuer(?string $motsteuer): self
    {
        $this->motsteuer = $motsteuer;

        return $this;
    }

    public function getVentilsteuer(): ?string
    {
        return $this->ventilsteuer;
    }

    public function setVentilsteuer(?string $ventilsteuer): self
    {
        $this->ventilsteuer = $ventilsteuer;

        return $this;
    }

    public function getKuehlart(): ?string
    {
        return $this->kuehlart;
    }

    public function setKuehlart(?string $kuehlart): self
    {
        $this->kuehlart = $kuehlart;

        return $this;
    }

    public function getVkbez(): ?string
    {
        return $this->vkbez;
    }

    public function setVkbez(?string $vkbez): self
    {
        $this->vkbez = $vkbez;

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

    public function getDelete(): ?string
    {
        return $this->delete;
    }

    public function setDelete(?string $delete): self
    {
        $this->delete = $delete;

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
