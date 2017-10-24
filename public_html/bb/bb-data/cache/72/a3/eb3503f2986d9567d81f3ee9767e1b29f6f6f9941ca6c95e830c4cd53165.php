<?php

/* mod_theme_settings.phtml */
class __TwigTemplate_72a3eb3503f2986d9567d81f3ee9767e1b29f6f6f9941ca6c95e830c4cd53165 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ajax")) ? ("layout_blank.phtml") : ("layout_default.phtml")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["active_menu"] = "system";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Themes");
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
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("system");
        echo "\">";
        echo gettext("Settings");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 10
        echo gettext("Themes");
        echo "</li>
</ul>
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "<div class=\"widget\">
    <div class=\"head\"><h5 class=\"iPaintBrush\">";
        // line 17
        echo gettext("Client area themes");
        echo "</h5></div>

    <table class=\"tableStatic wide\">
        <thead>
        <tr>
            <td>";
        // line 22
        echo gettext("Name");
        echo "</td>
            <td>";
        // line 23
        echo gettext("Actions");
        echo "</td>
        </tr>
        </thead>

        <tbody>
        ";
        // line 28
        $context["themes"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "theme_get_list", array(0 => array("per_page" => 100)), "method");
        // line 29
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["themes"]) ? $context["themes"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["theme"]) {
            // line 30
            echo "
        <tr>
            <td>";
            // line 32
            if (($this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_theme"), "code") == $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "code"))) {
                echo "<strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "code"), "html", null, true);
                echo "</strong>";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "code"), "html", null, true);
            }
            echo "</td>
            <td class=\"actions\">
                <a class=\"btnIconLeft mr10\" href=\"";
            // line 34
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("theme");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "code"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/cog.png\" alt=\"\" class=\"icon\"><span>";
            echo gettext("Settings");
            echo "</span></a>
                ";
            // line 35
            if (($this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_theme"), "code") != $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "code"))) {
                // line 36
                echo "                <a class=\"btnIconLeft mr10 api-link\" data-api-redirect=\"";
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("extension/settings/theme");
                echo "\" href=\"";
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/theme/select", array("code" => $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "code")));
                echo "\"><img src=\"images/icons/dark/star.png\" alt=\"\" class=\"icon\"><span>";
                echo gettext("Set as default");
                echo "</span></a>
                ";
            }
            // line 38
            echo "            </td>
        </tr>
        </tbody>

        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "        <tbody>
        <tr>
            <td colspan=\"5\">
                ";
            // line 46
            echo gettext("The list is empty");
            // line 47
            echo "            </td>
        </tr>
        </tbody>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </table>

</div>
";
    }

    public function getTemplateName()
    {
        return "mod_theme_settings.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 51,  146 => 47,  144 => 46,  139 => 43,  130 => 38,  120 => 36,  118 => 35,  110 => 34,  99 => 32,  95 => 30,  89 => 29,  87 => 28,  79 => 23,  75 => 22,  67 => 17,  64 => 16,  61 => 15,  54 => 10,  48 => 9,  42 => 8,  39 => 7,  36 => 6,  30 => 2,  25 => 3,);
    }
}
