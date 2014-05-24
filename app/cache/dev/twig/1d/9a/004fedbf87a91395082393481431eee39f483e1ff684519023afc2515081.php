<?php

/* VostreSiteBundle:Page:email.html.twig */
class __TwigTemplate_1d9a004fedbf87a91395082393481431eee39f483e1ff684519023afc2515081 extends Twig_Template
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
        echo "<p>Mensagem enviada pelo usu&aacute;rio <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contato"]) ? $context["contato"] : $this->getContext($context, "contato")), "nome"), "html", null, true);
        echo "</strong> &agrave;s 
    <strong>";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y H:i"), "html", null, true);
        echo "</strong>.</p>

<p><strong>Email para resposta:</strong> ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contato"]) ? $context["contato"] : $this->getContext($context, "contato")), "email"), "html", null, true);
        echo "</p>
<p><strong>Assunto:</strong> ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contato"]) ? $context["contato"] : $this->getContext($context, "contato")), "titulo"), "html", null, true);
        echo "</p>
<p><strong>Mensagem:</strong></p>
<p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contato"]) ? $context["contato"] : $this->getContext($context, "contato")), "mensagem"), "html", null, true);
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "VostreSiteBundle:Page:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 36,  255 => 129,  249 => 118,  245 => 117,  237 => 115,  225 => 107,  212 => 99,  206 => 94,  191 => 88,  185 => 83,  180 => 80,  175 => 78,  170 => 77,  137 => 57,  127 => 54,  118 => 47,  110 => 40,  70 => 22,  23 => 1,  160 => 61,  153 => 56,  150 => 55,  124 => 47,  90 => 33,  81 => 25,  77 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 54,  132 => 55,  128 => 48,  107 => 39,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 116,  238 => 85,  235 => 74,  230 => 82,  227 => 108,  224 => 71,  221 => 77,  219 => 103,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 69,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 22,  59 => 132,  38 => 8,  94 => 32,  89 => 31,  85 => 25,  75 => 26,  68 => 20,  56 => 20,  87 => 32,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 24,  46 => 9,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 91,  196 => 89,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 60,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 3,  25 => 3,  19 => 2,  79 => 27,  72 => 25,  69 => 25,  47 => 17,  40 => 21,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 41,  111 => 40,  108 => 36,  101 => 32,  98 => 33,  96 => 31,  83 => 29,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 72,  162 => 57,  154 => 67,  149 => 66,  147 => 54,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 41,  103 => 32,  99 => 37,  95 => 34,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 23,  64 => 21,  60 => 21,  57 => 14,  54 => 32,  51 => 18,  48 => 13,  45 => 22,  42 => 14,  39 => 6,  36 => 4,  33 => 6,  30 => 3,);
    }
}
