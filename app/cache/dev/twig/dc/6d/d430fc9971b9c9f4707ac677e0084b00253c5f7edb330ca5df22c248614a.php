<?php

/* VostreSiteBundle:Page:servicos.html.twig */
class __TwigTemplate_dc6dd430fc9971b9c9f4707ac677e0084b00253c5f7edb330ca5df22c248614a extends Twig_Template
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.titulo.servicos", array(), "messages");
    }

    // line 4
    public function block_conteudo($context, array $blocks = array())
    {
        // line 6
        echo "<script>
";
        // line 14
        echo "
</script>
    <div id=\"conteudo-interno\">
        <h1 class=\"titulo-interno\">";
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans("interna.titulo.servicos", array(), "messages");
        echo "</h1>
        <h4 class=\"subtitulo-interno\">";
        // line 18
        echo $this->env->getExtension('translator')->getTranslator()->trans("interna.subtitulo.servicos", array(), "messages");
        echo "</h4>
        
        <div class=\"caixa-servico\">
            <div class=\"conteudo-servico\">
                <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/icone-servico-sistema-web.png"), "html", null, true);
        echo "\" class=\"icone-servico\" />
                <span class=\"nome-servico\">";
        // line 23
        echo $this->env->getExtension('translator')->getTranslator()->trans("servicos.sistemas.web", array(), "messages");
        echo "</span>
            </div>
        </div>
        
        <div class=\"caixa-servico\">
            <div class=\"conteudo-servico\">
                <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/icone-servico-web.png"), "html", null, true);
        echo "\" class=\"icone-servico\" />
                <span class=\"nome-servico\">";
        // line 30
        echo $this->env->getExtension('translator')->getTranslator()->trans("servicos.sites", array(), "messages");
        echo "</span>
            </div>
        </div>
        
        <div class=\"caixa-servico\">
            <div class=\"conteudo-servico\">
                <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/icone-servico-desktop.png"), "html", null, true);
        echo "\" class=\"icone-servico\" />
                <span class=\"nome-servico\">";
        // line 37
        echo $this->env->getExtension('translator')->getTranslator()->trans("servicos.sistemas.desktop", array(), "messages");
        echo "</span>
            </div>
        </div>
        
        <div class=\"caixa-servico\">
            <div class=\"conteudo-servico\">
                <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/icone-servico-consultoria.png"), "html", null, true);
        echo "\" class=\"icone-servico\" />
                <span class=\"nome-servico\">";
        // line 44
        echo $this->env->getExtension('translator')->getTranslator()->trans("servicos.consultoria", array(), "messages");
        echo "</span>
            </div>
        </div>
        
        <div class=\"caixa-servico\">
            <div class=\"conteudo-servico\">
                <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/icone-servico-integracao.png"), "html", null, true);
        echo "\" class=\"icone-servico\" />
                <span class=\"nome-servico\">";
        // line 51
        echo $this->env->getExtension('translator')->getTranslator()->trans("servicos.integracao", array(), "messages");
        echo "</span>
            </div>
        </div>
        
        <div class=\"caixa-servico\">
            <div class=\"conteudo-servico\">
                <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/icone-servico-layout.png"), "html", null, true);
        echo "\" class=\"icone-servico\" />
                <span class=\"nome-servico\">";
        // line 58
        echo $this->env->getExtension('translator')->getTranslator()->trans("servicos.layouts", array(), "messages");
        echo "</span>
            </div>
        </div>
    </div>        
";
    }

    public function getTemplateName()
    {
        return "VostreSiteBundle:Page:servicos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 58,  113 => 51,  100 => 44,  255 => 129,  249 => 118,  245 => 117,  237 => 115,  225 => 107,  212 => 99,  206 => 94,  191 => 88,  185 => 83,  180 => 80,  175 => 78,  170 => 77,  137 => 57,  127 => 54,  118 => 47,  110 => 40,  70 => 29,  23 => 1,  160 => 61,  153 => 56,  150 => 55,  124 => 47,  90 => 33,  81 => 25,  77 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 54,  132 => 55,  128 => 48,  107 => 39,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 116,  238 => 85,  235 => 74,  230 => 82,  227 => 108,  224 => 71,  221 => 77,  219 => 103,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 69,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 26,  63 => 25,  59 => 132,  38 => 6,  94 => 53,  89 => 31,  85 => 25,  75 => 26,  68 => 20,  56 => 20,  87 => 37,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 31,  46 => 17,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 91,  196 => 89,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 60,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 3,  25 => 3,  19 => 2,  79 => 27,  72 => 25,  69 => 25,  47 => 17,  40 => 21,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 41,  111 => 40,  108 => 36,  101 => 32,  98 => 33,  96 => 43,  83 => 36,  74 => 30,  66 => 15,  55 => 15,  52 => 21,  50 => 18,  43 => 8,  41 => 14,  35 => 4,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 72,  162 => 57,  154 => 67,  149 => 66,  147 => 54,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 57,  116 => 41,  112 => 42,  109 => 50,  106 => 41,  103 => 32,  99 => 37,  95 => 34,  92 => 21,  86 => 28,  82 => 22,  80 => 32,  73 => 23,  64 => 21,  60 => 21,  57 => 22,  54 => 32,  51 => 18,  48 => 13,  45 => 22,  42 => 14,  39 => 6,  36 => 4,  33 => 6,  30 => 3,);
    }
}
