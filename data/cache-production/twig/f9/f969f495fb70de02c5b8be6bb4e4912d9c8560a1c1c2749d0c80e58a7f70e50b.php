<?php

/* itop-portal-base/portal/src/views/bricks/object/mode_apply_stimulus.html.twig */
class __TwigTemplate_37526709d59795a0deadf8a14dd24f38f57597580fa3a5076ea189f0b99e76d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("itop-portal-base/portal/src/views/bricks/object/mode_create.html.twig", "itop-portal-base/portal/src/views/bricks/object/mode_apply_stimulus.html.twig", 3);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "itop-portal-base/portal/src/views/bricks/object/mode_create.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/src/views/bricks/object/mode_apply_stimulus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "itop-portal-base/portal/src/views/bricks/object/mode_apply_stimulus.html.twig", "/home/alltic/public_html/itsm/env-production/itop-portal-base/portal/src/views/bricks/object/mode_apply_stimulus.html.twig");
    }
}
