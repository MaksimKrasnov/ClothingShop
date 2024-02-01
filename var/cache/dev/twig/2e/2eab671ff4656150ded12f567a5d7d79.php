<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_272bb9e411b66b6b5829c05757f06b5d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <link href=\"/examples/vendors/bootstrap-4/css/bootstrap.min.css\" rel=\"stylesheet\">
       
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "<header class=\"p-3 text-bg-dark\">
    <div class=\"container\">
      <div class=\"d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start\">
        <a href=\"/\" class=\"d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none\">
          <svg class=\"bi me-2\" width=\"40\" height=\"32\" role=\"img\" aria-label=\"Bootstrap\">
            <use xlink:href=\"#bootstrap\"></use>
          </svg>
        </a>

        <ul class=\"nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0\">
          <li><a href=";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("indexApp");
        echo " class=\"nav-link px-2 text-secondary\">Главная</a></li>
          <li><a href=";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jeans");
        echo " class=\"nav-link px-2 text-white\">Джинсы</a></li>
          <li><a href=";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sweater");
        echo " class=\"nav-link px-2 text-white\">Кофты</a></li>
          <li><a href=";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_t_shirt");
        echo " class=\"nav-link px-2 text-white\">Футболки</a></li>
          <li><a href=";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sneakers");
        echo " class=\"nav-link px-2 text-white\">Кроссовки</a></li>
        </ul>
       

        <!-- <form class=\"col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3\" role=\"search\">
          <input type=\"search\" class=\"form-control form-control-dark text-bg-dark\" placeholder=\"Search...\" aria-label=\"Search\">
        </form>
-->
        <div class=\"text-end\">
          <form action=\"cart_index.php\" method=\"POST\">
            <button type=\"submit\" class=\"btn btn-warning\">Корзина</button>
            <!-- <button type=\"button\" class=\"btn btn-warning\">Sign-up</button> -->
          </form>
        </div>
       
        ";
        // line 42
        echo "      </div>
    </div>
  </header>
        ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "    </head>
    <body>
    ";
        // line 49
        $this->displayBlock('header', $context, $blocks);
        // line 52
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 54
        echo "

    </body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "ClothingShop!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "       
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 49
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 50
        echo "    
     ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 52
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 53
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  206 => 53,  194 => 52,  186 => 50,  179 => 49,  172 => 46,  165 => 45,  157 => 10,  150 => 9,  137 => 5,  126 => 54,  123 => 53,  120 => 52,  118 => 49,  114 => 47,  112 => 45,  107 => 42,  89 => 26,  85 => 25,  81 => 24,  77 => 23,  73 => 22,  61 => 12,  59 => 9,  52 => 5,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}ClothingShop!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <link href=\"/examples/vendors/bootstrap-4/css/bootstrap.min.css\" rel=\"stylesheet\">
       
        {% block stylesheets %}
       
        {% endblock %}
<header class=\"p-3 text-bg-dark\">
    <div class=\"container\">
      <div class=\"d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start\">
        <a href=\"/\" class=\"d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none\">
          <svg class=\"bi me-2\" width=\"40\" height=\"32\" role=\"img\" aria-label=\"Bootstrap\">
            <use xlink:href=\"#bootstrap\"></use>
          </svg>
        </a>

        <ul class=\"nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0\">
          <li><a href={{path('indexApp')}} class=\"nav-link px-2 text-secondary\">Главная</a></li>
          <li><a href={{path('app_jeans')}} class=\"nav-link px-2 text-white\">Джинсы</a></li>
          <li><a href={{path('app_sweater')}} class=\"nav-link px-2 text-white\">Кофты</a></li>
          <li><a href={{path('app_t_shirt')}} class=\"nav-link px-2 text-white\">Футболки</a></li>
          <li><a href={{path('app_sneakers')}} class=\"nav-link px-2 text-white\">Кроссовки</a></li>
        </ul>
       

        <!-- <form class=\"col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3\" role=\"search\">
          <input type=\"search\" class=\"form-control form-control-dark text-bg-dark\" placeholder=\"Search...\" aria-label=\"Search\">
        </form>
-->
        <div class=\"text-end\">
          <form action=\"cart_index.php\" method=\"POST\">
            <button type=\"submit\" class=\"btn btn-warning\">Корзина</button>
            <!-- <button type=\"button\" class=\"btn btn-warning\">Sign-up</button> -->
          </form>
        </div>
       
        {# <a href={{path('_logout_main')}} class=\"nav-link px-2 text-secondary\">Выйти</a> #}
      </div>
    </div>
  </header>
        {% block javascripts %}
        {% endblock %}
    </head>
    <body>
    {% block header %}
    
     {% endblock %}
    {% block body %}{% endblock %}
    {% block footer %} {% endblock %}


    </body>
</html>
", "base.html.twig", "C:\\PHP\\clothingStore\\ClothingShop\\clothingShop\\templates\\base.html.twig");
    }
}
