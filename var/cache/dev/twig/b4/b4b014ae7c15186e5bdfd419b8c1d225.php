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

/* index.html.twig */
class __TwigTemplate_670ac769a6a49089f0fdcc31b38d31e9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Магазин одежды ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT\" crossorigin=\"anonymous\">
   <style>
    img {
        width: 100%;
        height: auto;
        /* ТУТ ВЫСОТУ УСТАНАВЛИВАЕМ */
        object-fit: cover;
    }
    .button-size{
        height: 300px;
        font-size: 34px;
        width:%;
       color: #FF0000;

    }
    .a_size{
        width:100%;
    }
    .background{
    width: 100%;

    height: auto;
    background-image: url(\"https://kartinki.pics/pics/uploads/posts/2022-08/1660836063_1-kartinkin-net-p-fon-dlya-saita-internet-magazina-krasivo-1.jpg\");
    }
     
        .background_jeans{
          background-image: url(\"https://star-tex.ru/media/files/wiki/preview/image2.jpg\");
        }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 37
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 38
        echo " 

  
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 43
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo " 
<div class=\" . background container-fluid d-flex flex-wrap justify-content-center align-items-center h-100\">
  <div class=\"row w-100\">
    <div class=\"col-md-6 mb-3 mt-5  d-flex justify-content-center\">
    <a href=";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jeans");
        echo " class=\" a_size nav-link  text-white\">
      <button  class=\"button-size background_jeans btn btn-secondary  btn-lg w-100\">Джинсы</button>
    </a>  
    </div>
    <div class=\"col-md-6 mb-3 mt-5 d-flex justify-content-center\">
      <a href=";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sweater");
        echo " class=\" a_size nav-link  text-white\">
        <button class=\"button-size btn btn-dark btn btn-outline-warning btn-lg w-100\">Кофты</button>
      </a>  
    </div>
    <div class=\"col-md-6  mb-3 mt-5 d-flex justify-content-center\">
      <a href=";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_t_shirt");
        echo " class=\" a_size nav-link  text-white\">
        <button class=\"button-size btn btn-dark btn btn-outline-warning  btn-lg w-100\">Футболки</button>
      </a>
    </div>
    <div class=\"col-md-6 mb-3 mt-5 d-flex justify-content-center\">
      <a href=";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sneakers");
        echo " class=\" a_size nav-link  text-white\">
      <button class=\"button-size btn btn-dark btn btn-outline-warning btn-lg w-100\">Кроссовки</button>
      </a>

    </div>
  </div>
</div>
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 72
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 73
        echo "<div class=\" text-bg-dark\">
  <footer class=\" text-bg-dark\">
    <p class=\"text-center text-body-secondary\">© 2024 Company, Inc</p>
  </footer>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "index.html.twig";
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
        return array (  188 => 73,  181 => 72,  166 => 63,  158 => 58,  150 => 53,  142 => 48,  136 => 44,  129 => 43,  119 => 38,  112 => 37,  76 => 6,  69 => 5,  56 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Магазин одежды {% endblock %}

{% block stylesheets %}
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT\" crossorigin=\"anonymous\">
   <style>
    img {
        width: 100%;
        height: auto;
        /* ТУТ ВЫСОТУ УСТАНАВЛИВАЕМ */
        object-fit: cover;
    }
    .button-size{
        height: 300px;
        font-size: 34px;
        width:%;
       color: #FF0000;

    }
    .a_size{
        width:100%;
    }
    .background{
    width: 100%;

    height: auto;
    background-image: url(\"https://kartinki.pics/pics/uploads/posts/2022-08/1660836063_1-kartinkin-net-p-fon-dlya-saita-internet-magazina-krasivo-1.jpg\");
    }
     
        .background_jeans{
          background-image: url(\"https://star-tex.ru/media/files/wiki/preview/image2.jpg\");
        }
</style>
{% endblock %}

 {% block header %}
 

  
{% endblock %}

 {% block body %}
 
<div class=\" . background container-fluid d-flex flex-wrap justify-content-center align-items-center h-100\">
  <div class=\"row w-100\">
    <div class=\"col-md-6 mb-3 mt-5  d-flex justify-content-center\">
    <a href={{path('app_jeans')}} class=\" a_size nav-link  text-white\">
      <button  class=\"button-size background_jeans btn btn-secondary  btn-lg w-100\">Джинсы</button>
    </a>  
    </div>
    <div class=\"col-md-6 mb-3 mt-5 d-flex justify-content-center\">
      <a href={{path('app_sweater')}} class=\" a_size nav-link  text-white\">
        <button class=\"button-size btn btn-dark btn btn-outline-warning btn-lg w-100\">Кофты</button>
      </a>  
    </div>
    <div class=\"col-md-6  mb-3 mt-5 d-flex justify-content-center\">
      <a href={{path('app_t_shirt')}} class=\" a_size nav-link  text-white\">
        <button class=\"button-size btn btn-dark btn btn-outline-warning  btn-lg w-100\">Футболки</button>
      </a>
    </div>
    <div class=\"col-md-6 mb-3 mt-5 d-flex justify-content-center\">
      <a href={{path('app_sneakers')}} class=\" a_size nav-link  text-white\">
      <button class=\"button-size btn btn-dark btn btn-outline-warning btn-lg w-100\">Кроссовки</button>
      </a>

    </div>
  </div>
</div>
 {% endblock %}

{% block footer %}
<div class=\" text-bg-dark\">
  <footer class=\" text-bg-dark\">
    <p class=\"text-center text-body-secondary\">© 2024 Company, Inc</p>
  </footer>
</div>
{% endblock %}

", "index.html.twig", "C:\\PHP\\clothingStore\\ClothingShop\\clothingShop\\templates\\index.html.twig");
    }
}
