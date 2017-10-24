<?php

/* partial_pagination.phtml */
class __TwigTemplate_748338b49206c8d7fdfa5885fb89e4161e9343c831f1ff35a24809f5837c5f50 extends Twig_Template
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
        if (($this->getAttribute((isset($context["list"]) ? $context["list"] : null), "pages") > 1)) {
            // line 2
            $context["currentPage"] = (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page"), 1)) : (1));
            // line 3
            $context["paginator"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_paginator", array(0 => array("total" => $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "total"), "page" => (isset($context["currentPage"]) ? $context["currentPage"] : null), "per_page" => $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "per_page"))), "method");
            // line 4
            echo "
<div class=\"pagination\">
    <ul class=\"pages\">
        ";
            // line 7
            if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentpage") != 1)) {
                // line 8
                echo "        <li class=\"prev\"><a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter((isset($context["url"]) ? $context["url"] : null), twig_array_merge(twig_slice($this->env, twig_array_merge(array(), (isset($context["request"]) ? $context["request"] : null)), 1, twig_length_filter($this->env, (isset($context["request"]) ? $context["request"] : null))), array("page" => ((isset($context["currentPage"]) ? $context["currentPage"] : null) - 1))));
                echo "\"><</a></li>
        ";
            }
            // line 10
            echo "        ";
            if (($this->getAttribute($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "range"), 0) != 1)) {
                // line 11
                echo "            <li><a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter((isset($context["url"]) ? $context["url"] : null), array("page" => 1));
                echo "\" >1</a></li>
        ";
            }
            // line 13
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "start"), $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "end")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 14
                echo "
            ";
                // line 15
                if ((($this->getAttribute($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "range"), 0) > 2) && ((isset($context["i"]) ? $context["i"] : null) == $this->getAttribute($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "range"), 0)))) {
                    // line 16
                    echo "                ...
            ";
                }
                // line 18
                echo "
            ";
                // line 19
                if (((isset($context["i"]) ? $context["i"] : null) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentpage"))) {
                    // line 20
                    echo "                <li><a class=\"active\" href=\"#\" onclick=\"return false;\">";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                    echo "</a></li>
            ";
                } else {
                    // line 22
                    echo "                <li><a href=\"";
                    echo $this->env->getExtension('bb')->twig_bb_admin_link_filter((isset($context["url"]) ? $context["url"] : null), twig_array_merge(twig_slice($this->env, twig_array_merge(array(), (isset($context["request"]) ? $context["request"] : null)), 1, twig_length_filter($this->env, (isset($context["request"]) ? $context["request"] : null))), array("page" => (isset($context["i"]) ? $context["i"] : null))));
                    echo "\"> ";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                    echo "</a></li>
            ";
                }
                // line 24
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "
        ";
            // line 26
            if ((($this->getAttribute($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "range"), ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "midrange") - 1), array(), "array") < ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "numpages") - 1)) && ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "end") == $this->getAttribute($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "range"), ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "midrange") - 1), array(), "array")))) {
                // line 27
                echo "            ...
            <li><a href=\"";
                // line 28
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter((isset($context["url"]) ? $context["url"] : null), twig_array_merge(twig_slice($this->env, twig_array_merge(array(), (isset($context["request"]) ? $context["request"] : null)), 1, twig_length_filter($this->env, (isset($context["request"]) ? $context["request"] : null))), array("page" => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "numpages"))));
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "numpages"), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 30
            echo "
        ";
            // line 31
            if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentpage") != $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "numpages"))) {
                // line 32
                echo "        <li class=\"next\"><a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter((isset($context["url"]) ? $context["url"] : null), twig_array_merge(twig_slice($this->env, twig_array_merge(array(), (isset($context["request"]) ? $context["request"] : null)), 1, twig_length_filter($this->env, (isset($context["request"]) ? $context["request"] : null))), array("page" => ((isset($context["currentPage"]) ? $context["currentPage"] : null) + 1))));
                echo "\">></a></li>
        ";
            }
            // line 34
            echo "    </ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partial_pagination.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 34,  106 => 32,  104 => 31,  101 => 30,  91 => 27,  86 => 25,  72 => 22,  64 => 19,  57 => 16,  52 => 14,  47 => 13,  41 => 11,  38 => 10,  32 => 8,  30 => 7,  25 => 4,  23 => 3,  21 => 2,  19 => 1,  498 => 210,  496 => 209,  493 => 208,  487 => 204,  484 => 203,  475 => 196,  469 => 194,  467 => 193,  463 => 192,  455 => 187,  450 => 185,  444 => 181,  436 => 179,  433 => 178,  428 => 176,  423 => 175,  421 => 174,  416 => 172,  410 => 169,  404 => 165,  401 => 164,  399 => 163,  395 => 161,  386 => 158,  383 => 157,  372 => 153,  366 => 152,  361 => 150,  357 => 149,  353 => 148,  349 => 147,  337 => 144,  325 => 141,  319 => 138,  315 => 137,  312 => 136,  306 => 135,  304 => 134,  295 => 128,  291 => 127,  287 => 126,  283 => 125,  279 => 124,  275 => 123,  267 => 118,  258 => 112,  254 => 111,  249 => 108,  246 => 107,  241 => 104,  228 => 98,  220 => 97,  212 => 96,  204 => 95,  200 => 93,  198 => 92,  188 => 85,  174 => 78,  165 => 76,  159 => 73,  150 => 67,  145 => 65,  136 => 59,  131 => 57,  122 => 51,  117 => 49,  108 => 43,  103 => 41,  94 => 28,  89 => 26,  80 => 24,  75 => 25,  66 => 20,  61 => 18,  55 => 15,  48 => 10,  45 => 9,  43 => 8,  40 => 7,  34 => 5,  29 => 3,  27 => 2,);
    }
}
