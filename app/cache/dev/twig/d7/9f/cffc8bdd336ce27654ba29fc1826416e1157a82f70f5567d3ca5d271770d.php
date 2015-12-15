<?php

/* uniMarcaBundle::layout.html.twig */
class __TwigTemplate_d79fcffc8bdd336ce27654ba29fc1826416e1157a82f70f5567d3ca5d271770d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'contenido' => array($this, 'block_contenido'),
            'menuLateral' => array($this, 'block_menuLateral'),
            'pie' => array($this, 'block_pie'),
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
        echo "     
     
       <div id=\"contenido\">
            ";
        // line 7
        $this->displayBlock('contenido', $context, $blocks);
        // line 10
        echo "        </div>
 
           <div id=\"menuLateral\">
            ";
        // line 13
        $this->displayBlock('menuLateral', $context, $blocks);
        // line 16
        echo "        </div>
 
        <div id=\"pie\">
            ";
        // line 19
        $this->displayBlock('pie', $context, $blocks);
        // line 22
        echo "        </div>
 
 
 
 
 
 
 
 
 
 
 ";
    }

    // line 7
    public function block_contenido($context, array $blocks = array())
    {
        // line 8
        echo "                
                ";
    }

    // line 13
    public function block_menuLateral($context, array $blocks = array())
    {
        // line 14
        echo "                
                ";
    }

    // line 19
    public function block_pie($context, array $blocks = array())
    {
        // line 20
        echo "                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("noticias_buscar_titulolike");
        echo "\"> Buscar por titulo</a>
                ";
    }

    public function getTemplateName()
    {
        return "uniMarcaBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 20,  86 => 19,  81 => 14,  78 => 13,  73 => 8,  70 => 7,  55 => 22,  53 => 19,  48 => 16,  46 => 13,  41 => 10,  39 => 7,  34 => 4,  31 => 3,);
    }
}
