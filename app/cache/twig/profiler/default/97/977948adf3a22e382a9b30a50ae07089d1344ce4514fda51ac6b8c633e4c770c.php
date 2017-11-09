<?php

/* __string_template__ef53887b927f1041c934c6381600a516d128465f69d041af5142cff4c54a6577 */
class __TwigTemplate_9328e5a8be9620ec4d26c93da7b0183b156c2c2b07db0cdbdae08fb02b601518 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__ef53887b927f1041c934c6381600a516d128465f69d041af5142cff4c54a6577", 22);
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
        $__internal_c27b4957fa45d21fd56e2cb1982a2559582382e94ca851c195ce9a70f5858471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c27b4957fa45d21fd56e2cb1982a2559582382e94ca851c195ce9a70f5858471->enter($__internal_c27b4957fa45d21fd56e2cb1982a2559582382e94ca851c195ce9a70f5858471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__ef53887b927f1041c934c6381600a516d128465f69d041af5142cff4c54a6577"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c27b4957fa45d21fd56e2cb1982a2559582382e94ca851c195ce9a70f5858471->leave($__internal_c27b4957fa45d21fd56e2cb1982a2559582382e94ca851c195ce9a70f5858471_prof);

    }

    // line 24
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_a2b2d4c663f35d93798423748e18e156ce1b305276b883787d28d7451267c2f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b2d4c663f35d93798423748e18e156ce1b305276b883787d28d7451267c2f6->enter($__internal_a2b2d4c663f35d93798423748e18e156ce1b305276b883787d28d7451267c2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 25
        echo "<script>
\$(function() {

    \$('.delivery').on('change', function() {
        \$('#shopping-form').attr('action', '";
        // line 29
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("shopping_delivery");
        echo "').submit();
        return false;
    });

    \$('.payment').on('change', function() {
        \$('#shopping-form').attr('action', '";
        // line 34
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("shopping_payment");
        echo "').submit();
        return false;
    });

    \$('.btn-shipping').click(function() {
        \$('#shopping-form').attr('action', \$(this).attr('href')).submit();
        \$('#shopping-form').attr('action', '";
        // line 40
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("shopping_confirm");
        echo "');
        return false;
    });

    \$('.btn-shipping-edit').click(function() {
        \$('#shopping-form').attr('action', \$(this).attr('href')).submit();
        \$('#shopping-form').attr('action', '";
        // line 46
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("shopping_confirm");
        echo "');
        return false;
    });

    \$('.btn-shipping-multiple').click(function() {
        \$('#shopping-form').attr('action', \$(this).attr('href')).submit();
        \$('#shopping-form').attr('action', '";
        // line 52
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("shopping_confirm");
        echo "');
        return false;
    });

    ";
        // line 56
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER") == false)) {
            // line 57
            echo "        var ref = [];
        var name = [];
        var input = [];
        var customerin = [];

        \$('#customer').click(function() {
            // ref = \$('.customer-name01');
            var edit = \$('.customer-edit');
            var hidden = \$('.customer-in');

            \$(edit).each(function(index) {
                ref[index] = \$(this);
            });
            \$(hidden).each(function(index) {
                customerin[index] = \$(this);
            });
            \$(ref).each(function(index) {
                name[index] = \$(this).text();
            });
            \$(name).each(function(index) {
                input[index] = \$('<input id=\"edit' + index + '\" type=\"text\" />').val(name[index]);
            });
            \$(input).each(function(index) {
                ref[index].empty().append(input[index]);
            });

            \$('#customer').prop(\"disabled\", true);
            \$('.mod-button').show();
        });

        \$('#customer-ok').click(function() {
            \$(ref).each(function(index) {
                var nameAfter = input[index].val();
                ref[index].empty().text(nameAfter);
                customerin[index].val(nameAfter);
                input[index].remove();
            });

            var postData = {};
            \$('.customer-in').each(function() {
                postData[\$(this).attr('name')] = \$(this).val();
            });

            \$.ajax({
                url: \"";
            // line 101
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("shopping_customer");
            echo "\",
                type: 'POST',
                data: postData,
                dataType: 'json',
            }).done(function(){
            }).fail(function(){
                alert('更新に失敗しました。入力内容を確認してください。');
                \$(ref).each(function(index) {
                    ref[index].empty().text(name[index]);
                    input[index].remove();
                });
            });

            \$('#customer').prop(\"disabled\", false);
            \$('.mod-button').hide();
        });

        \$('#customer-cancel').click(function() {
            \$(ref).each(function(index) {
                ref[index].empty().text(name[index]);
                input[index].remove();
            });

            \$('#customer').prop(\"disabled\", false);
            \$('.mod-button').hide();
        });
    ";
        }
        // line 128
        echo "
});
</script>
";
        
        $__internal_a2b2d4c663f35d93798423748e18e156ce1b305276b883787d28d7451267c2f6->leave($__internal_a2b2d4c663f35d93798423748e18e156ce1b305276b883787d28d7451267c2f6_prof);

    }

    // line 133
    public function block_main($context, array $blocks = array())
    {
        $__internal_b441fc32aa5ac4c25ff457dca5dd5eaf9233a4819a6fec378af5f17e33125c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b441fc32aa5ac4c25ff457dca5dd5eaf9233a4819a6fec378af5f17e33125c12->enter($__internal_b441fc32aa5ac4c25ff457dca5dd5eaf9233a4819a6fec378af5f17e33125c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 134
        echo "    <h1 class=\"page-heading\">ご注文内容のご確認</h1>
    <div id=\"confirm_wrap\" class=\"container-fluid\">
        <div id=\"confirm_flow_box\" class=\"row\">
            <div id=\"confirm_flow_box__body\" class=\"col-md-12\">
                ";
        // line 138
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 139
            echo "                <div id=\"confirm_flow_box__flow_state\" class=\"flowline step3\">
                ";
        } else {
            // line 141
            echo "                <div id=\"confirm_flow_box__flow_state\" class=\"flowline step4\">
                ";
        }
        // line 143
        echo "                    <ul id=\"confirm_flow_box__flow_state_list\" class=\"clearfix\">
                    <li><span class=\"flow_number\">1</span><br>カートの商品</li>
                    ";
        // line 145
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 146
            echo "                        <li class=\"active\"><span class=\"flow_number\">2</span><br>ご注文内容確認</li>
                        <li><span class=\"flow_number\">3</span><br>完了</li>
                    ";
        } else {
            // line 149
            echo "                        <li><span class=\"flow_number\">2</span><br>お客様情報</li>
                        <li class=\"active\"><span class=\"flow_number\">3</span><br>ご注文内容確認</li>
                        <li><span class=\"flow_number\">4</span><br>完了</li>
                    ";
        }
        // line 153
        echo "                    </ul>
                </div>
                ";
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "eccube.front.error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 156
            echo "                    <div id=\"confirm_flow_box__message\" class=\"message\">
                        <p class=\"errormsg bg-danger\">
                            <svg class=\"cb cb-warning\"><use xlink:href=\"#cb-warning\" /></svg>";
            // line 158
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["error"]), "html", null, true));
            echo "
                        </p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "                    ";
        $context["productStr"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "eccube.front.request.product"), "method");
        // line 163
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "eccube.front.request.error"), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 164
            echo "                        ";
            $context["idx"] = $this->getAttribute($context["loop"], "index0", array());
            // line 165
            echo "                        ";
            if ($this->getAttribute(($context["productStr"] ?? null), ($context["idx"] ?? $this->getContext($context, "idx")), array(), "array", true, true)) {
                // line 166
                echo "                            <div id=\"cart_box__message--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"message\">
                                <p class=\"errormsg bg-danger\">
                                    <svg class=\"cb cb-warning\"><use xlink:href=\"#cb-warning\" /></svg>
                                    ";
                // line 169
                echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["error"], array("%product%" => $this->getAttribute(($context["productStr"] ?? $this->getContext($context, "productStr")), ($context["idx"] ?? $this->getContext($context, "idx")), array(), "array"))), "html", null, true));
                echo "
                                </p>
                            </div>
                        ";
            } else {
                // line 173
                echo "                            <div id=\"confirm_flow_box__message--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"message\">
                                <p class=\"errormsg bg-danger\">
                                    <svg class=\"cb cb-warning\"><use xlink:href=\"#cb-warning\" /></svg>";
                // line 175
                echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["error"]), "html", null, true));
                echo "
                                </p>
                            </div>
                        ";
            }
            // line 179
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "            </div><!-- /.col -->
        </div><!-- /.row -->
        <form id=\"shopping-form\" method=\"post\" action=\"";
        // line 182
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("shopping_confirm");
        echo "\">
            ";
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
            <div id=\"shopping_confirm\" class=\"row\">
                <div id=\"confirm_main\" class=\"col-sm-8\">
                    <div id=\"cart_box\" class=\"cart_item table\">
                        <div id=\"cart_box_list\" class=\"tbody\">
                            ";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "orderDetails", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["orderDetail"]) {
            // line 189
            echo "                            <div id=\"cart_box_list__item_box--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_box tr\">
                                <div id=\"cart_box_list__item--";
            // line 190
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"td table\">
                                    <div id=\"cart_box_list__photo--";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_photo\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "image_save_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct($this->getAttribute($this->getAttribute($context["orderDetail"], "product", array()), "MainListImage", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["orderDetail"], "productName", array()), "html", null, true);
            echo "\" /></div>
                                    <dl id=\"cart_box_list__detail--";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_detail\">
                                        <dt id=\"cart_box_list__name--";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_name text-default\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["orderDetail"], "productName", array()), "html", null, true);
            echo "</dt>
                                        <dd id=\"cart_box_list__class_category--";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_pattern small\">
                                            ";
            // line 195
            if ($this->getAttribute($this->getAttribute($context["orderDetail"], "productClass", array()), "classCategory1", array())) {
                // line 196
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetail"], "productClass", array()), "classCategory1", array()), "className", array()), "html", null, true);
                echo "：";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["orderDetail"], "productClass", array()), "classCategory1", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 198
            echo "                                            ";
            if ($this->getAttribute($this->getAttribute($context["orderDetail"], "productClass", array()), "classCategory2", array())) {
                // line 199
                echo "                                                <br>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetail"], "productClass", array()), "classCategory2", array()), "className", array()), "html", null, true);
                echo "：";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["orderDetail"], "productClass", array()), "classCategory2", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 201
            echo "                                        </dd>
                                        <dd id=\"cart_box_list__price--";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_price\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["orderDetail"], "priceIncTax", array())), "html", null, true);
            echo " × ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["orderDetail"], "quantity", array())), "html", null, true);
            echo "</dd>
                                        <dd id=\"cart_box_list__subtotal--";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_subtotal\">小計：";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["orderDetail"], "totalPrice", array())), "html", null, true);
            echo "</dd>
                                    </dl>
                                </div>
                            </div><!--/item_box-->
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderDetail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "                        </div>
                    </div><!--/cart_item-->
                    <p><a id=\"confirm_box__quantity_edit_button\" href=\"";
        // line 210
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("cart");
        echo "\" class=\"btn btn-default btn-sm\">数量を変更または削除する</a></p>
                    <h2 class=\"heading02\">お客様情報</h2>
                    <div id=\"customer_detail_box\" class=\"column is-edit\">
                        <p id=\"customer_detail_box__customer_address\" class=\"address\"><span class=\"customer-edit customer-name01\">";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "name01", array()), "html", null, true);
        echo "</span> <span class=\"customer-edit customer-name02\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "name02", array()), "html", null, true);
        echo "</span> 様<br>
                        〒<span class=\"customer-edit customer-zip01\">";
        // line 214
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "zip01", array()), "html", null, true);
        echo "</span>-<span class=\"customer-edit customer-zip02\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "zip02", array()), "html", null, true);
        echo "</span> <span class=\"customer-edit customer-pref\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "pref", array()), "html", null, true);
        echo "</span><span class=\"customer-edit customer-addr01\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "addr01", array()), "html", null, true);
        echo "</span><span class=\"customer-edit customer-addr02\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "addr02", array()), "html", null, true);
        echo "</span><br>
                        <span class=\"customer-edit customer-tel01\">";
        // line 215
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "tel01", array()), "html", null, true);
        echo "</span>-<span class=\"customer-edit customer-tel02\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "tel02", array()), "html", null, true);
        echo "</span>-<span class=\"customer-edit customer-tel03\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "tel03", array()), "html", null, true);
        echo "</span></p>
                        ";
        // line 216
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER") == false)) {
            // line 217
            echo "                            <div class=\"customer-edit customer-email\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "email", array()), "html", null, true);
            echo "</div>
                            <div class=\"customer-edit customer-company_name\">";
            // line 218
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "companyName", array()), "html", null, true);
            echo "</div>
                            <div class=\"mod-button\" style=\"display:none;\">
                                <span id=\"customer-ok\"><button type=\"button\" class=\"btn btn-default btn-sm\">OK</button></span>
                                <span id=\"customer-cancel\"><button type=\"button\" class=\"btn btn-default btn-sm\">キャンセル</button></span>
                            </div>
                            <p class=\"btn_edit\"><button type=\"button\" id=\"customer\" class=\"btn btn-default btn-sm\">変更</button></p>
                            <input type=\"hidden\" id=\"customer-name01\" class=\"customer-in\" name=\"customer_name01\" value=\"";
            // line 224
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "name01", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-name02\" class=\"customer-in\" name=\"customer_name02\" value=\"";
            // line 225
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "name02", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-zip01\" class=\"customer-in\" name=\"customer_zip01\" value=\"";
            // line 226
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "zip01", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-zip02\" class=\"customer-in\" name=\"customer_zip02\" value=\"";
            // line 227
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "zip02", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-pref\" class=\"customer-in\" name=\"customer_pref\" value=\"";
            // line 228
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "pref", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-addr01\" class=\"customer-in\" name=\"customer_addr01\" value=\"";
            // line 229
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "addr01", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-addr02\" class=\"customer-in\" name=\"customer_addr02\" value=\"";
            // line 230
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "addr02", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-tel01\" class=\"customer-in\" name=\"customer_tel01\" value=\"";
            // line 231
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "tel01", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-tel02\" class=\"customer-in\" name=\"customer_tel02\" value=\"";
            // line 232
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "tel02", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-tel03\" class=\"customer-in\" name=\"customer_tel03\" value=\"";
            // line 233
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "tel03", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-email\" class=\"customer-in\" name=\"customer_email\" value=\"";
            // line 234
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "email", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-company-name\" class=\"customer-in\" name=\"customer_company_name\" value=\"";
            // line 235
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "companyName", array()), "html", null, true);
            echo "\">
                        ";
        }
        // line 237
        echo "                    </div>

                    <h2 class=\"heading02\">配送情報</h2>
                    ";
        // line 240
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "shippings", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["shipping"]) {
            // line 241
            echo "                        ";
            $context["idx"] = $this->getAttribute($context["loop"], "index0", array());
            // line 242
            echo "                        <div id=\"shipping_confirm_box--";
            echo twig_escape_filter($this->env, ($context["idx"] ?? $this->getContext($context, "idx")), "html", null, true);
            echo "\" class=\"column is-edit\">
                            <h3>お届け先";
            // line 243
            if ($this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "multiple", array())) {
                echo "(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ")";
            }
            echo "</h3>
                            <div id=\"shipping_confirm_box__body--";
            // line 244
            echo twig_escape_filter($this->env, ($context["idx"] ?? $this->getContext($context, "idx")), "html", null, true);
            echo "\" class=\"cart_item table\">
                                <div id=\"shipping_confirm_box__list--";
            // line 245
            echo twig_escape_filter($this->env, ($context["idx"] ?? $this->getContext($context, "idx")), "html", null, true);
            echo "\" class=\"tbody\">
                                ";
            // line 246
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["shipping"], "shipmentItems", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["shipmentItem"]) {
                // line 247
                echo "                                    <div id=\"shipping_confirm_box__item--";
                echo twig_escape_filter($this->env, ($context["idx"] ?? $this->getContext($context, "idx")), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "id", array()), "html", null, true);
                echo "\" class=\"item_box tr\">
                                        <div id=\"shipping_box__body_inner--";
                // line 248
                echo twig_escape_filter($this->env, ($context["idx"] ?? $this->getContext($context, "idx")), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "id", array()), "html", null, true);
                echo "\" class=\"td table\">
                                            <div id=\"shipping_box__photo--";
                // line 249
                echo twig_escape_filter($this->env, ($context["idx"] ?? $this->getContext($context, "idx")), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "id", array()), "html", null, true);
                echo "\" class=\"item_photo\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct($this->getAttribute($this->getAttribute($context["shipmentItem"], "product", array()), "MainListImage", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "productName", array()), "html", null, true);
                echo "\" /></div>
                                            <dl id=\"shipping_box__detail--";
                // line 250
                echo twig_escape_filter($this->env, ($context["idx"] ?? $this->getContext($context, "idx")), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "id", array()), "html", null, true);
                echo "\" class=\"item_detail\">
                                                <dt id=\"shipping_box__name--";
                // line 251
                echo twig_escape_filter($this->env, ($context["idx"] ?? $this->getContext($context, "idx")), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "id", array()), "html", null, true);
                echo "\" class=\"item_name text-default\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "productName", array()), "html", null, true);
                echo "</dt>
                                                <dd id=\"shipping_box__class_category--";
                // line 252
                echo twig_escape_filter($this->env, ($context["idx"] ?? $this->getContext($context, "idx")), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "id", array()), "html", null, true);
                echo "\" class=\"item_pattern small\">
                                                    ";
                // line 253
                if ($this->getAttribute($this->getAttribute($context["shipmentItem"], "productClass", array()), "classCategory1", array())) {
                    // line 254
                    echo "                                                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItem"], "productClass", array()), "classCategory1", array()), "className", array()), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["shipmentItem"], "productClass", array()), "classCategory1", array()), "html", null, true);
                    echo "
                                                    ";
                }
                // line 256
                echo "                                                    ";
                if ($this->getAttribute($this->getAttribute($context["shipmentItem"], "productClass", array()), "classCategory2", array())) {
                    // line 257
                    echo "                                                        <br>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItem"], "productClass", array()), "classCategory2", array()), "className", array()), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["shipmentItem"], "productClass", array()), "classCategory2", array()), "html", null, true);
                    echo "
                                                    ";
                }
                // line 259
                echo "                                                </dd>
                                                <dd id=\"shipping_box__price--";
                // line 260
                echo twig_escape_filter($this->env, ($context["idx"] ?? $this->getContext($context, "idx")), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "id", array()), "html", null, true);
                echo "\" class=\"item_price\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["shipmentItem"], "priceIncTax", array())), "html", null, true);
                echo " × ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["shipmentItem"], "quantity", array())), "html", null, true);
                echo "</dd>
                                                <dd id=\"shipping_box__subtotal--";
                // line 261
                echo twig_escape_filter($this->env, ($context["idx"] ?? $this->getContext($context, "idx")), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "id", array()), "html", null, true);
                echo "\" class=\"item_subtotal\">小計：";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["shipmentItem"], "totalPrice", array())), "html", null, true);
                echo "</dd>
                                            </dl>
                                        </div>
                                    </div><!--/item_box-->
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipmentItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 266
            echo "                                </div>
                            </div>

                            <p id=\"shopping_confirm_box__shipping_address_detail--";
            // line 269
            echo twig_escape_filter($this->env, ($context["idx"] ?? $this->getContext($context, "idx")), "html", null, true);
            echo "\" class=\"address\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "name01", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "name02", array()), "html", null, true);
            echo " 様<br>
                            〒";
            // line 270
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "zip01", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "zip02", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "pref", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "addr01", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "addr02", array()), "html", null, true);
            echo "<br>
                            ";
            // line 271
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "tel01", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "tel02", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "tel03", array()), "html", null, true);
            echo "</p>
                            <div id=\"shopping_confirm_box__shipping_delivery--";
            // line 272
            echo twig_escape_filter($this->env, ($context["idx"] ?? $this->getContext($context, "idx")), "html", null, true);
            echo "\" class=\"form-inline form-group\">
                                <label>配送方法</label>
                                ";
            // line 274
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "shippings", array()), ($context["idx"] ?? $this->getContext($context, "idx")), array(), "array"), "delivery", array()), 'widget', array("attr" => array("class" => "delivery")));
            echo "
                                ";
            // line 275
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "shippings", array()), ($context["idx"] ?? $this->getContext($context, "idx")), array(), "array"), "delivery", array()), 'errors');
            echo "
                            </div>

                            <div id=\"shopping_confirm_box__shipping_delivery_date_time--";
            // line 278
            echo twig_escape_filter($this->env, ($context["idx"] ?? $this->getContext($context, "idx")), "html", null, true);
            echo "\" class=\"form-inline form-group\">
                                <label>お届け日</label>
                                ";
            // line 280
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "shippings", array()), ($context["idx"] ?? $this->getContext($context, "idx")), array(), "array"), "shippingDeliveryDate", array()), 'widget');
            echo "<br class=\"sp\">
                                <label>お届け時間</label>
                                ";
            // line 282
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "shippings", array()), ($context["idx"] ?? $this->getContext($context, "idx")), array(), "array"), "deliveryTime", array()), 'widget');
            echo "
                            </div>
                            ";
            // line 284
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 285
                echo "                            <p id=\"shopping_confirm_box__edit_button--";
                echo twig_escape_filter($this->env, ($context["idx"] ?? $this->getContext($context, "idx")), "html", null, true);
                echo "\" class=\"btn_edit\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("shopping_shipping_change", array("id" => $this->getAttribute($context["shipping"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm btn-shipping\">変更</a></p>
                            ";
            } else {
                // line 287
                echo "                            <p id=\"shopping_confirm_box__edit_button--";
                echo twig_escape_filter($this->env, ($context["idx"] ?? $this->getContext($context, "idx")), "html", null, true);
                echo "\" class=\"btn_edit\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("shopping_shipping_edit_change", array("id" => $this->getAttribute($context["shipping"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm btn-shipping-edit\">変更</a></p>
                            ";
            }
            // line 289
            echo "                        </div>
                        ";
            // line 290
            if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                echo "<hr>";
            }
            // line 291
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 292
        echo "                    ";
        if ($this->getAttribute(($context["BaseInfo"] ?? $this->getContext($context, "BaseInfo")), "optionMultipleShipping", array())) {
            // line 293
            echo "                        <hr>
                        <div><a id=\"shopping_confirm_box__button_edit_multiple\"  href=\"";
            // line 294
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("shopping_shipping_multiple_change");
            echo "\" class=\"btn btn-default btn-sm btn-shipping-multiple\">お届け先を追加する</a></div>
                    ";
        }
        // line 296
        echo "
                    <h2 class=\"heading02\">お支払方法</h2>
                    <div id=\"payment_list\" class=\"column\">
                        <div id=\"payment_list__body\" class=\"form-group\">
                            <ul id=\"payment_list__list\" class=\"payment_list\">
                            ";
        // line 301
        if (twig_test_empty($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "payment", array()))) {
            // line 302
            echo "                                <p class=\"errormsg text-danger\">合計金額に対して可能な支払い方法がありません。<br>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["BaseInfo"] ?? $this->getContext($context, "BaseInfo")), "email02", array()), "html", null, true);
            echo "にお問い合わせ下さい。</p>
                            ";
        }
        // line 304
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "payment", array()));
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 305
            echo "                            <li>
                                ";
            // line 306
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("class" => "payment")));
            echo "
                                ";
            // line 307
            if ( !(null === $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "payment", array()), "vars", array()), "choices", array()), $context["key"], array(), "array"), "data", array()), "payment_image", array()))) {
                // line 308
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "payment", array()), "vars", array()), "choices", array()), $context["key"], array(), "array"), "data", array()), "payment_image", array()), "html", null, true);
                echo "\">
                                ";
            }
            // line 310
            echo "                            </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 312
        echo "                            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "payment", array()), 'errors');
        echo "
                            </ul>
                        </div>
                    </div>
                    <h2 class=\"heading02\">お問い合わせ欄</h2>
                    <div id=\"contact_message\" class=\"column\">
                        ";
        // line 318
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "message", array()), 'widget', array("attr" => array("placeholder" => "お問い合わせ事項がございましたら、こちらにご入力ください。(3000文字まで)", "rows" => "6")));
        echo "
                        ";
        // line 319
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "message", array()), 'errors');
        echo "
                    </div>
                    <div class=\"extra-form column\">
                        ";
        // line 322
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 323
            echo "                            ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 324
                echo "                                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'row');
                echo "
                            ";
            }
            // line 326
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 327
        echo "                    </div>
                </div><!-- /.col -->

                <div id=\"confirm_side\" class=\"col-sm-4\">
                    <div id=\"summary_box__total_box\" class=\"total_box\">
                        <dl id=\"summary_box__subtotal\">
                            <dt>小計</dt>
                            <dd class=\"text-primary\">";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "subtotal", array())), "html", null, true);
        echo "</dd>
                        </dl>
                        <dl id=\"summary_box__quantity_price\">
                            <dt>手数料</dt>
                            <dd>";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "charge", array())), "html", null, true);
        echo "</dd>
                        </dl>
                        <dl id=\"summary_box__shipping_price\">
                            <dt>送料</dt>
                            <dd>";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "deliveryFeeTotal", array())), "html", null, true);
        echo "</dd>
                        </dl>
                        ";
        // line 344
        if (($this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "discount", array()) > 0)) {
            // line 345
            echo "                        <dl id=\"summary_box__discount_price\">
                            <dt>値引き</dt>
                            <dd>";
            // line 347
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter((0 - $this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "discount", array()))), "html", null, true);
            echo "</dd>
                        </dl>
                        ";
        }
        // line 350
        echo "                        <div id=\"summary_box__result\" class=\"total_amount\">
                            <p id=\"summary_box__total_amount\" class=\"total_price\">合計 <strong class=\"text-primary\">";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Order"] ?? $this->getContext($context, "Order")), "total", array())), "html", null, true);
        echo "<span class=\"small\">税込</span></strong></p>
                            <p id=\"summary_box__confirm_button\"><button id=\"order-button\" type=\"submit\" class=\"btn btn-primary btn-block prevention-btn prevention-mask\">注文する</button></p>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </form>
    </div>
    ";
        // line 359
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context);
        echo "
