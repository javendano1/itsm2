<?php

/* itop-portal-base/portal/src/views/bricks/object/layout.html.twig */
class __TwigTemplate_1ca3fd50b57adc9ae980344106e02555370516bf0311eaa75e7d8e0010bc162b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("itop-portal-base/portal/src/views/bricks/layout.html.twig", "itop-portal-base/portal/src/views/bricks/object/layout.html.twig", 3);
        $this->blocks = array(
            'pPageBodyClass' => array($this, 'block_pPageBodyClass'),
            'pMainHeader' => array($this, 'block_pMainHeader'),
            'pMainContentHolder' => array($this, 'block_pMainContentHolder'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "itop-portal-base/portal/src/views/bricks/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_pPageBodyClass($context, array $blocks = array())
    {
        $this->displayParentBlock("pPageBodyClass", $context, $blocks);
        echo " page_object_brick page_object_brick_as_";
        echo twig_escape_filter($this->env, (isset($context["sMode"]) ? $context["sMode"] : null), "html", null, true);
    }

    // line 7
    public function block_pMainHeader($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"col-xs-12\" id=\"main-header-title\">
\t\t";
        // line 9
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array(), "any", true, true)) {
            // line 10
            echo "\t\t\t<h2>";
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array());
            echo "</h2>
\t\t";
        }
        // line 12
        echo "\t</div>
";
    }

    // line 15
    public function block_pMainContentHolder($context, array $blocks = array())
    {
        // line 16
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t";
        // line 18
        $this->loadTemplate((("itop-portal-base/portal/src/views/bricks/object/mode_" . (isset($context["sMode"]) ? $context["sMode"] : null)) . ".html.twig"), "itop-portal-base/portal/src/views/bricks/object/layout.html.twig", 18)->display($context);
        // line 19
        echo "\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/src/views/bricks/object/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 19,  64 => 18,  60 => 16,  57 => 15,  52 => 12,  46 => 10,  44 => 9,  41 => 8,  38 => 7,  30 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "itop-portal-base/portal/src/views/bricks/object/layout.html.twig", "C:\\wamp64\\www\\itsm2\\env-production\\itop-portal-base\\portal\\src\\views\\bricks\\object\\layout.html.twig");
    }
}
