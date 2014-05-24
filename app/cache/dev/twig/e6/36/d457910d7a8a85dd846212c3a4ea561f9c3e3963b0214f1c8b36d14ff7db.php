<?php

/* VostreSiteBundle:Portfolio:detalhe.html.twig */
class __TwigTemplate_e636d457910d7a8a85dd846212c3a4ea561f9c3e3963b0214f1c8b36d14ff7db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VostreSiteBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'conteudo' => array($this, 'block_conteudo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VostreSiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.titulo.portfolio", array(), "messages");
    }

    // line 4
    public function block_conteudo($context, array $blocks = array())
    {
        // line 5
        echo "<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48668805-1', 'vostre.com.br');
  ga('send', 'pageview');

</script>
<div id=\"conteudo-interno\">
    ";
        // line 19
        echo "        <div class=\"caixa-detalhe\">
            <div class=\"caixa-detalhe-projeto-logo\">
                <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/logos-projetos/logo-circular.png"), "html", null, true);
        echo "\" />
            </div>
            <div class=\"caixa-detalhe-projeto-titulo titulo-interno\">
                <p>Circular</p>
                <br />
                <p>Site: ";
        // line 26
        echo $this->env->getExtension('translator')->getTranslator()->trans("portfolio.site.desenvolvimento", array(), "messages");
        echo "</p>
            </div>
            <div class=\"caixa-detalhe-projeto-descricao\">
                <div class=\"caixa-detalhe-projeto-descricao-texto\">
                    <p>";
        // line 30
        echo $this->env->getExtension('translator')->getTranslator()->trans("portfolio.descricao.completa.circular", array(), "messages");
        echo "</p>
                </div>
                <div class=\"caixa-detalhe-projeto-descricao-recursos\">
                    <ul class=\"projeto-recursos\">
                        <li>";
        // line 34
        echo $this->env->getExtension('translator')->getTranslator()->trans("portfolio.recursos.dados", array(), "messages");
        echo "</li>
                        <li>";
        // line 35
        echo $this->env->getExtension('translator')->getTranslator()->trans("portfolio.recursos.informacoes", array(), "messages");
        echo "</li>
                        <li>";
        // line 36
        echo $this->env->getExtension('translator')->getTranslator()->trans("portfolio.recursos.codigo", array(), "messages");
        echo "</li>
                    </ul>
                </div>
            </div>
        </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "VostreSiteBundle:Portfolio:detalhe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 25,  126 => 58,  113 => 51,  100 => 44,  255 => 129,  249 => 118,  245 => 117,  237 => 115,  225 => 107,  212 => 99,  206 => 94,  191 => 88,  185 => 83,  180 => 80,  175 => 78,  170 => 77,  137 => 57,  127 => 54,  118 => 47,  110 => 40,  70 => 30,  23 => 1,  160 => 61,  153 => 56,  150 => 55,  124 => 47,  90 => 33,  81 => 35,  77 => 34,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 54,  132 => 55,  128 => 48,  107 => 39,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 116,  238 => 85,  235 => 74,  230 => 82,  227 => 108,  224 => 71,  221 => 77,  219 => 103,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 69,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 26,  63 => 26,  59 => 132,  38 => 5,  94 => 53,  89 => 31,  85 => 36,  75 => 26,  68 => 20,  56 => 20,  87 => 37,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 31,  46 => 18,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 91,  196 => 89,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 60,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 3,  25 => 3,  19 => 2,  79 => 27,  72 => 25,  69 => 25,  47 => 17,  40 => 21,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 41,  111 => 40,  108 => 36,  101 => 32,  98 => 33,  96 => 43,  83 => 36,  74 => 30,  66 => 15,  55 => 21,  52 => 21,  50 => 19,  43 => 8,  41 => 15,  35 => 4,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 72,  162 => 57,  154 => 67,  149 => 66,  147 => 54,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 57,  116 => 41,  112 => 42,  109 => 50,  106 => 41,  103 => 32,  99 => 37,  95 => 34,  92 => 21,  86 => 28,  82 => 22,  80 => 32,  73 => 23,  64 => 21,  60 => 23,  57 => 22,  54 => 32,  51 => 19,  48 => 13,  45 => 22,  42 => 14,  39 => 6,  36 => 4,  33 => 6,  30 => 3,);
    }
}
