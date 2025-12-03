<?php

namespace Modules\module_one\src\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;
use Modules\module_one\src\Domain\Repository\UserRepository;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $lastName = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

//    public function getLastName(): ?string
//    {
//        return $this->lastName;
//    }
//
//    public function setLastName(string $lastName): self
//    {
//        $this->lastName = $lastName;
//        return $this;
//    }
}
