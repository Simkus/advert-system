<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2b9a88a56ad1bcd03abe0b55bf2b6b71fdb2a2ff949f61018f47743a4404dc73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23cd723f0f5efe5d01980b26f73d9c86229f6b26fd61cc0776c0406bd1598214 = $this->env->getExtension("native_profiler");
        $__internal_23cd723f0f5efe5d01980b26f73d9c86229f6b26fd61cc0776c0406bd1598214->enter($__internal_23cd723f0f5efe5d01980b26f73d9c86229f6b26fd61cc0776c0406bd1598214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23cd723f0f5efe5d01980b26f73d9c86229f6b26fd61cc0776c0406bd1598214->leave($__internal_23cd723f0f5efe5d01980b26f73d9c86229f6b26fd61cc0776c0406bd1598214_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_03dba740e0885058b83d2d21db4d4f3baf339885f1c81609793936e846a09a82 = $this->env->getExtension("native_profiler");
        $__internal_03dba740e0885058b83d2d21db4d4f3baf339885f1c81609793936e846a09a82->enter($__internal_03dba740e0885058b83d2d21db4d4f3baf339885f1c81609793936e846a09a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_03dba740e0885058b83d2d21db4d4f3baf339885f1c81609793936e846a09a82->leave($__internal_03dba740e0885058b83d2d21db4d4f3baf339885f1c81609793936e846a09a82_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_482249dfed83e5297e87f236fbc26404b51cdcee411348e40b2d56c1b768e2c9 = $this->env->getExtension("native_profiler");
        $__internal_482249dfed83e5297e87f236fbc26404b51cdcee411348e40b2d56c1b768e2c9->enter($__internal_482249dfed83e5297e87f236fbc26404b51cdcee411348e40b2d56c1b768e2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_482249dfed83e5297e87f236fbc26404b51cdcee411348e40b2d56c1b768e2c9->leave($__internal_482249dfed83e5297e87f236fbc26404b51cdcee411348e40b2d56c1b768e2c9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_175ddeea8c6a5891767ad93108bbeba9bd586f6c98336c627d9fd256770d5a3b = $this->env->getExtension("native_profiler");
        $__internal_175ddeea8c6a5891767ad93108bbeba9bd586f6c98336c627d9fd256770d5a3b->enter($__internal_175ddeea8c6a5891767ad93108bbeba9bd586f6c98336c627d9fd256770d5a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_175ddeea8c6a5891767ad93108bbeba9bd586f6c98336c627d9fd256770d5a3b->leave($__internal_175ddeea8c6a5891767ad93108bbeba9bd586f6c98336c627d9fd256770d5a3b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
