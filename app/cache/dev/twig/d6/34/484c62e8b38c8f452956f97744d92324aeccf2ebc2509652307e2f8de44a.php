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
        return array (  100 => 27,  20 => 1,  261 => 143,  259 => 142,  174 => 61,  170 => 60,  127 => 42,  118 => 39,  114 => 38,  84 => 23,  231 => 79,  195 => 62,  178 => 63,  146 => 45,  330 => 126,  326 => 125,  321 => 124,  318 => 123,  313 => 118,  306 => 117,  292 => 116,  288 => 114,  286 => 113,  280 => 112,  277 => 111,  260 => 110,  249 => 102,  234 => 94,  213 => 84,  205 => 81,  200 => 79,  197 => 78,  192 => 77,  181 => 76,  175 => 62,  165 => 59,  152 => 53,  137 => 41,  34 => 7,  76 => 14,  70 => 27,  53 => 13,  113 => 40,  110 => 37,  257 => 129,  251 => 118,  242 => 116,  239 => 115,  198 => 89,  172 => 77,  161 => 69,  134 => 45,  129 => 43,  97 => 27,  58 => 18,  23 => 4,  160 => 49,  153 => 47,  150 => 55,  124 => 41,  90 => 37,  81 => 24,  77 => 34,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 149,  264 => 84,  258 => 81,  252 => 104,  247 => 101,  241 => 98,  229 => 78,  220 => 70,  214 => 99,  177 => 74,  169 => 60,  140 => 42,  132 => 44,  128 => 48,  107 => 39,  61 => 132,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 92,  227 => 107,  224 => 75,  221 => 88,  219 => 87,  217 => 73,  208 => 69,  204 => 72,  179 => 69,  159 => 61,  143 => 49,  135 => 53,  119 => 38,  102 => 32,  71 => 14,  67 => 20,  63 => 12,  59 => 20,  38 => 8,  94 => 32,  89 => 32,  85 => 22,  75 => 15,  68 => 20,  56 => 32,  87 => 25,  21 => 2,  26 => 12,  93 => 29,  88 => 23,  78 => 26,  46 => 14,  27 => 5,  44 => 13,  31 => 4,  28 => 3,  201 => 65,  196 => 90,  183 => 57,  171 => 61,  166 => 72,  163 => 62,  158 => 67,  156 => 48,  151 => 66,  142 => 43,  138 => 47,  136 => 56,  121 => 44,  117 => 37,  105 => 40,  91 => 27,  62 => 19,  49 => 58,  24 => 7,  25 => 3,  19 => 2,  79 => 18,  72 => 21,  69 => 25,  47 => 23,  40 => 11,  37 => 5,  22 => 3,  246 => 90,  157 => 55,  145 => 51,  139 => 49,  131 => 52,  123 => 40,  120 => 47,  115 => 41,  111 => 36,  108 => 35,  101 => 37,  98 => 34,  96 => 31,  83 => 32,  74 => 14,  66 => 13,  55 => 14,  52 => 157,  50 => 10,  43 => 12,  41 => 9,  35 => 8,  32 => 4,  29 => 6,  209 => 82,  203 => 91,  199 => 67,  193 => 88,  189 => 59,  187 => 83,  182 => 80,  176 => 64,  173 => 53,  168 => 72,  164 => 50,  162 => 58,  154 => 53,  149 => 46,  147 => 51,  144 => 60,  141 => 48,  133 => 55,  130 => 41,  125 => 57,  122 => 40,  116 => 51,  112 => 50,  109 => 34,  106 => 36,  103 => 28,  99 => 34,  95 => 28,  92 => 31,  86 => 51,  82 => 27,  80 => 24,  73 => 27,  64 => 18,  60 => 22,  57 => 11,  54 => 16,  51 => 19,  48 => 12,  45 => 19,  42 => 9,  39 => 7,  36 => 7,  33 => 4,  30 => 2,);
    }
}
