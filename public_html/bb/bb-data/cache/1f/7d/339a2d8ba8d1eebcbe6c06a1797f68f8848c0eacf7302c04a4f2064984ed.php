<?php

/* partial_batch_delete.phtml */
class __TwigTemplate_1f7d339a2d8ba8d1eebcbe6c06a1797f68f8848c0eacf7302c04a4f2064984ed extends Twig_Template
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
        echo "<a class=\"bb-button btn14\" id=\"batch-delete-selected-btn\" style=\"margin: 10px\"><img src=\"images/icons/dark/trash.png\" alt=\"\" > ";
        echo gettext("Delete selected");
        echo "</a>
<script type=\"text/javascript\">
    \$(function () {
        \$('#batch-delete-selected-btn').click(function () {
            if (\$('input.batch-delete-checkbox:checked').length) {
                jConfirm('Are you sure?', 'Confirm Batch Delete', function (r) {
                    if (r) {
                        var ids = \$('input.batch-delete-checkbox:checked').map(function () {
                            return \$(this).attr(\"data-item-id\");
                        }).get();
                        bb.post(
                            '";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
        echo "',
                            {ids: ids},
                            function (result) {
                                bb.reload();
                            })
                    }
                });
            } else {
                jAlert('You need to select at least one item to delete');
            }

        });

        \$('input.batch-delete-master-checkbox').click(function () {
            \$('input.batch-delete-checkbox').prop('checked', this.checked);
        });
    });
</script>";
    }

    public function getTemplateName()
    {
        return "partial_batch_delete.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 34,  106 => 32,  104 => 31,  101 => 30,  91 => 27,  86 => 25,  72 => 22,  64 => 19,  57 => 16,  52 => 14,  47 => 13,  41 => 11,  38 => 10,  32 => 8,  30 => 7,  25 => 4,  23 => 3,  21 => 2,  19 => 1,  498 => 210,  496 => 209,  493 => 208,  487 => 204,  484 => 203,  475 => 196,  469 => 194,  467 => 193,  463 => 192,  455 => 187,  450 => 185,  444 => 181,  436 => 179,  433 => 178,  428 => 176,  423 => 175,  421 => 174,  416 => 172,  410 => 169,  404 => 165,  401 => 164,  399 => 163,  395 => 161,  386 => 158,  383 => 157,  372 => 153,  366 => 152,  361 => 150,  357 => 149,  353 => 148,  349 => 147,  337 => 144,  325 => 141,  319 => 138,  315 => 137,  312 => 136,  306 => 135,  304 => 134,  295 => 128,  291 => 127,  287 => 126,  283 => 125,  279 => 124,  275 => 123,  267 => 118,  258 => 112,  254 => 111,  249 => 108,  246 => 107,  241 => 104,  228 => 98,  220 => 97,  212 => 96,  204 => 95,  200 => 93,  198 => 92,  188 => 85,  174 => 78,  165 => 76,  159 => 73,  150 => 67,  145 => 65,  136 => 59,  131 => 57,  122 => 51,  117 => 49,  108 => 43,  103 => 41,  94 => 28,  89 => 26,  80 => 24,  75 => 25,  66 => 20,  61 => 18,  55 => 15,  48 => 10,  45 => 9,  43 => 8,  40 => 7,  34 => 12,  29 => 3,  27 => 2,);
    }
}
