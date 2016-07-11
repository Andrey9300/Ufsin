<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use AppBundle\Repository\OrganizationRepository;

class LichnyiSostavType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('organization' , 'entity', array(
                    'class'    => 'AppBundle:Organization',
					'query_builder' => function (OrganizationRepository $er) {
                        return $er->createQueryBuilder('org')
							      ->orderBy('org.position', 'ASC');
						},
					'property' => 'name_short'))
                ->add('gender', ChoiceType::class, array(
                    'choices'  => array(
                        'Мужской' => "1",
                        'Женский' => "0",
                    ),  
                    'choices_as_values' => true,))
                ->add('fio', 'text', array(
                    'attr' => array('autofocus' => true)))
                ->add('date_birthday', DateType::class, array(
                    'widget' => 'single_text',
                    'format' => 'dd.MM.yyyy'))
                ->add('address')
                ->add('profession')
                ->add('data_extr_izv', DateType::class, array(
                    'widget' => 'single_text',
                    'format' => 'dd.MM.yyyy'))
                ->add('data_zabolevaniya', DateType::class, array(
                    'widget' => 'single_text',
                    'format' => 'dd.MM.yyyy'))
                ->add('data_obracheniya', DateType::class, array(
                    'widget' => 'single_text',
                    'format' => 'dd.MM.yyyy')); 
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\LichnyiSostav',
        ));
    }
}
