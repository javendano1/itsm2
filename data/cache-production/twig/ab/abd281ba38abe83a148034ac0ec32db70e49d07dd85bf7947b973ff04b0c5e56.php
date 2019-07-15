<?php

/* itop-portal-base/portal/src/views/layout.html.twig */
class __TwigTemplate_ae2a404e723188c0540bd33fb1894999194e8af8aad68eb6c295923a6e87d115 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pPageExtraMetas' => array($this, 'block_pPageExtraMetas'),
            'pPageTitle' => array($this, 'block_pPageTitle'),
            'pPageStylesheets' => array($this, 'block_pPageStylesheets'),
            'pStyleinline' => array($this, 'block_pStyleinline'),
            'pPageScripts' => array($this, 'block_pPageScripts'),
            'pPageBodyClass' => array($this, 'block_pPageBodyClass'),
            'pPageBodyWrapper' => array($this, 'block_pPageBodyWrapper'),
            'pEnvBannerWrapper' => array($this, 'block_pEnvBannerWrapper'),
            'pNavigationWrapper' => array($this, 'block_pNavigationWrapper'),
            'pNavigationTopMenuWrapper' => array($this, 'block_pNavigationTopMenuWrapper'),
            'pNavigationTopMenuLogo' => array($this, 'block_pNavigationTopMenuLogo'),
            'pNavigationTopBricks' => array($this, 'block_pNavigationTopBricks'),
            'pPageUIExtensionNavigationMenuTopbar' => array($this, 'block_pPageUIExtensionNavigationMenuTopbar'),
            'pNavigationSideMenuWrapper' => array($this, 'block_pNavigationSideMenuWrapper'),
            'pNavigationSideMenu' => array($this, 'block_pNavigationSideMenu'),
            'pPageUIExtensionNavigationMenuSidebar' => array($this, 'block_pPageUIExtensionNavigationMenuSidebar'),
            'pNavigationSideMenuLogo' => array($this, 'block_pNavigationSideMenuLogo'),
            'pMainWrapper' => array($this, 'block_pMainWrapper'),
            'pMainHeader' => array($this, 'block_pMainHeader'),
            'pMainContent' => array($this, 'block_pMainContent'),
            'pPageUIExtensionMainContent' => array($this, 'block_pPageUIExtensionMainContent'),
            'pPageFooter' => array($this, 'block_pPageFooter'),
            'pModalForAllWrapper' => array($this, 'block_pModalForAllWrapper'),
            'pModalForAlert' => array($this, 'block_pModalForAlert'),
            'pPageOverlay' => array($this, 'block_pPageOverlay'),
            'pPageUIExtensionBody' => array($this, 'block_pPageUIExtensionBody'),
            'pPageLiveScripts' => array($this, 'block_pPageLiveScripts'),
            'pPageLiveScriptHelpers' => array($this, 'block_pPageLiveScriptHelpers'),
            'pPageReadyScripts' => array($this, 'block_pPageReadyScripts'),
            'pPageExtensionsScripts' => array($this, 'block_pPageExtensionsScripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        echo "
";
        // line 4
        if (($this->getAttribute(($context["app"] ?? null), "combodo.current_user", array(), "array", true, true) &&  !(null === $this->getAttribute(($context["app"] ?? null), "combodo.current_user", array(), "array")))) {
            // line 5
            echo "\t";
            $context["bUserConnected"] = true;
            // line 6
            echo "\t";
            $context["sUserFullname"] = (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.current_user", array(), "array"), "Get", array(0 => "first_name"), "method") . " ") . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.current_user", array(), "array"), "Get", array(0 => "last_name"), "method"));
            // line 7
            echo "\t";
            $context["sUserEmail"] = $this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.current_user", array(), "array"), "Get", array(0 => "email"), "method");
            // line 8
            echo "\t";
            $context["sUserPhotoUrl"] = $this->getAttribute(($context["app"] ?? null), "combodo.current_contact.photo_url", array(), "array");
        } else {
            // line 10
            echo "\t";
            $context["bUserConnected"] = false;
            // line 11
            echo "\t";
            $context["sUserFullname"] = "";
            // line 12
            echo "\t";
            $context["sUserEmail"] = "";
            // line 13
            echo "\t";
            $context["sUserPhotoUrl"] = ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", array(), "array") . "img/user-profile-default-256px.png");
        }
        // line 15
        echo "
<!doctype html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t";
        // line 23
        echo "\t";
        $this->displayBlock('pPageExtraMetas', $context, $blocks);
        // line 25
        echo "\t<title>";
        $this->displayBlock('pPageTitle', $context, $blocks);
        echo "</title>
\t<link rel=\"shortcut icon\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("images/favicon.ico"))), "html", null, true);
        echo "\" />

\t";
        // line 28
        $this->displayBlock('pPageStylesheets', $context, $blocks);
        // line 72
        echo "
\t";
        // line 73
        $this->displayBlock('pStyleinline', $context, $blocks);
        // line 81
        echo "
\t";
        // line 82
        $this->displayBlock('pPageScripts', $context, $blocks);
        // line 148
        echo "</head>
<body class=\"";
        // line 149
        $this->displayBlock('pPageBodyClass', $context, $blocks);
        echo "\">
\t";
        // line 150
        $this->displayBlock('pPageBodyWrapper', $context, $blocks);
        // line 396
        echo "\t
\t";
        // line 397
        $this->displayBlock('pPageLiveScripts', $context, $blocks);
        // line 515
        echo "
\t";
        // line 516
        $this->displayBlock('pPageExtensionsScripts', $context, $blocks);
        // line 524
        echo "</body>
