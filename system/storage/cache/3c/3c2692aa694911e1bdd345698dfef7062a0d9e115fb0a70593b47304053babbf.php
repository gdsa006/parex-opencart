<?php

/* __string_template__d6ec65805e00eea1d3068f73effa0d678ed7ad3b1fd078e3d05fb3940b42a941 */
class __TwigTemplate_ebe8c02d3fcf3eff395dfa2a1cf335de3de44fd138771cf7a6b04d1c17d2a82d extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->
<head>
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>";
        // line 12
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
  <base href=\"";
        // line 13
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
  ";
        // line 14
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 15
            echo "  <meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
  ";
        }
        // line 17
        echo "  ";
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 18
            echo "  <meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
  ";
        }
        // line 20
        echo "  <script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
  <link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
  <script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
  <link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">
  ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 27
            echo "  <link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 30
            echo "  <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
  ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 34
            echo "  <link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 37
            echo "  ";
            echo $context["analytic"];
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "</head>
<body>
<!-- parex nav -->
  <header>
    <div class=\"viok-header-logo hidden-xs\">
      <div class=\"container\">
        <a href=\"";
        // line 45
        echo (isset($context["home"]) ? $context["home"] : null);
        echo "\"><img src=\"http://139.59.41.208/images/logo.png\" title=\"";
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" alt=\"";
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" class=\"img-responsive pull-left\" /></a>
          <center class=\"visible-xs\">
            <img src=\"/images/logo.png\" class=\"img-responsive\">
          </center>
          <span class=\"pull-right viok-have-question col-lg-6\">

            <ul class=\"nav nav-pills col-lg-12\">
              <!-- Authentication Links -->
              ";
        // line 53
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 54
            echo "              <li role=\"presentation\"><a href=\"#\"></a></li>
              <li role=\"presentation\"><a href=\"\"
                onclick=\"event.preventDefault();
                document.getElementById('logout-form').submit();\">Logout</a></li>
                ";
        } else {
            // line 58
            echo "     
                <li role=\"presentation\"><a href=\"";
            // line 59
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">Registration</a></li>
                <li role=\"presentation\"><a href=\"";
            // line 60
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">Login</a></li>
                ";
        }
        // line 62
        echo "\t\t\t\t<li><a href=\"";
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" title=\"";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "\">";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</a></li>                
        \t\t<li class=\"dropdown\"><a href=\"";
        // line 63
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" title=\"";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</span> <span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu dropdown-menu-right\">
                    ";
        // line 65
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 66
            echo "                    <li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
                    <li><a href=\"";
            // line 67
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
                    <li><a href=\"";
            // line 68
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\">";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
                    <li><a href=\"";
            // line 69
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
                    <li><a href=\"";
            // line 70
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
                    ";
        } else {
            // line 72
            echo "                    <li><a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
                    <li><a href=\"";
            // line 73
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
                    ";
        }
        // line 75
        echo "                  </ul>
                </li>                
              <li role=\"presentation\">";
        // line 77
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "</li>
              </ul>
              <div class=\"col-lg-12\">
                      ";
        // line 80
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "

              </div><!-- /.col-lg-6 -->

            </span>
          </div>
        </div>
      </header>
     
  ";
        // line 89
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
  
  
  
 
<!-- parex nav end -->
  
<!--  <nav id=\"top\">
  <div class=\"container\">";
        // line 97
        echo (isset($context["currency"]) ? $context["currency"] : null);
        echo "
    ";
        // line 98
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "
    <div id=\"top-links\" class=\"nav pull-right\">
      <ul class=\"list-inline\">
        <li><a href=\"";
        // line 101
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\"><i class=\"fa fa-phone\"></i></a> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "</span></li>
        <li class=\"dropdown\"><a href=\"";
        // line 102
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" title=\"";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</span> <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu dropdown-menu-right\">
            ";
        // line 104
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 105
            echo "            <li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 106
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 107
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\">";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 108
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 109
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
            ";
        } else {
            // line 111
            echo "            <li><a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 112
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
            ";
        }
        // line 114
        echo "          </ul>
        </li>
        <li><a href=\"";
        // line 116
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "\"><i class=\"fa fa-heart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</span></a></li>
        <li><a href=\"";
        // line 117
        echo (isset($context["shopping_cart"]) ? $context["shopping_cart"] : null);
        echo "\" title=\"";
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "</span></a></li>
        <li><a href=\"";
        // line 118
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" title=\"";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "\"><i class=\"fa fa-share\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</span></a></li>
      </ul>
    </div>
  </div>
