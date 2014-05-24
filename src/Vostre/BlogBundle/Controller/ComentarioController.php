<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Vostre\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Vostre\BlogBundle\Entity\Comentario;
use Vostre\BlogBundle\Form\ComentarioType;

/**
 * Description of ComentarioController
 *
 * @author Almir
 */
class ComentarioController extends Controller {
    
    public function cadastrarAction($id_post){
        $comentario = new Comentario();
        $request = $this->getRequest();
        
        $em = $this->getDoctrine()->getManager();
        
        $post = $em->find('VostreBlogBundle:Post', $id_post);
        
        //verifica se ja existe registro
//        $comentario = $em->find('VostreBlogBundle:Comentario', $id_comentario);
        
        //se nao existir, cria novo objeto
        if(is_null($comentario)){
            $comentario = new Comentario();
        }
        
        $form = $this->createForm(new ComentarioType(), $comentario);
        $form->bind($request);
        
        if($form->isValid()){
            
            //cadastra ou edita objeto
            
            $comentario->setPost($post);
            
            $em->persist($comentario);
            $em->flush();
            
            //echo '#comentario-'.$comentario->getId();
            
            return $this->redirect($this->generateUrl('vostre_blog_post', 
                    array('slug' => $post->getSlug().'#comentario-'.$comentario->getId())));

        } else{
            $listaTags = Array();

            $postsMes = $em->getRepository('VostreBlogBundle:Post')
                    ->listarTodosPorMes(null);

            $tags = $post->getTags();

            foreach ($tags as $umaTag) {
                array_push($listaTags, $umaTag->getTag());
            }

            $postsRelacionados = $em->getRepository('VostreBlogBundle:Post')
                    ->listarPostsRelacionados($listaTags, $post, 2);
            
            //echo '#comentario-'.$comentario->getId();
            
            //return new Response();
            
            return $this->render('VostreBlogBundle:Page:post.html.twig', 
                array(
                    'post' => $post,
                    'postsMes' => $postsMes,
                    'postsRelacionados' => $postsRelacionados,
                    'form' => $form->createView()
                ));
        }
        
    }
    
    public function formAction(){
        $request = $this->getRequest();
        
        $em = $this->getDoctrine()->getManager();

        $comentario = new Comentario();
        
        $form = $this->createForm(new ComentarioType(), $comentario);
        
//        $form->bind($request);
        
        return $this->render('VostreBlogBundle:Comentario:form.html.twig',
                array(
                    'form' => $form->createView()
                ));
    }
    
}
