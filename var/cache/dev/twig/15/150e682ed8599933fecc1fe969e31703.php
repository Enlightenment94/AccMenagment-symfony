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

/* registration/reset.html.twig */
class __TwigTemplate_db63525440a0f36aaa5f4fbe842ebdc0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/reset.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/reset.html.twig"));

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
    <h1 class=\"text-xs5 flex items-center justify-center text-sm uppercase\">New password</h1>
    <form action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reset_password");
        echo "\" method=\"POST\">
        <div class=\"my-2\">
            <input class=\"text-xs my-3 p-1 bg-gray-200 w-full\" type=\"password\" name=\"password\" placeholder=\"password\" value=\"\" required/>
        </div>
        <div class=\"my-2\">
            <input class=\"text-xs my-3 p-1 bg-gray-200 w-full\" type=\"hidden\" name=\"token\" placeholder=\"token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "\" required/>
        </div>
        <div class=\"flex items-center justify-center\">
            <input class=\"p-1 text-sm w-full text-white bg-indigo-600 cursor-pointer uppercase\" type=\"submit\" value=\"reset\" />
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
        return "registration/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 8,  87 => 7,  68 => 19,  60 => 14,  54 => 10,  52 => 7,  44 => 1,);
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
    <h1 class=\"text-xs5 flex items-center justify-center text-sm uppercase\">New password</h1>
    <form action=\"{{ path('app_reset_password') }}\" method=\"POST\">
        <div class=\"my-2\">
            <input class=\"text-xs my-3 p-1 bg-gray-200 w-full\" type=\"password\" name=\"password\" placeholder=\"password\" value=\"\" required/>
        </div>
        <div class=\"my-2\">
            <input class=\"text-xs my-3 p-1 bg-gray-200 w-full\" type=\"hidden\" name=\"token\" placeholder=\"token\" value=\"{{ token }}\" required/>
        </div>
        <div class=\"flex items-center justify-center\">
            <input class=\"p-1 text-sm w-full text-white bg-indigo-600 cursor-pointer uppercase\" type=\"submit\" value=\"reset\" />
        </div>
    </form>
</div>
</body>
</html>", "registration/reset.html.twig", "/app/www/templates/registration/reset.html.twig");
    }
}
