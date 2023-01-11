<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/commerce_stock/modules/field/tests/src/Functional/StockLevelFieldTestBase.php-1634106758,/var/www/html/web/modules/contrib/commerce_stock/modules/field/tests/src/Kernel/StockLevelFieldCreationTrait.php-1634106758',
   'data' => 
  array (
    'f759eaf55170461e1ae4c44db557991b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a base class for stock level fields functional tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_field\\Functional',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stockbrowsertestbase' => 'Drupal\\Tests\\commerce_stock\\Functional\\StockBrowserTestBase',
          'stocklevelfieldcreationtrait' => 'Drupal\\Tests\\commerce_stock_field\\Kernel\\StockLevelFieldCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Functional\\StockLevelFieldTestBase',
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
    '94d1dbe5243d36252e9712addd6e5daa' => 
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
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Functional\\StockLevelFieldTestBase',
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
    '80214d4cd79f9549c98983a6bb43f292' => 
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
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Functional\\StockLevelFieldTestBase',
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
    '6b83fd67722fbf1e77ad246553df33a4' => 
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
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Functional\\StockLevelFieldTestBase',
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
    '48781c41b8e2fa1696dbafa5cbb63ec7' => 
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
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Functional\\StockLevelFieldTestBase',
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
    '7bac1fa8967da120642f94af68195b81' => 
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
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Functional\\StockLevelFieldTestBase',
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
    '8fabf99b9d594eda5c1367d19022358c' => 
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
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Functional\\StockLevelFieldTestBase',
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
    '0ddb9e7853d73f5bdcdb886df2ff1631' => 
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
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Functional\\StockLevelFieldTestBase',
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
    '6f55f7b0e3291fae975c283cab3efd93' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The test product variation.
   *
   * @var \\Drupal\\commerce_product\\Entity\\ProductVariationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_field\\Functional',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stockbrowsertestbase' => 'Drupal\\Tests\\commerce_stock\\Functional\\StockBrowserTestBase',
          'stocklevelfieldcreationtrait' => 'Drupal\\Tests\\commerce_stock_field\\Kernel\\StockLevelFieldCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Functional\\StockLevelFieldTestBase',
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
    'd34522c40a44fe791774ebd62f624aac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_field\\Functional',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stockbrowsertestbase' => 'Drupal\\Tests\\commerce_stock\\Functional\\StockBrowserTestBase',
          'stocklevelfieldcreationtrait' => 'Drupal\\Tests\\commerce_stock_field\\Kernel\\StockLevelFieldCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Functional\\StockLevelFieldTestBase',
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
    'd898e8469b7686f430672c7c9c602f90' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_field\\Functional',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stockbrowsertestbase' => 'Drupal\\Tests\\commerce_stock\\Functional\\StockBrowserTestBase',
          'stocklevelfieldcreationtrait' => 'Drupal\\Tests\\commerce_stock_field\\Kernel\\StockLevelFieldCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Functional\\StockLevelFieldTestBase',
         'functionName' => 'getAdministratorPermissions',
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
    '54ae5c7eeee82f36f92b1877509d6b82' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Setting up the test.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock_field\\Functional',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'stockbrowsertestbase' => 'Drupal\\Tests\\commerce_stock\\Functional\\StockBrowserTestBase',
          'stocklevelfieldcreationtrait' => 'Drupal\\Tests\\commerce_stock_field\\Kernel\\StockLevelFieldCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock_field\\Functional\\StockLevelFieldTestBase',
         'functionName' => 'setup',
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