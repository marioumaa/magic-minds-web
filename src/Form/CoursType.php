<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Cours;
use App\Entity\Quiz;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CoursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre',TextType::class,[
                'label'=> false,
            ])
            ->add('description',TextareaType ::class,[
                'label'=> false,
            ])
            ->add('duree',NumberType::class, [
                'label'=> false,
            ])
            ->add('nbChapitre',NumberType::class,[
                'label'=> false,
            ])
            ->add('categorie', EntityType::class,[   
                'class'=> Categorie::class,
                'choice_label' => 'titre',
                'label'=> false,
            ])
            ->add('save',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cours::class,
        ]);
    }
}
