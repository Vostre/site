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
  ";
        // line 13
        echo "
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
                <p>";
        // line 29
        echo $this->env->getExtension('translator')->getTranslator()->trans("portfolio.descricao.completa.circular", array(), "messages");
        echo "</p>
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
        return array (  64 => 29,  58 => 26,  50 => 21,  46 => 19,  41 => 13,  38 => 5,  35 => 4,  29 => 3,);
    }
}
