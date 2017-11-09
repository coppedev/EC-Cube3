<?php return array (
  'Coupon' => 
  array (
    'config' => 
    array (
      'name' => 'Coupon',
      'event' => 'Event',
      'code' => 'Coupon',
      'version' => '2.0.1',
      'service' => 
      array (
        0 => 'CouponServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
    ),
    'event' => 
    array (
      'eccube.event.render.shopping.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderShoppingBefore',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.mypage_history.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderMypageHistoryBefore',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.controller.shopping_confirm.before' => 
      array (
        0 => 
        array (
          0 => 'onControllerShoppingConfirmBefore',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.controller.shopping_complete.before' => 
      array (
        0 => 
        array (
          0 => 'onControllerShoppingCompleteBefore',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.admin_order_edit.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminOrderEditBefore',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.controller.admin_order_edit.after' => 
      array (
        0 => 
        array (
          0 => 'onControllerOrderEditAfter',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.controller.admin_order_delete.after' => 
      array (
        0 => 
        array (
          0 => 'onControllerOrderDeleteAfter',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.controller.shopping_delivery.after' => 
      array (
        0 => 
        array (
          0 => 'onControllerRestoreDiscountAfter',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.controller.shopping_payment.after' => 
      array (
        0 => 
        array (
          0 => 'onControllerRestoreDiscountAfter',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.controller.shopping_shipping.after' => 
      array (
        0 => 
        array (
          0 => 'onControllerRestoreDiscountAfter',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.controller.shopping_shipping_edit.after' => 
      array (
        0 => 
        array (
          0 => 'onControllerRestoreDiscountAfter',
          1 => 'NORMAL',
        ),
      ),
      'Shopping/index.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderShoppingIndex',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/history.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderMypageHistory',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.complete.initialize' => 
      array (
        0 => 
        array (
          0 => 'onRenderShoppingComplete',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.confirm.initialize' => 
      array (
        0 => 
        array (
          0 => 'onShoppingConfirmInit',
          1 => 'NORMAL',
        ),
      ),
      'admin.order.edit.index.complete' => 
      array (
        0 => 
        array (
          0 => 'onOrderEditComplete',
          1 => 'NORMAL',
        ),
      ),
      'admin.order.delete.complete' => 
      array (
        0 => 
        array (
          0 => 'onOrderEditComplete',
          1 => 'NORMAL',
        ),
      ),
      'mail.order' => 
      array (
        0 => 
        array (
          0 => 'onSendOrderMail',
          1 => 'NORMAL',
        ),
      ),
      'mail.admin.order' => 
      array (
        0 => 
        array (
          0 => 'onSendOrderMail',
          1 => 'NORMAL',
        ),
      ),
      'Admin/Order/edit.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminOrderEdit',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.delivery.complete' => 
      array (
        0 => 
        array (
          0 => 'onRestoreDiscount',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.payment.complete' => 
      array (
        0 => 
        array (
          0 => 'onRestoreDiscount',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.shipping.complete' => 
      array (
        0 => 
        array (
          0 => 'onRestoreDiscount',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.shipping.edit.complete' => 
      array (
        0 => 
        array (
          0 => 'onRestoreDiscount',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
  'Cpd000' => 
  array (
    'config' => 
    array (
      'name' => 'Cpd000（プラグインテンプレート）',
      'code' => 'Cpd000_template',
      'version' => '0.0.1',
    ),
    'event' => NULL,
  ),
  'Cpd001' => 
  array (
    'config' => 
    array (
      'name' => 'Cpd001',
      'code' => 'Cpd001',
      'version' => '0.0.1',
      'event' => 'Cpd001Event',
    ),
    'event' => 
    array (
      'front.shopping.index.initialize' => 
      array (
        0 => 
        array (
          0 => 'onFrontShoppingInit',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.confirm.complete' => 
      array (
        0 => 
        array (
          0 => 'onFrontShoppingCompleteInit',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
  'CpdTest006' => 
  array (
    'config' => 
    array (
      'name' => 'データベース関連確認のプラグイン',
      'code' => 'CpdTest006',
      'version' => '0.0.1',
      'event' => 'CpdTest006Event',
      'service' => 
      array (
        0 => 'CpdTest006ServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
    ),
    'event' => 
    array (
      'admin.setting.shop.shop.index.initialize' => 
      array (
        0 => 
        array (
          0 => 'onAdminHomeInit',
          1 => 'NORMAL',
        ),
      ),
      'admin.setting.shop.shop.index.complete' => 
      array (
        0 => 
        array (
          0 => 'onAdminHomeEditComplete',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
);