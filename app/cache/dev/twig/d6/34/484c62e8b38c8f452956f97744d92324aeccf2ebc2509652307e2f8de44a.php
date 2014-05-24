<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_d634484c62e8b38c8f452956f97744d92324aeccf2ebc2509652307e2f8de44a extends Twig_Template
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
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        ";
        // line 5
        if (array_key_exists("invalid_username", $context)) {
            // line 6
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
        ";
        }
        // line 8
        echo "        <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  261 => 143,  259 => 142,  174 => 61,  134 => 45,  114 => 38,  84 => 23,  231 => 79,  195 => 62,  178 => 63,  146 => 45,  330 => 127,  326 => 126,  321 => 125,  318 => 124,  313 => 119,  306 => 118,  292 => 117,  288 => 115,  286 => 114,  280 => 113,  277 => 112,  260 => 111,  234 => 95,  213 => 85,  205 => 82,  200 => 80,  197 => 79,  192 => 78,  181 => 77,  165 => 59,  152 => 54,  129 => 43,  58 => 18,  53 => 13,  34 => 7,  76 => 39,  65 => 25,  126 => 58,  113 => 51,  100 => 27,  255 => 129,  249 => 103,  245 => 117,  237 => 115,  225 => 107,  212 => 99,  206 => 94,  191 => 88,  185 => 83,  180 => 80,  175 => 63,  170 => 60,  137 => 41,  127 => 42,  118 => 39,  110 => 37,  70 => 27,  23 => 4,  160 => 49,  153 => 47,  150 => 55,  124 => 41,  90 => 26,  81 => 24,  77 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 149,  264 => 84,  258 => 81,  252 => 105,  247 => 102,  241 => 99,  229 => 78,  220 => 70,  214 => 69,  177 => 75,  169 => 60,  140 => 42,  132 => 44,  128 => 48,  107 => 39,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 116,  238 => 85,  235 => 74,  230 => 93,  227 => 108,  224 => 75,  221 => 89,  219 => 88,  217 => 73,  208 => 69,  204 => 72,  179 => 69,  159 => 69,  143 => 49,  135 => 53,  119 => 38,  102 => 32,  71 => 14,  67 => 20,  63 => 12,  59 => 132,  38 => 8,  94 => 53,  89 => 31,  85 => 36,  75 => 15,  68 => 20,  56 => 20,  87 => 25,  21 => 2,  26 => 12,  93 => 29,  88 => 6,  78 => 31,  46 => 14,  27 => 5,  44 => 13,  31 => 4,  28 => 3,  201 => 65,  196 => 89,  183 => 57,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 48,  151 => 63,  142 => 43,  138 => 47,  136 => 56,  121 => 45,  117 => 37,  105 => 40,  91 => 27,  62 => 19,  49 => 58,  24 => 7,  25 => 3,  19 => 2,  79 => 27,  72 => 21,  69 => 25,  47 => 23,  40 => 11,  37 => 5,  22 => 3,  246 => 90,  157 => 56,  145 => 52,  139 => 50,  131 => 52,  123 => 40,  120 => 40,  115 => 41,  111 => 36,  108 => 35,  101 => 32,  98 => 33,  96 => 43,  83 => 36,  74 => 30,  66 => 13,  55 => 14,  52 => 157,  50 => 10,  43 => 12,  41 => 9,  35 => 8,  32 => 4,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 59,  187 => 84,  182 => 66,  176 => 64,  173 => 53,  168 => 72,  164 => 50,  162 => 58,  154 => 53,  149 => 46,  147 => 51,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 40,  116 => 41,  112 => 42,  109 => 37,  106 => 36,  103 => 28,  99 => 34,  95 => 29,  92 => 21,  86 => 28,  82 => 22,  80 => 32,  73 => 23,  64 => 18,  60 => 23,  57 => 11,  54 => 16,  51 => 19,  48 => 12,  45 => 22,  42 => 9,  39 => 7,  36 => 7,  33 => 4,  30 => 2,);
    }
}
