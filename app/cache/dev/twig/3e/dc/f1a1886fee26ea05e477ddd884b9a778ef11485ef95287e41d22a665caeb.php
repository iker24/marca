<?php

/* uniMarcaBundle:noticias:buscarTitulolike.html.twig */
class __TwigTemplate_3edcf1a1886fee26ea05e477ddd884b9a778ef11485ef95287e41d22a665caeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("uniMarcaBundle::layout.html.twig");

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "uniMarcaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    
    <br>Buscar palabra que este en el titulo:
<form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("noticias_responder_titulolike");
        echo "\" method=\"POST\">
    <input type=\"text\" name=\"titulo\" value=\"Introduzca EL PUTO titulo\">
    <input type=\"submit\" value=\"OK\">
</form>
 ";
    }

    public function getTemplateName()
    {
        return "uniMarcaBundle:noticias:buscarTitulolike.html.twig";
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
