<?php

/* __string_template__ab469259620e43396fbf49785f60624ffd3afdd6f8c64c1066bb16196996f5bc */
class __TwigTemplate_4f0315aef837060c6da396e6212be956f777766ff9179fb869958623498937bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__ab469259620e43396fbf49785f60624ffd3afdd6f8c64c1066bb16196996f5bc", 22);
        $this->blocks = array(
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
        $__internal_303686c4028e0407a3f6cba9fa7458c7bab254f698c01f04a095317eaff21d4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_303686c4028e0407a3f6cba9fa7458c7bab254f698c01f04a095317eaff21d4b->enter($__internal_303686c4028e0407a3f6cba9fa7458c7bab254f698c01f04a095317eaff21d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__ab469259620e43396fbf49785f60624ffd3afdd6f8c64c1066bb16196996f5bc"));

        // line 24
        $context["body_class"] = "product_page";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_303686c4028e0407a3f6cba9fa7458c7bab254f698c01f04a095317eaff21d4b->leave($__internal_303686c4028e0407a3f6cba9fa7458c7bab254f698c01f04a095317eaff21d4b_prof);

    }

    // line 26
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_8d26838cf11dec069b17a302955dd29889908bd153d7ea29221cf8433f1d7d46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d26838cf11dec069b17a302955dd29889908bd153d7ea29221cf8433f1d7d46->enter($__internal_8d26838cf11dec069b17a302955dd29889908bd153d7ea29221cf8433f1d7d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 27
        echo "<script>
    eccube.classCategories = ";
        // line 28
        echo twig_jsonencode_filter($this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "class_categories", array()));
        echo ";

    // 規格2に選択肢を割り当てる。
    function fnSetClassCategories(form, classcat_id2_selected) {
        var \$form = \$(form);
        var product_id = \$form.find('input[name=product_id]').val();
        var \$sele1 = \$form.find('select[name=classcategory_id1]');
        var \$sele2 = \$form.find('select[name=classcategory_id2]');
        eccube.setClassCategories(\$form, product_id, \$sele1, \$sele2, classcat_id2_selected);
    }

    ";
        // line 39
        if ($this->getAttribute(($context["form"] ?? null), "classcategory_id2", array(), "any", true, true)) {
            // line 40
            echo "    fnSetClassCategories(
            document.form1, ";
            // line 41
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "classcategory_id2", array()), "vars", array()), "value", array()));
            echo "
    );
    ";
        } elseif ($this->getAttribute(        // line 43
($context["form"] ?? null), "classcategory_id1", array(), "any", true, true)) {
            // line 44
            echo "          eccube.checkStock(document.form1, ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "id", array()), "html", null, true);
            echo ", ";
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "classcategory_id1", array()), "vars", array()), "value", array()));
            echo ", null);
    ";
        }
        // line 46
        echo "</script>

<script>
\$(function(){
    \$('.carousel').slick({
        infinite: false,
        speed: 300,
        prevArrow:'<button type=\"button\" class=\"slick-prev\"><span class=\"angle-circle\"><svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></span></button>',
        nextArrow:'<button type=\"button\" class=\"slick-next\"><span class=\"angle-circle\"><svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></span></button>',
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            }
        ]
    });

    \$('.slides').slick({
        dots: true,
        arrows: false,
        speed: 300,
        customPaging: function(slider, i) {
            return '<button class=\"thumbnail\">' + \$(slider.\$slides[i]).find('img').prop('outerHTML') + '</button>';
        }
    });

    \$('#favorite').click(function() {
        \$('#mode').val('add_favorite');
    });

    \$('#add-cart').click(function() {
        \$('#mode').val('add_cart');
    });

    // bfcache無効化
    \$(window).bind('pageshow', function(event) {
        if (event.originalEvent.persisted) {
            location.reload(true);
        }
    });
});
</script>

