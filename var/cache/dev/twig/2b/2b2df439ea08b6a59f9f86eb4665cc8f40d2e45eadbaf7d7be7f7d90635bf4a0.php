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

/* formJudgment.html.twig */
class __TwigTemplate_da8d8abd6d127a9d2a144b7eddf84264c9ba1c9b67f72a0faa39324d4421fd98 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formJudgment.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formJudgment.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Prueba</title>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
</head>
<body>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js\" integrity=\"sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13\" crossorigin=\"anonymous\"></script>

<div class=\"mt-5 container\">
    <form action=\"\" method=\"POST\">
    <h1>Lobby Wars</h1>
        <div class=\"mb-3\">
            <label for=\"plaintiff\" class=\"form-label\">Demandante</label>
            <input type=\"text\" class=\"form-control\" placeholder=\"Ejemplo: NVV\" name=\"plaintiff\" required>
        </div>
        <div class=\"mb-3\">
            <label for=\"defendant\" class=\"form-label\">Demandado</label>
            <input type=\"text\" class=\"form-control\" placeholder=\"Ejemplo: KN\" name=\"defendant\" required>
        </div>
        <input type=\"submit\" class=\"btn btn-success\" value=\"Comprobar resultado\">
    </form>

    ";
        // line 24
        if ((array_key_exists("message", $context) && (0 !== twig_compare((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 24, $this->source); })()), "")))) {
            // line 25
            echo "        <div class=\"mt-5 alert alert-primary\" role=\"alert\">
            ";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 26, $this->source); })()), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 29
        echo "</div>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "formJudgment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  73 => 26,  70 => 25,  68 => 24,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>Prueba</title>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
</head>
<body>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js\" integrity=\"sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13\" crossorigin=\"anonymous\"></script>

<div class=\"mt-5 container\">
    <form action=\"\" method=\"POST\">
    <h1>Lobby Wars</h1>
        <div class=\"mb-3\">
            <label for=\"plaintiff\" class=\"form-label\">Demandante</label>
            <input type=\"text\" class=\"form-control\" placeholder=\"Ejemplo: NVV\" name=\"plaintiff\" required>
        </div>
        <div class=\"mb-3\">
            <label for=\"defendant\" class=\"form-label\">Demandado</label>
            <input type=\"text\" class=\"form-control\" placeholder=\"Ejemplo: KN\" name=\"defendant\" required>
        </div>
        <input type=\"submit\" class=\"btn btn-success\" value=\"Comprobar resultado\">
    </form>

    {% if message is defined and message != '' %}
        <div class=\"mt-5 alert alert-primary\" role=\"alert\">
            {{ message }}
        </div>
    {% endif %}
</div>

</body>
</html>", "formJudgment.html.twig", "/var/www/html/synfony/templates/formJudgment.html.twig");
    }
}
