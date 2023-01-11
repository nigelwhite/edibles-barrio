<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/commerce_stock/src/Plugin/StockEvents/CoreStockEvents.php-1639845390',
   'data' => 
  array (
    '4595022dd0088a54010d2f82bf04c3cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Core Stock Events.
 *
 * @StockEvents(
 *   id = "core_stock_events",
 *   description = @Translation("Core stock Events."),
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock\\Plugin\\StockEvents',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'stockeventsinterface' => 'Drupal\\commerce_stock\\Plugin\\StockEventsInterface',
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\Plugin\\StockEvents\\CoreStockEvents',
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
    '2b39a9e8ec79f17c43965c26d0c0f639' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock\\Plugin\\StockEvents',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'stockeventsinterface' => 'Drupal\\commerce_stock\\Plugin\\StockEventsInterface',
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\Plugin\\StockEvents\\CoreStockEvents',
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
    'd1ec28700b9fe2d263475c3306c22667' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock\\Plugin\\StockEvents',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'stockeventsinterface' => 'Drupal\\commerce_stock\\Plugin\\StockEventsInterface',
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\Plugin\\StockEvents\\CoreStockEvents',
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
    '6e3611e2f3097ef803c3b81066caa822' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock\\Plugin\\StockEvents',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'stockeventsinterface' => 'Drupal\\commerce_stock\\Plugin\\StockEventsInterface',
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\Plugin\\StockEvents\\CoreStockEvents',
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
    'bcbab9398391689b8e2cb3bfd3e170b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * To ensure backwards compatibility we introduced StockEventTypes plugins
   * without changing the StockEventsInterface. This functions maps the
   * interface constants to StockEventTypes.
   *
   * @param int $event_type_id
   *   The StockEventsInterface interface constant.
   *
   * @return string
   *   The StockEventType id or FALSE if not exists.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock\\Plugin\\StockEvents',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'stockeventsinterface' => 'Drupal\\commerce_stock\\Plugin\\StockEventsInterface',
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\Plugin\\StockEvents\\CoreStockEvents',
         'functionName' => 'mapStockEventTypes',
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
    '640aa6b80b671e872fb2719bda4d0165' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * To ensure backwards compatibility we introduced StockEventTypes plugins
   * without changing the StockEventsInterface. This functions maps the
   * interface constants to StockEventTypes.
   *
   * @param string $stock_event_type_id
   *   The StockEventType id.
   *
   * @return int
   *   The StockEventsInterface interface constant or FALSE if it not exists.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock\\Plugin\\StockEvents',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'stockeventsinterface' => 'Drupal\\commerce_stock\\Plugin\\StockEventsInterface',
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\Plugin\\StockEvents\\CoreStockEvents',
         'functionName' => 'mapStockEventIds',
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
    '622ec484de611c30d40e55613dbb0f7e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the map of StockEvenTypes.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock\\Plugin\\StockEvents',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'stockeventsinterface' => 'Drupal\\commerce_stock\\Plugin\\StockEventsInterface',
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\Plugin\\StockEvents\\CoreStockEvents',
         'functionName' => 'getEventTypeMap',
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