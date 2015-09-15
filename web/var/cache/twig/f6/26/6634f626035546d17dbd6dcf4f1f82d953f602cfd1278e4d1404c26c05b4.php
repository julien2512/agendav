<?php

/* parts/navbar.html */
class __TwigTemplate_f6266634f626035546d17dbd6dcf4f1f82d953f602cfd1278e4d1404c26c05b4 extends Twig_Template
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
        echo "<div class=\"navbar navbar-default\" role=\"navigation\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <span class=\"navbar-brand\">";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</span>
   </div>
   <p class=\"navbar-text navbar-right\" id=\"loading\">
   <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/img/loading.gif\" alt=\"\">
   </p>
   <ul class=\"nav navbar-nav navbar-right\" id=\"usermenu\">
       <li>
       <a class=\"prefs\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "url_generator", array()), "generate", array(0 => "preferences"), "method"), "html", null, true);
        echo "\">
         <i title=\"";
        // line 12
        echo $this->env->getExtension('translator')->getTranslator()->trans("labels.preferences", array(), "messages");
        echo "\" class=\"fa fa-lg fa-wrench\"></i>
       </a>
       </li>
       <li>
       <a class=\"logout\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "url_generator", array()), "generate", array(0 => "logout"), "method"), "html", null, true);
        echo "\">
         <i title=\"";
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans("labels.logout", array(), "messages");
        echo "\" class=\"fa fa-lg fa-power-off\"></i>
       </a>
       </li>
   </ul>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "parts/navbar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  48 => 16,  41 => 12,  37 => 11,  30 => 7,  24 => 4,  19 => 1,);
    }
}
