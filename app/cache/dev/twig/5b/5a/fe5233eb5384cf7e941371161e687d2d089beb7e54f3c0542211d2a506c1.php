<?php

/* VostreBlogBundle:Page:post.html.twig */
class __TwigTemplate_5b5afe5233eb5384cf7e941371161e687d2d089beb7e54f3c0542211d2a506c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VostreBlogBundle:Page:index.html.twig");

        $this->blocks = array(
            'conteudo' => array($this, 'block_conteudo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VostreBlogBundle:Page:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_conteudo($context, array $blocks = array())
    {
        // line 4
        echo "    <article class=\"blog-post\">
        <div class=\"titulo-post\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "titulo"), "html", null, true);
        echo "</div>
        <div class=\"autor-post\">
            Por ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "autor"), "nome"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "autor"), "sobrenome"), "html", null, true);
        echo "
        </div>
        <div class=\"data-post\">
            Postado em ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "dataCriacao"), "d/m/Y H:i:s", "America/Sao_Paulo"), "html", null, true);
        echo "
        </div>
        <div class=\"conteudo-post\">
            ";
        // line 13
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "imagem")) {
            // line 14
            echo "                <div class=\"box-imagem\">
                    <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/posts/banner/" . $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "imagem"))), "html", null, true);
            echo "\" class=\"imagem-post\" />
                </div>
            ";
        }
        // line 18
        echo "            <span class=\"clear\"></span>
            <div class=\"subtitulo-post\">
                ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "subtitulo"), "html", null, true);
        echo "
            </div>
            <div class=\"texto-post\">
                <p>
                    ";
        // line 24
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "texto");
        echo "
                </p>
                <br />
                <p class=\"milisegundos\">";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "dataCriacao"), "U"), "html", null, true);
        echo "</p>
                <br />
            </div>
        </div>
    </article>
    <div class=\"tags-post\">
        Tags: 
        ";
        // line 34
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
            // line 35
            echo "        <a class=\"links\" 
           href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vostre_blog_tag_busca", array("tag" => $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "tag"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "tag"), "html", null, true);
            echo "</a>
            ";
            // line 37
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") != $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "length"))) {
                // line 38
                echo "                -
            ";
            }
            // line 40
            echo "        ";
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
        // line 41
        echo "    </div>
";
        // line 42
        if ((twig_length_filter($this->env, (isset($context["postsRelacionados"]) ? $context["postsRelacionados"] : $this->getContext($context, "postsRelacionados"))) > 0)) {
            // line 43
            echo "<h4 class=\"alinhamento-esquerda subtitulo-auxiliar\">Leia Tamb&eacute;m:</h4>
";
        }
        // line 45
        echo "<div class=\"posts-relacionados\">
    ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["postsRelacionados"]) ? $context["postsRelacionados"] : $this->getContext($context, "postsRelacionados")));
        foreach ($context['_seq'] as $context["_key"] => $context["umPost"]) {
            // line 47
            echo "        <div class=\"link-post-relacionado\">
            <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vostre_blog_post", array("slug" => $this->getAttribute((isset($context["umPost"]) ? $context["umPost"] : $this->getContext($context, "umPost")), "slug"))), "html", null, true);
            echo "\" class=\"links\">
                ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["umPost"]) ? $context["umPost"] : $this->getContext($context, "umPost")), "titulo"), "html", null, true);
            echo "</a>
            <p class=\"subtitulo-post-relacionado\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["umPost"]) ? $context["umPost"] : $this->getContext($context, "umPost")), "subtitulo"), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['umPost'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "</div>
<h4 class=\"alinhamento-esquerda subtitulo-auxiliar\">Coment&aacute;rios:</h4>
<div id=\"caixa-comentarios\">
    ";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "comentarios"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comentario"]) {
            // line 57
            echo "    <div class=\"comentario\" id=\"comentario-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), "id"), "html", null, true);
            echo "\">
        <div class=\"comentario-autor\">
            <strong>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), "autor"), "html", null, true);
            echo "</strong>
        </div>
        <div class=\"comentario-data\">
            ";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), "dataCriacao"), "d/m/Y H:i:s", "America/Sao_Paulo"), "html", null, true);
            echo "
        </div>
        <div class=\"comentario-titulo\">
            ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), "titulo"), "html", null, true);
            echo "
        </div>
        <br />
        <div class=\"comentario-texto\">
            ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), "texto"), "html", null, true);
            echo "
        </div>
    </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 73
            echo "    <p>Nenhum coment&aacute;rio at&eacute; o momento. Seja o primeiro!</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comentario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "</div>
