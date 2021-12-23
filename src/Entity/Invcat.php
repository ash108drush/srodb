<?php

namespace App\Entity;

use App\Repository\InvcatRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InvcatRepository::class)
 */
class Invcat 
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="smallint")
     */
    private $invcat;
	


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInvcat(): ?int
    {
        return $this->invcat;
    }

    public function setInvcat(int $invcat): self
    {
        $this->invcat = $invcat;

        return $this;
    }
}
