<?php

/* partial_extensions.phtml */
class __TwigTemplate_aee596aff58d45ac7c1cc6cb09973096f261cf9dadd52c742663564806556300 extends Twig_Template
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
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 2
            echo "<div class=\"help\">
    <h5>";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true);
            echo "</h5>
</div>
";
        }
        // line 6
        echo "<table class=\"tableStatic wide\">
    <thead>
        <tr>
            <td>&nbsp;</td>
            <td style=\"width: 30%\">Extension</td>
            <td>Description</td>
            <td width=\"18%\">&nbsp;</td>
        </tr>
    </thead>

    <tbody>
        ";
        // line 17
        $context["extensions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "extension_get_latest", array(0 => array("type" => (isset($context["type"]) ? $context["type"] : null))), "method");
        // line 18
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 19
            echo "        <tr>
            <td><img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "icon_url"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "name"), "html", null, true);
            echo "\" style=\"width: 32px; height: 32px;\"/></td>
            <td>
                <a class=\"bb-button\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "project_url"), "html", null, true);
            echo "\" target=\"_blank\" title=\"View extension details\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "name"), 40), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "version"), "html", null, true);
            echo "</a>
                <br/>by <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "author_url"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "author"), "html", null, true);
            echo "</a>
            </td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "description"), 150), "html", null, true);
            echo "</td>
            <td class=\"actions\">
                <a class=\"bb-button btn14 api-link\" data-api-confirm=\"By installing '";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "name"), "html", null, true);
            echo "' you agree with terms and conditions. Install only extensions you trust. Continue?\" data-api-reload=\"1\" href=\"";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/extension/install", array("type" => $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "type"), "id" => $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "id")));
            echo "\" title=\"Install extension\"><img src=\"images/icons/dark/cog.png\" alt=\"\"></a>
                <a class=\"bb-button btn14\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "project_url"), "html", null, true);
            echo "\" target=\"_blank\" title=\"Details\"><img src=\"images/icons/dark/globe.png\" alt=\"\"></a>
                <a class=\"bb-button btn14\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "download_url"), "html", null, true);
            echo "\" title=\"Download ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "name"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/download.png\" alt=\"\"></a>
            </td>
        </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "        <tr>
            <td colspan=\"4\" class=\"aligncenter\"><a href=\"http://extensions.boxbilling.com/\" target=\"_blank\">Explore BoxBilling extensions</a></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </tbody>
    <tfoot>
        <tr>
            <td colspan=\"4\"></td>
        </tr>
    </tfoot>

</table>";
    }

    public function getTemplateName()
    {
        return "partial_extensions.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  87 => 28,  76 => 25,  69 => 23,  54 => 20,  51 => 19,  43 => 17,  30 => 6,  24 => 3,  21 => 2,  19 => 1,  179 => 64,  175 => 63,  170 => 61,  166 => 60,  157 => 56,  149 => 55,  145 => 54,  139 => 53,  133 => 52,  126 => 48,  122 => 47,  119 => 46,  117 => 45,  111 => 37,  102 => 33,  100 => 36,  95 => 33,  85 => 28,  81 => 27,  78 => 26,  73 => 25,  65 => 20,  61 => 22,  49 => 10,  45 => 18,  40 => 6,  37 => 5,  31 => 2,  26 => 3,);
    }
}
