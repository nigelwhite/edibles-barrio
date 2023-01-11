<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/commerce_stock/modules/local_storage/src/Event/FilterLocationsEvent.php-1634106758',
   'data' => 
  array (
    '9bdf937e4d1cb949cc6ca2c026176ae2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the filter locations event.
 *
 * @see \\Drupal\\commerce_stock_local\\Event\\LocalStockEvents
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Event',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Event\\FilterLocationsEvent',
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
    'ebb1901df6128131f8e6bcf6ddb0a93a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The purchasable entity.
   *
   * @var \\Drupal\\commerce\\PurchasableEntityInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Event',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Event\\FilterLocationsEvent',
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
    '4133a5d20217332678f02dee88b79eea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The enabled stock locations.
   *
   * @var \\Drupal\\commerce_stock_local\\Entity\\LocalStockLocationInterface
   *   The local stock locations.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Event',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Event\\FilterLocationsEvent',
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
    '65450640ecdf87e50a80e9e65806865d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new FilterLocationsEvent object.
   *
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $entity
   *   The purchasable entity.
   * @param \\Drupal\\commerce_stock_local\\Entity\\LocalStockLocationInterface[] $locations
   *   The local stock locations.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Event',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Event\\FilterLocationsEvent',
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
    'd7913a2199ea429a83c625ea94163c7e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the enabled stock locations.
   *
   * @return \\Drupal\\commerce_stock_local\\Entity\\LocalStockLocationInterface[]
   *   Array of local stock locations.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Event',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Event\\FilterLocationsEvent',
         'functionName' => 'getLocations',
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
    'd43c2de69ef4bfafd22aa1b3bdcf714a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the enabled stock locations.
   *
   * @param \\Drupal\\commerce_stock_local\\Entity\\LocalStockLocationInterface[] $locations
   *   The stock locations.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Event',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Event\\FilterLocationsEvent',
         'functionName' => 'setLocations',
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