<?php

/* itop-portal-base/portal/src/views/helpers/loader.html.twig */
class __TwigTemplate_4cf28167191ae2bba7932be16bf709db3c024de1ccec3c7150ed35cd5e71a710 extends Twig_Template
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
        return new Twig_Source("", "itop-portal-base/portal/src/views/helpers/loader.html.twig", "/home/alltic/public_html/itsm/env-production/itop-portal-base/portal/src/views/helpers/loader.html.twig");
    }
}
