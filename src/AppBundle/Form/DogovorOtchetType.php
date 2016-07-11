<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DogovorOtchetType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('dogovor_type_id' , 'entity' , array(
                      'class'    => 'AppBundle:DogovorType',
                      'property' => 'name',
                      'expanded' => false))
                ->add('dogovor_objects' , 'entity' , array(
                      'class'    => 'AppBundle:Objects',
                      'property' => 'name',
                      'expanded' => false,)); 
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Dogovor',
        ));
    }
}
