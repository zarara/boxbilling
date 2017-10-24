<?php

/* mod_extension_languages.phtml */
class __TwigTemplate_12d8389811508f0a53b80a2831a98911621516f24a6cf169e2274994aa873141 extends Twig_Template
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
        $context["active_menu"] = "extensions";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meta_title($context, array $blocks = array())
    {
        echo "Client area languages";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 9
        echo gettext("Client area languages");
        echo "</a></li>
        <li><a href=\"#tab-new\">";
        // line 10
        echo gettext("New language");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>";
        // line 19
        echo gettext("Language");
        echo "</td>
                        <td>";
        // line 20
        echo gettext("Code");
        echo "</td>
                    </tr>
                </thead>

                <tbody>
                ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "extension_languages"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 26
            echo "                <tr>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "title"), "html", null, true);
            echo "</td>
                    <td style=\"width: 10%\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "locale"), "html", null, true);
            echo "</td>
                </tr>
                </tbody>

                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "                <tbody>
                    <tr>
                        <td colspan=\"2\">
                            ";
            // line 36
            echo gettext("The list is empty");
            // line 37
            echo "                        </td>
                    </tr>
                </tbody>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            </table>
        </div>
        
        <div class=\"tab_content nopadding\" id=\"tab-new\">
            ";
        // line 45
        $this->env->loadTemplate("partial_extensions.phtml")->display(array("type" => "translation", "header" => "List of translations on extensions site"));
        // line 46
        echo "            <div class=\"body\">
                <h1 class=\"pt10\">";
        // line 47
        echo gettext("BoxBilling in your language");
        echo "</h1>
                <p>";
        // line 48
        echo gettext("Although BoxBilling displays in U.S. English by default, the software has the built-in capability to be used in any language. Follow instructions bellow to install new language.");
        echo "</p>
                
                <div class=\"pt20 list arrowGrey\">
                    <ul>
                        <li>";
        // line 52
        echo gettext("Check if your language translation file is available at");
        echo " <a href=\"https://www.transifex.com/projects/p/boxbilling/\" target=\"_blank\">";
        echo gettext("BoxBilling translations repository");
        echo "</a></li>
                        <li>";
        // line 53
        echo gettext("Download language files and place them to");
        echo " <strong>";
        echo twig_escape_filter($this->env, twig_constant("BB_PATH_LANGS"), "html", null, true);
        echo "</strong></li>
                        <li>";
        // line 54
        echo gettext("Language will be automatically available and can be changed in client area");
        echo "</li>
                        <li>";
        // line 55
        echo gettext("Read");
        echo " <a href=\"http://docs.boxbilling.com/en/latest/reference/language.html\" title=\"Installing BoxBilling in Your Language\" target=\"_blank\">";
        echo gettext("Installing BoxBilling in Your Language");
        echo "</a> ";
        echo gettext("to learn how to install files that will transform BoxBilling so it displays in your language.");
        echo "</li>
                        <li>";
        // line 56
        echo gettext("Translations can be made with");
        echo " <a href=\"http://www.poedit.net/\" target=\"_blank\">http://www.poedit.net/</a> ";
        echo gettext("software");
        echo "</li>
                    </ul>
                </div>

                <h5 class=\"pt20\">";
        // line 60
        echo gettext("Changing default language");
        echo "</h5>
                <p>";
        // line 61
        echo gettext("Default language can be set in");
        echo " <em>bb-config.php</em> parameter <strong>define('BB_LOCALE', 'en_US');</strong></p>

                <h5 class=\"pt20\">";
        // line 63
        echo gettext("Removing language");
        echo "</h5>
                <p>";
        // line 64
        echo gettext("Removing languages from BoxBilling is really simple. Just delete language folder you wish from");
        echo " <strong>";
        echo twig_escape_filter($this->env, twig_constant("BB_PATH_LANGS"), "html", null, true);
        echo "</strong></p>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_extension_languages.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 64,  175 => 63,  170 => 61,  166 => 60,  157 => 56,  149 => 55,  145 => 54,  139 => 53,  133 => 52,  126 => 48,  122 => 47,  119 => 46,  117 => 45,  111 => 41,  102 => 37,  100 => 36,  95 => 33,  85 => 28,  81 => 27,  78 => 26,  73 => 25,  65 => 20,  61 => 19,  49 => 10,  45 => 9,  40 => 6,  37 => 5,  31 => 2,  26 => 3,);
    }
}
