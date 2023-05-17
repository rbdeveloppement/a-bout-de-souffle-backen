<?php

namespace App\Entity;

use App\Repository\TagsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TagsRepository::class)]
class Tags
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $pegi = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPegi(): ?string
    {
        return $this->pegi;
    }

    public function setPegi(?string $pegi): self
    {
        $this->pegi = $pegi;

        return $this;
    }
}
