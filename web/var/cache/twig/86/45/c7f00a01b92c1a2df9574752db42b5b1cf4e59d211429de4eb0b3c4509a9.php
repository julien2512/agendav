<?php

/* calendar.html */
class __TwigTemplate_8645c7f00a01b92c1a2df9574752db42b5b1cf4e59d211429de4eb0b3c4509a9 extends Twig_Template
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
        echo "  <div class=\"container-fluid\">
   <div class=\"wrapper\">

    <div id=\"sidebar\">
      ";
        // line 9
        $this->env->loadTemplate("parts/sidebar.html")->display($context);
        // line 10
        echo "    </div>

    <div id=\"content\">
      <div id=\"calendar_view\"></div>
    </div>

   </div>
  </div>
";
    }

    // line 20
    public function block_bottom($context, array $blocks = array())
    {
        // line 21
        echo "  ";
        $this->env->loadTemplate("parts/agendavjs.html")->display($context);
        // line 22
        echo "  ";
        $this->env->loadTemplate("parts/bottom.html")->display($context);
    }

    public function getTemplateName()
    {
        return "calendar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  65 => 21,  62 => 20,  50 => 10,  48 => 9,  42 => 5,  40 => 4,  37 => 3,  11 => 1,);
    }
}
