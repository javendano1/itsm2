<?php

/* itop-portal-base/portal/src/views/bricks/manage/layout.html.twig */
class __TwigTemplate_861e0572241f6d1a575eefc267f68956ca29f72b6502a06c1f769ca5c26b984f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("itop-portal-base/portal/src/views/bricks/layout.html.twig", "itop-portal-base/portal/src/views/bricks/manage/layout.html.twig", 2);
        $this->blocks = array(
            'pMainHeaderTitle' => array($this, 'block_pMainHeaderTitle'),
            'pMainHeaderActions' => array($this, 'block_pMainHeaderActions'),
            'pPageReadyScripts' => array($this, 'block_pPageReadyScripts'),
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

    // line 4
    public function block_pMainHeaderTitle($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array($this->getAttribute(($context["oBrick"] ?? null), "GetTitle", array(), "method"))), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["iCount"] ?? null), "html", null, true);
        echo ") ";
    }

    // line 6
    public function block_pMainHeaderActions($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["oBrick"] ?? null), "GetAvailablesDisplayModes", array())) > 1)) {
            // line 8
            echo "\t\t<div class=\"btn-group btn_group_explicit\">
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oBrick"] ?? null), "GetAvailablesDisplayModes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["sDisplay"]) {
                // line 10
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", array()), "generate", array(0 => "p_manage_brick_display_as", 1 => array("sBrickId" => ($context["sBrickId"] ?? null), "sDisplayMode" => $context["sDisplay"])), "method"), "html", null, true);
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.routes", array(), "array", false, true), $this->getAttribute(($context["oBrick"] ?? null), "GetRouteName", array()), array(), "array", false, true), "hash", array(), "array", true, true)) {
                    echo "#";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.routes", array(), "array"), $this->getAttribute(($context["oBrick"] ?? null), "GetRouteName", array()), array(), "array"), "hash", array(), "array"), "html", null, true);
                }
                echo "\"
\t\t\t\t   id=\"btn_tab_for_";
                // line 11
                echo twig_escape_filter($this->env, $context["sDisplay"], "html", null, true);
                echo "\"
\t\t\t\t   class=\"btn btn-default ";
                // line 12
                if (($context["sDisplay"] == $this->getAttribute($this->getAttribute(($context["oBrick"] ?? null), "GetPresentationDataForTileMode", array(0 => ($context["sDisplayMode"] ?? null)), "method"), "layoutDisplayMode", array()))) {
                    echo "active";
                }
                echo "\">
                    ";
                // line 13
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array(("Brick:Portal:Manage:DisplayMode:" . $context["sDisplay"]))), "html", null, true);
                echo "
\t\t\t\t</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sDisplay'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t</div>
    ";
        }
    }

    // line 20
    public function block_pPageReadyScripts($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $this->displayParentBlock("pPageReadyScripts", $context, $blocks);
        echo "
    ";
        // line 22
        $this->loadTemplate("itop-portal-base/portal/src/views/helpers/tagset_clic_handler.js.twig", "itop-portal-base/portal/src/views/bricks/manage/layout.html.twig", 22)->display($context);
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/src/views/bricks/manage/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 22,  89 => 21,  86 => 20,  80 => 16,  71 => 13,  65 => 12,  61 => 11,  52 => 10,  48 => 9,  45 => 8,  42 => 7,  39 => 6,  30 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "itop-portal-base/portal/src/views/bricks/manage/layout.html.twig", "C:\\xampp\\htdocs\\itsm\\env-production\\itop-portal-base\\portal\\src\\views\\bricks\\manage\\layout.html.twig");
    }
}
