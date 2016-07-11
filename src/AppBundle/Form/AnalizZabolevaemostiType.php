<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use AppBundle\Form\LychnyiSostavType;
use AppBundle\Form\OsugdenyiType;

class AnalizZabolevaemostiType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('date', 'text', array(
                      'label' => 'Дата',
                      'attr' => array('autofocus' => true),))
                ->add('lichnyiSostav', new LichnyiSostavType(), array(
                      'label' => 'Личный состав',
                      'data_class' => 'AppBundle\Entity\lichnyiSostav'))              
                ->add('osugdenyi', new OsugdenyiType(), array(
                      'label' => 'Осужденный',
                      'data_class' => 'AppBundle\Entity\Osugdenyi')); 
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\AnalizZabolevaemosti',
        ));
    }
}
