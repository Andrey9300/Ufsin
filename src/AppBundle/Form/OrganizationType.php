<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use AppBundle\Form\RukovoditelType;
use AppBundle\Repository\OrganizationMchRepository;

class OrganizationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name_full', null, array(
                    'attr' => array('autofocus' => true),))
                ->add('name_short')
                ->add('ur_address')
                ->add('rukovoditel', RukovoditelType::class)
                ->add('organizationMCH' , 'entity', array(
                    'class'    => 'AppBundle:OrganizationMCH',
                    'query_builder' => function (OrganizationMchRepository $er) {
                        return $er->createQueryBuilder('u')
                                    ->leftJoin('u.organization', 'org', 'WITH')
                                    ->where($er->createQueryBuilder('u')->expr()->isNull('org.organizationMCH'));
                        }))
                ->add('objects', 'entity', array(
                    'class'    => 'AppBundle:Objects',
                    'property' => 'name',
                    'expanded' => true,
                    'multiple' => true, )); 
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Organization',
        ));
    }
}
