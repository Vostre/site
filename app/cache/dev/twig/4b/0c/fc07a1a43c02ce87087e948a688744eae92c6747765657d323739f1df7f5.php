<?php

/* VostreBlogBundle:Page:index.html.twig */
class __TwigTemplate_4b0cfc07a1a43c02ce87087e948a688744eae92c6747765657d323739f1df7f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'conteudo' => array($this, 'block_conteudo'),
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
<meta name=\"google-site-verification\" content=\"VYL5-G6XZzuLRYSGBreBT3IAk5oEKMBVbiHMI20Kcc4\" />
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 123
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 138
        echo "    </body>
</html>";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo "Vostrè | Blog Oficial";
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
            <!--[if lt IE 9]>
                <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
            <![endif]-->
        ";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "            <div id=\"caixa\">
                <div id=\"header\">
                    <div id=\"caixa-logo\">
                        <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("vostre_blog_homepage");
        echo "\">
                            <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("imagens/logo-preta-" . twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale"), 0, 2)) . ".png")), "html", null, true);
        echo "\" />
                        </a>
                    </div>
                    <div id=\"caixa-titulo-header\">
                        <span>Blog Oficial</span>
                    </div>
                    <div id=\"caixa-voltar\">
                        <div id=\"caixa-voltar-conteudo\">
                            <p><a class=\"links\" href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("vostre_site_index");
        echo "\">Voltar para o site</a></p>
                        </div>
                    </div>
                </div>
                <div id=\"caixa-direita\">
                    <div id=\"caixa-direita-titulo\">
                        Postagens
                    </div>
                    ";
        // line 43
        $context["ano"] = "";
        // line 44
        echo "                    ";
        $context["mes"] = "";
        // line 45
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["postsMes"]) ? $context["postsMes"] : $this->getContext($context, "postsMes")));
        foreach ($context['_seq'] as $context["_key"] => $context["postMes"]) {
            // line 46
            echo "                        ";
            if (($this->getAttribute((isset($context["postMes"]) ? $context["postMes"] : $this->getContext($context, "postMes")), "ano") != (isset($context["ano"]) ? $context["ano"] : $this->getContext($context, "ano")))) {
                // line 47
                echo "                            <div class=\"ano-postagem\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["postMes"]) ? $context["postMes"] : $this->getContext($context, "postMes")), "ano"), "html", null, true);
                echo "</div>
                            ";
                // line 48
                $context["ano"] = $this->getAttribute((isset($context["postMes"]) ? $context["postMes"] : $this->getContext($context, "postMes")), "ano");
                // line 49
                echo "                        ";
            }
            // line 50
            echo "                        
                        ";
            // line 51
            if (($this->getAttribute((isset($context["postMes"]) ? $context["postMes"] : $this->getContext($context, "postMes")), "mes") != (isset($context["mes"]) ? $context["mes"] : $this->getContext($context, "mes")))) {
                // line 52
                echo "                            <div class=\"mes-postagem\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["postMes"]) ? $context["postMes"] : $this->getContext($context, "postMes")), "mes"), "html", null, true);
                echo "</div>
                            ";
                // line 53
                $context["mes"] = $this->getAttribute((isset($context["postMes"]) ? $context["postMes"] : $this->getContext($context, "postMes")), "mes");
                // line 54
                echo "                        ";
            }
            // line 55
            echo "                            <div class=\"caixa-direita-posts\">
                                <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vostre_blog_post", array("slug" => $this->getAttribute((isset($context["postMes"]) ? $context["postMes"] : $this->getContext($context, "postMes")), "slug"))), "html", null, true);
            echo "\" 
                                   class=\"links\">
                                    ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["postMes"]) ? $context["postMes"] : $this->getContext($context, "postMes")), "titulo"), "html", null, true);
            echo "
                                </a>
                            </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postMes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                    ";
        // line 74
        echo "                </div>
                <div id=\"conteudo\">
                    ";
        // line 76
        $this->displayBlock('conteudo', $context, $blocks);
        // line 120
        echo "                </div>
            </div>
        ";
    }

    // line 76
    public function block_conteudo($context, array $blocks = array())
    {
        // line 77
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 78
            echo "                            <article class=\"blog-post\">
                                <div class=\"titulo-post\">";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "titulo"), "html", null, true);
            echo "</div>
                                <div class=\"autor-post\">
                                    Por ";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "autor"), "nome"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "autor"), "sobrenome"), "html", null, true);
            echo "
                                </div>
                                <div class=\"data-post\">
                                    ";
            // line 84
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "dataCriacao"), "d/m/Y H:i:s", "America/Sao_Paulo"), "html", null, true);
            echo "
                                </div>
                                <div class=\"conteudo-post\">
                                    ";
            // line 87
            if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "imagem")) {
                // line 88
                echo "                                        <div class=\"box-imagem\">
                                            <img src=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/posts/banner/" . $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "imagem"))), "html", null, true);
                echo "\" class=\"imagem-post\" />
                                        </div>
                                    ";
            }
            // line 92
            echo "                                    <span class=\"clear\"></span>
                                    <div class=\"subtitulo-post\">
                                        ";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "subtitulo"), "html", null, true);
            echo "
                                    </div>
                                    <div class=\"texto-post\">
                                        <p>
                                            ";
            // line 98
            echo twig_slice($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "texto"), 0, 300);
            echo "...
                                        </p>
                                        <br />
                                        <p><a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vostre_blog_post", array("slug" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "slug"))), "html", null, true);
            // line 102
            echo "\" class=\"links\">Continuar Lendo</a></p>
                                        ";
            // line 104
            echo "                                        <br />
                                    </div>
                                </div>
                            </article>
                            <div class=\"tags-post\">
                                Tags: 
                                ";
            // line 110
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "tags"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 111
                echo "                                <a class=\"links\" 
                                   href=\"";
                // line 112
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vostre_blog_tag_busca", array("tag" => $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "tag"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "tag"), "html", null, true);
                echo "</a>
                                    ";
                // line 113
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") != $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "length"))) {
                    // line 114
                    echo "                                        -
                                    ";
                }
                // line 116
                echo "                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "                            </div>                        
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                        
                    ";
    }

    // line 123
    public function block_javascripts($context, array $blocks = array())
    {
        // line 124
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\">
                \$(document).ready(function(){
                    \$('#conteudo, #caixa-direita').niceScroll({
                        cursorcolor: '#D00'
                    });
                    var b = document.documentElement;
b.setAttribute('data-useragent',  navigator.userAgent);
b.setAttribute('data-platform', navigator.platform );
                });
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "VostreBlogBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 126,  326 => 125,  321 => 124,  318 => 123,  313 => 118,  306 => 117,  292 => 116,  288 => 114,  286 => 113,  280 => 112,  277 => 111,  260 => 110,  249 => 102,  234 => 94,  213 => 84,  205 => 81,  200 => 79,  197 => 78,  192 => 77,  181 => 76,  175 => 62,  165 => 58,  152 => 53,  137 => 48,  34 => 9,  76 => 14,  70 => 30,  53 => 19,  113 => 40,  110 => 39,  257 => 129,  251 => 118,  242 => 116,  239 => 115,  198 => 89,  172 => 77,  161 => 69,  134 => 55,  129 => 46,  97 => 27,  58 => 21,  23 => 4,  160 => 56,  153 => 56,  150 => 55,  124 => 45,  90 => 37,  81 => 47,  77 => 34,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 104,  247 => 101,  241 => 98,  229 => 108,  220 => 70,  214 => 99,  177 => 74,  169 => 60,  140 => 54,  132 => 47,  128 => 48,  107 => 39,  61 => 132,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 92,  227 => 107,  224 => 89,  221 => 88,  219 => 87,  217 => 75,  208 => 94,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 43,  102 => 32,  71 => 13,  67 => 15,  63 => 26,  59 => 20,  38 => 5,  94 => 32,  89 => 32,  85 => 22,  75 => 25,  68 => 12,  56 => 32,  87 => 25,  21 => 2,  26 => 4,  93 => 26,  88 => 23,  78 => 26,  46 => 9,  27 => 5,  44 => 13,  31 => 6,  28 => 3,  201 => 92,  196 => 90,  183 => 120,  171 => 61,  166 => 72,  163 => 62,  158 => 67,  156 => 67,  151 => 66,  142 => 50,  138 => 54,  136 => 56,  121 => 44,  117 => 44,  105 => 40,  91 => 27,  62 => 11,  49 => 18,  24 => 1,  25 => 3,  19 => 2,  79 => 18,  72 => 22,  69 => 25,  47 => 22,  40 => 8,  37 => 5,  22 => 3,  246 => 90,  157 => 55,  145 => 51,  139 => 49,  131 => 52,  123 => 47,  120 => 47,  115 => 41,  111 => 40,  108 => 35,  101 => 37,  98 => 34,  96 => 31,  83 => 32,  74 => 14,  66 => 25,  55 => 21,  52 => 22,  50 => 17,  43 => 12,  41 => 7,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 91,  199 => 67,  193 => 88,  189 => 76,  187 => 83,  182 => 80,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 54,  149 => 51,  147 => 52,  144 => 60,  141 => 48,  133 => 55,  130 => 41,  125 => 57,  122 => 43,  116 => 51,  112 => 50,  109 => 34,  106 => 36,  103 => 44,  99 => 43,  95 => 28,  92 => 31,  86 => 51,  82 => 27,  80 => 24,  73 => 27,  64 => 23,  60 => 22,  57 => 138,  54 => 123,  51 => 19,  48 => 14,  45 => 19,  42 => 21,  39 => 11,  36 => 4,  33 => 6,  30 => 3,);
    }
}
