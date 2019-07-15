<?php

/* itop-portal-base/portal/src/views/bricks/browse/layout.html.twig */
class __TwigTemplate_774875a61eb89cf10d77089ae44c436ad70a1b3dcecaba4a2380d245bdc8119f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("itop-portal-base/portal/src/views/bricks/layout.html.twig", "itop-portal-base/portal/src/views/bricks/browse/layout.html.twig", 3);
        $this->blocks = array(
            'pPageBodyClass' => array($this, 'block_pPageBodyClass'),
            'pPageReadyScripts' => array($this, 'block_pPageReadyScripts'),
            'pMainHeaderTitle' => array($this, 'block_pMainHeaderTitle'),
            'pMainHeaderActions' => array($this, 'block_pMainHeaderActions'),
            'pMainContentHolder' => array($this, 'block_pMainContentHolder'),
            'bBrowseMainContent' => array($this, 'block_bBrowseMainContent'),
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
        echo " page_browse_brick page_browse_brick_as_";
        echo twig_escape_filter($this->env, ($context["sBrowseMode"] ?? null), "html", null, true);
    }

    // line 7
    public function block_pPageReadyScripts($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("pPageReadyScripts", $context, $blocks);
        echo "
    ";
        // line 9
        $this->loadTemplate("itop-portal-base/portal/src/views/helpers/tagset_clic_handler.js.twig", "itop-portal-base/portal/src/views/bricks/browse/layout.html.twig", 9)->display($context);
    }

    // line 13
    public function block_pMainHeaderTitle($context, array $blocks = array())
    {
        // line 14
        echo "\t";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array($this->getAttribute(($context["oBrick"] ?? null), "GetTitle", array(), "method"))), "html", null, true);
        echo "
";
    }

    // line 17
    public function block_pMainHeaderActions($context, array $blocks = array())
    {
        // line 18
        echo "\t";
        if ((twig_length_filter($this->env, ($context["aBrowseButtons"] ?? null)) > 1)) {
            // line 19
            echo "\t\t<div class=\"btn-group ";
            echo " btn_group_explicit\">
\t\t\t";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["aBrowseButtons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["sBrowseButton"]) {
                // line 21
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", array()), "generate", array(0 => "p_browse_brick_mode", 1 => array("sBrickId" => ($context["sBrickId"] ?? null), "sBrowseMode" => $context["sBrowseButton"])), "method"), "html", null, true);
                echo "\" class=\"btn btn-default ";
                if ((($context["sBrowseMode"] ?? null) == $context["sBrowseButton"])) {
                    echo "active";
                }
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array(("Brick:Portal:Browse:Mode:" . twig_capitalize_string_filter($this->env, $context["sBrowseButton"])))), "html", null, true);
                echo "</a>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sBrowseButton'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t</div>
\t";
        }
    }

    // line 27
    public function block_pMainContentHolder($context, array $blocks = array())
    {
        // line 28
        echo "\t";
        if (((($context["iItemsCount"] ?? null) > 0) ||  !(null === ($context["sSearchValue"] ?? null)))) {
            // line 29
            echo "\t\t<div class=\"panel panel-default\">
\t\t\t";
            // line 30
            $this->displayBlock('bBrowseMainContent', $context, $blocks);
            // line 32
            echo "\t\t</div>
\t";
        } else {
            // line 34
            echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-body\">
\t\t\t\t<h3 class=\"text-center\">";
            // line 36
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array("Brick:Portal:Browse:Filter:NoData")), "html", null, true);
            echo "</h3>
\t\t\t</div>
\t\t</div>
\t";
        }
    }

    // line 30
    public function block_bBrowseMainContent($context, array $blocks = array())
    {
        // line 31
        echo "\t\t\t";
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/src/views/bricks/browse/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 31,  126 => 30,  117 => 36,  113 => 34,  109 => 32,  107 => 30,  104 => 29,  101 => 28,  98 => 27,  92 => 23,  77 => 21,  73 => 20,  69 => 19,  66 => 18,  63 => 17,  56 => 14,  53 => 13,  49 => 9,  44 => 8,  41 => 7,  33 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "itop-portal-base/portal/src/views/bricks/browse/layout.html.twig", "C:\\xampp\\htdocs\\itsm2\\env-production\\itop-portal-base\\portal\\src\\views\\bricks\\browse\\layout.html.twig");
    }
}