</html>";
    }

    // line 23
    public function block_pPageExtraMetas($context, array $blocks = array())
    {
        // line 24
        echo "\t";
    }

    // line 25
    public function block_pPageTitle($context, array $blocks = array())
    {
        if ((array_key_exists("sPageTitle", $context) &&  !(null === ($context["sPageTitle"] ?? null)))) {
            echo twig_escape_filter($this->env, ($context["sPageTitle"] ?? null), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_constant("ITOP_APPLICATION_SHORT"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_format')->getCallable(), array("Page:DefaultTitle", twig_constant("ITOP_APPLICATION_SHORT"))), "html", null, true);
        }
    }

    // line 28
    public function block_pPageStylesheets($context, array $blocks = array())
    {
        // line 29
        echo "\t\t";
        // line 30
        echo "\t\t<link href=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("lib/bootstrap/css/bootstrap.min.css"))), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t";
        // line 32
        echo "\t\t<link href=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("lib/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"))), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t";
        // line 34
        echo "\t\t<link href=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("lib/datatables/css/dataTables.bootstrap.min.css"))), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 35
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("lib/datatables/css/fixedHeader.bootstrap.min.css"))), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 36
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("lib/datatables/css/responsive.bootstrap.min.css"))), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 37
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("lib/datatables/css/scroller.bootstrap.min.css"))), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 38
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("lib/datatables/css/select.bootstrap.min.css"))), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 39
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("lib/datatables/css/select.dataTables.min.css"))), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 41
        echo "\t\t<link href=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("css/font-open-sans/font-open-sans.css"))), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 43
        echo "\t\t<link href=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("css/font-combodo/font-combodo.css"))), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 45
        echo "\t\t<link href=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("css/font-awesome/css/font-awesome.min.css"))), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t";
        // line 47
        echo "\t\t<link href=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("lib/typeahead/css/typeaheadjs.bootstrap.css"))), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 48
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("css/selectize.default.css"))), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 49
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("css/magnific-popup.css"))), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 50
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("css/c3.min.css"))), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t";
        // line 52
        echo "\t\t<link href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array"), "properties", array()), "themes", array()), "bootstrap", array()))), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"css_bootstrap_theme\">
\t\t";
        // line 54
        echo "\t\t<link href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array"), "properties", array()), "themes", array()), "portal", array()))), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"css_portal\">
\t\t";
        // line 56
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array", false, true), "ui_extensions", array(), "any", false, true), "css_files", array(), "any", true, true)) {
            // line 57
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array"), "ui_extensions", array()), "css_files", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["css_file"]) {
                // line 58
                echo "\t\t\t\t<link href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array($context["css_file"])), "html", null, true);
                echo "\" rel=\"stylesheet\">
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "        ";
        }
        // line 61
        echo "\t\t";
        // line 62
        echo "\t\t";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array", false, true), "properties", array(), "any", false, true), "themes", array(), "any", false, true), "custom", array(), "any", true, true)) {
            // line 63
            echo "\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array"), "properties", array()), "themes", array()), "custom", array()))), "html", null, true);
            echo "\" rel=\"stylesheet\">
\t\t";
        }
        // line 65
        echo "\t\t";
        // line 66
        echo "\t\t";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array", false, true), "properties", array(), "any", false, true), "themes", array(), "any", false, true), "others", array(), "any", true, true)) {
            // line 67
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array"), "properties", array()), "themes", array()), "others", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 68
                echo "\t\t\t\t<link href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array($context["theme"])), "html", null, true);
                echo "\" rel=\"stylesheet\">
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "\t\t";
        }
        // line 71
        echo "\t";
    }

    // line 73
    public function block_pStyleinline($context, array $blocks = array())
    {
        // line 74
        echo "        ";
        // line 75
        echo "        ";
        if ( !(null === $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array"), "ui_extensions", array()), "css_inline", array()))) {
            // line 76
            echo "\t\t\t<style>
\t\t\t\t";
            // line 77
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array"), "ui_extensions", array()), "css_inline", array());
            echo "
\t\t\t</style>
        ";
        }
        // line 80
        echo "\t";
    }

    // line 82
    public function block_pPageScripts($context, array $blocks = array())
    {
        // line 83
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("js/jquery-3.3.1.min.js"))), "html", null, true);
        echo "\"></script>
\t\t";
        // line 84
        if (call_user_func_array($this->env->getFunction('is_development_environment')->getCallable(), array())) {
            // line 85
            echo "\t\t\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("js/jquery-migrate-3.0.1.dev.js"))), "html", null, true);
            echo "\"></script>
\t\t";
        } else {
            // line 87
            echo "\t\t\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("js/jquery-migrate-3.0.1.prod.min.js"))), "html", null, true);
            echo "\"></script>
\t\t";
        }
        // line 89
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("js/jquery-ui-1.11.4.custom.min.js"))), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("js/jquery.magnific-popup.min.js"))), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("js/jquery.iframe-transport.js"))), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("js/jquery.fileupload.js"))), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("js/utils.js"))), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("js/d3.min.js"))), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("js/c3.min.js"))), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("lib/bootstrap/js/bootstrap.min.js"))), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("js/latinise/latinise.min.js"))), "html", null, true);
        echo "\"></script>
\t\t";
        // line 99
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("lib/jquery-visible/js/jquery.visible.min.js"))), "html", null, true);
        echo "\"></script>
        ";
        // line 101
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("lib/jquery-base64/js/jquery.base64.min.js"))), "html", null, true);
        echo "\"></script>
\t\t";
        // line 103
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("js/moment-with-locales.min.js"))), "html", null, true);
        echo "\"></script>
\t\t";
        // line 105
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("lib/datatables/js/jquery.dataTables.min.js"))), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("lib/datatables/js/dataTables.bootstrap.min.js"))), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("lib/datatables/js/dataTables.fixedHeader.min.js"))), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("lib/datatables/js/dataTables.responsive.min.js"))), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("lib/datatables/js/dataTables.scroller.min.js"))), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("lib/datatables/js/dataTables.select.min.js"))), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("lib/datatables/js/datetime-moment.js"))), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("js/dataTables.accentNeutraliseForFilter.js"))), "html", null, true);
        echo "\"></script>
        ";
        // line 114
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("js/export.js"))), "html", null, true);
        echo "\"></script>
\t\t";
        // line 116
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("js/ckeditor/ckeditor.js"))), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("js/ckeditor/adapters/jquery.js"))), "html", null, true);
        echo "\"></script>
\t\t";
        // line 119
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"))), "html", null, true);
        echo "\"></script>
\t\t";
        // line 121
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("lib/typeahead/js/typeahead.bundle.min.js"))), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("lib/handlebars/js/handlebars.min-768ddbd.js"))), "html", null, true);
        echo "\"></script>
