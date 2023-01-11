<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1639832446,
	'meta' => array (
  'cacheVersion' => 'v9-project-extensions',
  'phpstanVersion' => '1.2.0',
  'phpVersion' => 70333,
  'projectConfig' => '{parameters: {bootstrapFiles: [/var/www/html/vendor/mglaman/phpstan-drupal/drupal-autoloader.php], excludePaths: {analyseAndScan: [*.api.php, */tests/fixtures/*.php, */tests/Drupal/Tests/Listeners/Legacy/*, */tests/fixtures/*.php, */settings*.php, */bower_components/*, */node_modules/*], analyse: []}, fileExtensions: [module, theme, inc, install, profile, engine], drupal: {drupal_root: /var/www/html/web, entityMapping: {node: {class: Drupal\\node\\Entity\\Node, storage: Drupal\\node\\NodeStorage}, taxonomy_term: {class: Drupal\\taxonomy\\Entity\\Term, storage: Drupal\\taxonomy\\TermStorage}, user: {class: Drupal\\user\\Entity\\User, storage: Drupal\\user\\UserStorage}, block: {class: Drupal\\block\\Entity\\Block}}}, tmpDir: /var/www/html/tmp/tmp/upgrade_status/phpstan, customRulesetUsed: true}, rules: [mglaman\\PHPStanDrupal\\Rules\\Drupal\\Coder\\DiscouragedFunctionsRule, mglaman\\PHPStanDrupal\\Rules\\Drupal\\GlobalDrupalDependencyInjectionRule, mglaman\\PHPStanDrupal\\Rules\\Drupal\\PluginManager\\PluginManagerSetsCacheBackendRule, mglaman\\PHPStanDrupal\\Rules\\Deprecations\\AccessDeprecatedConstant, PHPStan\\Rules\\Deprecations\\AccessDeprecatedPropertyRule, PHPStan\\Rules\\Deprecations\\AccessDeprecatedStaticPropertyRule, PHPStan\\Rules\\Deprecations\\CallToDeprecatedFunctionRule, PHPStan\\Rules\\Deprecations\\CallToDeprecatedMethodRule, PHPStan\\Rules\\Deprecations\\CallToDeprecatedStaticMethodRule, PHPStan\\Rules\\Deprecations\\FetchingClassConstOfDeprecatedClassRule, PHPStan\\Rules\\Deprecations\\FetchingDeprecatedConstRule, PHPStan\\Rules\\Deprecations\\ImplementationOfDeprecatedInterfaceRule, PHPStan\\Rules\\Deprecations\\InheritanceOfDeprecatedClassRule, PHPStan\\Rules\\Deprecations\\InheritanceOfDeprecatedInterfaceRule, PHPStan\\Rules\\Deprecations\\InstantiationOfDeprecatedClassRule, PHPStan\\Rules\\Deprecations\\TypeHintDeprecatedInClassMethodSignatureRule, PHPStan\\Rules\\Deprecations\\TypeHintDeprecatedInClosureSignatureRule, PHPStan\\Rules\\Deprecations\\TypeHintDeprecatedInFunctionSignatureRule, PHPStan\\Rules\\Deprecations\\UsageOfDeprecatedCastRule, PHPStan\\Rules\\Deprecations\\UsageOfDeprecatedTraitRule], services: [{class: mglaman\\PHPStanDrupal\\Drupal\\ServiceMap}, {class: mglaman\\PHPStanDrupal\\Drupal\\ExtensionMap}, {class: mglaman\\PHPStanDrupal\\Drupal\\EntityDataRepository, arguments: {entityMapping: %drupal.entityMapping%}}, {class: mglaman\\PHPStanDrupal\\Type\\EntityTypeManagerGetStorageDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: mglaman\\PHPStanDrupal\\Type\\EntityStorage\\EntityStorageDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: mglaman\\PHPStanDrupal\\Type\\ContainerDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: mglaman\\PHPStanDrupal\\Type\\DrupalClassResolverDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: mglaman\\PHPStanDrupal\\Type\\EntityQuery\\EntityQueryDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: mglaman\\PHPStanDrupal\\Type\\UrlToStringDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: mglaman\\PHPStanDrupal\\Type\\DrupalClassResolverDynamicStaticReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: mglaman\\PHPStanDrupal\\Type\\DrupalServiceDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: mglaman\\PHPStanDrupal\\Reflection\\EntityFieldsViaMagicReflectionExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: mglaman\\PHPStanDrupal\\Rules\\Classes\\ClassExtendsInternalClassRule, tags: [phpstan.rules.rule], arguments: {reflectionProvider: @reflectionProvider}}, {class: mglaman\\PHPStanDrupal\\Rules\\Classes\\PluginManagerInspectionRule, tags: [phpstan.rules.rule], arguments: {reflectionProvider: @reflectionProvider}}, {class: mglaman\\PHPStanDrupal\\Rules\\Drupal\\LoadIncludes, tags: [phpstan.rules.rule], arguments: {extensionMap: @mglaman\\PHPStanDrupal\\Drupal\\ExtensionMap}}, {class: mglaman\\PHPStanDrupal\\Rules\\Drupal\\ModuleLoadInclude, tags: [phpstan.rules.rule], arguments: {extensionMap: @mglaman\\PHPStanDrupal\\Drupal\\ExtensionMap}}, {class: mglaman\\PHPStanDrupal\\Rules\\Deprecations\\PluginAnnotationContextDefinitionsRule, tags: [phpstan.rules.rule]}, {class: mglaman\\PHPStanDrupal\\Rules\\Deprecations\\ConfigEntityConfigExportRule, tags: [phpstan.rules.rule]}, {class: mglaman\\PHPStanDrupal\\Rules\\Drupal\\Tests\\BrowserTestBaseDefaultThemeRule, tags: [phpstan.rules.rule]}, {class: mglaman\\PHPStanDrupal\\Rules\\Deprecations\\GetDeprecatedServiceRule, tags: [phpstan.rules.rule]}, {class: mglaman\\PHPStanDrupal\\Rules\\Deprecations\\StaticServiceDeprecatedServiceRule, tags: [phpstan.rules.rule]}, {class: PHPStan\\Rules\\Deprecations\\DeprecatedClassHelper}]}',
  'analysedPaths' => 
  array (
    0 => '/var/www/html/web/themes/custom/barrio_sub',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
  ),
  'composerInstalled' => 
  array (
  ),
  'executedFilesHashes' => 
  array (
    '/var/www/html/vendor/mglaman/phpstan-drupal/drupal-autoloader.php' => 'c89a949241f7ae83deff75db26bca223c95b8911',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php' => '4afed65b0d2cbfac6b7819f42dea6d23f4c8e47b',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php' => '7f057354c4b06042bed673ec4f98211629fe3584',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'PDO',
    2 => 'Phar',
    3 => 'Reflection',
    4 => 'SPL',
    5 => 'SimpleXML',
    6 => 'Zend OPcache',
    7 => 'apc',
    8 => 'apcu',
    9 => 'bcmath',
    10 => 'bz2',
    11 => 'calendar',
    12 => 'ctype',
    13 => 'curl',
    14 => 'date',
    15 => 'dom',
    16 => 'exif',
    17 => 'fileinfo',
    18 => 'filter',
    19 => 'ftp',
    20 => 'gd',
    21 => 'gettext',
    22 => 'hash',
    23 => 'iconv',
    24 => 'igbinary',
    25 => 'imagick',
    26 => 'intl',
    27 => 'json',
    28 => 'ldap',
    29 => 'libxml',
    30 => 'mbstring',
    31 => 'memcached',
    32 => 'msgpack',
    33 => 'mysqli',
    34 => 'mysqlnd',
    35 => 'openssl',
    36 => 'pcntl',
    37 => 'pcre',
    38 => 'pdo_mysql',
    39 => 'pdo_pgsql',
    40 => 'pdo_sqlite',
    41 => 'pgsql',
    42 => 'posix',
    43 => 'readline',
    44 => 'redis',
    45 => 'session',
    46 => 'shmop',
    47 => 'soap',
    48 => 'sockets',
    49 => 'sodium',
    50 => 'sqlite3',
    51 => 'standard',
    52 => 'sysvmsg',
    53 => 'sysvsem',
    54 => 'sysvshm',
    55 => 'tokenizer',
    56 => 'uploadprogress',
    57 => 'wddx',
    58 => 'xml',
    59 => 'xmlreader',
    60 => 'xmlrpc',
    61 => 'xmlwriter',
    62 => 'xsl',
    63 => 'zip',
    64 => 'zlib',
  ),
  'stubFiles' => 
  array (
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub' => '34c9e85af3fe514ea3e18f7fc87e03f7890e3a46',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/Exception.stub' => '1162e8cdefd9d43af531512eb79b80b3e8e70dda',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub' => '7ed5b8ee9a46556e28551a26f7501a85ac343483',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionAttribute.stub' => '614c3dcc562c65118608b1c4e1176684ce1a2cc5',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClass.stub' => '78d777787f0085b0b72f207c241355d82d27e77a',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClassConstant.stub' => '7c0f2ee95301fed439a48f7d55e5d4d1487c9bb8',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub' => '2196325c2433ae733e0e7993400429493a1cd342',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionParameter.stub' => '3e648b120364fd63447250d11819d6206c9b03e9',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionProperty.stub' => '78f68f13d18db0d71458216a47e9c8cec4b76024',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub' => '8c1272fb5f32ab3478e0c805276609cd02277ee4',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub' => '2fadf02e9175d02a0d39240d89ae38bc939aa605',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/arrayFunctions.stub' => 'a270cfd832903e286448f56924f5dc844fdde0cb',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub' => '8d63f9636060e7efdfced52e29873f51c7cab46e',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub' => '850c98e54136d3dbbd46c1042a9286f7ca4d36f0',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub' => 'bbedd106fcb921f08e628254183f7f35e41f8dfb',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub' => 'a95f8e83a2ceb2d61cfe485bbcf72663219b3b4d',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/mysqli.stub' => '393a65057ae1aeb5492f3dd45166eac0150ed8e9',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub' => '6a8ce07b7dc82139ffd4ab1e84414e984801b065',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub' => 'aff61beeb3e9dfaed0eede432921df5eee2d3b40',
  ),
  'level' => '0',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
); },
	'dependencies' => array (
  '/var/www/html/web/themes/custom/barrio_sub/barrio_sub.theme' => 
  array (
    'fileHash' => '8ed4c0274b774d6e099a65b280cdfc26d7ba94d9',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/barrio_sub/color/color.inc' => 
  array (
    'fileHash' => '18c930ca5d0f7c7c48ec1c5c06daebaa0f48a195',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  '/var/www/html/web/themes/custom/barrio_sub/barrio_sub.theme' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'barrio_sub_form_system_theme_settings_alter',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Implements hook_form_system_theme_settings_alter() for settings form.
 *
 * Replace Barrio setting options with subtheme ones.
 *
 * Example on how to alter theme settings form
 *
 */',
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
      )),
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'form',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'form_state',
           'type' => 'Drupal\\Core\\Form\\FormStateInterface',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
  ),
); },
];