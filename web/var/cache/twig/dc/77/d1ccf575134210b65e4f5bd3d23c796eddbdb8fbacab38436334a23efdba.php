<?php

/* layout.html */
class __TwigTemplate_dc77d1ccf575134210b65e4f5bd3d23c796eddbdb8fbacab38436334a23efdba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "favicon.ico\" />
        <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
        ";
        // line 7
        if (array_key_exists("stylesheets", $context)) {
            // line 8
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stylesheets"]) ? $context["stylesheets"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
                // line 9
                echo "            <link href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
                echo "/css/";
                echo twig_escape_filter($this->env, $context["stylesheet"], "html", null, true);
                echo "\" rel=\"stylesheet\" type=\"text/css\" />
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "        ";
        }
        // line 12
        echo "
        ";
        // line 13
        if (array_key_exists("print_stylesheets", $context)) {
            // line 14
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["print_stylesheets"]) ? $context["print_stylesheets"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
                // line 15
                echo "            <link href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
                echo "/css/";
                echo twig_escape_filter($this->env, $context["stylesheet"], "html", null, true);
                echo "\" rel=\"stylesheet\" media=\"print\" type=\"text/css\" />
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        ";
        }
        // line 18
        echo "<!--[if lt IE 9]>
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "js/libs/es5-shim.js\"></script>
<![endif]-->
    </head>
    <body>
        ";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        // line 24
        echo "        ";
        $this->displayBlock('bottom', $context, $blocks);
        // line 25
        echo "    </body>
</html>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
    }

    // line 24
    public function block_bottom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 24,  101 => 23,  95 => 25,  92 => 24,  90 => 23,  83 => 19,  80 => 18,  77 => 17,  66 => 15,  61 => 14,  59 => 13,  56 => 12,  53 => 11,  42 => 9,  37 => 8,  35 => 7,  30 => 5,  26 => 4,  21 => 1,);
    }
}
