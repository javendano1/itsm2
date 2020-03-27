<?php

/* itop-portal-base/portal/src/views/bricks/layout.html.twig */
class __TwigTemplate_388003a71481f2d5e8d50437e798c6d5eef311752d50e323168952bd5e912723 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'pPageTitle' => array($this, 'block_pPageTitle'),
            'pPageBodyClass' => array($this, 'block_pPageBodyClass'),
            'pMainHeader' => array($this, 'block_pMainHeader'),
            'pMainHeaderTitle' => array($this, 'block_pMainHeaderTitle'),
            'pMainHeaderActions' => array($this, 'block_pMainHeaderActions'),
            'pMainContent' => array($this, 'block_pMainContent'),
            'pMainContentHolder' => array($this, 'block_pMainContentHolder'),
            'pPageLiveScriptHelpers' => array($this, 'block_pPageLiveScriptHelpers'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "combodo.portal.instance.conf", array(), "array"), "properties", array()), "templates", array()), "layout", array()), "itop-portal-base/portal/src/views/bricks/layout.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_pPageTitle($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        // line 7
        echo "\t";
        if (((array_key_exists("oBrick", $context) &&  !(null === (isset($context["oBrick"]) ? $context["oBrick"] : null))) && ($this->getAttribute((isset($context["oBrick"]) ? $context["oBrick"] : null), "GetTitle", array(), "method") != ""))) {
            // line 8
            echo "\t\t";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array($this->getAttribute((isset($context["oBrick"]) ? $context["oBrick"] : null), "GetTitle", array(), "method"))), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_constant("ITOP_APPLICATION_SHORT"), "html", null, true);
            echo "
\t";
        } else {
            // line 10
            echo "\t\t";
            $this->displayParentBlock("pPageTitle", $context, $blocks);
            echo "
\t";
        }
    }

    // line 14
    public function block_pPageBodyClass($context, array $blocks = array())
    {
        $this->displayParentBlock("pPageBodyClass", $context, $blocks);
        echo " ";
        if ((array_key_exists("oBrick", $context) &&  !(null === (isset($context["oBrick"]) ? $context["oBrick"] : null)))) {
            echo "page_brick_of_id_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oBrick"]) ? $context["oBrick"] : null), "GetId", array(), "method"), "html", null, true);
        }
    }

    // line 16
    public function block_pMainHeader($context, array $blocks = array())
    {
        // line 17
        echo "\t<div class=\"col-xs-12\">
\t\t<div id=\"main-header-title\">
\t\t\t<h2>";
        // line 19
        $this->displayBlock('pMainHeaderTitle', $context, $blocks);
        echo "</h2>
\t\t</div>
\t\t<div id=\"main-header-actions\">
\t\t\t";
        // line 22
        $this->displayBlock('pMainHeaderActions', $context, $blocks);
        // line 24
        echo "\t\t</div>
\t</div>
";
    }

    // line 19
    public function block_pMainHeaderTitle($context, array $blocks = array())
    {
    }

    // line 22
    public function block_pMainHeaderActions($context, array $blocks = array())
    {
        // line 23
        echo "\t\t\t";
    }

    // line 28
    public function block_pMainContent($context, array $blocks = array())
    {
        // line 29
        echo "<div class=\"col-xs-12\">
\t";
        // line 30
        $this->displayBlock('pMainContentHolder', $context, $blocks);
        // line 32
        echo "</div>
";
    }

    // line 30
    public function block_pMainContentHolder($context, array $blocks = array())
    {
        // line 31
        echo "\t";
    }

    // line 35
    public function block_pPageLiveScriptHelpers($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        $this->displayParentBlock("pPageLiveScriptHelpers", $context, $blocks);
        echo "

\t// Helpers used for brick's opening target
\tvar SetActionUrl = function(oElem, sUrl)
\t{
\t\toElem.attr('href', sUrl);
\t};
\tvar SetActionOpeningTarget = function(oElem, sMode)
\t{
\t\tif(sMode === '";
        // line 45
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\PortalBrick::ENUM_OPENING_TARGET_MODAL"), "html", null, true);
        echo "')
\t\t{
\t\t\toElem.attr('data-toggle', 'modal').attr('data-target', '#modal-for-all');
\t\t}
\t\telse if(sMode === '";
        // line 49
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\PortalBrick::ENUM_OPENING_TARGET_SELF"), "html", null, true);
        echo "')
\t\t{
\t\t\toElem.attr('target', '_self');
\t\t}
\t\telse if(sMode === '";
        // line 53
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\PortalBrick::ENUM_OPENING_TARGET_NEW"), "html", null, true);
        echo "')
\t\t{
\t\t\toElem.attr('target', '_blank');
\t\t}
\t};
";
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/src/views/bricks/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 53,  145 => 49,  138 => 45,  125 => 36,  122 => 35,  118 => 31,  115 => 30,  110 => 32,  108 => 30,  105 => 29,  102 => 28,  98 => 23,  95 => 22,  90 => 19,  84 => 24,  82 => 22,  76 => 19,  72 => 17,  69 => 16,  58 => 14,  50 => 10,  42 => 8,  39 => 7,  37 => 6,  34 => 5,  25 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "itop-portal-base/portal/src/views/bricks/layout.html.twig", "C:\\wamp64\\www\\itsm2\\env-production\\itop-portal-base\\portal\\src\\views\\bricks\\layout.html.twig");
    }
}
