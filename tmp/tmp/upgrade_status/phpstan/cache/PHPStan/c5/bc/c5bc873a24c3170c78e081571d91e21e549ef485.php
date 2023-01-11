<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/commerce_stock/modules/local_storage/tests/src/Kernel/OrderEventsTransactionsTest.php-1639845390',
   'data' => 
  array (
    '6f84ee1902e8fc4a2ac77aa4efbc3c8a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Ensure the stock transactions are performed on order events.
 *
 * @group commerce_stock
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'ordereventsubscriber' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventsTransactionsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '809d3e52d9fbcb755472f7f76ae1b5b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A test product.
   *
   * @var \\Drupal\\commerce_product\\Entity\\ProductInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'ordereventsubscriber' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventsTransactionsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'f4fc4ac0078309fe64dffd9993da69de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A test variation.
   *
   * @var \\Drupal\\commerce_product\\Entity\\ProductVariationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'ordereventsubscriber' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventsTransactionsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '63d434bd97e6ddbccf82db5a5131ffa2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A second test variation.
   *
   * @var \\Drupal\\commerce_product\\Entity\\ProductVariationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'ordereventsubscriber' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventsTransactionsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '3c46f9a421a363ec7e2af644994f09df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A sample order.
   *
   * @var \\Drupal\\commerce_order\\Entity\\OrderInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'ordereventsubscriber' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventsTransactionsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b7c56a067b4c32f255af678b6356fe2c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The stock checker.
   *
   * @var \\Drupal\\commerce_stock\\StockCheckInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'ordereventsubscriber' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventsTransactionsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '1a212527edd0d5a469b87a365cc38fca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The second stock checker.
   *
   * @var \\Drupal\\commerce_stock\\StockCheckInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'ordereventsubscriber' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventsTransactionsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '050170a72372ef53b8ca7017508e1853' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of location ids for variation1.
   *
   * @var int[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'ordereventsubscriber' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventsTransactionsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e7b6565a7e4c2adf69e9f76ff41bb416' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of location ids for variation2.
   *
   * @var int[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'ordereventsubscriber' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventsTransactionsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e53c14a94636cfa7f4e45c760e0660bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A sample user.
   *
   * @var \\Drupal\\user\\UserInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'ordereventsubscriber' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventsTransactionsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '0b09bbb33648d29a19709596991c968d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'ordereventsubscriber' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventsTransactionsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '01eee3decf47c56143e19f2bf2db616f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'ordereventsubscriber' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventsTransactionsTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'f1ee6dde6b81ee98fa6a4c8eaaa58fd6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\Order $order */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'ordereventsubscriber' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventsTransactionsTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '940b79421a5383ef10c49740b60d05a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\OrderItemStorageInterface $order_item_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'ordereventsubscriber' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventsTransactionsTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2ec2d01f3aa1031e3ebf15187f53c530' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether transactions are created on \'place\' transition.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'ordereventsubscriber' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventsTransactionsTest',
         'functionName' => 'testOrderPlaceTransition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '4ef9a195228ecd5ce08dd0a027d9a0fa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether transactions are not triggered for the orders in draft state.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'ordereventsubscriber' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventsTransactionsTest',
         'functionName' => 'testWorkflowCancelEventNotModifyStockOnDraftOrders',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '117b335c0204c90054ef9b4e573dff8f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests that transactions are not created on cancel events with default
   * configuration.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'ordereventsubscriber' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventsTransactionsTest',
         'functionName' => 'testWorkflowCancelEventNotModifyStockWithDefaultSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ab02b80e97efe56f0f3fa671b1b826bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether proper transactions are created on cancel transition with config
   * set to act on order cancel.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'ordereventsubscriber' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventsTransactionsTest',
         'functionName' => 'testWorkflowCancelEvent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '62adf000d56ade44978d8bf0c58e8752' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test configuration.
   *
   * Tests that no transactions are triggered for all other order and order item
   * events in case we disabled all configuration options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'ordereventsubscriber' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventsTransactionsTest',
         'functionName' => 'testDisableConfigurationPreventsTransaktions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '476919c94156f4dcfdb81efdfa91a3a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\OrderItemStorage $order_item_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'ordereventsubscriber' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventsTransactionsTest',
         'functionName' => 'testDisableConfigurationPreventsTransaktions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '3368630e72f28fdfe24fb362eaf22fe8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test order edit events.
   *
   * Tests that transactions are created for all other order and order item
   * events.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'ordereventsubscriber' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventsTransactionsTest',
         'functionName' => 'testOrderEditEvents',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '54210a600ec635d6d751889df102e5af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\OrderItemStorage $order_item_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'ordereventsubscriber' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventsTransactionsTest',
         'functionName' => 'testOrderEditEvents',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '11ba9292d6b995ceb5016137e0894046' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Its absolutly possible to get orders from an order event that doesn\'t hold
   * a $order->original order object. Here we test, whether our event subscriber fail
   * graceful in such cases.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'ordereventsubscriber' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventsTransactionsTest',
         'functionName' => 'testFailGracefulIfNoPurchasableEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
  ),
));