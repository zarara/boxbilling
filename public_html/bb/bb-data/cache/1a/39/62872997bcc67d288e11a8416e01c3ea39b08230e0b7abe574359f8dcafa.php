<?php

/* mod_theme_preset.phtml */
class __TwigTemplate_1a3962872997bcc67d288e11a8416e01c3ea39b08230e0b7abe574359f8dcafa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
            'head' => array($this, 'block_head'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ajax")) ? ("layout_blank.phtml") : ("layout_default.phtml")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["active_menu"] = "system";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 5
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 6
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("system");
        echo "\">";
        echo gettext("Settings");
        echo "</a></li>
    <li><a href=\"";
        // line 8
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("extension/settings/theme");
        echo "\">";
        echo gettext("Themes");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 9
        echo gettext("Settings for");
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["theme_code"]) ? $context["theme_code"] : null), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 14
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Settings for");
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["theme_code"]) ? $context["theme_code"] : null), "html", null, true);
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
";
        // line 18
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 19
            echo "<div class=\"nNote nFailure hideit first\">
    <p><strong>";
            // line 20
            echo gettext("IMPORTANT");
            echo ": </strong>";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "</p>
</div>
";
        }
        // line 23
        echo "
";
        // line 24
        if ((isset($context["info"]) ? $context["info"] : null)) {
            // line 25
            echo "<div class=\"nNote nInformation hideit first\">
    <p><strong>";
            // line 26
            echo gettext("INFORMATION");
            echo ": </strong>";
            echo twig_escape_filter($this->env, (isset($context["info"]) ? $context["info"] : null), "html", null, true);
            echo "</p>
</div>
";
        }
        // line 29
        echo "
";
        // line 30
        if ((isset($context["settings_html"]) ? $context["settings_html"] : null)) {
            // line 31
            echo "
<div class=\"widget\">
    <div class=\"head\" title=\"";
            // line 33
            echo gettext("Switch to a predefined set of theme settings from the dropdown. Adjust each section and apply the changes once you're done.");
            echo "\">
        <h5 class=\"iMoney\">Your current preset: </h5>
        <select name=\"preset\" style=\"margin-top: 10px;\" onchange=\"bb.post('admin/theme/preset_select', {code: '";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["theme_code"]) ? $context["theme_code"] : null), "html", null, true);
            echo "', preset: \$(this).val() }, function(){ bb.reload(); })\">
            ";
            // line 36
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["presets"]) ? $context["presets"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["preset"]) {
                // line 37
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["preset"]) ? $context["preset"] : null), "html", null, true);
                echo "\" ";
                if (((isset($context["preset"]) ? $context["preset"] : null) == (isset($context["current_preset"]) ? $context["current_preset"] : null))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["preset"]) ? $context["preset"] : null), "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['preset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "        </select>
        ";
            // line 40
            if ((twig_length_filter($this->env, (isset($context["presets"]) ? $context["presets"] : null)) > 1)) {
                // line 41
                echo "        <a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/theme/preset_delete", array("code" => (isset($context["theme_code"]) ? $context["theme_code"] : null), "preset" => (isset($context["current_preset"]) ? $context["current_preset"] : null)));
                echo "\" class=\"api-link\" data-api-confirm=\"Are you sure?\" data-api-reload=\"1\">";
                echo gettext("delete this preset");
                echo "</a>
        ";
            }
            // line 43
            echo "    </div>

    <div id=\"theme-settings\">
        <form method=\"post\" action=\"\" enctype=\"multipart/form-data\">

            ";
            // line 48
            echo (isset($context["settings_html"]) ? $context["settings_html"] : null);
            echo "


            <div class=\"actions\">

                <input type=\"checkbox\" name=\"save-current-setting\" value=\"1\" id=\"save-current-setting\">
                <label for=\"save-current-setting\">";
            // line 54
            echo gettext("Save current settings as a new preset called");
            echo "</label>
                <input type=\"text\" name=\"save-current-setting-preset\" placeholder=\"\"/>

                <br/>
                <br/>
                <input type=\"submit\" value=\"";
            // line 59
            echo gettext("Apply changes");
            echo "\" class=\"greyishBtn\"/>
            </div>
        </form>
    </div>
