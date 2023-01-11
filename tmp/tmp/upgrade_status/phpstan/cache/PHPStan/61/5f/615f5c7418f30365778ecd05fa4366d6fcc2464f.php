<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/commerce_stock/src/StockAvailabilityChecker.php-1634106758',
   'data' => 
  array (
    'c5e7ac81cc7af41cfb4314ef2511dab4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The entry point for availability checking through Commerce Stock.
 *
 * Proxies requests to stock services configured for each entity.
 *
 * @package Drupal\\commerce_stock
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'availabilitycheckerinterface' => 'Drupal\\commerce_order\\AvailabilityCheckerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'availabilityresult' => 'Drupal\\commerce_order\\AvailabilityResult',
        ),
         'className' => 'Drupal\\commerce_stock\\StockAvailabilityChecker',
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
    '8b67c65669db2f390c4a11fd875d8111' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The stock service manager.
   *
   * @var \\Drupal\\commerce_stock\\StockServiceManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'availabilitycheckerinterface' => 'Drupal\\commerce_order\\AvailabilityCheckerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'availabilityresult' => 'Drupal\\commerce_order\\AvailabilityResult',
        ),
         'className' => 'Drupal\\commerce_stock\\StockAvailabilityChecker',
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
    '9644512e2aecffe1345833e7e50f04ea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new StockAvailabilityChecker object.
   *
   * @param \\Drupal\\commerce_stock\\StockServiceManagerInterface $stock_service_manager
   *   The stock service manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'availabilitycheckerinterface' => 'Drupal\\commerce_order\\AvailabilityCheckerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'availabilityresult' => 'Drupal\\commerce_order\\AvailabilityResult',
        ),
         'className' => 'Drupal\\commerce_stock\\StockAvailabilityChecker',
         'functionName' => '__construct',
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
    '1d876cb6c94d667ea72956426f8486fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'availabilitycheckerinterface' => 'Drupal\\commerce_order\\AvailabilityCheckerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'availabilityresult' => 'Drupal\\commerce_order\\AvailabilityResult',
        ),
         'className' => 'Drupal\\commerce_stock\\StockAvailabilityChecker',
         'functionName' => 'applies',
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
    'e9b1db40db9ec917af09be7e9fbb66dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'availabilitycheckerinterface' => 'Drupal\\commerce_order\\AvailabilityCheckerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'availabilityresult' => 'Drupal\\commerce_order\\AvailabilityResult',
        ),
         'className' => 'Drupal\\commerce_stock\\StockAvailabilityChecker',
         'functionName' => 'check',
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