<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use AppBundle\Repository\ObjectsRepository;
use AppBundle\Form\RukovoditelType;

class OrganizationEditType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name_full', null, array(
                    'attr' => array('autofocus' => true),))
                ->add('name_short')
                ->add('ur_address')
                ->add('rukovoditel', RukovoditelType::class)
                ->add('organizationMCH' , 'entity', array(
                    'class'    => 'AppBundle:OrganizationMCH'))
                ->add('objects', 'entity', array(
                    'class'    => 'AppBundle:Objects',  
                    'property' => 'name',
                    'expanded' => true,
                    'multiple' => true, )); 
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Organization',
        ));
    }
}
