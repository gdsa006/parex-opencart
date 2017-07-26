<?php

/* __string_template__035d870ce5367d876fdac0aed72282327efea5f169d6dcdcc51ea169bd4b7c18 */
class __TwigTemplate_59621273221db9e17fa72ef3344811799ce6e3ba31860aede04606aa804f19be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " <nav
      class=\"navbar navbar-static-top navbar-default no-border-radius xs-height100\"
      id=\"main_navbar\" role=\"navigation\">
      <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
          data-target=\"#MegaNavbarID\">
          <span class=\"sr-only\">Toggle navigation</span> <span
          class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span
          class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand visible-xs\" rel=\"home\" href=\"#\"
        title=\"Buy Sell Rent Everyting\"> <img
        src=\"images/favicon.png\" width=\"32\"></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class=\"collapse navbar-collapse\" id=\"MegaNavbarID\">
        <!-- regular link -->
        <ul class=\"nav nav-justified\">
          <li class=\"\"><a href=\"/about\">Our Concept</a></li>
          <li class=\"\"><a href=\"/about\">About</a></li>
          <li class=\"\"><a href=\"/disorder\">Disorder</a></li>
          <li class=\"\"><a href=\"/store\">Store</a></li>
          <li class=\"\"><a href=\"/locate-a-clinic\">Locate a Clinic</a></li>
          <li class=\"\"><a href=\"/testimonial\">Testimonial</a></li>
          <li class=\"\"><a href=\"/\">Blog</a></li>
          <li class=\"\"><a href=\"/contactus\">Contact Us</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>
</nav>




<!-- ";
        // line 39
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 40
            echo "<div class=\"container\">
  <nav id=\"menu\" class=\"navbar\">
    <div class=\"navbar-header\"><span id=\"category\" class=\"visible-xs\">";
            // line 42
            echo (isset($context["text_category"]) ? $context["text_category"] : null);
            echo "</span>
      <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"><i class=\"fa fa-bars\"></i></button>
    </div>
    <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
      <ul class=\"nav navbar-nav\">
        ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 48
                echo "        ";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 49
                    echo "        <li class=\"dropdown\"><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
          <div class=\"dropdown-menu\">
            <div class=\"dropdown-inner\"> ";
                    // line 51
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 52
                        echo "              <ul class=\"list-unstyled\">
                ";
                        // line 53
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 54
                            echo "                <li><a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a></li>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 56
                        echo "              </ul>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 57
                    echo "</div>
            <a href=\"";
                    // line 58
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"see-all\">";
                    echo (isset($context["text_all"]) ? $context["text_all"] : null);
                    echo " ";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a> </div>
        </li>
        ";
                } else {
                    // line 61
                    echo "        <li><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
        ";
                }
                // line 63
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "      </ul>
    </div>
  </nav>
</div>
";
        }
        // line 68
        echo " -->";
    }

    public function getTemplateName()
    {
        return "__string_template__035d870ce5367d876fdac0aed72282327efea5f169d6dcdcc51ea169bd4b7c18";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 68,  144 => 64,  138 => 63,  130 => 61,  120 => 58,  117 => 57,  110 => 56,  99 => 54,  95 => 53,  92 => 52,  88 => 51,  80 => 49,  77 => 48,  73 => 47,  65 => 42,  61 => 40,  59 => 39,  19 => 1,);
    }
}
/*  <nav*/
/*       class="navbar navbar-static-top navbar-default no-border-radius xs-height100"*/
/*       id="main_navbar" role="navigation">*/
/*       <div class="container">*/
/*         <!-- Brand and toggle get grouped for better mobile display -->*/
/*         <div class="navbar-header">*/
/*           <button type="button" class="navbar-toggle" data-toggle="collapse"*/
/*           data-target="#MegaNavbarID">*/
/*           <span class="sr-only">Toggle navigation</span> <span*/
/*           class="icon-bar"></span><span class="icon-bar"></span><span*/
/*           class="icon-bar"></span>*/
/*         </button>*/
/*         <a class="navbar-brand visible-xs" rel="home" href="#"*/
/*         title="Buy Sell Rent Everyting"> <img*/
/*         src="images/favicon.png" width="32"></a>*/
/*       </div>*/
/*       <!-- Collect the nav links, forms, and other content for toggling -->*/
/*       <div class="collapse navbar-collapse" id="MegaNavbarID">*/
/*         <!-- regular link -->*/
/*         <ul class="nav nav-justified">*/
/*           <li class=""><a href="/about">Our Concept</a></li>*/
/*           <li class=""><a href="/about">About</a></li>*/
/*           <li class=""><a href="/disorder">Disorder</a></li>*/
/*           <li class=""><a href="/store">Store</a></li>*/
/*           <li class=""><a href="/locate-a-clinic">Locate a Clinic</a></li>*/
/*           <li class=""><a href="/testimonial">Testimonial</a></li>*/
/*           <li class=""><a href="/">Blog</a></li>*/
/*           <li class=""><a href="/contactus">Contact Us</a></li>*/
/*         </ul>*/
/*       </li>*/
/*     </ul>*/
/*   </div>*/
/* </div>*/
/* </nav>*/
/* */
/* */
/* */
/* */
/* <!-- {% if categories %}*/
/* <div class="container">*/
/*   <nav id="menu" class="navbar">*/
/*     <div class="navbar-header"><span id="category" class="visible-xs">{{ text_category }}</span>*/
/*       <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>*/
/*     </div>*/
/*     <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*       <ul class="nav navbar-nav">*/
/*         {% for category in categories %}*/
/*         {% if category.children %}*/
/*         <li class="dropdown"><a href="{{ category.href }}" class="dropdown-toggle" data-toggle="dropdown">{{ category.name }}</a>*/
/*           <div class="dropdown-menu">*/
/*             <div class="dropdown-inner"> {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/*               <ul class="list-unstyled">*/
/*                 {% for child in children %}*/
/*                 <li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*               {% endfor %}</div>*/
/*             <a href="{{ category.href }}" class="see-all">{{ text_all }} {{ category.name }}</a> </div>*/
/*         </li>*/
/*         {% else %}*/
/*         <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*         {% endif %}*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </nav>*/
/* </div>*/
/* {% endif %} -->*/
