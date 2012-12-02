<?php

/* OryzoneBoilerplateBundle::html5.html.twig */
class __TwigTemplate_417cf0fa129d9c88f9f771258e9c2b1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'all' => array($this, 'block_all'),
            'head_outer' => array($this, 'block_head_outer'),
            'head' => array($this, 'block_head'),
            'head_meta' => array($this, 'block_head_meta'),
            'head_meta_description' => array($this, 'block_head_meta_description'),
            'head_meta_keywords' => array($this, 'block_head_meta_keywords'),
            'head_title' => array($this, 'block_head_title'),
            'head_css' => array($this, 'block_head_css'),
            'head_js' => array($this, 'block_head_js'),
            'body_outer' => array($this, 'block_body_outer'),
            'body' => array($this, 'block_body'),
            'body_chromeframe' => array($this, 'block_body_chromeframe'),
            'body_container' => array($this, 'block_body_container'),
            'body_container_header' => array($this, 'block_body_container_header'),
            'body_container_main' => array($this, 'block_body_container_main'),
            'body_container_footer' => array($this, 'block_body_container_footer'),
            'body_js' => array($this, 'block_body_js'),
            'body_js_jquery' => array($this, 'block_body_js_jquery'),
            'body_js_jquery_onlineSrc' => array($this, 'block_body_js_jquery_onlineSrc'),
            'body_js_jquery_offlineSrc' => array($this, 'block_body_js_jquery_offlineSrc'),
            'body_js_analytics' => array($this, 'block_body_js_analytics'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('all', $context, $blocks);
    }

    public function block_all($context, array $blocks = array())
    {
        echo "<!doctype html>
  <!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7 ";
        // line 2
        echo twig_escape_filter($this->env, ((array_key_exists("bp_html_classes", $context)) ? (_twig_default_filter($this->getContext($context, "bp_html_classes"), "")) : ("")), "html", null, true);
        echo "\" lang=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("bp_language", $context)) ? (_twig_default_filter($this->getContext($context, "bp_language"), "en")) : ("en")), "html", null, true);
        echo "\" ";
        echo ((array_key_exists("bp_html_attributes", $context)) ? (_twig_default_filter($this->getContext($context, "bp_html_attributes"), "")) : (""));
        echo "> <![endif]-->
  <!--[if IE 7]>    <html class=\"no-js lt-ie9 lt-ie8 ";
        // line 3
        echo twig_escape_filter($this->env, ((array_key_exists("bp_html_classes", $context)) ? (_twig_default_filter($this->getContext($context, "bp_html_classes"), "")) : ("")), "html", null, true);
        echo "\" lang=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("bp_language", $context)) ? (_twig_default_filter($this->getContext($context, "bp_language"), "en")) : ("en")), "html", null, true);
        echo "\" ";
        echo ((array_key_exists("bp_html_attributes", $context)) ? (_twig_default_filter($this->getContext($context, "bp_html_attributes"), "")) : (""));
        echo "> <![endif]-->
  <!--[if IE 8]>    <html class=\"no-js lt-ie9 ";
        // line 4
        echo twig_escape_filter($this->env, ((array_key_exists("bp_html_classes", $context)) ? (_twig_default_filter($this->getContext($context, "bp_html_classes"), "")) : ("")), "html", null, true);
        echo "\" lang=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("bp_language", $context)) ? (_twig_default_filter($this->getContext($context, "bp_language"), "en")) : ("en")), "html", null, true);
        echo "\" ";
        echo ((array_key_exists("bp_html_attributes", $context)) ? (_twig_default_filter($this->getContext($context, "bp_html_attributes"), "")) : (""));
        echo "> <![endif]-->
  <!--[if gt IE 8]><!--> <html class=\"no-js ";
        // line 5
        echo twig_escape_filter($this->env, ((array_key_exists("bp_html_classes", $context)) ? (_twig_default_filter($this->getContext($context, "bp_html_classes"), "")) : ("")), "html", null, true);
        echo "\" lang=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("bp_language", $context)) ? (_twig_default_filter($this->getContext($context, "bp_language"), "en")) : ("en")), "html", null, true);
        echo "\" ";
        echo ((array_key_exists("bp_html_attributes", $context)) ? (_twig_default_filter($this->getContext($context, "bp_html_attributes"), "")) : (""));
        echo "> <!--<![endif]-->
  ";
        // line 6
        $this->displayBlock('head_outer', $context, $blocks);
        // line 36
        echo "  ";
        $this->displayBlock('body_outer', $context, $blocks);
        // line 73
        echo "</html>";
    }

    // line 6
    public function block_head_outer($context, array $blocks = array())
    {
        // line 7
        echo "    <head ";
        echo ((array_key_exists("bp_head_attributes", $context)) ? (_twig_default_filter($this->getContext($context, "bp_head_attributes"), "")) : (""));
        echo ">
      ";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 34
        echo "    </head>
  ";
    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        // line 9
        echo "        ";
        $this->displayBlock('head_meta', $context, $blocks);
        // line 16
        echo "
        <title>";
        // line 17
        $this->displayBlock('head_title', $context, $blocks);
        echo "</title>

        ";
        // line 19
        $this->displayBlock('head_css', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_js', $context, $blocks);
        // line 33
        echo "      ";
    }

    // line 9
    public function block_head_meta($context, array $blocks = array())
    {
        // line 10
        echo "          <meta charset=\"utf-8\">
          <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
          <meta name=\"description\" content=\"";
        // line 12
        $this->displayBlock('head_meta_description', $context, $blocks);
        echo "\">
          <meta name=\"keywords\" content=\"";
        // line 13
        $this->displayBlock('head_meta_keywords', $context, $blocks);
        echo "\">
          <meta name=\"viewport\" content=\"width=device-width\">
        ";
    }

    // line 12
    public function block_head_meta_description($context, array $blocks = array())
    {
    }

    // line 13
    public function block_head_meta_keywords($context, array $blocks = array())
    {
    }

    // line 17
    public function block_head_title($context, array $blocks = array())
    {
    }

    // line 19
    public function block_head_css($context, array $blocks = array())
    {
        // line 20
        echo "          ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8524fb9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8524fb9_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8524fb9_normalize_1.css");
            // line 24
            echo "            <link rel=\"stylesheet\"  href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" >
          ";
            // asset "8524fb9_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8524fb9_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8524fb9_main_2.css");
            echo "            <link rel=\"stylesheet\"  href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" >
          ";
        } else {
            // asset "8524fb9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8524fb9") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8524fb9.css");
            echo "            <link rel=\"stylesheet\"  href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" >
          ";
        }
        unset($context["asset_url"]);
        // line 26
        echo "        ";
    }

    // line 28
    public function block_head_js($context, array $blocks = array())
    {
        // line 29
        echo "          ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "70539ca_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_70539ca_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/70539ca_modernizr-2.6.1.min_1.js");
            // line 30
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
          ";
        } else {
            // asset "70539ca"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_70539ca") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/70539ca.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
          ";
        }
        unset($context["asset_url"]);
        // line 32
        echo "        ";
    }

    // line 36
    public function block_body_outer($context, array $blocks = array())
    {
        // line 37
        echo "    <body ";
        echo ((array_key_exists("bp_body_attributes", $context)) ? (_twig_default_filter($this->getContext($context, "bp_body_attributes"), "")) : (""));
        echo ">
      ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "    </body>
  ";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        // line 39
        echo "        ";
        $this->displayBlock('body_chromeframe', $context, $blocks);
        // line 42
        echo "        ";
        $this->displayBlock('body_container', $context, $blocks);
        // line 55
        echo "        ";
        $this->displayBlock('body_js', $context, $blocks);
        // line 70
        echo "      ";
    }

    // line 39
    public function block_body_chromeframe($context, array $blocks = array())
    {
        // line 40
        echo "          <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href=\"http://browsehappy.com/\">Upgrade to a different browser</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
        ";
    }

    // line 42
    public function block_body_container($context, array $blocks = array())
    {
        // line 43
        echo "          <div id=\"container\">
            <header>
              ";
        // line 45
        $this->displayBlock('body_container_header', $context, $blocks);
        // line 46
        echo "            </header>
            <div role=\"main\">
              ";
        // line 48
        $this->displayBlock('body_container_main', $context, $blocks);
        // line 49
        echo "            </div>
            <footer>
              ";
        // line 51
        $this->displayBlock('body_container_footer', $context, $blocks);
        // line 52
        echo "            </footer>
          </div>
        ";
    }

    // line 45
    public function block_body_container_header($context, array $blocks = array())
    {
    }

    // line 48
    public function block_body_container_main($context, array $blocks = array())
    {
    }

    // line 51
    public function block_body_container_footer($context, array $blocks = array())
    {
    }

    // line 55
    public function block_body_js($context, array $blocks = array())
    {
        // line 56
        echo "          ";
        $this->displayBlock('body_js_jquery', $context, $blocks);
        // line 59
        echo "          ";
        $this->displayBlock('body_js_analytics', $context, $blocks);
        // line 69
        echo "        ";
    }

    // line 56
    public function block_body_js_jquery($context, array $blocks = array())
    {
        echo "<script src=\"";
        $this->displayBlock('body_js_jquery_onlineSrc', $context, $blocks);
        echo "\"></script>
            <script>window.jQuery || document.write('<script src=\"";
        // line 57
        $this->displayBlock('body_js_jquery_offlineSrc', $context, $blocks);
        echo "\"><\\/script>')</script>
          ";
    }

    // line 56
    public function block_body_js_jquery_onlineSrc($context, array $blocks = array())
    {
        echo "//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js";
    }

    // line 57
    public function block_body_js_jquery_offlineSrc($context, array $blocks = array())
    {
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a431b34_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a431b34_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a431b34_jquery-1.8.0.min_1.js");
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
        } else {
            // asset "a431b34"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a431b34") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a431b34.js");
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
        }
        unset($context["asset_url"]);
    }

    // line 59
    public function block_body_js_analytics($context, array $blocks = array())
    {
        // line 60
        echo "            ";
        if (array_key_exists("bp_analytics_id", $context)) {
            // line 61
            echo "            <script>
              var _gaq=[['_setAccount','";
            // line 62
            echo twig_escape_filter($this->env, $this->getContext($context, "bp_analytics_id"), "html", null, true);
            echo "'],['_trackPageview']];
              (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
                g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
                s.parentNode.insertBefore(g,s)}(document,'script'));
            </script>
            ";
        }
        // line 68
        echo "          ";
    }

    public function getTemplateName()
    {
        return "OryzoneBoilerplateBundle::html5.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  366 => 68,  357 => 62,  354 => 61,  351 => 60,  348 => 59,  333 => 57,  327 => 56,  321 => 57,  314 => 56,  310 => 69,  307 => 59,  304 => 56,  301 => 55,  296 => 51,  291 => 48,  286 => 45,  280 => 52,  278 => 51,  274 => 49,  272 => 48,  268 => 46,  266 => 45,  262 => 43,  259 => 42,  254 => 40,  251 => 39,  247 => 70,  244 => 55,  241 => 42,  238 => 39,  235 => 38,  230 => 71,  228 => 38,  223 => 37,  220 => 36,  216 => 32,  202 => 30,  197 => 29,  194 => 28,  190 => 26,  170 => 24,  165 => 20,  162 => 19,  157 => 17,  152 => 13,  147 => 12,  140 => 13,  136 => 12,  132 => 10,  129 => 9,  125 => 33,  123 => 28,  120 => 27,  118 => 19,  113 => 17,  110 => 16,  107 => 9,  104 => 8,  99 => 34,  97 => 8,  92 => 7,  89 => 6,  85 => 73,  82 => 36,  80 => 6,  72 => 5,  64 => 4,  43 => 8,  40 => 1,  32 => 4,  29 => 3,  59 => 15,  56 => 3,  48 => 2,  41 => 8,  38 => 7,  33 => 4,  30 => 3,);
    }
}
