<?php

namespace App\Entity;

use App\Repository\SrodbaseRepository;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass=SrodbaseRepository::class)
 */
class Srodbase
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $FIO;

    /**
     * @ORM\Column(type="date_immutable")
     */
    private $birth;

    /**
     * @ORM\Column(type="smallint")
     */
    private $MO;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $Ndog;

    /**
     * @ORM\Column(type="date_immutable", nullable=true)
     */
    private $Ddog;

    /**
     * @ORM\Column(type="date_immutable", nullable=true)
     */
    private $DEdog;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ESRN;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $street;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $house;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $housepart;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $flat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cityphone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mobilephone;

    /**
     * @ORM\Column(type="integer",  nullable=true)
     */
    private $Cat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $opl;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $comments;

    /**
     * @ORM\Column(type="date_immutable", nullable=true)
     */
    private $dogclose;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numusl;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $catvoz;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commelse;

    /**
     * @ORM\ManyToOne(targetEntity=Invcat::class)
     */
    private $Invcat;
	

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFIO(): ?string
    {
        return $this->FIO;
    }

    public function setFIO(string $FIO): self
    {
        $this->FIO = $FIO;

        return $this;
    }

    public function getBirth(): ?\DateTimeImmutable
    {
        return $this->birth;
    }

    public function setBirth(\DateTimeImmutable $birth): self
    {
        $this->birth = $birth;

        return $this;
    }

    public function getMO(): ?int
    {
        return $this->MO;
    }

    public function setMO(int $MO): self
    {
        $this->MO = $MO;

        return $this;
    }

    public function getNdog(): ?int
    {
        return $this->Ndog;
    }

    public function setNdog(?int $Ndog): self
    {
        $this->Ndog = $Ndog;

        return $this;
    }

    public function getDdog(): ?\DateTimeImmutable
    {
        return $this->Ddog;
    }

    public function setDdog(?\DateTimeImmutable $Ddog): self
    {
        $this->Ddog = $Ddog;

        return $this;
    }

    public function getDEdog(): ?\DateTimeImmutable
    {
        return $this->DEdog;
    }

    public function setDEdog(?\DateTimeImmutable $DEdog): self
    {
        $this->DEdog = $DEdog;

        return $this;
    }

    public function getESRN(): ?int
    {
        return $this->ESRN;
    }

    public function setESRN(?int $ESRN): self
    {
        $this->ESRN = $ESRN;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getHouse(): ?int
    {
        return $this->house;
    }

    public function setHouse(?int $house): self
    {
        $this->house = $house;

        return $this;
    }

    public function getHousepart(): ?int
    {
        return $this->housepart;
    }

    public function setHousepart(?int $housepart): self
    {
        $this->housepart = $housepart;

        return $this;
    }

    public function getFlat(): ?int
    {
        return $this->flat;
    }

    public function setFlat(?int $flat): self
    {
        $this->flat = $flat;

        return $this;
    }

    public function getCityphone(): ?string
    {
        return $this->cityphone;
    }

    public function setCityphone(?string $cityphone): self
    {
        $this->cityphone = $cityphone;

        return $this;
    }

    public function getMobilephone(): ?string
    {
        return $this->mobilephone;
    }

    public function setMobilephone(?string $mobilephone): self
    {
        $this->mobilephone = $mobilephone;

        return $this;
    }

 

    public function getCat(): ?string
    {
        return $this->Cat;
    }

    public function setCat(?string $Cat): self
    {
        $this->Cat = $Cat;

        return $this;
    }

    public function getOpl(): ?string
    {
        return $this->opl;
    }

    public function setOpl(?string $opl): self
    {
        $this->opl = $opl;

        return $this;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function setComments(?string $comments): self
    {
        $this->comments = $comments;

        return $this;
    }

    public function getDogclose(): ?\DateTimeImmutable
    {
        return $this->dogclose;
    }

    public function setDogclose(?\DateTimeImmutable $dogclose): self
    {
        $this->dogclose = $dogclose;

        return $this;
    }

    public function getNumusl(): ?string
    {
        return $this->numusl;
    }

    public function setNumusl(?string $numusl): self
    {
        $this->numusl = $numusl;

        return $this;
    }

    public function getCatvoz(): ?string
    {
        return $this->catvoz;
    }

    public function setCatvoz(?string $catvoz): self
    {
        $this->catvoz = $catvoz;

        return $this;
    }

    public function getCommelse(): ?string
    {
        return $this->commelse;
    }

    public function setCommelse(?string $commelse): self
    {
        $this->commelse = $commelse;

        return $this;
    }

    public function getInvcat(): ?Invcat
    {
        return $this->Invcat;
    }

    public function setInvcat(?Invcat $Invcat): self
    {
        $this->Invcat = $Invcat;

        return $this;
    }
}
