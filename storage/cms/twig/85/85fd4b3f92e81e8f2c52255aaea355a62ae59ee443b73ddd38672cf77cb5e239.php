<?php

/* C:\xampp\htdocs\udemy_laravel_build_10_projects\acme/themes/acme/layouts/default.htm */
class __TwigTemplate_645b988c76816f587066c371cfc3ce9e4efbfba811204ab365a2937f4b530868 extends Twig_Template
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
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta name=\"description\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
    <title>Acme - ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/3/sandstone/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/theme.css");
        echo "\">
</head>
<body>
    <header>
        ";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "    </header>

    <div class=\"container\">
        ";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 16
        echo "    </div>

    <footer>
        ";
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 20
        echo "    </footer>

    <script src=\"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
    <script src=\"";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/app.js");
        echo "\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\udemy_laravel_build_10_projects\\acme/themes/acme/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 24,  68 => 23,  64 => 22,  60 => 20,  56 => 19,  51 => 16,  49 => 15,  44 => 12,  40 => 11,  33 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta name=\"description\" content=\"{{this.page.meta_description}}\">
    <title>Acme - {{this.page.title}}</title>
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/3/sandstone/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"{{'assets/css/theme.css'|theme}}\">
</head>
<body>
    <header>
        {% partial 'site/header' %}
    </header>

    <div class=\"container\">
        {% page %}
    </div>

    <footer>
        {% partial 'site/footer' %}
    </footer>

    <script src=\"{{'assets/vendor/jquery.js'|theme}}\"></script>
    <script src=\"{{'assets/vendor/bootstrap.js'|theme}}\"></script>
    <script src=\"{{'assets/javascript/app.js'|theme}}\"></script>
</body>
</html>", "C:\\xampp\\htdocs\\udemy_laravel_build_10_projects\\acme/themes/acme/layouts/default.htm", "");
    }
}
