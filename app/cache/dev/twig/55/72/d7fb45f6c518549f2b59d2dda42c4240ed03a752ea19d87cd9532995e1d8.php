<?php

/* uniMarcaBundle:categorias:encontrado.html.twig */
class __TwigTemplate_5572d7fb45f6c518549f2b59d2dda42c4240ed03a752ea19d87cd9532995e1d8 extends Twig_Template
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
        echo "   <center><h1>Listado de categorias";
        echo twig_escape_filter($this->env, (isset($context["descCat"]) ? $context["descCat"] : $this->getContext($context, "descCat")), "html", null, true);
        echo "</h1></center>

        <tbody>
        ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 8
            echo "            
                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorias_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descCat"), "html", null, true);
            echo "</a>
                <br>
                
                
            
                
                
                
               
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("noticias_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
 ";
    }

    public function getTemplateName()
    {
        return "uniMarcaBundle:categorias:encontrado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 24,  63 => 19,  45 => 9,  42 => 8,  38 => 7,  31 => 4,  28 => 3,);
    }
}
