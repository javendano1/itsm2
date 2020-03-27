<?php

/* itop-portal-base/portal/src/views/bricks/object/mode_apply_stimulus.html.twig */
class __TwigTemplate_dbf537a51a42da82bd74a4cdec6d746021fc5dfaf3361ea98bd95c4d931a2059 extends Twig_Template
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
        return new Twig_Source("", "itop-portal-base/portal/src/views/bricks/object/mode_apply_stimulus.html.twig", "C:\\wamp64\\www\\itsm2\\env-production\\itop-portal-base\\portal\\src\\views\\bricks\\object\\mode_apply_stimulus.html.twig");
    }
}