";
        
        $__internal_8d26838cf11dec069b17a302955dd29889908bd153d7ea29221cf8433f1d7d46->leave($__internal_8d26838cf11dec069b17a302955dd29889908bd153d7ea29221cf8433f1d7d46_prof);

    }

    // line 96
    public function block_main($context, array $blocks = array())
    {
        $__internal_78bf11277d6fcba7b111ba7a3ef42210a8ebf1ec107eac4ae224d2bd2e92f153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78bf11277d6fcba7b111ba7a3ef42210a8ebf1ec107eac4ae224d2bd2e92f153->enter($__internal_78bf11277d6fcba7b111ba7a3ef42210a8ebf1ec107eac4ae224d2bd2e92f153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 97
        echo "    ";
        // line 110
        echo "
    <!-- ▼item_detail▼ -->
    <div id=\"item_detail\">
        <div id=\"detail_wrap\" class=\"row\">
            <!--★画像★-->
            <div id=\"item_photo_area\" class=\"col-sm-6\">
                <div id=\"detail_image_box__slides\" class=\"slides\">
                    ";
        // line 117
        if ((twig_length_filter($this->env, $this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "ProductImage", array())) > 0)) {
            // line 118
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "ProductImage", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["ProductImage"]) {
                // line 119
                echo "                        <div id=\"detail_image_box__item--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct($context["ProductImage"]), "html", null, true);
                echo "\"/></div>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductImage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "                    ";
        } else {
            // line 122
            echo "                        <div id=\"detail_image_box__item\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "image_save_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct(""), "html", null, true);
            echo "\"/></div>
                    ";
        }
        // line 124
        echo "                </div>
            </div>

            <section id=\"item_detail_area\" class=\"col-sm-6\">

                <!--★商品名★-->
                <h3 id=\"detail_description_box__name\" class=\"item_name\">";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "name", array()), "html", null, true);
        echo "</h3>
                <div id=\"detail_description_box__body\" class=\"item_detail\">

                    ";
        // line 133
        if ( !twig_test_empty($this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "ProductTag", array()))) {
            // line 134
            echo "                        <!--▼商品タグ-->
                        <div id=\"product_tag_box\" class=\"product_tag\">
                            ";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "ProductTag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductTag"]) {
                // line 137
                echo "                                <span id=\"product_tag_box__product_tag--";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ProductTag"], "Tag", array()), "id", array()), "html", null, true);
                echo "\" class=\"product_tag_list\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ProductTag"], "Tag", array()), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductTag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "                        </div>
                        <hr>
                        <!--▲商品タグ-->
                    ";
        }
        // line 143
        echo "
                    <!--★通常価格★-->
                    ";
        // line 145
        if ($this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "hasProductClass", array())) {
            // line 146
            if (( !(null === $this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "getPrice01Min", array())) && ($this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "getPrice01IncTaxMin", array()) == $this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "getPrice01IncTaxMax", array())))) {
                // line 147
                echo "                        <p id=\"detail_description_box__class_normal_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "getPrice01IncTaxMin", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                        ";
            } elseif (( !(null === $this->getAttribute(            // line 148
($context["Product"] ?? $this->getContext($context, "Product")), "getPrice01Min", array())) &&  !(null === $this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "getPrice01Max", array())))) {
                // line 149
                echo "                        <p id=\"detail_description_box__class_normal_range_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "getPrice01IncTaxMin", array())), "html", null, true);
                echo " ～ ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "getPrice01IncTaxMax", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                        ";
            }
            // line 151
            echo "                    ";
        } else {
            // line 152
            if ( !(null === $this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "getPrice01Max", array()))) {
                // line 153
                echo "                        <p id=\"detail_description_box__normal_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "getPrice01IncTaxMin", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                        ";
            }
            // line 155
            echo "                    ";
        }
        // line 157
        echo "<!--★販売価格★-->
                    ";
        // line 158
        if ($this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "hasProductClass", array())) {
            // line 159
            if (($this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "getPrice02IncTaxMin", array()) == $this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "getPrice02IncTaxMax", array()))) {
                // line 160
                echo "                        <p id=\"detail_description_box__class_sale_price\" class=\"sale_price text-primary\"> <span class=\"price02_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "getPrice02IncTaxMin", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                        ";
            } else {
                // line 162
                echo "                        <p id=\"detail_description_box__class_range_sale_price\" class=\"sale_price text-primary\"> <span class=\"price02_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "getPrice02IncTaxMin", array())), "html", null, true);
                echo " ～ ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "getPrice02IncTaxMax", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                        ";
            }
            // line 164
            echo "                    ";
        } else {
            // line 165
            echo "<p id=\"detail_description_box__sale_price\" class=\"sale_price text-primary\"> <span class=\"price02_default\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "getPrice02IncTaxMin", array())), "html", null, true);
            echo "</span> <span class=\"small\">税込</span></p>
                    ";
        }
        // line 168
        echo "<!--▼商品コード-->
                    <p id=\"detail_description_box__item_range_code\" class=\"item_code\">商品コード： <span id=\"item_code_default\">
                        ";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "code_min", array()), "html", null, true);
        echo "
                        ";
        // line 171
        if (($this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "code_min", array()) != $this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "code_max", array()))) {
            echo " ～ ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "code_max", array()), "html", null, true);
        }
        // line 172
        echo "                        </span> </p>
                    <!--▲商品コード-->

                    <!-- ▼関連カテゴリ▼ -->
                    <div id=\"relative_category_box\" class=\"relative_cat\">
                        <p>関連カテゴリ</p>
                          ";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "ProductCategories", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ProductCategory"]) {
            // line 179
            echo "                        <ol id=\"relative_category_box__relative_category--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ProductCategory"], "product_id", array()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                            ";
            // line 180
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["ProductCategory"], "Category", array()), "path", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                // line 181
                echo "                            <li><a id=\"relative_category_box__relative_category--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ProductCategory"], "product_id", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "id", array()), "html", null, true);
                echo "\" href=\"";
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_list");
                echo "?category_id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "name", array()), "html", null, true);
                echo "</a></li>
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "                        </ol>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "                    </div>
                    <!-- ▲関連カテゴリ▲ -->

                    <form action=\"?\" method=\"post\" id=\"form1\" name=\"form1\">
                        <!--▼買い物かご-->
                        <div id=\"detail_cart_box\" class=\"cart_area\">
                            ";
        // line 191
        if ($this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "stock_find", array())) {
            // line 192
            echo "
                                ";
            // line 194
            echo "                                ";
            if ($this->getAttribute(($context["form"] ?? null), "classcategory_id1", array(), "any", true, true)) {
                // line 195
                echo "                                <ul id=\"detail_cart_box__cart_class_category_id\" class=\"classcategory_list\">
                                    ";
                // line 197
                echo "                                    <li>
                                        ";
                // line 198
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "classcategory_id1", array()), 'widget');
                echo "
                                        ";
                // line 199
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "classcategory_id1", array()), 'errors');
                echo "
                                    </li>
                                    ";
                // line 202
                echo "                                    ";
                if ($this->getAttribute(($context["form"] ?? null), "classcategory_id2", array(), "any", true, true)) {
                    // line 203
                    echo "                                        <li>
                                            ";
                    // line 204
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "classcategory_id2", array()), 'widget');
                    echo "
                                            ";
                    // line 205
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "classcategory_id2", array()), 'errors');
                    echo "
                                        </li>
                                     ";
                }
                // line 208
                echo "                                </ul>
                                ";
            }
            // line 210
            echo "
                                ";
            // line 212
            echo "                                <dl id=\"detail_cart_box__cart_quantity\" class=\"quantity\">
                                    <dt>数量</dt>
                                    <dd>
                                        ";
            // line 215
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantity", array()), 'widget');
            echo "
                                        ";
            // line 216
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantity", array()), 'errors');
            echo "
                                    </dd>
                                </dl>

                                <div class=\"extra-form\">
                                    ";
            // line 221
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "getIterator", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 222
                echo "                                        ";
                if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                    // line 223
                    echo "                                            ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'row');
                    echo "
                                        ";
                }
                // line 225
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 226
            echo "                                </div>

                                ";
            // line 229
            echo "                                <div id=\"detail_cart_box__button_area\" class=\"btn_area\">
                                    <ul id=\"detail_cart_box__insert_button\" class=\"row\">
                                        <li class=\"col-xs-12 col-sm-8\"><button type=\"submit\" id=\"add-cart\" class=\"btn btn-primary btn-block prevention-btn prevention-mask\">カートに入れる</button></li>
                                    </ul>
                                    ";
            // line 234
            echo "                                    ";
            if (($this->getAttribute(($context["BaseInfo"] ?? $this->getContext($context, "BaseInfo")), "option_favorite_product", array()) == 1)) {
                // line 235
                echo "                                        <ul id=\"detail_cart_box__favorite_button\" class=\"row\">
                                            ";
                // line 236
                if ((($context["is_favorite"] ?? $this->getContext($context, "is_favorite")) == false)) {
                    // line 237
                    echo "                                                <li class=\"col-xs-12 col-sm-8\"><button type=\"submit\" id=\"favorite\" class=\"btn btn-info btn-block prevention-btn prevention-mask\">お気に入りに追加</button></li>
                                            ";
                } else {
                    // line 239
                    echo "                                                <li class=\"col-xs-12 col-sm-8\"><button type=\"submit\" id=\"favorite\" class=\"btn btn-info btn-block\" disabled=\"disabled\">お気に入りに追加済みです</button></li>
                                            ";
                }
                // line 241
                echo "                                        </ul>
                                    ";
            }
            // line 243
            echo "                                </div> ";
            // line 244
            echo "                            ";
        } else {
            // line 245
            echo "                                ";
            // line 246
            echo "                                <div id=\"detail_cart_box__button_area\" class=\"btn_area\">
                                    <ul class=\"row\">
                                        <li class=\"col-xs-12 col-sm-8\"><button type=\"button\" class=\"btn btn-default btn-block\" disabled=\"disabled\">ただいま品切れ中です</button></li>
                                    </ul>
                                    ";
            // line 251
            echo "                                    ";
            if (($this->getAttribute(($context["BaseInfo"] ?? $this->getContext($context, "BaseInfo")), "option_favorite_product", array()) == 1)) {
                // line 252
                echo "                                        <ul id=\"detail_cart_box__favorite_button\" class=\"row\">
                                            ";
                // line 253
                if ((($context["is_favorite"] ?? $this->getContext($context, "is_favorite")) == false)) {
                    // line 254
                    echo "                                                <li class=\"col-xs-12 col-sm-8\"><button type=\"submit\" id=\"favorite\" class=\"btn btn-info btn-block prevention-btn prevention-mask\">お気に入りに追加</button></li>
                                            ";
                } else {
                    // line 256
                    echo "                                                <li class=\"col-xs-12 col-sm-8\"><button type=\"submit\" id=\"favorite\" class=\"btn btn-info btn-block\" disabled=\"disabled\">お気に入りに追加済みです</button></li>
                                            ";
                }
                // line 258
                echo "                                        </ul>
                                    ";
            }
            // line 260
            echo "                                </div> ";
            // line 261
            echo "                            ";
        }
        echo " ";
        // line 262
        echo "                        </div>
                        <!--▲買い物かご-->
                        ";
        // line 264
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
                    </form>

                    <!--★商品説明★-->
                    <p id=\"detail_not_stock_box__description_detail\" class=\"item_comment\">";
        // line 268
        echo nl2br($this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "description_detail", array()));
        echo "</p>

                </div>
                <!-- /.item_detail -->

            </section>
            <!--詳細ここまで-->
        </div>

        ";
        // line 278
        echo "        ";
        if ($this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "freearea", array())) {
            // line 279
            echo "        <div id=\"sub_area\" class=\"row\">
            <div class=\"col-sm-10 col-sm-offset-1\">
                <div id=\"detail_free_box__freearea\" class=\"freearea\">";
            // line 281
            echo twig_include($this->env, $context, twig_template_from_string($this->env, $this->getAttribute(($context["Product"] ?? $this->getContext($context, "Product")), "freearea", array())));
            echo "</div>
            </div>
        </div>
        ";
        }
        // line 285
        echo "    </div>
    <!-- ▲item_detail▲ -->
