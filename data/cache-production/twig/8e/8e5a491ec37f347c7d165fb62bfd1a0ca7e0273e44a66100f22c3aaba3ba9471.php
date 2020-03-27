<?php

/* itop-portal-base/portal/src/views/modal/layout.html.twig */
class __TwigTemplate_ed6db5e7a38ce6a0be91ed822972427fdb13f3afe52a8b90ac5b6c92b1c3741e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pModalContent' => array($this, 'block_pModalContent'),
            'pModalTitle' => array($this, 'block_pModalTitle'),
            'pModalBody' => array($this, 'block_pModalBody'),
            'pModalFooter' => array($this, 'block_pModalFooter'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->displayBlock('pModalContent', $context, $blocks);
    }

    public function block_pModalContent($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"modal-header\">
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t<h4 class=\"modal-title\">";
        // line 6
        $this->displayBlock('pModalTitle', $context, $blocks);
        echo "</h4>
\t</div>
\t<div class=\"modal-body\">";
        // line 8
        $this->displayBlock('pModalBody', $context, $blocks);
        echo "</div>
\t<div class=\"modal-footer\">
\t\t";
        // line 10
        $this->displayBlock('pModalFooter', $context, $blocks);
        // line 13
        echo "\t</div>
";
    }

    // line 6
    public function block_pModalTitle($context, array $blocks = array())
    {
    }

    // line 8
    public function block_pModalBody($context, array $blocks = array())
    {
    }

    // line 10
    public function block_pModalFooter($context, array $blocks = array())
    {
        // line 11
        echo "\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array("Portal:ButtonClose")), "html", null, true);
        echo "</button>
\t\t";
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/src/views/modal/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  60 => 10,  55 => 8,  50 => 6,  45 => 13,  43 => 10,  38 => 8,  33 => 6,  29 => 4,  23 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "itop-portal-base/portal/src/views/modal/layout.html.twig", "C:\\wamp64\\www\\itsm2\\env-production\\itop-portal-base\\portal\\src\\views\\modal\\layout.html.twig");
    }
}
