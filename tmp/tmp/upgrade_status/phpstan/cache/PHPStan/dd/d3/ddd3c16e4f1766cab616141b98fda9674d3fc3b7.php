<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/commerce_stock/tests/src/Functional/StockBrowserTestBase.php-1634106758,/var/www/html/web/core/modules/field/tests/src/Traits/EntityReferenceTestTrait.php-1637184268,/var/www/html/web/modules/contrib/commerce/modules/store/src/StoreCreationTrait.php-1636645795,/var/www/html/web/modules/contrib/commerce/tests/src/Traits/CommerceBrowserTestTrait.php-1636645795',
   'data' => 
  array (
    'd1aa757d5a909b367f80caa5ad3de694' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines base class for commerce stock test cases.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock\\Functional',
         'uses' => 
        array (
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'commercebrowsertestbase' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
          'entityreferencetesttrait' => 'Drupal\\Tests\\field\\Traits\\EntityReferenceTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock\\Functional\\StockBrowserTestBase',
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
    '09c9c40a5132fcca3da62aec44a50918' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The testing profile.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock\\Functional',
         'uses' => 
        array (
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'commercebrowsertestbase' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
          'entityreferencetesttrait' => 'Drupal\\Tests\\field\\Traits\\EntityReferenceTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock\\Functional\\StockBrowserTestBase',
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
    '6c2792fa81989b892b16adaef1e95cfe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides common functionality for the EntityReference test classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\field\\Traits',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock\\Functional\\StockBrowserTestBase',
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
    '3831d52b802c4b14dd33ae6e835b7ffd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a field of an entity reference field storage on the specified bundle.
   *
   * @param string $entity_type
   *   The type of entity the field will be attached to.
   * @param string $bundle
   *   The bundle name of the entity the field will be attached to.
   * @param string $field_name
   *   The name of the field; if it already exists, a new instance of the existing
   *   field will be created.
   * @param string $field_label
   *   The label of the field.
   * @param string $target_entity_type
   *   The type of the referenced entity.
   * @param string $selection_handler
   *   The selection handler used by this field.
   * @param array $selection_handler_settings
   *   An array of settings supported by the selection handler specified above.
   *   (e.g. \'target_bundles\', \'sort\', \'auto_create\', etc).
   * @param int $cardinality
   *   The cardinality of the field.
   *
   * @see \\Drupal\\Core\\Entity\\Plugin\\EntityReferenceSelection\\SelectionBase::buildConfigurationForm()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\field\\Traits',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock\\Functional\\StockBrowserTestBase',
         'functionName' => 'createEntityReferenceField',
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
    '03cfd118381efffd0dff1e85d61e090f' => 
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
         'className' => 'Drupal\\Tests\\commerce_stock\\Functional\\StockBrowserTestBase',
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
    '2c81fcbbcd879f5ffc396ba9aa02abbf' => 
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
         'className' => 'Drupal\\Tests\\commerce_stock\\Functional\\StockBrowserTestBase',
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
    '600d654bb22584c7e72bf7d151a08b19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for Commerce functional tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock\\Functional\\StockBrowserTestBase',
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
    '77b4f9320cd8e1ad0ea22a3a6da549b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a new entity.
   *
   * @param string $entity_type
   *   The entity type to be created.
   * @param array $values
   *   An array of settings.
   *   Example: \'id\' => \'foo\'.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface
   *   A new entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock\\Functional\\StockBrowserTestBase',
         'functionName' => 'createEntity',
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
    'd34c06a086bfd4c70ea4553447b06796' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityStorageInterface $storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock\\Functional\\StockBrowserTestBase',
         'functionName' => 'createEntity',
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
    '24de1dc552ec1d588dde34bc00d5d2d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reloads the entity after clearing the static cache.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity to reload.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface
   *   The reloaded entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock\\Functional\\StockBrowserTestBase',
         'functionName' => 'reloadEntity',
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
    '2e2b054ad444453e8b0293db6c24bc63' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityStorageInterface $storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock\\Functional\\StockBrowserTestBase',
         'functionName' => 'reloadEntity',
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
    '217f8f05dd8139884a2e79b3ecfdb55d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Debugger method to save additional HTML output.
   *
   * The base class will only save browser output when accessing page using
   * ::drupalGet and providing a printer class to PHPUnit. This method
   * is intended for developers to help debug browser test failures and capture
   * more verbose output.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock\\Functional\\StockBrowserTestBase',
         'functionName' => 'saveHtmlOutput',
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
    '8544c2b40c1f4444e62f56f8d101eb0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that the passed field values are correct.
   *
   * Ignores differences in ordering.
   *
   * @param array $field_values
   *   The field values.
   * @param array $expected_values
   *   The expected values.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages:
   *   use \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat()
   *   to embed variables in the message text, not t().
   *   If left blank, a default message will be displayed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock\\Functional\\StockBrowserTestBase',
         'functionName' => 'assertFieldValues',
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
    'bc2874a14a911bc18777f427f6929ad8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock\\Functional',
         'uses' => 
        array (
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'commercebrowsertestbase' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
          'entityreferencetesttrait' => 'Drupal\\Tests\\field\\Traits\\EntityReferenceTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock\\Functional\\StockBrowserTestBase',
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
    '815d27e19c01fcb678e4285f0ec56c9c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The stock service manager.
   *
   * @var \\Drupal\\commerce_stock\\StockServiceManager
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock\\Functional',
         'uses' => 
        array (
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'commercebrowsertestbase' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
          'entityreferencetesttrait' => 'Drupal\\Tests\\field\\Traits\\EntityReferenceTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock\\Functional\\StockBrowserTestBase',
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
    'a03e6efec9cda73f6bf40cdaea41d966' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The product to test against.
   *
   * @var \\Drupal\\commerce_product\\Entity\\ProductInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock\\Functional',
         'uses' => 
        array (
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'commercebrowsertestbase' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
          'entityreferencetesttrait' => 'Drupal\\Tests\\field\\Traits\\EntityReferenceTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock\\Functional\\StockBrowserTestBase',
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
    '2b556de82278760780dd0426342c50c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Array of product variations.
   *
   * @var \\Drupal\\commerce_product\\Entity\\ProductVariationInterface[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock\\Functional',
         'uses' => 
        array (
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'commercebrowsertestbase' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
          'entityreferencetesttrait' => 'Drupal\\Tests\\field\\Traits\\EntityReferenceTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock\\Functional\\StockBrowserTestBase',
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
    '83846b64ae107908c054604b9637b669' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The stores to test against.
   *
   * @var \\Drupal\\commerce_store\\Entity\\StoreInterface[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock\\Functional',
         'uses' => 
        array (
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'commercebrowsertestbase' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
          'entityreferencetesttrait' => 'Drupal\\Tests\\field\\Traits\\EntityReferenceTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock\\Functional\\StockBrowserTestBase',
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
    '9b5698db9f1246d096da4a19859ae3dc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock\\Functional',
         'uses' => 
        array (
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'commercebrowsertestbase' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
          'entityreferencetesttrait' => 'Drupal\\Tests\\field\\Traits\\EntityReferenceTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock\\Functional\\StockBrowserTestBase',
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
    '2ff90bde60da20c54c2be3d19f318ac4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock\\Functional',
         'uses' => 
        array (
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'commercebrowsertestbase' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
          'entityreferencetesttrait' => 'Drupal\\Tests\\field\\Traits\\EntityReferenceTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock\\Functional\\StockBrowserTestBase',
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
    '2be3a794985353531034c3eb2ddc4719' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Waits for jQuery to become active and animations to complete.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock\\Functional',
         'uses' => 
        array (
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'commercebrowsertestbase' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
          'entityreferencetesttrait' => 'Drupal\\Tests\\field\\Traits\\EntityReferenceTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock\\Functional\\StockBrowserTestBase',
         'functionName' => 'waitForAjaxToFinish',
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