<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/commerce_stock/modules/local_storage/src/Entity/StockLocationType.php-1634106758',
   'data' => 
  array (
    'da9a716c2f13da7e80ea6475583e1b04' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the stock location type entity.
 *
 * @ConfigEntityType(
 *   id = "commerce_stock_location_type",
 *   label = @Translation("Stock location type"),
 *   handlers = {
 *     "access" = "Drupal\\entity\\BundleEntityAccessControlHandler",
 *     "list_builder" = "Drupal\\commerce_stock_local\\StockLocationTypeListBuilder",
 *     "form" = {
 *       "add" = "Drupal\\commerce_stock_local\\Form\\StockLocationTypeForm",
 *       "edit" = "Drupal\\commerce_stock_local\\Form\\StockLocationTypeForm",
 *       "delete" = "Drupal\\commerce_stock_local\\Form\\StockLocationTypeDeleteForm"
 *     },
 *     "route_provider" = {
 *        "default" = "Drupal\\Core\\Entity\\Routing\\AdminHtmlRouteProvider",
 *        "delete-multiple" = "Drupal\\entity\\Routing\\DeleteMultipleRouteProvider",
 *     },
 *   },
 *   config_prefix = "commerce_stock_location_type",
 *   admin_permission = "administer commerce_stock_location_type",
 *   bundle_of = "commerce_stock_location",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   config_export = {
 *     "id",
 *     "label"
 *   },
 *   links = {
 *     "add-form" = "/admin/commerce/config/commerce_stock_location_type/add",
 *     "edit-form" = "/admin/commerce/config/commerce_stock_location_type/{commerce_stock_location_type}/edit",
 *     "delete-form" = "/admin/commerce/config/commerce_stock_location_type/{commerce_stock_location_type}/delete",
 *     "collection" = "/admin/commerce/config/commerce_stock_location_type"
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Entity\\StockLocationType',
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
    'a095bdfde366b39cab51d9fd26af316f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The stock location type ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Entity\\StockLocationType',
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
    'df7a998014c094e3e879665093b48741' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The stock location type label.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Entity\\StockLocationType',
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
  ),
));