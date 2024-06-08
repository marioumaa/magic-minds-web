<?php

namespace App\Entity;

use App\Repository\ReponseFirasRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReponseFirasRepository::class)]
#[ORM\Table (name: "reponseFiras")]
class reponseFiras
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column (name: "id_reponse")]
    private ?int $ids = null;

    #[ORM\Column(length: 255,nullable: true)]
    #[Assert\NotNull(message: "Il faut remplir ce champ")]
    private ?string $fullname = null;

    #[ORM\ManyToOne(targetEntity: questionFiras::class, inversedBy: 'reponses')]
    #[ORM\JoinColumn(name: "id", referencedColumnName: "id", nullable: true)]
    private ?QuestionFiras $questions = null;


    #[ORM\Column(length: 255,nullable: true)]
    #[Assert\NotNull (message: "Il faut remplire ce chemp")]
    private ?string $description = null;

    #[ORM\Column(nullable: true)]
    private ?int $id_user = null;

    public function getId(): ?int
    {
        return $this->ids;
    }

    public function getFullname(): ?string
    {
        return $this->fullname;
    }

    public function setFullname(string $fullname): self
    {
        $this->fullname = $fullname;

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

    public function getQuestions(): ?questionFiras
    {
        return $this->questions;
    }

    public function setQuestions(?questionFiras $s): self
    {
        $this->questions = $s;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->id_user;
    }

    public function setIdUser(?int $id_user): static
    {
        $this->id_user = $id_user;

        return $this;
    }

}
