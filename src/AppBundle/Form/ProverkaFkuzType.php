<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ProverkaFkuzType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomer', 'text', array(
            'attr' => array('autofocus' => true),))
            ->add('date', DateType::class, array(
                'widget' => 'single_text',
                'format' => 'dd.MM.yyyy'))
            ->add('date_rasporyageniya', DateType::class, array(
                'widget' => 'single_text',
                'format' => 'dd.MM.yyyy',
                'required' => false))
            ->add('date_akt', DateType::class, array(
                'widget' => 'single_text',
                'format' => 'dd.MM.yyyy',
                'required' => false))
            ->add('date_predpisaniya', DateType::class, array(
                'widget' => 'single_text',
                'format' => 'dd.MM.yyyy',
                'required' => false))
            ->add('kem_vydano')
            ->add('proverkaType' , 'entity' , array(
                'class'    => 'AppBundle:ProverkaType',
                'property' => 'name',
                'expanded' => false,))
            ->add('proverkaNakazanieFkuz', CollectionType::class, array(
                'entry_type' => ProverkaNakazanieFkuzType::class,
                'allow_add'    => true,
                'by_reference' => false));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ProverkaFkuz',
        ));
    }
}
