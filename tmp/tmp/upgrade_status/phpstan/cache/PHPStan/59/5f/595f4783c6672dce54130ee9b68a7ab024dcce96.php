<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/commerce_stock/modules/local_storage/src/Entity/StockLocation.php-1634106758,/var/www/html/web/modules/contrib/commerce/src/EntityOwnerTrait.php-1636645795,/var/www/html/web/core/modules/user/src/EntityOwnerTrait.php-1637184268',
   'data' => 
  array (
    'f09bb34cef60aef632230bef92ed7189' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the stock location entity.
 *
 * @ingroup commerce_stock_local
 *
 * @ContentEntityType(
 *   id = "commerce_stock_location",
 *   label = @Translation("Stock location"),
 *   label_plural = @Translation("Stock locations"),
 *   label_count = @PluralTranslation(
 *     singular = "@count stock location",
 *     plural = "@count stock locations",
 *   ),
 *   bundle_label = @Translation("Stock location type"),
 *   handlers = {
 *     "event" = "Drupal\\commerce_stock_local\\Event\\StockLocationEvent",
 *     "storage" = "Drupal\\commerce_stock_local\\StockLocationStorage",
 *     "access" = "Drupal\\entity\\EntityAccessControlHandler",
 *     "permission_provider" = "Drupal\\entity\\EntityPermissionProvider",
 *     "view_builder" = "Drupal\\Core\\Entity\\EntityViewBuilder",
 *     "list_builder" = "Drupal\\commerce_stock_local\\StockLocationListBuilder",
 *     "views_data" = "Drupal\\commerce_stock_local\\StockLocationViewsData",
 *     "translation" = "Drupal\\commerce_stock_local\\StockLocationTranslationHandler",
 *     "form" = {
 *       "default" = "Drupal\\commerce_stock_local\\Form\\StockLocationForm",
 *       "add" = "Drupal\\commerce_stock_local\\Form\\StockLocationForm",
 *       "edit" = "Drupal\\commerce_stock_local\\Form\\StockLocationForm",
 *       "delete" = "Drupal\\Core\\Entity\\ContentEntityDeleteForm",
 *     },
 *     "route_provider" = {
 *        "default" = "Drupal\\Core\\Entity\\Routing\\AdminHtmlRouteProvider",
 *        "delete-multiple" = "Drupal\\entity\\Routing\\DeleteMultipleRouteProvider",
 *     },
 *   },
 *   admin_permission = "administer commerce_stock_location",
 *   permission_granularity = "bundle",
 *   translatable = TRUE,
 *   base_table = "commerce_stock_location",
 *   data_table = "commerce_stock_location_field_data",
 *   entity_keys = {
 *     "id" = "location_id",
 *     "bundle" = "type",
 *     "label" = "name",
 *     "uuid" = "uuid",
 *     "langcode" = "langcode",
 *     "status" = "status",
 *     "owner" = "uid",
 *   },
 *   links = {
 *     "canonical" = "/commerce_stock_location/{commerce_stock_location}",
 *     "add-page" = "/commerce_stock_location/add",
 *     "add-form" = "/commerce_stock_location/add/{commerce_stock_location_type}",
 *     "edit-form" = "/commerce_stock_location/{commerce_stock_location}/edit",
 *     "delete-form" = "/admin/commerce/commerce_stock_location/{commerce_stock_location}/delete",
 *     "collection" = "/admin/commerce/commerce_stock_location",
 *   },
 *   bundle_entity_type = "commerce_stock_location_type",
 *   field_ui_base_route = "entity.commerce_stock_location_type.edit_form"
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Entity',
         'uses' => 
        array (
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
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
    '4869dad6d978615e2b3eaa4abbe89ad2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for Commerce entities that have an owner.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'user' => 'Drupal\\user\\Entity\\User',
          'coreentityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
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
    'ca0413bb38baebdd8e8d51000495b96e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for entities that have an owner.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
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
    '7e2f4b4200b93c5794b6bf95b15db849' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an array of base field definitions for entity owners.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The entity type to add the owner field to.
   *
   * @return \\Drupal\\Core\\Field\\BaseFieldDefinition[]
   *   An array of base field definitions.
   *
   * @throws \\Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException
   *   Thrown when the entity type does not implement EntityOwnerInterface or
   *   if it does not have an "owner" entity key.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
         'functionName' => 'ownerBaseFieldDefinitions',
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
    '42d523862093ef2705f74558d4526f98' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
         'functionName' => 'getOwnerId',
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
    '26196ac2c1f5e5fd8cff12c9de8efda0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
         'functionName' => 'setOwnerId',
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
    'c213697fc2cb7eaba1435b776f890225' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
         'functionName' => 'getOwner',
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
    'd99efbf22d0c75dd78fcf18127f86c10' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
         'functionName' => 'setOwner',
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
    'c987b4aa1e21b1645e6107fc72444cac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Default value callback for \'owner\' base field.
   *
   * @return mixed
   *   A default value for the owner field.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
         'functionName' => 'getDefaultEntityOwner',
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
    '13ab4dc5b71a5508dddf43395d167758' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'user' => 'Drupal\\user\\Entity\\User',
          'coreentityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
         'functionName' => 'getOwner',
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
    'c208323db95a8035ff4d1e04e6fa2829' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Entity',
         'uses' => 
        array (
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
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
    '89dee00a9acc121b411e00ccb3ff59e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Entity',
         'uses' => 
        array (
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
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
    '696ba65bc618441924910ea5779e64c7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Entity',
         'uses' => 
        array (
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
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
    '3f6ee2ece4ae8c22d95dd214aac90c65' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Entity',
         'uses' => 
        array (
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
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
    '367ef74d9b095315f459d23a3e78c5a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Entity',
         'uses' => 
        array (
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
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
    '1f6a3b243fc4a989690cbd0bb8047f1d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Entity',
         'uses' => 
        array (
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
         'functionName' => 'getId',
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
    '8191db0bea9955b7914249f1cddd25d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Entity',
         'uses' => 
        array (
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
         'functionName' => 'preSave',
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
    '185098cfada14217fabd0f53fb96d813' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Entity',
         'uses' => 
        array (
          'stocklocationinterface' => 'Drupal\\commerce_stock\\StockLocationInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
         'functionName' => 'baseFieldDefinitions',
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