<?php

namespace App\Form;

use App\Entity\User;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstName',\Symfony\Component\Form\Extension\Core\Type\TextType::class,[
                'mapped' => true,
                'label' => false ,
            ])
            ->add('lastName',\Symfony\Component\Form\Extension\Core\Type\TextType::class,[
                'mapped' => true,
                'label' => false ,
            ])
            ->add('email',EmailType::class,[
//                'constraints' =>[
//                    new NotBlank([
//                        'message' => 'Please enter a password',
//                    ]),
//                    new Email([
//                        'message' => 'The email {{ value }} is not a valid email.'
//                    ])
//                ],
                'label' => false ,
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
            ->add('roles',ChoiceType::class,[
                    'expanded' => false,
                    'multiple' =>  false,
                    'attr' => ['class' => 'form-select'],
                    'choices'  => [

                        'Professor' => 'ROLE_PROFESSOR',
                        'Child' => 'ROLE_CHILD',
                        'Parent' => 'ROLE_PARENT',
                    ],



                ]
            )
            ->add('age')
            ->add('gender',ChoiceType::class,[
                    'expanded' => false,
                    'attr' => ['class' => 'form-select'],
                    'multiple' =>  false,
                    'choices'  => [
                        'Male' => 'Male',
                        'Female' => 'Female'
                    ],


                ]

            )
            ->add('password', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller

                'attr' => ['autocomplete' => 'new-password'],
//                'constraints' => [
//                    new NotBlank([
//                        'message' => 'Please enter a password',
//                    ]),
//                    new Length([
//                        'min' => 6,
//                        'minMessage' => 'Your password should be at least {{ limit }} characters',
//                        // max length allowed by Symfony for security reasons
//                        'max' => 4096,
//                    ]),
//                ],

                // Instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => true,
                'label' => false ,
            ])
        ;
        $builder->get('roles')
            ->addModelTransformer(new CallbackTransformer(
                fn ($rolesAsArray) => count($rolesAsArray) ? $rolesAsArray[0]: null,
                fn ($rolesAsString) => [$rolesAsString]
            ));
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
