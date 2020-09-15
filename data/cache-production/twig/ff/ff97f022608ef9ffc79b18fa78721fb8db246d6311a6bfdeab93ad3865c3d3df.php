<?php

/* itop-portal-base/portal/src/views/bricks/object/mode_create.html.twig */
class __TwigTemplate_cc04faf47767f214bb1b9d194b158ff92c357b340387e2bb6439b44f755037cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pFormAlerts' => array($this, 'block_pFormAlerts'),
            'pFormFields' => array($this, 'block_pFormFields'),
            'pFormButtons' => array($this, 'block_pFormButtons'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        echo "
";
        // line 4
        $context["tIsModal"] = (((array_key_exists("tIsModal", $context) && ((isset($context["tIsModal"]) ? $context["tIsModal"] : null) == true))) ? (true) : (false));
        // line 5
        $context["sFormId"] = ((($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array())))) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array())) : ("object_form"));
        // line 6
        $context["sFormIdSanitized"] = twig_replace_filter((isset($context["sFormId"]) ? $context["sFormId"] : null), array("-" => ""));
        // line 7
        $context["sFormDisplayModeClass"] = ((($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "display_mode", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "display_mode", array())))) ? (("form_" . $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "display_mode", array()))) : (""));
        // line 8
        $context["sFormObjectStateClass"] = ((($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "object_state", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "object_state", array())))) ? (("form_object_state_" . $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "object_state", array()))) : (""));
        // line 9
        echo "
<form id=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["sFormId"]) ? $context["sFormId"] : null), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, (isset($context["sFormDisplayModeClass"]) ? $context["sFormDisplayModeClass"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["sFormObjectStateClass"]) ? $context["sFormObjectStateClass"] : null), "html", null, true);
        echo "\" method=\"POST\" action=\"";
        echo $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "renderer", array()), "GetEndpoint", array(), "method");
        echo "\"
\t";
        // line 11
        if ((array_key_exists("sMode", $context) &&  !(null === (isset($context["sMode"]) ? $context["sMode"] : null)))) {
            echo "data-form-mode=\"";
            echo twig_escape_filter($this->env, (isset($context["sMode"]) ? $context["sMode"] : null), "html", null, true);
            echo "\"";
        }
        // line 12
        echo "\t";
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "object_class", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "object_class", array())))) {
            echo "data-object-class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "object_class", array()), "html", null, true);
            echo "\"";
        }
        // line 13
        echo "\t";
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "object_id", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "object_id", array())))) {
            echo "data-object-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "object_id", array()), "html", null, true);
            echo "\"";
        }
        // line 14
        echo "\t";
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "object_state", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "object_state", array())))) {
            echo "data-object-state=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "object_state", array()), "html", null, true);
            echo "\"";
        }
        echo ">
\t<input type=\"hidden\" name=\"transaction_id\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "transaction_id", array()), "html", null, true);
        echo "\" />
\t<div class=\"form_alerts\">
\t\t";
        // line 17
        $this->displayBlock('pFormAlerts', $context, $blocks);
        // line 22
        echo "\t</div>
\t<div class=\"form_fields\">
\t\t";
        // line 24
        $this->displayBlock('pFormFields', $context, $blocks);
        // line 27
        echo "\t</div>
\t<div class=\"form_buttons\">
\t\t";
        // line 29
        $this->displayBlock('pFormButtons', $context, $blocks);
        // line 65
        echo "\t</div>
</form>

<script type=\"text/javascript\">
\t\$(document).ready(function(){
\t\t// Form field set declaration
\t\tvar oFieldSet_";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["sFormIdSanitized"]) ? $context["sFormIdSanitized"] : null), "html", null, true);
        echo " = \$('#";
        echo twig_escape_filter($this->env, (isset($context["sFormId"]) ? $context["sFormId"] : null), "html", null, true);
        echo " > .form_fields').field_set(";
        echo twig_jsonencode_filter($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fieldset", array()));
        echo ");
\t\t// Form handler declaration
\t\t\$('#";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["sFormId"]) ? $context["sFormId"] : null), "html", null, true);
        echo "').portal_form_handler({
\t\t\tformmanager_class: \"";
        // line 74
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "formmanager_class", array()), "js"), "html", null, true);
        echo "\",
\t\t\tformmanager_data: ";
        // line 75
        echo twig_jsonencode_filter($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "formmanager_data", array()));
        echo ",
