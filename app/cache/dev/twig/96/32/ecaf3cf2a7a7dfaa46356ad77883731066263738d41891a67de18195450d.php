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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("imagens/logo-preta-" . twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale"), 0, 2)) . ".png")), "html", null, true);
        echo "\" /></a>
        </div>
        <ul id=\"lista-bandeiras-interna\">
            <li>
                <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route_params"), "method"), array("_locale" => "pt"))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route_params"), "method"), array("_locale" => "en"))), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["pagina"]) ? $context["pagina"] : $this->getContext($context, "pagina")), "html", null, true);
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
        return array (  160 => 61,  153 => 56,  150 => 55,  124 => 47,  90 => 31,  81 => 25,  77 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 54,  132 => 49,  128 => 48,  107 => 39,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 32,  89 => 20,  85 => 25,  75 => 17,  68 => 20,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 9,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 41,  111 => 40,  108 => 36,  101 => 32,  98 => 33,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 54,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 23,  64 => 17,  60 => 6,  57 => 14,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 3,  30 => 2,);
    }
}
