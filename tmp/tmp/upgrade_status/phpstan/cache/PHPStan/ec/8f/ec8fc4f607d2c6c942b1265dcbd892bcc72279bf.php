<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/commerce_stock/modules/local_storage/commerce_stock_local.install-1638990449',
   'data' => 
  array (
    'ecc80f9b9b58403b042eee86160e88ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @file
 * Contains install and update functions for commerce stock local.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
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
    '62575d99576eff72e94258d080d42522' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_schema().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'commerce_stock_local_schema',
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
    'ad7f73aa63215003f728cd8542c6beff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_install().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'commerce_stock_local_install',
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
    'e1d2d1344b6311f3143286a4e19ca14e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Adds \'entity_type\' column to commerce_stock_transaction table.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'commerce_stock_local_update_8001',
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
    '7d526638482df9260905c0290d588929' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Adds \'entity_type\' column to commerce_stock_location_level table.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'commerce_stock_local_update_8002',
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
    'a0954cf3630d9d42fe46e58754726b26' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Update commerce_stock_location_level table.
 *
 * Change the \'entity_type\' column to not allow null values.
 * Add \'entity_type\' column to primary key of commerce_stock_location_level
 * table and initialize \'entity_type\' column for existing records.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'commerce_stock_local_update_8003',
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
    '5a6456df26ffcaff73d8bd23beb0b9ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Removes the \'canonical\' link from StockLocationType entity definitions.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'commerce_stock_local_update_8004',
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
    '1a17603187fdbb5e523983672d83dc2e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Add index to entity_id field in commerce_stock_transaction table.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'commerce_stock_local_update_8005',
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
    '8ef2934b708134733e0f3862d6769c61' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Add "uid" field to the "StockLocation" entity if missing.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'stocklocation' => 'Drupal\\commerce_stock_local\\Entity\\StockLocation',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'commerce_stock_local_update_8006',
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