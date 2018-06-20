<?php
/**
 * Created by PhpStorm.
 * User: biovor
 * Date: 13/06/18
 * Time: 10:05
 */
namespace App\Admin;

use App\Entity\Actor;
use App\Entity\Director;
use App\Entity\PublicAge;
use App\Entity\TypeFilms;
use App\Entity\YearOfProduction;
use App\Form\PictureType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\ModelType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class FilmsAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('pricip', ['class' => 'col-md-9'])

            ->add('title', TextType::class)
            ->add('original_title', TextType::class, array(
                'required' => false,
            ))
            ->add('relase_date',DateType::class, array(
                'widget' => 'choice',
            ))
            ->add('duration', TextType::class)
            ->add('synopsie', TextareaType::class)
            ->add('press_note', IntegerType::class, array(
                'required' => false,
            ))
            ->add('public_note', IntegerType::class, array(
                'required' => false,
            ))
            ->add('novelty', ChoiceType::class, array(
                'choices' => array(
                    'Yes' => true,
                    'No' => false
                ),
                'label' => 'New Film',
                'required' => true,
                'choices_as_values' => true
            ))
            ->add('critical', TextareaType::class, array(
                'required' => false,
            ))

            ->end()
            ->with('meta', ['class' => 'col-md-3'])

            ->add('directors', ModelType::class, [
                'class' => Director::class,
                'property' => 'firstName',
                'multiple' => true,
            ])

            ->add('actors', ModelType::class, [
                'class' => Actor::class,
                'property' => 'firstName',
                'multiple' => true,
            ])

            ->add('types', ModelType::class, [
                'class' => TypeFilms::class,
                'property' => 'label',
                'multiple' => true,
            ])

            ->add('yearOfProduction', ModelType::class, [
                'class' => YearOfProduction::class,
                'property' => 'year',
            ])
            ->add('publicAge', ModelType::class, [
                'class' => PublicAge::class,
                'property' => 'label',
            ])
            ->add('picture', PictureType::class)

            ->end()
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('title');

    }
}