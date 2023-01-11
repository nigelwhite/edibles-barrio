<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/commerce_stock/modules/field/src/Plugin/Field/FieldType/StockLevel.php-1639845390,/var/www/html/web/modules/contrib/commerce_stock/src/ContextCreatorTrait.php-1634106758',
   'data' => 
  array (
    '64c113c2e6009b7812402f988efd440f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Plugin implementation of the \'commerce_stock_field\' field type.
 *
 * @FieldType(
 *   id = "commerce_stock_level",
 *   label = @Translation("Stock level"),
 *   module = "commerce_stock_field",
 *   description = @Translation("Stock level"),
 *   default_widget = "commerce_stock_level_simple_transaction",
 *   default_formatter = "commerce_stock_level_simple",
 *   cardinality = 1,
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType\\StockLevel',
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
    '0452123b079bb2801ba8d6bd246ee3f8' => 
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
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType\\StockLevel',
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
    'a2f2052bc120dfba58e802ca72c0e80b' => 
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
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType\\StockLevel',
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
    '098f952c42fdec22194c8c7134dac9ec' => 
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
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType\\StockLevel',
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
    'cc7042f2e0fd3bf928bd7d2e325be896' => 
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
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType\\StockLevel',
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
    '022eed2ab817aab13c84edfb4a53726e' => 
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
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType\\StockLevel',
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
    '0e33cfb61685a2fee35d81d5d810c403' => 
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
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType\\StockLevel',
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
    '3b0e8c9173dd2c4ab19d0695ce337b07' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * Originally we had to define a real db field, because cores implementation
   * of computed fields was brittle. During development of the module, we
   * found, that we can "misuse" this to provide the possibility to enter
   * initial stock values for newly created product variations.
   *
   * Currently we use the column \'value\' for exactly this one purpose. Don\'t get
   * fooled by this. The calculation of the stock level is transaction based.
   * The transactions have their own table.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType\\StockLevel',
         'functionName' => 'schema',
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
    'a489470f623ec1f279336c5d98cd4b3f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType\\StockLevel',
         'functionName' => 'propertyDefinitions',
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
    'e2ae620605e9f238987ecf06c24562a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType\\StockLevel',
         'functionName' => 'isEmpty',
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
    'ad05c060bcfa51d7476add1e1de7f726' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @inheritdoc
   *
   * This updates the stock based on parameters set by the stock widget.
   *
   * For computed fields we didn\'t find a chance to trigger the transaction,
   * other than in ::setValue(). ::postSave() is not called for computed fields.
   *
   * If you pass in a single value programmatically, note that we do not support
   * the setting of a absolute stock levels here. We assume a stock adjustment
   * if we get a singe value here. As usual a negative value decreases the
   * stock level and a positive value increases the stock level.
   *
   * @throws \\InvalidArgumentException
   *   In case of a invalid stock level value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType\\StockLevel',
         'functionName' => 'setValue',
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
    'c9ff96926a230db9a2f6888b13e7a3c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType\\StockLevel',
         'functionName' => 'postSave',
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
    '32d9eb9c0cd6f1b0404781866ea7d6c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Internal method to create transactions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType\\StockLevel',
         'functionName' => 'createTransaction',
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
    '5d10691875db08c0d6b822b479a1fa86' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_stock\\StockLocationInterface $location */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType\\StockLevel',
         'functionName' => 'createTransaction',
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
    '9dbac59ed0c4d33acc8e1e685e1cd27d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @inheritDoc
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'contextcreatortrait' => 'Drupal\\commerce_stock\\ContextCreatorTrait',
          'stocktransactionsinterface' => 'Drupal\\commerce_stock\\StockTransactionsInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\commerce_stock_field\\Plugin\\Field\\FieldType\\StockLevel',
         'functionName' => 'generateSampleValue',
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