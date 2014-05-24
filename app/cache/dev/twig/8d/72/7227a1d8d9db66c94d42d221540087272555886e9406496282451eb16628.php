<?php

/* VostreBlogBundle:Post:index.html.twig */
class __TwigTemplate_8d727227a1d8d9db66c94d42d221540087272555886e9406496282451eb16628 extends Twig_Template
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
        // line 11
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 157
        echo "    </body>
</html>";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("blog.titulo.index", array(), "messages");
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/estilos_blog.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen and (max-width: 690px)\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/mobile_blog.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.custom.css"), "html", null, true);
        echo "\" />
            <!--[if lt IE 9]>
                <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
            <![endif]-->
        ";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "            <table class=\"tabelas\">
                <thead>
                    <tr>
                        <td>T&iacute;tulo</td>
                        <td>Data</td>
                        <td>Status</td>
                        <td colspan=\"2\">A&ccedil;&otilde;es</td>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 35
            echo "                    <tr>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "titulo"), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "dataCriacao"), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ativo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ativo"), "Ativo")) : ("Ativo")), "html", null, true);
            echo "</td>
                        <td><a onclick=\"return false;\" class=\"post-links-editar\" id=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id"), "html", null, true);
            echo "}\" 
                               href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vostre_blog_admin_post_form", array("id_post" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id"))), "html", null, true);
            // line 41
            echo "\">Editar</a></td>
                        ";
            // line 42
            if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "ativo") == 1)) {
                // line 43
                echo "                            <td><a onclick=\"return false;\" class=\"post-links-reativar\" 
                               href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vostre_blog_admin_post_reativar", array("id_post" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id"))), "html", null, true);
                // line 45
                echo "\">Reativar</a></td>
                        ";
            } else {
                // line 47
                echo "                            <td><a onclick=\"return false;\" class=\"post-links-excluir\" 
                               href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vostre_blog_admin_post_inativar", array("id_post" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id"))), "html", null, true);
                // line 49
                echo "\">Excluir</a></td>
                        ";
            }
            // line 51
            echo "                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                </tbody>
            </table>
        <div id=\"caixa-form\"></div>
        <input type=\"button\" value=\"Nova Postagem\" id=\"novo-post\" />
        ";
    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        // line 59
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.form.js"), "html", null, true);
        echo "\"></script>