";
        
        $__internal_78bf11277d6fcba7b111ba7a3ef42210a8ebf1ec107eac4ae224d2bd2e92f153->leave($__internal_78bf11277d6fcba7b111ba7a3ef42210a8ebf1ec107eac4ae224d2bd2e92f153_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__ab469259620e43396fbf49785f60624ffd3afdd6f8c64c1066bb16196996f5bc";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  613 => 285,  606 => 281,  602 => 279,  599 => 278,  587 => 268,  580 => 264,  576 => 262,  572 => 261,  570 => 260,  566 => 258,  562 => 256,  558 => 254,  556 => 253,  553 => 252,  550 => 251,  544 => 246,  542 => 245,  539 => 244,  537 => 243,  533 => 241,  529 => 239,  525 => 237,  523 => 236,  520 => 235,  517 => 234,  511 => 229,  507 => 226,  501 => 225,  495 => 223,  492 => 222,  488 => 221,  480 => 216,  476 => 215,  471 => 212,  468 => 210,  464 => 208,  458 => 205,  454 => 204,  451 => 203,  448 => 202,  443 => 199,  439 => 198,  436 => 197,  433 => 195,  430 => 194,  427 => 192,  425 => 191,  417 => 185,  402 => 183,  375 => 181,  358 => 180,  351 => 179,  334 => 178,  326 => 172,  321 => 171,  317 => 170,  313 => 168,  307 => 165,  304 => 164,  296 => 162,  290 => 160,  288 => 159,  286 => 158,  283 => 157,  280 => 155,  274 => 153,  272 => 152,  269 => 151,  261 => 149,  259 => 148,  254 => 147,  252 => 146,  250 => 145,  246 => 143,  240 => 139,  229 => 137,  225 => 136,  221 => 134,  219 => 133,  213 => 130,  205 => 124,  197 => 122,  194 => 121,  173 => 119,  155 => 118,  153 => 117,  144 => 110,  142 => 97,  136 => 96,  81 => 46,  73 => 44,  71 => 43,  66 => 41,  63 => 40,  61 => 39,  47 => 28,  44 => 27,  38 => 26,  31 => 22,  29 => 24,  11 => 22,);
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

{% set body_class = 'product_page' %}

{% block javascript %}
<script>
    eccube.classCategories = {{ Product.class_categories|json_encode|raw }};

    // 規格2に選択肢を割り当てる。
    function fnSetClassCategories(form, classcat_id2_selected) {
        var \$form = \$(form);
        var product_id = \$form.find('input[name=product_id]').val();
        var \$sele1 = \$form.find('select[name=classcategory_id1]');
        var \$sele2 = \$form.find('select[name=classcategory_id2]');
        eccube.setClassCategories(\$form, product_id, \$sele1, \$sele2, classcat_id2_selected);
    }

    {% if form.classcategory_id2 is defined %}
    fnSetClassCategories(
            document.form1, {{ form.classcategory_id2.vars.value|json_encode|raw }}
    );
    {% elseif form.classcategory_id1 is defined %}
          eccube.checkStock(document.form1, {{ Product.id }}, {{ form.classcategory_id1.vars.value|json_encode|raw }}, null);
    {% endif %}
</script>

<script>
\$(function(){
    \$('.carousel').slick({
        infinite: false,
        speed: 300,
        prevArrow:'<button type=\"button\" class=\"slick-prev\"><span class=\"angle-circle\"><svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></span></button>',
        nextArrow:'<button type=\"button\" class=\"slick-next\"><span class=\"angle-circle\"><svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></span></button>',
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            }
        ]
    });

    \$('.slides').slick({
        dots: true,
        arrows: false,
        speed: 300,
        customPaging: function(slider, i) {
            return '<button class=\"thumbnail\">' + \$(slider.\$slides[i]).find('img').prop('outerHTML') + '</button>';
        }
    });

    \$('#favorite').click(function() {
        \$('#mode').val('add_favorite');
    });

    \$('#add-cart').click(function() {
        \$('#mode').val('add_cart');
    });

    // bfcache無効化
    \$(window).bind('pageshow', function(event) {
        if (event.originalEvent.persisted) {
            location.reload(true);
        }
    });
});
</script>

