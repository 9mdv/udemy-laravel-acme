<?php

/* C:\xampp\htdocs\udemy_laravel_build_10_projects\acme/themes/acme/pages/contact.htm */
class __TwigTemplate_fe6858ba5c4f0bb615cf17b11d4be379a158879b9695d624e87919329b19c321 extends Twig_Template
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
        echo "<div class=\"container\">
<h1>Contact Us</h1>
<form action=\"\">
    <div class=\"form-group\">
        <label>Name</label>
        <input type=\"text\" class=\"form-control\">
    </div>
    <div class=\"form-group\">
        <label>Email</label>
        <input type=\"text\" class=\"form-control\">
    </div>
    <div class=\"form-group\">
        <label>Message</label>
        <textarea class=\"form-control\"></textarea>
    </div>
    <button type=\"submit\">Submit</button>
</form>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\udemy_laravel_build_10_projects\\acme/themes/acme/pages/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
<h1>Contact Us</h1>
<form action=\"\">
    <div class=\"form-group\">
        <label>Name</label>
        <input type=\"text\" class=\"form-control\">
    </div>
    <div class=\"form-group\">
        <label>Email</label>
        <input type=\"text\" class=\"form-control\">
    </div>
    <div class=\"form-group\">
        <label>Message</label>
        <textarea class=\"form-control\"></textarea>
    </div>
    <button type=\"submit\">Submit</button>
</form>
</div>", "C:\\xampp\\htdocs\\udemy_laravel_build_10_projects\\acme/themes/acme/pages/contact.htm", "");
    }
}
