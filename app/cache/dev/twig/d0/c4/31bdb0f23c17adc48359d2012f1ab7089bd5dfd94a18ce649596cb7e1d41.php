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
        ";
        // line 10
        echo "<script>
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
        return array (  255 => 129,  249 => 118,  245 => 117,  240 => 116,  237 => 115,  227 => 108,  225 => 107,  219 => 103,  212 => 99,  206 => 94,  201 => 91,  196 => 89,  191 => 88,  185 => 83,  180 => 80,  175 => 78,  170 => 77,  164 => 72,  159 => 69,  154 => 67,  149 => 66,  142 => 60,  137 => 57,  132 => 55,  127 => 54,  118 => 47,  110 => 42,  106 => 41,  99 => 37,  95 => 36,  90 => 33,  87 => 32,  78 => 24,  73 => 23,  70 => 22,  64 => 21,  59 => 132,  56 => 115,  54 => 32,  47 => 29,  45 => 22,  40 => 21,  36 => 18,  33 => 10,  23 => 1,);
    }
}