\t\t";
        // line 124
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("js/selectize.js"))), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("js/jquery.itop-set-widget.js"))), "html", null, true);
        echo "\"></script>
\t\t";
        // line 127
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("js/form_handler.js"))), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 128
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("js/form_field.js"))), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("js/subform_field.js"))), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 130
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("js/field_set.js"))), "html", null, true);
        echo "\"></script>
\t\t";
        // line 132
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("js/portal_form_handler.js"))), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("js/portal_form_field.js"))), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("js/portal_form_field_html.js"))), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", array(), "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array("js/portal_form_field_set.js"))), "html", null, true);
        echo "\"></script>
        ";
        // line 137
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array", false, true), "ui_extensions", array(), "any", false, true), "js_files", array(), "any", true, true)) {
            // line 138
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array"), "ui_extensions", array()), "js_files", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["js_file"]) {
                // line 139
                echo "\t\t\t\t<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), array($context["js_file"])), "html", null, true);
                echo "\"></script>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "        ";
        }
        // line 142
        echo "\t\t<script type=\"text/javascript\">
\t\t\t\$(document).ready(function() {
\t\t\t\t\$('.tile.tile_badge[data-toggle=\"tooltip\"]').tooltip({'html': true});
\t\t\t});
\t\t</script>
\t";
    }

    // line 149
    public function block_pPageBodyClass($context, array $blocks = array())
    {
    }

    // line 150
    public function block_pPageBodyWrapper($context, array $blocks = array())
    {
        // line 151
        echo "\t\t";
        $this->displayBlock('pEnvBannerWrapper', $context, $blocks);
        // line 161
        echo "\t\t
\t\t";
        // line 162
        $this->displayBlock('pNavigationWrapper', $context, $blocks);
        // line 311
        echo "\t\t
\t\t";
        // line 312
        $this->displayBlock('pMainWrapper', $context, $blocks);
        // line 346
        echo "\t\t
\t\t<footer id=\"footer-wrapper\">
\t\t\t";
        // line 348
        $this->displayBlock('pPageFooter', $context, $blocks);
        // line 351
        echo "\t\t</footer>
\t
\t\t";
        // line 353
        $this->displayBlock('pModalForAllWrapper', $context, $blocks);
        // line 362
        echo "\t\t";
        $this->displayBlock('pModalForAlert', $context, $blocks);
        // line 381
        echo "
\t\t";
        // line 382
        $this->displayBlock('pPageOverlay', $context, $blocks);
        // line 389
        echo "
\t\t";
        // line 390
        $this->displayBlock('pPageUIExtensionBody', $context, $blocks);
        // line 395
        echo "\t";
    }

    // line 151
    public function block_pEnvBannerWrapper($context, array $blocks = array())
    {
        // line 152
        echo "\t\t\t";
        if (($this->getAttribute(($context["app"] ?? null), "combodo.current_environment", array(), "array") != "production")) {
            // line 153
            echo "\t\t\t\t<div id=\"envbanner\" class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t";
            // line 154
            echo call_user_func_array($this->env->getFilter('dict_format')->getCallable(), array("Portal:EnvironmentBanner:Title", twig_upper_filter($this->env, $this->getAttribute(($context["app"] ?? null), "combodo.current_environment", array(), "array"))));
            echo "
\t\t\t\t\t<button type=\"button\" onclick=\"window;location.href='";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", array(), "array"), "generate", array(0 => "p_home", 1 => array("switch_env" => "production")), "method"), "html", null, true);
            echo "'\">
\t\t\t\t\t\t";
            // line 156
            echo call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array("Portal:EnvironmentBanner:GoToProduction"));
            echo "
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t";
        }
        // line 160
        echo "\t\t";
    }

    // line 162
    public function block_pNavigationWrapper($context, array $blocks = array())
    {
        // line 163
        echo "\t\t\t";
        // line 164
        echo "\t\t\t";
        $this->displayBlock('pNavigationTopMenuWrapper', $context, $blocks);
        // line 235
        echo "
\t\t\t";
        // line 237
        echo "\t\t\t";
        $this->displayBlock('pNavigationSideMenuWrapper', $context, $blocks);
        // line 310
        echo "\t\t";
    }

    // line 164
    public function block_pNavigationTopMenuWrapper($context, array $blocks = array())
    {
        // line 165
        echo "\t\t\t\t<nav class=\"navbar navbar-fixed-top navbar-default visible-xs\" id=\"topbar\" role=\"navigation\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\">
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t";
        // line 173
        $this->displayBlock('pNavigationTopMenuLogo', $context, $blocks);
        // line 182
        echo "\t\t\t\t\t\t\t<p class=\"navbar-text\">
\t\t\t\t\t\t\t\t<a class=\"navbar-link user_infos\" href=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", array()), "generate", array(0 => "p_user_profile_brick"), "method"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"user_photo\" style=\"background-image: url('";
        // line 184
        echo twig_escape_filter($this->env, ($context["sUserPhotoUrl"] ?? null), "html", null, true);
        echo "');\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"user_fullname\">";
        // line 185
        echo twig_escape_filter($this->env, ($context["sUserFullname"] ?? null), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbar\">
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t\t";
        // line 191
        $this->displayBlock('pNavigationTopBricks', $context, $blocks);
        // line 209
        echo "\t\t\t\t\t\t\t\t";
        if (($context["bUserConnected"] ?? null)) {
            // line 210
            echo "\t\t\t\t\t\t\t\t\t<li role=\"separator\" class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", array()), "generate", array(0 => "p_user_profile_brick"), "method"), "html", null, true);
            echo "\"><span class=\"brick_icon fa fa-user fa-2x fa-fw\"></span>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array("Brick:Portal:UserProfile:Navigation:Dropdown:MyProfil")), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
            // line 212
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array"), "portals", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["aPortal"]) {
                // line 213
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["aPortal"], "id", array()) != $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array"), "properties", array()), "id", array()))) {
                    // line 214
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    $context["sIconClass"] = ((($this->getAttribute($context["aPortal"], "id", array()) == "backoffice")) ? ("fa-list-alt") : ("fa-external-link"));
                    // line 215
                    echo "\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["aPortal"], "url", array()), "html", null, true);
                    echo "\" target=\"_blank\"><span class=\"brick_icon fa ";
                    echo twig_escape_filter($this->env, ($context["sIconClass"] ?? null), "html", null, true);
                    echo " fa-2x fa-fw\"></span>";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array($this->getAttribute($context["aPortal"], "label", array()))), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 217
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aPortal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            echo "\t\t\t\t\t\t\t\t\t";
            // line 219
            echo "\t\t\t\t\t\t\t\t\t";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array"), "portals", array())) > 1)) {
                // line 220
                echo "\t\t\t\t\t\t\t\t\t\t<li role=\"separator\" class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 222
            echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", array(), "array"), "html", null, true);
            echo "pages/logoff.php\"><span class=\"brick_icon fa fa-sign-out fa-2x fa-fw\"></span>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array("Brick:Portal:UserProfile:Navigation:Dropdown:Logout")), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t\t";
        }
        // line 224
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

                        ";
        // line 227
        $this->displayBlock('pPageUIExtensionNavigationMenuTopbar', $context, $blocks);
        // line 232
        echo "\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t";
    }

    // line 173
    public function block_pNavigationTopMenuLogo($context, array $blocks = array())
    {
        // line 174
        echo "\t\t\t\t\t\t\t\t<a class=\"navbar-brand pull-right\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_config_parameter')->getCallable(), array("app_icon_url")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t";
        // line 175
        if ( !(null === $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array"), "properties", array()), "logo", array()))) {
            // line 176
            echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array"), "properties", array()), "logo", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array"), "properties", array()), "name", array()))), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 178
            echo "\t\t\t\t\t\t\t\t\t\tiTop
