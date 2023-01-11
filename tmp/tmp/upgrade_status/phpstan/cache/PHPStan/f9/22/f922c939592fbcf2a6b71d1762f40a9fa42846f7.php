<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/commerce_stock/modules/field/src/Plugin/Field/FieldWidget/SimpleStockLevelWidget.php-1634106758,/var/www/html/web/modules/contrib/commerce_stock/src/ContextCreatorTrait.php-1634106758,/var/www/html/web/core/lib/Drupal/Core/Messenger/MessengerTrait.php-1637184268',
   'data' => 
  array (
    'aaa780e8c5d955d12f004e3d869414a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Plugin implementation of the \'commerce_stock_level\' widget.
 *
 * @Deprecated: We have now a dedicated widget per use case.
 *
 * @see https://www.drupal.org/project/commerce_stock/issues/2931754
 *
 * @FieldWidget(
 *   id = "commerce_stock_level_simple",
 *   module = "commerce_stock_field",
 *   label = @Translation("Deprecated: Will be removed soon."),
 *   field_types = {
 *     "commerce_stock_level"
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget\\SimpleStockLevelWidget',
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
    'adbcb1c096c7447d6b4068bd70fb8d8e' => 
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
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget\\SimpleStockLevelWidget',
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
    'e96cca6d44197d9a7f982ece16790df3' => 
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
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget\\SimpleStockLevelWidget',
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
    '21012b4652ac40f6ee571e393438865f' => 
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
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget\\SimpleStockLevelWidget',
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
    '7b73e03a1ae8adacacc34f48b8f21f17' => 
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
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget\\SimpleStockLevelWidget',
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
    '671a7af9bb900369c10fdca1c164534c' => 
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
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget\\SimpleStockLevelWidget',
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
    '08c8a9527c3a38b5b3caa064c8cc6b0c' => 
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
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget\\SimpleStockLevelWidget',
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
    '65ca818e5073795a55c6f31451401286' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for the messenger service.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Messenger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget\\SimpleStockLevelWidget',
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
    '391d3a59c8f337a9971b1698d39ba2a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The messenger.
   *
   * @var \\Drupal\\Core\\Messenger\\MessengerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Messenger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget\\SimpleStockLevelWidget',
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
    '8c1eeb42d813a646096322de1c4024af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the messenger.
   *
   * @param \\Drupal\\Core\\Messenger\\MessengerInterface $messenger
   *   The messenger.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Messenger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget\\SimpleStockLevelWidget',
         'functionName' => 'setMessenger',
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
    '8d4aeb43c3225ddcc38ec66f9fdf686c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the messenger.
   *
   * @return \\Drupal\\Core\\Messenger\\MessengerInterface
   *   The messenger.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Messenger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget\\SimpleStockLevelWidget',
         'functionName' => 'messenger',
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
    'b99e76a9760a7d89cecc0ac498efa5ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The Stock Service Manager.
   *
   * @var \\Drupal\\commerce_stock\\StockServiceManager
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget\\SimpleStockLevelWidget',
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
    '8465e1bc35be674c923cb3298d3799aa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget\\SimpleStockLevelWidget',
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
    '1e075a855bce152efb154d12040ac45b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget\\SimpleStockLevelWidget',
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
    '23682a50648b5e47454b980b8512309e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget\\SimpleStockLevelWidget',
         'functionName' => 'defaultSettings',
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
    'f1742bbd7217b021bf52baeee0a8a94f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Submits the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget\\SimpleStockLevelWidget',
         'functionName' => 'closeForm',
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
    '2da0951bc99cf676020fa1eb079978dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget\\SimpleStockLevelWidget',
         'functionName' => 'settingsSummary',
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
    'b025635df2ee90d74b884704f2b3e994' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget\\SimpleStockLevelWidget',
         'functionName' => 'settingsForm',
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
    '223cfd813653d9cd2be528ac8eeff1b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget\\SimpleStockLevelWidget',
         'functionName' => 'formElement',
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
    'ddf758fba71729ffa2a003a47e7d8fed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Simple stock form - Used to update the stock level.
   *
   * @todo: This is not go live ready code,
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget\\SimpleStockLevelWidget',
         'functionName' => 'validateSimple',
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
    '3e6cb29c52b723506185b749cf3f9a9b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates a basic stock field widget form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget\\SimpleStockLevelWidget',
         'functionName' => 'validateBasic',
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
    'cf108ad5bb9fdc22574aa9b0c6905932' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Submits the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget\\SimpleStockLevelWidget',
         'functionName' => 'submitAll',
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
    'a75bde3e4795b64ea5f8f2b1c81d022c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stockservicemanager' => 'Drupal\\commerce_stock\\StockServiceManager',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldWidget\\SimpleStockLevelWidget',
         'functionName' => 'massageFormValues',
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