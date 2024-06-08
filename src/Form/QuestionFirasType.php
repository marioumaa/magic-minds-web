<?php

namespace App\Form;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use App\Entity\questionFiras;
use Karser\Recaptcha3Bundle\Form\Recaptcha3Type;
use Karser\Recaptcha3Bundle\Validator\Constraints\Recaptcha3;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ColorType;

class QuestionFirasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
            ->add('date')
           ->add('name')
            ->add('commentaire')
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'enfant' => 'enfant',
                    'parent' => 'parent',
                    
                    
                ],
                'label' => 'Type d"utilisateur',
            ])
            
            ->add('image' , FileType::class, array('data_class' => null , 'label'=>"image") )
            ->add('color', ColorType::class)
            
        ;
//         $builder->add('captcha', Recaptcha3Type::class, [
//            'constraints' => new Recaptcha3(),
//            'action_name' => 'homepage',
//        ]);
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => questionFiras::class,
        ]);
    }
}