\t\t\t\t\t\t\t\t\t";
        }
        // line 180
        echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
    }

    // line 191
    public function block_pNavigationTopBricks($context, array $blocks = array())
    {
        // line 192
        echo "\t\t\t\t\t\t\t\t\t<li class=\"brick_menu_item ";
        if ( !array_key_exists("oBrick", $context)) {
            echo "active";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", array()), "generate", array(0 => "p_home"), "method"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"brick_icon fa fa-home fa-2x\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 195
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array("Page:Home")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array"), "bricks_ordering", array()), "navigation_menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["brick"]) {
            // line 199
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ((($this->getAttribute($context["brick"], "GetActive", array()) && $this->getAttribute($context["brick"], "GetVisibleNavigationMenu", array())) &&  !(null === $this->getAttribute($context["brick"], "GetRouteName", array())))) {
                // line 200
                echo "\t\t\t\t\t\t\t\t\t\t\t<li class=\"brick_menu_item ";
                if ((array_key_exists("oBrick", $context) && ($this->getAttribute($context["brick"], "id", array()) == $this->getAttribute(($context["oBrick"] ?? null), "id", array())))) {
                    echo "active";
                }
                echo "\" data-brick-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["brick"], "GetId", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 201
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", array()), "generate", array(0 => $this->getAttribute($context["brick"], "GetRouteName", array()), 1 => array("sBrickId" => $this->getAttribute($context["brick"], "GetId", array()))), "method"), "html", null, true);
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.routes", array(), "array", false, true), $this->getAttribute($context["brick"], "GetRouteName", array()), array(), "array", false, true), "hash", array(), "array", true, true)) {
                    echo "#";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.routes", array(), "array"), $this->getAttribute($context["brick"], "GetRouteName", array()), array(), "array"), "hash", array(), "array"), "html", null, true);
                }
                echo "\" ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.routes", array(), "array", false, true), $this->getAttribute($context["brick"], "GetRouteName", array()), array(), "array", false, true), "navigation_menu_attr", array(), "array", true, true)) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.routes", array(), "array"), $this->getAttribute($context["brick"], "GetRouteName", array()), array(), "array"), "navigation_menu_attr", array(), "array"));
                    foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                        echo " ";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\"";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                echo " ";
                if ($this->getAttribute($context["brick"], "GetModal", array())) {
                    echo "data-toggle=\"modal\" data-target=\"#modal-for-all\"";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"brick_icon ";
                // line 202
                echo twig_escape_filter($this->env, $this->getAttribute($context["brick"], "GetDecorationClassNavigationMenu", array()), "html", null, true);
                echo "\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 203
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array($this->getAttribute($context["brick"], "GetTitleNavigationMenu", array()))), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 207
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "\t\t\t\t\t\t\t\t";
    }

    // line 227
    public function block_pPageUIExtensionNavigationMenuTopbar($context, array $blocks = array())
    {
        // line 228
        echo "                            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array", false, true), "ui_extensions", array(), "any", false, true), "html", array(), "any", false, true), twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_NAVIGATION_MENU"), array(), "array", true, true)) {
            // line 229
            echo "                                ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array"), "ui_extensions", array()), "html", array()), twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_NAVIGATION_MENU"), array(), "array");
            echo "
                            ";
        }
        // line 231
        echo "                        ";
    }

    // line 237
    public function block_pNavigationSideMenuWrapper($context, array $blocks = array())
    {
        // line 238
        echo "\t\t\t\t<nav class=\"navbar-default hidden-xs col-sm-3 col-md-2\" id=\"sidebar\" role=\"navigation\">
\t\t\t\t\t<div class=\"user_card bg-primary\">
\t\t\t\t\t\t<div class=\"user_photo\" style=\"background-image: url('";
        // line 240
        echo twig_escape_filter($this->env, ($context["sUserPhotoUrl"] ?? null), "html", null, true);
        echo "');\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"user_infos\">
\t\t\t\t\t\t\t<div class=\"user_fullname\">";
        // line 243
        echo twig_escape_filter($this->env, ($context["sUserFullname"] ?? null), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t<div class=\"user_email dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"user_options\">
\t\t\t\t\t\t\t\t\t";
        // line 246
        echo twig_escape_filter($this->env, ($context["sUserEmail"] ?? null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu user_options\" aria-labelledby=\"user_options\">
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", array()), "generate", array(0 => "p_user_profile_brick"), "method"), "html", null, true);
        echo "\"><span class=\"brick_icon fa fa-user fa-lg fa-fw\"></span>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array("Brick:Portal:UserProfile:Navigation:Dropdown:MyProfil")), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t";
        // line 251
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array"), "portals", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["aPortal"]) {
            // line 252
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["aPortal"], "id", array()) != $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array"), "properties", array()), "id", array()))) {
                // line 253
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["sGlyphiconClass"] = ((($this->getAttribute($context["aPortal"], "id", array()) == "backoffice")) ? ("fa-list-alt") : ("fa-external-link"));
                // line 254
                echo "\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["aPortal"], "url", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array"), "properties", array()), "allowed_portals", array()), "opening_mode", array()) == "tab")) {
                    echo "target=\"_blank\"";
                }
                echo " title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array($this->getAttribute($context["aPortal"], "label", array()))), "html", null, true);
                echo "\"><span class=\"brick_icon fa ";
                echo twig_escape_filter($this->env, ($context["sGlyphiconClass"] ?? null), "html", null, true);
                echo " fa-lg fa-fw\"></span>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array($this->getAttribute($context["aPortal"], "label", array()))), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 256
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aPortal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 257
        echo "\t\t\t\t\t\t\t\t\t";
        // line 258
        echo "\t\t\t\t\t\t\t\t\t";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array"), "portals", array())) > 1)) {
            // line 259
            echo "\t\t\t\t\t\t\t\t\t\t<li role=\"separator\" class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 261
        echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", array(), "array"), "html", null, true);
        echo "pages/logoff.php\"><span class=\"brick_icon fa fa-sign-out fa-lg fa-fw\"></span>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array("Brick:Portal:UserProfile:Navigation:Dropdown:Logout")), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t";
        // line 267
        $this->displayBlock('pNavigationSideMenu', $context, $blocks);
        // line 287
        echo "\t\t\t\t\t</div>

                    ";
        // line 289
        $this->displayBlock('pPageUIExtensionNavigationMenuSidebar', $context, $blocks);
        // line 294
        echo "
