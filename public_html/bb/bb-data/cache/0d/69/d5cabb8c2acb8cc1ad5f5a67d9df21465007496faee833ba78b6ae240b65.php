<?php

/* mod_product_manage.phtml */
class __TwigTemplate_0d69d5cabb8c2acb8cc1ad5f5a67d9df21465007496faee833ba78b6ae240b65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_default.phtml");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
            'head' => array($this, 'block_head'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout_default.phtml";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["active_menu"] = "products";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Product configuration");
    }

    // line 6
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 7
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 8
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("product");
        echo "\">";
        echo gettext("Products");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "title"), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-settings\">";
        // line 19
        echo gettext("General settings");
        echo "</a></li>
        <li><a href=\"#tab-config\">";
        // line 20
        echo gettext("Configuration");
        echo "</a></li>
        <li><a href=\"#tab-addons\">";
        // line 21
        echo gettext("Addons");
        echo "</a></li>
        <li><a href=\"#tab-upgrades\">";
        // line 22
        echo gettext("Upgrades");
        echo "</a></li>
        <li><a href=\"#tab-links\">";
        // line 23
        echo gettext("Links");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <form method=\"post\" action=\"admin/product/update\" class=\"mainForm api-form save\" data-api-msg=\"Product configuration updated\" name=\"form\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-settings\">

            <div class=\"help\">
                <h5>";
        // line 32
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "type")), "html", null, true);
        echo " ";
        echo gettext("General settings");
        echo "</h5>
            </div>

            <fieldset>
                <div class=\"rowElem noborder\">
                    <label>";
        // line 37
        echo gettext("Category");
        echo ":</label>
                    <div class=\"formRight \">
                        ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "product_category_id", 1 => $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "product_category_get_pairs"), 2 => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "product_category_id"), 3 => 0, 4 => "None"), "method"), "html", null, true);
        echo "
                    </div>
                    <div class=\"fix\"></div>
                </div>

                ";
        // line 44
        if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "formbuilder")), "method")) {
            // line 45
            echo "                <div class=\"rowElem\">
                    <label>";
            // line 46
            echo gettext("Order Form");
            echo ":</label>
                    <div class=\"formRight\">
                        ";
            // line 48
            $context["tpl"] = (("mod_service" . $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "type")) . "_order_form.phtml");
            // line 49
            echo "                        ";
            if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_template_exists", array(0 => array("file" => (isset($context["tpl"]) ? $context["tpl"] : null))), "method")) {
                // line 50
                echo "                        <div class=\"nNote nInformation\"><p>Please edit <strong>";
                echo twig_escape_filter($this->env, (isset($context["tpl"]) ? $context["tpl"] : null), "html", null, true);
                echo "</strong> file in order to change order form for <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "type"), "html", null, true);
                echo "</strong> category products.</p></div>
                       <a href=\"";
                // line 51
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("filemanager/ide");
                echo "\" class=\"button blueBtn\">";
                echo gettext("Open Editor");
                echo "</a>
                        ";
            } else {
                // line 53
                echo "                       ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "form_id", 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formbuilder_get_pairs"), 2 => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "form_id"), 3 => 0, 4 => "None"), "method"), "html", null, true);
                echo "
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href=\"";
                // line 55
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("extension/settings/formbuilder");
                if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "form_id")) {
                    echo "?id=";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "form_id"), "html", null, true);
                }
                echo "\" class=\"button blueBtn\" id=\"formbuilder_btn\">";
                echo (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "form_id")) ? ("Edit Form") : ("Add new form"));
                echo "</a>
                        ";
            }
            // line 57
            echo "                    </div>
                    <div class=\"fix\"></div>
                </div>
                ";
        }
        // line 61
        echo "                <div class=\"rowElem\">
                    <label>";
        // line 62
        echo gettext("Status");
        echo ":</label>
                    <div class=\"formRight\">
                        <input type=\"radio\" name=\"status\" value=\"enabled\"";
        // line 64
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "status") == "enabled")) {
            echo " checked=\"checked\"";
        }
        echo " id=\"status-enabled\"/><label for=\"status-enabled\">";
        echo gettext("Enabled");
        echo "</label>
                        <input type=\"radio\" name=\"status\" value=\"disabled\"";
        // line 65
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "status") == "disabled")) {
            echo " checked=\"checked\"";
        }
        echo " id=\"status-disabled\"/><label for=\"status-disabled\">";
        echo gettext("Disabled");
        echo "</label>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                <div class=\"rowElem\">
                    <label>";
        // line 70
        echo gettext("Hidden");
        echo ":</label>
                    <div class=\"formRight\">
                        <input type=\"radio\" name=\"hidden\" value=\"1\"";
        // line 72
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "hidden")) {
            echo " checked=\"checked\"";
        }
        echo " id=\"hidden-yes\"/><label for=\"hidden-yes\">";
        echo gettext("Yes");
        echo "</label>
                        <input type=\"radio\" name=\"hidden\" value=\"0\"";
        // line 73
        if ((!$this->getAttribute((isset($context["product"]) ? $context["product"] : null), "hidden"))) {
            echo " checked=\"checked\"";
        }
        echo " id=\"hidden-no\"/><label for=\"hidden-no\">";
        echo gettext("No");
        echo "</label>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                <div class=\"rowElem\">
                    <label>";
        // line 78
        echo gettext("Activation");
        echo ":</label>
                    <div class=\"formRight\">
                        <input type=\"radio\" name=\"setup\" value=\"after_order\"";
        // line 80
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "setup") == "after_order")) {
            echo " checked=\"checked\"";
        }
        echo " id=\"activation-after-order\"/><label for=\"activation-after-order\">";
        echo gettext("After order is placed");
        echo "</label>
                        <input type=\"radio\" name=\"setup\" value=\"after_payment\"";
        // line 81
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "setup") == "after_payment")) {
            echo " checked=\"checked\"";
        }
        echo " id=\"activation-after-payment\"/><label for=\"activation-after-payment\">";
        echo gettext("After payment is received");
        echo "</label>
                        <input type=\"radio\" name=\"setup\" value=\"manual\"";
        // line 82
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "setup") == "manual")) {
            echo " checked=\"checked\"";
        }
        echo " id=\"activation-manual\"/><label for=\"activation-manual\">";
        echo gettext("Manual activation");
        echo "</label>
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
        // line 88
        echo gettext("Icon/Image URL");
        echo ":</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"icon_url\" id=\"bb-icon\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "icon_url"), "html", null, true);
        echo "\" placeholder=\"\" style=\"width: 80%\"/>
                        <input type=\"button\" value=\"";
        // line 91
        echo gettext("Browse");
        echo "\" class=\"bHtml blueBtn button\" />
                    </div>
                    <div class=\"fix\"></div>
                </div>
                <div class=\"rowElem\">
                    <label>";
        // line 96
        echo gettext("Title");
        echo ":</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"title\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "title"), "html", null, true);
        echo "\" required=\"required\" placeholder=\"\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                <div class=\"rowElem\">
                    <label>";
        // line 103
        echo gettext("Slug");
        echo ":</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"slug\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "slug"), "html", null, true);
        echo "\" required=\"required\" placeholder=\"\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                
                ";
        // line 110
        $this->env->loadTemplate("partial_pricing.phtml")->display(array_merge($context, array("product" => (isset($context["product"]) ? $context["product"] : null))));
        // line 111
        echo "
            </fieldset>

           <fieldset>
               <legend>";
        // line 115
        echo gettext("Product / service description");
        echo "</legend>
                <textarea name=\"description\" cols=\"5\" rows=\"5\" class=\"bb-textarea\">";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true);
        echo "</textarea>
                
                <input type=\"submit\" value=\"";
        // line 118
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
           </fieldset>
        <div class=\"fix\"></div>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-addons\">
            <div class=\"help\">
                <h5>";
        // line 125
        echo gettext("Choose which addons you would like to offer with");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "title"), "html", null, true);
        echo "</h5>
            </div>

            <table class=\"tableStatic wide\">
                <tbody>
                    ";
        // line 130
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "product_addon_get_pairs"));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["addon_id"] => $context["addon_title"]) {
            // line 131
            echo "                    <tr ";
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                echo "class=\"noborder\"";
            }
            echo ">
                        <td style=\"width:5%\">
                            <input type=\"hidden\" name=\"addons[";
            // line 133
            echo twig_escape_filter($this->env, (isset($context["addon_id"]) ? $context["addon_id"] : null), "html", null, true);
            echo "]\" value=\"0\">
                            <input type=\"checkbox\" name=\"addons[";
            // line 134
            echo twig_escape_filter($this->env, (isset($context["addon_id"]) ? $context["addon_id"] : null), "html", null, true);
            echo "]\" value=\"1\" id=\"addon_";
            echo twig_escape_filter($this->env, (isset($context["addon_id"]) ? $context["addon_id"] : null), "html", null, true);
            echo "\" ";
            if (twig_in_filter((isset($context["addon_id"]) ? $context["addon_id"] : null), (isset($context["assigned_addons"]) ? $context["assigned_addons"] : null))) {
                echo "checked=\"checked\"";
            }
            echo "/>
                        </td>
                        <td><label for=\"addon_";
            // line 136
            echo twig_escape_filter($this->env, (isset($context["addon_id"]) ? $context["addon_id"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["addon_title"]) ? $context["addon_title"] : null), "html", null, true);
            echo "</label></td>
                        <td style=\"width:5%\"><a class=\"bb-button btn14\" href=\"";
            // line 137
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/product/addon");
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["addon_id"]) ? $context["addon_id"] : null), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a></td>
                    </tr>
                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 140
            echo "                    <tr>
                        <td colspan=\"3\">";
            // line 141
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['addon_id'], $context['addon_title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "                </tbody>
                <tfoot>
                    <tr>
                        <td colspan=\"3\">
                            <a href=\"";
        // line 148
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("product/addons");
        echo "#tab-new\" title=\"\" class=\"btnIconLeft mr10 mt5\"><img src=\"images/icons/dark/settings2.png\" alt=\"\" class=\"icon\"><span>";
        echo gettext("Create new addon");
        echo "</span></a>
                        </td>
                    </tr>
                </tfoot>
            </table>
            <input type=\"submit\" value=\"";
        // line 153
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />


            <div class=\"fix\"></div>
        </div>

        <div class=\"tab_content nopadding mainForm\" id=\"tab-upgrades\">
            <div class=\"help\">
                <h5>";
        // line 161
        echo gettext("Choose which products can client upgrade to");
        echo "</h5>
            </div>
            <fieldset>
                <div class=\"rowElem noborder\">
                    <label>";
        // line 165
        echo gettext("Product Upgrades");
        echo "</label>
                    <div class=\"formRight\">
                        ";
        // line 167
        $context["products"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "product_get_pairs");
        // line 168
        echo "                        <input type=\"hidden\" name=\"upgrades\" value=\"\">
                        <select name=\"upgrades[]\" multiple=\"multiple\" class=\"multiple\" size=\"";
        // line 169
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null)), "html", null, true);
        echo "\">
                            ";
        // line 170
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["ptitle"]) {
            // line 171
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" ";
            if ($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "upgrades"), (isset($context["id"]) ? $context["id"] : null), array(), "array")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["ptitle"]) ? $context["ptitle"] : null), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['ptitle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "                        </select>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                <input type=\"submit\" value=\"";
        // line 177
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
        echo "\" />
            </fieldset>
        </div>

        <input type=\"hidden\" name=\"id\" value=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
        echo "\" />
        </form>

        <div class=\"tab_content nopadding\" id=\"tab-config\">
            ";
        // line 186
        $context["service_partial"] = (("mod_service" . $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "type")) . "_config.phtml");
        // line 187
        echo "            ";
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_template_exists", array(0 => array("file" => (isset($context["service_partial"]) ? $context["service_partial"] : null))), "method")) {
            // line 188
            echo "                ";
            $template = $this->env->resolveTemplate((isset($context["service_partial"]) ? $context["service_partial"] : null));
            $template->display(array_merge($context, array("product" => (isset($context["product"]) ? $context["product"] : null))));
            // line 189
            echo "            ";
        } else {
            // line 190
            echo "                <div class=\"help\">
                    <h5>";
            // line 191
            echo gettext("No additional configuration for this product is required");
            echo "</h5>
                </div>
            ";
        }
        // line 194
        echo "            <div class=\"fix\"></div>
        </div>
        
        <div class=\"tab_content nopadding mainForm\" id=\"tab-links\">
            <fieldset>
            <div class=\"help\">
                <h5>";
        // line 200
        echo gettext("Product links");
        echo "</h5>
            </div>

            <div class=\"rowElem noborder\">
                <label>";
        // line 204
        echo gettext("Product ID");
        echo "</label>
                <div class=\"formRight\">
                    <input type=\"text\" value=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
        echo "\"/>
                    <div class=\"fix\"></div>
                </div>
            </div>

            <div class=\"rowElem\">
                <label>";
        // line 212
        echo gettext("Order page with ID");
        echo "</label>
                <div class=\"formRight\">
                    <input type=\"text\" value=\"";
        // line 214
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("order");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
        echo "\"/>
                    <div class=\"fix\"></div>
                </div>
            </div>

            <div class=\"rowElem\">
                <label>";
        // line 220
        echo gettext("Order page with slug");
        echo "</label>
                <div class=\"formRight\">
                    <input type=\"text\" value=\"";
        // line 222
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("order");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "slug"), "html", null, true);
        echo "\"/>
                    <div class=\"fix\"></div>
                </div>
            </div>

            </fieldset>
            
            <div class=\"body aligncenter\">
                <a href=\"";
        // line 230
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("order");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "slug"), "html", null, true);
        echo "\" title=\"\" class=\"btn55 mr10\" target=\"_blank\"><img src=\"images/icons/middlenav/preview.png\" alt=\"\"><span>";
        echo gettext("View as client<");
        echo "/span></a>
            </div>

            <div class=\"fix\"></div>
        </div>

    </div>

