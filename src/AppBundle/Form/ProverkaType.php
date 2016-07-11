<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use AppBundle\Form\ProverkaNarushenieType;

class ProverkaType extends AbstractType
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
                ->add('proverka_narushenie', CollectionType::class, array(
                      'entry_type' => ProverkaNarushenieType::class,
                      'allow_add'    => true,
                      'by_reference' => false,))
                ->add('proverka_nakazanie', CollectionType::class, array(
                      'entry_type' => ProverkaNakazanieType::class,
                      'allow_add'    => true,
                      'by_reference' => false));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Proverka',
        ));
    }
}
