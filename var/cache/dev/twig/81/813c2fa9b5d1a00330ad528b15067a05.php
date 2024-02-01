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

/* crud/addProduct.html.twig */
class __TwigTemplate_fc7953d4614b53d4addafd35e92d07aa extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud/addProduct.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('title', $context, $blocks);
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 102
        echo "
";
        // line 103
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo " <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT\" crossorigin=\"anonymous\">
   <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" />
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">

  <style>
  form-container{
 background: #ecf0f3;
 font-family: 'Nunito', sans-serif;
 padding: 40px;
 border-radius: 20px;
 box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
}

.form-container .form-icon{
 color: #ac40ab;
 font-size: 55px;
 text-align: center;
 line-height: 100px;
 width: 100px;
 height:100px;
 margin: 0 auto 15px;
 border-radius: 50px;
 box-shadow: 7px 7px 10px #cbced1, -7px -7px 10px #fff;
}

.form-container .title{
 color: #000000;
 font-size: 25px;
 font-weight: 700;
 text-transform: uppercase;
 letter-spacing: 1px;
 text-align: center;
 margin: 0 0 20px;
}

.form-container .form-horizontal .form-group{ margin: 0 0 25px 0; }

input[type=\"checkbox\"]{
   width: 16px;
  height: 16px;
  margin-left:5px;
  margin-top: 5px;
  border: 2px solid #ccc;
  cursor: pointer;
}
label {
 font-size: 15px;
 font-weight: 600;
 text-transform: uppercase;
}

.form-container .form-horizontal .form-control{
 color: #333;
 background: #ecf0f3;
 font-size: 15px;
 height: 50px;
 padding: 20px;
 letter-spacing: 1px;
 border: none;
 border-radius: 50px;
 box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px #fff;
 display: inline-block;
 transition: all 0.3s ease 0s;
}

.form-container .form-horizontal .form-control:focus{
 box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px #fff;
 outline: none;
}

.form-container .form-horizontal .form-control::placeholder{
 color: #808080;
 font-size: 14px;
}
  .form-container .btn{
 color: #fff;
 margin-top:5px;
 background-color: #000000;
 font-size: 15px;
 font-weight: bold;
 text-transform: uppercase;
 width: 100%;
 padding: 12px 15px 11px;
 border-radius: 20px;
 box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px #fff;
 border: none;
 transition: all 0.5s ease 0s;
}

.form-container  .btn:hover,
.form-container  .btn:focus{
 color: #234234;
 letter-spacing: 3px;
 box-shadow: none;
 outline: none;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 103
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 104
        echo "<div class=\"container-fluid\">
<div class=\"col-md-4 offset-md-4\">
 <div class=\"form-container\">
  <h1 class=\"title\">Добавление/Обновление карточки товара</h1>
 ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["addForm"]) || array_key_exists("addForm", $context) ? $context["addForm"] : (function () { throw new RuntimeError('Variable "addForm" does not exist.', 108, $this->source); })()), 'errors');
        echo "

    ";
        // line 110
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addForm"]) || array_key_exists("addForm", $context) ? $context["addForm"] : (function () { throw new RuntimeError('Variable "addForm" does not exist.', 110, $this->source); })()), 'form_start');
        echo "
        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addForm"]) || array_key_exists("addForm", $context) ? $context["addForm"] : (function () { throw new RuntimeError('Variable "addForm" does not exist.', 111, $this->source); })()), "category", [], "any", false, false, false, 111), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addForm"]) || array_key_exists("addForm", $context) ? $context["addForm"] : (function () { throw new RuntimeError('Variable "addForm" does not exist.', 112, $this->source); })()), "name", [], "any", false, false, false, 112), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addForm"]) || array_key_exists("addForm", $context) ? $context["addForm"] : (function () { throw new RuntimeError('Variable "addForm" does not exist.', 113, $this->source); })()), "size", [], "any", false, false, false, 113), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addForm"]) || array_key_exists("addForm", $context) ? $context["addForm"] : (function () { throw new RuntimeError('Variable "addForm" does not exist.', 114, $this->source); })()), "price", [], "any", false, false, false, 114), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
       
        ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addForm"]) || array_key_exists("addForm", $context) ? $context["addForm"] : (function () { throw new RuntimeError('Variable "addForm" does not exist.', 116, $this->source); })()), "description", [], "any", false, false, false, 116), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addForm"]) || array_key_exists("addForm", $context) ? $context["addForm"] : (function () { throw new RuntimeError('Variable "addForm" does not exist.', 117, $this->source); })()), "imageLink", [], "any", false, false, false, 117), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
       

      <button type=\"submit\" class=\"btn\">Сохранить</button>
    ";
        // line 121
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addForm"]) || array_key_exists("addForm", $context) ? $context["addForm"] : (function () { throw new RuntimeError('Variable "addForm" does not exist.', 121, $this->source); })()), 'form_end');
        echo "

    
   
