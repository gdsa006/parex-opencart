<?php

/* __string_template__0f149615feb6e7f871ac9e5316cdaa021d5e05c12c6db962bfb56d39e3b349a9 */
class __TwigTemplate_b9982560421c361b62d6ec2594dd59bab0a94393ff4fe0c0d8f4599bbdbd4e47 extends Twig_Template
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
<br>
<div class=\"container\">
    <ul class=\"breadcrumb\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
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
        // line 8
        echo "    </ul>
    <div class=\"row\">";
        // line 9
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
        ";
        // line 10
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 11
            echo "            ";
            $context["class"] = "col-sm-6";
            // line 12
            echo "        ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 13
            echo "            ";
            $context["class"] = "col-sm-9";
            // line 14
            echo "        ";
        } else {
            // line 15
            echo "            ";
            $context["class"] = "col-sm-12";
            // line 16
            echo "        ";
        }
        // line 17
        echo "        <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
            <h2>";
        // line 18
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "</h2>
            ";
        // line 19
        if ((isset($context["articles"]) ? $context["articles"] : null)) {
            // line 20
            echo "
                ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 22
                echo "                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <div class=\"article-layout article-list col-xs-12\">
                            <div class=\"article-intro\">
                                <div>
                                    <h3><a href=\"";
                // line 27
                echo $this->getAttribute($context["article"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["article"], "name", array());
                echo "</a></h3>
                                    <p>";
                // line 28
                echo $this->getAttribute($context["article"], "date_modified", array());
                echo "</p>
                                    <p>";
                // line 29
                echo $this->getAttribute($context["article"], "intro_text", array());
                echo "
                                </div>
                            </div>
                            <div class=\"buttons\">
                                <div class=\"pull-right\"><a href=\"";
                // line 33
                echo $this->getAttribute($context["article"], "href", array());
                echo "\"
                                                           class=\"btn btn-primary\">";
                // line 34
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
            // line 41
            echo "
            <div class=\"row\">
                <div class=\"col-sm-6 text-left\">";
            // line 43
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
                <div class=\"col-sm-6 text-right\">";
            // line 44
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
            </div>
            ";
        }
        // line 47
        echo "            ";
        if ( !(isset($context["articles"]) ? $context["articles"] : null)) {
            // line 48
            echo "            <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
            ";
        }
        // line 50
        echo "            ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
        ";
        // line 51
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 53
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__0f149615feb6e7f871ac9e5316cdaa021d5e05c12c6db962bfb56d39e3b349a9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 53,  157 => 51,  152 => 50,  146 => 48,  143 => 47,  137 => 44,  133 => 43,  129 => 41,  116 => 34,  112 => 33,  105 => 29,  101 => 28,  95 => 27,  88 => 22,  84 => 21,  81 => 20,  79 => 19,  75 => 18,  68 => 17,  65 => 16,  62 => 15,  59 => 14,  56 => 13,  53 => 12,  50 => 11,  48 => 10,  44 => 9,  41 => 8,  30 => 6,  26 => 5,  19 => 1,);
    }
}
/* {{ header }}*/
/* <br>*/
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
