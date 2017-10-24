<?php

/* mod_staff_profile.phtml */
class __TwigTemplate_e0592eafa3cb2a54cc799ed034b118856824bc608c1ed0048b98cd8e187956a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_default.phtml");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout_default.phtml";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Profile");
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"widget simpleTabs\">
    <ul class=\"tabs\">
        <li><a href=\"#tab-profile\">";
        // line 13
        echo gettext("Profile");
        echo "</a></li>
        <li><a href=\"#tab-password\">";
        // line 14
        echo gettext("Change password");
        echo "</a></li>
        <li><a href=\"#tab-api\">";
        // line 15
        echo gettext("API");
        echo "</a></li>
        <li><a href=\"#tab-gravatar\">";
        // line 16
        echo gettext("Gravatar");
        echo "</a></li>
    </ul>

    <div class=\"tab_container\">
        
        <div id=\"tab-profile\" class=\"tab_content nopadding\">
            <form method=\"post\" action=\"";
        // line 22
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/profile/update");
        echo "\" class=\"mainForm api-form\" data-api-msg=\"";
        echo gettext("Profile updated");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 25
        echo gettext("Name");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"name\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "name"), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 32
        echo gettext("Email");
        echo "</label>
                        <div class=\"formRight\">
                            
                            <input type=\"text\" name=\"email\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "email"), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 40
        echo gettext("Signature");
        echo "</label>
                        <div class=\"formRight\">
                            <textarea name=\"signature\" cols=\"5\" rows=\"3\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "signature"), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <input type=\"submit\" value=\"";
        // line 47
        echo gettext("Update profile");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>
        
        <div id=\"tab-password\" class=\"tab_content nopadding\">
            <form method=\"post\" action=\"";
        // line 53
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/profile/change_password");
        echo "\" class=\"mainForm api-form\" data-api-msg=\"";
        echo gettext("Password changed");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 56
        echo gettext("Password");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"password\" name=\"password\" value=\"\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 64
        echo gettext("Password confirm");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"password\" name=\"password_confirm\" value=\"\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 71
        echo gettext("Change password");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>

        <div id=\"tab-api\" class=\"tab_content nopadding\">
            
            <div class=\"help\">
                <h3>";
        // line 79
        echo gettext("API Key");
        echo "</h3>
                <p>";
        // line 80
        echo gettext("API key allows integration with external applications. You will need this key for authentication.");
        echo "</p>
                <p>";
        // line 81
        echo gettext("External application can control every aspect of BoxBilling using this API key.");
        echo "</p>
                <p>";
        // line 82
        echo gettext("Warning! Resetting the key will break existing applications using it.");
        echo "</p>
            </div>
  
            <form method=\"post\" action=\"";
        // line 85
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/profile/generate_api_key");
        echo "\" class=\"mainForm api-form\" data-api-jsonp=\"onAfterKeyUpdate\">
            <fieldset>
                <div class=\"rowElem noborder\">
                    <label>";
        // line 88
        echo gettext("API Key");
        echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "profile_get"), "api_token"), "html", null, true);
        echo "\" id=\"apikey\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                <input type=\"submit\" value=\"";
        // line 94
        echo gettext("Generate new key");
        echo "\" class=\"greyishBtn submitForm\" />
            </fieldset>
            </form>
        </div>

        <div id=\"tab-gravatar\" class=\"tab_content\">
            <h1>";
        // line 100
        echo gettext("Gravatar");
        echo "</h1>
            <p><img src=\"";
        // line 101
        echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "email")), "html", null, true);
        echo "\" /> ";
        echo gettext("Change your avatar at");
        echo " <a target=\"_blank\" href=\"http://www.gravatar.com\">gravatar.com</a></p>
        </div>
    </div>
    <div class=\"fix\"></div>\t 
</div>
";
    }

    // line 109
    public function block_js($context, array $blocks = array())
    {
        // line 110
        echo "<script type=\"text/javascript\">
    function onAfterKeyUpdate(result)
    {
        bb.post('admin/profile/get', {}, function(result){
            \$('#apikey').val(result.api_token);
            bb.msg('New API key generated. Applications using old key are now not working.');
        })
        
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_staff_profile.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 110,  223 => 109,  211 => 101,  207 => 100,  198 => 94,  191 => 90,  186 => 88,  180 => 85,  174 => 82,  170 => 81,  166 => 80,  162 => 79,  151 => 71,  141 => 64,  130 => 56,  122 => 53,  113 => 47,  105 => 42,  100 => 40,  92 => 35,  86 => 32,  78 => 27,  73 => 25,  65 => 22,  56 => 16,  52 => 15,  48 => 14,  44 => 13,  39 => 10,  36 => 9,  30 => 3,);
    }
}
