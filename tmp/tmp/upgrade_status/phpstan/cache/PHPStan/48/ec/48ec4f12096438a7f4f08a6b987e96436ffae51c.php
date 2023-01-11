<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/commerce_stock/src/Plugin/StockEvents/CoreStockEventsBase.php-1634106758',
   'data' => 
  array (
    '7d9ca39948fc8f661e9c2542e3cdb060' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Core stock events base class.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock\\Plugin\\StockEvents',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'stockeventtypeinterface' => 'Drupal\\commerce_stock\\Plugin\\Commerce\\StockEventType\\StockEventTypeInterface',
          'stockeventsinterface' => 'Drupal\\commerce_stock\\Plugin\\StockEventsInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
        ),
         'className' => 'Drupal\\commerce_stock\\Plugin\\StockEvents\\CoreStockEventsBase',
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
    '3040574429bc18dc800574ac37522346' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helper method for building the transaction metadata.
   *
   * @param \\Drupal\\commerce_order\\Entity\\Order $order
   *   The commerce order.
   * @param \\Drupal\\commerce_stock\\Plugin\\Commerce\\StockEventType\\StockEventTypeInterface $stock_event_type
   *   The stock event type.
   * @param string|null $message
   *   An optional transaction message.
   * @param array $data
   *   Arbitrary data to save in transactions metadata.
   *
   * @return array
   *   The metadata.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock\\Plugin\\StockEvents',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'stockeventtypeinterface' => 'Drupal\\commerce_stock\\Plugin\\Commerce\\StockEventType\\StockEventTypeInterface',
          'stockeventsinterface' => 'Drupal\\commerce_stock\\Plugin\\StockEventsInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
        ),
         'className' => 'Drupal\\commerce_stock\\Plugin\\StockEvents\\CoreStockEventsBase',
         'functionName' => 'getMetadata',
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