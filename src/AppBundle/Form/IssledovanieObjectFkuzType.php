<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Repository\IssledovanieTypeRepository;

class IssledovanieObjectFkuzType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('proba', 'text', array(
                    'required' => false, 
                    'label' => 'Проба', 
                    'attr' => array(
                        'class' => 'form-control')))
                ->add('result', 'text', array('label' => 'Результат', 'attr' => array('class' => 'form-control')))
                ->add('issledovanieType' , 'entity' , array(
                    'class'    => 'AppBundle:IssledovanieType',
                    'label' => 'Тип исследования',
                    'query_builder' => function (IssledovanieTypeRepository $er) {
                        return $er->createQueryBuilder('u')
                                    ->where($er->createQueryBuilder('u')->expr()->isNull('u.is_parent'));
                        },
                    'property' => 'name',                    
                    'attr' => array(
                        'class' => 'form-control')))                       
                ->add('issledovaniePokazatelFkuz' , 'entity' , array(
                    'class'    => 'AppBundle:IssledovaniePokazatel',
                    'property' => 'name',
                    'expanded' => false,
                    'label' => 'Показатель исследования', 
                    'attr' => array('class' => 'form-control pokazatel_issledovaniya')))    
                ->add('normativ_znak', 'text', array(
                    'required' => false, 
                    'label' => 'Если больше "+" (меньше "-")', 
                    'attr' => array(
                        'class' => 'form-control')))    
                ->add('normativ', 'text', array(
                    'required' => false, 
                    'label' => 'Начало диапазона (от), или +/- (присутствует/отсутствует), или число', 
                    'attr' => array(
                        'class' => 'form-control')))
                ->add('normativ_dob', 'text', array(
                    'required' => false, 
                    'label' => 'Норматив до', 
                    'attr' => array(
                        'class' => 'form-control')));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\IssledovanieObjectFkuz',
        ));
    }
}