<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/commerce_stock/modules/local_storage/src/EventSubscriber/CommerceLocalStockTransactionSubscriber.php-1634106758',
   'data' => 
  array (
    '8a5273445d86455665f400613d6d7dcf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Test class to test the commerce_stock transaction events.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\EventSubscriber',
         'uses' => 
        array (
          'localstocktransactionevent' => 'Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvent',
          'localstocktransactionevents' => 'Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvents',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local\\EventSubscriber\\CommerceLocalStockTransactionSubscriber',
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
    '0a53eba31fe6d52d2367d4ee2ef74b2d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The cache tags invalidator.
   *
   * @var \\Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\EventSubscriber',
         'uses' => 
        array (
          'localstocktransactionevent' => 'Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvent',
          'localstocktransactionevents' => 'Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvents',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local\\EventSubscriber\\CommerceLocalStockTransactionSubscriber',
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
    'c465ad4cb35e5137048d0b34284337d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a CommerceStockTransactionSubscriber.
   *
   * @param \\Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface $cache_tags_invalidator
   *   The cache tags invalidator.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\EventSubscriber',
         'uses' => 
        array (
          'localstocktransactionevent' => 'Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvent',
          'localstocktransactionevents' => 'Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvents',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local\\EventSubscriber\\CommerceLocalStockTransactionSubscriber',
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
    '8eaae53116430c6ee38ad0464aa9fe85' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @inheritDoc
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\EventSubscriber',
         'uses' => 
        array (
          'localstocktransactionevent' => 'Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvent',
          'localstocktransactionevents' => 'Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvents',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local\\EventSubscriber\\CommerceLocalStockTransactionSubscriber',
         'functionName' => 'getSubscribedEvents',
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
    'c327ec7d18d881f9fcc53be8f63cee0e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Invalidate the cache for the purchased entity.
   *
   * @param \\Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvent $event
   *   The event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\EventSubscriber',
         'uses' => 
        array (
          'localstocktransactionevent' => 'Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvent',
          'localstocktransactionevents' => 'Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvents',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local\\EventSubscriber\\CommerceLocalStockTransactionSubscriber',
         'functionName' => 'onTransactionInsert',
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