<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // pt__RG__vostre_site_servicos
        if ($pathinfo === '/servicos') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pt__RG__vostre_site_servicos;
            }

            return array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::servicosAction',  '_locale' => 'pt',  '_route' => 'pt__RG__vostre_site_servicos',);
        }
        not_pt__RG__vostre_site_servicos:

        // en__RG__vostre_site_servicos
        if ($pathinfo === '/en/servicos') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__vostre_site_servicos;
            }

            return array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::servicosAction',  '_locale' => 'en',  '_route' => 'en__RG__vostre_site_servicos',);
        }
        not_en__RG__vostre_site_servicos:

        // pt__RG__vostre_site_portfolio
        if ($pathinfo === '/portfolio') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pt__RG__vostre_site_portfolio;
            }

            return array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::portfolioAction',  '_locale' => 'pt',  '_route' => 'pt__RG__vostre_site_portfolio',);
        }
        not_pt__RG__vostre_site_portfolio:

        // en__RG__vostre_site_portfolio
        if ($pathinfo === '/en/portfolio') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__vostre_site_portfolio;
            }

            return array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::portfolioAction',  '_locale' => 'en',  '_route' => 'en__RG__vostre_site_portfolio',);
        }
        not_en__RG__vostre_site_portfolio:

        // pt__RG__vostre_site_portfolio_detalhe
        if (0 === strpos($pathinfo, '/portfolio') && preg_match('#^/portfolio(?:/(?P<projeto>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pt__RG__vostre_site_portfolio_detalhe;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt__RG__vostre_site_portfolio_detalhe')), array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PortfolioController::detalheAction',  'projeto' => '',  '_locale' => 'pt',));
        }
        not_pt__RG__vostre_site_portfolio_detalhe:

        // en__RG__vostre_site_portfolio_detalhe
        if (0 === strpos($pathinfo, '/en/portfolio') && preg_match('#^/en/portfolio(?:/(?P<projeto>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__vostre_site_portfolio_detalhe;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__vostre_site_portfolio_detalhe')), array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PortfolioController::detalheAction',  'projeto' => '',  '_locale' => 'en',));
        }
        not_en__RG__vostre_site_portfolio_detalhe:

        // pt__RG__vostre_site_contato
        if ($pathinfo === '/contato') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_pt__RG__vostre_site_contato;
            }

            return array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::contatoAction',  '_locale' => 'pt',  '_route' => 'pt__RG__vostre_site_contato',);
        }
        not_pt__RG__vostre_site_contato:

        // en__RG__vostre_site_contato
        if ($pathinfo === '/en/contato') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__vostre_site_contato;
            }

            return array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::contatoAction',  '_locale' => 'en',  '_route' => 'en__RG__vostre_site_contato',);
        }
        not_en__RG__vostre_site_contato:

        // pt__RG__vostre_site_sobre
        if ($pathinfo === '/sobre') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pt__RG__vostre_site_sobre;
            }

            return array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::sobreAction',  '_locale' => 'pt',  '_route' => 'pt__RG__vostre_site_sobre',);
        }
        not_pt__RG__vostre_site_sobre:

        // en__RG__vostre_site_sobre
        if ($pathinfo === '/en/sobre') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__vostre_site_sobre;
            }

            return array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::sobreAction',  '_locale' => 'en',  '_route' => 'en__RG__vostre_site_sobre',);
        }
        not_en__RG__vostre_site_sobre:

        // pt__RG__vostre_site_index
        if (preg_match('#^/(?P<_locale>[^/]++)?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pt__RG__vostre_site_index;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt__RG__vostre_site_index')), array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::indexAction',  '_locale' => 'pt',));
        }
        not_pt__RG__vostre_site_index:

        // en__RG__vostre_site_index
        if (0 === strpos($pathinfo, '/en') && preg_match('#^/en(?:/(?P<_locale>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__vostre_site_index;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__vostre_site_index')), array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::indexAction',  '_locale' => 'en',));
        }
        not_en__RG__vostre_site_index:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
