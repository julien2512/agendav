<?php

/* parts/agendavjs.html */
class __TwigTemplate_20475565b622421b01dcc08932279b1a6933790dc21f97b5e320f27284bee5e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script language=\"JavaScript\" type=\"text/javascript\" src=\"";
        echo $this->env->getExtension('routing')->getPath("settings.js");
        echo "\"></script>
<script language=\"JavaScript\" type=\"text/javascript\">
//<![CDATA[
var translations = ";
        // line 4
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator", array()), "getMessages", array(), "method"), "messages", array()));
        echo ";
var csrf_id = ";
        // line 5
        echo twig_jsonencode_filter($this->getAttribute((isset($context["csrf_token"]) ? $context["csrf_token"] : null), "getId", array(), "method"));
        echo ";
var csrf_value = ";
        // line 6
        echo twig_jsonencode_filter($this->getAttribute((isset($context["csrf_token"]) ? $context["csrf_token"] : null), "getValue", array(), "method"));
        echo ";
//]]>
</script>
";
    }

    public function getTemplateName()
    {
        return "parts/agendavjs.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  30 => 5,  26 => 4,  19 => 1,);
    }
}
