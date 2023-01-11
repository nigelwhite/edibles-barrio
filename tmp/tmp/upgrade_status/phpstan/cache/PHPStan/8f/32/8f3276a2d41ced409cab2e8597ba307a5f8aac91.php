<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/commerce_stock/src/StockServiceManagerInterface.php-1634106758',
   'data' => 
  array (
    'd7659b7ec811d175a23a86a25691d357' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The stock service manager interface.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\StockServiceManagerInterface',
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
    'db4ac202753974ccbedf02a26adc7b7a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a Stock service.
   *
   * @param \\Drupal\\commerce_stock\\StockServiceInterface $stock_service
   *   The stock service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\StockServiceManagerInterface',
         'functionName' => 'addService',
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
    '29615b3d2a22551afd0a322eaab5e115' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get a service relevant for the entity.
   *
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $entity
   *   The purchasable entity (most likely a product variation entity).
   *
   * @return \\Drupal\\commerce_stock\\StockServiceInterface
   *   The appropriate stock service for the given purchasable entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\StockServiceManagerInterface',
         'functionName' => 'getService',
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
    'd0d407ca8bcb95346ca5a4c3cb78a2e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an array of all registered stock services.
   *
   * @return \\Drupal\\commerce_stock\\StockServiceInterface[]
   *   All registered stock services keyed by service ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\StockServiceManagerInterface',
         'functionName' => 'listServices',
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
    '471931136a8d75053152f41b8a325596' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an array of the IDs of all registered stock services.
   *
   * @return array
   *   Array of the IDs of all registered stock services.
   *   Format is: array(\'service key\' => \'service name\')
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\StockServiceManagerInterface',
         'functionName' => 'listServiceIds',
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