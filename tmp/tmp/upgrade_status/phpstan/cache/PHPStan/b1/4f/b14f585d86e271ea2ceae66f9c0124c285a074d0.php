<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/commerce_stock/modules/field/tests/src/Kernel/StockLevelTest.php-1634106758,/var/www/html/web/modules/contrib/commerce_stock/modules/field/tests/src/Kernel/StockLevelFieldCreationTrait.php-1634106758,/var/www/html/web/modules/contrib/commerce_stock/modules/local_storage/tests/src/Kernel/StockTransactionQueryTrait.php-1634106758',
   'data' => 
  array (
    '60389014a3f3e910bb879fda6fcd12e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Ensure the stock level field works.
 *
 * @coversDefaultClass \\Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType\\StockLevel
 *
 * @group commerce_stock
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_field\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklevel' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType\\StockLevel',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
          'stocktransactionquerytrait' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\StockTransactionQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Kernel\\StockLevelTest',
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
    'f2cb99d39d8c9db59687776402d49418' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods to attach and configure a stock level field.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_field\\Kernel',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Kernel\\StockLevelTest',
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
    'a0bf74386a28e4cfc29dfb80d22a7aa3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The name of the test field.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_field\\Kernel',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Kernel\\StockLevelTest',
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
    'b045b6f738770a56fb50067484f9ff90' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a new stock level field.
   *
   * @param string $entity_type
   *   The entity type.
   * @param string $bundle
   *   The bundle that this field will be added to.
   * @param string $widget_id
   *   The id of the widget which should be used.
   * @param array $storage_settings
   *   A list of field storage settings that will be added to the defaults.
   * @param array $field_settings
   *   A list of instance settings that will be added to the instance defaults.
   * @param array $widget_settings
   *   A list of widget settings that will be added to the widget defaults.
   * @param string $formatter_id
   *   The id of the formatter.
   * @param array $formatter_settings
   *   A list of formatter settings that will be added to the formatter
   *   defaults.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface|\\Drupal\\field\\Entity\\FieldStorageConfig
   *   The field configuration.
   *
   * @throws \\Drupal\\Core\\Entity\\EntityStorageException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_field\\Kernel',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Kernel\\StockLevelTest',
         'functionName' => 'createStockLevelField',
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
    '03b060a328bce8ab6f1f954f895b5869' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Attaches a stock level field to an entity.
   *
   * @param Drupal\\field\\Entity\\FieldStorageConfig $field_storage
   *   The field storage.
   * @param string $bundle
   *   The bundle this field will be added to.
   * @param array $field_settings
   *   A list of field settings that will be added to the defaults.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_field\\Kernel',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Kernel\\StockLevelTest',
         'functionName' => 'attachStockLevelField',
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
    '8b9d96efd75a6329f1d58053545420d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set, update and configure the widget for the stock level field.
   *
   * @param string $widget_id
   *   The id of the widget.
   * @param array $widget_settings
   *   A list of widget settings that will be added to the widget defaults.
   * @param string $entity_type
   *   The entity type.
   * @param string $bundle
   *   The bundle that this field will be added to.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_field\\Kernel',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Kernel\\StockLevelTest',
         'functionName' => 'configureFormDisplay',
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
    '6e52246aaf1d8cd2116d3cc7258e197c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set, update and configure the widget for the stock level field.
   *
   * @param string $formatter_id
   *   The id of the formatter.
   * @param array $formatter_settings
   *   A list of formatter settings that will be added to the widget defaults.
   * @param string $entity_type
   *   The entity type.
   * @param string $bundle
   *   The bundle that this field will be added to.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_field\\Kernel',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Kernel\\StockLevelTest',
         'functionName' => 'configureViewDisplay',
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
    '2d6dc86686de45238d439607e5e4a080' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Return the field name.
   *
   * @return string
   *   The name of the field.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_field\\Kernel',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Kernel\\StockLevelTest',
         'functionName' => 'getFieldname',
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
    '4570005defdacba690f46da3a774c7a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods to query the transaction database.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Kernel\\StockLevelTest',
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
    '4e940b527b4415d41c87405cdae03fbf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Return the last transaction for a entity.
   *
   * @param string $entity_id
   *   The id of the entity to.
   *
   * @return obj
   *   The transaction.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Kernel\\StockLevelTest',
         'functionName' => 'getLastEntityTransaction',
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
    '34ec2dcfeb75dd2e90f237f5e88c767b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Return the last transaction in the table.
   *
   * @return obj
   *   The transaction.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_local\\Kernel',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Kernel\\StockLevelTest',
         'functionName' => 'getLastTransaction',
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
    'd67dedf0f4696fe6da5d4b33462c6b6b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_field\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklevel' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType\\StockLevel',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
          'stocktransactionquerytrait' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\StockTransactionQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Kernel\\StockLevelTest',
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
    '192a3ab6e0e258b7c52bdcf0e8c00269' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A test variation.
   *
   * @var \\Drupal\\commerce_product\\Entity\\ProductVariationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_field\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklevel' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType\\StockLevel',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
          'stocktransactionquerytrait' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\StockTransactionQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Kernel\\StockLevelTest',
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
    '6110f4c43edd8fca0bc7cbac9c162bcb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The stock service manager.
   *
   * @var \\Drupal\\commerce_stock\\StockServiceManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_field\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklevel' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType\\StockLevel',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
          'stocktransactionquerytrait' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\StockTransactionQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Kernel\\StockLevelTest',
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
    '39c959189f4f02f5f3cb8f354942001c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The stock checker.
   *
   * @var \\Drupal\\commerce_stock\\StockCheckInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_field\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklevel' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType\\StockLevel',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
          'stocktransactionquerytrait' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\StockTransactionQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Kernel\\StockLevelTest',
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
    '3415d73ddf3dabaccae18716b0cadec1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The stock service configuration.
   *
   * @var \\Drupal\\commerce_stock\\stockServiceConfiguration
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_field\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklevel' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType\\StockLevel',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
          'stocktransactionquerytrait' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\StockTransactionQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Kernel\\StockLevelTest',
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
    'd13265febfc530c50285d8c1f22ce953' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of location ids for variation1.
   *
   * @var int[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_field\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklevel' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType\\StockLevel',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
          'stocktransactionquerytrait' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\StockTransactionQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Kernel\\StockLevelTest',
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
    '22625dc111c779d4f0a04bf51fd07264' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_field\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklevel' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType\\StockLevel',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
          'stocktransactionquerytrait' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\StockTransactionQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Kernel\\StockLevelTest',
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
    '8bd22ab9c5cdf917736a52898ccfdac2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test always in stock field is added to purchasable entities.
   *
   * Test that a commerce_stock_always_in_stock base field
   * is added to purchasable entities.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_field\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklevel' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType\\StockLevel',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
          'stocktransactionquerytrait' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\StockTransactionQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Kernel\\StockLevelTest',
         'functionName' => 'testBaseFieldisAddedtoPurchasableEntity',
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
    'd0bec7330684d61e5d9b9295df2792b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether setting a plain value results in increased stock level.
   *
   * @throws \\Drupal\\Core\\Entity\\EntityStorageException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_field\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklevel' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType\\StockLevel',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
          'stocktransactionquerytrait' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\StockTransactionQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Kernel\\StockLevelTest',
         'functionName' => 'testStockLevelStockIn',
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
    '8ecba3e732437323e70855daaa2de9df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether setting a plain negative results in reduced stock level.
   *
   * @throws \\Drupal\\Core\\Entity\\EntityStorageException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_field\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklevel' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType\\StockLevel',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
          'stocktransactionquerytrait' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\StockTransactionQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Kernel\\StockLevelTest',
         'functionName' => 'testStockLevelStockOut',
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
    'b9b22f00cee20357bdcf520b6d56bfee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether a wrong value is throwing.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_field\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklevel' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType\\StockLevel',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
          'stocktransactionquerytrait' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\StockTransactionQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Kernel\\StockLevelTest',
         'functionName' => 'testInvalidArgumentThrows',
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
    'b334deab2a49bfda79a31dde145fc1eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether all data are correctly saved with the transaction.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_field\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklevel' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType\\StockLevel',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
          'stocktransactionquerytrait' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\StockTransactionQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Kernel\\StockLevelTest',
         'functionName' => 'testTransactionData',
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
    '40a574846fcda17246ab8447f5b0f3c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the ::generateSampleValue() method.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_field\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stocklevel' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType\\StockLevel',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'commercestockkerneltestbase' => 'Drupal\\Tests\\commerce_stock\\Kernel\\CommerceStockKernelTestBase',
          'stocktransactionquerytrait' => 'Drupal\\Tests\\commerce_stock_local\\Kernel\\StockTransactionQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Kernel\\StockLevelTest',
         'functionName' => 'testSampeValueGenerator',
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