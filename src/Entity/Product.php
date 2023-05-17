<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(["popular", "details"])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(["popular", "details"])]
    private ?string $name = null;

    #[ORM\Column]
    #[Groups(["popular", "details"])]
    private ?float $price = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Groups(["details"])]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    #[Groups(["popular", "details"])]
    private ?string $illustration = null;

    #[ORM\Column]
    #[Groups(["popular", "details"])]
    private ?int $quantity = null;

    #[ORM\Column]
    #[Groups(["popular", "details"])]
    private ?\DateTimeImmutable $availableAt = null;

    #[ORM\Column]
    #[Groups(["popular", "details"])]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\OneToMany(mappedBy: 'product', targetEntity: Rate::class)]
    private Collection $rates;

    #[ORM\OneToMany(mappedBy: 'product', targetEntity: Comment::class)]
    private Collection $comments;

    #[ORM\ManyToMany(targetEntity: Category::class, inversedBy: 'products')]
    #[Groups(["details", "popular"])]
    private Collection $categorize;

    #[ORM\OneToMany(mappedBy: 'product', targetEntity: OrderDetails::class)]
    private Collection $orderdetails;

    #[ORM\Column]
    private ?bool $isActive = null;

    #[ORM\ManyToOne(inversedBy: 'products')]
    private ?Promo $promo = null;

    #[ORM\Column(length: 255)]
    #[Groups(["popular", "details"])]
    private ?string $support = null;

    public function __construct()
    {
        $this->rates = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->categorize = new ArrayCollection();
        $this->orderdetails = new ArrayCollection();
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

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIllustration(): ?string
    {
        return $this->illustration;
    }

    public function setIllustration(string $illustration): self
    {
        $this->illustration = $illustration;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getAvailableAt(): ?\DateTimeImmutable
    {
        return $this->availableAt;
    }

    public function setAvailableAt(\DateTimeImmutable $availableAt): self
    {
        $this->availableAt = $availableAt;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return Collection<int, Rate>
     */
    public function getRates(): Collection
    {
        return $this->rates;
    }

    public function addRate(Rate $rate): self
    {
        if (!$this->rates->contains($rate)) {
            $this->rates->add($rate);
            $rate->setProduct($this);
        }

        return $this;
    }

    public function removeRate(Rate $rate): self
    {
        if ($this->rates->removeElement($rate)) {
            // set the owning side to null (unless already changed)
            if ($rate->getProduct() === $this) {
                $rate->setProduct(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Comment>
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments->add($comment);
            $comment->setProduct($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getProduct() === $this) {
                $comment->setProduct(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Category>
     */
    public function getCategorize(): Collection
    {
        return $this->categorize;
    }

    public function addCategorize(Category $categorize): self
    {
        if (!$this->categorize->contains($categorize)) {
            $this->categorize->add($categorize);
        }

        return $this;
    }

    public function removeCategorize(Category $categorize): self
    {
        $this->categorize->removeElement($categorize);

        return $this;
    }

    /**
     * @return Collection<int, Orderdetail>
     */
    public function getOrderdetails(): Collection
    {
        return $this->orderdetails;
    }

    public function addOrderdetail(Orderdetails $orderdetail): self
    {
        if (!$this->orderdetails->contains($orderdetail)) {
            $this->orderdetails->add($orderdetail);
            $orderdetail->setProduct($this);
        }

        return $this;
    }

    public function removeOrderdetail(Orderdetails $orderdetails): self
    {
        if ($this->orderdetails->removeElement($orderdetails)) {
            // set the owning side to null (unless already changed)
            if ($orderdetails->getProduct() === $this) {
                $orderdetails->setProduct(null);
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

    public function getPromo(): ?Promo
    {
        return $this->promo;
    }

    public function setPromo(?Promo $promo): self
    {
        $this->promo = $promo;

        return $this;
    }

    public function getSupport(): ?string
    {
        return $this->support;
    }

    public function setSupport(string $support): self
    {
        $this->support = $support;

        return $this;
    }
}
