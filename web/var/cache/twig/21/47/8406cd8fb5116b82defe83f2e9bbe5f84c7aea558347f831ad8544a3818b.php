<?php

/* login.html */
class __TwigTemplate_21478406cd8fb5116b82defe83f2e9bbe5f84c7aea558347f831ad8544a3818b extends Twig_Template
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
        echo "<div class=\"container\">
<div class=\"page-header\">
  <h1>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h1>
</div>

";
        // line 9
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 10
            echo "<div id=\"logo\" class=\"block\">
  <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
            echo "/img/";
            echo twig_escape_filter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true);
            echo "\" alt=\"Logo\">
</div>
";
        }
        // line 14
        echo "
";
        // line 15
        if (array_key_exists("error", $context)) {
            // line 16
            echo "<div class=\"ui-widget loginerrors\">
 <div class=\"ui-state-error ui-corner-all\" style=\"padding: 0 .7em;\">
  <p><span class=\"ui-icon ui-icon-alert\" style=\"float: left; margin-right: .3em;\"></span> 
  ";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null));
            echo "
  </p>
  </div>
</div>
";
        }
        // line 24
        echo "
<div class=\"loginform ui-corner-all\">
  <form method=\"post\" action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" class=\"form-horizontal\">
    <input type=\"hidden\" name=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["csrf_token"]) ? $context["csrf_token"] : null), "getId", array(), "method"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["csrf_token"]) ? $context["csrf_token"] : null), "getValue", array(), "method"), "html", null, true);
        echo "\">
    <div class=\"form-group\">
      <label class=\"col-sm-3 control-label\" for=\"user\">";
        // line 29
        echo $this->env->getExtension('translator')->getTranslator()->trans("labels.username", array(), "messages");
        echo "</label>
      <div class=\"col-sm-9\"><input name=\"user\" class=\"form-control\" type=\"text\" autofocus=\"autofocus\"></div>
    </div>

    <div class=\"form-group\">
      <label class=\"col-sm-3 control-label\" for=\"password\">";
        // line 34
        echo $this->env->getExtension('translator')->getTranslator()->trans("labels.password", array(), "messages");
        echo "</label>
      <div class=\"col-sm-9\"><input name=\"password\" class=\"form-control\" type=\"password\"></div>
    </div>

    <input name=\"login\" value=\"";
        // line 38
        echo $this->env->getExtension('translator')->getTranslator()->trans("labels.login", array(), "messages");
        echo "\" type=\"submit\" class=\"btn btn-success\">
  </form>

</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 38,  103 => 34,  95 => 29,  88 => 27,  84 => 26,  80 => 24,  72 => 19,  67 => 16,  65 => 15,  62 => 14,  54 => 11,  51 => 10,  49 => 9,  43 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
