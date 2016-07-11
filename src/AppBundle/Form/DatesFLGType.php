<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class DatesFLGType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('date', DateType::class, array(
                    'label' => 'Дата',
                    'widget' => 'single_text',
                    'format' => 'dd.MM.yyyy',
                    'attr' => array(
                        'class' => 'form-control')))
				->add('result', ChoiceType::class, array(
                    'choices'  => array(
                        'Норма' => "Норма",
                        'Патология' => "Патология",
                    ),
                    'choices_as_values' => true,
                    'label' => 'Результат',
                    'attr' => array(
                        'class' => 'form-control'))); 
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\DatesFLG',
        ));
    }
}
