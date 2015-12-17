<?php

/* uniMarcaBundle:noticias:buscarTitulo.html.twig */
class __TwigTemplate_04bfead129e98d222246f12d1fc88b61a7117fa43c079e919031ff77cfae3274 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    Tienes que pedir un nombre
    <br>Buscar titulo:
<form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("noticias_responder_titulo");
        echo "\" method=\"POST\">
    <input type=\"text\" name=\"titulo\" value=\"Introduzca EL PUTO titulo\">
    <input type=\"submit\" value=\"OK\">
</form>
 ";
    }

    public function getTemplateName()
    {
        return "uniMarcaBundle:noticias:buscarTitulo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 4,  28 => 3,);
    }
}