</div>
";
        }
        // line 65
        echo "
";
    }

    // line 68
    public function block_head($context, array $blocks = array())
    {
        // line 69
        echo "<script src='js/jquery.spectrum.js'></script>
<link rel='stylesheet' href='css/spectrum.css' />
";
    }

    // line 73
    public function block_js($context, array $blocks = array())
    {
        // line 74
        echo "<script type=\"text/javascript\">

\$(function() {

    \$('#theme-settings fieldset').each(function(index, value){
        \$('<h3 class=\"section-header collapsed\"/>').text(\$(this).find('legend').text()).insertBefore(\$(this));
    });

    \$('#theme-settings h3.section-header').toggle(function() {
        \$(this).removeClass('collapsed').next().show();
    }, function() {
        \$(this).addClass('collapsed').next().hide();
    });

    \$('#theme-settings h3.section-header:first').click();


    //special class \"page\"
    \$(\"#theme-settings select.page\").each(function(){
        var sel = \$(this);
        sel.append('<option value=\"\">None</option>');
        \$.each(";
        // line 95
        echo twig_jsonencode_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "page_get_pairs"));
        echo ", function(index, value){
            sel.append('<option value=\"' + index + '\">' + value + '</option>');
        });
    });

    //special class \"snippet\"
    \$(\"#theme-settings select.snippet\").each(function(){
        var sel = \$(this);
        sel.append('<option value=\"\">None</option>');
        \$.each(";
        // line 104
        echo twig_jsonencode_filter((isset($context["snippets"]) ? $context["snippets"] : null));
        echo ", function(index, value){
            sel.append('<option value=\"' + index + '\">' + value + '</option>');
        });
    });

    //special class \"product\"
    \$(\"#theme-settings select.product\").each(function(){
        var sel = \$(this);
        sel.append('<option value=\"\">None</option>');
        \$.each(";
        // line 113
        echo twig_jsonencode_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "product_get_pairs"));
        echo ", function(index, value){
        sel.append('<option value=\"' + index + '\">' + value + '</option>');
    });
    });


// populate settings values

    //<![CDATA[
    var settings = ";
        // line 122
        echo twig_jsonencode_filter((isset($context["settings"]) ? $context["settings"] : null));
        echo ";
    //]]>
    \$.each(settings, function(index, value){
        var el = \$('#theme-settings *[name=\"'+ index +'\"]');
        if(el.attr('type') == 'radio') {
            el.filter('[value=\"'+value+'\"]').attr('checked', true);
        } else if(el.attr('type') == 'checkbox') {
            el.attr('checked', true);
        } else {
            el.val(value);
        }
    });

    // show uploaded files
    var uploaded = ";
        // line 136
        echo twig_jsonencode_filter((isset($context["uploaded"]) ? $context["uploaded"] : null));
        echo ";
    \$.each(uploaded, function(index, file){
        var input = \$('#theme-settings input[name=\"'+file.name+'\"]');
        \$('<div class=\"asset\">').html('<a href=\"'+ file.url +'\" target=\"_blank\" >'+file.name+'</a>').insertAfter(input);
    });

    //special class \"color\"
    \$(\"#theme-settings input.color\").spectrum({
        showInput: true,
        showButtons: true,
        showAlpha: false,
        clickoutFiresChange: true,
        theme: \"sp-boxbilling\",
        showInitial: true
    });
});

</script>
";
    }

    public function getTemplateName()
    {
        return "mod_theme_preset.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 136,  267 => 122,  255 => 113,  243 => 104,  231 => 95,  208 => 74,  205 => 73,  199 => 69,  196 => 68,  191 => 65,  182 => 59,  174 => 54,  165 => 48,  158 => 43,  150 => 41,  148 => 40,  145 => 39,  130 => 37,  126 => 36,  122 => 35,  117 => 33,  113 => 31,  111 => 30,  108 => 29,  100 => 26,  97 => 25,  95 => 24,  92 => 23,  84 => 20,  81 => 19,  79 => 18,  76 => 17,  73 => 16,  65 => 14,  56 => 9,  50 => 8,  44 => 7,  38 => 6,  35 => 5,  32 => 4,  27 => 2,);
    }
}
