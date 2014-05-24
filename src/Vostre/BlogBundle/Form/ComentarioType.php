<?php

namespace Vostre\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ComentarioType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('autor', null, 
                    array(
                        'label' => 'Nome:',
                        'max_length' => 50
                        )
                    )
            ->add('titulo', null, 
                    array(
                        'label' => 'Título:',
                        'max_length' => 150
                        ))
            ->add('email', null, 
                    array(
                        'label' => 'Email (Não será publicado):'
                        ))
            ->add('texto', null, 
                    array(
                        'label' => 'Comentário (Max. 200 caracteres):',
                        'attr' => array('rows' => 6),
                        'max_length' => 200
                        ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Vostre\BlogBundle\Entity\Comentario'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'vostre_blogbundle_comentario';
    }
}
