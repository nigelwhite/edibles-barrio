<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/vendor/ondrejmirtes/better-reflection/src/SourceLocator/SourceStubber/../../../../../jetbrains/phpstorm-stubs/filter/filter.stub-1637244537',
   'data' => 
  array (
    '2b9c2ea76b3ad284295768e67d159ca3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Gets a specific external variable by name and optionally filters it
 * @link https://php.net/manual/en/function.filter-input.php
 * @param int $type <p>
 * One of <b>INPUT_GET</b>, <b>INPUT_POST</b>,
 * <b>INPUT_COOKIE</b>, <b>INPUT_SERVER</b>, or
 * <b>INPUT_ENV</b>.
 * </p>
 * @param string $var_name <p>
 * Name of a variable to get.
 * </p>
 * @param int $filter [optional] <p>
 * The ID of the filter to apply. The
 * manual page lists the available filters.
 * </p>
 * @param array|int $options [optional] <p>
 * Associative array of options or bitwise disjunction of flags. If filter
 * accepts options, flags can be provided in "flags" field of array.
 * </p>
 * @return mixed Value of the requested variable on success, <b>FALSE</b> if the filter fails,
 * or <b>NULL</b> if the <i>variable_name</i> variable is not set.
 * If the flag <b>FILTER_NULL_ON_FAILURE</b> is used, it
 * returns <b>FALSE</b> if the variable is not set and <b>NULL</b> if the filter fails.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'filter_input',
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
    '817e57e901643c67a05d5dc8ad6b0904' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Filters a variable with a specified filter
 * @link https://php.net/manual/en/function.filter-var.php
 * @param mixed $value <p>
 * Value to filter.
 * </p>
 * @param int $filter [optional] <p>
 * The ID of the filter to apply. The
 * manual page lists the available filters.
 * </p>
 * @param array|int $options [optional] <p>
 * Associative array of options or bitwise disjunction of flags. If filter
 * accepts options, flags can be provided in "flags" field of array. For
 * the "callback" filter, callable type should be passed. The
 * callback must accept one argument, the value to be filtered, and return
 * the value after filtering/sanitizing it.
 * </p>
 * <p>
 * <code>
 * // for filters that accept options, use this format
 * $options = array(
 * \'options\' => array(
 * \'default\' => 3, // value to return if the filter fails
 * // other options here
 * \'min_range\' => 0
 * ),
 * \'flags\' => FILTER_FLAG_ALLOW_OCTAL,
 * );
 * $var = filter_var(\'0755\', FILTER_VALIDATE_INT, $options);
 * // for filter that only accept flags, you can pass them directly
 * $var = filter_var(\'oops\', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
 * // for filter that only accept flags, you can also pass as an array
 * $var = filter_var(\'oops\', FILTER_VALIDATE_BOOLEAN,
 * array(\'flags\' => FILTER_NULL_ON_FAILURE));
 * // callback validate filter
 * function foo($value)
 * {
 * // Expected format: Surname, GivenNames
 * if (strpos($value, ", ") === false) return false;
 * list($surname, $givennames) = explode(", ", $value, 2);
 * $empty = (empty($surname) || empty($givennames));
 * $notstrings = (!is_string($surname) || !is_string($givennames));
 * if ($empty || $notstrings) {
 * return false;
 * } else {
 * return $value;
 * }
 * }
 * $var = filter_var(\'Doe, Jane Sue\', FILTER_CALLBACK, array(\'options\' => \'foo\'));
 * </code>
 * </p>
 * @return mixed the filtered data, or <b>FALSE</b> if the filter fails.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'filter_var',
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
    'd693095d08f3e918b86dd7f22892cd9c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Gets external variables and optionally filters them
 * @link https://php.net/manual/en/function.filter-input-array.php
 * @param int $type <p>
 * One of <b>INPUT_GET</b>, <b>INPUT_POST</b>,
 * <b>INPUT_COOKIE</b>, <b>INPUT_SERVER</b>, or
 * <b>INPUT_ENV</b>.
 * </p>
 * @param array|int $options [optional] <p>
 * An array defining the arguments. A valid key is a string
 * containing a variable name and a valid value is either a filter type, or an array
 * optionally specifying the filter, flags and options. If the value is an
 * array, valid keys are filter which specifies the
 * filter type,
 * flags which specifies any flags that apply to the
 * filter, and options which specifies any options that
 * apply to the filter. See the example below for a better understanding.
 * </p>
 * <p>
 * This parameter can be also an integer holding a filter constant. Then all values in the
 * input array are filtered by this filter.
 * </p>
 * @param bool $add_empty [optional] <p>
 * Add missing keys as <b>NULL</b> to the return value.
 * </p>
 * @return array|false|null An array containing the values of the requested variables on success, or <b>FALSE</b>
 * on failure. An array value will be <b>FALSE</b> if the filter fails, or <b>NULL</b> if
 * the variable is not set. Or if the flag <b>FILTER_NULL_ON_FAILURE</b>
 * is used, it returns <b>FALSE</b> if the variable is not set and <b>NULL</b> if the filter
 * fails.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'filter_input_array',
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
    '8af4c78804cecd80b67ae38d57b95a00' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Gets multiple variables and optionally filters them
 * @link https://php.net/manual/en/function.filter-var-array.php
 * @param array $array <p>
 * An array with string keys containing the data to filter.
 * </p>
 * @param array|int $options [optional] <p>
 * An array defining the arguments. A valid key is a string
 * containing a variable name and a valid value is either a
 * filter type, or an
 * array optionally specifying the filter, flags and options.
 * If the value is an array, valid keys are filter
 * which specifies the filter type,
 * flags which specifies any flags that apply to the
 * filter, and options which specifies any options that
 * apply to the filter. See the example below for a better understanding.
 * </p>
 * <p>
 * This parameter can be also an integer holding a filter constant. Then all values in the
 * input array are filtered by this filter.
 * </p>
 * @param bool $add_empty [optional] <p>
 * Add missing keys as <b>NULL</b> to the return value.
 * </p>
 * @return array|false|null An array containing the values of the requested variables on success, or <b>FALSE</b>
 * on failure. An array value will be <b>FALSE</b> if the filter fails, or <b>NULL</b> if
 * the variable is not set.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'filter_var_array',
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
    '3cccda165d2d69795546fc72c16e995c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns a list of all supported filters
 * @link https://php.net/manual/en/function.filter-list.php
 * @return array an array of names of all supported filters, empty array if there
 * are no such filters. Indexes of this array are not filter IDs, they can be
 * obtained with <b>filter_id</b> from a name instead.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'filter_list',
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
    'aa4d025506c8224002dc38bae9ccbf05' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Checks if variable of specified type exists
 * @link https://php.net/manual/en/function.filter-has-var.php
 * @param int $input_type <p>
 * One of <b>INPUT_GET</b>, <b>INPUT_POST</b>,
 * <b>INPUT_COOKIE</b>, <b>INPUT_SERVER</b>, or
 * <b>INPUT_ENV</b>.
 * </p>
 * @param string $var_name <p>
 * Name of a variable to check.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'filter_has_var',
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
    '8091d65f3aa38f17cd24038eac44b9f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns the filter ID belonging to a named filter
 * @link https://php.net/manual/en/function.filter-id.php
 * @param string $name <p>
 * Name of a filter to get.
 * </p>
 * @return int|false ID of a filter on success or <b>FALSE</b> if filter doesn\'t exist.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'filter_id',
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
    '7563a07cfd906d54cbc51b8018d8c6a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * POST variables.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    '26ef62daa51f9d33d3c91c651e70583d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * GET variables.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    '025995af13197dddc26bafa913d32a53' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * COOKIE variables.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    'f0b1a30f3e1b2a552e79dbf9bae5bd81' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * ENV variables.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    '0f5996a9eb60fff6d66a823976b88c8e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * SERVER variables.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    '2053badfe9aa7d6fef1340455bb2296f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * SESSION variables.
 * (not implemented yet)
 * @link https://php.net/manual/en/filter.constants.php
 * @removed 8.0
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    '38f1977d9ac7a727225b3731b4571c8e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * REQUEST variables.
 * (not implemented yet)
 * @link https://php.net/manual/en/filter.constants.php
 * @removed 8.0
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    '6e05146659642affaf4dcd78a13a059a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * No flags.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    'c000d6f371dfe6fabff7176399bf4f70' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Flag used to require scalar as input
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    'd59dcb8aa61c2ee45384fd3f05039ae8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Require an array as input.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    '8bc63a7ba931a99688d69c1de7897d80' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Always returns an array.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    'd0b40d58d11af2b2a325759633138231' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Use NULL instead of FALSE on failure.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    'bdf8237a6425f7e16bf1034ce23cea93' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * ID of "int" filter.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    'b0b59afd7e63fbf96645ed4bc8b2f33a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * ID of "boolean" filter.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    '41eed857493b2a97058e2e609080e45f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * ID of "boolean" filter.
 * @link https://php.net/manual/en/filter.constants.php
 * @link https://php.net/manual/en/filter.filters.validate.php
 * @since 8.0 Using `FILTER_VALIDATE_BOOL` is preferred.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    'f917ef748e8eca00bb16de25b14db21d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * ID of "float" filter.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    'ad28bbecc620ebfac851de9787ade09b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * ID of "validate_regexp" filter.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    '94668dd4d8363e9dfaa4741dd6d0b599' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * ID of "validate_url" filter.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    'af1712e959a6e9fd578b8f7c9a30fb02' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * ID of "validate_email" filter.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    'f3e56b23fe9b09c20deac70257332909' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * ID of "validate_ip" filter.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    '5dbc72b92e39ce68b9e1d30024f9abff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * ID of default ("string") filter.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    'a3f117d70db07349d7d8c76c7e566b94' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @since 7.3
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    'f04d313c7c3fec508f1ac718ea48ad7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * ID of "unsafe_raw" filter.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    '399a5ae46b767a458112b208fb5bc3e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * ID of "string" filter.
 * @link https://php.net/manual/en/filter.constants.php
 * @deprecated 8.1
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    'dd678d0631eca2bfe1cfe5d1fb75390e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * ID of "stripped" filter.
 * @link https://php.net/manual/en/filter.constants.php
 * @deprecated 8.1
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    'd1067c0520ecc4297880ec4b988ffb88' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * ID of "encoded" filter.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    '9e51f93c5b30e5c138827554c7bf50d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * ID of "special_chars" filter.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    '0373479c013852ec7ac43e188a0a64a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * ID of "email" filter.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    'bb4e96d55f63a15e7923320888ceaf49' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * ID of "url" filter.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    '0aac310af962f3a51d92fc4ad08971e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * ID of "number_int" filter.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    'c1060028e4de6ac2a23a43f1b77bd982' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * ID of "number_float" filter.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    '9858d1273eff13fb9ac2842d835ee4f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * ID of "magic_quotes" filter.
 * @link https://php.net/manual/en/filter.constants.php
 * @deprecated 7.4
 * @removed 8.0
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    '2b6e16898dc3333bcbb537d2c89d94d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * ID of "callback" filter.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    '6bea8c8465989a2d59e5fa42dde34aa6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Allow octal notation (0[0-7]+) in "int" filter.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    '798a7dd2f945ffb4ae778149b5298c7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Allow hex notation (0x[0-9a-fA-F]+) in "int" filter.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    '8a6a67969994f6519b42c59f3259eff4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Strip characters with ASCII value less than 32.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    '432870d0bc0430136af2fbaa4540dac3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Strip characters with ASCII value greater than 127.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    'f9464d4c5d8e7c9fffab05f25096c6ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Encode characters with ASCII value less than 32.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    'ab41c525d2d2e8120688277d13be6a54' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Encode characters with ASCII value greater than 127.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    '5a7ae15cc768c0d5fd80457da9078568' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Encode &.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    '1a7891b7357c63917a2dc4c5962c8da5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Don\'t encode \' and ".
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    'f51f72e9ff0c28e1430cbbe735a059e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (No use for now.)
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    '085c005e1d31ed60d7780c64a825dbbf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Allow fractional part in "number_float" filter.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    '3f121487aee360030e2d60994dbc3270' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Allow thousand separator (,) in "number_float" filter.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    '4e0c38791e6a397211c3ca7d936331e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Allow scientific notation (e, E) in
 * "number_float" filter.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    'c6c023464d0c2233ce1fbbc8eaf2c2d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Require scheme in "validate_url" filter.
 * @link https://php.net/manual/en/filter.constants.php
 * @deprecated 7.3
 * @removed 8.0
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    '7fdb62253df2ba2b1be3d88b59d581bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Require host in "validate_url" filter.
 * @link https://php.net/manual/en/filter.constants.php
 * @deprecated 7.3
 * @removed 8.0
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    '47408fc9ee3cd00125f22f83105b504b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Require path in "validate_url" filter.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    'feb45fb43a9c7e3c8d003e6491a879af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Require query in "validate_url" filter.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    '0b82d77651588cc4b948a5997f193e22' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Allow only IPv4 address in "validate_ip" filter.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    '73bb5d71dd91e4c7faeaef22b43a5afd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Allow only IPv6 address in "validate_ip" filter.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    '8165d5f76d3e558541d80eefb31c51c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Deny reserved addresses in "validate_ip" filter.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
    'bf0a44e09719a27363220cd65650de2c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Deny private addresses in "validate_ip" filter.
 * @link https://php.net/manual/en/filter.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
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
  ),
));