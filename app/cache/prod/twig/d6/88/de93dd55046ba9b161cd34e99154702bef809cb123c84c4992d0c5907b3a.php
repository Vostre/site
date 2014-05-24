<?php

/* VostreSiteBundle:Page:portfolio.html.twig */
class __TwigTemplate_d688de93dd55046ba9b161cd34e99154702bef809cb123c84c4992d0c5907b3a extends Twig_Template
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
        <h1 class=\"titulo-interno\">";
        // line 16
        echo $this->env->getExtension('translator')->getTranslator()->trans("interna.titulo.portfolio", array(), "messages");
        echo "</h1>
        <h4 class=\"subtitulo-interno\">";
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans("interna.subtitulo.portfolio", array(), "messages");
        echo "</h4>
        <br />
        <div class=\"caixa-projeto\">
            <div class=\"imagem-projeto\">
                <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/logos-projetos/logo-circular.png"), "html", null, true);
        echo "\" />
            </div>
            <div class=\"descricao-projeto\">
                <h4 class=\"titulo-projeto\">";
        // line 24
        echo $this->env->getExtension('translator')->getTranslator()->trans("portfolio.titulo.circular", array(), "messages");
        echo "</h4>
                <p class=\"texto-descricao-projeto\">";
        // line 25
        echo $this->env->getExtension('translator')->getTranslator()->trans("portfolio.descricao.resumida.circular", array(), "messages");
        echo "</p>
                <div class=\"link-detalhes-projeto\">
                     <p class=\"texto-site\">
                         <a class=\"links\" 
                            href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("vostre_site_portfolio_detalhe", array("projeto" => "circular"));
        echo "\">
                                    ";
        // line 30
        echo $this->env->getExtension('translator')->getTranslator()->trans("portfolio.detalhes", array(), "messages");
        // line 31
        echo "                         </a>
                     </p>
                 </div>
            </div>
            <div class=\"site-projeto\">
                <p class=\"texto-site\">Site: ";
        // line 36
        echo $this->env->getExtension('translator')->getTranslator()->trans("portfolio.site.desenvolvimento", array(), "messages");
        echo "</p>
            </div>
        </div>
        
        ";
        // line 52
        echo "    </div>        
";
    }

    public function getTemplateName()
    {
        return "VostreSiteBundle:Page:portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 52,  87 => 36,  80 => 31,  78 => 30,  74 => 29,  67 => 25,  63 => 24,  57 => 21,  50 => 17,  46 => 16,  41 => 13,  38 => 5,  35 => 4,  29 => 3,);
    }
}
