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

/* registration/register.html.twig */
class __TwigTemplate_b6153c9292b6aae966a8fb80f09d1571 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Register";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"w-64 mx-auto rounded-md bg-white p-3 my-10\">
        <h1 class=\"text-xl flex items-center justify-center text-sm uppercase\">REGISTER ACCOUNT</h1>

        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 9, $this->source); })()), 'errors');
        echo "

        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 11, $this->source); })()), 'form_start');
        echo "

        <div class=\"my-4\">
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 14, $this->source); })()), "email", [], "any", false, false, false, 14), 'row', ["attr" => ["class" => "shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline", "placeholder" => "Email address", "value" => "kamil@stroniarz.pl"]]);
        // line 20
        echo "
        </div>

        <div class=\"my-4\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 24, $this->source); })()), "plainPassword", [], "any", false, false, false, 24), 'row', ["label_html" => ["class" => "block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"], "attr" => ["class" => "shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline", "placeholder" => "Password", "value" => "abcdabcd"]]);
        // line 33
        echo "
        </div>

        <div class=\"my-4\">
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "captcha", [], "any", false, false, false, 37), 'row', ["label_html" => ["class" => "block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"], "attr" => ["class" => "shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline", "placeholder" => "captcha", "value" =>         // line 44
(isset($context["captcha_code"]) || array_key_exists("captcha_code", $context) ? $context["captcha_code"] : (function () { throw new RuntimeError('Variable "captcha_code" does not exist.', 44, $this->source); })())]]);
        // line 46
        echo "
        </div>

        <div class=\"my-2\">             
             ";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["captcha_ss"]) || array_key_exists("captcha_ss", $context) ? $context["captcha_ss"] : (function () { throw new RuntimeError('Variable "captcha_ss" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "
             ";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["captcha_err"]) || array_key_exists("captcha_err", $context) ? $context["captcha_err"] : (function () { throw new RuntimeError('Variable "captcha_err" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "
            <style>
                .bigger {
                    transition: transform 0.3s;
                }

                .bigger:hover {
                    transform: scale(2.1);
                }
            </style>
            <img class='bigger' src=\"data:image/png;base64, ";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["captcha"]) || array_key_exists("captcha", $context) ? $context["captcha"] : (function () { throw new RuntimeError('Variable "captcha" does not exist.', 61, $this->source); })()), "html", null, true);
        echo "\" alt=\"Obrazek PNG\">
        </div>

        <div class=\"my-4\">
            <label class=\"inline-flex items-center\">
                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 66, $this->source); })()), "agreeTerms", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-checkbox h-5 w-5 text-gray-600"]]);
        // line 70
        echo "
                <span class=\"ml-2 text-gray-700 text-sm\">I agree to the <a href=\"#\" class=\"text-indigo-600\">terms and conditions</a></span>
            </label>
        </div>

        <button type=\"submit\" class=\"bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline\">
            Register
        </button>

        <div class=\"text-right\">
            <a class=\"underline text-indigo-500 hover:text-indigo-700\" href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">back</a>
        </div>
        ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 82, $this->source); })()), 'form_end');
        echo "

    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 82,  168 => 80,  156 => 70,  154 => 66,  146 => 61,  133 => 51,  129 => 50,  123 => 46,  121 => 44,  120 => 37,  114 => 33,  112 => 24,  106 => 20,  104 => 14,  98 => 11,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
    <div class=\"w-64 mx-auto rounded-md bg-white p-3 my-10\">
        <h1 class=\"text-xl flex items-center justify-center text-sm uppercase\">REGISTER ACCOUNT</h1>

        {{ form_errors(registrationForm) }}

        {{ form_start(registrationForm) }}

        <div class=\"my-4\">
            {{ form_row(registrationForm.email, {
                'attr': {
                    'class': 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline',
                    'placeholder': 'Email address',
                    'value': 'kamil@stroniarz.pl'
                }
            }) }}
        </div>

        <div class=\"my-4\">
            {{ form_row(registrationForm.plainPassword, {
                'label_html':{
                    'class': 'block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'
                },
                'attr':{
                    'class': 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline',
                    'placeholder': 'Password',
                    'value': 'abcdabcd'
                }
            }) }}
        </div>

        <div class=\"my-4\">
            {{ form_row(registrationForm.captcha, {
                'label_html':{
                    'class': 'block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'
                },
                'attr':{
                    'class': 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline',
                    'placeholder': 'captcha',
                    'value': captcha_code,
                }
            }) }}
        </div>

        <div class=\"my-2\">             
             {{ captcha_ss }}
             {{ captcha_err }}
            <style>
                .bigger {
                    transition: transform 0.3s;
                }

                .bigger:hover {
                    transform: scale(2.1);
                }
            </style>
            <img class='bigger' src=\"data:image/png;base64, {{ captcha }}\" alt=\"Obrazek PNG\">
        </div>

        <div class=\"my-4\">
            <label class=\"inline-flex items-center\">
                {{ form_widget(registrationForm.agreeTerms, {
                    'attr': {
                        'class': 'form-checkbox h-5 w-5 text-gray-600',
                    }
                }) }}
                <span class=\"ml-2 text-gray-700 text-sm\">I agree to the <a href=\"#\" class=\"text-indigo-600\">terms and conditions</a></span>
            </label>
        </div>

        <button type=\"submit\" class=\"bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline\">
            Register
        </button>

        <div class=\"text-right\">
            <a class=\"underline text-indigo-500 hover:text-indigo-700\" href=\"{{ path('app_login') }}\">back</a>
        </div>
        {{ form_end(registrationForm) }}

    </div>
{% endblock %}", "registration/register.html.twig", "/app/www/templates/registration/register.html.twig");
    }
}
