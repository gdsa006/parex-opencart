<?php

/* extension/extension/blog/setting.twig */
class __TwigTemplate_604e71f19127985d2a77096c1b3cda061b14ce9aaf377f9c234b3c6871c4ecfc extends Twig_Template
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
        echo " ";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-account\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo " \"
                        class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 8
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo " \" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo " \" class=\"btn btn-default\"><i
                            class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 10
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo " </h1>
            <ul class=\"breadcrumb\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "                    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo " \">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo " </a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 19
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 20
            echo "            <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 24
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 26
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo " </h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 29
        echo (isset($context["action"]) ? $context["action"] : null);
        echo " \" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\"
                      class=\"form-horizontal\">
                    <fieldset>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 33
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo " </label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"easy_blog_home_page_name\"
                                       value=\"";
        // line 36
        echo (isset($context["easy_blog_home_page_name"]) ? $context["easy_blog_home_page_name"] : null);
        echo " \" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo " \"
                                       id=\"input-name\" class=\"form-control\"/>
                                ";
        // line 38
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 39
            echo "                                    <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo " </div>
                                ";
        }
        // line 41
        echo "                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-blog-limit\"><span data-toggle=\"tooltip\"
                                                                                               title=\"";
        // line 46
        echo (isset($context["help_article_limit"]) ? $context["help_article_limit"] : null);
        echo " \">";
        echo (isset($context["entry_article_limit"]) ? $context["entry_article_limit"] : null);
        echo " </span></label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"easy_blog_global_article_limit\"
                                       value=\"";
        // line 49
        echo (isset($context["easy_blog_global_article_limit"]) ? $context["easy_blog_global_article_limit"] : null);
        echo " \"
                                       placeholder=\"";
        // line 50
        echo (isset($context["entry_article_limit"]) ? $context["entry_article_limit"] : null);
        echo " \" id=\"input-blog-limit\"
                                       class=\"form-control\"/>
                                ";
        // line 52
        if ((isset($context["error_article_limit"]) ? $context["error_article_limit"] : null)) {
            // line 53
            echo "                                    <div class=\"text-danger\">";
            echo (isset($context["error_article_limit"]) ? $context["error_article_limit"] : null);
            echo " </div>
                                ";
        }
        // line 55
        echo "                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\"
                                   for=\"input-blog-meta-title\"><span>";
        // line 60
        echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
        echo " </span></label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"easy_blog_home_page_meta_title\"
                                       value=\"";
        // line 63
        echo (isset($context["easy_blog_home_page_meta_title"]) ? $context["easy_blog_home_page_meta_title"] : null);
        echo " \"
                                       placeholder=\"";
        // line 64
        echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
        echo " \" id=\"input-blog-meta-title\"
                                       class=\"form-control\"/>
                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\"
                                   for=\"input-blog-meta-description\"><span>";
        // line 71
        echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
        echo " </span></label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"easy_blog_home_page_meta_description\"
                                       value=\"";
        // line 74
        echo (isset($context["easy_blog_home_page_meta_description"]) ? $context["easy_blog_home_page_meta_description"] : null);
        echo " \"
                                       placeholder=\"";
        // line 75
        echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
        echo " \" id=\"input-blog-meta-description\"
                                       class=\"form-control\"/>
                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\"
                                   for=\"input-blog-meta-keyword\"><span>";
        // line 82
        echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
        echo " </span></label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"easy_blog_home_page_meta_keyword\"
                                       value=\"";
        // line 85
        echo (isset($context["easy_blog_home_page_meta_keyword"]) ? $context["easy_blog_home_page_meta_keyword"] : null);
        echo " \"
                                       placeholder=\"";
        // line 86
        echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
        echo " \" id=\"input-blog-meta-keyword\"
                                       class=\"form-control\"/>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 92
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo " </label>
                            <div class=\"col-sm-10\">
                                <select name=\"easy_blog_global_status\" id=\"input-status\" class=\"form-control\">
                                    ";
        // line 95
        if ((isset($context["easy_blog_global_status"]) ? $context["easy_blog_global_status"] : null)) {
            // line 96
            echo "                                        <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo " </option>
                                        <option value=\"0\">";
            // line 97
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo " </option>
                                   ";
        } else {
            // line 99
            echo "                                    <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo " </option>
                                    <option value=\"0\" selected=\"selected\">";
            // line 100
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo " </option>
                                    ";
        }
        // line 102
        echo "                                </select>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
