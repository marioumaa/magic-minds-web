<?php

namespace App\Entity;

use App\Repository\QuestionFirasRepository;
use App\Entity\NotFutureDate;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: QuestionFirasRepository::class)]
#[ORM\Table (name: "questionFiras")]
class questionFiras
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotNull(message: "Il faut remplir ce champ")]

    private ?\DateTimeInterface $date = null;


    #[ORM\Column(name: "`like`", type: 'integer', options: ['default' => 0])]
    private int $like = 0;

    #[ORM\Column(name: "`dislike`",type: 'integer', options: ['default' => 0])]
    private int $dislike = 0;

    #[ORM\Column(length: 255,nullable: true)]
    #[Assert\NotNull (message: "Il faut remplire ce chemp")]
    private ?string $commentaire = null;


    #[ORM\Column(length: 255,nullable: true)]
    #[Assert\NotNull (message: "Il faut remplire ce chemp")]
    private ?string $type = null;

    #[ORM\OneToMany(mappedBy: 'questions', targetEntity: reponseFiras::class, orphanRemoval: true)]
    private Collection $reponses;


    #[ORM\Column(length: 255,nullable: true)]
    private ?string $color = null;


    #[ORM\Column(length: 255,nullable: true)]
    #[Assert\NotNull (message: "Il faut remplire ce chemp")]
    private ?string $Name = null;

    #[ORM\Column(length: 255,nullable: true)]
    private ?string $image = null;


    public function __construct()
    {
        $this->reponses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }


    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }


    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @return Collection<int, reponseFiras>
     */
    public function getreponses(): Collection
    {
        return $this->reponses;
    }

    public function addCReponseontrat($reponse): self
    {
        if (!$this->reponses->contains($reponse)) {
            $this->reponses->add($reponse);
            $reponse->setQuestions($this);
        }

        return $this;
    }

    public function removeCReponseontrat($reponse): self
    {
        if ($this->reponses->removeElement($reponse)) {
            // set the owning side to null (unless already changed)
            if ($reponse->getQuestions() === $this) {
                $reponse->setQuestions(null);
            }
        }

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getLikes(): int
    {
        return $this->like;
    }

    public function like(): void
    {
        $this->like++;
    }

    public function getDislikes(): int
    {
        return $this->dislike;
    }

    public function dislike(): void
    {
        $this->dislike++;
    }

    public function __toString(): string
    {
        return $this->Name ;
    }


}

