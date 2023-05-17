<?php

namespace App\Entity;

use App\Entity\Order;
use App\Entity\Users;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\AddressRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: AddressRepository::class)]
class Address
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(["address"])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(["address"])]
    #[Assert\NotBlank(message: 'Nom non renseigné')]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    #[Groups(["address"])]
    #[Assert\NotBlank(message: 'Addresse non renseigné')]
    private ?string $address = null;

    #[ORM\Column(length: 255)]
    #[Groups(["address"])]
    #[Assert\NotBlank(message: 'Code postal non renseigné')]
    private ?string $postal = null;

    #[ORM\Column(length: 255)]
    #[Groups(["address"])]
    #[Assert\NotBlank(message: 'Ville non renseigné')]
    private ?string $city = null;

    #[ORM\Column(length: 255)]
    #[Groups(["address"])]
    #[Assert\NotBlank(message: 'Pays non renseigné')]
    private ?string $country = null;

    #[ORM\ManyToOne(inversedBy: 'addresses')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Users $users = null;

    #[ORM\OneToMany(mappedBy: 'address', targetEntity: Order::class)]
    private Collection $orders;

    #[ORM\Column]
    private ?bool $isActive = null;

    public function __construct()
    {
        $this->orders = new ArrayCollection();
    }

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

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getPostal(): ?string
    {
        return $this->postal;
    }

    public function setPostal(string $postal): self
    {
        $this->postal = $postal;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getUsers(): ?Users
    {
        return $this->users;
    }

    public function setUsers(?Users $users): self
    {
        $this->users = $users;

        return $this;
    }

    /**
     * @return Collection<int, Order>
     */
    public function getOrders(): Collection
    {
        return $this->orders;
    }

    public function addOrder(Order $order): self
    {
        if (!$this->orders->contains($order)) {
            $this->orders->add($order);
            $order->setAddress($this);
        }

        return $this;
    }

    public function removeOrder(Order $order): self
    {
        if ($this->orders->removeElement($order)) {
            // set the owning side to null (unless already changed)
            if ($order->getAddress() === $this) {
                $order->setAddress(null);
            }
        }

        return $this;
    }

    public function isIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }
}
