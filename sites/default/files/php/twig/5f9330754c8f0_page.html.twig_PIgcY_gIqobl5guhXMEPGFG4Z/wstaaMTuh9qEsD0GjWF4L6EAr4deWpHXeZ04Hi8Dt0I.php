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

/* themes/ultra_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_88011e0b20e5cf4f21e245a2ed9a9397dfeadb2a093b1e4d542cfd3cb812e4ef extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("if" => 70, "for" => 95);
        $filters = array("escape" => 71, "raw" => 96, "date" => 493);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "
<div class=\"header\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Header -->
      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 70)) {
            // line 71
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 73
        echo "      </div>
      <!-- End: Header -->

      ";
        // line 76
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 76)) {
            // line 77
            echo "        <div class=\"col-md-9\">
          ";
            // line 78
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 78)) {
                // line 79
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 81
            echo "        </div>
      ";
        }
        // line 83
        echo "
      </div>

    </div>
  </div>
</div>


";
        // line 91
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 92
            echo "  <div class=\"container-\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 96
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 96, $this->source));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "      </ul>
    </div>
  </div>
";
        }
        // line 102
        echo "

<!-- Start: Top widget -->
";
        // line 105
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 105) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 105)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 105))) {
            // line 106
            echo "  <div class=\"topwidget\" id=\"topwidget\">
    <div class=\"container\">

      ";
            // line 109
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 109)) {
                // line 110
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 111
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 114
            echo "
        <div class=\"row topwidget-list clearfix\">

          <!-- Start: Top widget first -->          
          ";
            // line 118
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 118)) {
                // line 119
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 119, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 120
            echo "          
          <!-- End: Top widget first --> 

          <!-- Start: Top widget second -->          
          ";
            // line 124
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 124)) {
                // line 125
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 125, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 126
            echo "          
          <!-- End: Top widget second --> 
          
          <!-- Start: Top widget third -->         
          ";
            // line 130
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 130)) {
                // line 131
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 131, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 132
            echo "          
          <!-- End: Top widget third -->

        </div>
    </div>
  </div>
";
        }
        // line 139
        echo "<!--End: widget -->

    
<!--Start: Highlighted -->
";
        // line 143
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 143)) {
            // line 144
            echo "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 146
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 150
        echo "<!--End: Highlighted -->


<!--Start: Top Message -->
";
        // line 154
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topmessage", [], "any", false, false, true, 154)) {
            // line 155
            echo "  <div class=\"top-message\">
    <div class=\"container\">
      ";
            // line 157
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topmessage", [], "any", false, false, true, 157), 157, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 161
        echo "<!--End: widget -->


<!--Start: Title -->
";
        // line 165
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 165) &&  !($context["is_front"] ?? null))) {
            // line 166
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 169
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 174
        echo "<!--End: Title -->

<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      <!--Start: Breadcrumb -->
      ";
        // line 181
        if ( !($context["is_front"] ?? null)) {
            // line 182
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 183
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 183), 183, $this->source), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 186
        echo "      <!--End: Breadcrumb -->

      <div class=\"row layout\">

        <!--- Start: Left SideBar -->
        ";
        // line 191
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 191)) {
            // line 192
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 192, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 194
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 194), 194, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 198
        echo "        <!-- End Left SideBar -->

        <!--- Start Content -->
        ";
        // line 201
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 201)) {
            // line 202
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 202, $this->source), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 204
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 204), 204, $this->source), "html", null, true);
            echo "
            </div>              
          </div>
        ";
        }
        // line 208
        echo "        <!-- End: Content -->

        <!-- Start: Right SideBar -->
        ";
        // line 211
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 211)) {
            // line 212
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 212, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 214
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 214), 214, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 218
        echo "        <!-- End: Right SideBar -->
        
      </div>
    
    </div>
  </div>
</div>
<!-- End: Main content -->


<!-- Start: Features -->
";
        // line 229
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 229) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 229)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 229))) {
            // line 230
            echo "  <div class=\"features\">
    <div class=\"container\">

      ";
            // line 233
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 233)) {
                // line 234
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 235
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 235), 235, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 238
            echo "
      <div class=\"row\">

        ";
            // line 241
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 241)) {
                // line 242
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null), 242, $this->source), "html", null, true);
                echo ">
            ";
                // line 243
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 243), 243, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 246
            echo "        
        ";
            // line 247
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 247)) {
                // line 248
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 248, $this->source), "html", null, true);
                echo ">
            ";
                // line 249
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 249), 249, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 252
            echo "
        ";
            // line 253
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 253)) {
                // line 254
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 254, $this->source), "html", null, true);
                echo ">
            ";
                // line 255
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 255), 255, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 258
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 263
        echo "<!--End: Features -->


<!-- Start: Clients -->
";
        // line 267
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 267)) {
            echo " 
  <div class=\"clients\" id=\"clients\">

    ";
            // line 270
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients_title", [], "any", false, false, true, 270)) {
                // line 271
                echo "      <div class=\"custom-block-title\" >
        ";
                // line 272
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients_title", [], "any", false, false, true, 272), 272, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 275
            echo "
    <div class=\"container\">
      ";
            // line 277
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 277), 277, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 281
        echo "<!--End: Clients -->


<!-- Start: Updates widgets -->
";
        // line 285
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 285) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 285)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 285))) {
            // line 286
            echo "
  <div class=\"updates\" id=\"updates\">    
    <div class=\"container\">

      ";
            // line 290
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 290)) {
                // line 291
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 292
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 292), 292, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 295
            echo "
      <div class=\"row\">
        
        ";
            // line 298
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 298)) {
                // line 299
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 299, $this->source), "html", null, true);
                echo ">
            ";
                // line 300
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 300), 300, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 303
            echo "        
        ";
            // line 304
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 304)) {
                // line 305
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 305, $this->source), "html", null, true);
                echo ">
            ";
                // line 306
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 306), 306, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 309
            echo "        
        ";
            // line 310
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 310)) {
                // line 311
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 311, $this->source), "html", null, true);
                echo ">
            ";
                // line 312
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 312), 312, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 315
            echo "
        ";
            // line 316
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 316)) {
                // line 317
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 317, $this->source), "html", null, true);
                echo ">
            ";
                // line 318
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 318), 318, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 321
            echo "
      </div>
    </div>
  </div>

";
        }
        // line 327
        echo "<!--End: widgets -->


<!-- Start: Services widgets -->
";
        // line 331
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_first", [], "any", false, false, true, 331) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_second", [], "any", false, false, true, 331)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_third", [], "any", false, false, true, 331)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_forth", [], "any", false, false, true, 331))) {
            // line 332
            echo "
  <div class=\"services\" id=\"services\">    
    <div class=\"container\">

      ";
            // line 336
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_title", [], "any", false, false, true, 336)) {
                // line 337
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 338
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_title", [], "any", false, false, true, 338), 338, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 341
            echo "
      <div class=\"row team-list\">
      
        ";
            // line 344
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_first", [], "any", false, false, true, 344)) {
                // line 345
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null), 345, $this->source), "html", null, true);
                echo ">
            ";
                // line 346
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_first", [], "any", false, false, true, 346), 346, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 349
            echo "        
        ";
            // line 350
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_second", [], "any", false, false, true, 350)) {
                // line 351
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null), 351, $this->source), "html", null, true);
                echo ">
            ";
                // line 352
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_second", [], "any", false, false, true, 352), 352, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 355
            echo "             
        ";
            // line 356
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_third", [], "any", false, false, true, 356)) {
                // line 357
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null), 357, $this->source), "html", null, true);
                echo ">
            ";
                // line 358
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_third", [], "any", false, false, true, 358), 358, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 361
            echo "        
        ";
            // line 362
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_forth", [], "any", false, false, true, 362)) {
                // line 363
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null), 363, $this->source), "html", null, true);
                echo ">
            ";
                // line 364
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_forth", [], "any", false, false, true, 364), 364, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 367
            echo "        
      </div>
    </div>
  </div>

";
        }
        // line 373
        echo "<!--End: widgets -->


<!-- Start: Bottom widgets -->
";
        // line 377
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 377) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 377)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 377)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 377))) {
            // line 378
            echo "
  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">

      ";
            // line 382
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 382)) {
                // line 383
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 384
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 384), 384, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 387
            echo "
      <div class=\"row\">
            
        ";
            // line 390
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 390)) {
                // line 391
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 391, $this->source), "html", null, true);
                echo ">
            ";
                // line 392
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 392), 392, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 395
            echo "        
        ";
            // line 396
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 396)) {
                // line 397
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 397, $this->source), "html", null, true);
                echo ">
            ";
                // line 398
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 398), 398, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 401
            echo "
        ";
            // line 402
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 402)) {
                // line 403
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 403, $this->source), "html", null, true);
                echo ">
            ";
                // line 404
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 404), 404, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 407
            echo "        
        ";
            // line 408
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 408)) {
                // line 409
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 409, $this->source), "html", null, true);
                echo ">
            ";
                // line 410
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 410), 410, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 413
            echo "
      </div>
    </div>
  </div>

";
        }
        // line 419
        echo "<!--End: widgets -->


<!-- Start: Footer widgets -->
";
        // line 423
        if ((((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 423) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 423)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 423)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 423)) || ($context["show_social_icon"] ?? null)) || ($context["show_credit_link"] ?? null))) {
            // line 424
            echo "  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">

      ";
            // line 427
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 427)) {
                // line 428
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 429
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 429), 429, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 432
            echo "
      <div class=\"row\">

        ";
            // line 435
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 435)) {
                // line 436
                echo "          <div class=\"col-sm\">
            ";
                // line 437
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 437), 437, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 440
            echo "
        ";
            // line 441
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 441)) {
                // line 442
                echo "          <div class=\"col-sm\">
            ";
                // line 443
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 443), 443, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 446
            echo "        
        ";
            // line 447
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 447)) {
                // line 448
                echo "          <div class=\"col-sm\">
            ";
                // line 449
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 449), 449, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 452
            echo "
        ";
            // line 453
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 453) || ($context["show_social_icon"] ?? null)) || ($context["show_credit_link"] ?? null))) {
                // line 454
                echo "          <div class=\"col-sm\">

            ";
                // line 456
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 456)) {
                    // line 457
                    echo "              ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 457), 457, $this->source), "html", null, true);
                    echo "
            ";
                }
                // line 459
                echo "            
            ";
                // line 460
                if (($context["show_social_icon"] ?? null)) {
                    // line 461
                    echo "              <h2>Follow us</h2>
              <p class=\"social-media\">
                ";
                    // line 463
                    if (($context["facebook_url"] ?? null)) {
                        // line 464
                        echo "                  <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 464, $this->source), "html", null, true);
                        echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
                ";
                    }
                    // line 466
                    echo "                ";
                    if (($context["twitter_url"] ?? null)) {
                        // line 467
                        echo "                  <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 467, $this->source), "html", null, true);
                        echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
                ";
                    }
                    // line 469
                    echo "                ";
                    if (($context["linkedin_url"] ?? null)) {
                        // line 470
                        echo "                  <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 470, $this->source), "html", null, true);
                        echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
                ";
                    }
                    // line 472
                    echo "                ";
                    if (($context["instagram_url"] ?? null)) {
                        // line 473
                        echo "                  <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 473, $this->source), "html", null, true);
                        echo "\" class=\"instagram\" target=\"_blank\" ><i class=\"fab fa-instagram\"></i></a>
                ";
                    }
                    // line 475
                    echo "                ";
                    if (($context["rss_url"] ?? null)) {
                        // line 476
                        echo "                  <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 476, $this->source), "html", null, true);
                        echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
                ";
                    }
                    // line 478
                    echo "              </p>
            ";
                }
                // line 480
                echo "          </div>
        ";
            }
            // line 482
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 487
        echo "<!--End: widgets -->


<!-- Start: Copyright -->
<div class=\"copyright\">
    <div class=\"container\">
      <span>Copyright © ";
        // line 493
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</span>
      ";
        // line 494
        if (($context["show_credit_link"] ?? null)) {
            // line 495
            echo "        <span class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
      ";
        }
        // line 497
        echo "  </div>
</div>
<!-- End: Copyright -->


";
    }

    public function getTemplateName()
    {
        return "themes/ultra_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  951 => 497,  947 => 495,  945 => 494,  941 => 493,  933 => 487,  926 => 482,  922 => 480,  918 => 478,  912 => 476,  909 => 475,  903 => 473,  900 => 472,  894 => 470,  891 => 469,  885 => 467,  882 => 466,  876 => 464,  874 => 463,  870 => 461,  868 => 460,  865 => 459,  859 => 457,  857 => 456,  853 => 454,  851 => 453,  848 => 452,  842 => 449,  839 => 448,  837 => 447,  834 => 446,  828 => 443,  825 => 442,  823 => 441,  820 => 440,  814 => 437,  811 => 436,  809 => 435,  804 => 432,  798 => 429,  795 => 428,  793 => 427,  788 => 424,  786 => 423,  780 => 419,  772 => 413,  766 => 410,  761 => 409,  759 => 408,  756 => 407,  750 => 404,  745 => 403,  743 => 402,  740 => 401,  734 => 398,  729 => 397,  727 => 396,  724 => 395,  718 => 392,  713 => 391,  711 => 390,  706 => 387,  700 => 384,  697 => 383,  695 => 382,  689 => 378,  687 => 377,  681 => 373,  673 => 367,  667 => 364,  662 => 363,  660 => 362,  657 => 361,  651 => 358,  646 => 357,  644 => 356,  641 => 355,  635 => 352,  630 => 351,  628 => 350,  625 => 349,  619 => 346,  614 => 345,  612 => 344,  607 => 341,  601 => 338,  598 => 337,  596 => 336,  590 => 332,  588 => 331,  582 => 327,  574 => 321,  568 => 318,  563 => 317,  561 => 316,  558 => 315,  552 => 312,  547 => 311,  545 => 310,  542 => 309,  536 => 306,  531 => 305,  529 => 304,  526 => 303,  520 => 300,  515 => 299,  513 => 298,  508 => 295,  502 => 292,  499 => 291,  497 => 290,  491 => 286,  489 => 285,  483 => 281,  476 => 277,  472 => 275,  466 => 272,  463 => 271,  461 => 270,  455 => 267,  449 => 263,  442 => 258,  436 => 255,  431 => 254,  429 => 253,  426 => 252,  420 => 249,  415 => 248,  413 => 247,  410 => 246,  404 => 243,  399 => 242,  397 => 241,  392 => 238,  386 => 235,  383 => 234,  381 => 233,  376 => 230,  374 => 229,  361 => 218,  354 => 214,  348 => 212,  346 => 211,  341 => 208,  334 => 204,  328 => 202,  326 => 201,  321 => 198,  314 => 194,  308 => 192,  306 => 191,  299 => 186,  293 => 183,  290 => 182,  288 => 181,  279 => 174,  271 => 169,  266 => 166,  264 => 165,  258 => 161,  251 => 157,  247 => 155,  245 => 154,  239 => 150,  232 => 146,  228 => 144,  226 => 143,  220 => 139,  211 => 132,  203 => 131,  201 => 130,  195 => 126,  187 => 125,  185 => 124,  179 => 120,  171 => 119,  169 => 118,  163 => 114,  157 => 111,  154 => 110,  152 => 109,  147 => 106,  145 => 105,  140 => 102,  134 => 98,  125 => 96,  121 => 95,  116 => 92,  114 => 91,  104 => 83,  100 => 81,  94 => 79,  92 => 78,  89 => 77,  87 => 76,  82 => 73,  76 => 71,  74 => 70,  62 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ultra_zymphonies_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\kkkkkkkkk\\themes\\ultra_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
}
