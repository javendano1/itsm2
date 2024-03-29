<?php

/* itop-portal-base/portal/src/views/helpers/tagset_clic_handler.js.twig */
class __TwigTemplate_4d7250d28557f894ac51a8d91c4a301716d896aa2a3cea00b27c52859c46995b extends Twig_Template
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
        echo "/**
 * When clicking on a TagSet item in a list (BrowseBrick or ManageBrick), filters the list using the item label
 * @since 2.6 N°931 AttributeTagSet
 */
\$(\"#main-content\").on(\"click\", \".table.dataTable .attribute.attribute-set.attribute-tag-set > .attribute-set-item\", function () {
\tvar \$this = \$(this),
\t\t\$dataTableWrapper = \$this.closest(\".dataTables_wrapper\"),
\t\t\$searchField = \$dataTableWrapper.find(\".dataTables_filter input.form-control\"),
\t\tiNbInputsFound = \$searchField.length;

\tif (iNbInputsFound === 0)
\t{
\t\treturn;
\t}
\tif (iNbInputsFound > 1)
\t{
\t\treturn;
\t}

\tvar sTagLabel = \$this.text();
\t\$searchField.prop(\"value\", sTagLabel);
\t\$searchField.trigger(\"keyup\");
});";
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/src/views/helpers/tagset_clic_handler.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "itop-portal-base/portal/src/views/helpers/tagset_clic_handler.js.twig", "/home/alltic/public_html/itsm/env-production/itop-portal-base/portal/src/views/helpers/tagset_clic_handler.js.twig");
    }
}
