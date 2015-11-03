<?php

/* AppBundle:Kickbox:index.html.twig */
class __TwigTemplate_0a88bce76634808fa742f02953b8fd00c0be0e67368f91445a324f9a3d6a7145 extends Twig_Template
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
        $__internal_96fe99bbfceadf4439fd8726debc2bcc933096f88509953af0c839ac0fe5095d = $this->env->getExtension("native_profiler");
        $__internal_96fe99bbfceadf4439fd8726debc2bcc933096f88509953af0c839ac0fe5095d->enter($__internal_96fe99bbfceadf4439fd8726debc2bcc933096f88509953af0c839ac0fe5095d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Kickbox:index.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        // line 5
        if (array_key_exists("isDeliverable", $context)) {
            // line 6
            echo "    
";
            // line 7
            if (((isset($context["isDeliverable"]) ? $context["isDeliverable"] : $this->getContext($context, "isDeliverable")) == true)) {
                // line 8
                echo "    <p>Email exists!</p>
";
            }
            // line 10
            echo "
";
            // line 11
            if (((isset($context["isDeliverable"]) ? $context["isDeliverable"] : $this->getContext($context, "isDeliverable")) == false)) {
                // line 12
                echo "    <p>This email does not exist!</p>
";
            }
            // line 14
            echo "
";
        }
        
        $__internal_96fe99bbfceadf4439fd8726debc2bcc933096f88509953af0c839ac0fe5095d->leave($__internal_96fe99bbfceadf4439fd8726debc2bcc933096f88509953af0c839ac0fe5095d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Kickbox:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  51 => 12,  49 => 11,  46 => 10,  42 => 8,  40 => 7,  37 => 6,  35 => 5,  30 => 3,  26 => 2,  22 => 1,);
    }
}
/* {{ form_start(form) }}*/
/* {{ form_widget(form) }}*/
/* {{ form_end(form) }}*/
/* */
/* {% if isDeliverable is defined %}*/
/*     */
/* {% if isDeliverable == true %}*/
/*     <p>Email exists!</p>*/
/* {% endif %}*/
/* */
/* {% if isDeliverable == false %}*/
/*     <p>This email does not exist!</p>*/
/* {% endif %}*/
/* */
/* {% endif %}*/
