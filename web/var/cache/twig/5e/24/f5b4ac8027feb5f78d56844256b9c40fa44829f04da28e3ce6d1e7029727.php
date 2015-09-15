<?php

/* preferences.html */
class __TwigTemplate_5e24f5b4ac8027feb5f78d56844256b9c40fa44829f04da28e3ce6d1e7029727 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("layout.html");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        $this->env->loadTemplate("parts/navbar.html")->display($context);
        // line 5
        echo "  <div class=\"container\">
    <h1>";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("labels.preferences", array(), "messages");
        echo "</h1>

    <div class=\"preferences-container\">
    <form method=\"post\" id=\"prefs_form\">
    <input type=\"hidden\" name=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["csrf_token"]) ? $context["csrf_token"] : null), "getId", array(), "method"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["csrf_token"]) ? $context["csrf_token"] : null), "getValue", array(), "method"), "html", null, true);
        echo "\">

    <div class=\"form-group\">
        <label for=\"language\">";
        // line 13
        echo $this->env->getExtension('translator')->getTranslator()->trans("labels.language", array(), "messages");
        echo "</label>
        <select class=\"form-control\" name=\"language\">
            ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["available_languages"]) ? $context["available_languages"] : null));
        foreach ($context['_seq'] as $context["language_id"] => $context["language_name"]) {
            // line 16
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["language_id"], "html", null, true);
            echo "\"";
            if (((isset($context["language"]) ? $context["language"] : null) == $context["language_id"])) {
                echo " selected=\"selected\"";
            }
            echo ">
                ";
            // line 17
            echo twig_escape_filter($this->env, $context["language_name"], "html", null, true);
            echo "
            </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['language_id'], $context['language_name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </select>
    </div>

    <div class=\"form-group\">
        <label for=\"date_format\">";
        // line 24
        echo $this->env->getExtension('translator')->getTranslator()->trans("labels.date_format", array(), "messages");
        echo "</label>
        <br>
        <label class=\"radio-inline\">
          <input type=\"radio\" name=\"date_format\" ";
        // line 27
        if (((isset($context["date_format"]) ? $context["date_format"] : null) == "ymd")) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"ymd\"> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "
        </label>
        <label class=\"radio-inline\">
          <input type=\"radio\" name=\"date_format\" ";
        // line 30
        if (((isset($context["date_format"]) ? $context["date_format"] : null) == "dmy")) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"dmy\"> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "
        </label>
        <label class=\"radio-inline\">
          <input type=\"radio\" name=\"date_format\" ";
        // line 33
        if (((isset($context["date_format"]) ? $context["date_format"] : null) == "mdy")) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"mdy\"> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "m/d/Y"), "html", null, true);
        echo "
        </label>
    </div>

    <div class=\"form-group\">
        <label for=\"time_format\">";
        // line 38
        echo $this->env->getExtension('translator')->getTranslator()->trans("labels.time_format", array(), "messages");
        echo "</label>
        <br>
        <label class=\"radio-inline\">
          <input type=\"radio\" name=\"time_format\" ";
        // line 41
        if (((isset($context["time_format"]) ? $context["time_format"] : null) == "24")) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"24\"> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "H:i"), "html", null, true);
        echo "
        </label>
        <label class=\"radio-inline\">
          <input type=\"radio\" name=\"time_format\" ";
        // line 44
        if (((isset($context["time_format"]) ? $context["time_format"] : null) == "12")) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"12\"> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "h:i a"), "html", null, true);
        echo "
        </label>
    </div>

    <div class=\"form-group\">
        <label for=\"weekstart\">";
        // line 49
        echo $this->env->getExtension('translator')->getTranslator()->trans("labels.weekstart", array(), "messages");
        echo "</label>
        <br>
        <label class=\"radio-inline\">
          <input type=\"radio\" name=\"weekstart\" ";
        // line 52
        if (((isset($context["weekstart"]) ? $context["weekstart"] : null) == "0")) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\"> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("labels.sunday", array(), "messages");
        // line 53
        echo "        </label>
        <label class=\"radio-inline\">
          <input type=\"radio\" name=\"weekstart\" ";
        // line 55
        if (((isset($context["weekstart"]) ? $context["weekstart"] : null) == "1")) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"1\"> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("labels.monday", array(), "messages");
        // line 56
        echo "        </label>
    </div>

    <div class=\"form-group\">
    <label for=\"timezone\">";
        // line 60
        echo $this->env->getExtension('translator')->getTranslator()->trans("labels.timezone", array(), "messages");
        echo "</label>
        <select class=\"form-control\" name=\"timezone\">
            ";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["available_timezones"]) ? $context["available_timezones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone_name"]) {
            // line 63
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["timezone_name"], "html", null, true);
            echo "\"";
            if (((isset($context["timezone"]) ? $context["timezone"] : null) == $context["timezone_name"])) {
                echo " selected=\"selected\"";
            }
            echo ">
                ";
            // line 64
            echo twig_escape_filter($this->env, $context["timezone_name"], "html", null, true);
            echo "
            </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone_name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        </select>
        <span class=\"help-block\">";
        // line 68
        echo $this->env->getExtension('translator')->getTranslator()->trans("messages.help_timezone", array(), "messages");
        echo "</span>
    </div>

    <div class=\"form-group\">
        <label for=\"default_calendar\">";
        // line 72
        echo $this->env->getExtension('translator')->getTranslator()->trans("labels.defaultcalendar", array(), "messages");
        echo "</label>
        <select class=\"form-control\" name=\"default_calendar\">
            ";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calendars"]) ? $context["calendars"] : null));
        foreach ($context['_seq'] as $context["calendar_id"] => $context["name"]) {
            // line 75
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["calendar_id"], "html", null, true);
            echo "\"";
            if (((isset($context["default_calendar"]) ? $context["default_calendar"] : null) == $context["calendar_id"])) {
                echo " selected=\"selected\"";
            }
            echo ">
                ";
            // line 76
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "
            </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['calendar_id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "        </select>
        <span class=\"help-block\">";
        // line 80
        echo $this->env->getExtension('translator')->getTranslator()->trans("messages.help_defaultcalendar", array(), "messages");
        echo "</span>
    </div>

    <div id=\"prefs_buttons\">
      <input type=\"submit\" class=\"btn btn-success\" value=\"";
        // line 84
        echo $this->env->getExtension('translator')->getTranslator()->trans("labels.save", array(), "messages");
        echo "\">

        <a href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "url_generator", array()), "generate", array(0 => "calendar"), "method"), "html", null, true);
        echo "\" id=\"return_button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("labels.return", array(), "messages");
        echo "</a>
    </div>

    </form>


    </div>
  </div>
";
    }

    // line 96
    public function block_bottom($context, array $blocks = array())
    {
        // line 97
        echo "  ";
        $this->env->loadTemplate("parts/bottom.html")->display($context);
    }

    public function getTemplateName()
    {
        return "preferences.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 97,  281 => 96,  266 => 86,  261 => 84,  254 => 80,  251 => 79,  242 => 76,  233 => 75,  229 => 74,  224 => 72,  217 => 68,  214 => 67,  205 => 64,  196 => 63,  192 => 62,  187 => 60,  181 => 56,  175 => 55,  171 => 53,  165 => 52,  159 => 49,  147 => 44,  137 => 41,  131 => 38,  119 => 33,  109 => 30,  99 => 27,  93 => 24,  87 => 20,  78 => 17,  69 => 16,  65 => 15,  60 => 13,  52 => 10,  45 => 6,  42 => 5,  40 => 4,  37 => 3,  11 => 1,);
    }
}
