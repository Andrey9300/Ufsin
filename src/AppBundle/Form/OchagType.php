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

class OchagType extends AbstractType
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
				->add('name', 'text', array(
                    'attr' => array('autofocus' => true)))
                ->add('date', DateType::class, array(
                    'widget' => 'single_text',
                    'format' => 'dd.MM.yyyy'))
                ->add('place', ChoiceType::class, array(
                    'choices'  => array(
                    '1 отряд' => "1 отряд",
                    '2 отряд' => "2 отряд",
                    '3 отряд' => "3 отряд",
                    '4 отряд' => "4 отряд",
                    '5 отряд' => "5 отряд",
                    '6 отряд' => "6 отряд",
                    '7 отряд' => "7 отряд",
                    '8 отряд' => "8 отряд",
                    '9 отряд' => "9 отряд",
                    '10 отряд' => "10 отряд",
                    '11 отряд' => "11 отряд",
                    '12 отряд' => "12 отряд",
                    'ПКТ' => "ПКТ",
                    'ЕПКТ' => "ЕПКТ",
                    'ОСУОН' => "ОСУОН",
                    'ШИЗО' => "ШИЗО",
                    'Карантинное отделение' => "Карантинное отделение",
                    ),
                    'choices_as_values' => true,
                    'label' => 'Место проживания', 
                    'attr' => array('class' => 'form-control')))
                ->add('osugdenyi', CollectionType::class, array(
                      'entry_type' => OsugdenyiOchagType::class,
                      'allow_add'    => true,
                      'by_reference' => false,))
                ->add('kontaktnyi', CollectionType::class, array(
                      'entry_type' => KontaktnyiType::class,
                      'allow_add'    => true,
                      'by_reference' => false));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Ochag',
        ));
    }
}
