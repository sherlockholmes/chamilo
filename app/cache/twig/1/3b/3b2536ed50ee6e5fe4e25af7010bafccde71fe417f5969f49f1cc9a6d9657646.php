<?php

/* default/layout/page_body.tpl */
class __TwigTemplate_823f40b90659fb3d3ad9a2e2f32cecbe0cec3ed25d60316713475a403b3ac0cf extends Twig_Template
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
        if (((isset($context["actions"]) ? $context["actions"] : null) != "")) {
            // line 2
            echo "    <div class=\"actions\">
        ";
            // line 3
            echo (isset($context["actions"]) ? $context["actions"] : null);
            echo "
    </div>
";
        }
        // line 6
        echo (isset($context["flash_messages"]) ? $context["flash_messages"] : null);
        echo "
<span id=\"js_alerts\"></span>
";
        // line 8
        if (((isset($context["header"]) ? $context["header"] : null) != "")) {
            // line 9
            echo "    <div class=\"section-page\">
        <div class=\"page-header\">
            <h3>";
            // line 11
            echo (isset($context["header"]) ? $context["header"] : null);
            echo "</h3>
        </div>
    </div>
";
        }
        // line 15
        if (((isset($context["message"]) ? $context["message"] : null) != "")) {
            // line 16
            echo "    <section id=\"messages\">
        ";
            // line 17
            echo (isset($context["message"]) ? $context["message"] : null);
            echo "
    </section>
";
        }
    }

    public function getTemplateName()
    {
        return "default/layout/page_body.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 17,  50 => 16,  48 => 15,  41 => 11,  37 => 9,  35 => 8,  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/page_body.tpl", "/var/www/html/main/template/default/layout/page_body.tpl");
    }
}
