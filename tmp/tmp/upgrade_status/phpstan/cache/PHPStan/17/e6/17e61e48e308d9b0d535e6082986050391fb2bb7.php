<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/commerce_stock/modules/local_storage/src/Event/LocalStockTransactionEvent.php-1634106758',
   'data' => 
  array (
    'f9148c15a55a5d6eb219e9efcb69bf68' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the stock location event.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Event',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvent',
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
    '1aa847298ecc8c00ebfd7e7a7387d5c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The stock transaction.
   *
   * @var array
   *   Assoziative array containing all the values of the transaction.
   *   This is essentially a map of the database columns.
   *
   * @see \\Drupal\\commerce_stock_local\\LocalStockUpdater::createTransaction()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Event',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvent',
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
    'ac788d1f2d62d6a7e1f0fc1994eae8c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Event',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvent',
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
    '7ad0c7a404b26c7a28a4e2a3fefddffc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new stock transaction event.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param array $stock_transaction
   *   The local stock location.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Event',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvent',
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
    '8fa76b9607b107d8e24a19fd6235655f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the stock_location for this transaction.
   *
   * @return \\Drupal\\commerce_stock\\StockLocationInterface
   *   The stock location.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Event',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvent',
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
    '1a65ba7da480dc6ca7689e297f001a7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the purchasable entity.
   *
   * @return \\Drupal\\commerce\\PurchasableEntityInterface
   *   The purchasable entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Event',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvent',
         'functionName' => 'getEntity',
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
    'c9f2aeb46927af453e781ab46b80542a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the quantity.
   *
   * @return int
   *   The quantity value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Event',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvent',
         'functionName' => 'getQuantity',
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
    'b7fec1c9be20b4169c0f812da3b82655' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the stock transaction.
   *
   * @return object
   *   The local stock transaction.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Event',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvent',
         'functionName' => 'getStockTransaction',
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