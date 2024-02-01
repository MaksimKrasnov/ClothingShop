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

/* crud/deleteProduct.html.twig */
class __TwigTemplate_0bd1828c68e2348a22b6e04b657de544 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud/deleteProduct.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
 ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT\" crossorigin=\"anonymous\">
   <style>
    img {
        width: 100%;
        height: 30vw;
        /* ТУТ ВЫСОТУ УСТАНАВЛИВАЕМ */
        object-fit: cover;
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

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo " 
     <div class=\" container px-4 px-lg-5 mt-5\">
        <div class=\"row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-3  justify-content-center\">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo " 

                    <div class=\" col-md-5 mb-4\">
                        <div class=\"card p-2\" style=\"width: 25rem;\">
                            
                            <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "imageLink", [], "any", false, false, false, 27), "html", null, true);
            echo "\"class=\"card-img-top\" alt=\"Product Image\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Name", [], "any", false, false, false, 29), "html", null, true);
            echo " Размер: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 29), "html", null, true);
            echo " </h5>
                                    <p class=\"card-text\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 30), "html", null, true);
            echo "</p>
                                    <p class=\"card-text\">Цена: ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 31), "html", null, true);
            echo " руб.</p>
                                   <form action=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteProductById", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" method=\"post\">
                                    <button type=\"submit\" class=\"btn btn-outline-dark mt-auto\">Delete</button>
                                    </form>
                                     <form action=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateProduct", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" method=\"post\">
                                    <button type=\"submit\" class=\"btn btn-outline-dark mt-auto\">Update</button>
                                    </form>
                                 </div>
                      </div>
                    </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "         </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "crud/deleteProduct.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  142 => 42,  129 => 35,  123 => 32,  119 => 31,  115 => 30,  109 => 29,  104 => 27,  94 => 22,  89 => 19,  82 => 18,  61 => 2,  54 => 1,  47 => 18,  44 => 17,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT\" crossorigin=\"anonymous\">
   <style>
    img {
        width: 100%;
        height: 30vw;
        /* ТУТ ВЫСОТУ УСТАНАВЛИВАЕМ */
        object-fit: cover;
    }
    .background{
    width: 100%;
    height: auto;
    background-image: url(\"https://kartinki.pics/pics/uploads/posts/2022-08/1660836063_1-kartinkin-net-p-fon-dlya-saita-internet-magazina-krasivo-1.jpg\");
    }
</style>
{% endblock %}

 {% block body %}
 
     <div class=\" container px-4 px-lg-5 mt-5\">
        <div class=\"row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-3  justify-content-center\">
        {% for item in data %} 

                    <div class=\" col-md-5 mb-4\">
                        <div class=\"card p-2\" style=\"width: 25rem;\">
                            
                            <img src=\"{{ item.imageLink }}\"class=\"card-img-top\" alt=\"Product Image\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">{{ item.Name }} Размер: {{item.size}} </h5>
                                    <p class=\"card-text\">{{ item.description}}</p>
                                    <p class=\"card-text\">Цена: {{item.price }} руб.</p>
                                   <form action=\"{{ path('deleteProductById', { 'id': item.id }) }}\" method=\"post\">
                                    <button type=\"submit\" class=\"btn btn-outline-dark mt-auto\">Delete</button>
                                    </form>
                                     <form action=\"{{ path('updateProduct', { 'id': item.id   }) }}\" method=\"post\">
                                    <button type=\"submit\" class=\"btn btn-outline-dark mt-auto\">Update</button>
                                    </form>
                                 </div>
                      </div>
                    </div>
        {% endfor %}
         </div>
    </div>
{% endblock %}
", "crud/deleteProduct.html.twig", "C:\\PHP\\clothingStore\\ClothingShop\\clothingShop\\templates\\crud\\deleteProduct.html.twig");
    }
}