\t\t\tfield_set: oFieldSet_";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["sFormIdSanitized"]) ? $context["sFormIdSanitized"] : null), "html", null, true);
        echo ",
\t\t\tsubmit_btn_selector: \$('#";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["sFormId"]) ? $context["sFormId"] : null), "html", null, true);
        echo "').parent().find('.form_btn_submit, .form_btn_transition'),
\t\t\tcancel_btn_selector: \$('#";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["sFormId"]) ? $context["sFormId"] : null), "html", null, true);
        echo "').parent().find('.form_btn_cancel'),
\t\t\tsubmit_url: ";
        // line 79
        if ( !(null === $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submit_callback", array()))) {
            echo "\"";
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submit_callback", array());
            echo "\"";
        } else {
            echo "null";
        }
        echo ",
\t\t\tcancel_url: ";
        // line 80
        if ( !(null === $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cancel_callback", array()))) {
            echo "\"";
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cancel_callback", array());
            echo "\"";
        } else {
            echo "null";
        }
        echo ",
\t\t\tendpoint: \"";
        // line 81
        echo $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "renderer", array()), "GetEndpoint", array(), "method");
        echo "\",
\t\t\tis_modal: ";
        // line 82
        if (((isset($context["tIsModal"]) ? $context["tIsModal"] : null) == true)) {
            echo "true";
        } else {
            echo "false";
        }
        // line 83
        echo "\t\t});
\t\t
\t\t// Sticky buttons handler
\t\t";
        // line 86
        if (((isset($context["sMode"]) ? $context["sMode"] : null) != "view")) {
            // line 87
            echo "\t\t\tif( \$('#";
            echo twig_escape_filter($this->env, (isset($context["sFormId"]) ? $context["sFormId"] : null), "html", null, true);
            echo " .form_btn_regular button').length > 0 )
\t\t\t{
\t\t\t\t// Note : This pattern if to prevent performance issues
\t\t\t\t// - Cloning buttons
\t\t\t\tvar oNormalRegularButtons_";
            // line 91
            echo twig_escape_filter($this->env, (isset($context["sFormIdSanitized"]) ? $context["sFormIdSanitized"] : null), "html", null, true);
            echo " = \$('#";
            echo twig_escape_filter($this->env, (isset($context["sFormId"]) ? $context["sFormId"] : null), "html", null, true);
            echo " .form_btn_regular');
\t\t\t\tvar oStickyRegularButtons_";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["sFormIdSanitized"]) ? $context["sFormIdSanitized"] : null), "html", null, true);
            echo " = oNormalRegularButtons_";
            echo twig_escape_filter($this->env, (isset($context["sFormIdSanitized"]) ? $context["sFormIdSanitized"] : null), "html", null, true);
            echo ".clone(true, true);
\t\t\t\toStickyRegularButtons_";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["sFormIdSanitized"]) ? $context["sFormIdSanitized"] : null), "html", null, true);
            echo ".addClass('sticky');
\t\t\t\tif(oStickyRegularButtons_";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["sFormIdSanitized"]) ? $context["sFormIdSanitized"] : null), "html", null, true);
            echo ".find('.form_btn_submit span.glyphicon').length > 0)
\t\t\t\t{
\t\t\t\t\toStickyRegularButtons_";
            // line 96
            echo twig_escape_filter($this->env, (isset($context["sFormIdSanitized"]) ? $context["sFormIdSanitized"] : null), "html", null, true);
            echo ".find('.form_btn_submit').html( oStickyRegularButtons_";
            echo twig_escape_filter($this->env, (isset($context["sFormIdSanitized"]) ? $context["sFormIdSanitized"] : null), "html", null, true);
            echo ".find('.form_btn_submit span.glyphicon')[0].outerHTML );
\t\t\t\t}
\t\t\t\tif(oStickyRegularButtons_";
            // line 98
            echo twig_escape_filter($this->env, (isset($context["sFormIdSanitized"]) ? $context["sFormIdSanitized"] : null), "html", null, true);
            echo ".find('.form_btn_cancel span.glyphicon').length > 0)
\t\t\t\t{
\t\t\t\t\toStickyRegularButtons_";
            // line 100
            echo twig_escape_filter($this->env, (isset($context["sFormIdSanitized"]) ? $context["sFormIdSanitized"] : null), "html", null, true);
            echo ".find('.form_btn_cancel').html( oStickyRegularButtons_";
            echo twig_escape_filter($this->env, (isset($context["sFormIdSanitized"]) ? $context["sFormIdSanitized"] : null), "html", null, true);
            echo ".find('.form_btn_cancel span.glyphicon')[0].outerHTML );
\t\t\t\t}

\t\t\t\t\$('#";
            // line 103
            echo twig_escape_filter($this->env, (isset($context["sFormId"]) ? $context["sFormId"] : null), "html", null, true);
            echo "').closest(";
            if (((isset($context["tIsModal"]) ? $context["tIsModal"] : null) == true)) {
                echo "'.modal'";
            } else {
                echo "'#main-content'";
            }
            echo ").append(oStickyRegularButtons_";
            echo twig_escape_filter($this->env, (isset($context["sFormIdSanitized"]) ? $context["sFormIdSanitized"] : null), "html", null, true);
            echo ");

\t\t\t\t// - Global timeout for any
\t\t\t\tvar oScrollTimeout;
\t\t\t\t// - Scroll handler
\t\t\t\tscrollHandler_";
            // line 108
            echo twig_escape_filter($this->env, (isset($context["sFormIdSanitized"]) ? $context["sFormIdSanitized"] : null), "html", null, true);
            echo " = function () {
\t\t\t\t\tif(\$('#";
            // line 109
            echo twig_escape_filter($this->env, (isset($context["sFormId"]) ? $context["sFormId"] : null), "html", null, true);
            echo " .form_buttons').visible())
\t\t\t\t\t{
\t\t\t\t\t\toStickyRegularButtons_";
            // line 111
            echo twig_escape_filter($this->env, (isset($context["sFormIdSanitized"]) ? $context["sFormIdSanitized"] : null), "html", null, true);
            echo ".addClass('closed');
\t\t\t\t\t}
\t\t\t\t\telse
\t\t\t\t\t{
\t\t\t\t\t\toStickyRegularButtons_";
            // line 115
            echo twig_escape_filter($this->env, (isset($context["sFormIdSanitized"]) ? $context["sFormIdSanitized"] : null), "html", null, true);
            echo ".removeClass('closed');
\t\t\t\t\t}
\t\t\t\t};
\t\t\t\t// - Event binding for scroll
\t\t\t\t\$(";
            // line 119
            if (((isset($context["tIsModal"]) ? $context["tIsModal"] : null) == true)) {
                echo "'.modal.in'";
            } else {
                echo "window";
            }
            echo ").off('scroll').on('scroll', function () {
\t\t\t\t\tif (oScrollTimeout) {
\t\t\t\t\t\t// Clear the timeout, if one is pending
\t\t\t\t\t\tclearTimeout(oScrollTimeout);
\t\t\t\t\t\toScrollTimeout = null;
\t\t\t\t\t}
\t\t\t\t\toScrollTimeout = setTimeout(scrollHandler_";
            // line 125
            echo twig_escape_filter($this->env, (isset($context["sFormIdSanitized"]) ? $context["sFormIdSanitized"] : null), "html", null, true);
            echo ", 50);
\t\t\t\t});
\t\t\t\t// - Event binding for linkedset collapse
\t\t\t\t\$(";
            // line 128
            if (((isset($context["tIsModal"]) ? $context["tIsModal"] : null) == true)) {
                echo "'.modal.in'";
            } else {
                echo "window";
            }
            echo ").off('shown.bs.collapse hidden.bs.collapse').on('shown.bs.collapse hidden.bs.collapse', function () {
\t\t\t\t\tscrollHandler_";
            // line 129
            echo twig_escape_filter($this->env, (isset($context["sFormIdSanitized"]) ? $context["sFormIdSanitized"] : null), "html", null, true);
            echo "();
\t\t\t\t});
\t\t\t\t// - Event binding for form building / updating
\t\t\t\t// Note : We do not want to 'off' the event or it will remove listeners from the widget
\t\t\t\toFieldSet_";
            // line 133
            echo twig_escape_filter($this->env, (isset($context["sFormIdSanitized"]) ? $context["sFormIdSanitized"] : null), "html", null, true);
            echo ".on('form_built', function(oEvent){
\t\t\t\t\tscrollHandler_";
            // line 134
            echo twig_escape_filter($this->env, (isset($context["sFormIdSanitized"]) ? $context["sFormIdSanitized"] : null), "html", null, true);
            echo "();
\t\t\t\t});
\t\t\t\t// - Initial test
\t\t\t\tsetTimeout(function(){ scrollHandler_";
            // line 137
            echo twig_escape_filter($this->env, (isset($context["sFormIdSanitized"]) ? $context["sFormIdSanitized"] : null), "html", null, true);
            echo "(); }, 400);

\t\t\t\t// Remove sticky button when closing modal
\t\t\t\t\$('#";
            // line 140
            echo twig_escape_filter($this->env, (isset($context["sFormId"]) ? $context["sFormId"] : null), "html", null, true);
            echo "').closest('.modal').on('hide.bs.modal', function () {
\t\t\t\t\toStickyRegularButtons_";
            // line 141
            echo twig_escape_filter($this->env, (isset($context["sFormIdSanitized"]) ? $context["sFormIdSanitized"] : null), "html", null, true);
            echo ".remove();
\t\t\t\t});
\t\t\t}
\t\t";
        }
        // line 145
        echo "\t\t
\t\t";
        // line 146
        if (((isset($context["tIsModal"]) ? $context["tIsModal"] : null) == true)) {
            // line 147
            echo "\t\t\t// Scroll top (because sometimes when several modals have been opened)
\t\t\t\$('#";
            // line 148
            echo twig_escape_filter($this->env, (isset($context["sFormId"]) ? $context["sFormId"] : null), "html", null, true);
            echo "').closest('.modal').scrollTop(0);
\t\t\t\$('#";
            // line 149
            echo twig_escape_filter($this->env, (isset($context["sFormId"]) ? $context["sFormId"] : null), "html", null, true);
            echo "').closest('.modal').find('.modal-footer').hide();
\t\t";
        }
        // line 151
        echo "\t});
</script>";
    }

    // line 17
    public function block_pFormAlerts($context, array $blocks = array())
    {
        // line 18
        echo "\t\t\t<div class=\"alert alert-success\" role=\"alert\" style=\"display: none;\"></div>
\t\t\t<div class=\"alert alert-warning\" role=\"alert\" style=\"display: none;\"></div>
\t\t\t<div class=\"alert alert-error alert-danger\" role=\"alert\" style=\"display: none;\"></div>
\t\t";
    }

    // line 24
    public function block_pFormFields($context, array $blocks = array())
    {
        // line 25
        echo "\t\t\t";
        echo $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "renderer", array()), "GetBaseLayout", array(), "method");
        echo "
\t\t";
    }

    // line 29
    public function block_pFormButtons($context, array $blocks = array())
    {
        // line 30
        echo "            ";
        // line 31
        echo "            ";
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "buttons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "buttons", array(), "any", false, true), "actions", array(), "any", true, true) || $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "buttons", array(), "any", false, true), "links", array(), "any", true, true)))) {
            // line 32
            echo "\t\t\t\t<div class=\"form_btn_misc\">
                    ";
            // line 33
            $this->loadTemplate("itop-portal-base/portal/src/views/bricks/object/plugins_buttons.html.twig", "itop-portal-base/portal/src/views/bricks/object/mode_create.html.twig", 33)->display(array_merge($context, array("aButtons" => $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "buttons", array()))));
            // line 34
            echo "\t\t\t\t</div>
            ";
        }
        // line 36
        echo "\t\t\t";
        // line 37
        echo "\t\t\t";
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "buttons", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "buttons", array(), "any", false, true), "transitions", array(), "any", true, true)) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "buttons", array()), "transitions", array())) > 0))) {
            // line 38
            echo "\t\t\t\t<div class=\"form_btn_transitions\">
\t\t\t\t";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "buttons", array()), "transitions", array()));
            foreach ($context['_seq'] as $context["sStimulusCode"] => $context["sStimulusLabel"]) {
                // line 40
                echo "\t\t\t\t\t<button class=\"btn btn-primary form_btn_transition\" type=\"submit\" name=\"stimulus_code\" value=\"";
                echo twig_escape_filter($this->env, $context["sStimulusCode"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["sStimulusLabel"], "html", null, true);
                echo "</button>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['sStimulusCode'], $context['sStimulusLabel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 44
        echo "\t\t\t<div class=\"form_btn_regular\">
\t\t\t\t";
        // line 46
        echo "\t\t\t\t";
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "editable_fields_count", array(), "any", true, true) && ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "editable_fields_count", array()) > 0))) {
            // line 47
            echo "\t\t\t\t\t<button class=\"btn btn-default form_btn_cancel\" type=\"button\" value=\"cancel\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array("Portal:Button:Cancel")), "html", null, true);
            echo "\" data-dismiss=\"modal\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t\t\t";
            // line 49
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array("Portal:Button:Cancel")), "html", null, true);
            echo "
