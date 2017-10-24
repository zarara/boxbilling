<?php

/* mod_filemanager_icons.phtml */
class __TwigTemplate_ae21ed69c8a59583efdecea91d92b81df98f0d2e7583162944f097079c01f37f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<ul style=\"list-style-type: none; display: inline-block\">
";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["icons"]) ? $context["icons"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
            // line 7
            echo "<li style=\"display: block; float: left; margin: 5px;\"><a href=\"#\" class=\"bb-push-to-input\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
            echo "\" alt=\"icon\" /></a></li>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 9
            echo "<li>";
            echo gettext("No icons available");
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>

<script type=\"text/javascript\">
\$(function() {
    \$('.bb-push-to-input').click(function(){
        \$('.bb-push-to-input').removeClass('selected');
        \$(this).addClass('selected');
        \$('#";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "rel"), "html", null, true);
        echo "').val(\$(this).find('img').attr('src'));
        return false;
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_filemanager_icons.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 18,  55 => 11,  46 => 9,  38 => 7,  33 => 6,  29 => 4,  26 => 3,);
    }
}
