<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class OsugdenyiOchagType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('gender', ChoiceType::class, array(
                    'choices'  => array(
                        'Мужской' => "1",
                        'Женский' => "0",
                    ),
                    'choices_as_values' => true,
                    'label' => 'Пол',
                    'attr' => array(
                        'class' => 'form-control')))
                ->add('fio', 'text', array(
                    'label' => 'ФИО',
                    'attr' => array(
                        'class' => 'form-control')))                     
                ->add('date_birthday', DateType::class, array(
                    'widget' => 'single_text',
                    'format' => 'dd.MM.yyyy',
                    'label' => 'Дата рождения (дд.мм.гггг)',
                    'attr' => array(
                        'class' => 'form-control')))                     
                ->add('place_job', 'text', array(
                    'required' => false,
                    'label' => 'Место работы',
                    'attr' => array(
                        'class' => 'form-control')))
                ->add('place_study', 'text', array(
                    'required' => false,
                    'label' => 'Место учебы',
                    'attr' => array(
                        'class' => 'form-control')))
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
                    'choices_as_values' => true,
                    'label' => 'Место проживания',
                    'attr' => array(
                        'class' => 'form-control')))
                ->add('date_viyavleniya', DateType::class, array(
                    'widget' => 'single_text',
                    'format' => 'dd.MM.yyyy',
                    'label' => 'Дата заболевания (дд.мм.гггг)',
                    'attr' => array(
                        'class' => 'form-control')))
                ->add('date_gospit', DateType::class, array(
                    'widget' => 'single_text',
                    'format' => 'dd.MM.yyyy',
                    'label' => 'Дата госпитализации в МЧ (дд.мм.гггг)',
                    'attr' => array(
                        'class' => 'form-control')))                        
                ->add('date_vzyatiya_na_uchet', DateType::class, array(
                    'widget' => 'single_text',
                    'required' => false,
                    'format' => 'dd.MM.yyyy',
                    'label' => 'Дата взятия на учет ЛИУ-9 (дд.мм.гггг)',
                    'attr' => array(
                        'class' => 'form-control')))
                ->add('date_perevoda', DateType::class, array(
                    'widget' => 'single_text',
                    'required' => false,
                    'format' => 'dd.MM.yyyy',
                    'label' => 'Дата перевода в ЛИУ-9 (дд.мм.гггг)',
                    'attr' => array(
                        'class' => 'form-control')))                        
                ->add('mbt', ChoiceType::class, array(
                    'choices'  => array(
                        '-' => "-",
                        '+' => "+",
                    ),  
                    'choices_as_values' => true,
                    'label' => 'МБТ',
                    'attr' => array(
                        'class' => 'form-control')))    
                ->add('date_zakl_dezin', DateType::class, array(
                    'widget' => 'single_text',
                    'format' => 'dd.MM.yyyy',
					'required' => false,
                    'label' => 'Дата заключительной дезинфекции (дд.мм.гггг)',
                    'attr' => array(
                        'class' => 'form-control')))
                ->add('date_post_v_org', DateType::class, array(
                    'widget' => 'single_text',
                    'required' => false,
                    'format' => 'dd.MM.yyyy',
                    'label' => 'Дата поступления в учреждение (дд.мм.гггг)',
                    'attr' => array(
                        'class' => 'form-control')))  
                ->add('date_obr', DateType::class, array(
                    'widget' => 'single_text',
                    'required' => false,
                    'format' => 'dd.MM.yyyy',
                    'label' => 'Дата обращения в МЧ (дд.мм.гггг)',
                    'attr' => array(
                        'class' => 'form-control')))
                ->add('viyavlen', ChoiceType::class, array(
                    'choices'  => array(
                        'При профосмотре' => "При профосмотре",
                        'При обращении в МЧ' => "При обращении в МЧ",
                    ),
                    'choices_as_values' => true,
                    'label' => 'Выявлен',
                    'attr' => array(
                        'class' => 'form-control')))
                ->add('recidiv', ChoiceType::class, array(
                    'choices'  => array(
                        'Впервые выявлен' => "Впервые выявлен",
                        'Рецидив' => "Рецидив",
                        'С диагнозом' => "С диагнозом",
                    ),
                    'choices_as_values' => true,
                    'label' => 'Заболеваемость',
                    'attr' => array(
                        'class' => 'form-control')))                   
                ->add('postupil_iz', ChoiceType::class, array(
                    'choices'  => array(
                        'УФСИН по ЯО' => "УФСИН по ЯО",
                        'ОЛС' => "ОЛС",
                        'УИС РФ' => "УИС РФ",
                    ),
                    'choices_as_values' => true,
                    'label' => 'Поступил из',
                    'attr' => array(
                        'class' => 'form-control')))                    
                ->add('address_common', ChoiceType::class, array(
                    'choices'  => array(
                        'Ярославская область' => "Ярославская область",
                        'Субъект РФ' => "Субъект РФ",
                        'Иностранный гражданин' => "Иностранный гражданин",
                        'БОМЖ' => "БОМЖ",
                    ),
                    'choices_as_values' => true,
                    'label' => 'Адрес общий',
                    'attr' => array(
                        'class' => 'form-control')))                    
                ->add('address_propiska', 'text', array(
                    'required' => false,
                    'label' => 'Адрес по прописке',
                    'attr' => array(
                        'class' => 'form-control')));
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
