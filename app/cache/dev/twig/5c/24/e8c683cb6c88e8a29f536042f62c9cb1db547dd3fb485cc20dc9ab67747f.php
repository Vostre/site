<?php

/* VostreBlogBundle:Post:form.html.twig */
class __TwigTemplate_5c24e8c683cb6c88e8a29f536042f62c9cb1db547dd3fb485cc20dc9ab67747f extends Twig_Template
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
        echo "<form name=\"gerencia-post\" id=\"gerencia-post\"
      action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vostre_blog_admin_post_cadastrar", array("id_post" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id"))), "html", null, true);
        echo "\" 
      method=\"POST\" ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <p>
        <input type=\"submit\" value=\"Cadastrar\" />
    </p>
</form>
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/estilos_blog.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/default/style.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/markitup/style.css"), "html", null, true);
        echo "\" />
<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.form.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.markitup.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/set.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function(){
        \$(\"#vostre_blogbundle_post_texto\").markItUp(mySettings);
        
       ";
        // line 27
        echo "        
    });
</script>";
    }

    public function getTemplateName()
    {
        return "VostreBlogBundle:Post:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 79,  195 => 62,  178 => 56,  146 => 45,  330 => 126,  326 => 125,  321 => 124,  318 => 123,  313 => 118,  306 => 117,  292 => 116,  288 => 114,  286 => 113,  280 => 112,  277 => 111,  260 => 110,  249 => 102,  234 => 94,  213 => 84,  205 => 81,  200 => 79,  197 => 78,  192 => 77,  181 => 76,  175 => 62,  165 => 58,  152 => 53,  137 => 41,  34 => 5,  76 => 14,  70 => 27,  53 => 13,  113 => 40,  110 => 39,  257 => 129,  251 => 118,  242 => 116,  239 => 115,  198 => 89,  172 => 77,  161 => 69,  134 => 55,  129 => 46,  97 => 27,  58 => 15,  23 => 4,  160 => 49,  153 => 47,  150 => 55,  124 => 45,  90 => 37,  81 => 27,  77 => 34,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 104,  247 => 101,  241 => 98,  229 => 78,  220 => 70,  214 => 99,  177 => 74,  169 => 60,  140 => 42,  132 => 47,  128 => 48,  107 => 39,  61 => 132,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 92,  227 => 107,  224 => 75,  221 => 88,  219 => 87,  217 => 73,  208 => 69,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 38,  102 => 32,  71 => 13,  67 => 15,  63 => 26,  59 => 20,  38 => 10,  94 => 32,  89 => 32,  85 => 22,  75 => 24,  68 => 20,  56 => 32,  87 => 25,  21 => 2,  26 => 4,  93 => 26,  88 => 23,  78 => 26,  46 => 12,  27 => 5,  44 => 13,  31 => 4,  28 => 3,  201 => 65,  196 => 90,  183 => 57,  171 => 61,  166 => 72,  163 => 62,  158 => 67,  156 => 48,  151 => 66,  142 => 43,  138 => 54,  136 => 56,  121 => 44,  117 => 37,  105 => 40,  91 => 34,  62 => 16,  49 => 18,  24 => 1,  25 => 3,  19 => 2,  79 => 18,  72 => 22,  69 => 25,  47 => 10,  40 => 8,  37 => 5,  22 => 3,  246 => 90,  157 => 55,  145 => 51,  139 => 49,  131 => 52,  123 => 40,  120 => 47,  115 => 41,  111 => 36,  108 => 35,  101 => 37,  98 => 34,  96 => 31,  83 => 32,  74 => 14,  66 => 25,  55 => 14,  52 => 22,  50 => 13,  43 => 12,  41 => 7,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 91,  199 => 67,  193 => 88,  189 => 59,  187 => 83,  182 => 80,  176 => 64,  173 => 53,  168 => 72,  164 => 50,  162 => 57,  154 => 54,  149 => 46,  147 => 52,  144 => 60,  141 => 48,  133 => 55,  130 => 41,  125 => 57,  122 => 43,  116 => 51,  112 => 50,  109 => 34,  106 => 36,  103 => 44,  99 => 43,  95 => 28,  92 => 31,  86 => 51,  82 => 27,  80 => 24,  73 => 27,  64 => 18,  60 => 22,  57 => 138,  54 => 14,  51 => 19,  48 => 14,  45 => 19,  42 => 11,  39 => 7,  36 => 4,  33 => 6,  30 => 5,);
    }
}
