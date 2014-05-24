<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_db419a4df1e3be204a5b37b903556ae9dcbc60b7527b6ea06d68cb91752ed634 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "\".</h2>

        <div>
            Something is broken. Please e-mail us at [email] and let us know
            what you were doing when this error occurred. We will fix it as soon
            as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  25 => 5,  19 => 1,  240 => 119,  234 => 108,  230 => 107,  225 => 106,  222 => 105,  212 => 98,  210 => 97,  204 => 93,  199 => 90,  194 => 88,  189 => 87,  183 => 82,  178 => 79,  173 => 77,  168 => 76,  162 => 71,  157 => 68,  152 => 66,  147 => 65,  140 => 59,  135 => 56,  130 => 54,  125 => 53,  116 => 46,  108 => 41,  104 => 40,  97 => 36,  93 => 35,  88 => 32,  85 => 31,  76 => 23,  71 => 22,  68 => 21,  62 => 20,  57 => 122,  54 => 105,  52 => 31,  45 => 28,  43 => 21,  38 => 20,  34 => 17,  23 => 1,);
    }
}
