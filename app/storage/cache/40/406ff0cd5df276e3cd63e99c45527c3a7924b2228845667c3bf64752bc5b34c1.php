<?php

/* main/index.twig */
class __TwigTemplate_4e2abcfee41cbf1b1346740416f95c6e816d0d8f71ef573852d2fc07be694ed9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"/api/register\" method=\"POST\">
    <div class=\"field\"><label for=\"\"></label><input name=\"email\" type=\"text\"></div>
    <div class=\"field\"><label for=\"\"></label><input name=\"password\" type=\"password\"></div>
    <div class=\"submit\"><input type=\"submit\"></div>
</form>aaa
";
        // line 6
        echo twig_escape_filter($this->env, ($context["test"] ?? null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "main/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "main/index.twig", "/Users/dominic/Development/draftmvc-twig/app/views/main/index.twig");
    }
}
