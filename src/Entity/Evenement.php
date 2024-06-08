<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EvenementRepository::class)]
class Evenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Name cannot be blank.")]

    #[Assert\Type(type: "string", message: "Name must be a string.")]
    #[Assert\Regex(
        pattern: '/^[A-Za-z\s]+$/',
        message: "Name must contain only letters and spaces."
    )]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Description cannot be blank.")]
    #[Assert\Type(type: "string", message: "Description must be a string.")]
    #[Assert\Regex(
        pattern: '/^[A-Za-z\s]+$/',
        message: "Description must contain only letters and spaces."
    )]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Category cannot be blank.")]
    #[Assert\Type(type: "string", message: "Category must be a string.")]
    #[Assert\Regex(
        pattern: '/^[A-Za-z\s]+$/',
        message: "Category must contain only letters and spaces."
    )]
    private ?string $categorie = null;
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: "Start date cannot be blank.")]
    #[Assert\GreaterThan(value: "today", message: "Start date must be after today.")]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: "End date cannot be blank.")]
    #[Assert\GreaterThan(propertyPath: "dateDebut", message: "End date must be after start date.")]
    private ?\DateTimeInterface $dateFin = null;
    #[ORM\Column]
    #[Assert\NotBlank(message: "Number of participants cannot be blank.")]
    #[Assert\Type(type: "numeric", message: "Number of participants must be a number.")]
    #[Assert\GreaterThan(value: 20, message: "Number of participants must be greater than 20.")]
    private ?int $nbParticipant = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Location cannot be blank.")]
    #[Assert\Type(type: "string", message: "Location must be a string.")]
    #[Assert\Regex(
        pattern: '/^[A-Za-z\s]+$/',
        message: "Category must contain only letters and spaces."
    )]
    private ?string $localisation = null;

    #[ORM\OneToMany(mappedBy: 'idEvenement', targetEntity: Participation::class, orphanRemoval: true)]
    private Collection $participation;

    public function __construct()
    {
        $this->participation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(?string $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTimeInterface $dateDebut): static
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): static
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getNbParticipant(): ?int
    {
        return $this->nbParticipant;
    }

    public function setNbParticipant(?int $nbParticipant): static
    {
        $this->nbParticipant = $nbParticipant;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(?string $localisation): static
    {
        $this->localisation = $localisation;

        return $this;
    }

    /**
     * @return Collection<int, Participation>
     */
    public function getParticipation(): Collection
    {
        return $this->participation;
    }

    public function addParticipation(Participation $participation): static
    {
        if (!$this->participation->contains($participation)) {
            $this->participation->add($participation);
            $participation->setIdEvenement($this);
        }

        return $this;
    }

    public function removeParticipation(Participation $participation): static
    {
        if ($this->participation->removeElement($participation)) {
            // set the owning side to null (unless already changed)
            if ($participation->getIdEvenement() === $this) {
                $participation->setIdEvenement(null);
            }
        }

        return $this;
    }
}
