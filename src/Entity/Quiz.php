<?php

namespace App\Entity;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\QuizRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuizRepository::class)]
#[UniqueEntity(fields: ['titre'], message: 'This title is already in use.')]

class Quiz
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, unique: true)]
    #[Assert\NotBlank(message:"Title cannot be blank")]
    #[Assert\Length(
        max:25, 
        maxMessage:"Title cannot be longer than {{ 25 }} characters"
    )]
    private ?string $titre = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"Time cannot be blank")]
    #[Assert\Positive(message:"Time must be a positive number")]
    #[Assert\Range(
        min:20, 
        max:30, 
        minMessage:"Time must be at least {{ min }} minutes", 
        maxMessage:"Time cannot be more than {{ max }} minutes"
    )]
    private ?int $temp = null;

    #[ORM\OneToMany(mappedBy: 'quiz', targetEntity: Question::class,orphanRemoval:true)]
    private Collection $idQuestion;

    #[ORM\OneToMany(mappedBy: 'idQuiz', targetEntity: Evaluation::class)]
    private Collection $evaluations;

  

    #[ORM\Column]
    #[Assert\NotBlank(message:"Number of questions cannot be blank")]
    #[Assert\Positive(message:"Number of questions must be a positive number")]
    #[Assert\Range(
        min:5, 
        max:10, 
        minMessage:"Number of questions must be at least {{ 5 }}", 
        maxMessage:"Number of questions cannot be more than {{ 10 }}"
    )]
    private ?int $nbquestion = null;

    #[ORM\OneToOne(inversedBy: 'quiz')]
    private ?Ressource $Chapter = null;

    public function __construct()
    {
        $this->idQuestion = new ArrayCollection();
        $this->evaluations = new ArrayCollection();
    
    }
    public function __toString()
    {
        return $this->id;
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

    public function getTemp(): ?int
    {
        return $this->temp;
    }

    public function setTemp(int $temp): static
    {
        $this->temp = $temp;

        return $this;
    }

    /**
     * @return Collection<int, Question>
     */
    public function getIdQuestion(): Collection
    {
        return $this->idQuestion;
    }

    public function addIdQuestion(Question $idQuestion): static
    {
        if (!$this->idQuestion->contains($idQuestion)) {
            $this->idQuestion->add($idQuestion);
            $idQuestion->setQuiz($this);
        }

        return $this;
    }

    public function removeIdQuestion(Question $idQuestion): static
    {
        if ($this->idQuestion->removeElement($idQuestion)) {
            // set the owning side to null (unless already changed)
            if ($idQuestion->getQuiz() === $this) {
                $idQuestion->setQuiz(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Evaluation>
     */
    public function getEvaluations(): Collection
    {
        return $this->evaluations;
    }

    public function addEvaluation(Evaluation $evaluation): static
    {
        if (!$this->evaluations->contains($evaluation)) {
            $this->evaluations->add($evaluation);
            $evaluation->setIdQuiz($this);
        }

        return $this;
    }

    public function removeEvaluation(Evaluation $evaluation): static
    {
        if ($this->evaluations->removeElement($evaluation)) {
            // set the owning side to null (unless already changed)
            if ($evaluation->getIdQuiz() === $this) {
                $evaluation->setIdQuiz(null);
            }
        }

        return $this;
    }

   

    public function getNbquestion(): ?int
    {
        return $this->nbquestion;
    }

    public function setNbquestion(int $nbquestion): static
    {
        $this->nbquestion = $nbquestion;

        return $this;
    }

    public function getChapter(): ?Ressource
    {
        return $this->Chapter;
    }

    public function setChapter(?Ressource $Chapter): static
    {
        $this->Chapter = $Chapter;

        return $this;
    }
}