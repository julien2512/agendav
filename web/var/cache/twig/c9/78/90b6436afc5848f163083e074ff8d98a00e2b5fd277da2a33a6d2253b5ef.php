<?php

/* jsconfig.html */
class __TwigTemplate_c97890b6436afc5848f163083e074ff8d98a00e2b5fd277da2a33a6d2253b5ef extends Twig_Template
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
        echo "var AgenDAVConf = ";
        echo twig_jsonencode_filter((isset($context["site_config"]) ? $context["site_config"] : null));
        echo ";

var AgenDAVUserPrefs = ";
        // line 3
        echo twig_jsonencode_filter((isset($context["preferences"]) ? $context["preferences"] : null));
        echo ";

function set_default_colorpicker_options() {
  \$.fn.colorPicker.defaultColors = AgenDAVConf.calendar_colors;
}

";
    }

    public function getTemplateName()
    {
        return "jsconfig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  19 => 1,);
    }
}
