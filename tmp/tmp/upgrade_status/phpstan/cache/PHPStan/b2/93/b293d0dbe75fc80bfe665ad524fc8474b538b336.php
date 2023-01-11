<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/commerce_stock/modules/local_storage/src/StockLocationStorageInterface.php-1634106758',
   'data' => 
  array (
    '74a088946ae92273d4978cec50d39e40' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for local stock location storage.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'context' => 'Drupal\\commerce\\Context',
        ),
         'className' => 'Drupal\\commerce_stock_local\\StockLocationStorageInterface',
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
    '29303396b44966ec20562dc0be3db4d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads the enabled locations for the given Purchasable Entity.
   *
   * Enabled variations are active stock locations that have
   * been filtered through the FILTER_STOCK_LOCATIONS event.
   *
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $entity
   *   The purchasable entity.
   *
   * @return \\Drupal\\commerce_stock_local\\Entity\\StockLocation[]
   *   The enabled stock locations.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'context' => 'Drupal\\commerce\\Context',
        ),
         'className' => 'Drupal\\commerce_stock_local\\StockLocationStorageInterface',
         'functionName' => 'loadEnabled',
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
    '4d8647e561cf7c85d96ebe373b797eef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads the relevant locations for the given Purchasable Entity and context.
   *
   * Relevant locations are active and available for fulfillment for the product
   * and context provided.
   *
   * @param \\Drupal\\commerce\\Context $context
   *   The context.
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $entity
   *   The purchasable entity.
   *
   * @return \\Drupal\\commerce_stock_local\\Entity\\StockLocation[]
   *   The enabled stock locations.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'context' => 'Drupal\\commerce\\Context',
        ),
         'className' => 'Drupal\\commerce_stock_local\\StockLocationStorageInterface',
         'functionName' => 'loadInContext',
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
    '4958fa5e60d79a719713f9f6f453c917' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the transaction location for the given product and context.
   *
   * @param \\Drupal\\commerce\\Context $context
   *   The context.
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $entity
   *   The purchasable entity.
   *
   * @return \\Drupal\\commerce_stock_local\\Entity\\StockLocation[]
   *   The enabled stock locations.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'context' => 'Drupal\\commerce\\Context',
        ),
         'className' => 'Drupal\\commerce_stock_local\\StockLocationStorageInterface',
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
  ),
));