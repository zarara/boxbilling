<?php

/* mod_support_ticket.phtml */
class __TwigTemplate_c63a46cbe1484725bf7261a694df6721eb2e5cc8c6d7e0cccafec2448b4714d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
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
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), "html", null, true);
    }

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 5
        echo "<li><a href=\"";
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("support");
        echo "\">";
        echo gettext("Support tickets");
        echo "</a><span class=\"divider\">/</span></li>
";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), "html", null, true);
        echo "
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"row\">
    <article class=\"span4 data-block\">
        <div class=\"data-container\">
            <header>
                <h2>";
        // line 14
        echo gettext("Ticket information");
        echo "</h2>

                ";
        // line 16
        if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status") != "closed")) {
            // line 17
            echo "                    <div class=\"data-header-actions\">
                        <button class=\"btn btn-small\" type=\"button\" id=\"ticket-close\">";
            // line 18
            echo gettext("Close ticket");
            echo "</button>
                    </div>
                ";
        }
        // line 21
        echo "            </header>
            <section>
                <table class=\"table table-striped table-bordered table-condensed\">
                    <tbody>
                    <tr>
                        <td>";
        // line 26
        echo gettext("Ticket ID");
        echo "</td>
                        <td><b>#";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
        echo "</b></td>
                    </tr>

                    <tr>
                        <td>";
        // line 31
        echo gettext("Help desk");
        echo "</td>
                        <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "helpdesk"), "name"), "html", null, true);
        echo "</td>
                    </tr>

                    <tr>
                        <td>";
        // line 36
        echo gettext("Status");
        echo "</td>
                        <td><div class=\"label ";
        // line 37
        if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status") == "open")) {
            echo "label-success";
        } elseif (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status") == "on_hold")) {
            echo "label-warning";
        }
        echo "\">";
        echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status"));
        echo "</div></td>
                    </tr>

                    <tr>
                        <td>";
        // line 41
        echo gettext("Time opened");
        echo "</td>
                        <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "created_at")), "html", null, true);
        echo "</td>
                    </tr>

                    ";
        // line 45
        if ((($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "rel_type") == "order") && $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "rel_id"))) {
            // line 46
            echo "                    <tr>
                        <td>";
            // line 47
            echo gettext("Related to");
            echo "</td>
                        <td><a href=\"";
            // line 48
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("order/service/manage");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "rel_id"), "html", null, true);
            echo "\">";
            echo gettext("Service #");
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "rel_id"), "html", null, true);
            echo "</a></td>
                    </tr>
                    ";
        }
        // line 51
        echo "                    </tbody>

                </table>

            </section>
        </div>
    </article>
    <article class=\"span8 data-block\">
        <div class=\"data-container\">
            <header>
                <h2>";
        // line 61
        echo gettext("Last tickets");
        echo "</h2>
                <div class=\"data-header-actions\">
                    <ul>
                        <li>
                            <a class=\"btn btn-small\" href=\"";
        // line 65
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/support");
        echo "\">";
        echo gettext("Back to tickets list");
        echo "</a>
                        </li>
                    </ul>
                </div>
            </header>
            <section>
                <table class=\"table table-bordered table-condensed\">
                    <thead>
                    <tr>
                        <th>";
        // line 74
        echo gettext("Subject");
        echo "</th>
                        <th>";
        // line 75
        echo gettext("Help desk");
        echo "</th>
                        <th>";
        // line 76
        echo gettext("Status");
        echo "</th>
                        <th>";
        // line 77
        echo gettext("Submitted");
        echo "</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 81
        $context["tickets"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "support_ticket_get_list", array(0 => array("per_page" => 5, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page"))), "method");
        // line 82
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["t"]) {
            // line 83
            echo "                    <tr ";
            if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id") == $this->getAttribute((isset($context["t"]) ? $context["t"] : null), "id"))) {
                echo "class=\"alert alert-info\"";
            }
            echo ">
                        <td><a href=\"";
            // line 84
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("support/ticket");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : null), "subject"), 40), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["t"]) ? $context["t"] : null), "helpdesk"), "name"), "html", null, true);
            echo "</td>
                        <td><span class=\"label ";
            // line 86
            if (($this->getAttribute((isset($context["t"]) ? $context["t"] : null), "status") == "open")) {
                echo "label-info";
            } elseif (($this->getAttribute((isset($context["t"]) ? $context["t"] : null), "status") == "on_hold")) {
                echo "label-warning";
            }
            echo "\">";
            echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["t"]) ? $context["t"] : null), "status"));
            echo "</span></td>
                        <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_timeago_filter($this->getAttribute((isset($context["t"]) ? $context["t"] : null), "created_at")), "html", null, true);
            echo " ";
            echo gettext("ago");
            echo "</td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 90
            echo "                    <tr>
                        <td colspan=\"5\">";
            // line 91
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "
                    </tbody>
                </table>
            </section>
        </div>
    </article>

</div>