</nav>
<header>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4\">
        <div id=\"logo\">";
        // line 127
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            echo "<a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\"><img src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"img-responsive\" /></a>";
        } else {
            // line 128
            echo "          <h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>
          ";
        }
        // line 129
        echo "</div>
        </div>
        <div class=\"col-sm-5\">";
        // line 131
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "</div>
        <div class=\"col-sm-3\">";
        // line 132
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "</div>
      </div>
    </div>
  </header> -->
  
";
    }

    public function getTemplateName()
    {
        return "__string_template__d6ec65805e00eea1d3068f73effa0d678ed7ad3b1fd078e3d05fb3940b42a941";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  423 => 132,  419 => 131,  415 => 129,  407 => 128,  395 => 127,  379 => 118,  371 => 117,  363 => 116,  359 => 114,  352 => 112,  345 => 111,  338 => 109,  332 => 108,  326 => 107,  320 => 106,  313 => 105,  311 => 104,  302 => 102,  296 => 101,  290 => 98,  286 => 97,  275 => 89,  263 => 80,  257 => 77,  253 => 75,  246 => 73,  239 => 72,  232 => 70,  226 => 69,  220 => 68,  214 => 67,  207 => 66,  205 => 65,  196 => 63,  187 => 62,  182 => 60,  178 => 59,  175 => 58,  168 => 54,  166 => 53,  151 => 45,  143 => 39,  134 => 37,  129 => 36,  118 => 34,  114 => 33,  111 => 32,  102 => 30,  97 => 29,  84 => 27,  80 => 26,  72 => 20,  66 => 18,  63 => 17,  57 => 15,  55 => 14,  51 => 13,  47 => 12,  36 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* <head>*/
/*   <meta charset="UTF-8" />*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*   <title>{{ title }}</title>*/
/*   <base href="{{ base }}" />*/
/*   {% if description %}*/
/*   <meta name="description" content="{{ description }}" />*/
/*   {% endif %}*/
/*   {% if keywords %}*/
/*   <meta name="keywords" content="{{ keywords }}" />*/
/*   {% endif %}*/
/*   <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>*/
/*   <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />*/
/*   <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>*/
/*   <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />*/
/*   <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />*/
/*   <link href="catalog/view/theme/default/stylesheet/stylesheet.css" rel="stylesheet">*/
/*   {% for style in styles %}*/
/*   <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/*   {% endfor %}*/
/*   {% for script in scripts %}*/
/*   <script src="{{ script }}" type="text/javascript"></script>*/
/*   {% endfor %}*/
/*   <script src="catalog/view/javascript/common.js" type="text/javascript"></script>*/
/*   {% for link in links %}*/
/*   <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/*   {% endfor %}*/
/*   {% for analytic in analytics %}*/
/*   {{ analytic }}*/
/*   {% endfor %}*/
/* </head>*/
/* <body>*/
/* <!-- parex nav -->*/
/*   <header>*/
/*     <div class="viok-header-logo hidden-xs">*/
/*       <div class="container">*/
/*         <a href="{{ home }}"><img src="http://139.59.41.208/images/logo.png" title="{{ name }}" alt="{{ name }}" class="img-responsive pull-left" /></a>*/
/*           <center class="visible-xs">*/
/*             <img src="/images/logo.png" class="img-responsive">*/
/*           </center>*/
/*           <span class="pull-right viok-have-question col-lg-6">*/
/* */
/*             <ul class="nav nav-pills col-lg-12">*/
/*               <!-- Authentication Links -->*/
/*               {% if logged %}*/
/*               <li role="presentation"><a href="#"></a></li>*/
/*               <li role="presentation"><a href=""*/
/*                 onclick="event.preventDefault();*/
/*                 document.getElementById('logout-form').submit();">Logout</a></li>*/
/*                 {% else %}     */
/*                 <li role="presentation"><a href="{{ register }}">Registration</a></li>*/
/*                 <li role="presentation"><a href="{{ login }}">Login</a></li>*/
/*                 {% endif %}*/
/* 				<li><a href="{{ checkout }}" title="{{ text_checkout }}">{{ text_checkout }}</a></li>                */
/*         		<li class="dropdown"><a href="{{ account }}" title="{{ text_account }}" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_account }}</span> <span class="caret"></span></a>*/
/*                   <ul class="dropdown-menu dropdown-menu-right">*/
/*                     {% if logged %}*/
/*                     <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*                     <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*                     <li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/*                     <li><a href="{{ download }}">{{ text_download }}</a></li>*/
/*                     <li><a href="{{ logout }}">{{ text_logout }}</a></li>*/
/*                     {% else %}*/
/*                     <li><a href="{{ register }}">{{ text_register }}</a></li>*/
/*                     <li><a href="{{ login }}">{{ text_login }}</a></li>*/
/*                     {% endif %}*/
/*                   </ul>*/
/*                 </li>                */
/*               <li role="presentation">{{ cart }}</li>*/
/*               </ul>*/
/*               <div class="col-lg-12">*/
/*                       {{ search }}*/
/* */
/*               </div><!-- /.col-lg-6 -->*/
/* */
/*             </span>*/
/*           </div>*/
/*         </div>*/
/*       </header>*/
/*      */
/*   {{ menu }}*/
/*   */
/*   */
/*   */
/*  */
/* <!-- parex nav end -->*/
/*   */
/* <!--  <nav id="top">*/
/*   <div class="container">{{ currency }}*/
/*     {{ language }}*/
/*     <div id="top-links" class="nav pull-right">*/
/*       <ul class="list-inline">*/
/*         <li><a href="{{ contact }}"><i class="fa fa-phone"></i></a> <span class="hidden-xs hidden-sm hidden-md">{{ telephone }}</span></li>*/
/*         <li class="dropdown"><a href="{{ account }}" title="{{ text_account }}" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_account }}</span> <span class="caret"></span></a>*/
/*           <ul class="dropdown-menu dropdown-menu-right">*/
/*             {% if logged %}*/
/*             <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*             <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*             <li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/*             <li><a href="{{ download }}">{{ text_download }}</a></li>*/
/*             <li><a href="{{ logout }}">{{ text_logout }}</a></li>*/
/*             {% else %}*/
/*             <li><a href="{{ register }}">{{ text_register }}</a></li>*/
/*             <li><a href="{{ login }}">{{ text_login }}</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*         </li>*/
/*         <li><a href="{{ wishlist }}" id="wishlist-total" title="{{ text_wishlist }}"><i class="fa fa-heart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_wishlist }}</span></a></li>*/
/*         <li><a href="{{ shopping_cart }}" title="{{ text_shopping_cart }}"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_shopping_cart }}</span></a></li>*/
/*         <li><a href="{{ checkout }}" title="{{ text_checkout }}"><i class="fa fa-share"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_checkout }}</span></a></li>*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* </nav>*/
/* <header>*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-sm-4">*/
/*         <div id="logo">{% if logo %}<a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a>{% else %}*/
/*           <h1><a href="{{ home }}">{{ name }}</a></h1>*/
/*           {% endif %}</div>*/
/*         </div>*/
/*         <div class="col-sm-5">{{ search }}</div>*/
/*         <div class="col-sm-3">{{ cart }}</div>*/
/*       </div>*/
/*     </div>*/
/*   </header> -->*/
/*   */
/* */
