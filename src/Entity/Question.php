<?php

namespace App\Entity;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\QuestionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuestionRepository::class)]
#[UniqueEntity(fields: ['question'], message: 'This question is already in use.')]
#[Assert\Callback(callback: 'validateReponse')]

class Question
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Question cannot be blank.")]
    #[Assert\Length(max: 255, maxMessage: "Question cannot be longer than {{ max }} characters.")]
    private ?string $question = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Choice 1 cannot be blank.")]
    #[Assert\Length(max: 100, maxMessage: "Choice 1 cannot be longer than {{ 100 }} characters.")]
    private ?string $choix1 = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Choice 2 cannot be blank.")]
    #[Assert\Length(max: 100, maxMessage: "Choice 2 cannot be longer than {{ 100 }} characters.")]
    #[Assert\NotEqualTo(propertyPath: "choix1", message: "Choice 2 must be different from Choice 1.")]
    private ?string $choix2 = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Choice 3 cannot be blank.")]
    #[Assert\Length(max: 100, maxMessage: "Choice 3 cannot be longer than {{ 100 }} characters.")]
    #[Assert\NotEqualTo(propertyPath: "choix1", message: "Choice 3 must be different from Choice 1.")]
    #[Assert\NotEqualTo(propertyPath: "choix2", message: "Choice 3 must be different from Choice 2.")]
    private ?string $choix3 = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Answer cannot be blank.")]
    #[Assert\Length(max: 100, maxMessage: "Answer cannot be longer than {{ 100 }} characters.")]

    private ?string $reponse = null;

    #[ORM\ManyToOne(inversedBy: 'idQuestion')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Quiz $quiz = null;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): static
    {
        $this->question = $question;

        return $this;
    }

    public function getChoix1(): ?string
    {
        return $this->choix1;
    }

    public function setChoix1(string $choix1): static
    {
        $this->choix1 = $choix1;

        return $this;
    }

    public function getChoix2(): ?string
    {
        return $this->choix2;
    }

    public function setChoix2(string $choix2): static
    {
        $this->choix2 = $choix2;

        return $this;
    }

    public function getChoix3(): ?string
    {
        return $this->choix3;
    }

    public function setChoix3(string $choix3): static
    {
        $this->choix3 = $choix3;

        return $this;
    }

    public function getReponse(): ?string
    {
        return $this->reponse;
    }

    public function setReponse(string $reponse): static
    {
        $this->reponse = $reponse;

        return $this;
    }

    public function getQuiz(): ?Quiz
    {
        return $this->quiz;
    }

    public function setQuiz(?Quiz $quiz): static
    {
        $this->quiz = $quiz;

        return $this;
    }
    public function validateReponse(ExecutionContextInterface $context)
    {
        if ($this->reponse !== $this->choix1 && $this->reponse !== $this->choix2 && $this->reponse !== $this->choix3) {
            $context->buildViolation('Answer must be one of the choices.')
                ->atPath('reponse')
                ->addViolation();
        }
    }

}
