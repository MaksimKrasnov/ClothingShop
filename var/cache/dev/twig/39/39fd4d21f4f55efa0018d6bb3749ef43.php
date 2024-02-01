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
class __TwigTemplate_f4dc584d2c6b4c5ba9fdff03542fe6a0 extends Template
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
  
    .button-size{
        height: 300px;
        font-size:45px;
       opacity:0.7;
    }
    .a_size{
        width:100%;
    }
    .background{
    width: 100%;
    height: auto;
    background-image: url(\"https://kartinki.pics/pics/uploads/posts/2022-08/1660836063_1-kartinkin-net-p-fon-dlya-saita-internet-magazina-krasivo-1.jpg\");
    }
     p{
      margin-bottom:0rem;
      
     }
        
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 30
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 31
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 34
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo " 
<div class=\" .background container-fluid d-flex flex-wrap justify-content-center align-items-center h-100\">
  <div class=\"row w-100\">
    <div class=\"col-md-6 mb-3 mt-5  d-flex justify-content-center\">
    <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["id" => 1]);
        echo "\" class=\"a_size nav-link text-white\">
      <button  class=\"button-size btn btn-dark btn btn-outline-warning  btn-lg w-100\">Джинсы</button>
    </a>  
    </div>
    <div class=\"col-md-6 mb-3 mt-5 d-flex justify-content-center\">
      <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["id" => 2]);
        echo "\" class=\" a_size nav-link  text-white\">
        <button class=\"button-size btn btn-dark btn btn-outline-warning  btn-lg w-100\">Кофты</button>
      </a>  
    </div>
    <div class=\"col-md-6  mb-3 mt-5 d-flex justify-content-center\">
      <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["id" => 3]);
        echo "\"  class=\" a_size nav-link  text-white\">
        <button class=\"button-size btn btn-dark btn btn-outline-warning  btn-lg w-100\">Футболки</button>
      </a>
    </div>
    <div class=\"col-md-6 mb-3 mt-5 d-flex justify-content-center\">
      <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["id" => 4]);
        echo "\"  class=\" a_size nav-link  text-white\">
      <button class=\"button-size btn btn-dark btn btn-outline-warning btn-lg w-100\">Кроссовки</button>
      </a>

    </div>
  </div>
</div>
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 63
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 64
        echo "<div class=\" text-bg-dark mb-0\" >
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
        return array (  179 => 64,  172 => 63,  157 => 54,  149 => 49,  141 => 44,  133 => 39,  127 => 35,  120 => 34,  112 => 31,  105 => 30,  76 => 6,  69 => 5,  56 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Магазин одежды {% endblock %}

{% block stylesheets %}
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT\" crossorigin=\"anonymous\">
   <style>
  
    .button-size{
        height: 300px;
        font-size:45px;
       opacity:0.7;
    }
    .a_size{
        width:100%;
    }
    .background{
    width: 100%;
    height: auto;
    background-image: url(\"https://kartinki.pics/pics/uploads/posts/2022-08/1660836063_1-kartinkin-net-p-fon-dlya-saita-internet-magazina-krasivo-1.jpg\");
    }
     p{
      margin-bottom:0rem;
      
     }
        
</style>
{% endblock %}

 {% block header %}

{% endblock %}

 {% block body %}
 
<div class=\" .background container-fluid d-flex flex-wrap justify-content-center align-items-center h-100\">
  <div class=\"row w-100\">
    <div class=\"col-md-6 mb-3 mt-5  d-flex justify-content-center\">
    <a href=\"{{ path('app_product', { 'id': 1 }) }}\" class=\"a_size nav-link text-white\">
      <button  class=\"button-size btn btn-dark btn btn-outline-warning  btn-lg w-100\">Джинсы</button>
    </a>  
    </div>
    <div class=\"col-md-6 mb-3 mt-5 d-flex justify-content-center\">
      <a href=\"{{ path('app_product', { 'id': 2 }) }}\" class=\" a_size nav-link  text-white\">
        <button class=\"button-size btn btn-dark btn btn-outline-warning  btn-lg w-100\">Кофты</button>
      </a>  
    </div>
    <div class=\"col-md-6  mb-3 mt-5 d-flex justify-content-center\">
      <a href=\"{{ path('app_product', { 'id': 3 }) }}\"  class=\" a_size nav-link  text-white\">
        <button class=\"button-size btn btn-dark btn btn-outline-warning  btn-lg w-100\">Футболки</button>
      </a>
    </div>
    <div class=\"col-md-6 mb-3 mt-5 d-flex justify-content-center\">
      <a href=\"{{ path('app_product', { 'id': 4 }) }}\"  class=\" a_size nav-link  text-white\">
      <button class=\"button-size btn btn-dark btn btn-outline-warning btn-lg w-100\">Кроссовки</button>
      </a>

    </div>
  </div>
</div>
 {% endblock %}

{% block footer %}
<div class=\" text-bg-dark mb-0\" >
  <footer class=\" text-bg-dark\">
    <p class=\"text-center text-body-secondary\">© 2024 Company, Inc</p>
  </footer>
</div>
{% endblock %}

", "index.html.twig", "C:\\PHP\\clothingStore\\ClothingShop\\clothingShop\\templates\\index.html.twig");
    }
}
