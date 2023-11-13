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

/* registration/recover.html.twig */
class __TwigTemplate_5be0ec6a8cf97453fd0f9ea8bf03020a extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/recover.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/recover.html.twig"));

        // line 1
        echo "<!doctype html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <script src=\"https://cdn.tailwindcss.com\"></script>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "</head>
<body class=\"bg-indigo-600\">
<div class=\"w-64 mx-auto rounded-md bg-white p-3 my-10\">
    <h1 class=\"text-xs5 flex items-center justify-center text-sm uppercase\">Reset password</h1>
    <form action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sendToken");
        echo "\" method=\"POST\">
        <div class=\"my-2\">
            <input class=\"shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full\" type=\"text\" name=\"email\" placeholder=\"email\" value=\"\" required/>
        </div>

        <div class=\"my-2\">
            <input class=\"shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full\" type=\"text\" name=\"captcha\" placeholder=\"captcha\" value=\"\" required/>
        </div>

        <div class=\"my-2\">
            <style>
                .bigger {
                    transition: transform 0.3s;
                }

                .bigger:hover {
                    transform: scale(2.1);
                }
            </style>
            <img class='bigger' src=\"data:image/png;base64, ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["captcha"]) || array_key_exists("captcha", $context) ? $context["captcha"] : (function () { throw new RuntimeError('Variable "captcha" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "\" alt=\"Obrazek PNG\">
        </div>

        <div class=\"flex items-center justify-center\">
            <input class=\"bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full\" type=\"submit\" value=\"Reset\" />
        </div>

        <div class=\"text-right mt-2\">
            <a class=\"underline text-indigo-500 hover:text-indigo-700\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">back</a>
        </div>
    </form>
</div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/recover.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 8,  109 => 7,  93 => 41,  82 => 33,  60 => 14,  54 => 10,  52 => 7,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <script src=\"https://cdn.tailwindcss.com\"></script>
    {% block stylesheets %}
        {{ encore_entry_link_tags('app') }}
    {% endblock %}
</head>
<body class=\"bg-indigo-600\">
<div class=\"w-64 mx-auto rounded-md bg-white p-3 my-10\">
    <h1 class=\"text-xs5 flex items-center justify-center text-sm uppercase\">Reset password</h1>
    <form action=\"{{ path('app_sendToken') }}\" method=\"POST\">
        <div class=\"my-2\">
            <input class=\"shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full\" type=\"text\" name=\"email\" placeholder=\"email\" value=\"\" required/>
        </div>

        <div class=\"my-2\">
            <input class=\"shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full\" type=\"text\" name=\"captcha\" placeholder=\"captcha\" value=\"\" required/>
        </div>

        <div class=\"my-2\">
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

        <div class=\"flex items-center justify-center\">
            <input class=\"bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full\" type=\"submit\" value=\"Reset\" />
        </div>

        <div class=\"text-right mt-2\">
            <a class=\"underline text-indigo-500 hover:text-indigo-700\" href=\"{{ path('app_login') }}\">back</a>
        </div>
    </form>
</div>
</body>
</html>", "registration/recover.html.twig", "/opt/lampp/htdocs/www/symfony/templates/registration/recover.html.twig");
    }
}
