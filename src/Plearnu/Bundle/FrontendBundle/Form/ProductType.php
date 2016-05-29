<?php

namespace Plearnu\Bundle\FrontendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('productId')
            ->add('dateCreated')
            ->add('dateLastModified')
            ->add('name')
            ->add('description')
            ->add('shortDescription')
            ->add('clickCount')
            ->add('keywords')
            ->add('status')
            ->add('slug')
            ->add('isCod')
            ->add('isFreeShipping')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Plearnu\Bundle\FrontendBundle\Entity\Product'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'plearnu_bundle_frontendbundle_product';
    }
}
