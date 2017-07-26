<?php

/* __string_template__fd84b9c21d0ee3a170fcc9f9c9d5f0a5feac47956a4ba1009024dd527a9e1c75 */
class __TwigTemplate_eb35a88aa88d2de624e4e6a5e819cd9900967e8302ae938b6bdbdd74e54b8b5b extends Twig_Template
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

          
          
          ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 28
            echo "        ";
            if ($this->getAttribute($context["category"], "children", array())) {
                // line 29
                echo "        <li class=\"dropdown\"><a href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a>
          <div class=\"dropdown-menu\">
            <div class=\"dropdown-inner\"> ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                    // line 32
                    echo "              <ul class=\"list-unstyled\">
                ";
                    // line 33
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["children"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 34
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
                    // line 36
                    echo "              </ul>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "</div>
            <a href=\"";
                // line 38
                echo $this->getAttribute($context["category"], "href", array());
                echo "\" class=\"see-all\">";
                echo (isset($context["text_all"]) ? $context["text_all"] : null);
                echo " ";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a> </div>
        </li>
        ";
            } else {
                // line 41
                echo "        <li><a href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a></li>
        ";
            }
            // line 43
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "          
          
          
          
          
          <li class=\"\"><a href=\"/locate-a-clinic\">Locate a Clinic</a></li>
          <li class=\"\"><a href=\"/testimonial\">Testimonial</a></li>
          <li class=\"\"><a href=\"/oc/index.php?route=extension/extension/blog/blog\">Blog</a></li>
          <li class=\"\"><a href=\"";
        // line 52
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">asda</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>
</nav>



<!--
 ";
        // line 63
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 64
            echo "<div class=\"container\">
  <nav id=\"menu\" class=\"navbar\">
    <div class=\"navbar-header\"><span id=\"category\" class=\"visible-xs\">";
            // line 66
            echo (isset($context["text_category"]) ? $context["text_category"] : null);
            echo "</span>
      <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"><i class=\"fa fa-bars\"></i></button>
    </div>
    <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
      <ul class=\"nav navbar-nav\">
        ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 72
                echo "        ";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 73
                    echo "        <li class=\"dropdown\"><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
          <div class=\"dropdown-menu\">
            <div class=\"dropdown-inner\"> ";
                    // line 75
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 76
                        echo "              <ul class=\"list-unstyled\">
                ";
                        // line 77
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 78
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
                        // line 80
                        echo "              </ul>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 81
                    echo "</div>
            <a href=\"";
                    // line 82
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"see-all\">";
                    echo (isset($context["text_all"]) ? $context["text_all"] : null);
                    echo " ";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a> </div>
        </li>
        ";
                } else {
                    // line 85
                    echo "        <li><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
        ";
                }
                // line 87
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "      </ul>
    </div>
  </nav>
</div>
";
        }
        // line 92
        echo "  -->";
    }

    public function getTemplateName()
    {
        return "__string_template__fd84b9c21d0ee3a170fcc9f9c9d5f0a5feac47956a4ba1009024dd527a9e1c75";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 92,  227 => 88,  221 => 87,  213 => 85,  203 => 82,  200 => 81,  193 => 80,  182 => 78,  178 => 77,  175 => 76,  171 => 75,  163 => 73,  160 => 72,  156 => 71,  148 => 66,  144 => 64,  142 => 63,  128 => 52,  118 => 44,  112 => 43,  104 => 41,  94 => 38,  91 => 37,  84 => 36,  73 => 34,  69 => 33,  66 => 32,  62 => 31,  54 => 29,  51 => 28,  47 => 27,  19 => 1,);
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
/* */
/*           */
/*           */
/*           {% for category in categories %}*/
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
/*           */
/*           */
/*           */
/*           */
/*           */
/*           <li class=""><a href="/locate-a-clinic">Locate a Clinic</a></li>*/
/*           <li class=""><a href="/testimonial">Testimonial</a></li>*/
/*           <li class=""><a href="/oc/index.php?route=extension/extension/blog/blog">Blog</a></li>*/
/*           <li class=""><a href="{{ contact }}">asda</a></li>*/
/*         </ul>*/
/*       </li>*/
/*     </ul>*/
/*   </div>*/
/* </div>*/
/* </nav>*/
/* */
/* */
/* */
/* <!--*/
/*  {% if categories %}*/
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
/* {% endif %}  -->*/
