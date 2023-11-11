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

/* registration/confirm.html.twig */
class __TwigTemplate_2d7102949f6724a2a68f5cb7053bc730 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirm.html.twig"));

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
    <h1 class=\"text-xs5 flex items-center justify-center text-sm uppercase\">Confirmation account</h1>
    <h1 class=\"break-words\">";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "</h1>
    <form action=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post.checkConfirm");
        echo "\" method=\"GET\">
        <div>
            <input class=\"text-xs my-3 p-1 bg-gray-200 w-full\" type=\"hidden\" name=\"path\" placeholder=\"path\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\" required/>
        </div>
        <div>
            <input class=\"text-xs my-3 p-1 bg-gray-200 w-full\" type=\"text\" name=\"code\" placeholder=\"code\" value=\"\" required/>
        </div>
        <div class=\"flex items-center justify-center\">
            <input class=\"p-1 text-sm w-full text-white bg-indigo-600 cursor-pointer uppercase\" type=\"submit\" value=\"confirm\" />
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
        return "registration/confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 8,  91 => 7,  69 => 17,  64 => 15,  60 => 14,  54 => 10,  52 => 7,  44 => 1,);
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
    <h1 class=\"text-xs5 flex items-center justify-center text-sm uppercase\">Confirmation account</h1>
    <h1 class=\"break-words\">{{ path }}</h1>
    <form action=\"{{ path('post.checkConfirm') }}\" method=\"GET\">
        <div>
            <input class=\"text-xs my-3 p-1 bg-gray-200 w-full\" type=\"hidden\" name=\"path\" placeholder=\"path\" value=\"{{ path }}\" required/>
        </div>
        <div>
            <input class=\"text-xs my-3 p-1 bg-gray-200 w-full\" type=\"text\" name=\"code\" placeholder=\"code\" value=\"\" required/>
        </div>
        <div class=\"flex items-center justify-center\">
            <input class=\"p-1 text-sm w-full text-white bg-indigo-600 cursor-pointer uppercase\" type=\"submit\" value=\"confirm\" />
        </div>
    </form>
</div>
</body>
</html>", "registration/confirm.html.twig", "/opt/lampp/htdocs/www/symfony/templates/registration/confirm.html.twig");
    }
}
