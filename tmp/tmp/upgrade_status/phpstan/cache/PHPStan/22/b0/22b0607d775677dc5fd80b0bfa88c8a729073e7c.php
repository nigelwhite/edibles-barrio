<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '1.2.0',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:3:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:39:"Defines the stock location type entity.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:17:"@ConfigEntityType";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:1358:"(
  id = "commerce_stock_location_type",
  label = @Translation("Stock location type"),
  handlers = {
    "access" = "Drupal\\entity\\BundleEntityAccessControlHandler",
    "list_builder" = "Drupal\\commerce_stock_local\\StockLocationTypeListBuilder",
    "form" = {
      "add" = "Drupal\\commerce_stock_local\\Form\\StockLocationTypeForm",
      "edit" = "Drupal\\commerce_stock_local\\Form\\StockLocationTypeForm",
      "delete" = "Drupal\\commerce_stock_local\\Form\\StockLocationTypeDeleteForm"
    },
    "route_provider" = {
       "default" = "Drupal\\Core\\Entity\\Routing\\AdminHtmlRouteProvider",
       "delete-multiple" = "Drupal\\entity\\Routing\\DeleteMultipleRouteProvider",
    },
  },
  config_prefix = "commerce_stock_location_type",
  admin_permission = "administer commerce_stock_location_type",
  bundle_of = "commerce_stock_location",
  entity_keys = {
    "id" = "id",
    "label" = "label",
    "uuid" = "uuid"
  },
  config_export = {
    "id",
    "label"
  },
  links = {
    "add-form" = "/admin/commerce/config/commerce_stock_location_type/add",
    "edit-form" = "/admin/commerce/config/commerce_stock_location_type/{commerce_stock_location_type}/edit",
    "delete-form" = "/admin/commerce/config/commerce_stock_location_type/{commerce_stock_location_type}/delete",
    "collection" = "/admin/commerce/config/commerce_stock_location_type"
  }
)";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));