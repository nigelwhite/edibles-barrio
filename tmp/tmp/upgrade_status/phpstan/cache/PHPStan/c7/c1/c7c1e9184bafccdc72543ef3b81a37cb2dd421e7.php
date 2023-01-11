<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/commerce_stock/src/Plugin/StockEventsInterface.php-1634106758',
   'data' => 
  array (
    '7dea6c215079488ca62a8ae63653a98a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for Stock events plugins.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock\\Plugin',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\Plugin\\StockEventsInterface',
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
    'bd18e03d9d64fa7b4b35fdd6b84f0b22' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A stock event with transaction details.
   *
   * The stock event gets both the details about the type of the event and the
   * transaction it should create.
   * It can simply create the transaction from the details provided, add logic
   * to check if the transaction is to be created or override the details
   * provided before creating the transaction.
   *
   * @param \\Drupal\\commerce\\Context $context
   *   The context containing the customer & store.
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $entity
   *   The purchasable entity.
   * @param int $stockEvent
   *   The event ID that\'s responsible for the transaction.
   * @param int $quantity
   *   The quantity.
   * @param \\Drupal\\commerce_stock\\StockLocationInterface $location
   *   The stock location.
   * @param int $transaction_type
   *   The transaction type ID.
   * @param array $metadata
   *   Holds all the optional values those are:
   *     - related_oid: related order.
   *     - related_uid: related user.
   *     - data: Serialized data array holding a message.
   *
   * @return int
   *   Return the ID of the transaction or FALSE if no transaction created.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock\\Plugin',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\Plugin\\StockEventsInterface',
         'functionName' => 'stockEvent',
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
    '1506ac0b47e428bba4878289d18361a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Return form elements holding the configuration options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock\\Plugin',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\Plugin\\StockEventsInterface',
         'functionName' => 'configFormOptions',
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
    '9567fd6ddc5381eba5cbafd43c030869' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Save the configuration options.
   *
   * @param array $form
   *   The stock manager configuration form holding the option elements.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The stock manager configuration form state.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock\\Plugin',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\Plugin\\StockEventsInterface',
         'functionName' => 'saveConfigFormOptions',
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