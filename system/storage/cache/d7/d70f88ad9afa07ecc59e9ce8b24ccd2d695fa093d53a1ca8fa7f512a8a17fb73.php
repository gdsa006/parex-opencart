<?php

/* default/template/extension/extension/blog/blog.twig */
class __TwigTemplate_81fa326ddefae7c9fb46235af74b310c3fb1c3b6835834d6f172ccfe310bd460 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div class=\"container\">
    <ul class=\"breadcrumb\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "            <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </ul>
    <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
        ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "            ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "        ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "            ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "        ";
        } else {
            // line 14
            echo "            ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "        ";
        }
        // line 16
        echo "        <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
            <h2>";
        // line 17
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "</h2>
            ";
        // line 18
        if ((isset($context["articles"]) ? $context["articles"] : null)) {
            // line 19
            echo "
                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 21
                echo "                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <div class=\"article-layout article-list col-xs-12\">
                            <div class=\"article-intro\">
                                <div>
                                    <h3><a href=\"";
                // line 26
                echo $this->getAttribute($context["article"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["article"], "name", array());
                echo "</a></h3>
                                    <p>";
                // line 27
                echo $this->getAttribute($context["article"], "date_modified", array());
                echo "</p>
                                    <p>";
                // line 28
                echo $this->getAttribute($context["article"], "intro_text", array());
                echo "
                                </div>
                            </div>
                            <div class=\"buttons\">
                                <div class=\"pull-right\"><a href=\"";
                // line 32
                echo $this->getAttribute($context["article"], "href", array());
                echo "\"
                                                           class=\"btn btn-primary\">";
                // line 33
                echo (isset($context["button_read_more"]) ? $context["button_read_more"] : null);
                echo "</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "
            <div class=\"row\">
                <div class=\"col-sm-6 text-left\">";
            // line 42
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
                <div class=\"col-sm-6 text-right\">";
            // line 43
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
            </div>
            ";
        }
        // line 46
        echo "            ";
        if ( !(isset($context["articles"]) ? $context["articles"] : null)) {
            // line 47
            echo "            <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
            ";
        }
        // line 49
        echo "            ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
        ";
        // line 50
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 52
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/extension/blog/blog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 52,  156 => 50,  151 => 49,  145 => 47,  142 => 46,  136 => 43,  132 => 42,  128 => 40,  115 => 33,  111 => 32,  104 => 28,  100 => 27,  94 => 26,  87 => 21,  83 => 20,  80 => 19,  78 => 18,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container">*/
/*     <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*             <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*     </ul>*/
/*     <div class="row">{{ column_left }}*/
/*         {% if column_left and column_right %}*/
/*             {% set class = 'col-sm-6' %}*/
/*         {% elseif column_left or column_right %}*/
/*             {% set class = 'col-sm-9' %}*/
/*         {% else %}*/
/*             {% set class = 'col-sm-12' %}*/
/*         {% endif %}*/
/*         <div id="content" class="{{ class }}">{{ content_top }}*/
/*             <h2>{{ name }}</h2>*/
/*             {% if articles %}*/
/* */
/*                 {% for article in articles %}*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-body">*/
/*                         <div class="article-layout article-list col-xs-12">*/
/*                             <div class="article-intro">*/
/*                                 <div>*/
/*                                     <h3><a href="{{ article.href }}">{{ article.name }}</a></h3>*/
/*                                     <p>{{ article.date_modified }}</p>*/
/*                                     <p>{{ article.intro_text }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="buttons">*/
/*                                 <div class="pull-right"><a href="{{ article.href }}"*/
/*                                                            class="btn btn-primary">{{ button_read_more }}</a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 {% endfor %}*/
/* */
/*             <div class="row">*/
/*                 <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*                 <div class="col-sm-6 text-right">{{ results }}</div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if not articles %}*/
/*             <p>{{ text_empty }}</p>*/
/*             {% endif %}*/
/*             {{ content_bottom }}</div>*/
/*         {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
/* */
