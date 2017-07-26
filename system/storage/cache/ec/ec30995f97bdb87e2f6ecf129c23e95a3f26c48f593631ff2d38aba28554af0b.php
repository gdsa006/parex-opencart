<?php

/* extension/extension/blog/article_form.twig */
class __TwigTemplate_1cf5f845a040c54c822a0b16fefaac3013a2eec2daeb3edcda1e0449ce2f6b5e extends Twig_Template
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
                <button type=\"submit\" form=\"form-article\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\"
                        class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 8
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i
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
            echo "\">";
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
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo " </h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 29
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-article\"
                      class=\"form-horizontal\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 32
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo " </a></li>
                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"tab-general\">
                            <ul class=\"nav nav-tabs\" id=\"language\">
                                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 38
            echo "                                    <li><a href=\"#language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"tab\"><img
                                                    src=\"language/";
            // line 39
            echo $this->getAttribute($context["language"], "code", array());
            echo " /";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\"
                                                    title=\"";
            // line 40
            echo $this->getAttribute($context["language"], "name", array());
            echo "\"/> ";
            echo $this->getAttribute($context["language"], "name", array());
            echo " </a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                            </ul>
                            <div class=\"tab-content\">
                                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 45
            echo "                                    <div class=\"tab-pane\" id=\"language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-name";
            // line 48
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\"
                                                       name=\"article_description[";
            // line 51
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][name]\"
                                                       value=\"";
            // line 52
            echo (($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), "language", array()), "language_id", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), "language", array()), "language_id", array()), "name", array())) : (""));
            echo "  \"
                                                       placeholder=\"";
            // line 53
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "\"
                                                       id=\"input-name";
            // line 54
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\"/>
                                                ";
            // line 55
            if ($this->getAttribute($this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), "language", array()), "language_id", array())) {
                // line 56
                echo "                                                    <div class=\"text-danger\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), "language", array()), "language_id", array());
                echo " </div>
                                                ";
            }
            // line 58
            echo "                                            </div>
                                        </div>

                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-intro-text";
            // line 63
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_intro_text"]) ? $context["entry_intro_text"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                            <textarea
                                                    name=\"article_description[";
            // line 66
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][intro_text]\"
                                                    placeholder=\"";
            // line 67
            echo (isset($context["entry_intro_text"]) ? $context["entry_intro_text"] : null);
            echo "\"
                                                    id=\"input-intro-text";
            // line 68
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"
                                                    class=\"form-control\"
                                                    data-toggle=\"summernote\">";
            // line 70
            echo (($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), "language", array()), "language_id", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), "language", array()), "language_id", array()), "intro_text", array())) : (""));
            echo "
                                            </textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-description";
            // line 76
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                            <textarea
                                                    name=\"article_description[";
            // line 79
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][description]\"
                                                    placeholder=\"";
            // line 80
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\"
                                                    id=\"input-description";
            // line 81
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"
                                                    class=\"form-control\"
                                                    data-toggle=\"summernote\">";
            // line 83
            echo (($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), "language", array()), "language_id", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), "language", array()), "language_id", array()), "description", array())) : (""));
            echo " </textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-meta-title";
            // line 88
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\"
                                                       name=\"article_description[";
            // line 91
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_title]\"
                                                       value=\"";
            // line 92
            echo (($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), "language", array()), "language_id", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), "language", array()), "language_id", array()), "meta_title", array())) : (""));
            echo "\"
                                                       placeholder=\"";
            // line 93
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "\"
                                                       id=\"input-meta-title";
            // line 94
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"
                                                       class=\"form-control\"/>
                                                ";
            // line 96
            if ($this->getAttribute($this->getAttribute((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null), "language", array()), "language_id", array())) {
                // line 97
                echo "                                                    <div class=\"text-danger\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null), "language", array()), "language_id", array());
                echo " </div>
                                                ";
            }
            // line 99
            echo "                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-meta-description";
            // line 103
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                            <textarea
                                                    name=\"article_description[";
            // line 106
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_description]\"
                                                    rows=\"5\" placeholder=\"";
            // line 107
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "\"
                                                    id=\"input-meta-description";
            // line 108
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"
                                                    class=\"form-control\">";
            // line 109
            echo (($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), "language", array()), "language_id", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), "language", array()), "language_id", array()), "meta_description", array())) : (""));
            echo "
                                            </textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-meta-keyword";
            // line 115
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                            <textarea
                                                    name=\"article_description[";
            // line 118
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_keyword]\"
                                                    rows=\"5\" placeholder=\"";
            // line 119
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "\"
                                                    id=\"input-meta-keyword";
            // line 120
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"
                                                    class=\"form-control\">";
            // line 121
            echo (($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), "language", array()), "language_id", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), "language", array()), "language_id", array()), "meta_keyword", array())) : (""));
            echo " </textarea>
                                            </div>
                                        </div>

                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-status\">";
            // line 127
            echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <select name=\"status\" id=\"input-status\" class=\"form-control\">
                                                    ";
            // line 130
            if ((isset($context["status"]) ? $context["status"] : null)) {
                // line 131
                echo "                                                        <option value=\"1\"
                                                                selected=\"selected\">";
                // line 132
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo " </option>
                                                        <option value=\"0\">";
                // line 133
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo " </option>
                                                    ";
            } else {
                // line 135
                echo "                                                        <option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo " </option>
                                                        <option value=\"0\"
                                                                selected=\"selected\">";
                // line 137
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo " </option>
                                                    ";
            }
            // line 139
            echo "                                                </select>
                                            </div>
                                        </div>

                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-sort-order\">";
            // line 145
            echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\" name=\"sort_order\" value=\"";
            // line 147
            echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
            echo "\"
                                                       placeholder=\"";
            // line 148
            echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
            echo "\" id=\"input-sort-order\"
                                                       class=\"form-control\"/>
                                            </div>
                                        </div>

                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type=\"text/javascript\"><!--
        \$('#language a:first').tab('show');
        \$('#option a:first').tab('show');
        //--></script>
