<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/commerce_stock/modules/local_storage/src/Entity/LocalStockLocationInterface.php-1634106758',
   'data' => 
  array (
    'cda93b9fdcd232c4039ed0d1c1360ab0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for defining local stock location entities.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Entity',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Entity\\LocalStockLocationInterface',
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
    'af3b0dddd98c1c769ff637b4028cd94f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the stock location type.
   *
   * @return string
   *   The stock location type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Entity',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Entity\\LocalStockLocationInterface',
         'functionName' => 'getType',
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
    '97c45959b3d4fc67a5d8e55dc4087df4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the stock location name.
   *
   * @return string
   *   Name of the stock location.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Entity',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Entity\\LocalStockLocationInterface',
         'functionName' => 'getName',
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
    '78e9ffd47e3d5d4ca0409dba1be41019' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the stock location name.
   *
   * @param string $name
   *   The stock location name.
   *
   * @return \\Drupal\\commerce_stock_local\\Entity\\LocalStockLocationInterface
   *   The called stock location entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Entity',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Entity\\LocalStockLocationInterface',
         'functionName' => 'setName',
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
    '0be7ead4919ff760395890904d40de4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the stock location published status indicator.
   *
   * Unpublished stock location are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the stock location is active.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Entity',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Entity\\LocalStockLocationInterface',
         'functionName' => 'isActive',
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
    '659867d9da53b93a9e0b3cdab56d71db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the published status of a stock location.
   *
   * @param bool $active
   *   TRUE to set this stock location to active, FALSE to set it to inactive.
   *
   * @return \\Drupal\\commerce_stock_local\\Entity\\LocalStockLocationInterface
   *   The called stock location entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Entity',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Entity\\LocalStockLocationInterface',
         'functionName' => 'setActive',
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