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
        return array (  231 => 79,  229 => 78,  224 => 75,  217 => 73,  208 => 69,  201 => 65,  195 => 62,  189 => 59,  183 => 57,  178 => 56,  173 => 53,  164 => 50,  160 => 49,  156 => 48,  153 => 47,  149 => 46,  146 => 45,  142 => 43,  140 => 42,  137 => 41,  123 => 40,  119 => 38,  117 => 37,  111 => 36,  108 => 35,  91 => 34,  81 => 27,  75 => 24,  68 => 20,  64 => 18,  58 => 15,  55 => 14,  53 => 13,  47 => 10,  39 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
