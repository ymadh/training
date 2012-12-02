<?php

/* TrainingBundle::layout.html.twig */
class __TwigTemplate_973517c813ee4009a4811ab8f21db466 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OryzoneBoilerplateBundle::html5.html.twig");

        $this->blocks = array(
            'head_css' => array($this, 'block_head_css'),
            'body_container_header' => array($this, 'block_body_container_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OryzoneBoilerplateBundle::html5.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head_css($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "44de94e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_44de94e_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/44de94e_global_1.css");
            // line 7
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
    ";
        } else {
            // asset "44de94e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_44de94e") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/44de94e.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
    }

    // line 11
    public function block_body_container_header($context, array $blocks = array())
    {
        // line 12
        echo "    <div id=\"toolbar\">test</div>
";
    }

    public function getTemplateName()
    {
        return "TrainingBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  53 => 11,  37 => 7,  32 => 4,  29 => 3,);
    }
}
