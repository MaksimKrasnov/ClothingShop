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
class __TwigTemplate_936cdaf4cb2cba17320381ea50c6edad extends Template
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
          <li><a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["id" => 1]);
        echo "\"  class=\"nav-link px-2 text-white\">Джинсы</a></li>
          <li><a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["id" => 2]);
        echo "\" class=\"nav-link px-2 text-white\">Кофты</a></li>
          <li><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["id" => 3]);
        echo "\"  class=\"nav-link px-2 text-white\">Футболки</a></li>
          <li><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["id" => 4]);
        echo "\"  class=\"nav-link px-2 text-white\">Кроссовки</a></li>
          ";
        // line 27
        if (((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 27, $this->source); })()) == "m@mail.ru")) {
            // line 28
            echo "         
          <li><a href=";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPanel");
            echo " class=\"nav-link px-2 text-white\">Добавить товар</a></li>
        ";
        }
        // line 31
        echo "
        </ul>
       

        <!-- <form class=\"col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3\" role=\"search\">
          <input type=\"search\" class=\"form-control form-control-dark text-bg-dark\" placeholder=\"Search...\" aria-label=\"Search\">
        </form>
-->  ";
        // line 38
        if (((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 38, $this->source); })()) != null)) {
            // line 39
            echo "        <div class=\"text-end\">
          <form action=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_cart");
            echo "\" method=\"POST\">
            <button type=\"submit\" class=\"btn btn-warning\">Корзина</button>
            <!-- <button type=\"button\" class=\"btn btn-warning\">Sign-up</button> -->
          </form>
        </div>
        ";
        }
        // line 46
        echo "
          ";
        // line 47
        if (((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 47, $this->source); })()) == null)) {
            // line 48
            echo "        <a href=";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo " class=\"nav-link px-2 text-secondary\">Войти</a>

        ";
        } else {
            // line 51
            echo "        <a href=";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_logout_main");
            echo " class=\"nav-link px-2 text-secondary\">Выйти</a>

        ";
        }
        // line 54
        echo "

      </div>
    </div>
  </header>
        ";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "    </head>
    <body>
    ";
        // line 63
        $this->displayBlock('header', $context, $blocks);
        // line 66
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 67
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 68
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

    // line 59
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 63
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 64
        echo "    
     ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 66
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 67
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
        return array (  246 => 67,  234 => 66,  226 => 64,  219 => 63,  212 => 60,  205 => 59,  197 => 10,  190 => 9,  177 => 5,  166 => 68,  163 => 67,  160 => 66,  158 => 63,  154 => 61,  152 => 59,  145 => 54,  138 => 51,  131 => 48,  129 => 47,  126 => 46,  117 => 40,  114 => 39,  112 => 38,  103 => 31,  98 => 29,  95 => 28,  93 => 27,  89 => 26,  85 => 25,  81 => 24,  77 => 23,  73 => 22,  61 => 12,  59 => 9,  52 => 5,  46 => 1,);
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
          <li><a href=\"{{ path('app_product', { 'id': 1 }) }}\"  class=\"nav-link px-2 text-white\">Джинсы</a></li>
          <li><a href=\"{{ path('app_product', { 'id': 2 }) }}\" class=\"nav-link px-2 text-white\">Кофты</a></li>
          <li><a href=\"{{ path('app_product', { 'id': 3 }) }}\"  class=\"nav-link px-2 text-white\">Футболки</a></li>
          <li><a href=\"{{ path('app_product', { 'id': 4 }) }}\"  class=\"nav-link px-2 text-white\">Кроссовки</a></li>
          {% if last_username == 'm@mail.ru' %}
         
          <li><a href={{path('adminPanel')}} class=\"nav-link px-2 text-white\">Добавить товар</a></li>
        {% endif %}

        </ul>
       

        <!-- <form class=\"col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3\" role=\"search\">
          <input type=\"search\" class=\"form-control form-control-dark text-bg-dark\" placeholder=\"Search...\" aria-label=\"Search\">
        </form>
-->  {% if last_username != null %}
        <div class=\"text-end\">
          <form action=\"{{ path('view_cart') }}\" method=\"POST\">
            <button type=\"submit\" class=\"btn btn-warning\">Корзина</button>
            <!-- <button type=\"button\" class=\"btn btn-warning\">Sign-up</button> -->
          </form>
        </div>
        {% endif %}

          {% if last_username == null %}
        <a href={{path('app_login')}} class=\"nav-link px-2 text-secondary\">Войти</a>

        {% else %}
        <a href={{path('_logout_main')}} class=\"nav-link px-2 text-secondary\">Выйти</a>

        {% endif %}


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
