<?php

/* layouts/layout.html */
class __TwigTemplate_199d3a9b262a9a4e2db29ad2fd0719af41654bacfbd456bdb5c1556802f2c586 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>My Webpage</title>
\t\t<link rel=\"icon\" type=\"image/png\" href=\"/favicon.png\" />
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,600,700\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css\" integrity=\"sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4\" crossorigin=\"anonymous\">
        <style>
\t        body {
\t            background-color: #fff;
\t            font-family: 'Montserrat', sans-serif;
\t        }
    \t</style>
    </head>
    <body>
        
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 21
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>
    </body>
</html>";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layouts/layout.html";
    }

    public function getDebugInfo()
    {
        return array (  59 => 20,  47 => 21,  45 => 20,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layouts/layout.html", "/var/www/full.loc/template/layouts/layout.html");
    }
}
