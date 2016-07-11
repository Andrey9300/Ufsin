<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use AppBundle\Form\ProverkaNarushenieType;

class ProverkaEditType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('proverka_narushenie', CollectionType::class, array(
                      'entry_type' => ProverkaNarushenieType::class,
                      'allow_add'    => true,
                      'by_reference' => false,))
                ->add('proverka_nakazanie', CollectionType::class, array(
                      'entry_type' => ProverkaNakazanieType::class,
                      'allow_add'    => true,
                      'allow_delete' => true,
                      'by_reference' => false));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Proverka',
        ));
    }
}
