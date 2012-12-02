<?php

/* TrainingBundle:TrainingSession:new.html.twig */
class __TwigTemplate_e52dbfad98abfabb082d51e8ff4e19c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TrainingBundle::layout.html.twig");

        $this->blocks = array(
            'head_title' => array($this, 'block_head_title'),
            'body_container_main' => array($this, 'block_body_container_main'),
            'body_container_footer' => array($this, 'block_body_container_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TrainingBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head_title($context, array $blocks = array())
    {
        // line 4
        echo "    Training Session
";
    }

    // line 7
    public function block_body_container_main($context, array $blocks = array())
    {
        // line 8
        echo "    <form id=\"behavior-form\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("newBehavior"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "behaviorForm"), 'enctype');
        echo " novalidate>
       ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "behaviorForm"), 'widget');
        echo "
       <input type=\"submit\" value=\"Submit\" />
   </form>
";
    }

    // line 14
    public function block_body_container_footer($context, array $blocks = array())
    {
        // line 15
        echo "    Do not even think you can copy this.
";
    }

    public function getTemplateName()
    {
        return "TrainingBundle:TrainingSession:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  56 => 14,  48 => 9,  41 => 8,  38 => 7,  33 => 4,  30 => 3,);
    }
}
