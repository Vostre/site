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
        // line 5
        echo "<script>
  ";
        // line 13
        echo "
</script>
    <div id=\"conteudo-interno\">
        <h1 class=\"titulo-interno\">";
        // line 16
        echo $this->env->getExtension('translator')->getTranslator()->trans("interna.titulo.servicos", array(), "messages");
        echo "</h1>
        <h4 class=\"subtitulo-interno\">";
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans("interna.subtitulo.servicos", array(), "messages");
        echo "</h4>
        
        <div class=\"caixa-servico\">
            <div class=\"conteudo-servico\">
                <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/icone-servico-sistema-web.png"), "html", null, true);
        echo "\" class=\"icone-servico\" />
                <span class=\"nome-servico\">";
        // line 22
        echo $this->env->getExtension('translator')->getTranslator()->trans("servicos.sistemas.web", array(), "messages");
        echo "</span>
            </div>
        </div>
        
        <div class=\"caixa-servico\">
            <div class=\"conteudo-servico\">
                <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/icone-servico-web.png"), "html", null, true);
        echo "\" class=\"icone-servico\" />
                <span class=\"nome-servico\">";
        // line 29
        echo $this->env->getExtension('translator')->getTranslator()->trans("servicos.sites", array(), "messages");
        echo "</span>
            </div>
        </div>
        
        <div class=\"caixa-servico\">
            <div class=\"conteudo-servico\">
                <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/icone-servico-desktop.png"), "html", null, true);
        echo "\" class=\"icone-servico\" />
                <span class=\"nome-servico\">";
        // line 36
        echo $this->env->getExtension('translator')->getTranslator()->trans("servicos.sistemas.desktop", array(), "messages");
        echo "</span>
            </div>
        </div>
        
        <div class=\"caixa-servico\">
            <div class=\"conteudo-servico\">
                <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/icone-servico-consultoria.png"), "html", null, true);
        echo "\" class=\"icone-servico\" />
                <span class=\"nome-servico\">";
        // line 43
        echo $this->env->getExtension('translator')->getTranslator()->trans("servicos.consultoria", array(), "messages");
        echo "</span>
            </div>
        </div>
        
        <div class=\"caixa-servico\">
            <div class=\"conteudo-servico\">
                <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/icone-servico-integracao.png"), "html", null, true);
        echo "\" class=\"icone-servico\" />
                <span class=\"nome-servico\">";
        // line 50
        echo $this->env->getExtension('translator')->getTranslator()->trans("servicos.integracao", array(), "messages");
        echo "</span>
            </div>
        </div>
        
        <div class=\"caixa-servico\">
            <div class=\"conteudo-servico\">
                <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/icone-servico-layout.png"), "html", null, true);
        echo "\" class=\"icone-servico\" />
                <span class=\"nome-servico\">";
        // line 57
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
        return array (  126 => 57,  122 => 56,  113 => 50,  109 => 49,  100 => 43,  96 => 42,  87 => 36,  83 => 35,  74 => 29,  70 => 28,  61 => 22,  57 => 21,  50 => 17,  46 => 16,  41 => 13,  38 => 5,  35 => 4,  29 => 3,);
    }
}
