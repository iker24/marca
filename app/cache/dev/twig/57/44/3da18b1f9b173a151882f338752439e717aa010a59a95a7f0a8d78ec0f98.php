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
        echo "   ";
        // line 5
        echo "
<script type=\"text/javascript\">
    function submitform(obj) {
        document.forms[\"selectCats\"].submit();
    }
</script>

";
        // line 13
        echo "    
    
    
    
    Buscar una categoria
    
<form id=\"selectCats\" action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("categorias_encontrado");
        echo "\" method=\"POST\">
 
  <select name=\"nombre\" onChange=\"submitform(this)\">
    <option value=\"Todas\">Todas</option>
    ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 24
            echo "        <option value=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descCat"), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descCat"), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo " </select> 
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
        return array (  72 => 26,  61 => 24,  57 => 23,  50 => 19,  42 => 13,  33 => 5,  31 => 4,  28 => 3,);
    }
}
