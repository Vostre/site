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
<script>
  ";
        // line 17
        echo "
</script>
";
        // line 20
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 105
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 122
        echo "    </body>
</html>";
    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.titulo.index", array(), "messages");
    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 22
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/estilos_2.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen and (max-width: 640px)\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/mobile.css"), "html", null, true);
        echo "\" />
            <!--[if lt IE 9]>
                <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
            <![endif]-->
        ";
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        // line 32
        echo "            <div id=\"caixa\">
                <ul id=\"lista-bandeiras\">
                    <li>
                        <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "attributes"), "get", array(0 => "_route"), "method"), array("_locale" => "pt"));
        echo "\">
                            <img title=\"Portugu&ecirc;s\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/bra.png"), "html", null, true);
        echo "\" />
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "attributes"), "get", array(0 => "_route"), "method"), array("_locale" => "en"));
        echo "\">
                            <img title=\"English\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/usa.png"), "html", null, true);
        echo "\" />
                        </a>
                    </li>
                </ul>
                <div id=\"caixa-logo\">
                    <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("imagens/logo-preta-" . twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "locale"), 0, 2)) . ".png")), "html", null, true);
        echo "\" />
                </div>
                <span style=\"clear: both\"></span>
                <div id=\"caixa-menu\">
                    <div class=\"box-menu box-menu-esquerda\">
                        <div class=\"conteudo-menu\">
";
        // line 53
        echo "                                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("vostre_site_servicos");
        echo "\">
                                    <img class=\"icones-menu\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/icone-servicos-vermelho.png"), "html", null, true);
        echo "\" />
                                    <br />
                                    <span class=\"titulos-menu\">";
        // line 56
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.servicos", array(), "messages");
        echo "</span>
                                </a>
";
        // line 59
        echo "                            
                        </div>
                    </div>
                    <div class=\"box-menu\">
                        <div class=\"conteudo-menu\">
";
        // line 65
        echo "                                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("vostre_site_portfolio");
        echo "\">
                                    <img class=\"icones-menu\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/icone-portfolio-vermelho.png"), "html", null, true);
        echo "\" />
                                    <br />
                                    <span class=\"titulos-menu\">";
        // line 68
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.portfolio", array(), "messages");
        echo "</span>
                                </a>                                
";
        // line 71
        echo "                        </div>
                    </div>
                    <div class=\"box-menu box-menu-esquerda\">
                        <div class=\"conteudo-menu\">
";
        // line 76
        echo "                                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("vostre_site_contato");
        echo "\">
                                    <img class=\"icones-menu\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/icone-contato-vermelho.png"), "html", null, true);
        echo "\" />
                                    <br />
                                    <span class=\"titulos-menu\">";
        // line 79
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.contato", array(), "messages");
        echo "</span>
                                </a>
";
        // line 82
        echo "                        </div>
                    </div>
                    <div class=\"box-menu\">
                        <div class=\"conteudo-menu\">
";
        // line 87
        echo "                                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("vostre_site_sobre");
        echo "\">
                                    <img class=\"icones-menu\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/icone-sobre-vermelho.png"), "html", null, true);
        echo "\" />
                                    <br />
                                    <span class=\"titulos-menu\">";
        // line 90
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.sobre", array(), "messages");
        echo "</span>
                                </a>
";
        // line 93
        echo "                        </div>
                    </div>
                    <div id=\"rodape\">
                        <span><a class=\"links\" target=\"_blank\" href=\"http://www.facebook.com/vostre\">Facebook</a> | 
                            Vostr&egrave; &copy; 2014 - ";
        // line 97
        echo $this->env->getExtension('translator')->getTranslator()->trans("rodape.legal", array(), "messages");
        // line 98
        echo "                            | <a href=\"https://plus.google.com/113614683632750156966\" rel=\"publisher\" 
                                 class=\"links\" target=\"_blank\">Google+</a>
                        </span>
                    </div>
                </div>
            </div>
        ";
    }

    // line 105
    public function block_javascripts($context, array $blocks = array())
    {
        // line 106
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flip.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\">
                \$(document).ready(function(){
                    ";
        // line 119
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
        return array (  240 => 119,  234 => 108,  230 => 107,  225 => 106,  222 => 105,  212 => 98,  210 => 97,  204 => 93,  199 => 90,  194 => 88,  189 => 87,  183 => 82,  178 => 79,  173 => 77,  168 => 76,  162 => 71,  157 => 68,  152 => 66,  147 => 65,  140 => 59,  135 => 56,  130 => 54,  125 => 53,  116 => 46,  108 => 41,  104 => 40,  97 => 36,  93 => 35,  88 => 32,  85 => 31,  76 => 23,  71 => 22,  68 => 21,  62 => 20,  57 => 122,  54 => 105,  52 => 31,  45 => 28,  43 => 21,  38 => 20,  34 => 17,  23 => 1,);
    }
}
