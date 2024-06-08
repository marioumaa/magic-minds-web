<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
#[UniqueEntity(fields:['titre'],message:'the title is already used')]

class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotNull(message:'Title required')]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    #[Assert\Length(min:20,
    max:200,
    minMessage:'too short for description',
    maxMessage:'too long for description')]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\OneToMany(mappedBy: 'categorie', targetEntity: Cours::class,orphanRemoval:true)]
    private Collection $idCours;

    #[ORM\Column(nullable:true)]
    private ?int $nbrChapitre = null;

    #[ORM\Column(nullable:true)]
    private ?int $nbrCours = null;

    public function __construct()
    {
        $this->idCours = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

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

    public function getNbrChapitre(): ?int
    {
        return $this->nbrChapitre;
    }

    public function setNbrChapitre(?string $nbrChapitre): static
    {
        $this->nbrChapitre = $nbrChapitre;

        return $this;
    }
    public function getNbrCours(): ?int
    {
        return $this->nbrCours;
    }

    public function setNbrCours(?string $nbrCours): static
    {
        $this->nbrCours = $nbrCours;

        return $this;
    }
    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    

    /**
     * @return Collection<int, Cours>
     */
    public function getIdCours(): Collection
    {
        return $this->idCours;
    }

    public function addIdCour(Cours $idCour): static
    {
        if (!$this->idCours->contains($idCour)) {
            $this->idCours->add($idCour);
            $idCour->setCategorie($this);
        }

        return $this;
    }

    public function removeIdCour(Cours $idCour): static
    {
        if ($this->idCours->removeElement($idCour)) {
            // set the owning side to null (unless already changed)
            if ($idCour->getCategorie() === $this) {
                $idCour->setCategorie(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return $this->getTitre();
    }
}
