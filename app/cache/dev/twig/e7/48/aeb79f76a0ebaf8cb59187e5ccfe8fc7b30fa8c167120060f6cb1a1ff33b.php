<?php

/* VostreBlogBundle:Comentario:form.html.twig */
class __TwigTemplate_e748aeb79f76a0ebaf8cb59187e5ccfe8fc7b30fa8c167120060f6cb1a1ff33b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<meta charset=\"UTF-8\" />
<form id=\"form-comentario\"
      action=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vostre_blog_comentario_cadastrar", array("id_post" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id"))), "html", null, true);
        echo "\" 
      method=\"POST\" ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    Caracteres restantes: <span id=\"contador\"></span>
    <p>
        <input type=\"submit\" value=\"Enviar Comentário\" />
    </p>
</form>
<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.form.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    (function(\$) {
    \$.fn.extend( {
        limiter: function(limit, elem) {
            \$(this).on(\"keyup focus\", function() {
                setCount(this, elem);
            });
            function setCount(src, elem) {
                var chars = src.value.length;
                if (chars > limit) {
                    src.value = src.value.substr(0, limit);
                    chars = limit;
                }
                elem.html( limit - chars );
            }
            setCount(\$(this)[0], elem);
        }
    });
    
    \$('#vostre_blogbundle_comentario_texto').limiter(200, \$('#contador'));
    
     \$('#form-comentario').submit(function(){
        \$(this).ajaxSubmit(function(data){
            
            url = '";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vostre_blog_post", array("slug" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "slug"))), "html", null, true);
        echo "';
            
            ";
        // line 47
        echo "
            return false;
        });
";
        // line 51
        echo "    });
    
})(jQuery);
</script>";
    }

    public function getTemplateName()
    {
        return "VostreBlogBundle:Comentario:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 51,  81 => 47,  76 => 39,  48 => 14,  44 => 13,  35 => 7,  31 => 6,  27 => 5,  23 => 4,  19 => 2,);
    }
}
