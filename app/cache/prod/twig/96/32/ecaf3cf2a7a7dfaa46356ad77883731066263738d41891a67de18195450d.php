<?php

/* VostreSiteBundle::layout.html.twig */
class __TwigTemplate_9632ecaf3cf2a7a7dfaa46356ad77883731066263738d41891a67de18195450d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'conteudo' => array($this, 'block_conteudo'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div id=\"caixa\">
        <div id=\"caixa-logo-interna\">
            <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("vostre_site_index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("imagens/logo-preta-" . twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "locale"), 0, 2)) . ".png")), "html", null, true);
        echo "\" /></a>
        </div>
        <ul id=\"lista-bandeiras-interna\">
            <li>
                <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "attributes"), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "attributes"), "get", array(0 => "_route_params"), "method"), array("_locale" => "pt"))), "html", null, true);
        echo "\">
                    <img title=\"Portugu&ecirc;s\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/bra.png"), "html", null, true);
        echo "\" />
                </a>
            </li>
            <li>
                <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "attributes"), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "attributes"), "get", array(0 => "_route_params"), "method"), array("_locale" => "en"))), "html", null, true);
        echo "\">
                    <img title=\"English\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/usa.png"), "html", null, true);
        echo "\" />
                </a>
            </li>
        </ul>
";
        // line 20
        echo "        <div id=\"caixa-menu-interna\">
            <div class=\"box-menu-interna\">
                <div class=\"conteudo-menu-interna\">
                    <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("vostre_site_servicos");
        echo "\">
                        <img class=\"icones-menu-interna\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/icone-servicos-vermelho.png"), "html", null, true);
        echo "\" />
                        <span class=\"titulos-menu-interna\">";
        // line 25
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.servicos", array(), "messages");
        echo "</span>
                    </a>
                </div>
            </div>
            <div class=\"box-menu-interna\">
                <div class=\"conteudo-menu-interna\">
                    <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("vostre_site_portfolio");
        echo "\">
                        <img class=\"icones-menu-interna\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/icone-portfolio-vermelho.png"), "html", null, true);
        echo "\" />
                        <span class=\"titulos-menu-interna\">";
        // line 33
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.portfolio", array(), "messages");
        echo "</span>
                    </a>
                </div>
            </div>
            <div class=\"box-menu-interna\">
                <div class=\"conteudo-menu-interna\">
                    <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("vostre_site_contato");
        echo "\">
                        <img class=\"icones-menu-interna\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/icone-contato-vermelho.png"), "html", null, true);
        echo "\" />
                        <span class=\"titulos-menu-interna\">";
        // line 41
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.contato", array(), "messages");
        echo "</span>
                    </a>
                </div>
            </div>
            <div class=\"box-menu-interna\">
                <div class=\"conteudo-menu-interna\">
                    <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("vostre_site_sobre");
        echo "\">
                        <img class=\"icones-menu-interna\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/icone-sobre-vermelho.png"), "html", null, true);
        echo "\" />
                        <span class=\"titulos-menu-interna\">";
        // line 49
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.sobre", array(), "messages");
        echo "</span>
                    </a>
                </div>
            </div>
        </div>
        ";
        // line 54
        $this->displayBlock('conteudo', $context, $blocks);
        // line 59
        echo "    </div>
";
    }

    // line 54
    public function block_conteudo($context, array $blocks = array())
    {
        // line 55
        echo "            <div id=\"conteudo-interno\">
                <h1 class=\"titulo-interno\">";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["pagina"]) ? $context["pagina"] : null), "html", null, true);
        echo "</h1>
            </div>        
        ";
    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        // line 62
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "VostreSiteBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 62,  160 => 61,  153 => 56,  150 => 55,  147 => 54,  142 => 59,  140 => 54,  132 => 49,  128 => 48,  124 => 47,  115 => 41,  111 => 40,  107 => 39,  98 => 33,  94 => 32,  90 => 31,  81 => 25,  77 => 24,  73 => 23,  68 => 20,  37 => 5,  33 => 3,  30 => 2,  126 => 57,  122 => 56,  113 => 50,  109 => 49,  100 => 43,  96 => 42,  87 => 36,  83 => 35,  74 => 29,  70 => 28,  61 => 15,  57 => 14,  50 => 10,  46 => 9,  41 => 13,  38 => 5,  35 => 4,  29 => 3,);
    }
}
