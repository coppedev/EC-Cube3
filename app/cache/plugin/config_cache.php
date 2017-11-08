<?php return array (
  'CategoryContent' => 
  array (
    'config' => 
    array (
      'name' => 'Category Content',
      'code' => 'CategoryContent',
      'version' => '1.0.0',
    ),
    'event' => NULL,
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
);