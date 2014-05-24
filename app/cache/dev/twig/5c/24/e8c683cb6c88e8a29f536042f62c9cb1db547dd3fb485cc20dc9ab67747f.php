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
        return array (  231 => 79,  195 => 62,  178 => 56,  146 => 45,  330 => 127,  326 => 126,  321 => 125,  318 => 124,  313 => 119,  306 => 118,  292 => 117,  288 => 115,  286 => 114,  280 => 113,  277 => 112,  260 => 111,  234 => 95,  213 => 85,  205 => 82,  200 => 80,  197 => 79,  192 => 78,  181 => 77,  165 => 59,  152 => 54,  129 => 47,  58 => 15,  53 => 13,  34 => 5,  76 => 39,  65 => 25,  126 => 58,  113 => 51,  100 => 44,  255 => 129,  249 => 103,  245 => 117,  237 => 115,  225 => 107,  212 => 99,  206 => 94,  191 => 88,  185 => 83,  180 => 80,  175 => 63,  170 => 77,  137 => 41,  127 => 54,  118 => 47,  110 => 40,  70 => 27,  23 => 4,  160 => 49,  153 => 47,  150 => 55,  124 => 46,  90 => 26,  81 => 27,  77 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 105,  247 => 102,  241 => 99,  229 => 78,  220 => 70,  214 => 69,  177 => 75,  169 => 60,  140 => 42,  132 => 48,  128 => 48,  107 => 39,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 116,  238 => 85,  235 => 74,  230 => 93,  227 => 108,  224 => 75,  221 => 89,  219 => 88,  217 => 73,  208 => 69,  204 => 72,  179 => 69,  159 => 69,  143 => 56,  135 => 53,  119 => 38,  102 => 32,  71 => 19,  67 => 13,  63 => 26,  59 => 132,  38 => 10,  94 => 53,  89 => 31,  85 => 36,  75 => 24,  68 => 20,  56 => 20,  87 => 25,  21 => 2,  26 => 4,  93 => 28,  88 => 6,  78 => 31,  46 => 12,  27 => 5,  44 => 13,  31 => 4,  28 => 3,  201 => 65,  196 => 89,  183 => 57,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 48,  151 => 63,  142 => 43,  138 => 54,  136 => 56,  121 => 45,  117 => 37,  105 => 40,  91 => 34,  62 => 16,  49 => 19,  24 => 1,  25 => 3,  19 => 2,  79 => 27,  72 => 14,  69 => 25,  47 => 10,  40 => 21,  37 => 5,  22 => 3,  246 => 90,  157 => 56,  145 => 52,  139 => 50,  131 => 52,  123 => 40,  120 => 40,  115 => 41,  111 => 36,  108 => 35,  101 => 32,  98 => 33,  96 => 43,  83 => 36,  74 => 30,  66 => 15,  55 => 14,  52 => 21,  50 => 13,  43 => 8,  41 => 22,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 59,  187 => 84,  182 => 66,  176 => 64,  173 => 53,  168 => 72,  164 => 50,  162 => 57,  154 => 55,  149 => 46,  147 => 53,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 57,  116 => 41,  112 => 42,  109 => 37,  106 => 41,  103 => 32,  99 => 30,  95 => 29,  92 => 21,  86 => 28,  82 => 22,  80 => 32,  73 => 23,  64 => 18,  60 => 23,  57 => 22,  54 => 14,  51 => 19,  48 => 25,  45 => 22,  42 => 11,  39 => 7,  36 => 4,  33 => 6,  30 => 5,);
    }
}
