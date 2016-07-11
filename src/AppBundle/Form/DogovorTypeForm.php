<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use AppBundle\Repository\ObjectsRepository;

class DogovorTypeForm extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomer', 'text', array(
                    'attr' => array('autofocus' => true),))
                ->add('date', DateType::class, array(
                    'widget' => 'single_text',
                    'format' => 'dd.MM.yyyy'))
                ->add('organization_posrednik')
                ->add('summa', null, array('required' => false))
                ->add('dogovor_objects' , 'entity' , array(
                    'class'    => 'AppBundle:Objects',
                    'query_builder' => function (ObjectsRepository $er) use ($options) {
                        return $er->createQueryBuilder('u')
                                    ->join('u.organization_id', 'org', 'WITH')
                                    ->where('org.id = :org')
                                    ->setParameter('org', $options['data']->getOrganization());
                    },
                    'property' => 'name',
                    'expanded' => true,
                    'multiple' => true, ))
                ->add('dogovorType', 'entity', array(
                    'class'    => 'AppBundle:DogovorType',
                    'property' => 'name',
                    'expanded' => false)); 
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Dogovor',
        ));
    }
}