\t\t\t\t\t";
        // line 295
        if ( !(null === $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array"), "properties", array()), "logo", array()))) {
            // line 296
            echo "\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t";
            // line 297
            $this->displayBlock('pNavigationSideMenuLogo', $context, $blocks);
            // line 306
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 308
        echo "\t\t\t\t</nav>
\t\t\t";
    }

    // line 267
    public function block_pNavigationSideMenu($context, array $blocks = array())
    {
        // line 268
        echo "\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t\t<li class=\"brick_menu_item ";
        // line 269
        if ( !array_key_exists("oBrick", $context)) {
            echo "active";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", array()), "generate", array(0 => "p_home"), "method"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<span class=\"brick_icon fa fa-home fa-2x\"></span>
\t\t\t\t\t\t\t\t\t\t";
        // line 272
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array("Page:Home")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        // line 275
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array"), "bricks_ordering", array()), "navigation_menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["brick"]) {
            // line 276
            echo "\t\t\t\t\t\t\t\t\t";
            if ((($this->getAttribute($context["brick"], "GetActive", array()) && $this->getAttribute($context["brick"], "GetVisibleNavigationMenu", array())) &&  !(null === $this->getAttribute($context["brick"], "GetRouteName", array())))) {
                // line 277
                echo "\t\t\t\t\t\t\t\t\t\t<li class=\"brick_menu_item ";
                if ((array_key_exists("oBrick", $context) && ($this->getAttribute($context["brick"], "id", array()) == $this->getAttribute(($context["oBrick"] ?? null), "id", array())))) {
                    echo "active";
                }
                echo "\" data-brick-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["brick"], "GetId", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 278
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", array()), "generate", array(0 => $this->getAttribute($context["brick"], "GetRouteName", array()), 1 => array("sBrickId" => $this->getAttribute($context["brick"], "GetId", array()))), "method"), "html", null, true);
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.routes", array(), "array", false, true), $this->getAttribute($context["brick"], "GetRouteName", array()), array(), "array", false, true), "hash", array(), "array", true, true)) {
                    echo "#";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.routes", array(), "array"), $this->getAttribute($context["brick"], "GetRouteName", array()), array(), "array"), "hash", array(), "array"), "html", null, true);
                }
                echo "\" ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.routes", array(), "array", false, true), $this->getAttribute($context["brick"], "GetRouteName", array()), array(), "array", false, true), "navigation_menu_attr", array(), "array", true, true)) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.routes", array(), "array"), $this->getAttribute($context["brick"], "GetRouteName", array()), array(), "array"), "navigation_menu_attr", array(), "array"));
                    foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                        echo " ";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\"";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                echo " ";
                if ($this->getAttribute($context["brick"], "GetModal", array())) {
                    echo "data-toggle=\"modal\" data-target=\"#modal-for-all\"";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"brick_icon ";
                // line 279
                echo twig_escape_filter($this->env, $this->getAttribute($context["brick"], "GetDecorationClassNavigationMenu", array()), "html", null, true);
                echo "\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 280
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array($this->getAttribute($context["brick"], "GetTitleNavigationMenu", array()))), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 284
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 285
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
    }

    // line 289
    public function block_pPageUIExtensionNavigationMenuSidebar($context, array $blocks = array())
    {
        // line 290
        echo "                        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array", false, true), "ui_extensions", array(), "any", false, true), "html", array(), "any", false, true), twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_NAVIGATION_MENU"), array(), "array", true, true)) {
            // line 291
            echo "                            ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array"), "ui_extensions", array()), "html", array()), twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_NAVIGATION_MENU"), array(), "array");
            echo "
                        ";
        }
        // line 293
        echo "                    ";
    }

    // line 297
    public function block_pNavigationSideMenuLogo($context, array $blocks = array())
    {
        // line 298
        echo "\t\t\t\t\t\t\t\t";
        // line 299
        echo "\t\t\t\t\t\t\t\t";
        if ($this->getAttribute(($context["app"] ?? null), "debug", array(), "array")) {
            // line 300
            echo "\t\t\t\t\t\t\t\t\t<div style=\"position: fixed; bottom: 0px; left: 0px; z-index: 9999;\">Debug : Taille <span class=\"hidden-sm hidden-md hidden-lg\">XS</span><span class=\"hidden-xs hidden-md hidden-lg\">SM</span><span class=\"hidden-xs hidden-sm hidden-lg\">MD</span><span class=\"hidden-xs hidden-sm hidden-md\">LG</span></div>
\t\t\t\t\t\t\t\t";
        }
        // line 302
        echo "\t\t\t\t\t\t\t\t<a href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_config_parameter')->getCallable(), array("app_icon_url")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array"), "properties", array()), "name", array()))), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array"), "properties", array()), "logo", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array"), "properties", array()), "name", array()))), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
    }

    // line 312
    public function block_pMainWrapper($context, array $blocks = array())
    {
        // line 313
        echo "\t\t<div class=\"container-fluid\" id=\"main-wrapper\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-9 col-md-10 col-sm-offset-3 col-md-offset-2\">

                    ";
        // line 317
        if ((twig_length_filter($this->env, $this->getAttribute(($context["app"] ?? null), "combodo.current_user.session_messages", array(), "array")) > 0)) {
            // line 318
            echo "\t\t\t\t\t\t<section class=\"row\" id=\"session-messages\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
                                ";
            // line 320
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? null), "combodo.current_user.session_messages", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["sessionMessage"]) {
                // line 321
                echo "\t\t\t\t\t\t\t\t\t<div class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sessionMessage"], "cssClass", array(), "array"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sessionMessage"], "message", array(), "array"), "html", null, true);
                echo "</div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sessionMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 323
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</section>
                    ";
        }
        // line 326
        echo "
