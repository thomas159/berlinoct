<?php

/* C:\xampp\htdocs\berlinoct/themes/superberlin/pages/link-details.htm */
class __TwigTemplate_12ddf653c34f3f8e777dd0de526e08c96d238c03b2d18d2ad1d3538235583b47 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("builderDetails"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\berlinoct/themes/superberlin/pages/link-details.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {% component 'builderDetails' %}*/
