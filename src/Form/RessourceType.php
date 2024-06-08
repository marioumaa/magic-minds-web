<?php

namespace App\Form;

use App\Entity\Ressource;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RessourceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('titre',TextType::class)
        ->add('idCours')
        ->add('type',ChoiceType::class,[
            'choices'=>[
                'Image'=>'Image',
                'Pdf' => 'Pdf',
                'Video' => 'Video'
            ]
        ])
        ->add('file', FileType::class,[
            'mapped'=>false,
            'label'=> false,
            'required'=>false
        ])
        
        ->add('save',SubmitType::class)
    ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ressource::class,
        ]);
    }
}
