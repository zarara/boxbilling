<?php

/* partial_pagination.phtml */
class __TwigTemplate_c25ff34b3e40833e8db4115a514b9d0a97bde14009d457aaa2d545e079603856 extends Twig_Template
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
            $context["page"] = $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "page");
            // line 3
            echo "
<div class=\"pagination pagination-centered\">
    <ul>
        <li ";
            // line 6
            if (((!$this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")) || ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page") == 1))) {
                echo "class=\"disabled\"";
            }
            echo ">
            <a href=\"";
            // line 7
            if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page") && ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page") != 1))) {
                echo "?";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_merge(twig_array_merge(array(), (isset($context["request"]) ? $context["request"] : null)), array("page" => 1)));
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
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
                    echo "=";
                    echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : null), "html", null, true);
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last") == false)) {
                        echo "&";
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } else {
                echo "#";
            }
            echo "\">«</a>
        </li>

        <li ";
            // line 10
            if (((!$this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")) || ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page") == 1))) {
                echo "class=\"disabled\"";
            }
            echo ">
        <a href=\"";
            // line 11
            if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page") && ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page") != "1"))) {
                echo "?";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_merge(twig_array_merge(array(), (isset($context["request"]) ? $context["request"] : null)), array("page" => ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page") - 1))));
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
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
                    echo "=";
                    echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : null), "html", null, true);
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last") == false)) {
                        echo "&";
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } else {
                echo "#";
            }
            echo "\"> <span class=\"awe-arrow-left\"></span> </a>
        </li>

        ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "pages")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 15
                echo "            <li  ";
                if (((isset($context["i"]) ? $context["i"] : null) == (isset($context["page"]) ? $context["page"] : null))) {
                    echo "class=\"active\" ";
                }
                echo ">
            ";
                // line 16
                if ((((isset($context["i"]) ? $context["i"] : null) == $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")) || ((!$this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")) && ((isset($context["i"]) ? $context["i"] : null) == 1)))) {
                    // line 17
                    echo "                <a href=\"#\" onclick=\"return false;\">";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                    echo "</a>
            ";
                } else {
                    // line 19
                    echo "                <a href=\"?";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_merge(twig_array_merge(array(), (isset($context["request"]) ? $context["request"] : null)), array("page" => (isset($context["i"]) ? $context["i"] : null))));
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
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
                        echo "=";
                        echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : null), "html", null, true);
                        if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last") == false)) {
                            echo "&";
                        }
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                    echo "</a>
            ";
                }
                // line 21
                echo "            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
        <li ";
            // line 24
            if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page") == $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "pages"))) {
                echo "class=\"disabled\"";
            }
            echo ">
            <a href=\"";
            // line 25
            if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page") && ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page") != $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "pages")))) {
                echo "?";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_merge(twig_array_merge(array(), (isset($context["request"]) ? $context["request"] : null)), array("page" => ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page") + 1))));
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
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
                    echo "=";
                    echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : null), "html", null, true);
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last") == false)) {
                        echo "&";
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } elseif ((!$this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page"))) {
                echo "?";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_merge(twig_array_merge(array(), (isset($context["request"]) ? $context["request"] : null)), array("page" => 2)));
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
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
                    echo "=";
                    echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : null), "html", null, true);
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last") == false)) {
                        echo "&";
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } else {
                echo "#";
            }
            echo "\"><span class=\"awe-arrow-right\"></span> </a>
        </li>

        <li ";
            // line 28
            if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page") == $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "pages"))) {
                echo "class=\"disabled\"";
            }
            echo ">
            <a href=\"";
            // line 29
            if (((!$this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")) || ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page") != $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "pages")))) {
                echo "?";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_merge(twig_array_merge(array(), (isset($context["request"]) ? $context["request"] : null)), array("page" => $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "pages"))));
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
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
                    echo "=";
                    echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : null), "html", null, true);
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last") == false)) {
                        echo "&";
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } else {
                echo "#";
            }
            echo "\">»</a>
        </li>
    </ul>
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
        return array (  290 => 29,  284 => 28,  204 => 25,  198 => 24,  195 => 23,  188 => 21,  147 => 19,  141 => 17,  139 => 16,  128 => 14,  84 => 11,  78 => 10,  34 => 7,  23 => 3,  21 => 2,  19 => 1,  186 => 77,  182 => 75,  179 => 74,  159 => 57,  151 => 52,  145 => 48,  143 => 47,  136 => 43,  132 => 15,  127 => 39,  118 => 36,  115 => 35,  107 => 32,  103 => 31,  99 => 30,  94 => 29,  88 => 28,  86 => 27,  79 => 23,  75 => 22,  71 => 21,  61 => 14,  57 => 13,  50 => 8,  47 => 7,  39 => 4,  33 => 3,  28 => 6,  26 => 2,);
    }
}
