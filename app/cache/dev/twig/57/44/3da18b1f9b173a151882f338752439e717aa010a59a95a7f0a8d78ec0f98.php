<?php

/* uniMarcaBundle:categorias:buscar.html.twig */
class __TwigTemplate_57443da18b1f9b173a151882f338752439e717aa010a59a95a7f0a8d78ec0f98 extends Twig_Template
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
        echo "    Buscar una categoria
    <br>Buscar autor:
<form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("categorias_encontrado");
        echo "\" method=\"POST\">
    <input type=\"text\" name=\"nombre\" value=\"Introduzca la categoria:\">
    <input type=\"submit\" value=\"Buscar\">
</form>
 ";
    }

    public function getTemplateName()
    {
        return "uniMarcaBundle:categorias:buscar.html.twig";
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
