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

/* crud/index.html.twig */
class __TwigTemplate_4e49ad8660c40bbf2a7234582dbe031a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud/index.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "
 ";
        // line 25
        $this->displayBlock('header', $context, $blocks);
        // line 28
        echo "
 ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT\" crossorigin=\"anonymous\">
   <style>
    .button-size{
        height: 300px;
        font-size:45px;
               width:100%;

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
        
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 25
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 26
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 29
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 30
        echo " 
<div class=\" . background container-fluid d-flex flex-wrap justify-content-center align-items-center h-100\">
  <div class=\"row w-100\">
    <div class=\"col-md-6 mb-3 mt-5  d-flex justify-content-center\">
    <a href=";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addProduct");
        echo " class=\"a_size nav-link text-white\"> 
      <button  class=\"button-size btn btn-dark btn btn-outline-warning  btn-lg w-100\">Добавить товар</button>
    </a>  
    </div>
    <div class=\"col-md-6 mb-3 mt-5 d-flex justify-content-center\">
            <a href=";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteProduct");
        echo "  class=\"a_size nav-link text-white\"> 
        <button class=\"button-size btn btn-dark btn btn-outline-warning  btn-lg w-100\">Удалить/Обновить товар</button>
      </a>  
    </div>
  

    </div>
  </div>
</div>
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "crud/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  133 => 39,  125 => 34,  119 => 30,  112 => 29,  104 => 26,  97 => 25,  70 => 3,  63 => 2,  56 => 29,  53 => 28,  51 => 25,  48 => 24,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block stylesheets %}
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT\" crossorigin=\"anonymous\">
   <style>
    .button-size{
        height: 300px;
        font-size:45px;
               width:100%;

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
        
</style>
{% endblock %}

 {% block header %}

{% endblock %}

 {% block body %}
 
<div class=\" . background container-fluid d-flex flex-wrap justify-content-center align-items-center h-100\">
  <div class=\"row w-100\">
    <div class=\"col-md-6 mb-3 mt-5  d-flex justify-content-center\">
    <a href={{path('addProduct')}} class=\"a_size nav-link text-white\"> 
      <button  class=\"button-size btn btn-dark btn btn-outline-warning  btn-lg w-100\">Добавить товар</button>
    </a>  
    </div>
    <div class=\"col-md-6 mb-3 mt-5 d-flex justify-content-center\">
            <a href={{path('deleteProduct')}}  class=\"a_size nav-link text-white\"> 
        <button class=\"button-size btn btn-dark btn btn-outline-warning  btn-lg w-100\">Удалить/Обновить товар</button>
      </a>  
    </div>
  

    </div>
  </div>
</div>
 {% endblock %}", "crud/index.html.twig", "C:\\PHP\\clothingStore\\ClothingShop\\clothingShop\\templates\\crud\\index.html.twig");
    }
}
