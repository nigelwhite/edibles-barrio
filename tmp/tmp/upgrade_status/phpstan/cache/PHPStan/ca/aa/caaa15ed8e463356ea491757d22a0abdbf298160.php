<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/commerce_stock/tests/src/FunctionalJavascript/StockWebDriverTestBase.php-1634106758,/var/www/html/web/modules/contrib/commerce/modules/store/src/StoreCreationTrait.php-1636645795,/var/www/html/web/modules/contrib/commerce/tests/src/Traits/CommerceBrowserTestTrait.php-1636645795',
   'data' => 
  array (
    'b9b84edd77f6f35d3fe7e52ba085517e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines base class for commerce stock test cases.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript',
         'uses' => 
        array (
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'jswebassert' => 'Drupal\\FunctionalJavascriptTests\\JSWebAssert',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript\\StockWebDriverTestBase',
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
    'e9ece0cad356a1bee1674325c4012b0c' => 
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
         'className' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript\\StockWebDriverTestBase',
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
    '152f5ca87d84e7eea30d67bfb8e93647' => 
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
         'className' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript\\StockWebDriverTestBase',
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
    '621dde81f832554e27f5cba2eeeee4f7' => 
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
         'className' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript\\StockWebDriverTestBase',
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
    '4fdaf910bd8c3a8155c4587aa4f22f78' => 
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
         'className' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript\\StockWebDriverTestBase',
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
    'e70c50d2eae6cf7a9d20ce533ae17ff4' => 
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
         'className' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript\\StockWebDriverTestBase',
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
    '822cbd96fb82bb416cbf8d38d593d061' => 
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
         'className' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript\\StockWebDriverTestBase',
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
    '1ce4ea933c2c3e59dbd601e1fd979862' => 
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
         'className' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript\\StockWebDriverTestBase',
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
    'eb0fdd00edae43d11f64d82c77dc20f9' => 
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
         'className' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript\\StockWebDriverTestBase',
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
    'e3170889b23b5ae1568027d232c737f2' => 
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
         'className' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript\\StockWebDriverTestBase',
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
    'f60f8512355cf8e8fc75994d3cc782cc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript',
         'uses' => 
        array (
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'jswebassert' => 'Drupal\\FunctionalJavascriptTests\\JSWebAssert',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript\\StockWebDriverTestBase',
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
    '8337e7f0a0cb04f9fea1e7eb56ad8bb4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The stock service manager.
   *
   * @var \\Drupal\\commerce_stock\\StockServiceManager
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript',
         'uses' => 
        array (
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'jswebassert' => 'Drupal\\FunctionalJavascriptTests\\JSWebAssert',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript\\StockWebDriverTestBase',
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
    '52400a00b604d8d3ee86ee2832ebab6f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The product to test against.
   *
   * @var \\Drupal\\commerce_product\\Entity\\ProductInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript',
         'uses' => 
        array (
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'jswebassert' => 'Drupal\\FunctionalJavascriptTests\\JSWebAssert',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript\\StockWebDriverTestBase',
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
    '0426a34c74ad2bcca059a2b0dd57b7ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Array of product variations.
   *
   * @var \\Drupal\\commerce_product\\Entity\\ProductVariationInterface[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript',
         'uses' => 
        array (
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'jswebassert' => 'Drupal\\FunctionalJavascriptTests\\JSWebAssert',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript\\StockWebDriverTestBase',
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
    'eff475d66f68ab440aa09b65252cedd2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The stores to test against.
   *
   * @var \\Drupal\\commerce_store\\Entity\\StoreInterface[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript',
         'uses' => 
        array (
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'jswebassert' => 'Drupal\\FunctionalJavascriptTests\\JSWebAssert',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript\\StockWebDriverTestBase',
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
    'b9de13c8ff735867436da07d9c731e24' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A test user with administrative privileges.
   *
   * @var \\Drupal\\user\\UserInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript',
         'uses' => 
        array (
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'jswebassert' => 'Drupal\\FunctionalJavascriptTests\\JSWebAssert',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript\\StockWebDriverTestBase',
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
    'f4483920b45c212742cec01c2820df96' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript',
         'uses' => 
        array (
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'jswebassert' => 'Drupal\\FunctionalJavascriptTests\\JSWebAssert',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript\\StockWebDriverTestBase',
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
    'd66b48fbd0d93aeb05d4f1e2fff6e50a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript',
         'uses' => 
        array (
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'jswebassert' => 'Drupal\\FunctionalJavascriptTests\\JSWebAssert',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript\\StockWebDriverTestBase',
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
    '3cea973ee6efa0b86c1d677b4f3e4c78' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Waits for the given time or until the given JS condition becomes TRUE.
   *
   * @param string $condition
   *   JS condition to wait until it becomes TRUE.
   * @param int $timeout
   *   (Optional) Timeout in milliseconds, defaults to 1000.
   * @param string $message
   *   (optional) A message to display with the assertion. If left blank, a
   *   default message will be displayed.
   *
   * @see \\Behat\\Mink\\Driver\\DriverInterface::evaluateScript()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript',
         'uses' => 
        array (
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'jswebassert' => 'Drupal\\FunctionalJavascriptTests\\JSWebAssert',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript\\StockWebDriverTestBase',
         'functionName' => 'assertJsCondition',
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
    'd37f2134ba683a0d7ca2b8e1090df6be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Waits for jQuery to become active and animations to complete.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript',
         'uses' => 
        array (
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'jswebassert' => 'Drupal\\FunctionalJavascriptTests\\JSWebAssert',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript\\StockWebDriverTestBase',
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
    'd8cfe02084c39e65e94d4e7dff4b7483' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @return \\Drupal\\FunctionalJavascriptTests\\JSWebAssert
   *   A new web-assert option for asserting the presence of elements with.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript',
         'uses' => 
        array (
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'jswebassert' => 'Drupal\\FunctionalJavascriptTests\\JSWebAssert',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_stock\\FunctionalJavascript\\StockWebDriverTestBase',
         'functionName' => 'assertSession',
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