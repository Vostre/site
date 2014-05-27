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
        return array (  70 => 30,  53 => 19,  113 => 40,  110 => 39,  257 => 129,  251 => 118,  242 => 116,  239 => 115,  198 => 89,  172 => 77,  161 => 69,  134 => 55,  129 => 58,  97 => 53,  58 => 21,  23 => 1,  160 => 61,  153 => 56,  150 => 55,  124 => 47,  90 => 37,  81 => 35,  77 => 34,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 117,  241 => 77,  229 => 108,  220 => 70,  214 => 99,  177 => 78,  169 => 60,  140 => 54,  132 => 49,  128 => 48,  107 => 39,  61 => 132,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 107,  224 => 71,  221 => 103,  219 => 76,  217 => 75,  208 => 94,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 26,  59 => 20,  38 => 5,  94 => 32,  89 => 32,  85 => 36,  75 => 25,  68 => 25,  56 => 32,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 26,  46 => 9,  27 => 4,  44 => 15,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 72,  163 => 62,  158 => 67,  156 => 67,  151 => 66,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 18,  24 => 3,  25 => 3,  19 => 2,  79 => 18,  72 => 22,  69 => 25,  47 => 22,  40 => 8,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 57,  131 => 52,  123 => 47,  120 => 47,  115 => 41,  111 => 40,  108 => 41,  101 => 37,  98 => 34,  96 => 31,  83 => 32,  74 => 14,  66 => 25,  55 => 21,  52 => 21,  50 => 17,  43 => 8,  41 => 7,  35 => 4,  32 => 4,  29 => 3,  209 => 82,  203 => 91,  199 => 67,  193 => 88,  189 => 71,  187 => 83,  182 => 80,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 54,  144 => 60,  141 => 48,  133 => 55,  130 => 41,  125 => 57,  122 => 43,  116 => 51,  112 => 50,  109 => 34,  106 => 36,  103 => 44,  99 => 43,  95 => 28,  92 => 31,  86 => 36,  82 => 27,  80 => 24,  73 => 27,  64 => 23,  60 => 22,  57 => 14,  54 => 18,  51 => 19,  48 => 13,  45 => 14,  42 => 21,  39 => 5,  36 => 4,  33 => 6,  30 => 3,);
    }
}
