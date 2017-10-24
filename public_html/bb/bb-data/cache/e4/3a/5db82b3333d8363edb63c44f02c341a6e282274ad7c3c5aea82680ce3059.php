<?php

/* mod_news_index.phtml */
class __TwigTemplate_e43a5db82b3333d8363edb63c44f02c341a6e282274ad7c3c5aea82680ce3059 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
            'head' => array($this, 'block_head'),
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
        // line 3
        $context["active_menu"] = "support";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("News");
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 10
        echo gettext("News and announcements");
        echo "</a></li>
        <li><a href=\"#tab-new\">";
        // line 11
        echo gettext("New announcement");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">

        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">

        ";
        // line 19
        echo $context["mf"]->gettable_search();
        echo "
        <table class=\"tableStatic wide\">
            <thead>
                <tr>
                    <td style=\"width: 2%\"><input type=\"checkbox\" class=\"batch-delete-master-checkbox\"/></td>
                    <td colspan=\"2\">";
        // line 24
        echo gettext("Title");
        echo "</td>
                    <td>";
        // line 25
        echo gettext("Active");
        echo "</td>
                    <td>";
        // line 26
        echo gettext("Date");
        echo "</td>
                    <td style=\"width: 13%\">&nbsp;</td>
                </tr>
            </thead>

            <tbody>
            ";
        // line 32
        $context["posts"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "news_get_list", array(0 => twig_array_merge(array("per_page" => 30, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")), (isset($context["request"]) ? $context["request"] : null))), "method");
        // line 33
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["post"]) {
            // line 34
            echo "            <tr>
                <td><input type=\"checkbox\" class=\"batch-delete-checkbox\" data-item-id=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id"), "html", null, true);
            echo "\"/></td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id"), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title"), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "status"));
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_datetime($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "created_at")), "html", null, true);
            echo "</td>
                <td class=\"actions\">
                    <a class=\"bb-button btn14\" href=\"";
            // line 41
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/news/post");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                    <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" href=\"";
            // line 42
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/news/delete", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id")));
            echo "\" data-api-redirect=\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("news");
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                </td>
            </tr>

            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "                <tr>
                    <td colspan=\"5\">
                        ";
            // line 49
            echo gettext("The list is empty");
            // line 50
            echo "                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </tbody>
        </table>
        ";
        // line 55
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["posts"]) ? $context["posts"] : null), "url" => "news/index")));
        // line 56
        echo "        ";
        $this->env->loadTemplate("partial_batch_delete.phtml")->display(array_merge($context, array("action" => "admin/news/batch_delete")));
        // line 57
        echo "
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-new\">

            <form method=\"post\" action=\"";
        // line 62
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/news/create");
        echo "\" class=\"mainForm api-form\" data-api-redirect=\"";
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("news");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 65
        echo gettext("Title");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"title\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "title"), "html", null, true);
        echo "\" required=\"required\" placeholder=\"\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 72
        echo gettext("Status");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"status\" value=\"draft\"checked=\"checked\"/><label>";
        // line 74
        echo gettext("Draft");
        echo "</label>
                            <input type=\"radio\" name=\"status\" value=\"active\"/><label>";
        // line 75
        echo gettext("Active");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 80
        echo gettext("Content");
        echo "</label>
                        <div class=\"formRight\">
                            <p>If the text is very long you can use <strong>&lt;!--more--&gt;</strong> tag. Inserting this tag within the post will create and excerpt of text (before the tag) to be displayed in posts list. Users will be able to see whole content when they click on \"Read more\" button.</p>
                            <br/>
                            <textarea name=\"content\" cols=\"5\" rows=\"10\" class=\"bb-textarea\">";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "content"), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"submit\" value=\"";
        // line 88
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>

    </div>
</div>

";
    }

    // line 98
    public function block_head($context, array $blocks = array())
    {
        echo $context["mf"]->getbb_editor(".bb-textarea");
    }

    public function getTemplateName()
    {
        return "mod_news_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 98,  218 => 88,  211 => 84,  204 => 80,  196 => 75,  192 => 74,  187 => 72,  179 => 67,  174 => 65,  166 => 62,  159 => 57,  156 => 56,  154 => 55,  150 => 53,  142 => 50,  140 => 49,  136 => 47,  124 => 42,  118 => 41,  113 => 39,  109 => 38,  105 => 37,  101 => 36,  97 => 35,  94 => 34,  88 => 33,  86 => 32,  77 => 26,  73 => 25,  69 => 24,  61 => 19,  50 => 11,  46 => 10,  41 => 7,  38 => 6,  32 => 4,  27 => 3,  25 => 2,);
    }
}
