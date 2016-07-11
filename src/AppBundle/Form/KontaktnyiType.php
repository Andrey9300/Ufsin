<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class KontaktnyiType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('fio', 'text', array(
                    'label' => 'ФИО',
                    'attr' => array(
                        'class' => 'form-control')))
                ->add('date_birthday', 'text', array(
                    'label' => 'Дата рождения', 
                    'attr' => array(
                        'class' => 'form-control',
                        'data-validation' => 'date', 
                        'data-validation-optional' => 'true', 
                        'data-validation-format' => 'dd.mm.yyyy'))); 
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Kontaktnyi',
        ));
    }
}
