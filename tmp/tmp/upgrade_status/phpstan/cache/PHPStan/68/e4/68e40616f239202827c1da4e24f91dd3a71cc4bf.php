<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/commerce_stock/src/EventSubscriber/OrderEventSubscriber.php-1639845390,/var/www/html/web/modules/contrib/commerce_stock/src/ContextCreatorTrait.php-1634106758,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1637184268',
   'data' => 
  array (
    'f55d85e0aa4eb266f63f013bafa5ccff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Performs stock transactions on order and order item events.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock\\EventSubscriber',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderitemevent' => 'Drupal\\commerce_order\\Event\\OrderItemEvent',
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stockeventtypeinterface' => 'Drupal\\commerce_stock\\Plugin\\Commerce\\StockEventType\\StockEventTypeInterface',
          'corestockevents' => 'Drupal\\commerce_stock\\Plugin\\StockEvents\\CoreStockEvents',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'stockservicemanagerinterface' => 'Drupal\\commerce_stock\\StockServiceManagerInterface',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
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
    '7c5f767f7179ae793ccf0d61978332eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides trait to create a commerce context object from a purchasable entity.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
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
    'c2020c9238dbf26a8303cea3d01d3273' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the active commerce context.
   *
   * This is to support UI calls.
   *
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $entity
   *   The purchasable entity (most likely a product variation entity).
   *
   * @return \\Drupal\\commerce\\Context
   *   The context containing the customer & store.
   *
   * @throws \\Exception
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
         'functionName' => 'getContext',
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
    '5c264820b8c05599b777fe518796fad6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks that the context returned is valid for $entity.
   *
   * This is to support UI calls.
   *
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $entity
   *   The purchasable entity (most likely a product variation entity).
   *
   * @return bool
   *   TRUE if valid, FALSE if not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
         'functionName' => 'isValidContext',
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
    '104ae5bd7569b1857a585ed59adcd4cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get context details.
   *
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $entity
   *   The purchasable entity.
   *
   * @return \\Drupal\\commerce\\Context
   *   The Stock service context.
   *
   * @throws \\Exception
   *   When the entity can\'t be purchased from the current store.
   *
   * @see \\Drupal\\commerce_cart\\Form\\AddToCartForm::selectStore()
   *   Original logic comes from this function.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
         'functionName' => 'getContextDetails',
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
    'a4e3f659135437bbbbb7693e90721aa3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_store\\CurrentStore $currentStore */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
         'functionName' => 'getContextDetails',
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
    '0efdfdb4a67c276dec0803fdd2a91a07' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a commerce context object.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderInterface $order
   *   The commerce order obejct.
   * @param int|null $time
   *   The unix timestamp, or NULL to use the current time.
   * @param array $data
   *   The data.
   *
   * @return \\Drupal\\commerce\\Context
   *   The context.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
         'functionName' => 'createContextFromOrder',
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
    'fa5b3ad922e1f1c5f413f20131c2444b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Wrapper methods for \\Drupal\\Core\\StringTranslation\\TranslationInterface.
 *
 * Using this trait will add t() and formatPlural() methods to the class. These
 * must be used for every translatable string, similar to how procedural code
 * must use the global functions t() and \\Drupal::translation()->formatPlural().
 * This allows string extractor tools to find translatable strings.
 *
 * If the class is capable of injecting services from the container, it should
 * inject the \'string_translation\' service and assign it to
 * $this->stringTranslation.
 *
 * @see \\Drupal\\Core\\StringTranslation\\TranslationInterface
 * @see container
 *
 * @ingroup i18n
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
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
    '40f4205a77faa35a4abc353c5c56fef0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The string translation service.
   *
   * @var \\Drupal\\Core\\StringTranslation\\TranslationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
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
    '81c2b633d4f1d0b81880dcf651ddfbe2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Translates a string to the current language or to a given language.
   *
   * See \\Drupal\\Core\\StringTranslation\\TranslatableMarkup::__construct() for
   * important security information and usage guidelines.
   *
   * In order for strings to be localized, make them available in one of the
   * ways supported by the
   * @link https://www.drupal.org/node/322729 Localization API @endlink. When
   * possible, use the \\Drupal\\Core\\StringTranslation\\StringTranslationTrait
   * $this->t(). Otherwise create a new
   * \\Drupal\\Core\\StringTranslation\\TranslatableMarkup object.
   *
   * @param string $string
   *   A string containing the English text to translate.
   * @param array $args
   *   (optional) An associative array of replacements to make after
   *   translation. Based on the first character of the key, the value is
   *   escaped and/or themed. See
   *   \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat() for
   *   details.
   * @param array $options
   *   (optional) An associative array of additional options, with the following
   *   elements:
   *   - \'langcode\' (defaults to the current language): A language code, to
   *     translate to a language other than what is used to display the page.
   *   - \'context\' (defaults to the empty context): The context the source
   *     string belongs to. See the
   *     @link i18n Internationalization topic @endlink for more information
   *     about string contexts.
   *
   * @return \\Drupal\\Core\\StringTranslation\\TranslatableMarkup
   *   An object that, when cast to a string, returns the translated string.
   *
   * @see \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat()
   * @see \\Drupal\\Core\\StringTranslation\\TranslatableMarkup::__construct()
   *
   * @ingroup sanitization
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
         'functionName' => 't',
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
    '45294f589c974a07bd901928acd704d0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Formats a string containing a count of items.
   *
   * @see \\Drupal\\Core\\StringTranslation\\TranslationInterface::formatPlural()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
         'functionName' => 'formatPlural',
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
    '391bd1dce214e386b7cb1f224acef2a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the number of plurals supported by a given language.
   *
   * @see \\Drupal\\locale\\PluralFormulaInterface::getNumberOfPlurals()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
         'functionName' => 'getNumberOfPlurals',
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
    'b4b45fdacfc626e13689dd422feca783' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the string translation service.
   *
   * @return \\Drupal\\Core\\StringTranslation\\TranslationInterface
   *   The string translation service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
         'functionName' => 'getStringTranslation',
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
    'ccb1e29809596cd7a23631725b4cd132' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the string translation service to use.
   *
   * @param \\Drupal\\Core\\StringTranslation\\TranslationInterface $translation
   *   The string translation service.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
         'functionName' => 'setStringTranslation',
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
    'e812ade6a6418480c72bff019f41c7d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The stock service manager.
   *
   * @var \\Drupal\\commerce_stock\\StockServiceManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock\\EventSubscriber',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderitemevent' => 'Drupal\\commerce_order\\Event\\OrderItemEvent',
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stockeventtypeinterface' => 'Drupal\\commerce_stock\\Plugin\\Commerce\\StockEventType\\StockEventTypeInterface',
          'corestockevents' => 'Drupal\\commerce_stock\\Plugin\\StockEvents\\CoreStockEvents',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'stockservicemanagerinterface' => 'Drupal\\commerce_stock\\StockServiceManagerInterface',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
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
    '88a18159c08b20200a1a2d9c5fa4edf5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The stock event types.
   *
   * @var \\Drupal\\commerce_stock\\StockEventTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock\\EventSubscriber',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderitemevent' => 'Drupal\\commerce_order\\Event\\OrderItemEvent',
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stockeventtypeinterface' => 'Drupal\\commerce_stock\\Plugin\\Commerce\\StockEventType\\StockEventTypeInterface',
          'corestockevents' => 'Drupal\\commerce_stock\\Plugin\\StockEvents\\CoreStockEvents',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'stockservicemanagerinterface' => 'Drupal\\commerce_stock\\StockServiceManagerInterface',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
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
    '50f4cc2699ce5ebf785f6955fa2fbf61' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The stock events manager.
   *
   * @var \\Drupal\\commerce_stock\\StockEventsManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock\\EventSubscriber',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderitemevent' => 'Drupal\\commerce_order\\Event\\OrderItemEvent',
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stockeventtypeinterface' => 'Drupal\\commerce_stock\\Plugin\\Commerce\\StockEventType\\StockEventTypeInterface',
          'corestockevents' => 'Drupal\\commerce_stock\\Plugin\\StockEvents\\CoreStockEvents',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'stockservicemanagerinterface' => 'Drupal\\commerce_stock\\StockServiceManagerInterface',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
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
    'f7a9da4e665e7ae62a98e436217fc443' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock\\EventSubscriber',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderitemevent' => 'Drupal\\commerce_order\\Event\\OrderItemEvent',
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stockeventtypeinterface' => 'Drupal\\commerce_stock\\Plugin\\Commerce\\StockEventType\\StockEventTypeInterface',
          'corestockevents' => 'Drupal\\commerce_stock\\Plugin\\StockEvents\\CoreStockEvents',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'stockservicemanagerinterface' => 'Drupal\\commerce_stock\\StockServiceManagerInterface',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
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
    'e307c432c70685cad03d07770c6e9118' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new OrderReceiptSubscriber object.
   *
   * @param \\Drupal\\commerce_stock\\StockServiceManagerInterface $stock_service_manager
   *   The stock service manager.
   * @param \\Drupal\\commerce_stock\\StockEventTypeManagerInterface $event_type_manager
   *   The stock event type manager.
   * @param \\Drupal\\commerce_stock\\StockEventsManagerInterface $events_manager
   *   The stock events manager.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock\\EventSubscriber',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderitemevent' => 'Drupal\\commerce_order\\Event\\OrderItemEvent',
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stockeventtypeinterface' => 'Drupal\\commerce_stock\\Plugin\\Commerce\\StockEventType\\StockEventTypeInterface',
          'corestockevents' => 'Drupal\\commerce_stock\\Plugin\\StockEvents\\CoreStockEvents',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'stockservicemanagerinterface' => 'Drupal\\commerce_stock\\StockServiceManagerInterface',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
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
    '202010775ed503cacaba7ecb09145f78' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a stock transaction when an order is placed.
   *
   * @param \\Drupal\\state_machine\\Event\\WorkflowTransitionEvent $event
   *   The order workflow event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock\\EventSubscriber',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderitemevent' => 'Drupal\\commerce_order\\Event\\OrderItemEvent',
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stockeventtypeinterface' => 'Drupal\\commerce_stock\\Plugin\\Commerce\\StockEventType\\StockEventTypeInterface',
          'corestockevents' => 'Drupal\\commerce_stock\\Plugin\\StockEvents\\CoreStockEvents',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'stockservicemanagerinterface' => 'Drupal\\commerce_stock\\StockServiceManagerInterface',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
         'functionName' => 'onOrderPlace',
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
    'b1a26a900f9b587a625207811f4d7004' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Acts on the order update event to create transactions for new items.
   *
   * The reason this isn\'t handled by OrderEvents::ORDER_ITEM_INSERT is because
   * that event never has the correct values.
   *
   * @param \\Drupal\\commerce_order\\Event\\OrderEvent $event
   *   The order event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock\\EventSubscriber',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderitemevent' => 'Drupal\\commerce_order\\Event\\OrderItemEvent',
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stockeventtypeinterface' => 'Drupal\\commerce_stock\\Plugin\\Commerce\\StockEventType\\StockEventTypeInterface',
          'corestockevents' => 'Drupal\\commerce_stock\\Plugin\\StockEvents\\CoreStockEvents',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'stockservicemanagerinterface' => 'Drupal\\commerce_stock\\StockServiceManagerInterface',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
         'functionName' => 'onOrderUpdate',
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
    '1687890b2a88b986f267cc5de9a25874' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Performs a stock transaction for an order Cancel event.
   *
   * @param \\Drupal\\state_machine\\Event\\WorkflowTransitionEvent $event
   *   The order workflow event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock\\EventSubscriber',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderitemevent' => 'Drupal\\commerce_order\\Event\\OrderItemEvent',
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stockeventtypeinterface' => 'Drupal\\commerce_stock\\Plugin\\Commerce\\StockEventType\\StockEventTypeInterface',
          'corestockevents' => 'Drupal\\commerce_stock\\Plugin\\StockEvents\\CoreStockEvents',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'stockservicemanagerinterface' => 'Drupal\\commerce_stock\\StockServiceManagerInterface',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
         'functionName' => 'onOrderCancel',
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
    'e724180da692c48b30a56b59f3cb33a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Performs a stock transaction on an order delete event.
   *
   * This happens on PREDELETE since the items are not available after DELETE.
   *
   * @param \\Drupal\\commerce_order\\Event\\OrderEvent $event
   *   The order event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock\\EventSubscriber',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderitemevent' => 'Drupal\\commerce_order\\Event\\OrderItemEvent',
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stockeventtypeinterface' => 'Drupal\\commerce_stock\\Plugin\\Commerce\\StockEventType\\StockEventTypeInterface',
          'corestockevents' => 'Drupal\\commerce_stock\\Plugin\\StockEvents\\CoreStockEvents',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'stockservicemanagerinterface' => 'Drupal\\commerce_stock\\StockServiceManagerInterface',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
         'functionName' => 'onOrderDelete',
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
    '821cc5138cc293bfbac462b111fe2fba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Performs a stock transaction on an order item update.
   *
   * @param \\Drupal\\commerce_order\\Event\\OrderItemEvent $event
   *   The order item event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock\\EventSubscriber',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderitemevent' => 'Drupal\\commerce_order\\Event\\OrderItemEvent',
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stockeventtypeinterface' => 'Drupal\\commerce_stock\\Plugin\\Commerce\\StockEventType\\StockEventTypeInterface',
          'corestockevents' => 'Drupal\\commerce_stock\\Plugin\\StockEvents\\CoreStockEvents',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'stockservicemanagerinterface' => 'Drupal\\commerce_stock\\StockServiceManagerInterface',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
         'functionName' => 'onOrderItemUpdate',
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
    '0a3720eb6746da05720d32d9d8acc239' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Performs a stock transaction when an order item is deleted.
   *
   * @param \\Drupal\\commerce_order\\Event\\OrderItemEvent $event
   *   The order item event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock\\EventSubscriber',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderitemevent' => 'Drupal\\commerce_order\\Event\\OrderItemEvent',
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stockeventtypeinterface' => 'Drupal\\commerce_stock\\Plugin\\Commerce\\StockEventType\\StockEventTypeInterface',
          'corestockevents' => 'Drupal\\commerce_stock\\Plugin\\StockEvents\\CoreStockEvents',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'stockservicemanagerinterface' => 'Drupal\\commerce_stock\\StockServiceManagerInterface',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
         'functionName' => 'onOrderItemDelete',
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
    '6a66dbaaf7add76c91465e3884e4296e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_stock\\StockServiceInterface $service */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock\\EventSubscriber',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderitemevent' => 'Drupal\\commerce_order\\Event\\OrderItemEvent',
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stockeventtypeinterface' => 'Drupal\\commerce_stock\\Plugin\\Commerce\\StockEventType\\StockEventTypeInterface',
          'corestockevents' => 'Drupal\\commerce_stock\\Plugin\\StockEvents\\CoreStockEvents',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'stockservicemanagerinterface' => 'Drupal\\commerce_stock\\StockServiceManagerInterface',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
         'functionName' => 'onOrderItemDelete',
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
    'c11d755c18d7893bc17876d7a91d0b29' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock\\EventSubscriber',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderitemevent' => 'Drupal\\commerce_order\\Event\\OrderItemEvent',
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stockeventtypeinterface' => 'Drupal\\commerce_stock\\Plugin\\Commerce\\StockEventType\\StockEventTypeInterface',
          'corestockevents' => 'Drupal\\commerce_stock\\Plugin\\StockEvents\\CoreStockEvents',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'stockservicemanagerinterface' => 'Drupal\\commerce_stock\\StockServiceManagerInterface',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
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
    '068d7b3f1ef0d86c8bd17d012f005ce2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Run the transaction event.
   *
   * @param \\Drupal\\commerce_stock\\Plugin\\Commerce\\StockEventType\\StockEventTypeInterface $event_type
   *   The stock event type.
   * @param \\Drupal\\commerce\\Context $context
   *   The context containing the customer & store.
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $entity
   *   The purchasable entity.
   * @param int $quantity
   *   The quantity.
   * @param \\Drupal\\commerce_stock\\StockLocationInterface $location
   *   The stock location.
   * @param int $transaction_type_id
   *   The transaction type ID.
   * @param \\Drupal\\commerce_order\\Entity\\Order $order
   *   The original order the transaction belongs to.
   *
   * @return int
   *   Return the ID of the transaction or FALSE if no transaction created.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock\\EventSubscriber',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderitemevent' => 'Drupal\\commerce_order\\Event\\OrderItemEvent',
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stockeventtypeinterface' => 'Drupal\\commerce_stock\\Plugin\\Commerce\\StockEventType\\StockEventTypeInterface',
          'corestockevents' => 'Drupal\\commerce_stock\\Plugin\\StockEvents\\CoreStockEvents',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'stockservicemanagerinterface' => 'Drupal\\commerce_stock\\StockServiceManagerInterface',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
         'functionName' => 'runTransactionEvent',
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
    '15dcf36b539fad3d60d3e184229206e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a stock event type object.
   *
   * @param string $plugin_id
   *   The id of the stock event type.
   *
   * @return \\Drupal\\commerce_stock\\Plugin\\Commerce\\StockEventType\\StockEventTypeInterface
   *   The stock event type.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\PluginException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock\\EventSubscriber',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderitemevent' => 'Drupal\\commerce_order\\Event\\OrderItemEvent',
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stockeventtypeinterface' => 'Drupal\\commerce_stock\\Plugin\\Commerce\\StockEventType\\StockEventTypeInterface',
          'corestockevents' => 'Drupal\\commerce_stock\\Plugin\\StockEvents\\CoreStockEvents',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'stockservicemanagerinterface' => 'Drupal\\commerce_stock\\StockServiceManagerInterface',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
         'functionName' => 'getEventType',
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
    'cc4b0fbb609a7af64eed436c61480d31' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the entity from an updated entity object. In certain
   * cases the $entity->original property is empty for updated entities. In such
   * a situation we try to load the unchanged entity from storage.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The changed/updated entity object.
   *
   * @return null|\\Drupal\\Core\\Entity\\EntityInterface
   *   The original unchanged entity object or NULL.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException
   * @throws \\Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock\\EventSubscriber',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderitemevent' => 'Drupal\\commerce_order\\Event\\OrderItemEvent',
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stockeventtypeinterface' => 'Drupal\\commerce_stock\\Plugin\\Commerce\\StockEventType\\StockEventTypeInterface',
          'corestockevents' => 'Drupal\\commerce_stock\\Plugin\\StockEvents\\CoreStockEvents',
          'stockeventsmanagerinterface' => 'Drupal\\commerce_stock\\StockEventsManagerInterface',
          'stockeventtypemanagerinterface' => 'Drupal\\commerce_stock\\StockEventTypeManagerInterface',
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'stockservicemanagerinterface' => 'Drupal\\commerce_stock\\StockServiceManagerInterface',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_stock\\EventSubscriber\\OrderEventSubscriber',
         'functionName' => 'getOriginalEntity',
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