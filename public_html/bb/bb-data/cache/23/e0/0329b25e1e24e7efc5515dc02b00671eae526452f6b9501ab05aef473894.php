<?php

/* mod_forum_index.phtml */
class __TwigTemplate_23e00329b25e1e24e7efc5515dc02b00671eae526452f6b9501ab05aef473894 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'meta_description' => array($this, 'block_meta_description'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ajax")) ? ("layout_blank.phtml") : ("layout_default.phtml")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Forum");
    }

    // line 4
    public function block_meta_description($context, array $blocks = array())
    {
        echo gettext("Welcome to our forums.");
    }

    // line 5
    public function block_breadcrumb($context, array $blocks = array())
    {
        echo " <li class=\"active\">";
        echo gettext("Forum");
        echo "</li>";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "forum_get_categories"));
        foreach ($context['_seq'] as $context["cat_name"] => $context["forums"]) {
            // line 10
            echo "    <div class=\"row\">
        <article class=\"span12 data-block\" role=\"main\">
            <div class=\"data-container\">
                <header>
                    <h1>";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["cat_name"]) ? $context["cat_name"] : null), "html", null, true);
            echo "</h1>
                    <p>";
            // line 15
            echo gettext("Welcome to our forums. Feel free to join the discussions.");
            echo "</p>
                </header>
                <section>
                <table class=\"table table-striped table-bordered table-condensed\">
                    <thead>
                    <tr>
                        <th>&nbsp;</th>
                        <th style=\"width:80%;\">";
            // line 22
            echo gettext("Forum");
            echo "</th>
                        <th>";
            // line 23
            echo gettext("Threads");
            echo "</th>
                        <th>";
            // line 24
            echo gettext("Posts");
            echo "</th>
                    </tr>
                    </thead>

                    <tbody>
                    ";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["forums"]) ? $context["forums"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
                // line 30
                echo "                    <tr>
                        <td>
                            <span class=\"awe-comments-alt awe-3x ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "status"), "html", null, true);
                echo "\" style=\"padding-right: 0px; padding-left: 5px\"></span>
                        </td>
                        <td>
                            <a href=\"";
                // line 35
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/forum");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "slug"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "title"), "html", null, true);
                echo "</a>
                            <p>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "description"), "html", null, true);
                echo "</p>
                        </td>
                        <td>
                            ";
                // line 39
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "stats", array(), "any", false, true), "topics_count", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "stats", array(), "any", false, true), "topics_count"), 0)) : (0)), "html", null, true);
                echo "
                        </td>
                        <td>";
                // line 41
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "stats", array(), "any", false, true), "posts_count", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "stats", array(), "any", false, true), "posts_count"), 0)) : (0)), "html", null, true);
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forum'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                    </tbody>
                </table>
                ";
            // line 46
            if ((!(isset($context["client"]) ? $context["client"] : null))) {
                // line 47
                echo "                <p><button class=\"btn btn-primary\" type=\"button\" onclick=\"parent.location='";
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/login");
                echo "'\">";
                echo gettext("Register");
                echo "</button></p>
                ";
            }
            // line 49
            echo "            </section>
            </div>
        </article>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['cat_name'], $context['forums'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
";
        // line 55
        if (((isset($context["client"]) ? $context["client"] : null) && $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "forum_favorites"))) {
            // line 56
            echo "<div class=\"row\">
    <article class=\"span12 data-block\">
        <div class=\"data-container\">
            <header>
                <h2>";
            // line 60
            echo gettext("Favorite topics");
            echo "</h2>
                <p>";
            // line 61
            echo gettext("You set this topic as favorite. It can be done by opening any topic and clicking on \"Add to favorites\" button in \"Topic information\" block.");
            echo "</p>
            </header>
            <section>
                <table class=\"table table-striped table-bordered table-condensed\">
                    <thead>
                    <tr>
                        <th style=\"width:5%\">&nbsp;</th>
                        <th style=\"width:5%\">&nbsp;</th>
                        <th style=\"width:40%\">";
            // line 69
            echo gettext("Thread / Thread Starter");
            echo "</th>
                        <th>";
            // line 70
            echo gettext("Last post");
            echo "</th>
                        <th>";
            // line 71
            echo gettext("Replies");
            echo "</th>
                        <th>";
            // line 72
            echo gettext("Views");
            echo "</th>
                    </tr>
                    </thead>

                    <tbody>
                    ";
            // line 77
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "forum_favorites"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["i"] => $context["topic"]) {
                // line 78
                echo "                    <tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                echo "\">
                        <td>
                            <span class=\"awe-star awe-2x ";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "status"), "html", null, true);
                echo "\" style=\"padding-right: 0px; padding-left: 5px\"></span>
                        </td>
                        <td>
                            <img src=\"";
                // line 83
                echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "first"), "author"), "email")), "html", null, true);
                echo "?size=30\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "first"), "author"), "name"), "html", null, true);
                echo "\" />
                        </td>
                        <td>
                            <a href=\"";
                // line 86
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/forum");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "forum"), "slug"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "slug"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "title"), "html", null, true);
                echo "</a>
                            <p style=\"font-size: .9em\">";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "first"), "author"), "name"), "html", null, true);
                echo "</p>
                        </td>
                        <td>
                            ";
                // line 90
                echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "last"), "created_at")), "html", null, true);
                echo "
                            <p style=\"font-size: .9em\">";
                // line 91
                echo gettext("by");
                echo " <a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/forum");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "forum"), "slug"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "slug"), "html", null, true);
                echo "#m-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "last"), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "last"), "author"), "name"), "html", null, true);
                echo " ";
                echo "</p>
                        </td>
                        <td>";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "stats"), "posts_count"), "html", null, true);
                echo "</td>
                        <td>";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "stats"), "views_count"), "html", null, true);
                echo "</td>
                    </tr>

                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 98
                echo "
                    <tr>
                        <td colspan=\"6\">";
                // line 100
                echo gettext("The list is empty");
                echo "</td>
                    </tr>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['topic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "
                    </tbody>

                </table>

            </section>
        </div>
    </article>
</div>
";
        }
        // line 114
        echo "


    
";
    }

    public function getTemplateName()
    {
        return "mod_forum_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 114,  295 => 104,  285 => 100,  281 => 98,  272 => 94,  268 => 93,  252 => 91,  248 => 90,  242 => 87,  232 => 86,  224 => 83,  218 => 80,  212 => 78,  207 => 77,  199 => 72,  195 => 71,  191 => 70,  187 => 69,  176 => 61,  172 => 60,  166 => 56,  164 => 55,  161 => 54,  151 => 49,  143 => 47,  141 => 46,  137 => 44,  128 => 41,  123 => 39,  117 => 36,  109 => 35,  103 => 32,  99 => 30,  95 => 29,  87 => 24,  83 => 23,  79 => 22,  69 => 15,  65 => 14,  59 => 10,  55 => 9,  52 => 8,  49 => 7,  41 => 5,  35 => 4,  29 => 3,);
    }
}