";
        // line 112
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/extension/blog/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 112,  241 => 102,  236 => 100,  231 => 99,  226 => 97,  221 => 96,  219 => 95,  213 => 92,  204 => 86,  200 => 85,  194 => 82,  184 => 75,  180 => 74,  174 => 71,  164 => 64,  160 => 63,  154 => 60,  147 => 55,  141 => 53,  139 => 52,  134 => 50,  130 => 49,  122 => 46,  115 => 41,  109 => 39,  107 => 38,  100 => 36,  94 => 33,  87 => 29,  81 => 26,  77 => 24,  69 => 20,  67 => 19,  61 => 15,  50 => 13,  46 => 12,  41 => 10,  34 => 8,  29 => 6,  19 => 1,);
    }
}
/* {{ header }} {{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right">*/
/*                 <button type="submit" form="form-account" data-toggle="tooltip" title="{{ button_save }} "*/
/*                         class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*                 <a href="{{ cancel }} " data-toggle="tooltip" title="{{ button_cancel }} " class="btn btn-default"><i*/
/*                             class="fa fa-reply"></i></a></div>*/
/*             <h1>{{ heading_title }} </h1>*/
/*             <ul class="breadcrumb">*/
/*                 {% for breadcrumb in breadcrumbs %}*/
/*                     <li><a href="{{ breadcrumb.href }} ">{{ breadcrumb.text }} </a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container-fluid">*/
/*         {% if error_warning %}*/
/*             <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             </div>*/
/*         {% endif %}*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }} </h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <form action="{{ action }} " method="post" enctype="multipart/form-data" id="form-setting"*/
/*                       class="form-horizontal">*/
/*                     <fieldset>*/
/*                         <div class="form-group required">*/
/*                             <label class="col-sm-2 control-label" for="input-name">{{ entry_name }} </label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="text" name="easy_blog_home_page_name"*/
/*                                        value="{{ easy_blog_home_page_name }} " placeholder="{{ entry_name }} "*/
/*                                        id="input-name" class="form-control"/>*/
/*                                 {% if error_name %}*/
/*                                     <div class="text-danger">{{ error_name }} </div>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group required">*/
/*                             <label class="col-sm-2 control-label" for="input-blog-limit"><span data-toggle="tooltip"*/
/*                                                                                                title="{{ help_article_limit }} ">{{ entry_article_limit }} </span></label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="text" name="easy_blog_global_article_limit"*/
/*                                        value="{{ easy_blog_global_article_limit }} "*/
/*                                        placeholder="{{ entry_article_limit }} " id="input-blog-limit"*/
/*                                        class="form-control"/>*/
/*                                 {% if error_article_limit %}*/
/*                                     <div class="text-danger">{{ error_article_limit }} </div>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group required">*/
/*                             <label class="col-sm-2 control-label"*/
/*                                    for="input-blog-meta-title"><span>{{ entry_meta_title }} </span></label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="text" name="easy_blog_home_page_meta_title"*/
/*                                        value="{{ easy_blog_home_page_meta_title }} "*/
/*                                        placeholder="{{ entry_meta_title }} " id="input-blog-meta-title"*/
/*                                        class="form-control"/>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group required">*/
/*                             <label class="col-sm-2 control-label"*/
/*                                    for="input-blog-meta-description"><span>{{ entry_meta_description }} </span></label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="text" name="easy_blog_home_page_meta_description"*/
/*                                        value="{{ easy_blog_home_page_meta_description }} "*/
/*                                        placeholder="{{ entry_meta_description }} " id="input-blog-meta-description"*/
/*                                        class="form-control"/>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group required">*/
/*                             <label class="col-sm-2 control-label"*/
/*                                    for="input-blog-meta-keyword"><span>{{ entry_meta_keyword }} </span></label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="text" name="easy_blog_home_page_meta_keyword"*/
/*                                        value="{{ easy_blog_home_page_meta_keyword }} "*/
/*                                        placeholder="{{ entry_meta_keyword }} " id="input-blog-meta-keyword"*/
/*                                        class="form-control"/>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-status">{{ entry_status }} </label>*/
/*                             <div class="col-sm-10">*/
/*                                 <select name="easy_blog_global_status" id="input-status" class="form-control">*/
/*                                     {% if easy_blog_global_status %}*/
/*                                         <option value="1" selected="selected">{{ text_enabled }} </option>*/
/*                                         <option value="0">{{ text_disabled }} </option>*/
/*                                    {% else %}*/
/*                                     <option value="1">{{ text_enabled }} </option>*/
/*                                     <option value="0" selected="selected">{{ text_disabled }} </option>*/
/*                                     {% endif %}*/
/*                                 </select>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </fieldset>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {{ footer }}*/