\t\t\t\t\t<section class=\"row\" id=\"main-header\">
\t\t\t\t\t\t";
        // line 328
        $this->displayBlock('pMainHeader', $context, $blocks);
        // line 330
        echo "\t\t\t\t\t</section>

\t\t\t\t\t<section class=\"row\" id=\"main-content\">
\t\t\t\t\t\t";
        // line 333
        $this->displayBlock('pMainContent', $context, $blocks);
        // line 335
        echo "\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 339
        $this->displayBlock('pPageUIExtensionMainContent', $context, $blocks);
        // line 344
        echo "\t\t</div>
\t\t";
    }

    // line 328
    public function block_pMainHeader($context, array $blocks = array())
    {
        // line 329
        echo "\t\t\t\t\t\t";
    }

    // line 333
    public function block_pMainContent($context, array $blocks = array())
    {
        // line 334
        echo "\t\t\t\t\t\t";
    }

    // line 339
    public function block_pPageUIExtensionMainContent($context, array $blocks = array())
    {
        // line 340
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array", false, true), "ui_extensions", array(), "any", false, true), "html", array(), "any", false, true), twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_MAIN_CONTENT"), array(), "array", true, true)) {
            // line 341
            echo "                    ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array"), "ui_extensions", array()), "html", array()), twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_MAIN_CONTENT"), array(), "array");
            echo "
                ";
        }
        // line 343
        echo "\t\t\t";
    }

    // line 348
    public function block_pPageFooter($context, array $blocks = array())
    {
        // line 349
        echo "\t\t\t\t";
        // line 350
        echo "\t\t\t";
    }

    // line 353
    public function block_pModalForAllWrapper($context, array $blocks = array())
    {
        // line 354
        echo "\t\t\t<div class=\"modal fade\" id=\"modal-for-all\" role=\"dialog\" tabindex=\"-1\">
\t\t\t\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t";
        // line 357
        $this->loadTemplate("itop-portal-base/portal/src/views/helpers/loader.html.twig", "itop-portal-base/portal/src/views/layout.html.twig", 357)->display($context);
        // line 358
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
    }

    // line 362
    public function block_pModalForAlert($context, array $blocks = array())
    {
        // line 363
        echo "\t\t\t<div class=\"modal fade\" id=\"modal-for-alert\" role=\"dialog\" tabindex=\"-1\">
\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 367
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array("Portal:Button:Close")), "html", null, true);
        echo "\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t<h4 class=\"modal-title\"></h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t<div class=\"alert\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">";
        // line 374
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array("Portal:Button:Close")), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
    }

    // line 382
    public function block_pPageOverlay($context, array $blocks = array())
    {
        // line 383
        echo "\t\t\t<div id=\"page_overlay\" class=\"global_overlay\">
\t\t\t\t<div class=\"overlay_content\">
\t\t\t\t\t";
        // line 385
        $this->loadTemplate("itop-portal-base/portal/src/views/helpers/loader.html.twig", "itop-portal-base/portal/src/views/layout.html.twig", 385)->display($context);
        // line 386
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
    }

    // line 390
    public function block_pPageUIExtensionBody($context, array $blocks = array())
    {
        // line 391
        echo "\t\t\t";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array", false, true), "ui_extensions", array(), "any", false, true), "html", array(), "any", false, true), twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_BODY"), array(), "array", true, true)) {
            // line 392
            echo "\t\t\t\t";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array"), "ui_extensions", array()), "html", array()), twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_BODY"), array(), "array");
            echo "
