<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RukovoditelZamestitelType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('fio', null, array('label' => 'ФИО заместителя руководителя', 'attr' => array('class' => 'form-control')))
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
                    'label' => 'Звание заместителя руководителя', 'attr' => array('class' => 'form-control')))
                ->add('oblast_deaytelnosti', null, array(
                    'label' => 'Область деятельности заместителя руководителя',
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
            'data_class' => 'AppBundle\Entity\RukovoditelZamestitel',
        ));
    }
}
