<?php

/* layout_blank.phtml */
class __TwigTemplate_f49759be72e898947d91a354b9f0d033a46bdc82d8d141f08611ba20a5c76e08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout_blank.phtml";
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  64 => 18,  55 => 11,  46 => 9,  38 => 7,  33 => 6,  29 => 4,  26 => 3,);
    }
}
