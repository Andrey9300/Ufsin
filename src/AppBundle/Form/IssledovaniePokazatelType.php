<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use AppBundle\Repository\IssledovanieTypeRepository;

class IssledovaniePokazatelType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', null, array(
                    'attr' => array('autofocus' => true),))
                ->add('normativ_znak', 'text', array(
                    'required' => false, 
                    'label' => 'Если больше "+" (меньше "-")', 
                    'attr' => array(
                        'class' => 'form-control',
                        'required' => false)))    
                ->add('normativ', 'text', array(
                    'required' => false, 
                    'label' => 'Норматив', 
                    'attr' => array(
                        'class' => 'form-control',
                        'required' => false)))
                ->add('normativ_dob', 'text', array(
                    'required' => false, 
                    'label' => 'Норматив до', 
                    'attr' => array(
                        'class' => 'form-control',
                        'required' => false)))
                ->add('edinicy_issledovaniya', 'text')
                ->add('issledovanieType' , 'entity' , array(
                    'class'    => 'AppBundle:issledovanieType',
                    'query_builder' => function (IssledovanieTypeRepository $er) {
                        return $er->createQueryBuilder('u')
                                    ->where($er->createQueryBuilder('u')->expr()->isNull('u.is_parent'));
                        },
                    'property' => 'name',
                    'expanded' => false,)); 
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\IssledovaniePokazatel',
        ));
    }
}
