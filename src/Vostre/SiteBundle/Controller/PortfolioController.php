<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Vostre\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of PortfolioController
 *
 * @author Almir
 */
class PortfolioController extends Controller {
    
    public function detalheAction() {
        $locale = $this->getRequest()->getLocale();
        return $this->render('VostreSiteBundle:Portfolio:detalhe.html.twig', array(
            'locale' => $locale
        ));
    }
    
}
