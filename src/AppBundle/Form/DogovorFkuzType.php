<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class DogovorFkuzType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomer', null, array(
                    'attr' => array('autofocus' => true),))
                ->add('date', DateType::class, array(
                    'widget' => 'single_text',
                    'format' => 'dd.MM.yyyy'))
                ->add('organization_posrednik')
                ->add('summa', null, array('required' => false))
                ->add('dogovorType', 'entity', array(
                    'class'    => 'AppBundle:DogovorType',
                    'property' => 'name',
                    'expanded' => false)); 
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\DogovorFkuz',
        ));
    }
}