<div>
<div>

<div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "crud/addProduct.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  233 => 121,  226 => 117,  222 => 116,  217 => 114,  213 => 113,  209 => 112,  205 => 111,  201 => 110,  196 => 108,  190 => 104,  183 => 103,  79 => 4,  72 => 3,  60 => 2,  53 => 103,  50 => 102,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block title %}{% endblock %}
{% block stylesheets %}
 <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT\" crossorigin=\"anonymous\">
   <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" />
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">

  <style>
  form-container{
 background: #ecf0f3;
 font-family: 'Nunito', sans-serif;
 padding: 40px;
 border-radius: 20px;
 box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
}

.form-container .form-icon{
 color: #ac40ab;
 font-size: 55px;
 text-align: center;
 line-height: 100px;
 width: 100px;
 height:100px;
 margin: 0 auto 15px;
 border-radius: 50px;
 box-shadow: 7px 7px 10px #cbced1, -7px -7px 10px #fff;
}

.form-container .title{
 color: #000000;
 font-size: 25px;
 font-weight: 700;
 text-transform: uppercase;
 letter-spacing: 1px;
 text-align: center;
 margin: 0 0 20px;
}

.form-container .form-horizontal .form-group{ margin: 0 0 25px 0; }

input[type=\"checkbox\"]{
   width: 16px;
  height: 16px;
  margin-left:5px;
  margin-top: 5px;
  border: 2px solid #ccc;
  cursor: pointer;
}
label {
 font-size: 15px;
 font-weight: 600;
 text-transform: uppercase;
}

.form-container .form-horizontal .form-control{
 color: #333;
 background: #ecf0f3;
 font-size: 15px;
 height: 50px;
 padding: 20px;
 letter-spacing: 1px;
 border: none;
 border-radius: 50px;
 box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px #fff;
 display: inline-block;
 transition: all 0.3s ease 0s;
}

.form-container .form-horizontal .form-control:focus{
 box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px #fff;
 outline: none;
}

.form-container .form-horizontal .form-control::placeholder{
 color: #808080;
 font-size: 14px;
}
  .form-container .btn{
 color: #fff;
 margin-top:5px;
 background-color: #000000;
 font-size: 15px;
 font-weight: bold;
 text-transform: uppercase;
 width: 100%;
 padding: 12px 15px 11px;
 border-radius: 20px;
 box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px #fff;
 border: none;
 transition: all 0.5s ease 0s;
}

.form-container  .btn:hover,
.form-container  .btn:focus{
 color: #234234;
 letter-spacing: 3px;
 box-shadow: none;
 outline: none;
}
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid\">
<div class=\"col-md-4 offset-md-4\">
 <div class=\"form-container\">
  <h1 class=\"title\">Добавление/Обновление карточки товара</h1>
 {{ form_errors(addForm) }}

    {{ form_start(addForm) }}
        {{ form_row(addForm.category , { 'attr': {'class': 'form-control'} })  }}
        {{ form_row(addForm.name , { 'attr': {'class': 'form-control'} })  }}
        {{ form_row(addForm.size, { 'attr': {'class': 'form-control'} }) }}
        {{ form_row(addForm.price, { 'attr': {'class': 'form-control'} }) }}
       
        {{ form_row(addForm.description, { 'attr': {'class': 'form-control'} }) }}
        {{ form_row(addForm.imageLink, { 'attr': {'class': 'form-control'} }) }}
       

      <button type=\"submit\" class=\"btn\">Сохранить</button>
    {{ form_end(addForm) }}

    
   
<div>
<div>

<div>
{% endblock %}
", "crud/addProduct.html.twig", "C:\\PHP\\clothingStore\\ClothingShop\\clothingShop\\templates\\crud\\addProduct.html.twig");
    }
}