\t\t\t";
        }
        // line 394
        echo "\t\t";
    }

    // line 397
    public function block_pPageLiveScripts($context, array $blocks = array())
    {
        // line 398
        echo "\t\t<script type=\"text/javascript\">
\t\t\t";
        // line 399
        $this->displayBlock('pPageLiveScriptHelpers', $context, $blocks);
        // line 453
        echo "\t\t\t
\t\t\t\$(document).ready(function(){
\t\t\t\t";
        // line 455
        $this->displayBlock('pPageReadyScripts', $context, $blocks);
        // line 512
        echo "\t\t\t});
\t\t</script>
\t";
    }

    // line 399
    public function block_pPageLiveScriptHelpers($context, array $blocks = array())
    {
        // line 400
        echo "\t\t\t\t// Helper to get the application root url
\t\t\t\tvar GetAbsoluteUrlAppRoot = function()
\t\t\t\t{
\t\t\t\t\treturn '";
        // line 403
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", array(), "array"), "html", null, true);
        echo "';
\t\t\t\t};
\t\t\t\t// Helper to add a parameter to an url
\t\t\t\tvar AddParameterToUrl = function(sUrl, sParamName, sParamValue)
\t\t\t\t{
\t\t\t\t\tsUrl += (sUrl.split('?')[1] ? '&':'?') + sParamName + '=' + sParamValue;
\t\t\t\t\treturn sUrl;
\t\t\t\t};
\t\t\t\t// Test is sString is a valid JSON string
\t\t\t\tvar IsJSONString = function(sString)
\t\t\t\t{
\t\t\t\t\ttry {
\t\t\t\t\t\tJSON.parse(sString);
\t\t\t\t\t} catch (oException) {
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\treturn true;
\t\t\t\t};
\t\t\t\tvar GetContentLoaderTemplate = function()
\t\t\t\t{
\t\t\t\t\treturn '<div class=\"content_loader\"><div class=\"icon glyphicon glyphicon-refresh\"></div><div class=\"message\">";
        // line 423
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array("Page:PleaseWait")), "html", null, true);
        echo "</div></div>';
\t\t\t\t};
\t\t\t\tvar ShowLoginDialog = function()
\t\t\t\t{
                    var oModalElem = \$('#modal-for-alert').clone();
                    oModalElem.attr('id', '');
                    oModalElem.find('.modal-content .modal-header .modal-title').html('";
        // line 429
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array("Error:HTTP:401")), "js"), "html", null, true);
        echo "');
                    oModalElem.find('.modal-content .modal-body .alert').addClass('alert-danger').html('";
        // line 430
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array("Portal:ErrorUserLoggedOut")), "js"), "html", null, true);
        echo "');

                    oModalElem.find('.modal-content .modal-body button').replaceWith( \$('<button type=\"button\" class=\"btn btn-primary\" onclick=\"javascript:window.location.reload();\">";
        // line 432
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array("UI:LogOff:ClickHereToLoginAgain")), "js"), "html", null, true);
        echo "</button>') );

                    oModalElem.appendTo('body');
                    oModalElem.modal('show');
\t\t\t\t};
\t\t\t\tvar ShowErrorDialog = function(sBody, sTitle)
\t\t\t\t{
\t\t\t\t    if(sTitle === undefined)
\t\t\t\t\t{
\t\t\t\t\t    sTitle = '";
        // line 441
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array("Error:HTTP:500")), "js"), "html", null, true);
        echo "';
\t\t\t\t\t}
\t\t\t\t    if(sBody === undefined)
\t\t\t\t\t{
                        sBody = '";
        // line 445
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_format')->getCallable(), array("Error:XHR:Fail", twig_constant("ITOP_APPLICATION_SHORT"))), "js"), "html", null, true);
        echo "';
\t\t\t\t\t}
\t\t\t\t\tvar oModalElem = \$('#modal-for-alert');
                    oModalElem.find('.modal-content .modal-header .modal-title').html(sTitle);
                    oModalElem.find('.modal-content .modal-body .alert').addClass('alert-danger').html(sBody);
                    oModalElem.modal('show');
