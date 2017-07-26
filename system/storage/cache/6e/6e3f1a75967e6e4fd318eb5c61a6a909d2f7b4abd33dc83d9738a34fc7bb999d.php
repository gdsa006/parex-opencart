<?php

/* __string_template__b41a918dd7c230174fbfd5ec4a2791fa36252bd76be8dd2e9f61ed0ba26db4ff */
class __TwigTemplate_8430c8ed636fa0f7da564305c475276d47ed9e4e8468328708585a257e16f13f extends Twig_Template
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
  
";
    }

    public function getTemplateName()
    {
        return "__string_template__b41a918dd7c230174fbfd5ec4a2791fa36252bd76be8dd2e9f61ed0ba26db4ff";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 89,  263 => 80,  257 => 77,  253 => 75,  246 => 73,  239 => 72,  232 => 70,  226 => 69,  220 => 68,  214 => 67,  207 => 66,  205 => 65,  196 => 63,  187 => 62,  182 => 60,  178 => 59,  175 => 58,  168 => 54,  166 => 53,  151 => 45,  143 => 39,  134 => 37,  129 => 36,  118 => 34,  114 => 33,  111 => 32,  102 => 30,  97 => 29,  84 => 27,  80 => 26,  72 => 20,  66 => 18,  63 => 17,  57 => 15,  55 => 14,  51 => 13,  47 => 12,  36 => 6,  29 => 4,  23 => 3,  19 => 1,);
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
/* */
