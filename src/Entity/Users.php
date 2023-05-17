<?php

namespace App\Entity;

use App\Entity\Rate;
use App\Entity\Order;
use App\Entity\Address;
use App\Entity\Comment;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UsersRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[ ORM\Entity( repositoryClass: UsersRepository::class ) ]

class Users implements PasswordAuthenticatedUserInterface, UserInterface  {
    #[ ORM\Id ]
    #[ ORM\GeneratedValue ]
    #[ ORM\Column ]
    #[ Groups( [ 'register', "user" ] ) ]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(["register", "user"])]
    #[Assert\NotBlank(message: 'prénom non renseigné')]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: "Le prénom doit avoir au minimum 2 caractères.",
        maxMessage: "Le prénom doit avoir moins de 50 caractères"
    )]
    #[Assert\Regex(pattern: "/^[a-zA-ZÀ-ÿ'-]+$/", message: "Le nom ne doit pas contenir de caractères spéciaux et de chiffres")]
    private ?string $firstName = null;

    #[ORM\Column]
    #[Groups(["register", "user"])]
    private ?bool $isActive = null;

    #[ORM\Column(length: 255)]
    #[Groups(["register", "user"])]
    #[Assert\NotBlank(message: 'nom non renseigné')]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: "Le nom doit avoir au minimum 2 caractères.",
        maxMessage: "Le nom doit avoir moins de 50 caractères"
    )]
    #[Assert\Regex(pattern: "/^[a-zA-ZÀ-ÿ'-]+$/", message: "Le nom ne doit pas contenir de caractères spéciaux et de chiffres")]
    private ?string $lastName = null;

    #[ORM\Column]
    #[Groups(["register", "user"])]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(length: 255)]
    #[Groups(["register", "user"])]
    #[Assert\Email(message: "ce n'est pas un email")]
    #[Assert\NotBlank(message: 'email non renseigné')]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    #[Groups(["register", "user"])]
    #[Assert\NotBlank(message: 'mot de passe non renseigné')]
    #[Assert\Length(min: 8, minMessage: "Le mot de passe doit contenir au minimum 8 caractères")]
    private ?string $password = null;

    #[ ORM\Column( length: 255, nullable: true ) ]
    #[ Groups( [ 'register', 'user' ] ) ]
    private ?string $phone = null;

    #[ORM\Column(type: "json")]
    #[Groups(["register", "user"])]
    private $roles = [];

    #[ORM\OneToMany(mappedBy: 'users', targetEntity: Rate::class)]
    private Collection $rates;

    #[ ORM\OneToMany( mappedBy: 'users', targetEntity: Comment::class ) ]
    private Collection $comments;

    #[ ORM\OneToMany( mappedBy: 'users', targetEntity: Address::class ) ]
    #[ Groups( [ 'register', "user" ] ) ]
    private Collection $addresses;

    #[ ORM\OneToMany( mappedBy: 'users', targetEntity: Order::class ) ]
    private Collection $orders;


    public function __construct()
    {
        $this->rates = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->addresses = new ArrayCollection();
        $this->orders = new ArrayCollection();
    }

    public function getId(): ?int {
        return $this->id;
    }



    
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName( string $firstName ): self {
        $this->firstName = $firstName;

        return $this;
    }

    public function isIsActive(): ?bool {
        return $this->isActive;
    }

    public function setIsActive( bool $isActive ): self {
        $this->isActive = $isActive;

        return $this;
    }

    public function getLastName(): ?string {
        return $this->lastName;
    }

    public function setLastName( string $lastName ): self {
        $this->lastName = $lastName;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable {
        return $this->createdAt;
    }

    public function setCreatedAt( \DateTimeImmutable $createdAt ): self {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getEmail(): ?string {
        return $this->email;
    }

    public function setEmail( string $email ): self {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string {
        return $this->password;
    }

    public function setPassword( string $password ): self {
        $this->password = $password;

        return $this;
    }

    public function getPhone(): ?string {
        return $this->phone;
    }

    public function setPhone( ?string $phone ): self {
        $this->phone = $phone;

        return $this;
    }

    /**
    * @see UserInterface
    */

    public function getRoles(): array {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles( array $roles ): self {
        $this->roles = $roles;

        return $this;
    }

    /**
    * @return Collection<int, Rate>
    */

    public function getRates(): Collection {
        return $this->rates;
    }

    public function addRate( Rate $rate ): self {
        if ( !$this->rates->contains( $rate ) ) {
            $this->rates->add( $rate );
            $rate->setUsers( $this );
        }

        return $this;
    }

    public function removeRate( Rate $rate ): self {
        if ( $this->rates->removeElement( $rate ) ) {
            // set the owning side to null ( unless already changed )
            if ( $rate->getUsers() === $this ) {
                $rate->setUsers( null );
            }
        }

        return $this;
    }

    /**
    * @return Collection<int, Comment>
    */

    public function getComments(): Collection {
        return $this->comments;
    }

    public function addComment( Comment $comment ): self {
        if ( !$this->comments->contains( $comment ) ) {
            $this->comments->add( $comment );
            $comment->setUsers( $this );
        }

        return $this;
    }

    public function removeComment( Comment $comment ): self {
        if ( $this->comments->removeElement( $comment ) ) {
            // set the owning side to null ( unless already changed )
            if ( $comment->getUsers() === $this ) {
                $comment->setUsers( null );
            }
        }

        return $this;
    }

    /**
    * @return Collection<int, Address>
    */

    public function getAddresses(): Collection {
        return $this->addresses;
    }

    public function addAddress( Address $address ): self {
        if ( !$this->addresses->contains( $address ) ) {
            $this->addresses->add( $address );
            $address->setUsers( $this );
        }

        return $this;
    }

    public function removeAddress( Address $address ): self {
        if ( $this->addresses->removeElement( $address ) ) {
            // set the owning side to null ( unless already changed )
            if ( $address->getUsers() === $this ) {
                $address->setUsers( null );
            }
        }

        return $this;
    }

    /**
    * @return Collection<int, Order>
    */

    public function getOrders(): Collection {
        return $this->orders;
    }

    public function addOrder( Order $order ): self {
        if ( !$this->orders->contains( $order ) ) {
            $this->orders->add( $order );
            $order->setUsers( $this );
        }

        return $this;
    }

    public function removeOrder( Order $order ): self {
        if ( $this->orders->removeElement( $order ) ) {
            // set the owning side to null ( unless already changed )
            if ( $order->getUsers() === $this ) {
                $order->setUsers( null );
            }
        }

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return $this->email;
    }

    public function getSalt()
    {
    }

    public function eraseCredentials()
    {
    }

    public function getUsername(): string
    {
        return $this->email;
    }
}
