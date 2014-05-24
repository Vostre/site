<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Vostre\BlogBundle\Entity;

/**
 * Description of Comentario
 *
 * @author Almir
 */

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Comentario
 *
 * @ORM\Entity(repositoryClass="Vostre\BlogBundle\Entity\Repository\ComentarioRepository")
 * @ORM\Table(name="comentario")
 * @ORM\HasLifecycleCallbacks()
 */
class Comentario {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Post",  inversedBy="comentarios")
     * @ORM\JoinColumn(name="id_post", referencedColumnName="id")
     */
    private $post;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $autor;
    
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $titulo;
    
    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank()
     */
    private $texto;
    
    /**
     * @ORM\Column(type="string")
     * @Assert\Email(
     *     message = "O email '{{ value }}' não é válido.",
     *     checkMX = true
     * )
     */
    private $email;
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $dataCriacao;
    
    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dataAutorizacao;
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $autorizado;
    
    
    
    public function __construct()
    {
        $this->setDataCriacao(new \DateTime());

        
        $this->setAutorizado(false);
    }

    /**
     * @ORM\preUpdate
     */
    public function setUpdatedValue()
    {
       $this->setDataAutorizacao(new \DateTime());
    }
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set autor
     *
     * @param string $autor
     * @return Comentario
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;
    
        return $this;
    }

    /**
     * Get autor
     *
     * @return string 
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Comentario
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    
        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set texto
     *
     * @param string $texto
     * @return Comentario
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;
    
        return $this;
    }

    /**
     * Get texto
     *
     * @return string 
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     * @return Comentario
     */
    public function setDataCriacao($dataCriacao)
    {
        $this->dataCriacao = $dataCriacao;
    
        return $this;
    }

    /**
     * Get dataCriacao
     *
     * @return \DateTime 
     */
    public function getDataCriacao()
    {
        return $this->dataCriacao;
    }

    /**
     * Set dataAutorizacao
     *
     * @param \DateTime $dataAutorizacao
     * @return Comentario
     */
    public function setDataAutorizacao($dataAutorizacao)
    {
        $this->dataAutorizacao = $dataAutorizacao;
    
        return $this;
    }

    /**
     * Get dataAutorizacao
     *
     * @return \DateTime 
     */
    public function getDataAutorizacao()
    {
        return $this->dataAutorizacao;
    }

    /**
     * Set autorizado
     *
     * @param boolean $autorizado
     * @return Comentario
     */
    public function setAutorizado($autorizado)
    {
        $this->autorizado = $autorizado;
    
        return $this;
    }

    /**
     * Get autorizado
     *
     * @return boolean 
     */
    public function getAutorizado()
    {
        return $this->autorizado;
    }

    /**
     * Set post
     *
     * @param \Vostre\BlogBundle\Entity\Post $post
     * @return Comentario
     */
    public function setPost(\Vostre\BlogBundle\Entity\Post $post = null)
    {
        $this->post = $post;
    
        return $this;
    }

    /**
     * Get post
     *
     * @return \Vostre\BlogBundle\Entity\Post 
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Comentario
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
}