<div class=\"row\">
    <article class=\"span12 data-block\">
        <div class=\"data-container\">
            <header>
                <h2>";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), "html", null, true);
        echo "</h2>
                <p>#";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "helpdesk"), "name"), "html", null, true);
        echo "</p>
            </header>
            <section>
                ";
        // line 111
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "messages"));
        foreach ($context['_seq'] as $context["i"] => $context["message"]) {
            // line 112
            echo "                        <div class=\"row-fluid\">
                            <div class=\"span3\">
                                <div class=\"thumbnails\">
                                    <img src=\"";
            // line 115
            echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "author"), "email")), "html", null, true);
            echo "?size=60\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "author"), "name"), "html", null, true);
            echo "\" class=\"gravatar\">
                                    <h3>
                                        ";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "author"), "name"), "html", null, true);
            echo "
                                    </h3>
                                </div>
                            </div>
                            <div class=\"span9\">
                                <header>#";
            // line 122
            echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : null) + 1), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "created_at")), "html", null, true);
            echo "
                                    ";
            // line 123
            if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status") != "closed")) {
                // line 124
                echo "                                    <div class=\"pull-right\">
                                        <a href=\"#\" class=\"btn btn-inverse reply-to-message\" message-quote=\"";
                // line 125
                echo $context["mf"]->getmarkdown_quote($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "content"));
                echo "\">";
                echo gettext("Reply");
                echo "</a>
                                    </div>
                                    ";
            }
            // line 128
            echo "                                </header>
                                <section>
                                    <div class=\"well\" id=\"message-";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_bbmd_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "content"));
            echo "</div>
                                </section>
                            </div>
                        </div>
                        <hr/>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "
                <div class=\"row-fluid\">
                    ";
        // line 138
        if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status") != "closed")) {
            // line 139
            echo "                    <div class=\"span3\"></div>
                    <div class=\"span9\">
                        <form method=\"post\" action=\"\" class=\"api_form\" data-api-url=\"";
            // line 141
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/client/support/ticket_reply");
            echo "\" data-api-reload=\"1\">
                            <fieldset>
                                <textarea name=\"content\" cols=\"5\" rows=\"10\" class=\"span12\" required=\"required\" id=\"ticket-reply-text\"></textarea>
                                <button class=\"btn btn-primary btn-large\" type=\"submit\" id=\"submit-support-message\" value=\"";
            // line 144
            echo gettext("Post");
            echo "\" onclick=\"\">";
            echo gettext("Post");
            echo "</button>
                                <input type=\"hidden\" name=\"id\" value=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "\">
                            </fieldset>
                        </form>
                    </div>
                    ";
        } elseif (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status") == "closed")) {
            // line 150
            echo "                        <div class=\"alert alert-white text-center\">";
            echo gettext("Ticket was closed and cannot be reopened.");
            echo "</div>
                    ";
        }
        // line 152
        echo "                </div>

            </section>
        </div>
    </article>
</div>
";
    }

    // line 160
    public function block_js($context, array $blocks = array())
    {
        // line 161
        echo "<script type=\"text/javascript\">
\$(function() {
        \$('.reply-to-message').click(function (event) {
            event.preventDefault();
            var quote = \$(this).attr('message-quote');
            \$('#ticket-reply-text').text(quote);
            \$('#ticket-reply-text').focus();
        });

        \$('#submit-support-message').click(function () {
            if (\$('#ticket-reply-text').val().length > 0) {
                \$('.wait').show();
            }
        });

    \$('#ticket-close').bind('click',function(event){
        event.preventDefault();
        \$('.wait').show();
        bb.post(
            'client/support/ticket_close',
            { id: ";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
        echo " },
            function(result) {
                bb.redirect('";
        // line 183
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("support");
        echo "');
            }
        );
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_support_ticket.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 183,  425 => 181,  403 => 161,  400 => 160,  390 => 152,  384 => 150,  376 => 145,  370 => 144,  364 => 141,  360 => 139,  358 => 138,  354 => 136,  340 => 130,  336 => 128,  328 => 125,  325 => 124,  323 => 123,  317 => 122,  309 => 117,  302 => 115,  297 => 112,  293 => 111,  285 => 108,  281 => 107,  266 => 94,  257 => 91,  254 => 90,  244 => 87,  234 => 86,  230 => 85,  222 => 84,  215 => 83,  209 => 82,  207 => 81,  200 => 77,  196 => 76,  192 => 75,  188 => 74,  174 => 65,  167 => 61,  155 => 51,  143 => 48,  139 => 47,  136 => 46,  134 => 45,  128 => 42,  124 => 41,  111 => 37,  107 => 36,  100 => 32,  96 => 31,  89 => 27,  85 => 26,  78 => 21,  72 => 18,  69 => 17,  67 => 16,  62 => 14,  56 => 10,  53 => 9,  47 => 6,  40 => 5,  37 => 4,  31 => 3,  26 => 2,);
    }
}
