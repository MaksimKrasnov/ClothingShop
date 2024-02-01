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

/* product/index.html.twig */
class __TwigTemplate_82999ce0453cb242b2b3c86335276712 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT\" crossorigin=\"anonymous\">
   <style>
    img {
        width: 100%;
        height: 30vw;
        /* ТУТ ВЫСОТУ УСТАНАВЛИВАЕМ */
        object-fit: cover;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo " 
     <div class=\"container px-4 px-lg-5 mt-5\">
        <div class=\"row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-3  justify-content-center\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo " 

                     <div class=\" col-md-5 mb-4\">
                        <div class=\"card p-2\" style=\"width: 25rem;\">
                            
                            <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "imageLink", [], "any", false, false, false, 23), "html", null, true);
            echo "\"class=\"card-img-top\" alt=\"Product Image\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 25), "html", null, true);
            echo " Размер: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 25), "html", null, true);
            echo " </h5>
                                    <p class=\"card-text\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 26), "html", null, true);
            echo "</p>
                                    <p class=\"card-text\">Цена: ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 27), "html", null, true);
            echo " руб.</p>
                                    <form action=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart", ["productId" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" method=\"post\">
                                    <div class=\"text-center\"><button type=\"submit\" class=\"btn btn-outline-dark mt-auto\">Добавить в корзину</button>
                                    </form>
                                    </div>
                                 </div>
                      </div>
                    </div>
        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
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
        return "product/index.html.twig";
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
        return array (  132 => 37,  117 => 28,  113 => 27,  109 => 26,  103 => 25,  98 => 23,  88 => 18,  83 => 15,  76 => 14,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT\" crossorigin=\"anonymous\">
   <style>
    img {
        width: 100%;
        height: 30vw;
        /* ТУТ ВЫСОТУ УСТАНАВЛИВАЕМ */
        object-fit: cover;
    }
</style>
{% endblock %}
{% block body %}
 
     <div class=\"container px-4 px-lg-5 mt-5\">
        <div class=\"row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-3  justify-content-center\">
        {% for item in data %} 

                     <div class=\" col-md-5 mb-4\">
                        <div class=\"card p-2\" style=\"width: 25rem;\">
                            
                            <img src=\"{{ item.imageLink }}\"class=\"card-img-top\" alt=\"Product Image\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">{{ item.name }} Размер: {{item.size}} </h5>
                                    <p class=\"card-text\">{{ item.description}}</p>
                                    <p class=\"card-text\">Цена: {{item.price }} руб.</p>
                                    <form action=\"{{ path('app_cart', {'productId': item.id}) }}\" method=\"post\">
                                    <div class=\"text-center\"><button type=\"submit\" class=\"btn btn-outline-dark mt-auto\">Добавить в корзину</button>
                                    </form>
                                    </div>
                                 </div>
                      </div>
                    </div>
        
        {% endfor %}
         </div>
    </div>
    
 {% endblock %}", "product/index.html.twig", "C:\\PHP\\clothingStore\\ClothingShop\\clothingShop\\templates\\product\\index.html.twig");
    }
}
