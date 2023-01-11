<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Extension/ModuleUninstallValidatorInterface.php-1637184268',
   'data' => 
  array (
    '98da5f2b8979fa170513759fc2d4a2d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Common interface for module uninstall validators.
 *
 * A module uninstall validator must implement this interface and be defined in
 * a Drupal @link container service @endlink that is tagged
 * module_install.uninstall_validator.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleUninstallValidatorInterface',
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
    '222d4658dfb4be32c539a663728efd6a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines the reasons a module can not be uninstalled.
   *
   * @param string $module
   *   A module name.
   *
   * @return string[]
   *   An array of reasons the module can not be uninstalled, empty if it can.
   *   Each reason should not end with any punctuation since multiple reasons
   *   can be displayed together.
   *
   * @see template_preprocess_system_modules_uninstall()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleUninstallValidatorInterface',
         'functionName' => 'validate',
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