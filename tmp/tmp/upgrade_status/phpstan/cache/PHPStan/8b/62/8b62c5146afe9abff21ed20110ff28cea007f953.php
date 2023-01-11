<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/commerce_stock/src/StockTransactionsInterface.php-1634106758',
   'data' => 
  array (
    '248c3229ee99d93ed81b6579627fd3ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a common interface for creating stock transactions.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'context' => 'Drupal\\commerce\\Context',
        ),
         'className' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
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
    'd6b40d3c822a516609064010cdddab03' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the active commerce context.
   *
   * This is to support UI calls.
   *
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $entity
   *   The purchasable entity (most likely a product variation entity).
   *
   * @throws \\Exception
   *
   * @return \\Drupal\\commerce\\Context
   *   The context containing the customer & store.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'context' => 'Drupal\\commerce\\Context',
        ),
         'className' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
         'functionName' => 'getContext',
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
    'f2ea186502b435d66d63e1718ed265d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks that the context returned is valid for $entity.
   *
   * This is to support UI calls.
   *
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $entity
   *   The purchasable entity (most likely a product variation entity).
   *
   * @return bool
   *   TRUE if valid, FALSE if not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'context' => 'Drupal\\commerce\\Context',
        ),
         'className' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
         'functionName' => 'isValidContext',
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
    '38d6b0ff8b91d41329a2437f001de87b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the location to be used for automatic stock allocation.
   *
   * This is normally done by calling the stock service
   * StockServiceConfigInterface getTransactionLocation() and is provided as a
   * util function.
   *
   * @param \\Drupal\\commerce\\Context $context
   *   The context containing the customer & store.
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $entity
   *   The purchasable entity (most likely a product variation entity).
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
         'className' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
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
    '4c2523fbdbae0c2e32c7893002918b56' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Create a transaction.
   *
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $entity
   *   The purchasable entity (most likely a product variation entity).
   * @param int $location_id
   *   The location ID.
   * @param string $zone
   *   The zone.
   * @param float $quantity
   *   The quantity.
   * @param float $unit_cost
   *   The unit cost.
   * @param string $currency_code
   *   The currency code.
   * @param int $transaction_type_id
   *   Transaction type ID.
   * @param array $metadata
   *   A metadata array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'context' => 'Drupal\\commerce\\Context',
        ),
         'className' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
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
    '05e8a9a6dbf745f2a9ee2d860739c003' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Receive stock.
   *
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $entity
   *   The purchasable entity (most likely a product variation entity).
   * @param int $location_id
   *   The location ID.
   * @param string $zone
   *   The zone.
   * @param float $quantity
   *   The quantity.
   * @param float $unit_cost
   *   The unit cost.
   * @param string $currency_code
   *   The currency code.
   * @param string $message
   *   The message.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'context' => 'Drupal\\commerce\\Context',
        ),
         'className' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
         'functionName' => 'receiveStock',
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
    '31fe56695148a6f5aee5c15307b9e837' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sell stock.
   *
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $entity
   *   The purchasable entity (most likely a product variation entity).
   * @param int $location_id
   *   The location ID.
   * @param string $zone
   *   The zone.
   * @param float $quantity
   *   The quantity.
   * @param float $unit_cost
   *   The unit cost.
   * @param string $currency_code
   *   The currency code.
   * @param int $order_id
   *   The order ID.
   * @param int $user_id
   *   The user ID.
   * @param string $message
   *   The message.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'context' => 'Drupal\\commerce\\Context',
        ),
         'className' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
         'functionName' => 'sellStock',
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
    '47c16ec11974ac84cb9c0d472f0bbe52' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Move stock.
   *
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $entity
   *   The purchasable entity (most likely a product variation entity).
   * @param int $from_location_id
   *   The source location ID.
   * @param int $to_location_id
   *   The target location ID.
   * @param string $from_zone
   *   The source zone.
   * @param string $to_zone
   *   The target zone.
   * @param float $quantity
   *   The quantity.
   * @param float $unit_cost
   *   The unit cost.
   * @param string $currency_code
   *   The currency code.
   * @param string $message
   *   The message.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'context' => 'Drupal\\commerce\\Context',
        ),
         'className' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
         'functionName' => 'moveStock',
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
    '0c6413295db5c7deedd238f73b49f75b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Stock returns.
   *
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $entity
   *   The purchasable entity (most likely a product variation entity).
   * @param int $location_id
   *   The location ID.
   * @param string $zone
   *   The zone.
   * @param float $quantity
   *   The quantity.
   * @param float $unit_cost
   *   The unit cost.
   * @param string $currency_code
   *   The currency code.
   * @param int $order_id
   *   The order ID.
   * @param int $user_id
   *   The user ID.
   * @param string $message
   *   The message.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'context' => 'Drupal\\commerce\\Context',
        ),
         'className' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
         'functionName' => 'returnStock',
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