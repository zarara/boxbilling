<?php

/* mod_client_login_history.phtml */
class __TwigTemplate_c40a304b6002f0b9465539ff185d1868b27d869c5e024447b658fec8bd6d5b78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ajax")) ? ("layout_blank.phtml") : ("layout_default.phtml")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        // line 4
        $context["active_menu"] = "activity";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo "Clients login history";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"widget\">
    <div class=\"head\"><h5 class=\"iFrames\">";
        // line 8
        echo gettext("Clients logins history");
        echo "</h5></div>

";
        // line 10
        echo $context["mf"]->gettable_search();
        echo "
<table class=\"tableStatic wide\">
    <thead>
        <tr>
            <td style=\"width: 2%\"><input type=\"checkbox\" class=\"batch-delete-master-checkbox\"/></td>
            <td colspan=\"2\">";
        // line 15
        echo gettext("Client");
        echo "</td>
            <td>";
        // line 16
        echo gettext("IP");
        echo "</td>
            <td>";
        // line 17
        echo gettext("Country");
        echo "</td>
            <td>";
        // line 18
        echo gettext("Date");
        echo "</td>
            <td style=\"width: 5%\">&nbsp;</td>
        </tr>
    </thead>

    <tbody>
    ";
        // line 24
        $context["history"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "client_login_history_get_list", array(0 => twig_array_merge(array("per_page" => 30, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")), (isset($context["request"]) ? $context["request"] : null))), "method");
        // line 25
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["event"]) {
            // line 26
            echo "    <tr>
        <td><input type=\"checkbox\" class=\"batch-delete-checkbox\" data-item-id=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "id"), "html", null, true);
            echo "\"/></td>
        <td style=\"width:5%\"><a href=\"";
            // line 28
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/manage");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "client"), "id"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "client"), "email")), "html", null, true);
            echo "?size=20\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "client"), "email"), "html", null, true);
            echo "\" /></a></td>
        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "client"), "first_name"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "client"), "last_name"), "html", null, true);
            echo "</td>
        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ip"), "html", null, true);
            echo "</td>
        <td>";
            // line 31
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('bb')->twig_ipcountryname_filter($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ip")), "Unknown"), "html", null, true);
            echo "</td>
        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "created_at"), "Y-m-d H:i"), "html", null, true);
            echo "</td>
        <td class=\"actions\">
            <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"";
            // line 34
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/logins");
            echo "\" href=\"";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/client/login_history_delete", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "id")));
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
        </td>
    </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "    <tr>
        <td colspan=\"6\">
            ";
            // line 40
            echo gettext("The list is empty");
            // line 41
            echo "        </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </tbody>
    
</table>
    ";
        // line 47
        $this->env->loadTemplate("partial_batch_delete.phtml")->display(array_merge($context, array("action" => "admin/client/batch_delete_log")));
        // line 48
        echo "    ";
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["history"]) ? $context["history"] : null), "url" => "client/logins")));
        // line 49
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "mod_client_login_history.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 49,  153 => 48,  151 => 47,  146 => 44,  138 => 41,  136 => 40,  132 => 38,  121 => 34,  116 => 32,  112 => 31,  108 => 30,  102 => 29,  92 => 28,  88 => 27,  85 => 26,  79 => 25,  77 => 24,  68 => 18,  64 => 17,  60 => 16,  56 => 15,  48 => 10,  43 => 8,  40 => 7,  37 => 6,  31 => 3,  26 => 4,  24 => 2,);
    }
}
