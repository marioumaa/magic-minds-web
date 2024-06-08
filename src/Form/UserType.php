<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstName')
            ->add('lastName')
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
            ->add('password',PasswordType::class,[
                'toggle' => true,
            ])
            ->add('tel')
            ->add('email')
            ->add('picture',FileType::class, [
        'label' => 'picture for your  profile (image file)',

        // unmapped means that this field is not associated to any entity property
        'mapped' => false,

        // make it optional so you don't have to re-upload the PDF file
        // every time you edit the Product details
        'required' => false,


        // unmapped fields can't define their validation using attributes
        // in the associated entity, so you can use the PHP constraint classes
        'constraints' => [
            new File([
                'maxSize' => '1024k',
                'mimeTypes' => [
                    'image/gif',
                    'image/jpeg',
                    'image/png',
                    'image/jpg',
                ],
                'mimeTypesMessage' => 'Please upload a valid image',
            ])
        ]])
            ->add('roles',ChoiceType::class,[
                    'expanded' => false,
                    'multiple' =>  false,

                    'choices'  => [
                        'Admin' => 'ROLE_ADMIN',
                        'Professor' => 'ROLE_PROFESSOR',
                        'Child' => 'ROLE_CHILD',
                        'Parent' => 'ROLE_PARENT',
                    ],


                ]
            )


            ->add('Save',SubmitType::class);


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
