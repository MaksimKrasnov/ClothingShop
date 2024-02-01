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

/* login/index.html.twig */
class __TwigTemplate_1ba72e097b7716de2efde0d2cba4ff86 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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
 <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" />
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">

<style>
.form-container{
 background: #ecf0f3;
 font-family: 'Nunito', sans-serif;
 padding: 40px;
 border-radius: 20px;
 box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
 margin-top:20px;

}

.form-container .form-icon{
 color: #000;
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
 color: #000;
 font-size: 25px;
 font-weight: 700;
 text-transform: uppercase;
 letter-spacing: 1px;
 text-align: center;
 margin: 0 0 20px;
}

.form-container .form-horizontal .form-group{ margin: 0 0 25px 0; }

.form-container .form-horizontal .form-group label{
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

.form-container .form-horizontal .btn{
 color: #fff;
 background-color: #000;
 font-size: 15px;
 font-weight: bold;
 text-transform: uppercase;
 width: 100%;
 padding: 12px 15px 11px;
 border-radius: 20px;
 box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px #fff;
 border: none;
 transition: all 0.5s ease 0s;
 margin-bottom:10px;
}

.form-container .form-horizontal .btn:hover,
.form-container .form-horizontal .btn:focus{
 color: #fff;
 letter-spacing: 3px;
 box-shadow: none;
 outline: none;
}
.registet{
    margin-top:20px;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 102
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 103
        echo "    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 103, $this->source); })())) {
            // line 104
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 104, $this->source); })()), "messageKey", [], "any", false, false, false, 104), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 104, $this->source); })()), "messageData", [], "any", false, false, false, 104), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 106
        echo "
  <div class=\"container-fluid\">

 <div class=\"col-md-4 offset-md-4\">
 <div class=\"form-container\">
 <div class=\"form-icon\"><i class=\"fa fa-user\"></i></div>
 <h3 class=\"title\">Вход</h3>
 
        <form class=\"form-horizontal\" action=\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"post\">
            <div class=\"form-group\">
                <label for=\"username\">Email:</label>
                <input type=\"text\" placeholder=\"Введите email\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 117, $this->source); })()), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group\">
                <label for=\"password\">Пароль:</label>
                <input type=\"password\" placeholder=\"Введите пароль\" class=\"form-control\" id=\"password\" name=\"_password\">
            </div>

            ";
        // line 126
        echo "       
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
            <button class=\"btn btn-warning\" type=\"submit\">Войти</button>
        </form>
        <div clas=\"register\">
        <form class=\"form-horizontal\"  action=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">
            <button class=\"btn btn-warning\" type=\"submit\">Регистрация</button>
         </form>
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
        return "login/index.html.twig";
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
        return array (  214 => 131,  207 => 127,  204 => 126,  194 => 117,  188 => 114,  178 => 106,  172 => 104,  169 => 103,  162 => 102,  60 => 5,  53 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/login/index.html.twig #}
{% extends 'base.html.twig' %}
{# ... #}
{% block stylesheets %}
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT\" crossorigin=\"anonymous\">
 <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" />
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">

<style>
.form-container{
 background: #ecf0f3;
 font-family: 'Nunito', sans-serif;
 padding: 40px;
 border-radius: 20px;
 box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
 margin-top:20px;

}

.form-container .form-icon{
 color: #000;
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
 color: #000;
 font-size: 25px;
 font-weight: 700;
 text-transform: uppercase;
 letter-spacing: 1px;
 text-align: center;
 margin: 0 0 20px;
}

.form-container .form-horizontal .form-group{ margin: 0 0 25px 0; }

.form-container .form-horizontal .form-group label{
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

.form-container .form-horizontal .btn{
 color: #fff;
 background-color: #000;
 font-size: 15px;
 font-weight: bold;
 text-transform: uppercase;
 width: 100%;
 padding: 12px 15px 11px;
 border-radius: 20px;
 box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px #fff;
 border: none;
 transition: all 0.5s ease 0s;
 margin-bottom:10px;
}

.form-container .form-horizontal .btn:hover,
.form-container .form-horizontal .btn:focus{
 color: #fff;
 letter-spacing: 3px;
 box-shadow: none;
 outline: none;
}
.registet{
    margin-top:20px;
}
</style>
{% endblock %}

{% block body %}
    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

  <div class=\"container-fluid\">

 <div class=\"col-md-4 offset-md-4\">
 <div class=\"form-container\">
 <div class=\"form-icon\"><i class=\"fa fa-user\"></i></div>
 <h3 class=\"title\">Вход</h3>
 
        <form class=\"form-horizontal\" action=\"{{ path('app_login') }}\" method=\"post\">
            <div class=\"form-group\">
                <label for=\"username\">Email:</label>
                <input type=\"text\" placeholder=\"Введите email\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\">
            </div>
            <div class=\"form-group\">
                <label for=\"password\">Пароль:</label>
                <input type=\"password\" placeholder=\"Введите пароль\" class=\"form-control\" id=\"password\" name=\"_password\">
            </div>

            {# If you want to control the URL the user is redirected to on success
            <input type=\"hidden\" name=\"_target_path\" value=\"/account\"> #}
       
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
            <button class=\"btn btn-warning\" type=\"submit\">Войти</button>
        </form>
        <div clas=\"register\">
        <form class=\"form-horizontal\"  action=\"{{ path('app_register') }}\">
            <button class=\"btn btn-warning\" type=\"submit\">Регистрация</button>
         </form>
  </div>
  </div>
  </div>


  </div>
{% endblock %}", "login/index.html.twig", "C:\\PHP\\clothingStore\\ClothingShop\\clothingShop\\templates\\login\\index.html.twig");
    }
}
