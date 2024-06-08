<?php

namespace App\Form;

use App\Entity\questionFiras;

use App\Entity\Evenement;
use App\Entity\reponseFiras;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Karser\Recaptcha3Bundle\Form\Recaptcha3Type;
use Karser\Recaptcha3Bundle\Validator\Constraints\Recaptcha3;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReponseFirasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fullname')
            ->add('questions',EntityType::class,  [
                'class' => questionFiras::class,
                'choice_label' => 'name',
            ])
           
            ->add('description')
            

        ;
//         $builder->add('captcha', Recaptcha3Type::class, [
//            'constraints' => new Recaptcha3(),
//            'action_name' => 'homepage',
//        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => reponseFiras::class,
        ]);
    }
}
