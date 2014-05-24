<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'pt__RG__vostre_site_servicos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::servicosAction',    '_locale' => 'pt',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/servicos',    ),  ),  4 =>   array (  ),),
        'en__RG__vostre_site_servicos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::servicosAction',    '_locale' => 'en',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/en/servicos',    ),  ),  4 =>   array (  ),),
        'pt__RG__vostre_site_portfolio' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::portfolioAction',    '_locale' => 'pt',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/portfolio',    ),  ),  4 =>   array (  ),),
        'en__RG__vostre_site_portfolio' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::portfolioAction',    '_locale' => 'en',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/en/portfolio',    ),  ),  4 =>   array (  ),),
        'pt__RG__vostre_site_portfolio_detalhe' => array (  0 =>   array (    0 => 'projeto',  ),  1 =>   array (    '_controller' => 'Vostre\\SiteBundle\\Controller\\PortfolioController::detalheAction',    'projeto' => '',    '_locale' => 'pt',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'projeto',    ),    1 =>     array (      0 => 'text',      1 => '/portfolio',    ),  ),  4 =>   array (  ),),
        'en__RG__vostre_site_portfolio_detalhe' => array (  0 =>   array (    0 => 'projeto',  ),  1 =>   array (    '_controller' => 'Vostre\\SiteBundle\\Controller\\PortfolioController::detalheAction',    'projeto' => '',    '_locale' => 'en',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'projeto',    ),    1 =>     array (      0 => 'text',      1 => '/en/portfolio',    ),  ),  4 =>   array (  ),),
        'pt__RG__vostre_site_contato' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::contatoAction',    '_locale' => 'pt',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contato',    ),  ),  4 =>   array (  ),),
        'en__RG__vostre_site_contato' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::contatoAction',    '_locale' => 'en',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/en/contato',    ),  ),  4 =>   array (  ),),
        'pt__RG__vostre_site_sobre' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::sobreAction',    '_locale' => 'pt',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sobre',    ),  ),  4 =>   array (  ),),
        'en__RG__vostre_site_sobre' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::sobreAction',    '_locale' => 'en',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/en/sobre',    ),  ),  4 =>   array (  ),),
        'pt__RG__vostre_site_index' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::indexAction',    '_locale' => 'pt',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),),
        'en__RG__vostre_site_index' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::indexAction',    '_locale' => 'en',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),    1 =>     array (      0 => 'text',      1 => '/en',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
