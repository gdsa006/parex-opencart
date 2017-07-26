<?php

/* __string_template__2df6eef1d9a645de2160bf46a6042b9b748775488c5cbb8d8bd2ad47a3a63dfe */
class __TwigTemplate_3d76d7d34c5bf9214469756e39decef74d4416fd400c81bec451a10e46180893 extends Twig_Template
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
        if ((isset($context["informations"]) ? $context["informations"] : null)) {
            // line 28
            echo "         ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 29
                echo "          <li><a href=\"";
                echo $this->getAttribute($context["information"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "      ";
        }
        // line 32
        echo "          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
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
        echo "          
          
          
          
          
          <li class=\"\"><a href=\"/locate-a-clinic\">Locate a Clinic</a></li>
          <li class=\"\"><a href=\"/testimonial\">Testimonial</a></li>
          <li class=\"\"><a href=\"/oc/index.php?route=extension/extension/blog/blog\">Blog</a></li>
          <li class=\"\"><a href=\"";
        // line 72
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>
</nav>



<!--
 ";
        // line 83
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 84
            echo "<div class=\"container\">
  <nav id=\"menu\" class=\"navbar\">
    <div class=\"navbar-header\"><span id=\"category\" class=\"visible-xs\">";
            // line 86
            echo (isset($context["text_category"]) ? $context["text_category"] : null);
            echo "</span>
      <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"><i class=\"fa fa-bars\"></i></button>
    </div>
    <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
      <ul class=\"nav navbar-nav\">
        ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 92
                echo "        ";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 93
                    echo "        <li class=\"dropdown\"><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
          <div class=\"dropdown-menu\">
            <div class=\"dropdown-inner\"> ";
                    // line 95
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 96
                        echo "              <ul class=\"list-unstyled\">
                ";
                        // line 97
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 98
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
                        // line 100
                        echo "              </ul>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 101
                    echo "</div>
            <a href=\"";
                    // line 102
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"see-all\">";
                    echo (isset($context["text_all"]) ? $context["text_all"] : null);
                    echo " ";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a> </div>
        </li>
        ";
                } else {
                    // line 105
                    echo "        <li><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
        ";
                }
                // line 107
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "      </ul>
    </div>
  </nav>
</div>
";
        }
        // line 112
        echo "  -->";
    }

    public function getTemplateName()
    {
        return "__string_template__2df6eef1d9a645de2160bf46a6042b9b748775488c5cbb8d8bd2ad47a3a63dfe";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 112,  267 => 108,  261 => 107,  253 => 105,  243 => 102,  240 => 101,  233 => 100,  222 => 98,  218 => 97,  215 => 96,  211 => 95,  203 => 93,  200 => 92,  196 => 91,  188 => 86,  184 => 84,  182 => 83,  166 => 72,  156 => 64,  150 => 63,  142 => 61,  132 => 58,  129 => 57,  122 => 56,  111 => 54,  107 => 53,  104 => 52,  100 => 51,  92 => 49,  89 => 48,  85 => 47,  68 => 32,  65 => 31,  54 => 29,  49 => 28,  47 => 27,  19 => 1,);
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
/*            {% if informations %}*/
/*          {% for information in informations %}*/
/*           <li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/*           {% endfor %}*/
/*       {% endif %}*/
/*           */
/*           */
/*           */
/*           */
/*           */
/*           */
/*           */
/*           */
/*           */
/*           */
/*           */
/*           */
/*           */
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
/*           <li class=""><a href="{{ contact }}">{{ text_contact }}</a></li>*/
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
