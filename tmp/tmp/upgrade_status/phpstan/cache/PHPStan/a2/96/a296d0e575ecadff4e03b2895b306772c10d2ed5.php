<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/commerce_stock/src/StockCheckInterface.php-1634106758',
   'data' => 
  array (
    'a09dca8820d01ff496694587898731c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The stock checker interface.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\StockCheckInterface',
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
    '79b2839aa5887a44be536537b420753a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the stock level.
   *
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $entity
   *   The purchasable entity.
   * @param \\Drupal\\commerce_stock\\StockLocationInterface[] $locations
   *   The locations.
   *
   * @return int
   *   The stock level.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\StockCheckInterface',
         'functionName' => 'getTotalStockLevel',
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
    'e541097ec0650b82a33b5e98a063ef60' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check if purchasable entity is in stock.
   *
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $entity
   *   The purchasable entity.
   * @param \\Drupal\\commerce_stock\\StockLocationInterface[] $locations
   *   The locations to check against.
   *
   * @return bool
   *   TRUE if the entity is in stock, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\StockCheckInterface',
         'functionName' => 'getIsInStock',
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
    '172e33f533ea5c676e97cdc4bdc682cc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check if entity is always in stock.
   *
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $entity
   *   The purchasable entity.
   *
   * @return bool
   *   TRUE if the entity is always in stock, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\StockCheckInterface',
         'functionName' => 'getIsAlwaysInStock',
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