<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Form\RukovoditelZamestitelType;

class RukovoditelType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('fio')
                ->add('zvanie', ChoiceType::class, array(
                  'choices'  => array(
                        'Полковник' => "Полковник",
                        'Подполковник' => "Подполковник",
                        'Майор' => "Майор",
                        'Капитан' => "Капитан",
                        'Старший лейтенант' => "Старший лейтенант",
                        'Лейтенант' => "Лейтенант",
                    ),
                    'choices_as_values' => true))
                ->add('rukovoditel_zamestitel', CollectionType::class, array(
                  'entry_type' => RukovoditelZamestitelType::class,
                  'allow_add'    => true,
                  'by_reference' => false));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Rukovoditel',
        ));
    }
}
