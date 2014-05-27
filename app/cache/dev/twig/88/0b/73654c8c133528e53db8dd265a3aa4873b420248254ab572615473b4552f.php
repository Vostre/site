<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_880b73654c8c133528e53db8dd265a3aa4873b420248254ab572615473b4552f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAQAAADwIURrAAAEQ0lEQVR42sWVf0xbVRTHKSCUUNEsWdhE3BT3QzNMjHEydLz+eONnGS2sbBSkKBA7Nn6DGwb+EByLbMbFKEuUiG1kTrFgwmCODZaZqaGJEQYSMXQJMJFBs/pGlV9tv97bAukrZMD+8Z2k957vOfdzz7s579brwU+jSP2mojnmNgOXxQ4pLqa90SjyetjHEKQ6I7MwWGkyi+qMIWjDQPgUiuNMfBTf4kxlkfDZELJSynIMHmwsVyldNxaCC7soUjV/fcTawxmvjCscS6AUR9cdzsgZu0YVCwyiLV/uhGB9UFFmG4O0OXM7inEQCpTf6ZY7nEjbeCdKkUSs9O73iTYGmW0QrQfprWclBNHSAxWegD+ECEXmp0MU2nQLajxJFCH5VTfdYiBx6Fl4r6POYj0FcCcQAoFrG4T1fkS14VpscyEgwLaRU1Qr1rtqhY9mb7L6stCtuooIyd8JnSUvEkCoepiclg1y+C3HHx3NpoBZFQKWtQAoqaYeRijxfAvSxXYGWbXwX074oIwmFJ5FIMLlVjrvT4K/JlfKSTlNLkTf5VOtKwtCrUJ2VzKdXoaAH9VUk1sRTgiPlzdSr/IrbCbAvMi4SyWpprfoOd4sxyZEsDYarqrHM6wTz1qxu6CNzkq/xtMJY3QmWTDuLbtAZ1I7XkuR6V5pbCAqjNUIJlB1BwOx/T1DDpf678DxI5XDysUP8r4xO3bOOZu7USRbcOLnftCm3HOhrlWwJEoNh6TWmMn6VrLplDE/5/XsHV7aXxchNlorgys1Sz0Zb62YoGP5ZMzskhY9WzlKRy0XN7OkIdfwWeI/DJYs6abXUO3pybyZOnOCPd72xcAlPU4y2JjhMNKgky8ccMicZR360wv78Q4+4Vroidz+HEpkbhjKYmt3FUMG43iVtW5q7EPSLtiO8MES5wtbtKfa8/lLNHZPSIY9nue3Hs+oieHozHoeNTgJiaulfMFmTK9WRdW0+arEwde6rp+dWi035x4UCMNTEC02P14wn3/3PrsisWgUKrXOXVF2QH5sxDPvgOO0xXIOz/OuFzwGCWptHX2/XZtwT5ZbJ15i/Jj6ZaW+UNgRw9rcc7r/6htAG6oRhSCP6w4i7IAYh1HHryGz07AZAmYXk0VsCwSdW5N/52fgfaQSYBgCV70G4UvQiZ6vFjuWXq1JyguBT+GzGeWx455xJCJwjcsa4g23lJiu+/+h0R6I+IeCRiXM87rPzm+0fFssz0+YR9Ta0H3ZZl77W4/yNrk4XjDj7mebsW9taHjDDfdFP/W0DLp9ojOc7vLP7vGmq9izNnQLtB+PLZ6fo3kAxTihM7mO4Ijtj2YooW0edJ20BDoTchC8NtQPe/D2XHtvv+kXfIOjeI74RWgZ7OvtXWhAEoKxE8fwLfH70Uoiu/HIev6khdgOMZJxEBEIgR/8EYpXoYQCL2MTvOFH1EjiJ2M/ifivJPwHIs9MRJmsgVwAAAAASUVORK5CYII=\" alt=\"Exception\"></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 17
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 18
            echo "            <span>1</span>
        ";
        }
        // line 20
        echo "    </span>
