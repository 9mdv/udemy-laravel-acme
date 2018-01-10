<?php

/* C:\xampp\htdocs\udemy_laravel_build_10_projects\acme/themes/acme/pages/blog.htm */
class __TwigTemplate_193ae41135604baa71cc21dc97fca4ace69af9a6b89d7938be6cf14281aebb90 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\udemy_laravel_build_10_projects\\acme/themes/acme/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'blogPosts' %}", "C:\\xampp\\htdocs\\udemy_laravel_build_10_projects\\acme/themes/acme/pages/blog.htm", "");
    }
}
