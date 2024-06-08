<?php

namespace App\Form;

use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Name of product',
            ])
            ->add('prix', NumberType::class, [
                'label' => 'Price',
                'scale'=>2
            ])
            ->add('categorie', TextType::class, [
                'label' => 'Category',
            ])
            ->add('quantite', IntegerType::class, [
                'label' => 'Quantity',
            ])
            ->add('img1', UrlType::class, [
                'label' => 'Image 1',
            ])
            ->add('img2', UrlType::class, [
                'label' => 'Image 2',
            ])
            ->add('img3', UrlType::class, [
                'label' => 'Image 3',
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Submit',
                'attr' => ['class' => 'btn btn-primary mr-2']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
