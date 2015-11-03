<?php

/* AppBundle:success:index.html.twig */
class __TwigTemplate_ecf037a146b2731a374bed031aad7fc6d6a22e839e0d0979b309adcac3173515 extends Twig_Template
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
        $__internal_16c8b69e9d911c1454637ff995d33021548c651fd34583d3ac4651a3cf0d9a2e = $this->env->getExtension("native_profiler");
        $__internal_16c8b69e9d911c1454637ff995d33021548c651fd34583d3ac4651a3cf0d9a2e->enter($__internal_16c8b69e9d911c1454637ff995d33021548c651fd34583d3ac4651a3cf0d9a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:success:index.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\" integrity=\"sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==\" crossorigin=\"anonymous\">
<link rel=\"stylesheet\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">

<div class=\"form-container\">
\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 6
            echo "
    \t";
            // line 7
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
\t<a href='home'>Go back</a>
</div>";
        
        $__internal_16c8b69e9d911c1454637ff995d33021548c651fd34583d3ac4651a3cf0d9a2e->leave($__internal_16c8b69e9d911c1454637ff995d33021548c651fd34583d3ac4651a3cf0d9a2e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:success:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  38 => 7,  35 => 6,  31 => 5,  25 => 2,  22 => 1,);
    }
}
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">*/
/* <link rel="stylesheet" href="{{ asset('css/style.css') }}">*/
/* */
/* <div class="form-container">*/
/* 	{% for flashMessage in app.session.flashbag.get('success') %}*/
/* */
/*     	{{ flashMessage }}*/
/* */
/* 	{% endfor %}*/
/* */
/* 	<a href='home'>Go back</a>*/
/* </div>*/
