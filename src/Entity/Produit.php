<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Name cannot be empty")]
    #[Assert\Type(type: "alpha", message: "Name must contain only alphabetic characters")]
    private ?string $nom = null;

    #[ORM\Column(type: "float")]
    #[Assert\NotBlank(message: "Price cannot be empty")]
    #[Assert\PositiveOrZero(message: "The price cannot be negative.")]
    private ?float $prix = null;

    #[ORM\Column(length: 255)]
    #[Assert\Length(min: 10, minMessage: "Description must be at least {{ limit }} characters long.")]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    #[Assert\Url(message: "Image URL should be a valid URL")]
    private ?string $img1 = null;

    #[ORM\Column(length: 255)]
    #[Assert\Url(message: "Image URL should be a valid URL")]
    private ?string $img2 = null;

    #[ORM\Column(length: 255)]
    #[Assert\Url(message: "Image URL should be a valid URL")]
    private ?string $img3 = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Category cannot be empty")]
    #[Assert\Type(type: "alpha", message: "Category must contain only alphabetic characters")]
    private ?string $categorie = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Quantity cannot be empty")]
    #[Assert\PositiveOrZero(message:"The quantity cannot be negative.")]
    #[Assert\Type(type: "integer", message: "Quantity must be an integer")]

    private ?int $quantite = null;

    #[ORM\OneToMany(mappedBy: 'idproduit', targetEntity: Commentaire::class, orphanRemoval: true,)]
    private Collection $commentaires;

    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
    }







    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getImg1(): ?string
    {
        return $this->img1;
    }

    public function setImg1(string $img1): static
    {
        $this->img1 = $img1;

        return $this;
    }

    public function getImg2(): ?string
    {
        return $this->img2;
    }

    public function setImg2(string $img2): static
    {
        $this->img2 = $img2;

        return $this;
    }

    public function getImg3(): ?string
    {
        return $this->img3;
    }

    public function setImg3(string $img3): static
    {
        $this->img3 = $img3;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * @return Collection<int, Commentaire>
     */
    public function getCommentaires(): Collection
    {
        return $this->commentaires;
    }

    public function addCommentaire(Commentaire $commentaire): static
    {
        if (!$this->commentaires->contains($commentaire)) {
            $this->commentaires->add($commentaire);
            $commentaire->setIdproduit($this);
        }

        return $this;
    }

    public function removeCommentaire(Commentaire $commentaire): static
    {
        if ($this->commentaires->removeElement($commentaire)) {
            // set the owning side to null (unless already changed)
            if ($commentaire->getIdproduit() === $this) {
                $commentaire->setIdproduit(null);
            }
        }

        return $this;
    }







}
