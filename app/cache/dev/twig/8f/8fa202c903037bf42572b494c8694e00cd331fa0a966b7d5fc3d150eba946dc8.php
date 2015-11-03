<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_8b43ed40db8db1b9d893b9bbe189761b92b4bc3333142432ed88fd5b52b6dc5c extends Twig_Template
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
        $__internal_7e136c3fabb9858522b84d0e6463a6c080ec06c4ecfea57577753f192871a412 = $this->env->getExtension("native_profiler");
        $__internal_7e136c3fabb9858522b84d0e6463a6c080ec06c4ecfea57577753f192871a412->enter($__internal_7e136c3fabb9858522b84d0e6463a6c080ec06c4ecfea57577753f192871a412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e136c3fabb9858522b84d0e6463a6c080ec06c4ecfea57577753f192871a412->leave($__internal_7e136c3fabb9858522b84d0e6463a6c080ec06c4ecfea57577753f192871a412_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fe605fd3bf59288e3b71c4ec084921f7411eb6e0bf8fa05ca8e454abcda17b65 = $this->env->getExtension("native_profiler");
        $__internal_fe605fd3bf59288e3b71c4ec084921f7411eb6e0bf8fa05ca8e454abcda17b65->enter($__internal_fe605fd3bf59288e3b71c4ec084921f7411eb6e0bf8fa05ca8e454abcda17b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fe605fd3bf59288e3b71c4ec084921f7411eb6e0bf8fa05ca8e454abcda17b65->leave($__internal_fe605fd3bf59288e3b71c4ec084921f7411eb6e0bf8fa05ca8e454abcda17b65_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac7c1c536ad06208b38c21f1b30b7425d87f0cf06b66932698550bd037a8f954 = $this->env->getExtension("native_profiler");
        $__internal_ac7c1c536ad06208b38c21f1b30b7425d87f0cf06b66932698550bd037a8f954->enter($__internal_ac7c1c536ad06208b38c21f1b30b7425d87f0cf06b66932698550bd037a8f954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ac7c1c536ad06208b38c21f1b30b7425d87f0cf06b66932698550bd037a8f954->leave($__internal_ac7c1c536ad06208b38c21f1b30b7425d87f0cf06b66932698550bd037a8f954_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_db47969f8dd19b693e3c9d04a4b9e478471b9dee9f0dfc2d5a9436a3c05d8ce1 = $this->env->getExtension("native_profiler");
        $__internal_db47969f8dd19b693e3c9d04a4b9e478471b9dee9f0dfc2d5a9436a3c05d8ce1->enter($__internal_db47969f8dd19b693e3c9d04a4b9e478471b9dee9f0dfc2d5a9436a3c05d8ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_db47969f8dd19b693e3c9d04a4b9e478471b9dee9f0dfc2d5a9436a3c05d8ce1->leave($__internal_db47969f8dd19b693e3c9d04a4b9e478471b9dee9f0dfc2d5a9436a3c05d8ce1_prof);

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