<br />
<h5 class=\"alinhamento-esquerda subtitulo-auxiliar\">Deixe seu coment&aacute;rio:</h5>
";
        // line 78
        $this->env->loadTemplate("VostreBlogBundle:Comentario:form.html.twig")->display($context);
        // line 79
        echo "<br />
";
    }

    public function getTemplateName()
    {
        return "VostreBlogBundle:Page:post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 79,  195 => 62,  178 => 56,  146 => 45,  330 => 126,  326 => 125,  321 => 124,  318 => 123,  313 => 118,  306 => 117,  292 => 116,  288 => 114,  286 => 113,  280 => 112,  277 => 111,  260 => 110,  249 => 102,  234 => 94,  213 => 84,  205 => 81,  200 => 79,  197 => 78,  192 => 77,  181 => 76,  175 => 62,  165 => 58,  152 => 53,  137 => 41,  34 => 5,  76 => 14,  70 => 30,  53 => 13,  113 => 40,  110 => 39,  257 => 129,  251 => 118,  242 => 116,  239 => 115,  198 => 89,  172 => 77,  161 => 69,  134 => 55,  129 => 46,  97 => 27,  58 => 15,  23 => 4,  160 => 49,  153 => 47,  150 => 55,  124 => 45,  90 => 37,  81 => 27,  77 => 34,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 104,  247 => 101,  241 => 98,  229 => 78,  220 => 70,  214 => 99,  177 => 74,  169 => 60,  140 => 42,  132 => 47,  128 => 48,  107 => 39,  61 => 132,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 92,  227 => 107,  224 => 75,  221 => 88,  219 => 87,  217 => 73,  208 => 69,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 38,  102 => 32,  71 => 13,  67 => 15,  63 => 26,  59 => 20,  38 => 5,  94 => 32,  89 => 32,  85 => 22,  75 => 24,  68 => 20,  56 => 32,  87 => 25,  21 => 2,  26 => 4,  93 => 26,  88 => 23,  78 => 26,  46 => 9,  27 => 5,  44 => 13,  31 => 4,  28 => 3,  201 => 65,  196 => 90,  183 => 57,  171 => 61,  166 => 72,  163 => 62,  158 => 67,  156 => 48,  151 => 66,  142 => 43,  138 => 54,  136 => 56,  121 => 44,  117 => 37,  105 => 40,  91 => 34,  62 => 11,  49 => 18,  24 => 1,  25 => 3,  19 => 2,  79 => 18,  72 => 22,  69 => 25,  47 => 10,  40 => 8,  37 => 5,  22 => 3,  246 => 90,  157 => 55,  145 => 51,  139 => 49,  131 => 52,  123 => 40,  120 => 47,  115 => 41,  111 => 36,  108 => 35,  101 => 37,  98 => 34,  96 => 31,  83 => 32,  74 => 14,  66 => 25,  55 => 14,  52 => 22,  50 => 17,  43 => 12,  41 => 7,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 91,  199 => 67,  193 => 88,  189 => 59,  187 => 83,  182 => 80,  176 => 64,  173 => 53,  168 => 72,  164 => 50,  162 => 57,  154 => 54,  149 => 46,  147 => 52,  144 => 60,  141 => 48,  133 => 55,  130 => 41,  125 => 57,  122 => 43,  116 => 51,  112 => 50,  109 => 34,  106 => 36,  103 => 44,  99 => 43,  95 => 28,  92 => 31,  86 => 51,  82 => 27,  80 => 24,  73 => 27,  64 => 18,  60 => 22,  57 => 138,  54 => 123,  51 => 19,  48 => 14,  45 => 19,  42 => 21,  39 => 7,  36 => 4,  33 => 6,  30 => 3,);
    }
}