</span>
";
    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        // line 25
        echo "    <h2>Exception</h2>

    ";
        // line 27
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception"))) {
            // line 28
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 125,  303 => 122,  300 => 121,  289 => 113,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 94,  233 => 87,  226 => 84,  216 => 79,  207 => 75,  194 => 70,  191 => 67,  185 => 66,  100 => 39,  20 => 1,  261 => 143,  259 => 142,  174 => 61,  170 => 60,  127 => 42,  118 => 49,  114 => 38,  84 => 24,  231 => 79,  195 => 62,  178 => 66,  146 => 45,  330 => 126,  326 => 125,  321 => 124,  318 => 123,  313 => 118,  306 => 117,  292 => 116,  288 => 114,  286 => 112,  280 => 112,  277 => 111,  260 => 110,  249 => 102,  234 => 94,  213 => 78,  205 => 81,  200 => 72,  197 => 71,  192 => 77,  181 => 65,  175 => 65,  165 => 60,  152 => 53,  137 => 41,  34 => 7,  76 => 25,  70 => 19,  53 => 12,  113 => 48,  110 => 37,  257 => 129,  251 => 118,  242 => 116,  239 => 115,  198 => 89,  172 => 64,  161 => 63,  134 => 54,  129 => 43,  97 => 27,  58 => 18,  23 => 4,  160 => 49,  153 => 56,  150 => 55,  124 => 41,  90 => 27,  81 => 23,  77 => 34,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 88,  278 => 106,  268 => 149,  264 => 84,  258 => 81,  252 => 104,  247 => 101,  241 => 90,  229 => 85,  220 => 81,  214 => 99,  177 => 74,  169 => 60,  140 => 58,  132 => 44,  128 => 48,  107 => 39,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 92,  227 => 107,  224 => 75,  221 => 88,  219 => 87,  217 => 73,  208 => 69,  204 => 72,  179 => 69,  159 => 61,  143 => 49,  135 => 53,  119 => 40,  102 => 40,  71 => 14,  67 => 20,  63 => 18,  59 => 14,  38 => 6,  94 => 32,  89 => 32,  85 => 22,  75 => 15,  68 => 20,  56 => 32,  87 => 34,  21 => 2,  26 => 12,  93 => 29,  88 => 32,  78 => 26,  46 => 13,  27 => 3,  44 => 13,  31 => 6,  28 => 5,  201 => 65,  196 => 90,  183 => 57,  171 => 61,  166 => 72,  163 => 62,  158 => 62,  156 => 58,  151 => 59,  142 => 43,  138 => 47,  136 => 56,  121 => 50,  117 => 37,  105 => 34,  91 => 33,  62 => 19,  49 => 14,  24 => 7,  25 => 3,  19 => 1,  79 => 18,  72 => 22,  69 => 25,  47 => 23,  40 => 11,  37 => 5,  22 => 3,  246 => 93,  157 => 55,  145 => 51,  139 => 49,  131 => 52,  123 => 42,  120 => 47,  115 => 41,  111 => 47,  108 => 35,  101 => 37,  98 => 34,  96 => 37,  83 => 33,  74 => 14,  66 => 13,  55 => 13,  52 => 12,  50 => 10,  43 => 12,  41 => 9,  35 => 6,  32 => 5,  29 => 6,  209 => 82,  203 => 73,  199 => 67,  193 => 88,  189 => 59,  187 => 83,  182 => 80,  176 => 63,  173 => 53,  168 => 61,  164 => 50,  162 => 59,  154 => 60,  149 => 46,  147 => 54,  144 => 60,  141 => 51,  133 => 55,  130 => 46,  125 => 51,  122 => 40,  116 => 39,  112 => 50,  109 => 34,  106 => 36,  103 => 28,  99 => 31,  95 => 28,  92 => 31,  86 => 51,  82 => 28,  80 => 27,  73 => 24,  64 => 23,  60 => 16,  57 => 11,  54 => 16,  51 => 13,  48 => 12,  45 => 9,  42 => 10,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
