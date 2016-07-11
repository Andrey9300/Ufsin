<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProverkaNakazanieType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomer', 'text', array('label' => 'Номер', 'attr' => array('class' => 'form-control')))
                ->add('date', DateType::class, array(
                    'widget' => 'single_text',
                    'format' => 'dd.MM.yyyy',
                    'label' => 'Дата (дд.мм.гггг)', 
                    'attr' => array(
                        'class' => 'form-control',
                        'data-validation' => 'date', 
                        'data-validation-optional' => 'true', 
                        'data-validation-format' => 'dd.mm.yyyy')))
                ->add('fio', 'text', array('label' => 'ФИО', 'attr' => array('class' => 'form-control')))
                ->add('dolgnost', ChoiceType::class, array(
                    'choices'  => array(
                        'врио заместителя начальника колонии' => "врио заместителя начальника колонии",
                        'заместитель начальника колонии' => "заместитель начальника колонии",
                        'начальник отряда участка колонии - поселения' => "начальник отряда участка колонии - поселения",
                        'начальник отряда отдела воспитательной работы с осужденными' => "начальник отряда отдела воспитательной работы с осужденными",
                        'начальник отдела воспитательной работы с осужденными' => "начальник отдела воспитательной работы с осужденными",
                        'начальник центра трудовой адаптации осужденных' => "начальник центра трудовой адаптации осужденных",
                        'главный инженер' => "главный инженер",
                        'главный механик энергомеханической группы' => "главный механик энергомеханической группы",
                        'врио заместителя начальника колонии - начальник центра' => "врио заместителя начальника колонии - начальник центра",
                        'старший инспектор ОКБИиХО' => "старший инспектор ОКБИиХО",
                        'начальник ОКБИиХО' => "начальник ОКБИиХО",
                        'начальник отдела безопасности' => "начальник отдела безопасности",
                        'начальник пожарной части' => "начальник пожарной части",
                        'заместитель начальника отдела безопасности' => "заместитель начальника отдела безопасности",
                        'начальник отдела безопасности' => "начальник отдела безопасности",
                    ),
                    'choices_as_values' => true,
                    'label' => 'Должность', 
                    'attr' => array(
                        'class' => 'form-control')))
                ->add('zvanie', ChoiceType::class, array(
                    'choices'  => array(
                        'Полковник' => "Полковник",
                        'Подполковник' => "Подполковник",
                        'Майор' => "Майор",
                        'Капитан' => "Капитан",
                        'Старший лейтенант' => "Старший лейтенант",
                        'Лейтенант' => "Лейтенант",
                    ),
                    'choices_as_values' => true,
                    'label' => 'Звание', 
                    'attr' => array('class' => 'form-control')))
                ->add('podchinennost', ChoiceType::class, array(
                    'choices'  => array(
                        'Аттестованный' => "Аттестованный",
                        'Вольный' => "Вольный",
                     ),
                    'choices_as_values' => true,
                    'label' => 'Подчиненность',
                    'attr' => array('class' => 'form-control')))                
                ->add('type', ChoiceType::class, array(
                    'choices'  => array(
                        'Неполное служебное' => "Неполное служебное",
                        'Строгий выговор' => "Строгий выговор",
						'Выговор' => "Выговор",
						'Замечание' => "Замечание",
						'Ограничиться ранее' => "Ограничиться ранее",
						'Строго предупредить' => "Строго предупредить",
                    ),
                    'choices_as_values' => true,
                    'label' => 'Тип наказания',
                    'attr' => array('class' => 'form-control')))
                ->add('vid', ChoiceType::class, array(
                    'choices'  => array(
                        'Служебная проверка' => "Служебная проверка",
                        'Административная проверка' => "Административная проверка",
                    ),
                    'choices_as_values' => true,
                    'label' => 'Вид наказания',
                    'attr' => array('class' => 'form-control')));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ProverkaNakazanie',
        ));
    }
}
