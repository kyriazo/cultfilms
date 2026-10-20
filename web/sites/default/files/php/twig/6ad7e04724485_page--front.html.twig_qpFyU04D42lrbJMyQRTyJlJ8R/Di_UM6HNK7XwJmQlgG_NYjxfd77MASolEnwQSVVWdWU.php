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

/* themes/custom/cult/templates/page--front.html.twig */
class __TwigTemplate_3367dd54558566882173a7e3899787d5 extends Template
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
        // line 9
        $context["s"] = CoreExtension::getAttribute($this->env, $this->source, ($context["cult"] ?? null), "s", [], "any", false, false, true, 9);
        // line 10
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["cult_cache"] ?? null), "html", null, true);
        yield "
<div class=\"cult\">

  <header class=\"cult-nav wrap\">
    <a href=\"#top\" class=\"cult-nav__logo\" aria-label=\"Cult Films home\">
      <img src=\"";
        // line 15
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["cult"] ?? null), "logo_black", [], "any", false, false, true, 15), "html", null, true);
        yield "\" alt=\"CULT\">
    </a>
    <nav class=\"cult-nav__links\" aria-label=\"Main\">
      <a href=\"#films\">Films</a>
      <a href=\"#bw\">Black &amp; White</a>
      <a href=\"#about\">About</a>
      <a href=\"#contact\">Contact</a>
      <a href=\"";
        // line 22
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["s"] ?? null), "shop_url", [], "any", false, false, true, 22), "html", null, true);
        yield "\" class=\"btn btn--sm\">Shop film</a>
    </nav>
  </header>

  ";
        // line 26
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cult"] ?? null), "messages", [], "any", false, false, true, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<div class=\"wrap cult-messages\">";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["cult"] ?? null), "messages", [], "any", false, false, true, 26), "html", null, true);
            yield "</div>";
        }
        // line 27
        yield "
  <section id=\"top\" class=\"hero wrap\">
    <div class=\"hero__text\">
      <div class=\"mono\">";
        // line 30
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["s"] ?? null), "hero_kicker", [], "any", false, false, true, 30), "html", null, true);
        yield "</div>
      <h1 class=\"hero__title\">Cinema stock,<br><strong>in your camera.</strong></h1>
      <p class=\"lead\">";
        // line 32
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["s"] ?? null), "hero_intro", [], "any", false, false, true, 32), "html", null, true);
        yield "</p>
      <div class=\"btn-row\">
        <a href=\"#films\" class=\"btn\">See the films</a>
        <a href=\"#bw\" class=\"btn btn--ghost\">B&amp;W coming soon</a>
      </div>
    </div>
    <div class=\"hero__art\">
      ";
        // line 39
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["cult"] ?? null), "films", [], "any", false, true, true, 39), 1, [], "array", true, true, true, 39) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["cult"] ?? null), "films", [], "any", false, false, true, 39)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[1] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["cult"] ?? null), "films", [], "any", false, false, true, 39), 1, [], "array", false, false, true, 39)), "image_url", [], "any", false, false, true, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 40
            yield "        <img class=\"hero__card hero__card--back\" src=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["cult"] ?? null), "films", [], "any", false, false, true, 40)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[1] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["cult"] ?? null), "films", [], "any", false, false, true, 40), 1, [], "array", false, false, true, 40)), "image_url", [], "any", false, false, true, 40), "html", null, true);
            yield "\" alt=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["cult"] ?? null), "films", [], "any", false, false, true, 40)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2[1] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["cult"] ?? null), "films", [], "any", false, false, true, 40), 1, [], "array", false, false, true, 40)), "image_alt", [], "any", false, false, true, 40), "html", null, true);
            yield "\">
      ";
        }
        // line 42
        yield "      ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["cult"] ?? null), "films", [], "any", false, true, true, 42), 0, [], "array", true, true, true, 42) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, (($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["cult"] ?? null), "films", [], "any", false, false, true, 42)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["cult"] ?? null), "films", [], "any", false, false, true, 42), 0, [], "array", false, false, true, 42)), "image_url", [], "any", false, false, true, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 43
            yield "        <img class=\"hero__card hero__card--front\" src=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["cult"] ?? null), "films", [], "any", false, false, true, 43)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["cult"] ?? null), "films", [], "any", false, false, true, 43), 0, [], "array", false, false, true, 43)), "image_url", [], "any", false, false, true, 43), "html", null, true);
            yield "\" alt=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["cult"] ?? null), "films", [], "any", false, false, true, 43)) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["cult"] ?? null), "films", [], "any", false, false, true, 43), 0, [], "array", false, false, true, 43)), "image_alt", [], "any", false, false, true, 43), "html", null, true);
            yield "\">
      ";
        }
        // line 45
        yield "    </div>
  </section>

  ";
        // line 48
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["s"] ?? null), "show_strips", [], "any", false, false, true, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "    <div class=\"strip\" aria-hidden=\"true\">
      <div class=\"strip__holes\">";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["cult"] ?? null), "holes", [], "any", false, false, true, 50));
            foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
                yield "<span></span>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['h'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            yield "</div>
      <div class=\"strip__code\">CULT FILMS ▸ 1 ▸ 1A ▸ 2 ▸ 2A";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["cult"] ?? null), "films", [], "any", false, false, true, 51));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                yield " ▸ ";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["f"], "name", [], "any", false, false, true, 51)), "html", null, true);
                yield " ";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["f"], "code", [], "any", false, false, true, 51), "html", null, true);
                yield " ▸ ";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 51) + 2), "html", null, true);
                yield " ▸ ";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 51) + 2), "html", null, true);
                yield "A";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            yield " ▸ PROCESS C-41 ▸ 7 ▸ 7A ▸ 8 ▸ 8A ▸ CULT FILMS ▸ 9 ▸ 9A ▸ 10 ▸ 10A ▸ 11 ▸ 11A</div>
      <div class=\"strip__holes\">";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["cult"] ?? null), "holes", [], "any", false, false, true, 52));
            foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
                yield "<span></span>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['h'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            yield "</div>
    </div>
  ";
        }
        // line 55
        yield "
  <section id=\"films\" class=\"films wrap\">
    <div class=\"section-head\">
      <h2 class=\"h2\">The <strong>films</strong></h2>
      <div class=\"mono mono--muted\">";
        // line 59
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["cult"] ?? null), "film_count", [], "any", false, false, true, 59), "html", null, true);
        yield " STOCKS ▸ COLOR NEGATIVE ▸ 35MM</div>
    </div>

    ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["cult"] ?? null), "films", [], "any", false, false, true, 62));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 63
            yield "      <article class=\"film";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["f"], "reverse", [], "any", false, false, true, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" film--reverse") : ("")));
            yield "\">
        <div class=\"film__art\">
          ";
            // line 65
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["f"], "image_url", [], "any", false, false, true, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<img src=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["f"], "image_url", [], "any", false, false, true, 65), "html", null, true);
                yield "\" alt=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["f"], "image_alt", [], "any", false, false, true, 65), "html", null, true);
                yield "\">";
            }
            // line 66
            yield "        </div>
        <div class=\"film__body\">
          <div class=\"mono mono--muted\">NO. ";
            // line 68
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["f"], "number", [], "any", false, false, true, 68), "html", null, true);
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["f"], "edit_url", [], "any", false, false, true, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " · <a class=\"film__edit\" href=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["f"], "edit_url", [], "any", false, false, true, 68), "html", null, true);
                yield "\">Edit</a>";
            }
            yield "</div>
          <h3 class=\"film__title\">";
            // line 69
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["f"], "name", [], "any", false, false, true, 69), "html", null, true);
            yield " <strong>";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["f"], "code", [], "any", false, false, true, 69), "html", null, true);
            yield "</strong></h3>
          ";
            // line 70
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["f"], "description", [], "any", false, false, true, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<div class=\"film__desc\">";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["f"], "description", [], "any", false, false, true, 70), "html", null, true);
                yield "</div>";
            }
            // line 71
            yield "          <dl class=\"specs\">
            <div><dt>ISO</dt><dd>";
            // line 72
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["f"], "iso", [], "any", false, false, true, 72), "html", null, true);
            yield "</dd></div>
            <div><dt>BALANCE</dt><dd>";
            // line 73
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["f"], "balance", [], "any", false, false, true, 73), "html", null, true);
            yield "</dd></div>
            <div><dt>EXPOSURES</dt><dd>";
            // line 74
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["f"], "exposures", [], "any", false, false, true, 74), "html", null, true);
            yield "</dd></div>
            <div><dt>PROCESS</dt><dd>";
            // line 75
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["f"], "process", [], "any", false, false, true, 75), "html", null, true);
            yield "</dd></div>
          </dl>
          <div class=\"film__buy\">
            ";
            // line 78
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["f"], "price", [], "any", false, false, true, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<div class=\"film__price\">";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["f"], "price", [], "any", false, false, true, 78), "html", null, true);
                yield "</div>";
            }
            // line 79
            yield "            <a href=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["f"], "shop_url", [], "any", false, false, true, 79), "html", null, true);
            yield "\" class=\"btn\">Buy ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["f"], "name", [], "any", false, false, true, 79), "html", null, true);
            yield "</a>
          </div>
        </div>
      </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['f'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 84
        yield "  </section>

  <section id=\"bw\" class=\"wrap bw-wrap\">
    <div class=\"bw\">
      <div class=\"bw__dark\">
        <div class=\"mono mono--light\">NO. ";
        // line 89
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::sprintf("%02d", (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["cult"] ?? null), "films", [], "any", false, false, true, 89)) + 1)), "html", null, true);
        yield " ▸ IN THE DARKROOM</div>
        <div>
          <div class=\"bw__big\">B&amp;W</div>
          <div class=\"bw__sub\">Black &amp; White Motion Picture Film</div>
        </div>
        <div class=\"mono mono--light2\">";
        // line 94
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["s"] ?? null), "bw_edge", [], "any", false, false, true, 94), "html", null, true);
        yield "</div>
      </div>
      <div class=\"bw__light\">
        <h2 class=\"h2 h2--sm\">Monochrome is <strong>coming.</strong></h2>
        <p class=\"lead\">";
        // line 98
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["s"] ?? null), "bw_text", [], "any", false, false, true, 98), "html", null, true);
        yield "</p>
        ";
        // line 99
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["cult"] ?? null), "signup_form", [], "any", false, false, true, 99), "html", null, true);
        yield "
      </div>
    </div>
  </section>

  <section id=\"about\" class=\"about\">
    <div class=\"wrap about__inner\">
      <div class=\"about__top\">
        <h2 class=\"h2\">We are <strong>cult films.</strong></h2>
        <p class=\"lead lead--lg\">";
        // line 108
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["s"] ?? null), "about_text", [], "any", false, false, true, 108), "html", null, true);
        yield "</p>
      </div>
      <ol class=\"steps\">
        <li><div class=\"mono mono--muted\">01</div><div class=\"steps__t\">Cinema stock</div><div class=\"steps__d\">We start from film made for motion picture cameras.</div></li>
        <li><div class=\"mono mono--muted\">02</div><div class=\"steps__t\">Respooled</div><div class=\"steps__d\">Cut and loaded into 35mm cassettes, 24 or 36 exposures.</div></li>
        <li><div class=\"mono mono--muted\">03</div><div class=\"steps__t\">Shoot &amp; develop</div><div class=\"steps__d\">Use any 35mm camera and develop at your lab, process C-41.</div></li>
      </ol>
    </div>
  </section>

  ";
        // line 118
        yield from $this->load("@cult/includes/footer.html.twig", 118)->unwrap()->yield($context);
        // line 119
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["cult", "cult_cache", "loop"]);        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/cult/templates/page--front.html.twig";
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
        return array (  346 => 119,  344 => 118,  331 => 108,  319 => 99,  315 => 98,  308 => 94,  300 => 89,  293 => 84,  278 => 79,  272 => 78,  266 => 75,  262 => 74,  258 => 73,  254 => 72,  251 => 71,  245 => 70,  239 => 69,  230 => 68,  226 => 66,  218 => 65,  212 => 63,  208 => 62,  202 => 59,  196 => 55,  182 => 52,  141 => 51,  129 => 50,  126 => 49,  124 => 48,  119 => 45,  111 => 43,  108 => 42,  100 => 40,  98 => 39,  88 => 32,  83 => 30,  78 => 27,  72 => 26,  65 => 22,  55 => 15,  47 => 10,  45 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/cult/templates/page--front.html.twig", "/var/www/html/web/themes/custom/cult/templates/page--front.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 9, "if" => 26, "for" => 50, "include" => 118];
        static $filters = ["escape" => 10, "upper" => 51, "format" => 89, "length" => 89];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "if", 2 => "for", 3 => "include"],
                [0 => "escape", 1 => "upper", 2 => "format", 3 => "length"],
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
