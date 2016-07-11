<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Repository\IssledovanieTypeRepository;

class IssledovanieType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomer', 'text', array(
                    'attr' => array('autofocus' => true)))
                ->add('date', DateType::class, array(
                    'widget' => 'single_text',
                    'format' => 'dd.MM.yyyy'))
                ->add('all_count', 'integer', array(
                    'label' => 'Количество проб',
                    'attr' => array('class' => 'form-control', 'type' => 'number')))
                ->add('ne_sootv', 'integer', array(
                    'label' => 'Не соответствует',
                    'data' => '0',
                    'attr' => array('class' => 'form-control ne_sootv')))
                ->add('issledovanieType' , 'entity' , array(
                    'class'    => 'AppBundle:IssledovanieType',
                    'query_builder' => function (IssledovanieTypeRepository $er) {
                        return $er->createQueryBuilder('u')
                                    ->where($er->createQueryBuilder('u')->expr()->isNull('u.parent'));
                        },
                    'property' => 'name',
                    'expanded' => false,
                    'label' => 'Тип исследования',
                    'empty_data' => 'Default value',
                    'attr' => array('class' => 'form-control type_issledovaniya')))
                ->add('pokazatelsIssledovaniy', CollectionType::class, array(
                    'entry_type' => PokazatelsIssledovaniyaType::class,
                    'allow_add'    => true, 
                    'by_reference' => false));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Issledovanie',
        ));
    }
}