{% endblock %}

{% block main %}
    {# todo ブロック化}
    <div id=\"topicpath\" class=\"row\">
        {% for ProductCategory in Product.ProductCategories %}
        <ol>
            <li><a href=\"{{ url('product_list') }}\">全商品</a></li>
            {% for Category in ProductCategory.Category.path %}
                <li><a href=\"{{ url('product_list') }}?category_id={{ Category.id }}\">{{ Category.name }}</a></li>
            {% endfor %}
            <li>{{ Product.name }}</li>
        </ol>
        {% endfor %}
    </div>
    #}

    <!-- ▼item_detail▼ -->
    <div id=\"item_detail\">
        <div id=\"detail_wrap\" class=\"row\">
            <!--★画像★-->
            <div id=\"item_photo_area\" class=\"col-sm-6\">
                <div id=\"detail_image_box__slides\" class=\"slides\">
                    {% if Product.ProductImage|length > 0 %}
                        {% for ProductImage in Product.ProductImage %}
                        <div id=\"detail_image_box__item--{{ loop.index }}\"><img src=\"{{ app.config.image_save_urlpath }}/{{ ProductImage|no_image_product }}\"/></div>
                        {% endfor %}
                    {% else %}
                        <div id=\"detail_image_box__item\"><img src=\"{{ app.config.image_save_urlpath }}/{{ ''|no_image_product }}\"/></div>
                    {% endif %}
                </div>
            </div>

            <section id=\"item_detail_area\" class=\"col-sm-6\">

                <!--★商品名★-->
                <h3 id=\"detail_description_box__name\" class=\"item_name\">{{ Product.name }}</h3>
                <div id=\"detail_description_box__body\" class=\"item_detail\">

                    {% if Product.ProductTag is not empty %}
                        <!--▼商品タグ-->
                        <div id=\"product_tag_box\" class=\"product_tag\">
                            {% for ProductTag in Product.ProductTag %}
                                <span id=\"product_tag_box__product_tag--{{ ProductTag.Tag.id }}\" class=\"product_tag_list\">{{ ProductTag.Tag }}</span>
                            {% endfor %}
                        </div>
                        <hr>
                        <!--▲商品タグ-->
                    {% endif %}

                    <!--★通常価格★-->
                    {% if Product.hasProductClass -%}
                        {% if Product.getPrice01Min is not null and Product.getPrice01IncTaxMin == Product.getPrice01IncTaxMax %}
                        <p id=\"detail_description_box__class_normal_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">{{ Product.getPrice01IncTaxMin|price }}</span> <span class=\"small\">税込</span></p>
                        {% elseif Product.getPrice01Min is not null and Product.getPrice01Max is not null %}
                        <p id=\"detail_description_box__class_normal_range_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">{{ Product.getPrice01IncTaxMin|price }} ～ {{ Product.getPrice01IncTaxMax|price }}</span> <span class=\"small\">税込</span></p>
                        {% endif %}
                    {% else -%}
                        {% if Product.getPrice01Max is not null %}
                        <p id=\"detail_description_box__normal_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">{{ Product.getPrice01IncTaxMin|price }}</span> <span class=\"small\">税込</span></p>
                        {% endif %}
                    {% endif -%}

                    <!--★販売価格★-->
                    {% if Product.hasProductClass -%}
                        {% if Product.getPrice02IncTaxMin == Product.getPrice02IncTaxMax %}
                        <p id=\"detail_description_box__class_sale_price\" class=\"sale_price text-primary\"> <span class=\"price02_default\">{{ Product.getPrice02IncTaxMin|price }}</span> <span class=\"small\">税込</span></p>
                        {% else %}
                        <p id=\"detail_description_box__class_range_sale_price\" class=\"sale_price text-primary\"> <span class=\"price02_default\">{{ Product.getPrice02IncTaxMin|price }} ～ {{  Product.getPrice02IncTaxMax|price }}</span> <span class=\"small\">税込</span></p>
                        {% endif %}
                    {% else -%}
                        <p id=\"detail_description_box__sale_price\" class=\"sale_price text-primary\"> <span class=\"price02_default\">{{ Product.getPrice02IncTaxMin|price }}</span> <span class=\"small\">税込</span></p>
                    {% endif -%}

                    <!--▼商品コード-->
                    <p id=\"detail_description_box__item_range_code\" class=\"item_code\">商品コード： <span id=\"item_code_default\">
                        {{ Product.code_min }}
                        {% if Product.code_min != Product.code_max %} ～ {{ Product.code_max }}{% endif %}
                        </span> </p>
                    <!--▲商品コード-->

                    <!-- ▼関連カテゴリ▼ -->
                    <div id=\"relative_category_box\" class=\"relative_cat\">
                        <p>関連カテゴリ</p>
                          {% for ProductCategory in Product.ProductCategories %}
                        <ol id=\"relative_category_box__relative_category--{{ ProductCategory.product_id }}_{{ loop.index }}\">
                            {% for Category in ProductCategory.Category.path %}
                            <li><a id=\"relative_category_box__relative_category--{{ ProductCategory.product_id }}_{{ loop.parent.loop.index }}_{{ Category.id }}\" href=\"{{ url('product_list') }}?category_id={{ Category.id }}\">{{ Category.name }}</a></li>
                            {% endfor %}
                        </ol>
                        {% endfor %}
                    </div>
                    <!-- ▲関連カテゴリ▲ -->

                    <form action=\"?\" method=\"post\" id=\"form1\" name=\"form1\">
                        <!--▼買い物かご-->
                        <div id=\"detail_cart_box\" class=\"cart_area\">
                            {% if Product.stock_find %}

                                {# 規格 #}
                                {% if form.classcategory_id1 is defined %}
                                <ul id=\"detail_cart_box__cart_class_category_id\" class=\"classcategory_list\">
                                    {# 規格1 #}
                                    <li>
                                        {{ form_widget(form.classcategory_id1) }}
                                        {{ form_errors(form.classcategory_id1) }}
                                    </li>
                                    {# 規格2 #}
                                    {% if form.classcategory_id2 is defined %}
                                        <li>
                                            {{ form_widget(form.classcategory_id2) }}
                                            {{ form_errors(form.classcategory_id2) }}
                                        </li>
                                     {% endif %}
                                </ul>
                                {% endif %}

                                {# 数量 #}
                                <dl id=\"detail_cart_box__cart_quantity\" class=\"quantity\">
                                    <dt>数量</dt>
                                    <dd>
                                        {{ form_widget(form.quantity) }}
                                        {{ form_errors(form.quantity) }}
                                    </dd>
                                </dl>

                                <div class=\"extra-form\">
                                    {% for f in form.getIterator %}
                                        {% if f.vars.name matches '[^plg*]' %}
                                            {{ form_row(f) }}
                                        {% endif %}
                                    {% endfor %}
                                </div>

                                {# カートボタン #}
                                <div id=\"detail_cart_box__button_area\" class=\"btn_area\">
                                    <ul id=\"detail_cart_box__insert_button\" class=\"row\">
                                        <li class=\"col-xs-12 col-sm-8\"><button type=\"submit\" id=\"add-cart\" class=\"btn btn-primary btn-block prevention-btn prevention-mask\">カートに入れる</button></li>
                                    </ul>
                                    {#Favorite product button#}
                                    {% if BaseInfo.option_favorite_product == 1 %}
                                        <ul id=\"detail_cart_box__favorite_button\" class=\"row\">
                                            {% if is_favorite == false %}
                                                <li class=\"col-xs-12 col-sm-8\"><button type=\"submit\" id=\"favorite\" class=\"btn btn-info btn-block prevention-btn prevention-mask\">お気に入りに追加</button></li>
                                            {% else %}
                                                <li class=\"col-xs-12 col-sm-8\"><button type=\"submit\" id=\"favorite\" class=\"btn btn-info btn-block\" disabled=\"disabled\">お気に入りに追加済みです</button></li>
                                            {% endif %}
                                        </ul>
                                    {% endif %}
                                </div> {#End div#detail_cart_box__button_area #}
                            {% else %}
                                {# 在庫がない場合は品切れボタンを表示 #}
                                <div id=\"detail_cart_box__button_area\" class=\"btn_area\">
                                    <ul class=\"row\">
                                        <li class=\"col-xs-12 col-sm-8\"><button type=\"button\" class=\"btn btn-default btn-block\" disabled=\"disabled\">ただいま品切れ中です</button></li>
                                    </ul>
                                    {#Favorite product button#}
                                    {% if BaseInfo.option_favorite_product == 1 %}
                                        <ul id=\"detail_cart_box__favorite_button\" class=\"row\">
                                            {% if is_favorite == false %}
                                                <li class=\"col-xs-12 col-sm-8\"><button type=\"submit\" id=\"favorite\" class=\"btn btn-info btn-block prevention-btn prevention-mask\">お気に入りに追加</button></li>
                                            {% else %}
                                                <li class=\"col-xs-12 col-sm-8\"><button type=\"submit\" id=\"favorite\" class=\"btn btn-info btn-block\" disabled=\"disabled\">お気に入りに追加済みです</button></li>
                                            {% endif %}
                                        </ul>
                                    {% endif %}
                                </div> {#End div#detail_cart_box__button_area #}
                            {% endif %} {#End stock find#}
                        </div>
                        <!--▲買い物かご-->
                        {{ form_rest(form) }}
                    </form>

                    <!--★商品説明★-->
                    <p id=\"detail_not_stock_box__description_detail\" class=\"item_comment\">{{ Product.description_detail|raw|nl2br }}</p>

                </div>
                <!-- /.item_detail -->

            </section>
            <!--詳細ここまで-->
        </div>

        {# フリーエリア #}
        {% if Product.freearea %}
        <div id=\"sub_area\" class=\"row\">
            <div class=\"col-sm-10 col-sm-offset-1\">
                <div id=\"detail_free_box__freearea\" class=\"freearea\">{{ include(template_from_string(Product.freearea)) }}</div>
            </div>
        </div>
        {% endif %}
    </div>
    <!-- ▲item_detail▲ -->
{% endblock %}
", "__string_template__ab469259620e43396fbf49785f60624ffd3afdd6f8c64c1066bb16196996f5bc", "");
    }
}
