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

/* @cult/includes/footer.html.twig */
class __TwigTemplate_03bf5b4516a1ba2501ce27819090801f extends Template
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
        // line 1
        $context["s"] = CoreExtension::getAttribute($this->env, $this->source, ($context["cult"] ?? null), "s", [], "any", false, false, true, 1);
        // line 2
        yield "<footer id=\"contact\" class=\"footer\">
  ";
        // line 3
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["s"] ?? null), "show_strips", [], "any", false, false, true, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "    <div class=\"strip__holes strip__holes--footer\" aria-hidden=\"true\">";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["cult"] ?? null), "holes", [], "any", false, false, true, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
                yield "<span></span>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['h'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            yield "</div>
  ";
        }
        // line 6
        yield "  <div class=\"wrap footer__inner\">
    <div class=\"footer__top\">
      <img class=\"footer__logo\" src=\"";
        // line 8
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["cult"] ?? null), "logo_white", [], "any", false, false, true, 8), "html", null, true);
        yield "\" alt=\"CULT\">
      <div class=\"footer__cols\">
        <div><div class=\"mono mono--light2\">WRITE TO US</div><a href=\"mailto:";
        // line 10
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["s"] ?? null), "contact_email", [], "any", false, false, true, 10), "html", null, true);
        yield "\">";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["s"] ?? null), "contact_email", [], "any", false, false, true, 10), "html", null, true);
        yield "</a></div>
        <div><div class=\"mono mono--light2\">FOLLOW</div><a href=\"";
        // line 11
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["s"] ?? null), "instagram_url", [], "any", false, false, true, 11), "html", null, true);
        yield "\">";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["s"] ?? null), "instagram_handle", [], "any", false, false, true, 11), "html", null, true);
        yield "</a></div>
        <div><div class=\"mono mono--light2\">BASED IN</div><div class=\"footer__v\">";
        // line 12
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["s"] ?? null), "location", [], "any", false, false, true, 12), "html", null, true);
        yield "</div></div>
      </div>
    </div>
    <div class=\"footer__bottom mono mono--light2\">
      <div>© ";
        // line 16
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["cult"] ?? null), "year", [], "any", false, false, true, 16), "html", null, true);
        yield " CULT FILMS</div>
      <div>COLOR NEGATIVE ▸ B&amp;W SOON ▸ 35MM</div>
    </div>
  </div>
</footer>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["cult"]);        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@cult/includes/footer.html.twig";
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
        return array (  94 => 16,  87 => 12,  81 => 11,  75 => 10,  70 => 8,  66 => 6,  52 => 4,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@cult/includes/footer.html.twig", "/var/www/html/web/themes/custom/cult/templates/includes/footer.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 3, "for" => 4];
        static $filters = ["escape" => 8];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "if", 2 => "for"],
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
