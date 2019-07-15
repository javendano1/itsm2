<?php

/* itop-portal-base/portal/src/views/bricks/object/modal.html.twig */
class __TwigTemplate_e6a38f1dd49208a6b940a97cc5343b3f97852304c24738fa67d3523023e6ff3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("itop-portal-base/portal/src/views/modal/layout.html.twig", "itop-portal-base/portal/src/views/bricks/object/modal.html.twig", 3);
        $this->blocks = array(
            'pModalTitle' => array($this, 'block_pModalTitle'),
            'pModalBody' => array($this, 'block_pModalBody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "itop-portal-base/portal/src/views/modal/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_pModalTitle($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        if ($this->getAttribute(($context["form"] ?? null), "title", array(), "any", true, true)) {
            // line 7
            echo "\t\t";
            echo $this->getAttribute(($context["form"] ?? null), "title", array());
            echo "
\t";
        }
    }

    // line 11
    public function block_pModalBody($context, array $blocks = array())
    {
        // line 12
        echo "\t";
        $this->loadTemplate((("itop-portal-base/portal/src/views/bricks/object/mode_" . ($context["sMode"] ?? null)) . ".html.twig"), "itop-portal-base/portal/src/views/bricks/object/modal.html.twig", 12)->display(array_merge($context, array("tIsModal" => true)));
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/src/views/bricks/object/modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 12,  43 => 11,  35 => 7,  32 => 6,  29 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "itop-portal-base/portal/src/views/bricks/object/modal.html.twig", "C:\\xampp\\htdocs\\itsm\\env-production\\itop-portal-base\\portal\\src\\views\\bricks\\object\\modal.html.twig");
    }
}
