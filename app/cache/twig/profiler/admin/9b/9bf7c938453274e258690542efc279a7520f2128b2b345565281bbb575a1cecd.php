<?php

/* __string_template__121ea3cca19a7f1b1b6982df3984e2fe8425ea085c084e5b38911b7304a1fa7d */
class __TwigTemplate_ce64bcbae626ade5e341b4736b8c8a105d35bb789662b67e2e09d5f9a1ed4bdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__121ea3cca19a7f1b1b6982df3984e2fe8425ea085c084e5b38911b7304a1fa7d", 22);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8cb3006eca53412fd85b3d450939c716c1f14d9ed7b60de623f306b14e952c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8cb3006eca53412fd85b3d450939c716c1f14d9ed7b60de623f306b14e952c3->enter($__internal_d8cb3006eca53412fd85b3d450939c716c1f14d9ed7b60de623f306b14e952c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__121ea3cca19a7f1b1b6982df3984e2fe8425ea085c084e5b38911b7304a1fa7d"));

        // line 24
        $context["menus"] = array(0 => "product", 1 => "class_category");
        // line 29
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8cb3006eca53412fd85b3d450939c716c1f14d9ed7b60de623f306b14e952c3->leave($__internal_d8cb3006eca53412fd85b3d450939c716c1f14d9ed7b60de623f306b14e952c3_prof);

    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        $__internal_12ef2cf3ffaec3d492804afe99e19977c54dd29f3196468c7bb3b7b717c6da47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ef2cf3ffaec3d492804afe99e19977c54dd29f3196468c7bb3b7b717c6da47->enter($__internal_12ef2cf3ffaec3d492804afe99e19977c54dd29f3196468c7bb3b7b717c6da47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "商品管理";
        
        $__internal_12ef2cf3ffaec3d492804afe99e19977c54dd29f3196468c7bb3b7b717c6da47->leave($__internal_12ef2cf3ffaec3d492804afe99e19977c54dd29f3196468c7bb3b7b717c6da47_prof);

    }

    // line 27
    public function block_sub_title($context, array $blocks = array())
    {
        $__internal_fc7be3692cb17b1c04d6e1ddc326c07a745e2d984fe66892aad08293df38136e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc7be3692cb17b1c04d6e1ddc326c07a745e2d984fe66892aad08293df38136e->enter($__internal_fc7be3692cb17b1c04d6e1ddc326c07a745e2d984fe66892aad08293df38136e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_title"));

        echo "カテゴリ編集";
        
        $__internal_fc7be3692cb17b1c04d6e1ddc326c07a745e2d984fe66892aad08293df38136e->leave($__internal_fc7be3692cb17b1c04d6e1ddc326c07a745e2d984fe66892aad08293df38136e_prof);

    }

    // line 31
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_189d20b80e306781c4d56eca022b08b3ad2d37750fb753ba773d13f9f4786556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_189d20b80e306781c4d56eca022b08b3ad2d37750fb753ba773d13f9f4786556->enter($__internal_189d20b80e306781c4d56eca022b08b3ad2d37750fb753ba773d13f9f4786556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 32
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.core.min.js\"></script>
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.widget.min.js\"></script>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js\"></script>
    <script>
        \$(function() {
            var oldRanks = [];
            // 画面の中のrank一覧を保持
            \$(\"div.tableish > .item_box\").each(function() {
                oldRanks.push(this.dataset.rank);
            });
            // rsort
            oldRanks.sort(function(a,b){return a - b;}).reverse();

            \$(\"div.tableish\").sortable({
                items: '> .item_box',
                cursor: 'move',
                update: function(e, ui) {
                    \$(\"body\").append(\$('<div class=\"modal-backdrop in\"></div>'));
                    updateRank();
                }
            });

            var updateRank = function() {
                // 並び替え後にrankを更新
                var newRanks = {};
                var i = 0;
                \$(\"div.tableish > .item_box\").each(function() {
                    newRanks[this.dataset.categoryId] = oldRanks[i];
                    i++;
                });

                \$.ajax({
                    url: '";
        // line 65
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_product_category_rank_move");
        echo "',
                    type: 'POST',
                    data: newRanks,
                }).done(function(data) {
                    console.log(data);
                    \$(\".modal-backdrop\").remove();
                }).fail(function() {
                    console.log('fail');
                    \$(\".modal-backdrop\").remove();
                });
            };

            // カテゴリツリー開閉
            // 初期表示
            \$(\"#category_tree li ul\").css(\"display\", \"none\");
            // 現在地まで拓く
            \$(\"#category_tree li.active\")
                    .parents(\"ul\")
                    .css(\"display\", \"\");

            // クリックでひらく
            \$(\"#category_tree li svg\").on(\"click\", function(){
                \$(this).parent().find(\"ul\").slideToggle(100);
            });
        });
    </script>
";
        
        $__internal_189d20b80e306781c4d56eca022b08b3ad2d37750fb753ba773d13f9f4786556->leave($__internal_189d20b80e306781c4d56eca022b08b3ad2d37750fb753ba773d13f9f4786556_prof);

    }

    // line 93
    public function block_main($context, array $blocks = array())
    {
        $__internal_179498e3f3a95d4f48bf08be78b8eac0e62e71251162dece79b593b599fbf74e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_179498e3f3a95d4f48bf08be78b8eac0e62e71251162dece79b593b599fbf74e->enter($__internal_179498e3f3a95d4f48bf08be78b8eac0e62e71251162dece79b593b599fbf74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 94
        echo "    <div id=\"category_wrap\" class=\"row\">
        <div id=\"list_box\" class=\"col-md-9\">
            <div id=\"list_box__body\" class=\"box\">
                <div id=\"bread_crumb_box\" class=\"box-header\">
                    <div id=\"bread_crumb_box__body\" class=\"box-title box-title-category\">
                        <a href=\"";
        // line 99
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_product_category");
        echo "\">全カテゴリー</a>
                        ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["TargetCategory"] ?? $this->getContext($context, "TargetCategory")), "path", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ParentCategory"]) {
            // line 101
            echo "                            ";
            if ( !(null === $this->getAttribute($context["ParentCategory"], "id", array()))) {
                // line 102
                echo "                            &nbsp;<svg class=\"cb cb-angle-right\"> <use xlink:href=\"#cb-angle-right\" /></svg>&nbsp;<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_product_category_show", array("parent_id" => $this->getAttribute($context["ParentCategory"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ParentCategory"], "name", array()), "html", null, true);
                echo "</a>
                            ";
            }
            // line 104
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ParentCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                    </div>
                </div>
                <div id=\"edit_box\" class=\"box-body\">
                    <div id=\"edit_box__body\" class=\"row\">
                        <div id=\"edit_box__body_inner\" class=\"col-md-9\">
                            <form role=\"form\" class=\"form-horizontal\" name=\"form1\" id=\"form1\" method=\"post\" action=\"";
        // line 110
        if ($this->getAttribute(($context["TargetCategory"] ?? $this->getContext($context, "TargetCategory")), "id", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPath("admin_product_category_edit", array("id" => $this->getAttribute(($context["TargetCategory"] ?? $this->getContext($context, "TargetCategory")), "id", array()))), "html", null, true);
        } elseif (($context["Parent"] ?? $this->getContext($context, "Parent"))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_product_category_show", array("parent_id" => $this->getAttribute(($context["Parent"] ?? $this->getContext($context, "Parent")), "id", array()))), "html", null, true);
        } else {
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_product_category");
        }
        echo "\" enctype=\"multipart/form-data\">
                                <div class=\"form-group\">
                                    ";
        // line 112
        if (($this->getAttribute(($context["TargetCategory"] ?? $this->getContext($context, "TargetCategory")), "level", array()) < $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "category_nest_level", array()))) {
            // line 113
            echo "                                        <div class=\"col-md-12 form-inline\">
                                            ";
            // line 114
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
            echo "
                                            ";
            // line 115
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("placeholder" => "カテゴリ名を入力")));
            echo "
                                            ";
            // line 116
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'errors');
            echo "
                                            <button class=\"btn btn-default btn-sm\" type=\"submit\">カテゴリ作成</button>
                                        </div>
                                    ";
        }
        // line 120
        echo "                                </div>
                                <div class=\"extra-form\">
                                    ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 123
            echo "                                        ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 124
                echo "                                            <div class=\"col-md-12 form-group\">
                                                ";
                // line 125
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'label');
                echo "
                                                ";
                // line 126
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                                                ";
                // line 127
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                                            </div>
                                        ";
            }
            // line 130
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "                                </div>
                            </form>
                        </div>
                        <div id=\"csv_menu_box\" class=\"dl_dropdown col-md-3\">
                            <div id=\"csv_menu_box__toggle\" class=\"dropdown\"><a data-toggle=\"dropdown\" class=\"dropdown-toggle\" aria-expanded=\"false\">CSVダウンロード<svg class=\"cb cb-angle-down icon_down\"><use xlink:href=\"#cb-angle-down\"/></svg></a>
                                <ul id=\"csv_menu\" class=\"dropdown-menu dropdown-menu-right\">
                                    <li><a href=\"";
        // line 137
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_product_category_export");
        echo "\">CSVダウンロード</a></li>
                                    <li><a href=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_setting_shop_csv", array("id" => twig_constant("\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_CATEGORY"))), "html", null, true);
        echo "\">出力項目設定</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-header -->
                ";
        // line 144
        if ((twig_length_filter($this->env, ($context["Categories"] ?? $this->getContext($context, "Categories"))) > 0)) {
            // line 145
            echo "                    <div id=\"sortable_list\" class=\"box-body no-padding no-border\">
                        <div id=\"sortable_list_box\" class=\"sortable_list\">
                            <div id=\"sortable_list_box__list\" class=\"tableish\">

                                ";
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Categories"] ?? $this->getContext($context, "Categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                // line 150
                echo "
                                <div id=\"sortable_list__item--";
                // line 151
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "id", array()), "html", null, true);
                echo "\" class=\"item_box tr\" data-rank=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "rank", array()), "html", null, true);
                echo "\" data-category-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "id", array()), "html", null, true);
                echo "\">
                                    <div class=\"icon_sortable td\">
                                        <svg class=\"cb cb-ellipsis-v\"> <use xlink:href=\"#cb-ellipsis-v\" /></svg>
                                    </div>
                                    <div id=\"sortable_list__item_body--";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "id", array()), "html", null, true);
                echo "\" class=\"item_pattern td\">
                                        <a href=\"";
                // line 156
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_product_category_show", array("parent_id" => $this->getAttribute($context["Category"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "name", array()), "html", null, true);
                echo "</a>
                                    </div>
                                    <div id=\"sortable_list__item_menu_box--";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "id", array()), "html", null, true);
                echo "\" class=\"icon_edit td\">
                                        <div id=\"sortable_list__item_menu_toggle--";
                // line 159
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "id", array()), "html", null, true);
                echo "\" class=\"dropdown\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><svg class=\"cb cb-ellipsis-h\"> <use xlink:href=\"#cb-ellipsis-h\" /></svg></a>
                                            <ul id=\"sortable_list__menu--";
                // line 161
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "id", array()), "html", null, true);
                echo "\" class=\"dropdown-menu dropdown-menu-right\">
                                                ";
                // line 162
                if (($this->getAttribute($context["Category"], "id", array()) != $this->getAttribute(($context["TargetCategory"] ?? $this->getContext($context, "TargetCategory")), "id", array()))) {
                    // line 163
                    echo "                                                    <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_product_category_edit", array("id" => $this->getAttribute($context["Category"], "id", array()))), "html", null, true);
                    echo "\">編集</a></li>
                                                ";
                } else {
                    // line 165
                    echo "                                                    <li><a>編集中</a></li>
                                                ";
                }
                // line 167
                echo "
                                                ";
                // line 168
                if (((twig_length_filter($this->env, $this->getAttribute($context["Category"], "Children", array())) > 0) || $this->getAttribute($context["Category"], "hasProductCategories", array()))) {
                    // line 169
                    echo "                                                    <li><a title=\"子カテゴリが存在するため削除できません。\">削除</a></li>
                                                ";
                } else {
                    // line 171
                    echo "                                                    <li>
                                                        <a href=\"";
                    // line 172
                    echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_product_category_delete", array("id" => $this->getAttribute($context["Category"], "id", array()))), "html", null, true);
                    echo "\" ";
                    echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getCsrfTokenForAnchor();
                    echo " data-method=\"delete\">
                                                            削除
                                                        </a>
                                                    </li>
                                                ";
                }
                // line 177
                echo "
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- /.item_box -->
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "
                            </div>
                        </div>
                    </div><!-- /.box-body -->
            ";
        } else {
            // line 188
            echo "                <div id=\"list_box\" class=\"box-body no-padding\">
                    <div id=\"list_box__not_find_category\" class=\"data-empty\"><svg class=\"cb cb-inbox\"> <use xlink:href=\"#cb-inbox\" /></svg><p>データはありません</p></div>
                </div><!-- /.box-body -->
            ";
        }
        // line 192
        echo "            <!-- ▲ データがある時 ▲ -->
            </div><!-- /.box -->
        </div><!-- /.col -->

        ";
        // line 212
        echo "
        <div class=\"col-md-3\" id=\"aside_column\">
            <div id=\"tree_box\" class=\"col_inner\">

                <div id=\"tree_box__body\" class=\"box no-header\">
                    <div id=\"tree_box__body_inner\" class=\"box-body\">
                        <div id=\"tree_box__tree\" class=\"tree\">
                            <p id=\"tree_box__header\" class=\"";
        // line 219
        if ((null === ($context["Parent"] ?? $this->getContext($context, "Parent")))) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_product_category");
        echo "\">全カテゴリー</a></p>
                            <ul id=\"category_tree\">
                                ";
        // line 221
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["TopCategories"] ?? $this->getContext($context, "TopCategories")));
        foreach ($context['_seq'] as $context["_key"] => $context["TopCategory"]) {
            // line 222
            echo "                                    ";
            echo $this->getAttribute($this, "tree", array(0 => $context["TopCategory"], 1 => (($this->getAttribute($this->getAttribute(($context["TargetCategory"] ?? null), "Parent", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["TargetCategory"] ?? null), "Parent", array(), "any", false, true), "id", array()), null)) : (null)), 2 => 0), "method");
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['TopCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        echo "                            </ul>
                        </div>
                    </div>
                </div><!-- /.box -->

            </div>
        </div><!-- /.col -->

    </div>
";
        
        $__internal_179498e3f3a95d4f48bf08be78b8eac0e62e71251162dece79b593b599fbf74e->leave($__internal_179498e3f3a95d4f48bf08be78b8eac0e62e71251162dece79b593b599fbf74e_prof);

    }

    // line 196
    public function gettree($__Category__ = null, $__TargetId__ = null, $__level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "Category" => $__Category__,
            "TargetId" => $__TargetId__,
            "level" => $__level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_93669d403eb1a89ee2107b6d29d55b454495c4585ec1f2f6862336584a12f680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_93669d403eb1a89ee2107b6d29d55b454495c4585ec1f2f6862336584a12f680->enter($__internal_93669d403eb1a89ee2107b6d29d55b454495c4585ec1f2f6862336584a12f680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "tree"));

            // line 197
            echo "            ";
            $context["level"] = (($context["level"] ?? $this->getContext($context, "level")) + 1);
            // line 198
            echo "            <li id=\"tree_item--";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Category"] ?? $this->getContext($context, "Category")), "id", array()), "html", null, true);
            echo "\" class=\"level";
            echo twig_escape_filter($this->env, ($context["level"] ?? $this->getContext($context, "level")), "html", null, true);
            echo " ";
            if (($this->getAttribute(($context["Category"] ?? $this->getContext($context, "Category")), "id", array()) == ($context["TargetId"] ?? $this->getContext($context, "TargetId")))) {
                echo "active";
            }
            echo "\">
                <svg class=\"cb cb-plus-square\"> <use xlink:href=\"";
            // line 199
            if ((twig_length_filter($this->env, $this->getAttribute(($context["Category"] ?? $this->getContext($context, "Category")), "children", array())) > 0)) {
                echo "#cb-plus-square";
            } else {
                echo "#cb-minus-square";
            }
            echo "\" /></svg>
                <a href=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_product_category_show", array("parent_id" => $this->getAttribute(($context["Category"] ?? $this->getContext($context, "Category")), "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 201
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Category"] ?? $this->getContext($context, "Category")), "name", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["Category"] ?? $this->getContext($context, "Category")), "children", array())), "html", null, true);
            echo ")
                </a>
                ";
            // line 203
            if ((twig_length_filter($this->env, $this->getAttribute(($context["Category"] ?? $this->getContext($context, "Category")), "children", array())) > 0)) {
                // line 204
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Category"] ?? $this->getContext($context, "Category")), "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["ChildCategory"]) {
                    // line 205
                    echo "                        <ul id=\"tree_item_child--";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ChildCategory"], "id", array()), "html", null, true);
                    echo "\">
                            ";
                    // line 206
                    echo $this->getAttribute($this, "tree", array(0 => $context["ChildCategory"], 1 => ($context["TargetId"] ?? $this->getContext($context, "TargetId")), 2 => ($context["level"] ?? $this->getContext($context, "level"))), "method");
                    echo "
                        </ul>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ChildCategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 209
                echo "                ";
            }
            // line 210
            echo "            </li>
        ";
            
            $__internal_93669d403eb1a89ee2107b6d29d55b454495c4585ec1f2f6862336584a12f680->leave($__internal_93669d403eb1a89ee2107b6d29d55b454495c4585ec1f2f6862336584a12f680_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "__string_template__121ea3cca19a7f1b1b6982df3984e2fe8425ea085c084e5b38911b7304a1fa7d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  518 => 210,  515 => 209,  506 => 206,  501 => 205,  496 => 204,  494 => 203,  487 => 201,  483 => 200,  475 => 199,  464 => 198,  461 => 197,  444 => 196,  428 => 224,  419 => 222,  415 => 221,  406 => 219,  397 => 212,  391 => 192,  385 => 188,  378 => 183,  367 => 177,  357 => 172,  354 => 171,  350 => 169,  348 => 168,  345 => 167,  341 => 165,  335 => 163,  333 => 162,  329 => 161,  324 => 159,  320 => 158,  313 => 156,  309 => 155,  298 => 151,  295 => 150,  291 => 149,  285 => 145,  283 => 144,  274 => 138,  270 => 137,  262 => 131,  256 => 130,  250 => 127,  246 => 126,  242 => 125,  239 => 124,  236 => 123,  232 => 122,  228 => 120,  221 => 116,  217 => 115,  213 => 114,  210 => 113,  208 => 112,  197 => 110,  190 => 105,  184 => 104,  176 => 102,  173 => 101,  169 => 100,  165 => 99,  158 => 94,  152 => 93,  118 => 65,  85 => 35,  81 => 34,  77 => 33,  72 => 32,  66 => 31,  54 => 27,  42 => 26,  35 => 22,  33 => 29,  31 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
This file is part of EC-CUBE

Copyright(c) 2000-2015 LOCKON CO.,LTD. All Rights Reserved.

http://www.lockon.co.jp/

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
#}
{% extends 'default_frame.twig' %}

{% set menus = ['product', 'class_category'] %}

{% block title %}商品管理{% endblock %}
{% block sub_title %}カテゴリ編集{% endblock %}

{% form_theme form 'Form/bootstrap_3_horizontal_layout.html.twig' %}

{% block javascript %}
    <script src=\"{{ app.config.admin_urlpath }}/assets/js/vendor/jquery.ui/jquery.ui.core.min.js\"></script>
    <script src=\"{{ app.config.admin_urlpath }}/assets/js/vendor/jquery.ui/jquery.ui.widget.min.js\"></script>
    <script src=\"{{ app.config.admin_urlpath }}/assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js\"></script>
    <script src=\"{{ app.config.admin_urlpath }}/assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js\"></script>
    <script>
        \$(function() {
            var oldRanks = [];
            // 画面の中のrank一覧を保持
            \$(\"div.tableish > .item_box\").each(function() {
                oldRanks.push(this.dataset.rank);
            });
            // rsort
            oldRanks.sort(function(a,b){return a - b;}).reverse();

            \$(\"div.tableish\").sortable({
                items: '> .item_box',
                cursor: 'move',
                update: function(e, ui) {
                    \$(\"body\").append(\$('<div class=\"modal-backdrop in\"></div>'));
                    updateRank();
                }
            });

            var updateRank = function() {
                // 並び替え後にrankを更新
                var newRanks = {};
                var i = 0;
                \$(\"div.tableish > .item_box\").each(function() {
                    newRanks[this.dataset.categoryId] = oldRanks[i];
                    i++;
                });

                \$.ajax({
                    url: '{{ url('admin_product_category_rank_move') }}',
                    type: 'POST',
                    data: newRanks,
                }).done(function(data) {
                    console.log(data);
                    \$(\".modal-backdrop\").remove();
                }).fail(function() {
                    console.log('fail');
                    \$(\".modal-backdrop\").remove();
                });
            };

            // カテゴリツリー開閉
            // 初期表示
            \$(\"#category_tree li ul\").css(\"display\", \"none\");
            // 現在地まで拓く
            \$(\"#category_tree li.active\")
                    .parents(\"ul\")
                    .css(\"display\", \"\");

            // クリックでひらく
            \$(\"#category_tree li svg\").on(\"click\", function(){
                \$(this).parent().find(\"ul\").slideToggle(100);
            });
        });
    </script>
{% endblock %}

{% block main %}
    <div id=\"category_wrap\" class=\"row\">
        <div id=\"list_box\" class=\"col-md-9\">
            <div id=\"list_box__body\" class=\"box\">
                <div id=\"bread_crumb_box\" class=\"box-header\">
                    <div id=\"bread_crumb_box__body\" class=\"box-title box-title-category\">
                        <a href=\"{{ url('admin_product_category') }}\">全カテゴリー</a>
                        {% for ParentCategory in TargetCategory.path %}
                            {% if ParentCategory.id is not null %}
                            &nbsp;<svg class=\"cb cb-angle-right\"> <use xlink:href=\"#cb-angle-right\" /></svg>&nbsp;<a href=\"{{ url('admin_product_category_show', { parent_id : ParentCategory.id }) }}\">{{ ParentCategory.name }}</a>
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
                <div id=\"edit_box\" class=\"box-body\">
                    <div id=\"edit_box__body\" class=\"row\">
                        <div id=\"edit_box__body_inner\" class=\"col-md-9\">
                            <form role=\"form\" class=\"form-horizontal\" name=\"form1\" id=\"form1\" method=\"post\" action=\"{% if TargetCategory.id %}{{ path('admin_product_category_edit', {id: TargetCategory.id}) }}{% elseif Parent %}{{ url('admin_product_category_show', {'parent_id': Parent.id}) }}{% else %}{{ url('admin_product_category') }}{% endif %}\" enctype=\"multipart/form-data\">
                                <div class=\"form-group\">
                                    {% if TargetCategory.level < app.config.category_nest_level %}
                                        <div class=\"col-md-12 form-inline\">
                                            {{ form_widget(form._token) }}
                                            {{ form_widget(form.name, {attr: {placeholder: 'カテゴリ名を入力'}}) }}
                                            {{ form_errors(form.name) }}
                                            <button class=\"btn btn-default btn-sm\" type=\"submit\">カテゴリ作成</button>
                                        </div>
                                    {% endif %}
                                </div>
                                <div class=\"extra-form\">
                                    {% for f in form.getIterator %}
                                        {% if f.vars.name matches '[^plg*]' %}
                                            <div class=\"col-md-12 form-group\">
                                                {{ form_label(f) }}
                                                {{ form_widget(f) }}
                                                {{ form_errors(f) }}
                                            </div>
                                        {% endif %}
                                    {% endfor %}
                                </div>
                            </form>
                        </div>
                        <div id=\"csv_menu_box\" class=\"dl_dropdown col-md-3\">
                            <div id=\"csv_menu_box__toggle\" class=\"dropdown\"><a data-toggle=\"dropdown\" class=\"dropdown-toggle\" aria-expanded=\"false\">CSVダウンロード<svg class=\"cb cb-angle-down icon_down\"><use xlink:href=\"#cb-angle-down\"/></svg></a>
                                <ul id=\"csv_menu\" class=\"dropdown-menu dropdown-menu-right\">
                                    <li><a href=\"{{ url('admin_product_category_export') }}\">CSVダウンロード</a></li>
                                    <li><a href=\"{{ url('admin_setting_shop_csv', { id : constant('\\\\Eccube\\\\Entity\\\\Master\\\\CsvType::CSV_TYPE_CATEGORY') }) }}\">出力項目設定</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-header -->
                {% if Categories|length > 0 %}
                    <div id=\"sortable_list\" class=\"box-body no-padding no-border\">
                        <div id=\"sortable_list_box\" class=\"sortable_list\">
                            <div id=\"sortable_list_box__list\" class=\"tableish\">

                                {% for Category in Categories %}

                                <div id=\"sortable_list__item--{{ Category.id }}\" class=\"item_box tr\" data-rank=\"{{ Category.rank }}\" data-category-id=\"{{ Category.id }}\">
                                    <div class=\"icon_sortable td\">
                                        <svg class=\"cb cb-ellipsis-v\"> <use xlink:href=\"#cb-ellipsis-v\" /></svg>
                                    </div>
                                    <div id=\"sortable_list__item_body--{{ Category.id }}\" class=\"item_pattern td\">
                                        <a href=\"{{ url('admin_product_category_show',  { parent_id : Category.id }) }}\">{{ Category.name }}</a>
                                    </div>
                                    <div id=\"sortable_list__item_menu_box--{{ Category.id }}\" class=\"icon_edit td\">
                                        <div id=\"sortable_list__item_menu_toggle--{{ Category.id }}\" class=\"dropdown\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><svg class=\"cb cb-ellipsis-h\"> <use xlink:href=\"#cb-ellipsis-h\" /></svg></a>
                                            <ul id=\"sortable_list__menu--{{ Category.id }}\" class=\"dropdown-menu dropdown-menu-right\">
                                                {% if Category.id != TargetCategory.id %}
                                                    <li><a href=\"{{ url('admin_product_category_edit', {id: Category.id}) }}\">編集</a></li>
                                                {% else %}
                                                    <li><a>編集中</a></li>
                                                {% endif %}

                                                {% if Category.Children|length > 0 or Category.hasProductCategories %}
                                                    <li><a title=\"子カテゴリが存在するため削除できません。\">削除</a></li>
                                                {% else %}
                                                    <li>
                                                        <a href=\"{{ url('admin_product_category_delete', {id: Category.id}) }}\" {{ csrf_token_for_anchor() }} data-method=\"delete\">
                                                            削除
                                                        </a>
                                                    </li>
                                                {% endif %}

                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- /.item_box -->
                                {% endfor %}

                            </div>
                        </div>
                    </div><!-- /.box-body -->
            {% else %}
                <div id=\"list_box\" class=\"box-body no-padding\">
                    <div id=\"list_box__not_find_category\" class=\"data-empty\"><svg class=\"cb cb-inbox\"> <use xlink:href=\"#cb-inbox\" /></svg><p>データはありません</p></div>
                </div><!-- /.box-body -->
            {% endif %}
            <!-- ▲ データがある時 ▲ -->
            </div><!-- /.box -->
        </div><!-- /.col -->

        {% macro tree(Category, TargetId, level) %}
            {% set level = level + 1 %}
            <li id=\"tree_item--{{ Category.id }}\" class=\"level{{ level }} {% if Category.id == TargetId %}active{% endif %}\">
                <svg class=\"cb cb-plus-square\"> <use xlink:href=\"{% if Category.children|length > 0 %}#cb-plus-square{% else %}#cb-minus-square{% endif %}\" /></svg>
                <a href=\"{{ url('admin_product_category_show', { parent_id : Category.id }) }}\">
                    {{ Category.name }} ({{ Category.children|length }})
                </a>
                {% if Category.children|length > 0 %}
                    {% for ChildCategory in Category.children %}
                        <ul id=\"tree_item_child--{{ ChildCategory.id }}\">
                            {{ _self.tree(ChildCategory, TargetId, level) }}
                        </ul>
                    {% endfor %}
                {% endif %}
            </li>
        {% endmacro %}

        <div class=\"col-md-3\" id=\"aside_column\">
            <div id=\"tree_box\" class=\"col_inner\">

                <div id=\"tree_box__body\" class=\"box no-header\">
                    <div id=\"tree_box__body_inner\" class=\"box-body\">
                        <div id=\"tree_box__tree\" class=\"tree\">
                            <p id=\"tree_box__header\" class=\"{% if Parent is null %}active{% endif %}\"><a href=\"{{ url('admin_product_category') }}\">全カテゴリー</a></p>
                            <ul id=\"category_tree\">
                                {% for TopCategory in TopCategories %}
                                    {{ _self.tree(TopCategory, TargetCategory.Parent.id | default(null), 0)}}
                                {% endfor %}
                            </ul>
                        </div>
                    </div>
                </div><!-- /.box -->

            </div>
        </div><!-- /.col -->

    </div>
{% endblock %}
", "__string_template__121ea3cca19a7f1b1b6982df3984e2fe8425ea085c084e5b38911b7304a1fa7d", "");
    }
}
