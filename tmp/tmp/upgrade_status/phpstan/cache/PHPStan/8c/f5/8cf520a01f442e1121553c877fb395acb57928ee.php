<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '1.2.0',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:5:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:34:"Defines the stock location entity.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:8:"@ingroup";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:20:"commerce_stock_local";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:4;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:18:"@ContentEntityType";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:2346:"(
  id = "commerce_stock_location",
  label = @Translation("Stock location"),
  label_plural = @Translation("Stock locations"),
  label_count = @PluralTranslation(
    singular = "@count stock location",
    plural = "@count stock locations",
  ),
  bundle_label = @Translation("Stock location type"),
  handlers = {
    "event" = "Drupal\\commerce_stock_local\\Event\\StockLocationEvent",
    "storage" = "Drupal\\commerce_stock_local\\StockLocationStorage",
    "access" = "Drupal\\entity\\EntityAccessControlHandler",
    "permission_provider" = "Drupal\\entity\\EntityPermissionProvider",
    "view_builder" = "Drupal\\Core\\Entity\\EntityViewBuilder",
    "list_builder" = "Drupal\\commerce_stock_local\\StockLocationListBuilder",
    "views_data" = "Drupal\\commerce_stock_local\\StockLocationViewsData",
    "translation" = "Drupal\\commerce_stock_local\\StockLocationTranslationHandler",
    "form" = {
      "default" = "Drupal\\commerce_stock_local\\Form\\StockLocationForm",
      "add" = "Drupal\\commerce_stock_local\\Form\\StockLocationForm",
      "edit" = "Drupal\\commerce_stock_local\\Form\\StockLocationForm",
      "delete" = "Drupal\\Core\\Entity\\ContentEntityDeleteForm",
    },
    "route_provider" = {
       "default" = "Drupal\\Core\\Entity\\Routing\\AdminHtmlRouteProvider",
       "delete-multiple" = "Drupal\\entity\\Routing\\DeleteMultipleRouteProvider",
    },
  },
  admin_permission = "administer commerce_stock_location",
  permission_granularity = "bundle",
  translatable = TRUE,
  base_table = "commerce_stock_location",
  data_table = "commerce_stock_location_field_data",
  entity_keys = {
    "id" = "location_id",
    "bundle" = "type",
    "label" = "name",
    "uuid" = "uuid",
    "langcode" = "langcode",
    "status" = "status",
    "owner" = "uid",
  },
  links = {
    "canonical" = "/commerce_stock_location/{commerce_stock_location}",
    "add-page" = "/commerce_stock_location/add",
    "add-form" = "/commerce_stock_location/add/{commerce_stock_location_type}",
    "edit-form" = "/commerce_stock_location/{commerce_stock_location}/edit",
    "delete-form" = "/admin/commerce/commerce_stock_location/{commerce_stock_location}/delete",
    "collection" = "/admin/commerce/commerce_stock_location",
  },
  bundle_entity_type = "commerce_stock_location_type",
  field_ui_base_route = "entity.commerce_stock_location_type.edit_form"
)";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));