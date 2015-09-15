<?php

/* parts/sidebar.html */
class __TwigTemplate_5f2efb41d15edb0260311402a6521d12617a16581b4e35c721fc014dc60aa3c8 extends Twig_Template
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
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 2
            echo "<div id=\"logo\" class=\"block\">
  <img src=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
            echo "/img/";
            echo twig_escape_filter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true);
            echo "\" alt=\"Logo\">
</div>
";
        }
        // line 6
        echo "<div id=\"shortcuts\" class=\"block\">
   <button id=\"shortcut_add_event\" class=\"btn btn-default btn-block\">
     <i class=\"fa fa-plus\"></i> ";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("labels.createevent", array(), "messages");
        // line 9
        echo "   </button>
 </div>

 <div class=\"block calendar_list panel panel-default\" id=\"own_calendar_list\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">";
        // line 14
        echo $this->env->getExtension('translator')->getTranslator()->trans("labels.calendars", array(), "messages");
        echo "</h3>
  </div>
  <div class=\"panel-body\">
   <ul class=\"fa-ul\">
   </ul>
   <div class=\"buttons\">
   <i title=\"";
        // line 20
        echo $this->env->getExtension('translator')->getTranslator()->trans("create", array(), "labels");
        echo "\" id=\"calendar_add\" class=\"pseudobutton fa fa-plus\"></i>
   </div>
  </div><!-- panel-body -->
 </div><!-- panel -->

 <div class=\"block calendar_list panel panel-default shared_calendars \" id=\"shared_calendar_list\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">";
        // line 27
        echo $this->env->getExtension('translator')->getTranslator()->trans("labels.shared_calendars", array(), "messages");
        echo "</h3>
  </div>
  <div class=\"panel-body\">
   <ul class=\"fa-ul\">
   </ul>
   <div class=\"buttons\">
    <span id=\"toggle_all_shared_calendars\" class=\"pseudobutton hide_all\"
      title=\"";
        // line 34
        echo $this->env->getExtension('translator')->getTranslator()->trans("labels.toggleallcalendars", array(), "messages");
        echo ">\"
    ><i class=\"fa fa-eye-slash fa-lg\"></i></span>
   </div>
  </div><!-- panel-body -->
 </div><!-- panel -->

 <div id=\"footer\">
   <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/img/agendav_small.png\" alt=\"AgenDAV\">
   ";
        // line 42
        if ((isset($context["footer"]) ? $context["footer"] : null)) {
            // line 43
            echo "   <p>";
            echo twig_escape_filter($this->env, (isset($context["footer"]) ? $context["footer"] : null), "html", null, true);
            echo "</p>
   ";
        }
        // line 45
        echo " </div> <!-- footer -->
";
    }

    public function getTemplateName()
    {
        return "parts/sidebar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 45,  90 => 43,  88 => 42,  84 => 41,  74 => 34,  64 => 27,  54 => 20,  45 => 14,  38 => 9,  36 => 8,  32 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}
