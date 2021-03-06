<?php

/* mod_kb_index.phtml */
class __TwigTemplate_f75f6565aa9eb102c3a5ce172adf099599aa6a3d9b1abd8eb1bae7b8e61f7425 extends Twig_Template
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
        $context["active_menu"] = "kb";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Knowledge Base");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 10
        echo gettext("Articles");
        echo "</a></li>
        <li><a href=\"#tab-new-article\">";
        // line 11
        echo gettext("New article");
        echo "</a></li>
        <li><a href=\"#tab-new-category\">";
        // line 12
        echo gettext("New category");
        echo "</a></li>
        <li><a href=\"#tab-categories\">";
        // line 13
        echo gettext("Manage categories");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">

        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">

        ";
        // line 21
        echo $context["mf"]->gettable_search();
        echo "
        <table class=\"tableStatic wide\">
            <thead>
                <tr>
                    <td>";
        // line 25
        echo gettext("Title");
        echo "</td>
                    <td>";
        // line 26
        echo gettext("Category");
        echo "</td>
                    <td>";
        // line 27
        echo gettext("Status");
        echo "</td>
                    <td>";
        // line 28
        echo gettext("Views");
        echo "</td>
                    <td>&nbsp;</td>
                </tr>
            </thead>

            <tbody>
            ";
        // line 34
        $context["posts"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "kb_article_get_list", array(0 => twig_array_merge(array("per_page" => 30, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")), (isset($context["request"]) ? $context["request"] : null))), "method");
        // line 35
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["post"]) {
            // line 36
            echo "            <tr>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title"), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 38
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/kb/category");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "category"), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "category"), "title"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 39
            echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "status"));
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "views"), "html", null, true);
            echo "</td>
                <td class=\"actions\">
                    <a class=\"bb-button btn14\" href=\"";
            // line 42
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/kb/article");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                    <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"";
            // line 43
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("kb");
            echo "\" href=\"";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/kb/article_delete", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id")));
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                </td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "                <tr>
                    <td colspan=\"4\">
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
        // line 54
        echo "            </tbody>
        </table>
        
        ";
        // line 57
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["posts"]) ? $context["posts"] : null), "url" => "kb")));
        // line 58
        echo "        </div>


        <div class=\"tab_content nopadding\" id=\"tab-new-article\">
            <form method=\"post\" action=\"";
        // line 62
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/kb/article_create");
        echo "\" class=\"mainForm api-form\" data-api-reload=\"1\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 65
        echo gettext("Category");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 67
        echo $context["mf"]->getselectbox("kb_article_category_id", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "kb_category_get_pairs"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "kb_article_category_id"), 1);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 73
        echo gettext("Title");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"title\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "title"), "html", null, true);
        echo "\" required=\"required\" placeholder=\"\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 81
        echo gettext("Status");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"status\" value=\"draft\" checked=\"checked\"/><label>";
        // line 83
        echo gettext("Draft");
        echo "</label>
                            <input type=\"radio\" name=\"status\" value=\"active\"/><label>";
        // line 84
        echo gettext("Active");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 90
        echo gettext("Content");
        echo "</label>
                        <div class=\"formRight\">
                            <textarea name=\"content\" cols=\"5\" rows=\"10\">";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "content"), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"submit\" value=\"";
        // line 96
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-new-category\">

            <form method=\"post\" action=\"";
        // line 103
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/kb/category_create");
        echo "\" class=\"mainForm save api-form\" data-api-reload=\"";
        echo gettext("Category created");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 106
        echo gettext("Title");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"title\" value=\"\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 114
        echo gettext("Description");
        echo ":</label>
                        <div class=\"formRight\">
                            <textarea name=\"description\" cols=\"5\" rows=\"20\"></textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 121
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-categories\">
            <table class=\"tableStatic wide\">
                <tbody>
                    ";
        // line 129
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "kb_category_get_pairs"));
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
        foreach ($context['_seq'] as $context["cat_id"] => $context["cat_title"]) {
            // line 130
            echo "                    <tr ";
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                echo "class=\"noborder\"";
            }
            echo ">
                        <td>";
            // line 131
            echo twig_escape_filter($this->env, (isset($context["cat_title"]) ? $context["cat_title"] : null), "html", null, true);
            echo "</td>
                        <td class=\"actions\" style=\"width:13%\">
                            <a class=\"bb-button btn14\" href=\"";
            // line 133
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/kb/category");
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["cat_id"]) ? $context["cat_id"] : null), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                            <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" href=\"";
            // line 134
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/kb/category_delete", array("id" => (isset($context["cat_id"]) ? $context["cat_id"] : null)));
            echo "\" data-api-redirect=\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("kb/new");
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                        </td>
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
            // line 138
            echo "                    <tr>
                        <td colspan=\"3\">";
            // line 139
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['cat_id'], $context['cat_title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                </tbody>
            </table>
        </div>

    </div>

    <div class=\"fix\"></div>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_kb_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 142,  346 => 139,  343 => 138,  324 => 134,  318 => 133,  313 => 131,  306 => 130,  288 => 129,  277 => 121,  267 => 114,  256 => 106,  248 => 103,  238 => 96,  231 => 92,  226 => 90,  217 => 84,  213 => 83,  208 => 81,  199 => 75,  194 => 73,  185 => 67,  180 => 65,  174 => 62,  168 => 58,  166 => 57,  161 => 54,  152 => 50,  150 => 49,  146 => 47,  135 => 43,  129 => 42,  124 => 40,  120 => 39,  112 => 38,  108 => 37,  105 => 36,  99 => 35,  97 => 34,  88 => 28,  84 => 27,  80 => 26,  76 => 25,  69 => 21,  58 => 13,  54 => 12,  50 => 11,  46 => 10,  40 => 6,  37 => 5,  31 => 3,  26 => 4,  24 => 2,);
    }
}