\t\t\t\t};
\t\t\t";
    }

    // line 455
    public function block_pPageReadyScripts($context, array $blocks = array())
    {
        // line 456
        echo "\t\t\t\t\t// Hack to enable a same modal to load content from different urls
\t\t\t\t\t\$('body').on('hidden.bs.modal', '.modal#modal-for-all', function () {
\t\t\t\t\t\t\$(this).removeData('bs.modal');
\t\t\t\t\t\t\$(this).find('.modal-content').html(GetContentLoaderTemplate());
\t\t\t\t\t});
\t\t\t\t\t// Hack to enable multiple modals by making sure the .modal-open class is set to the <body> when there is at least one modal open left
\t\t\t\t\t\$('body').on('hidden.bs.modal', function () {
\t\t\t\t\t\tif(\$('.modal.in').length > 0)
\t\t\t\t\t\t{
\t\t\t\t\t\t\t\$('body').addClass('modal-open');
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t// Hide tooltips when a modal is opening, otherwise it might be overlapping it
\t\t\t\t\t\$('body').on('show.bs.modal', function () {
\t\t\t\t\t\t\$(this).find('.tooltip.in').tooltip('hide');
\t\t\t\t\t});
\t\t\t\t\t// Display a error message on modal if the content could not be loaded.
\t\t\t\t\t// Note : As of now, we can't display a more detailled message based on the response because Bootstrap doesn't pass response data with the loaded event.
\t\t\t\t\t\$('body').on('loaded.bs.modal', function (oEvent) {
\t\t\t\t\t\tvar sModalContent = \$(oEvent.target).find('.modal-content').html();
\t\t\t\t\t\t
\t\t\t\t\t\tif( (sModalContent === '') || (sModalContent.replace(/[\\n\\r\\t]+/g, '') === GetContentLoaderTemplate()) )
\t\t\t\t\t\t{
\t\t\t\t\t\t\t\$(oEvent.target).modal('hide');
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t\t\t// Handle AJAX errors (exceptions (500), logout (401), ...)
\t\t\t\t\t\$(document).ajaxError(function(oEvent, oXHR, oSettings, sError){
\t\t\t\t\t    if(oXHR.status === 401)
\t\t\t\t\t\t{
\t\t\t\t\t\t    ShowLoginDialog();
\t\t\t\t\t\t}
                        else if(oXHR.status === 404)
                        {
                            ShowErrorDialog('";
        // line 491
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array("UI:ObjectDoesNotExist")), "js"), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), array("Error:HTTP:404")), "js"), "html", null, true);
        echo "');
                        }
                        else if(oXHR.responseText !== undefined && IsJSONString(oXHR.responseText) === true)
                        {
                            var oData = JSON.parse(oXHR.responseText);
                            // Catching AJAX exception with detailed error.
                            if( (oData.error_message !== undefined) && (oData.error_title !== undefined) )
                            {
                                ShowErrorDialog(oData.error_message, oData.error_title);
                            }
                            else
                            {
                                ShowErrorDialog();
                            }
                        }
                        else
                        {
                            ShowErrorDialog();
                        }
\t\t\t\t\t});
\t\t\t\t";
    }

    // line 516
    public function block_pPageExtensionsScripts($context, array $blocks = array())
    {
        // line 517
        echo "        ";
        // line 518
        echo "        ";
        if ( !(null === $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array"), "ui_extensions", array()), "js_inline", array()))) {
            // line 519
            echo "\t\t\t<script type=\"text/javascript\">
\t\t\t\t";
            // line 520
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", array(), "array"), "ui_extensions", array()), "js_inline", array());
            echo "
\t\t\t</script>
        ";
        }
        // line 523
        echo "\t";
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/src/views/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1459 => 523,  1453 => 520,  1450 => 519,  1447 => 518,  1445 => 517,  1442 => 516,  1415 => 491,  1378 => 456,  1375 => 455,  1363 => 445,  1356 => 441,  1344 => 432,  1339 => 430,  1335 => 429,  1326 => 423,  1303 => 403,  1298 => 400,  1295 => 399,  1289 => 512,  1287 => 455,  1283 => 453,  1281 => 399,  1278 => 398,  1275 => 397,  1271 => 394,  1265 => 392,  1262 => 391,  1259 => 390,  1253 => 386,  1251 => 385,  1247 => 383,  1244 => 382,  1233 => 374,  1223 => 367,  1217 => 363,  1214 => 362,  1207 => 358,  1205 => 357,  1200 => 354,  1197 => 353,  1193 => 350,  1191 => 349,  1188 => 348,  1184 => 343,  1178 => 341,  1175 => 340,  1172 => 339,  1168 => 334,  1165 => 333,  1161 => 329,  1158 => 328,  1153 => 344,  1151 => 339,  1145 => 335,  1143 => 333,  1138 => 330,  1136 => 328,  1132 => 326,  1127 => 323,  1116 => 321,  1112 => 320,  1108 => 318,  1106 => 317,  1100 => 313,  1097 => 312,  1088 => 303,  1081 => 302,  1077 => 300,  1074 => 299,  1072 => 298,  1069 => 297,  1065 => 293,  1059 => 291,  1056 => 290,  1053 => 289,  1048 => 285,  1042 => 284,  1035 => 280,  1031 => 279,  1004 => 278,  995 => 277,  992 => 276,  988 => 275,  982 => 272,  977 => 270,  971 => 269,  968 => 268,  965 => 267,  960 => 308,  956 => 306,  954 => 297,  951 => 296,  949 => 295,  946 => 294,  944 => 289,  940 => 287,  938 => 267,  926 => 261,  922 => 259,  919 => 258,  917 => 257,  911 => 256,  895 => 254,  892 => 253,  889 => 252,  885 => 251,  879 => 250,  872 => 246,  866 => 243,  860 => 240,  856 => 238,  853 => 237,  849 => 231,  843 => 229,  840 => 228,  837 => 227,  833 => 208,  827 => 207,  820 => 203,  816 => 202,  789 => 201,  780 => 200,  777 => 199,  773 => 198,  767 => 195,  762 => 193,  755 => 192,  752 => 191,  747 => 180,  743 => 178,  735 => 176,  733 => 175,  728 => 174,  725 => 173,  719 => 232,  717 => 227,  712 => 224,  704 => 222,  700 => 220,  697 => 219,  695 => 218,  689 => 217,  679 => 215,  676 => 214,  673 => 213,  669 => 212,  663 => 211,  660 => 210,  657 => 209,  655 => 191,  646 => 185,  642 => 184,  638 => 183,  635 => 182,  633 => 173,  623 => 165,  620 => 164,  616 => 310,  613 => 237,  610 => 235,  607 => 164,  605 => 163,  602 => 162,  598 => 160,  591 => 156,  587 => 155,  583 => 154,  580 => 153,  577 => 152,  574 => 151,  570 => 395,  568 => 390,  565 => 389,  563 => 382,  560 => 381,  557 => 362,  555 => 353,  551 => 351,  549 => 348,  545 => 346,  543 => 312,  540 => 311,  538 => 162,  535 => 161,  532 => 151,  529 => 150,  524 => 149,  515 => 142,  512 => 141,  503 => 139,  498 => 138,  495 => 137,  491 => 135,  487 => 134,  483 => 133,  478 => 132,  474 => 130,  470 => 129,  466 => 128,  461 => 127,  457 => 125,  452 => 124,  448 => 122,  443 => 121,  438 => 119,  434 => 117,  429 => 116,  424 => 114,  420 => 112,  416 => 111,  412 => 110,  408 => 109,  404 => 108,  400 => 107,  396 => 106,  391 => 105,  386 => 103,  381 => 101,  376 => 99,  372 => 97,  368 => 96,  364 => 95,  360 => 94,  356 => 93,  352 => 92,  348 => 91,  344 => 90,  339 => 89,  333 => 87,  327 => 85,  325 => 84,  320 => 83,  317 => 82,  313 => 80,  307 => 77,  304 => 76,  301 => 75,  299 => 74,  296 => 73,  292 => 71,  289 => 70,  280 => 68,  275 => 67,  272 => 66,  270 => 65,  264 => 63,  261 => 62,  259 => 61,  256 => 60,  247 => 58,  242 => 57,  239 => 56,  234 => 54,  229 => 52,  225 => 50,  221 => 49,  217 => 48,  212 => 47,  207 => 45,  202 => 43,  197 => 41,  193 => 39,  189 => 38,  185 => 37,  181 => 36,  177 => 35,  172 => 34,  167 => 32,  162 => 30,  160 => 29,  157 => 28,  145 => 25,  141 => 24,  138 => 23,  133 => 524,  131 => 516,  128 => 515,  126 => 397,  123 => 396,  121 => 150,  117 => 149,  114 => 148,  112 => 82,  109 => 81,  107 => 73,  104 => 72,  102 => 28,  97 => 26,  92 => 25,  89 => 23,  80 => 15,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  63 => 8,  60 => 7,  57 => 6,  54 => 5,  52 => 4,  49 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "itop-portal-base/portal/src/views/layout.html.twig", "C:\\xampp\\htdocs\\itsm\\env-production\\itop-portal-base\\portal\\src\\views\\layout.html.twig");
    }
}