</div>
<link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\"/>
<link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\"/>
<script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
<link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\"/>
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
";
        // line 178
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/extension/blog/article_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 178,  397 => 155,  384 => 148,  380 => 147,  375 => 145,  367 => 139,  362 => 137,  356 => 135,  351 => 133,  347 => 132,  344 => 131,  342 => 130,  336 => 127,  327 => 121,  323 => 120,  319 => 119,  315 => 118,  307 => 115,  298 => 109,  294 => 108,  290 => 107,  286 => 106,  278 => 103,  272 => 99,  266 => 97,  264 => 96,  259 => 94,  255 => 93,  251 => 92,  247 => 91,  239 => 88,  231 => 83,  226 => 81,  222 => 80,  218 => 79,  210 => 76,  201 => 70,  196 => 68,  192 => 67,  188 => 66,  180 => 63,  173 => 58,  167 => 56,  165 => 55,  161 => 54,  157 => 53,  153 => 52,  149 => 51,  141 => 48,  134 => 45,  130 => 44,  126 => 42,  116 => 40,  110 => 39,  105 => 38,  101 => 37,  93 => 32,  87 => 29,  81 => 26,  77 => 24,  69 => 20,  67 => 19,  61 => 15,  50 => 13,  46 => 12,  41 => 10,  34 => 8,  29 => 6,  19 => 1,);
    }
}
/* {{ header }} {{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right">*/
/*                 <button type="submit" form="form-article" data-toggle="tooltip" title="{{ button_save }}"*/
/*                         class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*                 <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i*/
/*                             class="fa fa-reply"></i></a></div>*/
/*             <h1>{{ heading_title }} </h1>*/
/*             <ul class="breadcrumb">*/
/*                 {% for breadcrumb in breadcrumbs %}*/
/*                     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }} </a></li>*/
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
/*                 <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }} </h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-article"*/
/*                       class="form-horizontal">*/
/*                     <ul class="nav nav-tabs">*/
/*                         <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }} </a></li>*/
/*                     </ul>*/
/*                     <div class="tab-content">*/
/*                         <div class="tab-pane active" id="tab-general">*/
/*                             <ul class="nav nav-tabs" id="language">*/
/*                                 {% for language in languages %}*/
/*                                     <li><a href="#language{{ language.language_id }}" data-toggle="tab"><img*/
/*                                                     src="language/{{ language.code }} /{{ language.code }}.png"*/
/*                                                     title="{{ language.name }}"/> {{ language.name }} </a></li>*/
/*                                 {% endfor %}*/
/*                             </ul>*/
/*                             <div class="tab-content">*/
/*                                 {% for language in languages %}*/
/*                                     <div class="tab-pane" id="language{{ language.language_id }}">*/
/*                                         <div class="form-group required">*/
/*                                             <label class="col-sm-2 control-label"*/
/*                                                    for="input-name{{ language.language_id }}">{{ entry_name }}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <input type="text"*/
/*                                                        name="article_description[{{ language.language_id }}][name]"*/
/*                                                        value="{{ article_description.language.language_id ? article_description.language.language_id.name : '' }}  "*/
/*                                                        placeholder="{{ entry_name }}"*/
/*                                                        id="input-name{{ language.language_id }}" class="form-control"/>*/
/*                                                 {% if error_name.language.language_id %}*/
/*                                                     <div class="text-danger">{{ error_name.language.language_id }} </div>*/
/*                                                 {% endif %}*/
/*                                             </div>*/
/*                                         </div>*/
/* */
/*                                         <div class="form-group required">*/
/*                                             <label class="col-sm-2 control-label"*/
/*                                                    for="input-intro-text{{ language.language_id }}">{{ entry_intro_text }}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                             <textarea*/
/*                                                     name="article_description[{{ language.language_id }}][intro_text]"*/
/*                                                     placeholder="{{ entry_intro_text }}"*/
/*                                                     id="input-intro-text{{ language.language_id }}"*/
/*                                                     class="form-control"*/
/*                                                     data-toggle="summernote">{{ article_description.language.language_id ? article_description.language.language_id.intro_text : '' }}*/
/*                                             </textarea>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group required">*/
/*                                             <label class="col-sm-2 control-label"*/
/*                                                    for="input-description{{ language.language_id }}">{{ entry_description }}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                             <textarea*/
/*                                                     name="article_description[{{ language.language_id }}][description]"*/
/*                                                     placeholder="{{ entry_description }}"*/
/*                                                     id="input-description{{ language.language_id }}"*/
/*                                                     class="form-control"*/
/*                                                     data-toggle="summernote">{{ article_description.language.language_id ? article_description.language.language_id.description : '' }} </textarea>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group required">*/
/*                                             <label class="col-sm-2 control-label"*/
/*                                                    for="input-meta-title{{ language.language_id }}">{{ entry_meta_title }}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <input type="text"*/
/*                                                        name="article_description[{{ language.language_id }}][meta_title]"*/
/*                                                        value="{{ article_description.language.language_id ? article_description.language.language_id.meta_title : '' }}"*/
/*                                                        placeholder="{{ entry_meta_title }}"*/
/*                                                        id="input-meta-title{{ language.language_id }}"*/
/*                                                        class="form-control"/>*/
/*                                                 {% if error_meta_title.language.language_id %}*/
/*                                                     <div class="text-danger">{{ error_meta_title.language.language_id }} </div>*/
/*                                                 {% endif %}*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-2 control-label"*/
/*                                                    for="input-meta-description{{ language.language_id }}">{{ entry_meta_description }}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                             <textarea*/
/*                                                     name="article_description[{{ language.language_id }}][meta_description]"*/
/*                                                     rows="5" placeholder="{{ entry_meta_description }}"*/
/*                                                     id="input-meta-description{{ language.language_id }}"*/
/*                                                     class="form-control">{{ article_description.language.language_id ? article_description.language.language_id.meta_description : '' }}*/
/*                                             </textarea>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-2 control-label"*/
/*                                                    for="input-meta-keyword{{ language.language_id }}">{{ entry_meta_keyword }}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                             <textarea*/
/*                                                     name="article_description[{{ language.language_id }}][meta_keyword]"*/
/*                                                     rows="5" placeholder="{{ entry_meta_keyword }}"*/
/*                                                     id="input-meta-keyword{{ language.language_id }}"*/
/*                                                     class="form-control">{{ article_description.language.language_id ? article_description.language.language_id.meta_keyword : '' }} </textarea>*/
/*                                             </div>*/
/*                                         </div>*/
/* */
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-2 control-label"*/
/*                                                    for="input-status">{{ entry_status }}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <select name="status" id="input-status" class="form-control">*/
/*                                                     {% if status %}*/
/*                                                         <option value="1"*/
/*                                                                 selected="selected">{{ text_enabled }} </option>*/
/*                                                         <option value="0">{{ text_disabled }} </option>*/
/*                                                     {% else %}*/
/*                                                         <option value="1">{{ text_enabled }} </option>*/
/*                                                         <option value="0"*/
/*                                                                 selected="selected">{{ text_disabled }} </option>*/
/*                                                     {% endif %}*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                         </div>*/
/* */
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-2 control-label"*/
/*                                                    for="input-sort-order">{{ entry_sort_order }}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <input type="text" name="sort_order" value="{{ sort_order }}"*/
/*                                                        placeholder="{{ entry_sort_order }}" id="input-sort-order"*/
/*                                                        class="form-control"/>*/
/*                                             </div>*/
/*                                         </div>*/
/* */
/*                                     </div>*/
/*                                 {% endfor %}*/
/* */
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <script type="text/javascript"><!--*/
/*         $('#language a:first').tab('show');*/
/*         $('#option a:first').tab('show');*/
/*         //--></script>*/
/* </div>*/
/* <link href="view/javascript/codemirror/lib/codemirror.css" rel="stylesheet"/>*/
/* <link href="view/javascript/codemirror/theme/monokai.css" rel="stylesheet"/>*/
/* <script type="text/javascript" src="view/javascript/codemirror/lib/codemirror.js"></script>*/
/* <script type="text/javascript" src="view/javascript/codemirror/lib/xml.js"></script>*/
/* <script type="text/javascript" src="view/javascript/codemirror/lib/formatting.js"></script>*/
/* <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/* <link href="view/javascript/summernote/summernote.css" rel="stylesheet"/>*/
/* <script type="text/javascript" src="view/javascript/summernote/summernote-image-attributes.js"></script>*/
/* <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script>*/
/* {{ footer }}*/
