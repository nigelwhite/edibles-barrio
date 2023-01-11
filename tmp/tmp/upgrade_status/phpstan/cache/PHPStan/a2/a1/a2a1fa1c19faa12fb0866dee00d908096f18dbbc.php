<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/commerce_stock/modules/local_storage/tests/modules/commerce_stock_local_test/src/EventSubscriber/CommerceStockTransactionSubscriber.php-1634106758,/var/www/html/web/core/lib/Drupal/Core/Logger/LoggerChannelTrait.php-1637184268',
   'data' => 
  array (
    'd5bdd0f81f6a007566a32e2b566063bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Test class to test the commerce_stock transaction events.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local_test\\EventSubscriber',
         'uses' => 
        array (
          'localstocktransactionevent' => 'Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvent',
          'localstocktransactionevents' => 'Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvents',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local_test\\EventSubscriber\\CommerceStockTransactionSubscriber',
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
    '82cd09ca47cbc36addd3628f266d21e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Wrapper methods for the logger factory service.
 *
 * This utility trait should only be used in application-level code, such as
 * classes that would implement ContainerInjectionInterface. Services registered
 * in the Container should not use this trait but inject the appropriate service
 * directly for easier testing.
 *
 * @see \\Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Logger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_stock_local_test\\EventSubscriber\\CommerceStockTransactionSubscriber',
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
    'ee0cc217e280ea1b5320d3a1089bf66c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The logger channel factory service.
   *
   * @var \\Drupal\\Core\\Logger\\LoggerChannelFactoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Logger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_stock_local_test\\EventSubscriber\\CommerceStockTransactionSubscriber',
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
    '708fde1ff43c7a9bf1b487b03ba5427b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the logger for a specific channel.
   *
   * @param string $channel
   *   The name of the channel. Can be any string, but the general practice is
   *   to use the name of the subsystem calling this.
   *
   * @return \\Psr\\Log\\LoggerInterface
   *   The logger for the given channel.
   *
   * @todo Require the use of injected services:
   *   https://www.drupal.org/node/2733703
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Logger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_stock_local_test\\EventSubscriber\\CommerceStockTransactionSubscriber',
         'functionName' => 'getLogger',
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
    'cd1c66c53729d8820b2760b6663fa5ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Injects the logger channel factory.
   *
   * @param \\Drupal\\Core\\Logger\\LoggerChannelFactoryInterface $logger_factory
   *   The logger channel factory service.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Logger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_stock_local_test\\EventSubscriber\\CommerceStockTransactionSubscriber',
         'functionName' => 'setLoggerFactory',
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
    '828b2ad7084cfb649644b6750b76d29e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a CommerceStockTransactionSubscriber object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local_test\\EventSubscriber',
         'uses' => 
        array (
          'localstocktransactionevent' => 'Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvent',
          'localstocktransactionevents' => 'Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvents',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local_test\\EventSubscriber\\CommerceStockTransactionSubscriber',
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
    'cd3bb1b29e8da92ba60f5d69bcf78fc1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @inheritDoc
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local_test\\EventSubscriber',
         'uses' => 
        array (
          'localstocktransactionevent' => 'Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvent',
          'localstocktransactionevents' => 'Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvents',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local_test\\EventSubscriber\\CommerceStockTransactionSubscriber',
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
    'bcfda7defddb1986915ed3c759c4b543' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @inheritDoc
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local_test\\EventSubscriber',
         'uses' => 
        array (
          'localstocktransactionevent' => 'Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvent',
          'localstocktransactionevents' => 'Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvents',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local_test\\EventSubscriber\\CommerceStockTransactionSubscriber',
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
    '0276fdec511d9d7b6e461904928af787' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Logging the create event.
   *
   * @param \\Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvent $event
   *   The event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local_test\\EventSubscriber',
         'uses' => 
        array (
          'localstocktransactionevent' => 'Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvent',
          'localstocktransactionevents' => 'Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvents',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local_test\\EventSubscriber\\CommerceStockTransactionSubscriber',
         'functionName' => 'onTransactionCreate',
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
    '31903f763f5cf7a2a5de06d5a0734725' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Logging the insert event.
   *
   * @param \\Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvent $event
   *   The event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local_test\\EventSubscriber',
         'uses' => 
        array (
          'localstocktransactionevent' => 'Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvent',
          'localstocktransactionevents' => 'Drupal\\commerce_stock_local\\Event\\LocalStockTransactionEvents',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_stock_local_test\\EventSubscriber\\CommerceStockTransactionSubscriber',
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