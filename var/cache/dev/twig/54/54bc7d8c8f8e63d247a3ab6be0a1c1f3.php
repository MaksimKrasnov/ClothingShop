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

/* cart/index.html.twig */
class __TwigTemplate_a484104bf7956a9b1b039a4b5f208a0a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello CardController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT\" crossorigin=\"anonymous\">
   <style>
    img {
        width: 100%;
        height: 30vw;
        /* ТУТ ВЫСОТУ УСТАНАВЛИВАЕМ */
        object-fit: cover;
    }
    .btn{
        margin-top:5px;
    }
    .divm{
        margin-top:20px;
        opacity: 0.7;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 23
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo " <div class=\"divm text-center d-flex justify-content-center bg-dark text-white\">
    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["phoneForm"]) || array_key_exists("phoneForm", $context) ? $context["phoneForm"] : (function () { throw new RuntimeError('Variable "phoneForm" does not exist.', 25, $this->source); })()), 'errors');
        echo "

    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["phoneForm"]) || array_key_exists("phoneForm", $context) ? $context["phoneForm"] : (function () { throw new RuntimeError('Variable "phoneForm" does not exist.', 27, $this->source); })()), 'form_start');
        echo "
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["phoneForm"]) || array_key_exists("phoneForm", $context) ? $context["phoneForm"] : (function () { throw new RuntimeError('Variable "phoneForm" does not exist.', 28, $this->source); })()), "phone", [], "any", false, false, false, 28), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
      <button type=\"submit\" class=\"btn btn-warning\">Заказать</button>
    ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["phoneForm"]) || array_key_exists("phoneForm", $context) ? $context["phoneForm"] : (function () { throw new RuntimeError('Variable "phoneForm" does not exist.', 30, $this->source); })()), 'form_end');
        echo "

</div>
     <div class=\"container px-4 px-lg-5 mt-5\">
        <div class=\"row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-3  justify-content-center\">
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo " 
                     <div class=\" col-md-5 mb-4\">
                        <div class=\"card p-2\" style=\"width: 25rem;\">
                            
                            <img src=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "imageLink", [], "any", false, false, false, 39), "html", null, true);
            echo "\"class=\"card-img-top\" alt=\"Product Image\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 41), "html", null, true);
            echo " Размер: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 41), "html", null, true);
            echo " </h5>
                                    <p class=\"card-text\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 42), "html", null, true);
            echo "</p>
                                    <p class=\"card-text\">Цена: ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 43), "html", null, true);
            echo " руб.</p>
                                    
                                    
                                 </div>
                      </div>
                    </div>
        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
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
        return "cart/index.html.twig";
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
        return array (  167 => 51,  153 => 43,  149 => 42,  143 => 41,  138 => 39,  129 => 35,  121 => 30,  116 => 28,  112 => 27,  107 => 25,  104 => 24,  97 => 23,  74 => 5,  67 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello CardController!{% endblock %}
{% block stylesheets %}
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT\" crossorigin=\"anonymous\">
   <style>
    img {
        width: 100%;
        height: 30vw;
        /* ТУТ ВЫСОТУ УСТАНАВЛИВАЕМ */
        object-fit: cover;
    }
    .btn{
        margin-top:5px;
    }
    .divm{
        margin-top:20px;
        opacity: 0.7;
    }
</style>
{% endblock %}

{% block body %}
 <div class=\"divm text-center d-flex justify-content-center bg-dark text-white\">
    {{ form_errors(phoneForm) }}

    {{ form_start(phoneForm) }}
        {{ form_row(phoneForm.phone , { 'attr': {'class': 'form-control'} })  }}
      <button type=\"submit\" class=\"btn btn-warning\">Заказать</button>
    {{ form_end(phoneForm) }}

</div>
     <div class=\"container px-4 px-lg-5 mt-5\">
        <div class=\"row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-3  justify-content-center\">
        {% for item in cart %} 
                     <div class=\" col-md-5 mb-4\">
                        <div class=\"card p-2\" style=\"width: 25rem;\">
                            
                            <img src=\"{{ item.imageLink }}\"class=\"card-img-top\" alt=\"Product Image\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">{{ item.name }} Размер: {{item.size}} </h5>
                                    <p class=\"card-text\">{{ item.description}}</p>
                                    <p class=\"card-text\">Цена: {{item.price }} руб.</p>
                                    
                                    
                                 </div>
                      </div>
                    </div>
        
        {% endfor %}
         </div>
    </div>
   
{% endblock %}
", "cart/index.html.twig", "C:\\PHP\\clothingStore\\ClothingShop\\clothingShop\\templates\\cart\\index.html.twig");
    }
}
