<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/cult/templates/page.html.twig */
class __TwigTemplate_82e7d2837c6e967a8e4da9f19cba36e8 extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        $this->sandbox = $env->getExtension(SandboxExtension::class)->getChecker();
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["cult_cache"] ?? null), "html", null, true);
        yield "
<div class=\"cult\">
  <header class=\"cult-nav wrap\">
    <a href=\"";
        // line 10
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["front_url"] ?? null), "html", null, true);
        yield "\" class=\"cult-nav__logo\" aria-label=\"Cult Films home\">
      <img src=\"";
        // line 11
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["cult"] ?? null), "logo_black", [], "any", false, false, true, 11), "html", null, true);
        yield "\" alt=\"CULT\">
    </a>
    <nav class=\"cult-nav__links\" aria-label=\"Main\">
      <a href=\"";
        // line 14
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["front_url"] ?? null), "html", null, true);
        yield "#films\">Films</a>
      <a href=\"";
        // line 15
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["front_url"] ?? null), "html", null, true);
        yield "#bw\">Black &amp; White</a>
      <a href=\"";
        // line 16
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["front_url"] ?? null), "html", null, true);
        yield "#about\">About</a>
      <a href=\"#contact\">Contact</a>
      <a href=\"";
        // line 18
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["cult"] ?? null), "s", [], "any", false, false, true, 18), "shop_url", [], "any", false, false, true, 18), "html", null, true);
        yield "\" class=\"btn btn--sm\">Shop film</a>
    </nav>
  </header>
  ";
        // line 21
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<div class=\"wrap\">";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 21), "html", null, true);
            yield "</div>";
        }
        // line 22
        yield "  <main class=\"wrap page-main\">
    ";
        // line 23
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 23), "html", null, true);
        yield "
  </main>
  ";
        // line 25
        yield from $this->load("@cult/includes/footer.html.twig", 25)->unwrap()->yield($context);
        // line 26
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["cult_cache", "front_url", "cult", "page"]);        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/cult/templates/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDefaultEscapeStrategy(): string|false
    {
        return "html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  96 => 26,  94 => 25,  89 => 23,  86 => 22,  80 => 21,  74 => 18,  69 => 16,  65 => 15,  61 => 14,  55 => 11,  51 => 10,  45 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/cult/templates/page.html.twig", "/var/www/html/web/themes/custom/cult/templates/page.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 21, "include" => 25];
        static $filters = ["escape" => 7];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if", 1 => "include"],
                [0 => "escape"],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
