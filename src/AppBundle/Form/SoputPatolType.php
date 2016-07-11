<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class SoputPatolType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', ChoiceType::class, array(
                    'choices'  => array(
                        'ВИЧ' => "ВИЧ",
                        'Гипатит B' => "Гипатит B",
                        'Гипатит C' => "Гипатит C",
                        'Гипатит B+C' => "Гипатит B+C",
                        'ПИН' => "ПИН",
                    ),
                    'choices_as_values' => true,
                    'label' => 'Сопутствующая патология',
                    'attr' => array(
                        'class' => 'form-control'))); 
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\SoputPatol',
        ));
    }
}
