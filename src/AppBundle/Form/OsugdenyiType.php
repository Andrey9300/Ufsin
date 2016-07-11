<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use AppBundle\Form\KontaktnyiType;
use AppBundle\Form\DatesFLGType;
use AppBundle\Repository\OrganizationRepository;

class OsugdenyiType extends AbstractType
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
                ->add('fio')                     
                ->add('date_birthday', DateType::class, array(
                    'widget' => 'single_text',
                    'format' => 'dd.MM.yyyy'))                     
                ->add('place_job', 'text', array('required' => false))
                ->add('place_study', 'text', array('required' => false))
                ->add('place_progivaniya', ChoiceType::class, array(
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
                    'choices_as_values' => true,))
                ->add('date_viyavleniya', DateType::class, array(
                    'widget' => 'single_text',
                    'format' => 'dd.MM.yyyy'))
                ->add('date_vzyatiya_na_uchet', DateType::class, array(
                    'widget' => 'single_text',
                    'required' => false,
                    'format' => 'dd.MM.yyyy'))
                ->add('mbt', ChoiceType::class, array(
                    'choices'  => array(
                        '-' => "-",
                        '+' => "+",
                    ),  
                    'choices_as_values' => true,))
                ->add('date_gospit', DateType::class, array(
                    'widget' => 'single_text',
                    'format' => 'dd.MM.yyyy'))
                ->add('date_perevoda', DateType::class, array(
                    'widget' => 'single_text',
                    'required' => false,
                    'format' => 'dd.MM.yyyy'))
                ->add('date_zakl_dezin', DateType::class, array(
                    'widget' => 'single_text',
                    'format' => 'dd.MM.yyyy',
					'required' => false))
                ->add('date_post_v_org', DateType::class, array(
                    'widget' => 'single_text',
                    'required' => false,
                    'format' => 'dd.MM.yyyy'))  
                ->add('date_obr', DateType::class, array(
                    'widget' => 'single_text',
                    'required' => false,
                    'format' => 'dd.MM.yyyy'))
                ->add('viyavlen', ChoiceType::class, array(
                    'choices'  => array(
                        'При профосмотре' => "При профосмотре",
                        'При обращении в МЧ' => "При обращении в МЧ",
                    ),
                    'choices_as_values' => true,))
                ->add('recidiv', ChoiceType::class, array(
                    'choices'  => array(
                        'Впервые выявлен' => "Впервые выявлен",
                        'Рецидив' => "Рецидив",
                        'С диагнозом' => "С диагнозом",
                    ),
                    'choices_as_values' => true,))                   
                ->add('postupil_iz', ChoiceType::class, array(
                    'choices'  => array(
                        'УФСИН по ЯО' => "УФСИН по ЯО",
                        'ОЛС' => "ОЛС",
                        'УИС РФ' => "УИС РФ",
                    ),
                    'choices_as_values' => true,))                    
                ->add('address_common', ChoiceType::class, array(
                    'choices'  => array(
                        'Ярославская область' => "Ярославская область",
                        'Субъект РФ' => "Субъект РФ",
                        'Иностранный гражданин' => "Иностранный гражданин",
                        'БОМЖ' => "БОМЖ",
                    ),
                    'choices_as_values' => true,))                    
                ->add('address_propiska', 'text', array(
                    'required' => false,))                    
                ->add('ochag' , 'entity', array(
                    'class'    => 'AppBundle:Ochag',
                    'property' => 'name',
                    'expanded' => false,
                    'required' => false))
                ->add('soput_patol', CollectionType::class, array(
                    'entry_type' => SoputPatolType::class,
                    'allow_add'    => true,
                    'by_reference' => false))                      
                ->add('datesFLG', CollectionType::class, array(
                    'entry_type' => DatesFLGType::class,
                    'allow_add'    => true,
                    'by_reference' => false))    
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
            'data_class' => 'AppBundle\Entity\Osugdenyi',
        ));
    }
}