\t\t\t\t\t</button>
\t\t\t\t\t";
            // line 51
            if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "buttons", array(), "any", false, true), "submit", array(), "any", true, true)) {
                // line 52
                echo "\t\t\t\t\t\t<button class=\"btn btn-primary form_btn_submit\" type=\"submit\" value=\"submit\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "buttons", array()), "submit", array()), "label", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-ok\"></span>
\t\t\t\t\t\t\t";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "buttons", array()), "submit", array()), "label", array()), "html", null, true);
                echo "
\t\t\t\t\t\t</button>
\t\t\t\t\t";
            }
            // line 57
            echo "\t\t\t\t";
        } else {
            // line 58
            echo "\t\t\t\t\t";
            // line 59
            echo "\t\t\t\t\t";
            if ((isset($context["tIsModal"]) ? $context["tIsModal"] : null)) {
                // line 60
                echo "\t\t\t\t\t\t<input class=\"btn btn-default form_btn_cancel\" type=\"button\" value=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array("Portal:Button:Close")), "html", null, true);
                echo "\" data-dismiss=\"modal\">
\t\t\t\t\t";
            }
            // line 62
            echo "\t\t\t\t";
        }
        // line 63
        echo "\t\t\t</div>
\t\t";
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/src/views/bricks/object/mode_create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  457 => 63,  454 => 62,  448 => 60,  445 => 59,  443 => 58,  440 => 57,  434 => 54,  428 => 52,  426 => 51,  421 => 49,  415 => 47,  412 => 46,  409 => 44,  405 => 42,  394 => 40,  390 => 39,  387 => 38,  384 => 37,  382 => 36,  378 => 34,  376 => 33,  373 => 32,  370 => 31,  368 => 30,  365 => 29,  358 => 25,  355 => 24,  348 => 18,  345 => 17,  340 => 151,  335 => 149,  331 => 148,  328 => 147,  326 => 146,  323 => 145,  316 => 141,  312 => 140,  306 => 137,  300 => 134,  296 => 133,  289 => 129,  281 => 128,  275 => 125,  262 => 119,  255 => 115,  248 => 111,  243 => 109,  239 => 108,  223 => 103,  215 => 100,  210 => 98,  203 => 96,  198 => 94,  194 => 93,  188 => 92,  182 => 91,  174 => 87,  172 => 86,  167 => 83,  161 => 82,  157 => 81,  147 => 80,  137 => 79,  133 => 78,  129 => 77,  125 => 76,  121 => 75,  117 => 74,  113 => 73,  104 => 71,  96 => 65,  94 => 29,  90 => 27,  88 => 24,  84 => 22,  82 => 17,  77 => 15,  68 => 14,  61 => 13,  54 => 12,  48 => 11,  38 => 10,  35 => 9,  33 => 8,  31 => 7,  29 => 6,  27 => 5,  25 => 4,  22 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "itop-portal-base/portal/src/views/bricks/object/mode_create.html.twig", "/home/alltic/public_html/itsm/env-production/itop-portal-base/portal/src/views/bricks/object/mode_create.html.twig");
    }
}
