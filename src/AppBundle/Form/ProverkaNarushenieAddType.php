<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ProverkaNarushenieAddType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('id_organization_object' , 'entity', array(
                    'class'    => 'AppBundle:Objects',
                    'query_builder' => function (ObjectsRepository $er) {
                        return $er->createQueryBuilder('u')
                                    ->join('u.organization_id', 'org', 'WITH')
                                    ->where('org.id = :org')
                                    ->setParameter('org', $_COOKIE['org_id']);
                    },
                    'property' => 'name',
                    'expanded' => false,
                    'label' => 'Объект', 
                    'attr' => array('class' => 'form-control')))
                ->add('description', 'text', array(
                    'label' => 'Описание', 
                    'attr' => array(
                        'class' => 'form-control', 
                        'spellcheck' => 'true')))
                ->add('date_ustraneniya', 'text', array(
                    'label' => 'Дата устранения (дд.мм.гггг)',
                    'attr' => array('class' => 'form-control', 
                        'data-validation' => 'date', 
                        'data-validation-optional' => 'true', 
                        'data-validation-format' => 'dd.mm.yyyy')))
                ->add('otmetka_ustraneniya', ChoiceType::class, array(
                    'choices'  => array(
                    'Да' => "1",
                    'Нет' => "0",
                    'Частично' => "-1", 
                    'Устранено в ходе проверки' => "2",
                    ),
                    'choices_as_values' => true,
                    'label' => 'Отметка устранения', 
                    'attr' => array('class' => 'form-control')))
                ->add('zatraty', ChoiceType::class, array(
                    'choices'  => array(
                    'Требует больших затрат' => "1",
                    'Требует затрат' => "0",
                    'Не требует затрат' => "-1",
                    ),
                    'choices_as_values' => true,
                    'label' => 'Затраты', 
                    'attr' => array('class' => 'form-control')))                    
                ->add('primechanie', 'text', array(
                    'label' => 'Примечание', 
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control',
                        'spellcheck' => 'true')));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ProverkaNarushenie',
        ));
    }
}
