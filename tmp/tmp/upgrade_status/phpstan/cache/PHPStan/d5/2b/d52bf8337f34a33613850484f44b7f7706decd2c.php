<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/commerce_stock/src/StockUpdateInterface.php-1634106758',
   'data' => 
  array (
    '25dffad9f1f5cf0253690983d198cc06' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a common interface for writing stock.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\StockUpdateInterface',
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
    '55f061baa8fe5bd6cb646a4b976216e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Create a stock transaction.
   *
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $entity
   *   The purchasable entity.
   * @param int $location_id
   *   The location ID.
   * @param string $zone
   *   The zone.
   * @param float $quantity
   *   Tbe quantity.
   * @param float $unit_cost
   *   The unit cost.
   * @param string $currency_code
   *   The currency code.
   * @param int $transaction_type_id
   *   The transaction type ID.
   * @param array $metadata
   *   Holds all the optional values those are:
   *     - related_tid: related transaction.
   *     - related_oid: related order.
   *     - related_uid: related user.
   *     - data: Serialized data array.
   *
   * @return int
   *   Return the ID of the transaction.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\StockUpdateInterface',
         'functionName' => 'createTransaction',
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