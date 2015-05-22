<?php

/* default/createArticle.html.twig */
class __TwigTemplate_9e0e7e7156b0ffb7a954d33c174efa2e4c5e833543cbe6e80179e1bdba2ffb89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/createArticle.html.twig", 1);
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
        echo "<h2>Create Content</h2>
<form id=\"article\" name=\"article\" action=\"/postArticle\" method=\"POST\">
<input type=\"text\" size=\"60\" name=\"headline\" placeholder=\"Headline\"/><br/>
<textarea rows=\"15\" cols=\"58\" name=\"content\" placeholder=\"Content\"></textarea><br/>
<input type=\"text\" size=\"60\" name=\"creator\" placeholder=\"Author\"/><br/>
<input type=\"submit\" value=\"Comment\"/>
</form>
    
";
    }

    public function getTemplateName()
    {
        return "default/createArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
