<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/commerce_stock/modules/local_storage/tests/src/Kernel/OrderEventTransactionsKernelTest.php-1634106758,/var/www/html/web/modules/contrib/commerce/modules/store/src/StoreCreationTrait.php-1636645795',
   'data' => 
  array (
    '9cb5ac48ad0425e66da0214814eaef32' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Ensure the stock transactions are performed on order events.
 *
 * @coversDefaultClass \\Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber
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
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventTransactionsKernelTest',
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
    'c585a1c5676d4ee39ac628b3b32e0ea0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods to create stores and set the default store.
 *
 * This trait is meant to be used only by test classes.
 *
 * @todo Move to \\Drupal\\Tests\\commerce_store post-SimpleTest.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store',
         'uses' => 
        array (
          'store' => 'Drupal\\commerce_store\\Entity\\Store',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventTransactionsKernelTest',
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
    '9c7b98ac102874524c8912b2bfcfc659' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a store for the test.
   *
   * @param string $name
   *   The store name.
   * @param string $mail
   *   The store email.
   * @param string $type
   *   The store type.
   * @param bool $default
   *   Whether the store should be the default store.
   * @param string $country
   *   The store country code.
   * @param string $currency
   *   The store currency code.
   *
   * @return \\Drupal\\commerce_store\\Entity\\StoreInterface
   *   The store.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store',
         'uses' => 
        array (
          'store' => 'Drupal\\commerce_store\\Entity\\Store',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventTransactionsKernelTest',
         'functionName' => 'createStore',
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
    'e68e06919692e47f605f479df0ac9230' => 
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
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventTransactionsKernelTest',
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
    'e3fb7e9c3959c20c9608b932c802b898' => 
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
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventTransactionsKernelTest',
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
    'fe2bcfbd3792a40e9247d1e8fd340d7f' => 
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
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventTransactionsKernelTest',
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
    '3cc1b4fa9defbb1afae3392ca4736efc' => 
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
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventTransactionsKernelTest',
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
    'e3e2e5d9c2c3f89ca6e9366b7d3faab2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The stock service manager.
   *
   * @var \\Drupal\\commerce_stock\\StockServiceManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventTransactionsKernelTest',
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
    '28d1f1e8e3ae206a43169e9bb43846f9' => 
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
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventTransactionsKernelTest',
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
    '8cd381ea00410d8eb2cdf349ac661d71' => 
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
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventTransactionsKernelTest',
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
    'b077af1a235c6d8ffebc735e58619dff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The stock service configuration.
   *
   * @var \\Drupal\\commerce_stock\\stockServiceConfiguration
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventTransactionsKernelTest',
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
    '3677cf577eb6a92ffc4e3fc8df971afd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The second stock service configuration.
   *
   * @var \\Drupal\\commerce_stock\\stockServiceConfiguration
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventTransactionsKernelTest',
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
    '19c2a10114bc123e1cb0192a79081707' => 
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
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventTransactionsKernelTest',
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
    '644a49d70dec6a99bf3268a942bf7bd7' => 
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
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventTransactionsKernelTest',
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
    '69038ec379734174249a3c6b816bb990' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A sample user profile.
   *
   * @var \\Drupal\\profile\\Entity\\Profile
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventTransactionsKernelTest',
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
    'ef6589dcf7dcfde9ad39fda4d3eb8dc1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A sample user.
   *
   * @var \\Drupal\\user\\Entity\\User
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventTransactionsKernelTest',
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
    '62ccd0deafed7e6e74a8e1be2d1f95eb' => 
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
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventTransactionsKernelTest',
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
    '3696bb83ceb3146ee104dfdf5a783da2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether transitions and order deletion resulting in proper
   * stock transactions.
   *
   * @covers ::onOrderPlace
   * @covers ::onOrderCancel
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventTransactionsKernelTest',
         'functionName' => 'testOrderEvents',
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
    'f1859c6ef245f0cad664e3831da34f5d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\Order $order */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventTransactionsKernelTest',
         'functionName' => 'testOrderEvents',
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
    '34199d46d87a5b68373968d0be1897e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\OrderItemStorageInterface $order_item_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventTransactionsKernelTest',
         'functionName' => 'testOrderEvents',
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
    'ad0db4042ba35c03a43317fa0f08c5bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether order item modifications resulting in proper stock
   * transactions.
   *
   * @covers ::onOrderUpdate
   * @covers ::onOrderItemUpdate
   * @covers ::onOrderItemDelete
   * @covers ::onOrderDelete
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventTransactionsKernelTest',
         'functionName' => 'testOrderItemEvents',
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
    'bf35023571b36819dc88f175e6d9e894' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\Order $order */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventTransactionsKernelTest',
         'functionName' => 'testOrderItemEvents',
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
    '3e0bf32dcbdac031e3a43b37cfb72e5f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\OrderItemStorageInterface $order_item_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventTransactionsKernelTest',
         'functionName' => 'testOrderItemEvents',
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
    '4eea8d6961ce389608059b218a6976c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether the order cancel transition dont return stock if the order is
   * in \'draft\' state. That would result in wrong stock levels.
   *
   * @covers ::onOrderCancel
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventTransactionsKernelTest',
         'functionName' => 'testCancelTransitionDontFireInDraftState',
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
    '74e3efe880f8b4d5b1f4e6510a4d0329' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\Order $order */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventTransactionsKernelTest',
         'functionName' => 'testCancelTransitionDontFireInDraftState',
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
    'c2ef8b1b63e622b89a743543055aa23b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\OrderItemStorageInterface $order_item_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\OrderEventTransactionsKernelTest',
         'functionName' => 'testCancelTransitionDontFireInDraftState',
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