<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PageController
 *
 * @author Almir
 */

namespace Vostre\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Vostre\SiteBundle\Entity\Contato;
use Vostre\SiteBundle\Form\ContatoType;

class PageController extends Controller {
    
    public function indexAction() {
        $locale = $this->getRequest()->getLocale();
        return $this->render('VostreSiteBundle:Page:index.html.twig', array(
            'locale' => $locale
        ));
    }
    
    public function servicosAction() {
        $pagina = "Serviços";
        return $this->render('VostreSiteBundle:Page:servicos.html.twig', array(
            'pagina' => $pagina
        ));
    }
    
    public function portfolioAction() {
        $pagina = "Portfólio";
        return $this->render('VostreSiteBundle:Page:portfolio.html.twig', array(
            'pagina' => $pagina
        ));
    }
    
    public function contatoAction() {
        
        $contato = new Contato();
        $form = $this->createForm(new ContatoType(), $contato);
        
        $request = $this->getRequest();
        
        if($request->getMethod() == 'POST'){
            $form->bind($request);
            
            if($form->isValid()){
                $email = \Swift_Message::newInstance()
                        ->setSubject("Contato Vostrè: ".$form->get('titulo')->getData())
                        ->setFrom($form->get('email')->getData())
                        ->setTo('almirjunior_bp@hotmail.com')
                        ->setBody($this->renderView('VostreSiteBundle:Page:email.html.twig', 
                                array('contato' => $contato)))
                        ->setContentType("text/html");
                        //->setBody($form->get('mensagem')->getData());
//                $this->get('mailer')->send($email);
                
                $this->get('session')
                        ->getFlashBag()->add('resposta-contato', 'Mensagem enviada com sucesso! Obrigado!');
                
                return $this->redirect($this->generateUrl('vostre_site_contato'));
                
            }
            
        }
        
        return $this->render('VostreSiteBundle:Page:contato.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
    public function sobreAction() {
        $pagina = "Sobre";
        return $this->render('VostreSiteBundle:Page:sobre.html.twig', array(
            'pagina' => $pagina
        ));
    }
    
}
