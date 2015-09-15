<?php

/* login-openid.html */
class __TwigTemplate_be26e8471818839500d6313820affc820ba08aa328506da651b124af7138a82e extends Twig_Template
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
  <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\">Connexion</a>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "login-openid.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  80 => 24,  72 => 19,  67 => 16,  65 => 15,  62 => 14,  54 => 11,  51 => 10,  49 => 9,  43 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
