<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Vostre\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\User\UserInterface;
use Vostre\BlogBundle\Entity\Post;
use Vostre\BlogBundle\Entity\StringUtils;
use Vostre\BlogBundle\Entity\Tag;
use Vostre\BlogBundle\Form\PostType;

/**
 * Description of PostController
 *
 * @author Almir
 */
class PostController extends Controller {
    
    public function cadastrarAction($id_post){
        
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        
        $post = new Post();
        $request = $this->getRequest();
        
        $em = $this->getDoctrine()->getManager();
        
        //verifica se ja existe registro
        $post = $em->find('VostreBlogBundle:Post', $id_post);
        
        //se nao existir, cria novo objeto
        if(is_null($post)){
            $post = new Post();
        }
        
        $form = $this->createForm(new PostType(), $post);
        $form->bind($request);
        
        if($form->isValid()){
            
            //cadastra ou edita objeto
            $keyword = StringUtils::removeAcentos($post->getTitulo(), '-');
            $post->setSlug($keyword);
            
            $post->setAutor($user);
            
            $listaTags = $post->getListaTags();
            
            $listaTags = explode(';', $listaTags);
            
                $em->persist($post);
            
                $em->flush();
                
                $em->getRepository('VostreBlogBundle:Tag')
                ->deletarTodasPorPost($post);

                foreach ($listaTags as $tag) {

                    $umaTag = new Tag();

                    $umaTag->setPost($post);
                    $umaTag->setTag($tag);

                    $em->persist($umaTag);
                }   

                $em->flush();
                //$em->getConnection()->commit();
            
            return $this->redirect($this->generateUrl('vostre_blog_admin_post_index'));

        }
        
        return $this->render('VostreBlogBundle:Post:form.html.twig', 
                array(
                    'form' => $form->createView(),
                    'post' => $post
                ));
        
    }
    
    public function formAction($id_post){
        $request = $this->getRequest();
        
        $em = $this->getDoctrine()->getManager();
        $post = $em->find('VostreBlogBundle:Post', $id_post);
        
        if(is_null($post)){
            $post = new Post();
        } else{
            $tags = $post->getTags();
        
            $listaTags = array();

            foreach ($tags as $umaTag) {
                array_push($listaTags, $umaTag->getTag());
            }

            $post->setListaTags(implode(';', $listaTags));
        }
        
        $form = $this->createForm(new PostType(), $post);
        
//        $form->bind($request);
        
        return $this->render('VostreBlogBundle:Post:form.html.twig',
                array(
                    'form' => $form->createView(),
                    'post' => $post
                ));
    }
    
    public function inativarAction($id_post){
        $request = $this->getRequest();
        
        $em = $this->getDoctrine()->getManager();
        $post = $em->find('VostreBlogBundle:Post', $id_post);
        
        $em->getRepository('VostreBlogBundle:Post')->inativarPost($post);
        
//        $form->bind($request);
        
        return $this->redirect($this->generateUrl('vostre_blog_admin_post_index'));
    }
    
    public function reativarAction($id_post){
        $request = $this->getRequest();
        
        $em = $this->getDoctrine()->getManager();
        $post = $em->find('VostreBlogBundle:Post', $id_post);
        
        $em->getRepository('VostreBlogBundle:Post')->reativarPost($post);
        
//        $form->bind($request);
        
        return $this->redirect($this->generateUrl('vostre_blog_admin_post_index'));
    }
    
    public function indexAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $posts = $em->getRepository('VostreBlogBundle:Post')
                ->listarTodos(null, 1);
        
        return $this->render('VostreBlogBundle:Post:index.html.twig', 
                array(
                    'posts' => $posts
                ));
    }
    
}
