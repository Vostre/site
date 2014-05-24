<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Vostre\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;

/**
 * Description of ContatoType
 *
 * @author Almir
 */
class ContatoType extends AbstractType {
    
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options ){
        $builder->add('nome', null, 
                        array(
                            'label' => 'contato.form.nome'
                        ))
                ->add('email', null, 
                        array(
                            'label' => 'contato.form.email'
                        ))
                ->add('titulo', null, 
                        array(
                            'label' => 'contato.form.titulo'
                        ))
                ->add('mensagem', 'textarea', 
                        array(
                            'label' => 'contato.form.mensagem',
                            'attr' => array('rows'  => '10')
                        ))
                ;
    }
    
    public function getName() {
        return 'contato';
    }

//put your code here
}
