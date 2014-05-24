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
        ";
        // line 11
        echo "        <title>";
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
        return array (  326 => 126,  322 => 125,  317 => 124,  314 => 123,  309 => 118,  302 => 117,  288 => 116,  284 => 114,  282 => 113,  276 => 112,  273 => 111,  256 => 110,  248 => 104,  245 => 102,  243 => 101,  237 => 98,  230 => 94,  226 => 92,  220 => 89,  217 => 88,  215 => 87,  209 => 84,  201 => 81,  196 => 79,  193 => 78,  188 => 77,  185 => 76,  179 => 120,  177 => 76,  173 => 74,  171 => 62,  161 => 58,  156 => 56,  153 => 55,  150 => 54,  148 => 53,  143 => 52,  141 => 51,  138 => 50,  135 => 49,  133 => 48,  128 => 47,  125 => 46,  120 => 45,  117 => 44,  115 => 43,  104 => 35,  93 => 27,  89 => 26,  84 => 23,  81 => 22,  72 => 14,  67 => 13,  64 => 12,  58 => 11,  53 => 138,  50 => 123,  48 => 22,  41 => 19,  39 => 12,  34 => 11,  24 => 1,);
    }
}
