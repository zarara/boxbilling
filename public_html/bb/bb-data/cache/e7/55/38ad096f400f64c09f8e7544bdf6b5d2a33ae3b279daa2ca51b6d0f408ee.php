<?php

/* mod_filemanager_editor.phtml */
class __TwigTemplate_e75538ad096f400f64c09f8e7544bdf6b5d2a33ae3b279daa2ca51b6d0f408ee extends Twig_Template
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
        $context["mod"] = (twig_constant("BB_URL") . "bb-modules/Filemanager");
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /> 
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["mod"]) ? $context["mod"] : null), "html", null, true);
        echo "/src/js/jquery.js\" type=\"text/javascript\"></script>
  <title>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "basename"), "html", null, true);
        echo "</title>
  <style type=\"text/css\" media=\"screen\">
    body {
        overflow: hidden;
        margin: 0;
        padding: 0;
    }
    .claer { clear: both }
    #editor { 
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0px;
        margin: 0;
        padding: 0;
    }
    #asset-info {
        color: #fff;
        position: fixed;
        top: 10px;
        right: 20px;
        text-shadow: 0px 2px 3px #666;
        background: #000;
        padding: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        z-index: 1;
        display: none;
    }
  </style>
</head>

<body>
    
<pre id=\"editor\">";
        // line 44
        echo (isset($context["file_content"]) ? $context["file_content"] : null);
        echo "</pre>
<span id=\"asset-info\"></span>

<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["mod"]) ? $context["mod"] : null), "html", null, true);
        echo "/src/ace/ace.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["mod"]) ? $context["mod"] : null), "html", null, true);
        echo "/src/ace/theme-monokai.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["mod"]) ? $context["mod"] : null), "html", null, true);
        echo "/src/ace/";
        echo twig_escape_filter($this->env, (isset($context["js"]) ? $context["js"] : null), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
<script type=\"text/javascript\">
\$(function(){

    var editor = ace.edit(\"editor\");
    editor.setTheme(\"ace/theme/monokai\");

    /*
    editor.getSession().on('change', function(e){
        console.log('changed');
    });
    */
    var openfile = '";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : null), "html", null, true);
        echo "';
    var canon = require('pilot/canon')
\t
\tcanon.addCommand({
\t    name: 'myCommand',
\t    bindKey: {
\t        win: 'Ctrl-S',
\t        mac: 'Command-S',
\t        sender: 'editor'
\t    },
\t    exec: function(env, args, request) {
\t    \tvar data = editor.getSession().getValue();
\t    \tsaveFile(openfile,data);
\t    }
\t});
\t
\tcanon.addCommand({
\t    name: 'myCommand',
\t    bindKey: {
\t        win: 'Ctrl-Shift-S',
\t        mac: 'Command-Shift-S',
\t        sender: 'editor'
\t    },
\t    exec: function(env, args, request) {
\t\t\tvar data = editor.getSession().getValue();
\t    \tsaveFile(openfile,data);
\t    }
\t});
\t
\tvar JavaScriptMode = require(\"";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["mode"]) ? $context["mode"] : null), "html", null, true);
        echo "\").Mode;
\teditor.getSession().setMode(new JavaScriptMode());
\teditor.setShowPrintMargin(false);
    
    \$('#save-button').click(function(){
        var data = editor.getSession().getValue();
        saveFile(openfile,data);
        return false;
    });
});

function saveFile(path,data){\t
    \$('#asset-info').text('Saving file').fadeIn();
\t\$.post('";
        // line 103
        echo twig_escape_filter($this->env, twig_constant("BB_URL_API"), "html", null, true);
        echo "admin/filemanager/save_file',{path: path, data:data},function(d){
\t\tif(d.result){
\t\t\t\$('#asset-info').text('Your file has been saved.').delay(5000).fadeOut('slow');
\t\t} else {
            \$('#asset-info').text('Unable to save file. Check file permissions.').delay(5000).fadeOut('slow');
        }
\t});
}

</script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "mod_filemanager_editor.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 103,  134 => 90,  102 => 61,  85 => 49,  81 => 48,  77 => 47,  71 => 44,  32 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }
}
