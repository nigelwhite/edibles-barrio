<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/commerce_stock/modules/local_storage/src/LocalStockChecker.php-1634106758',
   'data' => 
  array (
    '5213fa03fe12c72e9d35346b3bc8aec7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The stock checker implementation for the local stock module.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'stockcheckinterface' => 'Drupal\\commerce_stock\\StockCheckInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local\\LocalStockChecker',
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
    '4e92b43d0c69fdb104ff1750f81f2377' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The database connection.
   *
   * @var \\Drupal\\Core\\Database\\Connection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'stockcheckinterface' => 'Drupal\\commerce_stock\\StockCheckInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local\\LocalStockChecker',
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
    'cf04f0a044896c4d8abba048775e3eac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The location storage.
   *
   * @var \\Drupal\\Core\\Entity\\EntityStorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'stockcheckinterface' => 'Drupal\\commerce_stock\\StockCheckInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local\\LocalStockChecker',
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
    '5df90edcde6e1c00fb535cabef699303' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs the local stock checker.
   *
   * @param \\Drupal\\Core\\Database\\Connection $database
   *   The database connection.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'stockcheckinterface' => 'Drupal\\commerce_stock\\StockCheckInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local\\LocalStockChecker',
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
    'e9736d18b0e3f6dc34a659e0c8b0f910' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates an instance of the local stock checker.
   *
   * @param \\Symfony\\Component\\DependencyInjection\\ContainerInterface $container
   *   The DI container.
   *
   * @return static
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'stockcheckinterface' => 'Drupal\\commerce_stock\\StockCheckInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local\\LocalStockChecker',
         'functionName' => 'create',
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
    '80746f36e50eadd552319ea208ab1c25' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets stock level for a given location and purchasable entity.
   *
   * @param int $location_id
   *   Location id.
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $entity
   *   Purchasable entity.
   *
   * @return array
   *   An array of \'qty\' and \'last_transaction_id\' values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'stockcheckinterface' => 'Drupal\\commerce_stock\\StockCheckInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local\\LocalStockChecker',
         'functionName' => 'getLocationStockLevel',
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
    '439a218cd71d2b0ff345ab25e87210b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the last transaction id for a given location and purchasable entity.
   *
   * @param int $location_id
   *   Location id.
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $entity
   *   The purchasable entity.
   *
   * @return int
   *   The last location stock transaction id.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'stockcheckinterface' => 'Drupal\\commerce_stock\\StockCheckInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local\\LocalStockChecker',
         'functionName' => 'getLocationStockTransactionLatest',
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
    '952fd7aea0c7b90e15a9b7b9fdaef2f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the sum of all stock transactions between a range of transactions.
   *
   * @param int $location_id
   *   The location id.
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $entity
   *   The purchasable entity.
   * @param int $min
   *   The minimum transaction number.
   * @param int $max
   *   The maximum transaction number.
   *
   * @return int
   *   The sum of stock transactions for a given location and purchasable
   *   entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'stockcheckinterface' => 'Drupal\\commerce_stock\\StockCheckInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local\\LocalStockChecker',
         'functionName' => 'getLocationStockTransactionSum',
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
    '82d25130966fe2a2a2f186068d18dea2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'stockcheckinterface' => 'Drupal\\commerce_stock\\StockCheckInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local\\LocalStockChecker',
         'functionName' => 'getTotalStockLevel',
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
    'a2af41bf94d1642939d05e683c7bcc05' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the stock levels for a set of locations.
   *
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $entity
   *   The purchasable entity.
   * @param \\Drupal\\commerce_stock\\StockLocationInterface[] $locations
   *   The stock locations.
   *
   * @return array
   *   Stock level information indexed by location id with these values:
   *     - \'qty\': The quantity.
   *     - \'last_transaction\': The id of the last transaction.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'stockcheckinterface' => 'Drupal\\commerce_stock\\StockCheckInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local\\LocalStockChecker',
         'functionName' => 'getLocationsStockLevels',
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
    'bd04afd272db702c46c62f4478518222' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_stock\\StockLocationInterface $location */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'stockcheckinterface' => 'Drupal\\commerce_stock\\StockCheckInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local\\LocalStockChecker',
         'functionName' => 'getLocationsStockLevels',
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
    '6e4cf39b6e1b027905a718d786292e55' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'stockcheckinterface' => 'Drupal\\commerce_stock\\StockCheckInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local\\LocalStockChecker',
         'functionName' => 'getIsInStock',
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
    'e532448cca6711115570c1c497f48969' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'stockcheckinterface' => 'Drupal\\commerce_stock\\StockCheckInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local\\LocalStockChecker',
         'functionName' => 'getIsAlwaysInStock',
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
    '37bb845a0467411617b47f30a940a567' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the locations. This is an old implementation of the now changed
   * interface.
   *
   * @deprecated in commerce_stock:8.x-1.0 and is
   * removed from commerce_stock:8.x-2.0. Use the StockLocationStorage service instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'stockcheckinterface' => 'Drupal\\commerce_stock\\StockCheckInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local\\LocalStockChecker',
         'functionName' => 'getLocationList',
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
    '3526038bab44ce07eb0afc7ed747eede' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var StockLocationInterface $location */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'stockcheckinterface' => 'Drupal\\commerce_stock\\StockCheckInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local\\LocalStockChecker',
         'functionName' => 'getLocationList',
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