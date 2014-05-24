<?php

namespace Vostre\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\User\UserInterface;
use Vostre\BlogBundle\Entity\Comentario;
use Vostre\BlogBundle\Form\ComentarioType;

class PageController extends Controller
{
    public function indexAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $posts = $em->getRepository('VostreBlogBundle:Post')
                ->listarTodos(null, 0);
        
        $postsMes = $em->getRepository('VostreBlogBundle:Post')
                ->listarTodosPorMes(null);
        
        return $this->render('VostreBlogBundle:Page:index.html.twig', 
                array(
                    'posts' => $posts,
                    'postsMes' => $postsMes
                ));
    }
    
    public function postAction($slug)
    {
        
        $listaTags = Array();
        $comentario = new Comentario();
        
        $form = $this->createForm(new ComentarioType(), $comentario);
        
        $em = $this->getDoctrine()->getManager();
        
        $post = $em->getRepository('VostreBlogBundle:Post')
                ->findOneBy(array('slug' => $slug));
        
        $postsMes = $em->getRepository('VostreBlogBundle:Post')
                ->listarTodosPorMes(null);
        
        $tags = $post->getTags();
        
        foreach ($tags as $umaTag) {
            array_push($listaTags, $umaTag->getTag());
        }
        
        $postsRelacionados = $em->getRepository('VostreBlogBundle:Post')
                ->listarPostsRelacionados($listaTags, $post, 2);
        
        return $this->render('VostreBlogBundle:Page:post.html.twig', 
                array(
                    'post' => $post,
                    'postsMes' => $postsMes,
                    'postsRelacionados' => $postsRelacionados,
                    'form' => $form->createView()
                ));
    }
    
    public function buscaAction($tag)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $posts = $em->getRepository('VostreBlogBundle:Post')
                ->listarTodosPorTag($tag);
        
        $postsMes = $em->getRepository('VostreBlogBundle:Post')
                ->listarTodosPorMes(null);
        
        return $this->render('VostreBlogBundle:Page:index.html.twig', 
                array(
                    'posts' => $posts,
                    'postsMes' => $postsMes
                ));
    }
    
    public function adminAction()
    {   
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        
        return $this->render('VostreBlogBundle:Page:admin.html.twig', 
                array(
                    'user' => $user
                ));
    }
    
}