</div>
";
    }

    // line 242
    public function block_head($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "bb_editor", array(0 => ".bb-textarea"), "method"), "html", null, true);
    }

    // line 244
    public function block_js($context, array $blocks = array())
    {
        // line 245
        echo "<script type=\"text/javascript\">
\$(function() {
\t\$(\".bHtml\").click( function() {
\t\tjAlert(bb.load('";
        // line 248
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("filemanager/icons");
        echo "', {rel:\"bb-icon\"}), '";
        echo gettext("Select icon and click OK");
        echo "');
\t});
    \$(\"[name='form_id']\").change( function(){
        var form_id = \$(this).val();
        var btn = \$(\"#formbuilder_btn\");
            if (form_id !=\"\"){
            btn.html(\"Edit form\");
                var href = \"";
        // line 255
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("extension/settings/formbuilder", array("id" => ""));
        echo "\" + form_id;
                btn.attr('href', href);
        }
        else{
                btn.html(\"Add new form\");
                btn.attr(\"href\", \"";
        // line 260
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("extension/settings/formbuilder");
        echo "\");
            }

    });

});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_product_manage.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  648 => 260,  640 => 255,  628 => 248,  623 => 245,  620 => 244,  614 => 242,  596 => 230,  583 => 222,  578 => 220,  567 => 214,  562 => 212,  553 => 206,  548 => 204,  541 => 200,  533 => 194,  527 => 191,  524 => 190,  521 => 189,  517 => 188,  514 => 187,  512 => 186,  505 => 182,  498 => 178,  494 => 177,  488 => 173,  473 => 171,  469 => 170,  465 => 169,  462 => 168,  460 => 167,  455 => 165,  448 => 161,  437 => 153,  427 => 148,  421 => 144,  412 => 141,  409 => 140,  391 => 137,  385 => 136,  374 => 134,  370 => 133,  362 => 131,  344 => 130,  334 => 125,  324 => 118,  319 => 116,  315 => 115,  309 => 111,  307 => 110,  299 => 105,  294 => 103,  286 => 98,  281 => 96,  273 => 91,  269 => 90,  264 => 88,  251 => 82,  243 => 81,  235 => 80,  230 => 78,  218 => 73,  210 => 72,  205 => 70,  193 => 65,  185 => 64,  180 => 62,  177 => 61,  171 => 57,  160 => 55,  154 => 53,  147 => 51,  140 => 50,  137 => 49,  135 => 48,  130 => 46,  127 => 45,  125 => 44,  117 => 39,  112 => 37,  102 => 32,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  68 => 15,  65 => 14,  58 => 10,  52 => 9,  46 => 8,  43 => 7,  40 => 6,  34 => 3,  29 => 2,);
    }
}
