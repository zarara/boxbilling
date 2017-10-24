<?php

/* mod_servicedomain_config.phtml */
class __TwigTemplate_da0860f2e826e91e3f7f04d5d38a7431d93fa0ab9bf54b5cfdde893e36738775 extends Twig_Template
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
        echo "<div class=\"help\">
    <h5>";
        // line 2
        echo gettext("Domains management");
        echo "</h5>
</div>

<div class=\"body\">
    <div class=\"aligncenter\">
        <a href=\"";
        // line 7
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("servicedomain");
        echo "\" title=\"\" class=\"btn55 mr10\"><img src=\"images/icons/middlenav/pencil.png\" alt=\"\"><span>Management</span></a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "mod_servicedomain_config.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  22 => 2,  318 => 127,  278 => 92,  265 => 88,  256 => 84,  247 => 81,  234 => 76,  229 => 74,  225 => 73,  221 => 72,  212 => 68,  207 => 66,  203 => 65,  199 => 64,  190 => 60,  181 => 57,  168 => 52,  163 => 50,  159 => 49,  155 => 48,  146 => 44,  141 => 42,  133 => 40,  126 => 36,  122 => 35,  116 => 34,  110 => 33,  93 => 24,  89 => 23,  85 => 22,  72 => 17,  66 => 16,  45 => 7,  37 => 6,  24 => 3,  21 => 2,  19 => 1,  648 => 260,  640 => 255,  628 => 248,  623 => 245,  620 => 244,  614 => 242,  596 => 230,  583 => 222,  578 => 220,  567 => 214,  562 => 212,  553 => 206,  548 => 204,  541 => 200,  533 => 194,  527 => 191,  524 => 190,  521 => 189,  517 => 188,  514 => 187,  512 => 186,  505 => 182,  498 => 178,  494 => 177,  488 => 173,  473 => 171,  469 => 170,  465 => 169,  462 => 168,  460 => 167,  455 => 165,  448 => 161,  437 => 153,  427 => 148,  421 => 144,  412 => 141,  409 => 140,  391 => 137,  385 => 136,  374 => 134,  370 => 133,  362 => 131,  344 => 130,  334 => 125,  324 => 118,  319 => 116,  315 => 115,  309 => 111,  307 => 110,  299 => 105,  294 => 103,  286 => 98,  281 => 96,  273 => 90,  269 => 89,  264 => 88,  251 => 82,  243 => 80,  235 => 80,  230 => 78,  218 => 73,  210 => 72,  205 => 70,  193 => 65,  185 => 58,  180 => 62,  177 => 56,  171 => 57,  160 => 55,  154 => 53,  147 => 51,  140 => 50,  137 => 41,  135 => 48,  130 => 46,  127 => 45,  125 => 44,  117 => 39,  112 => 37,  102 => 30,  90 => 23,  86 => 22,  82 => 21,  78 => 18,  74 => 19,  68 => 15,  65 => 14,  58 => 13,  52 => 9,  46 => 8,  43 => 7,  40 => 6,  34 => 3,  29 => 5,);
    }
}