";
        // line 63
        echo "            <script type=\"text/javascript\">
                \$(document).ready(function(){
                    
                    \$cx = \$(\"#caixa-form\").dialog({
                        autoOpen: false,
                        width: '80%',
                        heigth: 'auto',
                        title: 'Postagem',
                        resizable: false,
                        draggable: true,
                        modal: true,
                        show: 'blind',
                        hide: 'blind',
                        closeText: 'Fechar',
                        position: 'top'
                    });
                    
                    \$.each(\$('.post-links-editar'), function(){
                        \$(this).click(function(e){
                            
                            \$path = \$(this).attr('href');
                            
                            \$.ajax({
                                type: 'GET',
                                url: \$path,
                                cache: 'false',
                                dataType: 'html',
                                success: function(data){
                                    \$('#caixa-form').html(data);
                                    \$cx.dialog('open');
                                }
                            });
                            e.preventDefault();
                        });
                    });
                    
                    \$.each(\$('.post-links-excluir'), function(){
                        \$(this).click(function(e){
                            
                            \$path = \$(this).attr('href');
                            
                            \$.ajax({
                                type: 'GET',
                                url: \$path,
                                cache: 'false',
                                dataType: 'html',
                                success: function(data){
                                    //\$('#caixa-form').html(\"<p>Excluido com sucesso!</p>\");
                                    history.go();
                                    //\$cx.dialog('open');
                                }
                            });
                            e.preventDefault();
                        });
                    });
                    
                    \$.each(\$('.post-links-reativar'), function(){
                        \$(this).click(function(e){
                            
                            \$path = \$(this).attr('href');
                            
                            \$.ajax({
                                type: 'GET',
                                url: \$path,
                                cache: 'false',
                                dataType: 'html',
                                success: function(data){
                                    //\$('#caixa-form').html(\"<p>Ativado com sucesso!</p>\");
                                    //\$cx.dialog('open');
                                    history.go();
                                }
                            });
                            e.preventDefault();
                        });
                    });
                    
                    \$('#novo-post').click(function(e){
                        \$.ajax({
                            type: 'GET',
                            url: \"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vostre_blog_admin_post_form", array("id_post" => (-1))), "html", null, true);
        // line 143
        echo "\",
                            cache: 'false',
                            dataType: 'html',
                            success: function(data){
                                \$('#caixa-form').html(data);
";
        // line 149
        echo "                            }
                        });
                        \$(\"#caixa-form\").dialog('open');
                        e.preventDefault();
                    });
                });
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "VostreBlogBundle:Post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 143,  259 => 142,  174 => 61,  134 => 45,  114 => 38,  84 => 23,  231 => 79,  195 => 62,  178 => 63,  146 => 45,  330 => 127,  326 => 126,  321 => 125,  318 => 124,  313 => 119,  306 => 118,  292 => 117,  288 => 115,  286 => 114,  280 => 113,  277 => 112,  260 => 111,  234 => 95,  213 => 85,  205 => 82,  200 => 80,  197 => 79,  192 => 78,  181 => 77,  165 => 59,  152 => 54,  129 => 43,  58 => 15,  53 => 13,  34 => 5,  76 => 39,  65 => 25,  126 => 58,  113 => 51,  100 => 44,  255 => 129,  249 => 103,  245 => 117,  237 => 115,  225 => 107,  212 => 99,  206 => 94,  191 => 88,  185 => 83,  180 => 80,  175 => 63,  170 => 60,  137 => 41,  127 => 42,  118 => 39,  110 => 37,  70 => 27,  23 => 1,  160 => 49,  153 => 47,  150 => 55,  124 => 41,  90 => 26,  81 => 27,  77 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 149,  264 => 84,  258 => 81,  252 => 105,  247 => 102,  241 => 99,  229 => 78,  220 => 70,  214 => 69,  177 => 75,  169 => 60,  140 => 42,  132 => 44,  128 => 48,  107 => 39,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 116,  238 => 85,  235 => 74,  230 => 93,  227 => 108,  224 => 75,  221 => 89,  219 => 88,  217 => 73,  208 => 69,  204 => 72,  179 => 69,  159 => 69,  143 => 49,  135 => 53,  119 => 38,  102 => 32,  71 => 14,  67 => 13,  63 => 12,  59 => 132,  38 => 12,  94 => 53,  89 => 31,  85 => 36,  75 => 15,  68 => 20,  56 => 20,  87 => 24,  21 => 2,  26 => 4,  93 => 28,  88 => 6,  78 => 31,  46 => 12,  27 => 5,  44 => 13,  31 => 4,  28 => 3,  201 => 65,  196 => 89,  183 => 57,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 48,  151 => 63,  142 => 43,  138 => 47,  136 => 56,  121 => 45,  117 => 37,  105 => 40,  91 => 34,  62 => 16,  49 => 58,  24 => 1,  25 => 3,  19 => 2,  79 => 27,  72 => 14,  69 => 25,  47 => 23,  40 => 20,  37 => 5,  22 => 3,  246 => 90,  157 => 56,  145 => 52,  139 => 50,  131 => 52,  123 => 40,  120 => 40,  115 => 41,  111 => 36,  108 => 35,  101 => 32,  98 => 33,  96 => 43,  83 => 36,  74 => 30,  66 => 13,  55 => 14,  52 => 157,  50 => 13,  43 => 8,  41 => 22,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 59,  187 => 84,  182 => 66,  176 => 64,  173 => 53,  168 => 72,  164 => 50,  162 => 58,  154 => 53,  149 => 46,  147 => 51,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 40,  116 => 41,  112 => 42,  109 => 37,  106 => 36,  103 => 35,  99 => 34,  95 => 29,  92 => 21,  86 => 28,  82 => 22,  80 => 32,  73 => 23,  64 => 18,  60 => 23,  57 => 11,  54 => 14,  51 => 19,  48 => 25,  45 => 22,  42 => 11,  39 => 7,  36 => 4,  33 => 11,  30 => 5,);
    }
}
