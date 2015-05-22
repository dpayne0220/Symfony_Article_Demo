<?php

/* :default:viewArticle.html.twig */
class __TwigTemplate_2eca9fb72ac77a2e227c061d3241d241dccdb0f0c994bca7bb9a7f85e51815bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:viewArticle.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<a href=\"/\">List Articles</a><br/>
<h2>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "headline", array()), "html", null, true);
        echo "</h2>
<p>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "content", array()), "html", null, true);
        echo "</p>
<p>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "creator", array()), "html", null, true);
        echo "&nbsp;&nbsp;";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "created", array()), "Y-m-d"), "html", null, true);
        echo "</p>
<br/><br/><br/>
<h3>Comments:</h3>
<hr/>
";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 12
            echo "
    ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "comment", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "name", array()), "html", null, true);
            echo "<br/>
    <hr/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "<br/>
<form id=\"comment\" name=\"comment\" action=\"/comment/";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "html", null, true);
        echo "\" method=\"POST\">
<input type=\"text\" size=\"60\" name=\"name\" placeholder=\"Name\"/><br/>
<textarea rows=\"3\" cols=\"58\" name=\"comment\" placeholder=\"Comment\"></textarea><br/>
<input type=\"submit\" value=\"Comment\"/>
</form>
    
";
    }

    public function getTemplateName()
    {
        return ":default:viewArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 17,  69 => 16,  58 => 13,  55 => 12,  51 => 11,  42 => 7,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
