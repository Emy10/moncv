<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ExperienceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('dateDebut', DateType::class, array('required'=>true)); //required signifie que le champ doit être rempli
        $builder->add('dateFin', DateType::class, array('required'=>true)); //required signifie que le champ doit être rempli
        $builder->add('name', TextType::class, array('required'=>true)); //required signifie que le champ doit être rempli
        $builder->add('lieu', TextType::class, array('required'=>true)); //required signifie que le champ doit être rempli
        $builder->add('Save', SubmitType::class, array(
            'attr' => array('class' => 'save'),
        ));
    }
    
    public function getBlockPrefix()
    {
        return 'form_experience';
    }
}