<?php

/* page.html */
class __TwigTemplate_dc542a7758c075b34fe8a063e0fbf12a3c1a5d8f58ff49835687a8294eb33a8d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layouts/layout.html", "page.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<h1 style=\"text-align: center;\">Page 199</h1>
\t<h5 style=\"text-align: center;\"><a href=\"/\">Back</a></h5>
\t<ul class=\"list-group\">
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 8
            echo "\t\t\t<li class=\"list-group-item d-flex justify-content-between align-items-center\">
    \t\t\t";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "name", array()), "html", null, true);
            echo "
    \t\t\t<span class=\"badge badge-primary badge-pill\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "date", array()), "html", null, true);
            echo "</span>
  \t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t</ul>
";
    }

    public function getTemplateName()
    {
        return "page.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  51 => 10,  47 => 9,  44 => 8,  40 => 7,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "page.html", "/var/www/full.loc/template/page.html");
    }
}
