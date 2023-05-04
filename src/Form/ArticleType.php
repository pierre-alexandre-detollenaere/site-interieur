<?php

namespace App\Form;

use App\Entity\Auteur;
use App\Entity\Article;
use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('contenu')
            ->add('imageForm', FileType::class, [
                'mapped' => false,
                'required' => false,
                'label' => 'Ajouter une image/photo'
            ])
            ->add('auteur', EntityType::class, [
                'placeholder' => 'Choisissez un auteur :',
                'class' => Auteur::class,
                'choice_label' => 'fullName',
                'required' => false,
            ])
            ->add('categories', EntityType::class, [
                'placeholder' => 'Choisissez parmi les catégories suivantes :',
                'class' => Categorie::class,
                'choice_label' => 'nom',
                'required' => false,
                'multiple' => true,
                'expanded' => true
            ])
            ->add('envoyer', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
