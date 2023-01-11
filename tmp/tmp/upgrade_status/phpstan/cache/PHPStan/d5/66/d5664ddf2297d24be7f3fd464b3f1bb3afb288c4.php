<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/commerce_stock/modules/local_storage/tests/src/Kernel/LocalStockUpdaterTest.php-1634106758,/var/www/html/web/core/lib/Drupal/Core/Logger/LoggerChannelTrait.php-1637184268',
   'data' => 
  array (
    'd1d8b885c320f31b2b008abcf82006c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Testing the local stock updater.
 *
 * @group commerce_stock
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
          'argument' => 'Prophecy\\Argument',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\LocalStockUpdaterTest',
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
    '0fbe119dc501ee4d671b187b4d99d260' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Wrapper methods for the logger factory service.
 *
 * This utility trait should only be used in application-level code, such as
 * classes that would implement ContainerInjectionInterface. Services registered
 * in the Container should not use this trait but inject the appropriate service
 * directly for easier testing.
 *
 * @see \\Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Logger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\LocalStockUpdaterTest',
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
    '768af7699dd2a014ee7c6877d4262efd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The logger channel factory service.
   *
   * @var \\Drupal\\Core\\Logger\\LoggerChannelFactoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Logger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\LocalStockUpdaterTest',
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
    'c23862f92154bf219dfeadc9b449dd97' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the logger for a specific channel.
   *
   * @param string $channel
   *   The name of the channel. Can be any string, but the general practice is
   *   to use the name of the subsystem calling this.
   *
   * @return \\Psr\\Log\\LoggerInterface
   *   The logger for the given channel.
   *
   * @todo Require the use of injected services:
   *   https://www.drupal.org/node/2733703
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Logger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\LocalStockUpdaterTest',
         'functionName' => 'getLogger',
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
    '6e048fc7cb234ca2d41452fb2e70a0ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Injects the logger channel factory.
   *
   * @param \\Drupal\\Core\\Logger\\LoggerChannelFactoryInterface $logger_factory
   *   The logger channel factory service.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Logger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\LocalStockUpdaterTest',
         'functionName' => 'setLoggerFactory',
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
    '852b273c144352d670c8715e6de240e8' => 
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
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
          'argument' => 'Prophecy\\Argument',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\LocalStockUpdaterTest',
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
    'e6e5cd26323065f2fd98d621ecf3cd39' => 
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
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
          'argument' => 'Prophecy\\Argument',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\LocalStockUpdaterTest',
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
    'e9a3f092a077953707c11e7ff9ef6a01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The stock service manager.
   *
   * @var \\Drupal\\commerce_stock\\StockServiceInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
          'argument' => 'Prophecy\\Argument',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\LocalStockUpdaterTest',
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
    '71030c837a0272eaece62e1e389d0aeb' => 
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
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
          'argument' => 'Prophecy\\Argument',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\LocalStockUpdaterTest',
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
    '61a8e9707f4a9a83b4bb6260a325ecb1' => 
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
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
          'argument' => 'Prophecy\\Argument',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\LocalStockUpdaterTest',
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
    '685f4d83f3fc39df72a681dbd6f05a97' => 
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
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
          'argument' => 'Prophecy\\Argument',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\LocalStockUpdaterTest',
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
    'd0debae6fe7b819cb118c2d9d172e81e' => 
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
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
          'argument' => 'Prophecy\\Argument',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\LocalStockUpdaterTest',
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
    '43169862a9794d0a59f41c1da14e7fed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether transactions are created.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
          'argument' => 'Prophecy\\Argument',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\LocalStockUpdaterTest',
         'functionName' => 'testTransactionCreation',
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