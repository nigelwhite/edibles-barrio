<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/commerce_stock/modules/local_storage/src/Plugin/QueueWorker/StockLevelUpdater.php-1634106758',
   'data' => 
  array (
    'd5c8da44dd15efbeaa83d5eef633b96b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Commerce Stock Local location level update worker.
 *
 * @QueueWorker(
 *   id = "commerce_stock_local_stock_level_updater",
 *   title = @Translation("Commerce Stock Local stock level updater"),
 *   cron = {"time" = 30}
 * )
 *
 * @ToDo Inject the config factory instead of calling \\Drupal::
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Plugin\\QueueWorker',
         'uses' => 
        array (
          'queueworkerbase' => 'Drupal\\Core\\Queue\\QueueWorkerBase',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Plugin\\QueueWorker\\StockLevelUpdater',
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
    '9e6b8a0e1c32d9546c7fd4ebc5fede03' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Plugin\\QueueWorker',
         'uses' => 
        array (
          'queueworkerbase' => 'Drupal\\Core\\Queue\\QueueWorkerBase',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Plugin\\QueueWorker\\StockLevelUpdater',
         'functionName' => 'processItem',
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
    'f6f1d0cb90529e21c59713582a5d78fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_stock_local\\LocalStockUpdater $updater */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Plugin\\QueueWorker',
         'uses' => 
        array (
          'queueworkerbase' => 'Drupal\\Core\\Queue\\QueueWorkerBase',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Plugin\\QueueWorker\\StockLevelUpdater',
         'functionName' => 'processItem',
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
    '05a3fb84d8ba9820a142c36df4de0730' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_stock_local\\StockLocationStorage $locationStorage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_stock_local\\Plugin\\QueueWorker',
         'uses' => 
        array (
          'queueworkerbase' => 'Drupal\\Core\\Queue\\QueueWorkerBase',
        ),
         'className' => 'Drupal\\commerce_stock_local\\Plugin\\QueueWorker\\StockLevelUpdater',
         'functionName' => 'processItem',
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