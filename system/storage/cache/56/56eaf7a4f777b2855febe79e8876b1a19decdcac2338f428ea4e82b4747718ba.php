<?php

/* extension/extension/blog/article_list.twig */
class __TwigTemplate_5ceb563a55be5cba7e9ad0248daa8c63eb3ead85e6aaa0dbd7676efc445987f6 extends Twig_Template
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
                <a href=\"";
        // line 6
        echo (isset($context["setting"]) ? $context["setting"] : null);
        echo " \" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_setting"]) ? $context["button_setting"] : null);
        echo " \" class=\"btn btn-default\"><i
                            class=\"fa fa-cog\"></i></a>
                <a href=\"";
        // line 8
        echo (isset($context["add"]) ? $context["add"] : null);
        echo " \" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo " \" class=\"btn btn-primary\"><i
                            class=\"fa fa-plus\"></i></a>
                <button type=\"submit\" form=\"form-article\" formaction=\"";
        // line 10
        echo (isset($context["copy"]) ? $context["copy"] : null);
        echo " \" data-toggle=\"tooltip\"
                        title=\"";
        // line 11
        echo (isset($context["button_copy"]) ? $context["button_copy"] : null);
        echo " \" class=\"btn btn-default\"><i class=\"fa fa-copy\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 12
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo " \" class=\"btn btn-danger\"
                        onclick=\"confirm('";
        // line 13
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo " ') ? \$('#form-article').submit() : false;\"><i
                            class=\"fa fa-trash-o\"></i></button>
            </div>
            <h1>";
        // line 16
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo " </h1>
            <ul class=\"breadcrumb\">
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 19
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
        // line 21
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 25
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 26
            echo "            <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 30
        echo "        ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 31
            echo "            <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 35
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 37
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo " </h3>
            </div>
            <div class=\"panel-body\">
                <div class=\"well\">
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"input-name\">";
        // line 44
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo " </label>
                                <input type=\"text\" name=\"filter_name\" value=\"";
        // line 45
        echo (isset($context["filter_name"]) ? $context["filter_name"] : null);
        echo " \"
                                       placeholder=\"";
        // line 46
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo " \" id=\"input-name\" class=\"form-control\"/>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"input-status\">";
        // line 51
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo " </label>
                                <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                                    <option value=\"*\"></option>
                                    ";
        // line 54
        if ((isset($context["filter_status"]) ? $context["filter_status"] : null)) {
            // line 55
            echo "                                        <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo " </option>
                                    ";
        } else {
            // line 57
            echo "                                    <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo " </option>
                                    ";
        }
        // line 59
        echo "
                                    ";
        // line 60
        if (( !(isset($context["filter_status"]) ? $context["filter_status"] : null) &&  !(null === (isset($context["filter_status"]) ? $context["filter_status"] : null)))) {
            // line 61
            echo "                                        <option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo " </option>
                                    ";
        } else {
            // line 63
            echo "                                    <option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo " </option>
                                    ";
        }
        // line 65
        echo "
                                </select>
                            </div>
                            <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary pull-right\"><i
                                        class=\"fa fa-search\"></i> ";
        // line 69
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo " </button>
                        </div>
                    </div>
                </div>
                <form action=\"";
        // line 73
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo " \" method=\"post\" enctype=\"multipart/form-data\" id=\"form-article\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-hover\">
                            <thead>
                            <tr>
                                <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\"
                                                                                   onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\"/>
                                </td>
                                <td class=\"text-left\">
                                    ";
        // line 82
        if (((isset($context["sort"]) ? $context["sort"] : null) == "pd.name")) {
            // line 83
            echo "                                        <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo " \" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo " \">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo " </a>
                                    ";
        } else {
            // line 85
            echo "                                    <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo " \">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo " </a>
                                    ";
        }
        // line 87
        echo "                                </td>
                                <td class=\"text-left\">
                                    ";
        // line 89
        if (((isset($context["sort"]) ? $context["sort"] : null) == "p.status")) {
            // line 90
            echo "                                        <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo " \" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo " \">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo " </a>
                                    ";
        } else {
            // line 92
            echo "                                    <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo " \">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo " </a>
                                    ";
        }
        // line 94
        echo "                                </td>
                                <td class=\"text-right\">";
        // line 95
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo " </td>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 99
        if ((isset($context["articles"]) ? $context["articles"] : null)) {
            // line 100
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 101
                echo "                                <tr>
                                    <td class=\"text-center\">
                                        ";
                // line 103
                if (twig_in_filter($this->getAttribute($context["article"], "article_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 104
                    echo "                                            <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["article"], "article_id", array());
                    echo " \"
                                                   checked=\"checked\"/>
                                        ";
                } else {
                    // line 107
                    echo "                                            <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["article"], "article_id", array());
                    echo " \"/>
                                        ";
                }
                // line 109
                echo "                                    </td>
                                    <td class=\"text-left\">";
                // line 110
                echo $this->getAttribute($context["article"], "name", array());
                echo " </td>
                                    <td class=\"text-left\">";
                // line 111
                echo $this->getAttribute($context["article"], "status", array());
                echo " </td>
                                    <td class=\"text-right\"><a href=\"";
                // line 112
                echo $this->getAttribute($context["article"], "edit", array());
                echo " \" data-toggle=\"tooltip\"
                                                              title=\"";
                // line 113
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo " \" class=\"btn btn-primary\"><i
                                                    class=\"fa fa-pencil\"></i></a></td>
                                </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "
                            ";
        } else {
            // line 119
            echo "                            <tr>
                                <td class=\"text-center\" colspan=\"8\">";
            // line 120
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo " </td>
                            </tr>
                            ";
        }
        // line 123
        echo "                            </tbody>
                        </table>
                    </div>
                </form>
                <div class=\"row\">
                    <div class=\"col-sm-6 text-left\">";
        // line 128
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo " </div>
                    <div class=\"col-sm-6 text-right\">";
        // line 129
        echo (isset($context["results"]) ? $context["results"] : null);
        echo " </div>
                </div>
            </div>
        </div>
    </div>
    <script type=\"text/javascript\"><!--
        \$('#button-filter').on('click', function () {
            var url = 'index.php?route=extension/extension/blog/article&user_token=";
        // line 136
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';

            var filter_name = \$('input[name=\\'filter_name\\']').val();

            if (filter_name) {
                url += '&filter_name=' + encodeURIComponent(filter_name);
            }

            var filter_status = \$('select[name=\\'filter_status\\']').val();

            if (filter_status != '*') {
                url += '&filter_status=' + encodeURIComponent(filter_status);
            }

            location = url;
        });
        //--></script>
    <script type=\"text/javascript\"><!--
        \$('input[name=\\'filter_name\\']').autocomplete({
            'source': function (request, response) {
                \$.ajax({
                    url: 'index.php?route=extension/extension/blog/article/autocomplete&user_token=";
        // line 157
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        response(\$.map(json, function (item) {
                            return {
                                label: item['name'],
                                value: item['article_id']
                            }
                        }));
                    }
                });
            },
            'select': function (item) {
                \$('input[name=\\'filter_name\\']').val(item['label']);
            }
        });
        //--></script>
</div>
";
        // line 175
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/extension/blog/article_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 175,  363 => 157,  339 => 136,  329 => 129,  325 => 128,  318 => 123,  312 => 120,  309 => 119,  305 => 117,  295 => 113,  291 => 112,  287 => 111,  283 => 110,  280 => 109,  274 => 107,  267 => 104,  265 => 103,  261 => 101,  256 => 100,  254 => 99,  247 => 95,  244 => 94,  236 => 92,  226 => 90,  224 => 89,  220 => 87,  212 => 85,  202 => 83,  200 => 82,  188 => 73,  181 => 69,  175 => 65,  169 => 63,  163 => 61,  161 => 60,  158 => 59,  152 => 57,  146 => 55,  144 => 54,  138 => 51,  130 => 46,  126 => 45,  122 => 44,  112 => 37,  108 => 35,  100 => 31,  97 => 30,  89 => 26,  87 => 25,  81 => 21,  70 => 19,  66 => 18,  61 => 16,  55 => 13,  51 => 12,  47 => 11,  43 => 10,  36 => 8,  29 => 6,  19 => 1,);
    }
}
/* {{ header }} {{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right">*/
/*                 <a href="{{ setting }} " data-toggle="tooltip" title="{{ button_setting }} " class="btn btn-default"><i*/
/*                             class="fa fa-cog"></i></a>*/
/*                 <a href="{{ add }} " data-toggle="tooltip" title="{{ button_add }} " class="btn btn-primary"><i*/
/*                             class="fa fa-plus"></i></a>*/
/*                 <button type="submit" form="form-article" formaction="{{ copy }} " data-toggle="tooltip"*/
/*                         title="{{ button_copy }} " class="btn btn-default"><i class="fa fa-copy"></i></button>*/
/*                 <button type="button" data-toggle="tooltip" title="{{ button_delete }} " class="btn btn-danger"*/
/*                         onclick="confirm('{{ text_confirm }} ') ? $('#form-article').submit() : false;"><i*/
/*                             class="fa fa-trash-o"></i></button>*/
/*             </div>*/
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
/*         {% if success %}*/
/*             <div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ success }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             </div>*/
/*         {% endif %}*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }} </h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <div class="well">*/
/*                     <div class="row">*/
/*                         <div class="col-sm-6">*/
/*                             <div class="form-group">*/
/*                                 <label class="control-label" for="input-name">{{ entry_name }} </label>*/
/*                                 <input type="text" name="filter_name" value="{{ filter_name }} "*/
/*                                        placeholder="{{ entry_name }} " id="input-name" class="form-control"/>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-sm-6">*/
/*                             <div class="form-group">*/
/*                                 <label class="control-label" for="input-status">{{ entry_status }} </label>*/
/*                                 <select name="filter_status" id="input-status" class="form-control">*/
/*                                     <option value="*"></option>*/
/*                                     {% if filter_status %}*/
/*                                         <option value="1" selected="selected">{{ text_enabled }} </option>*/
/*                                     {% else %}*/
/*                                     <option value="1">{{ text_enabled }} </option>*/
/*                                     {% endif %}*/
/* */
/*                                     {% if not filter_status  and  not (filter_status is null) %}*/
/*                                         <option value="0" selected="selected">{{ text_disabled }} </option>*/
/*                                     {% else %}*/
/*                                     <option value="0">{{ text_disabled }} </option>*/
/*                                     {% endif %}*/
/* */
/*                                 </select>*/
/*                             </div>*/
/*                             <button type="button" id="button-filter" class="btn btn-primary pull-right"><i*/
/*                                         class="fa fa-search"></i> {{ button_filter }} </button>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <form action="{{ delete }} " method="post" enctype="multipart/form-data" id="form-article">*/
/*                     <div class="table-responsive">*/
/*                         <table class="table table-bordered table-hover">*/
/*                             <thead>*/
/*                             <tr>*/
/*                                 <td style="width: 1px;" class="text-center"><input type="checkbox"*/
/*                                                                                    onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"/>*/
/*                                 </td>*/
/*                                 <td class="text-left">*/
/*                                     {% if sort  ==  'pd.name' %}*/
/*                                         <a href="{{ sort_name }} " class="{{ order|lower }} ">{{ column_name }} </a>*/
/*                                     {% else %}*/
/*                                     <a href="{{ sort_name }} ">{{ column_name }} </a>*/
/*                                     {% endif %}*/
/*                                 </td>*/
/*                                 <td class="text-left">*/
/*                                     {% if sort  ==  'p.status' %}*/
/*                                         <a href="{{ sort_status }} " class="{{ order|lower }} ">{{ column_status }} </a>*/
/*                                     {% else %}*/
/*                                     <a href="{{ sort_status }} ">{{ column_status }} </a>*/
/*                                     {% endif %}*/
/*                                 </td>*/
/*                                 <td class="text-right">{{ column_action }} </td>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {% if articles %}*/
/*                                 {% for article in articles %}*/
/*                                 <tr>*/
/*                                     <td class="text-center">*/
/*                                         {% if article.article_id in selected %}*/
/*                                             <input type="checkbox" name="selected[]" value="{{ article.article_id }} "*/
/*                                                    checked="checked"/>*/
/*                                         {% else %}*/
/*                                             <input type="checkbox" name="selected[]" value="{{ article.article_id }} "/>*/
/*                                         {% endif %}*/
/*                                     </td>*/
/*                                     <td class="text-left">{{ article.name }} </td>*/
/*                                     <td class="text-left">{{ article.status }} </td>*/
/*                                     <td class="text-right"><a href="{{ article.edit }} " data-toggle="tooltip"*/
/*                                                               title="{{ button_edit }} " class="btn btn-primary"><i*/
/*                                                     class="fa fa-pencil"></i></a></td>*/
/*                                 </tr>*/
/*                                 {% endfor %}*/
/* */
/*                             {% else %}*/
/*                             <tr>*/
/*                                 <td class="text-center" colspan="8">{{ text_no_results }} </td>*/
/*                             </tr>*/
/*                             {% endif %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                 </form>*/
/*                 <div class="row">*/
/*                     <div class="col-sm-6 text-left">{{ pagination }} </div>*/
/*                     <div class="col-sm-6 text-right">{{ results }} </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <script type="text/javascript"><!--*/
/*         $('#button-filter').on('click', function () {*/
/*             var url = 'index.php?route=extension/extension/blog/article&user_token={{ user_token }}';*/
/* */
/*             var filter_name = $('input[name=\'filter_name\']').val();*/
/* */
/*             if (filter_name) {*/
/*                 url += '&filter_name=' + encodeURIComponent(filter_name);*/
/*             }*/
/* */
/*             var filter_status = $('select[name=\'filter_status\']').val();*/
/* */
/*             if (filter_status != '*') {*/
/*                 url += '&filter_status=' + encodeURIComponent(filter_status);*/
/*             }*/
/* */
/*             location = url;*/
/*         });*/
/*         //--></script>*/
/*     <script type="text/javascript"><!--*/
/*         $('input[name=\'filter_name\']').autocomplete({*/
/*             'source': function (request, response) {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=extension/extension/blog/article/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/*                     dataType: 'json',*/
/*                     success: function (json) {*/
/*                         response($.map(json, function (item) {*/
/*                             return {*/
/*                                 label: item['name'],*/
/*                                 value: item['article_id']*/
/*                             }*/
/*                         }));*/
/*                     }*/
/*                 });*/
/*             },*/
/*             'select': function (item) {*/
/*                 $('input[name=\'filter_name\']').val(item['label']);*/
/*             }*/
/*         });*/
/*         //--></script>*/
/* </div>*/
/* {{ footer }}*/
