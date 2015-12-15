<?php

namespace uni\bundle\marcaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class comentariosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tituloCom')
            ->add('desCom')
            ->add('fechaCom')
            ->add('nick')
            ->add('noticias')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'uni\bundle\marcaBundle\Entity\comentarios'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uni_bundle_marcabundle_comentarios';
    }
}