";
        
        $__internal_b441fc32aa5ac4c25ff457dca5dd5eaf9233a4819a6fec378af5f17e33125c12->leave($__internal_b441fc32aa5ac4c25ff457dca5dd5eaf9233a4819a6fec378af5f17e33125c12_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__ef53887b927f1041c934c6381600a516d128465f69d041af5142cff4c54a6577";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  918 => 359,  907 => 351,  904 => 350,  898 => 347,  894 => 345,  892 => 344,  887 => 342,  880 => 338,  873 => 334,  864 => 327,  858 => 326,  852 => 324,  849 => 323,  845 => 322,  839 => 319,  835 => 318,  825 => 312,  818 => 310,  810 => 308,  808 => 307,  804 => 306,  801 => 305,  796 => 304,  790 => 302,  788 => 301,  781 => 296,  776 => 294,  773 => 293,  770 => 292,  756 => 291,  752 => 290,  749 => 289,  741 => 287,  733 => 285,  731 => 284,  726 => 282,  721 => 280,  716 => 278,  710 => 275,  706 => 274,  701 => 272,  693 => 271,  683 => 270,  675 => 269,  670 => 266,  655 => 261,  645 => 260,  642 => 259,  634 => 257,  631 => 256,  623 => 254,  621 => 253,  615 => 252,  607 => 251,  601 => 250,  589 => 249,  583 => 248,  576 => 247,  572 => 246,  568 => 245,  564 => 244,  556 => 243,  551 => 242,  548 => 241,  531 => 240,  526 => 237,  521 => 235,  517 => 234,  513 => 233,  509 => 232,  505 => 231,  501 => 230,  497 => 229,  493 => 228,  489 => 227,  485 => 226,  481 => 225,  477 => 224,  468 => 218,  463 => 217,  461 => 216,  453 => 215,  441 => 214,  435 => 213,  429 => 210,  425 => 208,  404 => 203,  396 => 202,  393 => 201,  385 => 199,  382 => 198,  374 => 196,  372 => 195,  368 => 194,  362 => 193,  358 => 192,  348 => 191,  344 => 190,  339 => 189,  322 => 188,  314 => 183,  310 => 182,  306 => 180,  292 => 179,  285 => 175,  279 => 173,  272 => 169,  265 => 166,  262 => 165,  259 => 164,  241 => 163,  238 => 162,  228 => 158,  224 => 156,  220 => 155,  216 => 153,  210 => 149,  205 => 146,  203 => 145,  199 => 143,  195 => 141,  191 => 139,  189 => 138,  183 => 134,  177 => 133,  167 => 128,  137 => 101,  91 => 57,  89 => 56,  82 => 52,  73 => 46,  64 => 40,  55 => 34,  47 => 29,  41 => 25,  35 => 24,  11 => 22,);
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

{% block javascript %}
<script>
\$(function() {

    \$('.delivery').on('change', function() {
        \$('#shopping-form').attr('action', '{{ url(\"shopping_delivery\") }}').submit();
        return false;
    });

    \$('.payment').on('change', function() {
        \$('#shopping-form').attr('action', '{{ url(\"shopping_payment\") }}').submit();
        return false;
    });

    \$('.btn-shipping').click(function() {
        \$('#shopping-form').attr('action', \$(this).attr('href')).submit();
        \$('#shopping-form').attr('action', '{{ url(\"shopping_confirm\") }}');
        return false;
    });

    \$('.btn-shipping-edit').click(function() {
        \$('#shopping-form').attr('action', \$(this).attr('href')).submit();
        \$('#shopping-form').attr('action', '{{ url(\"shopping_confirm\") }}');
        return false;
    });

    \$('.btn-shipping-multiple').click(function() {
        \$('#shopping-form').attr('action', \$(this).attr('href')).submit();
        \$('#shopping-form').attr('action', '{{ url(\"shopping_confirm\") }}');
        return false;
    });

    {% if is_granted('ROLE_USER') == false %}
        var ref = [];
        var name = [];
        var input = [];
        var customerin = [];

        \$('#customer').click(function() {
            // ref = \$('.customer-name01');
            var edit = \$('.customer-edit');
            var hidden = \$('.customer-in');

            \$(edit).each(function(index) {
                ref[index] = \$(this);
            });
            \$(hidden).each(function(index) {
                customerin[index] = \$(this);
            });
            \$(ref).each(function(index) {
                name[index] = \$(this).text();
            });
            \$(name).each(function(index) {
                input[index] = \$('<input id=\"edit' + index + '\" type=\"text\" />').val(name[index]);
            });
            \$(input).each(function(index) {
                ref[index].empty().append(input[index]);
            });

            \$('#customer').prop(\"disabled\", true);
            \$('.mod-button').show();
        });

        \$('#customer-ok').click(function() {
            \$(ref).each(function(index) {
                var nameAfter = input[index].val();
                ref[index].empty().text(nameAfter);
                customerin[index].val(nameAfter);
                input[index].remove();
            });

            var postData = {};
            \$('.customer-in').each(function() {
                postData[\$(this).attr('name')] = \$(this).val();
            });

            \$.ajax({
                url: \"{{ url('shopping_customer') }}\",
                type: 'POST',
                data: postData,
                dataType: 'json',
            }).done(function(){
            }).fail(function(){
                alert('更新に失敗しました。入力内容を確認してください。');
                \$(ref).each(function(index) {
                    ref[index].empty().text(name[index]);
                    input[index].remove();
                });
            });

            \$('#customer').prop(\"disabled\", false);
            \$('.mod-button').hide();
        });

        \$('#customer-cancel').click(function() {
            \$(ref).each(function(index) {
                ref[index].empty().text(name[index]);
                input[index].remove();
            });

            \$('#customer').prop(\"disabled\", false);
            \$('.mod-button').hide();
        });
    {% endif %}

});
</script>
{% endblock javascript %}

{% block main %}
    <h1 class=\"page-heading\">ご注文内容のご確認</h1>
    <div id=\"confirm_wrap\" class=\"container-fluid\">
        <div id=\"confirm_flow_box\" class=\"row\">
            <div id=\"confirm_flow_box__body\" class=\"col-md-12\">
                {% if is_granted('ROLE_USER') %}
                <div id=\"confirm_flow_box__flow_state\" class=\"flowline step3\">
                {% else %}
                <div id=\"confirm_flow_box__flow_state\" class=\"flowline step4\">
                {% endif %}
                    <ul id=\"confirm_flow_box__flow_state_list\" class=\"clearfix\">
                    <li><span class=\"flow_number\">1</span><br>カートの商品</li>
                    {% if is_granted('ROLE_USER') %}
                        <li class=\"active\"><span class=\"flow_number\">2</span><br>ご注文内容確認</li>
                        <li><span class=\"flow_number\">3</span><br>完了</li>
                    {% else %}
                        <li><span class=\"flow_number\">2</span><br>お客様情報</li>
                        <li class=\"active\"><span class=\"flow_number\">3</span><br>ご注文内容確認</li>
                        <li><span class=\"flow_number\">4</span><br>完了</li>
                    {% endif %}
                    </ul>
                </div>
                {% for error in app.session.flashbag.get('eccube.front.error')  %}
                    <div id=\"confirm_flow_box__message\" class=\"message\">
                        <p class=\"errormsg bg-danger\">
                            <svg class=\"cb cb-warning\"><use xlink:href=\"#cb-warning\" /></svg>{{ error|trans|nl2br }}
                        </p>
                    </div>
                {% endfor %}
                    {% set productStr = app.session.flashbag.get('eccube.front.request.product') %}
                    {% for error in app.session.flashbag.get('eccube.front.request.error')  %}
                        {% set idx = loop.index0 %}
                        {% if productStr[idx] is defined %}
                            <div id=\"cart_box__message--{{ loop.index }}\" class=\"message\">
                                <p class=\"errormsg bg-danger\">
                                    <svg class=\"cb cb-warning\"><use xlink:href=\"#cb-warning\" /></svg>
                                    {{ error|trans({'%product%':productStr[idx]})|nl2br }}
                                </p>
                            </div>
                        {% else %}
                            <div id=\"confirm_flow_box__message--{{ loop.index }}\" class=\"message\">
                                <p class=\"errormsg bg-danger\">
                                    <svg class=\"cb cb-warning\"><use xlink:href=\"#cb-warning\" /></svg>{{ error|trans|nl2br }}
                                </p>
                            </div>
                        {% endif %}
                    {% endfor %}
            </div><!-- /.col -->
        </div><!-- /.row -->
        <form id=\"shopping-form\" method=\"post\" action=\"{{ url('shopping_confirm') }}\">
            {{ form_widget(form._token) }}
            <div id=\"shopping_confirm\" class=\"row\">
                <div id=\"confirm_main\" class=\"col-sm-8\">
                    <div id=\"cart_box\" class=\"cart_item table\">
                        <div id=\"cart_box_list\" class=\"tbody\">
                            {% for orderDetail in Order.orderDetails %}
                            <div id=\"cart_box_list__item_box--{{ loop.index }}\" class=\"item_box tr\">
                                <div id=\"cart_box_list__item--{{ loop.index }}\" class=\"td table\">
                                    <div id=\"cart_box_list__photo--{{ loop.index }}\" class=\"item_photo\"><img src=\"{{ app.config.image_save_urlpath }}/{{ orderDetail.product.MainListImage|no_image_product }}\" alt=\"{{ orderDetail.productName }}\" /></div>
                                    <dl id=\"cart_box_list__detail--{{ loop.index }}\" class=\"item_detail\">
                                        <dt id=\"cart_box_list__name--{{ loop.index }}\" class=\"item_name text-default\">{{ orderDetail.productName }}</dt>
                                        <dd id=\"cart_box_list__class_category--{{ loop.index }}\" class=\"item_pattern small\">
                                            {% if orderDetail.productClass.classCategory1 %}
                                                {{ orderDetail.productClass.classCategory1.className }}：{{ orderDetail.productClass.classCategory1 }}
                                            {% endif %}
                                            {% if orderDetail.productClass.classCategory2 %}
                                                <br>{{ orderDetail.productClass.classCategory2.className }}：{{ orderDetail.productClass.classCategory2 }}
                                            {% endif %}
                                        </dd>
                                        <dd id=\"cart_box_list__price--{{ loop.index }}\" class=\"item_price\">{{ orderDetail.priceIncTax|price }} × {{ orderDetail.quantity|number_format }}</dd>
                                        <dd id=\"cart_box_list__subtotal--{{ loop.index }}\" class=\"item_subtotal\">小計：{{ orderDetail.totalPrice|price }}</dd>
                                    </dl>
                                </div>
                            </div><!--/item_box-->
                            {% endfor %}
                        </div>
                    </div><!--/cart_item-->
                    <p><a id=\"confirm_box__quantity_edit_button\" href=\"{{ url('cart') }}\" class=\"btn btn-default btn-sm\">数量を変更または削除する</a></p>
                    <h2 class=\"heading02\">お客様情報</h2>
                    <div id=\"customer_detail_box\" class=\"column is-edit\">
                        <p id=\"customer_detail_box__customer_address\" class=\"address\"><span class=\"customer-edit customer-name01\">{{ Order.name01 }}</span> <span class=\"customer-edit customer-name02\">{{ Order.name02 }}</span> 様<br>
                        〒<span class=\"customer-edit customer-zip01\">{{ Order.zip01 }}</span>-<span class=\"customer-edit customer-zip02\">{{ Order.zip02 }}</span> <span class=\"customer-edit customer-pref\">{{ Order.pref }}</span><span class=\"customer-edit customer-addr01\">{{ Order.addr01 }}</span><span class=\"customer-edit customer-addr02\">{{ Order.addr02 }}</span><br>
                        <span class=\"customer-edit customer-tel01\">{{ Order.tel01 }}</span>-<span class=\"customer-edit customer-tel02\">{{ Order.tel02 }}</span>-<span class=\"customer-edit customer-tel03\">{{ Order.tel03 }}</span></p>
                        {% if is_granted('ROLE_USER') == false %}
                            <div class=\"customer-edit customer-email\">{{ Order.email }}</div>
                            <div class=\"customer-edit customer-company_name\">{{ Order.companyName }}</div>
                            <div class=\"mod-button\" style=\"display:none;\">
                                <span id=\"customer-ok\"><button type=\"button\" class=\"btn btn-default btn-sm\">OK</button></span>
                                <span id=\"customer-cancel\"><button type=\"button\" class=\"btn btn-default btn-sm\">キャンセル</button></span>
                            </div>
                            <p class=\"btn_edit\"><button type=\"button\" id=\"customer\" class=\"btn btn-default btn-sm\">変更</button></p>
                            <input type=\"hidden\" id=\"customer-name01\" class=\"customer-in\" name=\"customer_name01\" value=\"{{ Order.name01 }}\">
                            <input type=\"hidden\" id=\"customer-name02\" class=\"customer-in\" name=\"customer_name02\" value=\"{{ Order.name02 }}\">
                            <input type=\"hidden\" id=\"customer-zip01\" class=\"customer-in\" name=\"customer_zip01\" value=\"{{ Order.zip01 }}\">
                            <input type=\"hidden\" id=\"customer-zip02\" class=\"customer-in\" name=\"customer_zip02\" value=\"{{ Order.zip02 }}\">
                            <input type=\"hidden\" id=\"customer-pref\" class=\"customer-in\" name=\"customer_pref\" value=\"{{ Order.pref }}\">
                            <input type=\"hidden\" id=\"customer-addr01\" class=\"customer-in\" name=\"customer_addr01\" value=\"{{ Order.addr01 }}\">
                            <input type=\"hidden\" id=\"customer-addr02\" class=\"customer-in\" name=\"customer_addr02\" value=\"{{ Order.addr02 }}\">
                            <input type=\"hidden\" id=\"customer-tel01\" class=\"customer-in\" name=\"customer_tel01\" value=\"{{ Order.tel01 }}\">
                            <input type=\"hidden\" id=\"customer-tel02\" class=\"customer-in\" name=\"customer_tel02\" value=\"{{ Order.tel02 }}\">
                            <input type=\"hidden\" id=\"customer-tel03\" class=\"customer-in\" name=\"customer_tel03\" value=\"{{ Order.tel03 }}\">
                            <input type=\"hidden\" id=\"customer-email\" class=\"customer-in\" name=\"customer_email\" value=\"{{ Order.email }}\">
                            <input type=\"hidden\" id=\"customer-company-name\" class=\"customer-in\" name=\"customer_company_name\" value=\"{{ Order.companyName }}\">
                        {% endif %}
                    </div>

                    <h2 class=\"heading02\">配送情報</h2>
                    {% for shipping in Order.shippings %}
                        {% set idx = loop.index0 %}
                        <div id=\"shipping_confirm_box--{{ idx }}\" class=\"column is-edit\">
                            <h3>お届け先{% if Order.multiple %}({{ loop.index }}){% endif %}</h3>
                            <div id=\"shipping_confirm_box__body--{{ idx }}\" class=\"cart_item table\">
                                <div id=\"shipping_confirm_box__list--{{ idx }}\" class=\"tbody\">
                                {% for shipmentItem in shipping.shipmentItems %}
                                    <div id=\"shipping_confirm_box__item--{{ idx }}_{{ shipmentItem.id }}\" class=\"item_box tr\">
                                        <div id=\"shipping_box__body_inner--{{ idx }}_{{ shipmentItem.id }}\" class=\"td table\">
                                            <div id=\"shipping_box__photo--{{ idx }}_{{ shipmentItem.id }}\" class=\"item_photo\"><img src=\"{{ app.config.image_save_urlpath }}/{{ shipmentItem.product.MainListImage|no_image_product }}\" alt=\"{{ shipmentItem.productName }}\" /></div>
                                            <dl id=\"shipping_box__detail--{{ idx }}_{{ shipmentItem.id }}\" class=\"item_detail\">
                                                <dt id=\"shipping_box__name--{{ idx }}_{{ shipmentItem.id }}\" class=\"item_name text-default\">{{ shipmentItem.productName }}</dt>
                                                <dd id=\"shipping_box__class_category--{{ idx }}_{{ shipmentItem.id }}\" class=\"item_pattern small\">
                                                    {% if shipmentItem.productClass.classCategory1 %}
                                                        {{ shipmentItem.productClass.classCategory1.className }}：{{ shipmentItem.productClass.classCategory1 }}
                                                    {% endif %}
                                                    {% if shipmentItem.productClass.classCategory2 %}
                                                        <br>{{ shipmentItem.productClass.classCategory2.className }}：{{ shipmentItem.productClass.classCategory2 }}
                                                    {% endif %}
                                                </dd>
                                                <dd id=\"shipping_box__price--{{ idx }}_{{ shipmentItem.id }}\" class=\"item_price\">{{ shipmentItem.priceIncTax|price }} × {{ shipmentItem.quantity|number_format }}</dd>
                                                <dd id=\"shipping_box__subtotal--{{ idx }}_{{ shipmentItem.id }}\" class=\"item_subtotal\">小計：{{ shipmentItem.totalPrice|price }}</dd>
                                            </dl>
                                        </div>
                                    </div><!--/item_box-->
                                {% endfor %}
                                </div>
                            </div>

                            <p id=\"shopping_confirm_box__shipping_address_detail--{{ idx }}\" class=\"address\">{{ shipping.name01 }} {{ shipping.name02 }} 様<br>
                            〒{{ shipping.zip01 }}-{{ shipping.zip02 }} {{ shipping.pref }}{{ shipping.addr01 }}{{ shipping.addr02 }}<br>
                            {{ shipping.tel01 }}-{{ shipping.tel02 }}-{{ shipping.tel03 }}</p>
                            <div id=\"shopping_confirm_box__shipping_delivery--{{ idx }}\" class=\"form-inline form-group\">
                                <label>配送方法</label>
                                {{ form_widget(form.shippings[idx].delivery, {'attr': {'class': 'delivery'}}) }}
                                {{ form_errors(form.shippings[idx].delivery) }}
                            </div>

                            <div id=\"shopping_confirm_box__shipping_delivery_date_time--{{ idx }}\" class=\"form-inline form-group\">
                                <label>お届け日</label>
                                {{ form_widget(form.shippings[idx].shippingDeliveryDate) }}<br class=\"sp\">
                                <label>お届け時間</label>
                                {{ form_widget(form.shippings[idx].deliveryTime) }}
                            </div>
                            {% if is_granted('ROLE_USER') %}
                            <p id=\"shopping_confirm_box__edit_button--{{ idx }}\" class=\"btn_edit\"><a href=\"{{ url('shopping_shipping_change', {'id': shipping.id}) }}\" class=\"btn btn-default btn-sm btn-shipping\">変更</a></p>
                            {% else %}
                            <p id=\"shopping_confirm_box__edit_button--{{ idx }}\" class=\"btn_edit\"><a href=\"{{ url('shopping_shipping_edit_change', {'id': shipping.id}) }}\" class=\"btn btn-default btn-sm btn-shipping-edit\">変更</a></p>
                            {% endif %}
                        </div>
                        {% if loop.last == false%}<hr>{% endif %}
                    {% endfor %}
                    {% if BaseInfo.optionMultipleShipping %}
                        <hr>
                        <div><a id=\"shopping_confirm_box__button_edit_multiple\"  href=\"{{ url('shopping_shipping_multiple_change') }}\" class=\"btn btn-default btn-sm btn-shipping-multiple\">お届け先を追加する</a></div>
                    {% endif %}

                    <h2 class=\"heading02\">お支払方法</h2>
                    <div id=\"payment_list\" class=\"column\">
                        <div id=\"payment_list__body\" class=\"form-group\">
                            <ul id=\"payment_list__list\" class=\"payment_list\">
                            {% if form.payment is empty %}
                                <p class=\"errormsg text-danger\">合計金額に対して可能な支払い方法がありません。<br>{{ BaseInfo.email02 }}にお問い合わせ下さい。</p>
                            {% endif %}
                            {% for key, child in form.payment %}
                            <li>
                                {{ form_widget(child, {'attr': {'class': 'payment' }}) }}
                                {% if form.payment.vars.choices[key].data.payment_image is not null %}
                                <img src=\"{{ app.config.image_save_urlpath }}/{{ form.payment.vars.choices[key].data.payment_image }}\">
                                {% endif %}
                            </li>
                            {% endfor %}
                            {{ form_errors(form.payment) }}
                            </ul>
                        </div>
                    </div>
                    <h2 class=\"heading02\">お問い合わせ欄</h2>
                    <div id=\"contact_message\" class=\"column\">
                        {{ form_widget(form.message, {'attr': {'placeholder': 'お問い合わせ事項がございましたら、こちらにご入力ください。(3000文字まで)', 'rows': '6'}}) }}
                        {{ form_errors(form.message) }}
                    </div>
                    <div class=\"extra-form column\">
                        {% for f in form.getIterator %}
                            {% if f.vars.name matches '[^plg*]' %}
                                {{ form_row(f) }}
                            {% endif %}
                        {% endfor %}
                    </div>
                </div><!-- /.col -->

                <div id=\"confirm_side\" class=\"col-sm-4\">
                    <div id=\"summary_box__total_box\" class=\"total_box\">
                        <dl id=\"summary_box__subtotal\">
                            <dt>小計</dt>
                            <dd class=\"text-primary\">{{ Order.subtotal|price }}</dd>
                        </dl>
                        <dl id=\"summary_box__quantity_price\">
                            <dt>手数料</dt>
                            <dd>{{ Order.charge|price }}</dd>
                        </dl>
                        <dl id=\"summary_box__shipping_price\">
                            <dt>送料</dt>
                            <dd>{{ Order.deliveryFeeTotal|price }}</dd>
                        </dl>
                        {% if Order.discount > 0 %}
                        <dl id=\"summary_box__discount_price\">
                            <dt>値引き</dt>
                            <dd>{{ (0 - Order.discount)|price}}</dd>
                        </dl>
                        {% endif %}
                        <div id=\"summary_box__result\" class=\"total_amount\">
                            <p id=\"summary_box__total_amount\" class=\"total_price\">合計 <strong class=\"text-primary\">{{ Order.total|price }}<span class=\"small\">税込</span></strong></p>
                            <p id=\"summary_box__confirm_button\"><button id=\"order-button\" type=\"submit\" class=\"btn btn-primary btn-block prevention-btn prevention-mask\">注文する</button></p>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </form>
    </div>
    {{ dump() }}
{% endblock %}", "__string_template__ef53887b927f1041c934c6381600a516d128465f69d041af5142cff4c54a6577", "");
    }
}
