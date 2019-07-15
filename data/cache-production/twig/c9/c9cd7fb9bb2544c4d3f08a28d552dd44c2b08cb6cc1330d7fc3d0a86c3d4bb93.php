<?php

/* itop-portal-base/portal/src/views/helpers/loader.html.twig */
class __TwigTemplate_a0e226158c9dfd8d520f5607716997a5e0ffae57b337612074443621d8056445 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"content_loader\">
\t<div class=\"icon glyphicon glyphicon-refresh\"></div>
\t<div class=\"message\">
\t\t";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array("Page:PleaseWait")), "html", null, true);
        echo "
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/src/views/helpers/loader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "itop-portal-base/portal/src/views/helpers/loader.html.twig", "C:\\xampp\\htdocs\\itsm2\\env-production\\itop-portal-base\\portal\\src\\views\\helpers\\loader.html.twig");
    }
}
