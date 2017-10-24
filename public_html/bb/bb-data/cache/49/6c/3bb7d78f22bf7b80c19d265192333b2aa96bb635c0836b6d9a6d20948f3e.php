<?php

/* mod_invoice_tax.phtml */
class __TwigTemplate_496c3bb7d78f22bf7b80c19d265192333b2aa96bb635c0836b6d9a6d20948f3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_default.phtml");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout_default.phtml";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["active_menu"] = "system";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meta_title($context, array $blocks = array())
    {
        echo "Tax";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 9
        echo gettext("Tax rules");
        echo "</a></li>
        <li><a href=\"#tab-new\">";
        // line 10
        echo gettext("New tax rule");
        echo "</a></li>
        <li><a href=\"#tab-settings\">";
        // line 11
        echo gettext("Tax settings");
        echo "</a></li>
        <li><a href=\"#tab-eu-vat\">";
        // line 12
        echo gettext("EU VAT");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td style=\"width: 2%\"><input type=\"checkbox\" class=\"batch-delete-master-checkbox\"/></td>
                        <td>";
        // line 22
        echo gettext("Name");
        echo "</td>
                        <td>";
        // line 23
        echo gettext("Country");
        echo "</td>
                        <td>";
        // line 24
        echo gettext("State/Region");
        echo "</td>
                        <td>";
        // line 25
        echo gettext("Tax rate");
        echo "</td>
                        <td>";
        // line 26
        echo gettext("Actions");
        echo "</td>
                    </tr>
                </thead>

                <tbody>
                ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "invoice_tax_get_list", array(0 => array("per_page" => 100)), "method"), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tax"]) {
            // line 32
            echo "                <tr>
                    <td><input type=\"checkbox\" class=\"batch-delete-checkbox\" data-item-id=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tax"]) ? $context["tax"] : null), "id"), "html", null, true);
            echo "\"/></td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tax"]) ? $context["tax"] : null), "name"), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 36
            if ($this->getAttribute((isset($context["tax"]) ? $context["tax"] : null), "country")) {
                // line 37
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_countries"), $this->getAttribute((isset($context["tax"]) ? $context["tax"] : null), "country"), array(), "array"), "html", null, true);
                echo "
                        ";
            } else {
                // line 39
                echo "                        ";
                echo gettext("Applies to any country");
                // line 40
                echo "                        ";
            }
            // line 41
            echo "                    </td>
                    <td>
                        ";
            // line 43
            if ($this->getAttribute((isset($context["tax"]) ? $context["tax"] : null), "state")) {
                // line 44
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tax"]) ? $context["tax"] : null), "state"), "html", null, true);
                echo "
                        ";
            } else {
                // line 46
                echo "                        ";
                echo gettext("Applies to any state");
                // line 47
                echo "                        ";
            }
            // line 48
            echo "                    </td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tax"]) ? $context["tax"] : null), "taxrate"), "html", null, true);
            echo "%</td>
                    <td class=\"actions\" style=\"width: 8%;\">
                        <a class=\"bb-button btn14\" href=\"";
            // line 51
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice/tax");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tax"]) ? $context["tax"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                        <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-reload=\"1\" data-api-confirm=\"Are you sure?\" href=\"";
            // line 52
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/tax_delete", array("id" => $this->getAttribute((isset($context["tax"]) ? $context["tax"] : null), "id")));
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>

                </tr>
                </tbody>

                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 59
            echo "                <tbody>
                    <tr>
                        <td colspan=\"5\">
                            ";
            // line 62
            echo gettext("The list is empty");
            // line 63
            echo "                        </td>
                    </tr>
                </tbody>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "            </table>
            ";
        // line 68
        $this->env->loadTemplate("partial_batch_delete.phtml")->display(array_merge($context, array("action" => "admin/invoice/batch_delete_tax")));
        // line 69
        echo "
        </div>
        
        <div class=\"tab_content nopadding\" id=\"tab-settings\">
            <form method=\"post\" action=\"";
        // line 73
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/system/update_params");
        echo "\" class=\"mainForm save api-form\" data-api-msg=\"Tax settings updated\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 76
        echo gettext("Enable tax support");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"tax_enabled\" value=\"1\"";
        // line 78
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_param", array(0 => array("key" => "tax_enabled")), "method")) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("Yes");
        echo "</label>
                            <input type=\"radio\" name=\"tax_enabled\" value=\"0\"";
        // line 79
        if ((!$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_param", array(0 => array("key" => "tax_enabled")), "method"))) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("No");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"submit\" value=\"";
        // line 83
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-eu-vat\">

            <div class=\"help\">
                <h3>";
        // line 91
        echo gettext("Automatic VAT Tax Rules Setup");
        echo "</h3>
                <p>";
        // line 92
        echo gettext("If you would like BoxBilling to automatically setup the EU VAT tax rules for you for all EU Member States then simply enter your VAT Label & local VAT rate below and click the submit button. <strong>This action will delete any existing tax rules</strong> and configure the VAT rates for all EU countries.");
        echo "</p>
            </div>
            <br/>
            <div class=\"aligncenter\">
                <a href=\"";
        // line 96
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/tax_setup_eu");
        echo "\" title=\"\" class=\"btn55 mr10 api-link\" data-api-reload=\"1\" data-api-confirm=\"It will overwrite your existing VAT rules. Are you sure?\"><img src=\"images/icons/middlenav/power.png\" alt=\"\"><span>Generate VAT rates</span></a>
            </div>
            <br/>
        </div>
        
        <div class=\"tab_content nopadding\" id=\"tab-new\">

            <form method=\"post\" action=\"";
        // line 103
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/tax_create");
        echo "\" class=\"mainForm save api-form\" data-api-reload=\"1\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 106
        echo gettext("Tax title");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"name\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "name"), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo gettext("sales Tax");
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 113
        echo gettext("Tax rate");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"taxrate\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "taxrate"), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo gettext("18");
        echo "\" style=\"width: 100px\"/> %
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 120
        echo gettext("Country");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "country", 1 => $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_countries"), 2 => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "country"), 3 => 0, 4 => "Apply to all countries"), "method"), "html", null, true);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 127
        echo gettext("State");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 130
        echo "                            <input type=\"text\" name=\"state\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "state"), "html", null, true);
        echo "\" placeholder=\"";
        echo gettext("Leave empty to apply to all states");
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"submit\" value=\"";
        // line 134
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_invoice_tax.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 134,  312 => 130,  307 => 127,  299 => 122,  294 => 120,  284 => 115,  279 => 113,  269 => 108,  264 => 106,  258 => 103,  248 => 96,  241 => 92,  237 => 91,  226 => 83,  215 => 79,  207 => 78,  202 => 76,  196 => 73,  190 => 69,  188 => 68,  185 => 67,  176 => 63,  174 => 62,  169 => 59,  157 => 52,  151 => 51,  146 => 49,  143 => 48,  140 => 47,  137 => 46,  131 => 44,  129 => 43,  125 => 41,  122 => 40,  119 => 39,  113 => 37,  111 => 36,  106 => 34,  102 => 33,  99 => 32,  94 => 31,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  57 => 12,  53 => 11,  49 => 10,  45 => 9,  40 => 6,  37 => 5,  31 => 2,  26 => 3,);
    }
}
