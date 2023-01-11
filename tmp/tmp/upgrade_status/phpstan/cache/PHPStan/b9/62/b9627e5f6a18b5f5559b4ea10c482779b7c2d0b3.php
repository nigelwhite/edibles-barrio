<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/commerce_stock/src/StockServiceConfigInterface.php-1634106758',
   'data' => 
  array (
    'c18db91d42aa12f4b1a7a746f1b62a5f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The stock service configuration interface.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'context' => 'Drupal\\commerce\\Context',
        ),
         'className' => 'Drupal\\commerce_stock\\StockServiceConfigInterface',
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
    'f3bb95c43c44d758f49238435fd89e22' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the location for automatic stock allocation.
   *
   * This is normally a designated location to act as the main warehouse.
   * This can also be a location worked out in realtime using the provided
   * context (order & customer), entity and the quantity requested.
   *
   * @param \\Drupal\\commerce\\Context $context
   *   The context containing the customer & store.
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $entity
   *   The purchasable entity.
   * @param int $quantity
   *   The quantity.
   *
   * @return \\Drupal\\commerce_stock\\StockLocationInterface
   *   The stock location.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'context' => 'Drupal\\commerce\\Context',
        ),
         'className' => 'Drupal\\commerce_stock\\StockServiceConfigInterface',
         'functionName' => 'getTransactionLocation',
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
    '552cffde5e6427617b97cad873ad5689' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get locations holding stock.
   *
   * The locations should be filtered for the provided context and purchasable
   * entity.
   *
   * @param \\Drupal\\commerce\\Context $context
   *   The context containing the customer & store.
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $entity
   *   The purchasable entity.
   *
   * @return \\Drupal\\commerce_stock\\StockLocationInterface[]
   *   List of relevant locations.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'context' => 'Drupal\\commerce\\Context',
        ),
         'className' => 'Drupal\\commerce_stock\\StockServiceConfigInterface',
         'functionName' => 'getAvailabilityLocations',
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