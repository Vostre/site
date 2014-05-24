<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Vostre\SiteBundle\Entity;

use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Mapping\ClassMetadata;

/**
 * Description of Contato
 *
 * @author Almir
 */
class Contato {
    
    protected $id;
    protected $nome;
    protected $email;
    protected $titulo;
    protected $mensagem;
    
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getMensagem() {
        return $this->mensagem;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }
    
    public static function loadValidatorMetadata(ClassMetadata $metadata) {
        $metadata->addPropertyConstraint('nome', new NotBlank());
        $metadata->addPropertyConstraint('email', new Email(array('checkMX' => true, 'checkHost' => true)));
        $metadata->addPropertyConstraint('email', new NotBlank());
        $metadata->addPropertyConstraint('titulo', new NotBlank());
        $metadata->addPropertyConstraint('mensagem', new NotBlank());
    }
    
}
