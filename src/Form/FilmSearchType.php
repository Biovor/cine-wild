<?php

namespace App\Form;


use App\Entity\Actor;
use App\Entity\Director;
use App\Entity\PublicAge;
use App\Entity\TypeFilms;
use App\Entity\YearOfProduction;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FilmSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Recherche', SearchType::class, [
                'required' => false,
                'attr'     => ['placeholder'  => 'Entrez un titre...',
                    'autocomplete' => 'off',
                ],
            ])
            ->add('actor', EntityType::class, [
                'class'        => Actor::class,
                'choice_label' => 'actorFullName',
                'expanded'     => false,
                'required'     => false,
                'multiple'     => true,
                'attr'         => [
                    'class' => 'selectpicker multiple',
                    'title' => 'Sélectionnez un ou des acteurs',
                ],
            ])
            ->add('director', EntityType::class, [
                'class'        => Director::class,
                'choice_label' => 'directorFullName',
                'expanded'     => false,
                'required'     => false,
                'multiple'     => true,
                'attr'         => [
                    'class' => 'selectpicker multiple',
                    'title' => 'Sélectionnez un ou des réalisateurs',
                ],
            ])
            ->add('typeFilms', EntityType::class, [
                'class'        => TypeFilms::class,
                'choice_label' => 'label',
                'expanded'     => false,
                'required'     => false,
                'multiple'     => true,
                'attr'         => [
                    'class' => 'selectpicker multiple',
                    'title' => 'Sélectionnez un ou des types de film',
                ],
            ])
            ->add('yearOfProduction', EntityType::class, [
                'class'        => YearOfProduction::class,
                'choice_label' => 'year',
                'expanded'     => false,
                'required'     => false,
                'multiple'     => true,
                'attr'         => [
                    'class' => 'selectpicker multiple',
                    'title' => 'Sélectionnez un ou des années de production',
                ],
            ])
            ->add('publicAge', EntityType::class, [
                'class'        => PublicAge::class,
                'choice_label' => 'label',
                'expanded'     => false,
                'required'     => false,
                'multiple'     => true,
                'attr'         => [
                    'class' => 'selectpicker multiple',
                    'title' => 'Sélectionnez une ou des réstriction d\'age',
                ],
            ]);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'csrf_protection' => false,
        ));
    }

    public function getBlockPrefix()
    {
        return 'app_film_search_type';
    }
}
