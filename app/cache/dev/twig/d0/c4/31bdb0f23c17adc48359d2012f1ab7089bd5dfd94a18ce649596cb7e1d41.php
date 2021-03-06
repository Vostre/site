<?php

/* ::base.html.twig */
class __TwigTemplate_d0c431bdb0f23c17adc48359d2012f1ab7089bd5dfd94a18ce649596cb7e1d41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"description\" content=\"Vostrè é uma startup brasileira voltada ao desenvolvimento de 
              soluções criativas e eficientes para os problemas do dia a dia.\" />
        <meta name=\"robots\" content=\"index, follow\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/google.js"), "html", null, true);
        echo "\"></script>
<script>
";
        // line 18
        echo "
</script>
";
        // line 21
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 115
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 132
        echo "    </body>
</html>";
    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.titulo.index", array(), "messages");
    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 23
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/estilos_2.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen and (max-width: 690px)\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/mobile.css"), "html", null, true);
        echo "\" />
            <!--[if lt IE 9]>
                <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
            <![endif]-->
        ";
    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        // line 33
        echo "            <div id=\"caixa\">
                <ul id=\"lista-bandeiras\">
                    <li>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method"), array("_locale" => "pt"));
        echo "\">
                            <img title=\"Portugu&ecirc;s\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/bra.png"), "html", null, true);
        echo "\" />
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method"), array("_locale" => "en"));
        echo "\">
                            <img title=\"English\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/usa.png"), "html", null, true);
        echo "\" />
                        </a>
                    </li>
                </ul>
                <div id=\"caixa-logo\">
                    <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("imagens/logo-preta-" . twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale"), 0, 2)) . ".png")), "html", null, true);
        echo "\" />
                </div>
                <span style=\"clear: both\"></span>
                <div id=\"caixa-menu\">
                    <div class=\"box-menu box-menu-esquerda\">
                        <div class=\"conteudo-menu\">
";
        // line 54
        echo "                                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("vostre_site_servicos");
        echo "\">
                                    <img class=\"icones-menu\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/icone-servicos-vermelho.png"), "html", null, true);
        echo "\" />
                                    <br />
                                    <span class=\"titulos-menu\">";
        // line 57
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.servicos", array(), "messages");
        echo "</span>
                                </a>
";
        // line 60
        echo "                            
                        </div>
                    </div>
                    <div class=\"box-menu\">
                        <div class=\"conteudo-menu\">
";
        // line 66
        echo "                                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("vostre_site_portfolio");
        echo "\">
                                    <img class=\"icones-menu\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/icone-portfolio-vermelho.png"), "html", null, true);
        echo "\" />
                                    <br />
                                    <span class=\"titulos-menu\">";
        // line 69
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.portfolio", array(), "messages");
        echo "</span>
                                </a>                                
";
        // line 72
        echo "                        </div>
                    </div>
                    <div class=\"box-menu box-menu-esquerda\">
                        <div class=\"conteudo-menu\">
";
        // line 77
        echo "                                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("vostre_site_contato");
        echo "\">
                                    <img class=\"icones-menu\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/icone-contato-vermelho.png"), "html", null, true);
        echo "\" />
                                    <br />
                                    <span class=\"titulos-menu\">";
        // line 80
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.contato", array(), "messages");
        echo "</span>
                                </a>
";
        // line 83
        echo "                        </div>
                    </div>
                    <div class=\"box-menu\">
                        <div class=\"conteudo-menu\">
";
        // line 88
        echo "                                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("vostre_site_sobre");
        echo "\">
                                    <img class=\"icones-menu\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/icone-sobre-vermelho.png"), "html", null, true);
        echo "\" />
                                    <br />
                                    <span class=\"titulos-menu\">";
        // line 91
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.sobre", array(), "messages");
        echo "</span>
                                </a>
";
        // line 94
        echo "                        </div>
                    </div>
                    <div id=\"menu-blog\">
                        <div class=\"conteudo-menu\">
";
        // line 99
        echo "                                <a href=\"";
        echo twig_escape_filter($this->env, ($this->env->getExtension('routing')->getPath("vostre_site_index") . "blog"), "html", null, true);
        echo "\">
                                    <span class=\"titulos-menu\">Blog</span>
                                </a>
";
        // line 103
        echo "                        </div>
                    </div>
                    <div id=\"rodape\">
                        <span><a class=\"links\" target=\"_blank\" href=\"http://www.facebook.com/vostre\">Facebook</a> | 
                            Vostr&egrave; &copy; 2014 - ";
        // line 107
        echo $this->env->getExtension('translator')->getTranslator()->trans("rodape.legal", array(), "messages");
        // line 108
        echo "                            | <a href=\"https://plus.google.com/113614683632750156966\" rel=\"publisher\" 
                                 class=\"links\" target=\"_blank\">Google+</a>
                        </span>
                    </div>
                </div>
            </div>
        ";
    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        // line 116
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flip.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\">
                \$(document).ready(function(){
                    ";
        // line 129
        echo "                });
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 129,  251 => 118,  242 => 116,  239 => 115,  198 => 89,  172 => 77,  161 => 69,  134 => 55,  129 => 54,  97 => 36,  58 => 115,  23 => 1,  160 => 61,  153 => 56,  150 => 55,  124 => 47,  90 => 31,  81 => 25,  77 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 117,  241 => 77,  229 => 108,  220 => 70,  214 => 99,  177 => 78,  169 => 60,  140 => 54,  132 => 49,  128 => 48,  107 => 39,  61 => 132,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 107,  224 => 71,  221 => 103,  219 => 76,  217 => 75,  208 => 94,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 18,  94 => 32,  89 => 32,  85 => 25,  75 => 23,  68 => 20,  56 => 32,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 9,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 72,  163 => 62,  158 => 67,  156 => 67,  151 => 66,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 29,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 22,  69 => 25,  47 => 22,  40 => 8,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 57,  131 => 52,  123 => 47,  120 => 47,  115 => 41,  111 => 40,  108 => 41,  101 => 37,  98 => 33,  96 => 31,  83 => 25,  74 => 14,  66 => 21,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 91,  199 => 67,  193 => 88,  189 => 71,  187 => 83,  182 => 80,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 54,  144 => 60,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 33,  86 => 28,  82 => 22,  80 => 24,  73 => 23,  64 => 17,  60 => 6,  57 => 14,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 21,  39 => 9,  36 => 5,  33 => 9,  30 => 2,);
    }
}
