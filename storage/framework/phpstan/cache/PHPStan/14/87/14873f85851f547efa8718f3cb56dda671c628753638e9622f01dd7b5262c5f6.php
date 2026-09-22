<?php declare(strict_types = 1);

// osfsl-C:/Users/popot/Desktop/Delovna_Praksa/backend/hosting-app/vendor/composer/../laravel/framework/src/Illuminate/Foundation/DevCommands.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Foundation\DevCommands
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-3dd879a0a47710cfdf30a2bb1cde65c4b7b904441ee1e5d78fe9eb6ddaa0f0fb-8.4.24-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Foundation\\DevCommands',
        'filename' => 'C:/Users/popot/Desktop/Delovna_Praksa/backend/hosting-app/vendor/composer/../laravel/framework/src/Illuminate/Foundation/DevCommands.php',
      ),
    ),
    'namespace' => 'Illuminate\\Foundation',
    'name' => 'Illuminate\\Foundation\\DevCommands',
    'shortName' => 'DevCommands',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @phpstan-type DevCommandArray array{\'name\': string, \'command\': string, \'source\': array{\'file\': string, \'line\': int, \'class\'?: string, \'function\'?: string}, \'color\': string}
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 11,
    'endLine' => 447,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'packageManager' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'name' => 'packageManager',
        'modifiers' => 18,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'Illuminate\\Support\\NodePackageManager',
                  'isIdentifier' => false,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 18,
            'endLine' => 18,
            'startTokenPos' => 38,
            'startFilePos' => 477,
            'endTokenPos' => 38,
            'endFilePos' => 480,
          ),
        ),
        'docComment' => '/**
 * The resolved NodePackageManager instance.
 *
 * @var NodePackageManager|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 18,
        'endLine' => 18,
        'startColumn' => 5,
        'endColumn' => 64,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'colorCount' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'name' => 'colorCount',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '0',
          'attributes' => 
          array (
            'startLine' => 27,
            'endLine' => 27,
            'startTokenPos' => 51,
            'startFilePos' => 718,
            'endTokenPos' => 51,
            'endFilePos' => 718,
          ),
        ),
        'docComment' => '/**
 * Counter to keep track of how many colors have been assigned.
 *
 * Used to ensure colors are reused only after all have been used at least once.
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 27,
        'endLine' => 27,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'commands' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'name' => 'commands',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 34,
            'endLine' => 34,
            'startTokenPos' => 64,
            'startFilePos' => 840,
            'endTokenPos' => 65,
            'endFilePos' => 841,
          ),
        ),
        'docComment' => '/**
 * The registered development commands.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 34,
        'endLine' => 34,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'only' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'name' => 'only',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 41,
            'endLine' => 41,
            'startTokenPos' => 78,
            'startFilePos' => 1013,
            'endTokenPos' => 79,
            'endFilePos' => 1014,
          ),
        ),
        'docComment' => '/**
 * The names of commands that should be included when running the "dev" command.
 *
 * @var array<int, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 41,
        'endLine' => 41,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'except' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'name' => 'except',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 48,
            'endLine' => 48,
            'startTokenPos' => 92,
            'startFilePos' => 1188,
            'endTokenPos' => 93,
            'endFilePos' => 1189,
          ),
        ),
        'docComment' => '/**
 * The names of commands that should be excluded when running the "dev" command.
 *
 * @var array<int, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 48,
        'endLine' => 48,
        'startColumn' => 5,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'mode' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'name' => 'mode',
        'modifiers' => 18,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Foundation\\DevCommandMode',
            'isIdentifier' => false,
          ),
        ),
        'default' => 
        array (
          'code' => '\\Illuminate\\Foundation\\DevCommandMode::TABS',
          'attributes' => 
          array (
            'startLine' => 55,
            'endLine' => 55,
            'startTokenPos' => 108,
            'startFilePos' => 1342,
            'endTokenPos' => 110,
            'endFilePos' => 1361,
          ),
        ),
        'docComment' => '/**
 * The mode in which the "dev" command should run.
 *
 * @var DevCommandMode
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 55,
        'endLine' => 55,
        'startColumn' => 5,
        'endColumn' => 65,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'withTimestamps' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'name' => 'withTimestamps',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 62,
            'endLine' => 62,
            'startTokenPos' => 123,
            'startFilePos' => 1517,
            'endTokenPos' => 123,
            'endFilePos' => 1521,
          ),
        ),
        'docComment' => '/**
 * Whether to include timestamps in the output of the "dev" command.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 62,
        'endLine' => 62,
        'startColumn' => 5,
        'endColumn' => 45,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'autoRestart' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'name' => 'autoRestart',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 69,
            'endLine' => 69,
            'startTokenPos' => 136,
            'startFilePos' => 1672,
            'endTokenPos' => 136,
            'endFilePos' => 1675,
          ),
        ),
        'docComment' => '/**
 * Whether to automatically restart a "dev" command when it fails.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 69,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 41,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'bufferSize' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'name' => 'bufferSize',
        'modifiers' => 18,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'int',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 76,
            'endLine' => 76,
            'startTokenPos' => 152,
            'startFilePos' => 1851,
            'endTokenPos' => 152,
            'endFilePos' => 1854,
          ),
        ),
        'docComment' => '/**
 * How many lines of output to buffer for each command when running in tabbed mode.
 *
 * @var int|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 76,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 45,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'streamBufferSize' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'name' => 'streamBufferSize',
        'modifiers' => 18,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'int',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 83,
            'endLine' => 83,
            'startTokenPos' => 168,
            'startFilePos' => 2025,
            'endTokenPos' => 168,
            'endFilePos' => 2028,
          ),
        ),
        'docComment' => '/**
 * How many lines of output to buffer total when running in stream mode.
 *
 * @var int|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 83,
        'endLine' => 83,
        'startColumn' => 5,
        'endColumn' => 51,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
      'registerDefaults' => 
      array (
        'name' => 'registerDefaults',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register the default development commands.
 *
 * @return void
 */',
        'startLine' => 90,
        'endLine' => 104,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'currentClassName' => 'Illuminate\\Foundation\\DevCommands',
        'aliasName' => NULL,
      ),
      'register' => 
      array (
        'name' => 'register',
        'parameters' => 
        array (
          'command' => 
          array (
            'name' => 'command',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 113,
            'endLine' => 113,
            'startColumn' => 37,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'name' => 
          array (
            'name' => 'name',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 113,
                'endLine' => 113,
                'startTokenPos' => 287,
                'startFilePos' => 2740,
                'endTokenPos' => 287,
                'endFilePos' => 2743,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 113,
            'endLine' => 113,
            'startColumn' => 54,
            'endColumn' => 73,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Foundation\\DevCommand',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register a development command.
 *
 * @param  string  $command
 * @param  string|null  $name
 * @return DevCommand
 */',
        'startLine' => 113,
        'endLine' => 132,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'currentClassName' => 'Illuminate\\Foundation\\DevCommands',
        'aliasName' => NULL,
      ),
      'artisan' => 
      array (
        'name' => 'artisan',
        'parameters' => 
        array (
          'command' => 
          array (
            'name' => 'command',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 141,
            'endLine' => 141,
            'startColumn' => 36,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'name' => 
          array (
            'name' => 'name',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 141,
                'endLine' => 141,
                'startTokenPos' => 478,
                'startFilePos' => 3626,
                'endTokenPos' => 478,
                'endFilePos' => 3629,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 141,
            'endLine' => 141,
            'startColumn' => 53,
            'endColumn' => 72,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Foundation\\DevCommand',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Registers an Artisan command, automatically prefixing it with "php artisan".
 *
 * @param  string  $command
 * @param  string|null  $name
 * @return DevCommand
 */',
        'startLine' => 141,
        'endLine' => 144,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'currentClassName' => 'Illuminate\\Foundation\\DevCommands',
        'aliasName' => NULL,
      ),
      'node' => 
      array (
        'name' => 'node',
        'parameters' => 
        array (
          'command' => 
          array (
            'name' => 'command',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 153,
            'endLine' => 153,
            'startColumn' => 33,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'name' => 
          array (
            'name' => 'name',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 153,
                'endLine' => 153,
                'startTokenPos' => 537,
                'startFilePos' => 4051,
                'endTokenPos' => 537,
                'endFilePos' => 4054,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 153,
            'endLine' => 153,
            'startColumn' => 50,
            'endColumn' => 69,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Foundation\\DevCommand',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Registers a Node command, automatically prefixing it with the detected package manager\'s run command.
 *
 * @param  string  $command
 * @param  string|null  $name
 * @return DevCommand
 */',
        'startLine' => 153,
        'endLine' => 156,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'currentClassName' => 'Illuminate\\Foundation\\DevCommands',
        'aliasName' => NULL,
      ),
      'nodeExec' => 
      array (
        'name' => 'nodeExec',
        'parameters' => 
        array (
          'command' => 
          array (
            'name' => 'command',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 165,
            'endLine' => 165,
            'startColumn' => 37,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'name' => 
          array (
            'name' => 'name',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 165,
                'endLine' => 165,
                'startTokenPos' => 600,
                'startFilePos' => 4507,
                'endTokenPos' => 600,
                'endFilePos' => 4510,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 165,
            'endLine' => 165,
            'startColumn' => 54,
            'endColumn' => 73,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Foundation\\DevCommand',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Registers a Node command, automatically prefixing it with the detected package manager\'s exec command.
 *
 * @param  string  $command
 * @param  string|null  $name
 * @return DevCommand
 */',
        'startLine' => 165,
        'endLine' => 168,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'currentClassName' => 'Illuminate\\Foundation\\DevCommands',
        'aliasName' => NULL,
      ),
      'commands' => 
      array (
        'name' => 'commands',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the registered development commands.
 *
 * @return DevCommandArray[]
 */',
        'startLine' => 175,
        'endLine' => 190,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'currentClassName' => 'Illuminate\\Foundation\\DevCommands',
        'aliasName' => NULL,
      ),
      'inline' => 
      array (
        'name' => 'inline',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the mode to inline, where all commands are run in the same terminal window.
 *
 * No-op on Windows.
 *
 * @return void
 */',
        'startLine' => 199,
        'endLine' => 202,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'currentClassName' => 'Illuminate\\Foundation\\DevCommands',
        'aliasName' => NULL,
      ),
      'stream' => 
      array (
        'name' => 'stream',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the mode to stream, where all commands are run in the same terminal window, but their output is interactive within a TUI.
 *
 * No-op on Windows.
 *
 * @return void
 */',
        'startLine' => 211,
        'endLine' => 214,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'currentClassName' => 'Illuminate\\Foundation\\DevCommands',
        'aliasName' => NULL,
      ),
      'tabs' => 
      array (
        'name' => 'tabs',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the mode to tabs, where each command is run in its own terminal tab.
 *
 * No-op on Windows.
 *
 * @return void
 */',
        'startLine' => 223,
        'endLine' => 226,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'currentClassName' => 'Illuminate\\Foundation\\DevCommands',
        'aliasName' => NULL,
      ),
      'mode' => 
      array (
        'name' => 'mode',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Foundation\\DevCommandMode',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the mode in which the "dev" command should run.
 *
 * @return DevCommandMode
 */',
        'startLine' => 233,
        'endLine' => 236,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'currentClassName' => 'Illuminate\\Foundation\\DevCommands',
        'aliasName' => NULL,
      ),
      'withTimestamps' => 
      array (
        'name' => 'withTimestamps',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Enable timestamps in the output of the "dev" command.
 *
 * @return void
 */',
        'startLine' => 243,
        'endLine' => 246,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'currentClassName' => 'Illuminate\\Foundation\\DevCommands',
        'aliasName' => NULL,
      ),
      'shouldIncludeTimestamps' => 
      array (
        'name' => 'shouldIncludeTimestamps',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if timestamps should be included in the output of the "dev" command.
 *
 * @return bool
 */',
        'startLine' => 253,
        'endLine' => 256,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'currentClassName' => 'Illuminate\\Foundation\\DevCommands',
        'aliasName' => NULL,
      ),
      'disableAutoRestart' => 
      array (
        'name' => 'disableAutoRestart',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Disable automatic restart of a "dev" command when it fails.
 *
 * @return void
 */',
        'startLine' => 263,
        'endLine' => 266,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'currentClassName' => 'Illuminate\\Foundation\\DevCommands',
        'aliasName' => NULL,
      ),
      'shouldAutoRestart' => 
      array (
        'name' => 'shouldAutoRestart',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if a "dev" command should automatically restart when it fails.
 *
 * @return bool
 */',
        'startLine' => 273,
        'endLine' => 276,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'currentClassName' => 'Illuminate\\Foundation\\DevCommands',
        'aliasName' => NULL,
      ),
      'bufferSize' => 
      array (
        'name' => 'bufferSize',
        'parameters' => 
        array (
          'lines' => 
          array (
            'name' => 'lines',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 286,
            'endLine' => 286,
            'startColumn' => 39,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the number of lines of output to buffer for each command when running in tabbed mode.
 *
 * No-op on Windows.
 *
 * @param  int  $lines
 * @return void
 */',
        'startLine' => 286,
        'endLine' => 289,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'currentClassName' => 'Illuminate\\Foundation\\DevCommands',
        'aliasName' => NULL,
      ),
      'getBufferSize' => 
      array (
        'name' => 'getBufferSize',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'int',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the number of lines of output to buffer for each command when running in tabbed mode.
 *
 * @return int|null
 */',
        'startLine' => 296,
        'endLine' => 299,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'currentClassName' => 'Illuminate\\Foundation\\DevCommands',
        'aliasName' => NULL,
      ),
      'streamBufferSize' => 
      array (
        'name' => 'streamBufferSize',
        'parameters' => 
        array (
          'lines' => 
          array (
            'name' => 'lines',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 309,
            'endLine' => 309,
            'startColumn' => 45,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the number of lines of output to buffer total when running in stream mode.
 *
 * No-op on Windows.
 *
 * @param  int  $lines
 * @return void
 */',
        'startLine' => 309,
        'endLine' => 312,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'currentClassName' => 'Illuminate\\Foundation\\DevCommands',
        'aliasName' => NULL,
      ),
      'getStreamBufferSize' => 
      array (
        'name' => 'getStreamBufferSize',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'int',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the number of lines of output to buffer total when running in stream mode.
 *
 * @return int|null
 */',
        'startLine' => 319,
        'endLine' => 322,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'currentClassName' => 'Illuminate\\Foundation\\DevCommands',
        'aliasName' => NULL,
      ),
      'fillInEmptyColors' => 
      array (
        'name' => 'fillInEmptyColors',
        'parameters' => 
        array (
          'commands' => 
          array (
            'name' => 'commands',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 330,
            'endLine' => 330,
            'startColumn' => 49,
            'endColumn' => 63,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Fill in any empty colors in the given commands array, ensuring each command has a color assigned.
 *
 * @param  array  $commands
 * @return array
 */',
        'startLine' => 330,
        'endLine' => 339,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'currentClassName' => 'Illuminate\\Foundation\\DevCommands',
        'aliasName' => NULL,
      ),
      'getColor' => 
      array (
        'name' => 'getColor',
        'parameters' => 
        array (
          'commands' => 
          array (
            'name' => 'commands',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 347,
            'endLine' => 347,
            'startColumn' => 40,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a color for a command, ensuring that colors are reused only after all available colors have been used at least once.
 *
 * @param  array  $commands
 * @return string
 */',
        'startLine' => 347,
        'endLine' => 355,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'currentClassName' => 'Illuminate\\Foundation\\DevCommands',
        'aliasName' => NULL,
      ),
      'resolveSource' => 
      array (
        'name' => 'resolveSource',
        'parameters' => 
        array (
          'trace' => 
          array (
            'name' => 'trace',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 363,
            'endLine' => 363,
            'startColumn' => 45,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Resolve the first external caller frame from a debug backtrace.
 *
 * @param  array<int, array{\'file\': string, \'line\': int, \'class\'?: string, \'function\'?: string}>  $trace
 * @return array{\'file\': string, \'line\': int, \'class\'?: string, \'function\'?: string}
 */',
        'startLine' => 363,
        'endLine' => 378,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'currentClassName' => 'Illuminate\\Foundation\\DevCommands',
        'aliasName' => NULL,
      ),
      'resolvePriority' => 
      array (
        'name' => 'resolvePriority',
        'parameters' => 
        array (
          'trace' => 
          array (
            'name' => 'trace',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 386,
            'endLine' => 386,
            'startColumn' => 47,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine the registration priority from a debug backtrace.
 *
 * @param  array<int, array{\'file\': string, \'line\': int, \'class\'?: string, \'function\'?: string}>  $trace
 * @return int
 */',
        'startLine' => 386,
        'endLine' => 414,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'currentClassName' => 'Illuminate\\Foundation\\DevCommands',
        'aliasName' => NULL,
      ),
      'only' => 
      array (
        'name' => 'only',
        'parameters' => 
        array (
          'names' => 
          array (
            'name' => 'names',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 422,
            'endLine' => 422,
            'startColumn' => 33,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the commands that should be included when running the "dev" command.
 *
 * @param  string  ...$names
 * @return void
 */',
        'startLine' => 422,
        'endLine' => 425,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'currentClassName' => 'Illuminate\\Foundation\\DevCommands',
        'aliasName' => NULL,
      ),
      'except' => 
      array (
        'name' => 'except',
        'parameters' => 
        array (
          'names' => 
          array (
            'name' => 'names',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 433,
            'endLine' => 433,
            'startColumn' => 35,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the commands that should be excluded when running the "dev" command.
 *
 * @param  string  ...$names
 * @return void
 */',
        'startLine' => 433,
        'endLine' => 436,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'currentClassName' => 'Illuminate\\Foundation\\DevCommands',
        'aliasName' => NULL,
      ),
      'getPackageManager' => 
      array (
        'name' => 'getPackageManager',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Support\\NodePackageManager',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Resolve and return the NodePackageManager instance.
 *
 * @return NodePackageManager
 */',
        'startLine' => 443,
        'endLine' => 446,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\DevCommands',
        'implementingClassName' => 'Illuminate\\Foundation\\DevCommands',
        'currentClassName' => 'Illuminate\\Foundation\\DevCommands',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
      ),
    ),
  ),
));