<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1790027869,
	'meta' => array (
  'cacheVersion' => 'v13-packageDependencies',
  'phpstanVersion' => '2.2.8',
  'fnsr' => false,
  'metaExtensions' => 
  array (
  ),
  'phpVersion' => 80424,
  'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule: {phpstan.rules.rule: %noEnvCallsOutsideOfConfig%}, Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule: {phpstan.rules.rule: %noUnnecessaryEnumerableToArrayCalls%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}, Larastan\\Larastan\\Rules\\NoMissingTranslationsRule: {phpstan.rules.rule: %checkMissingTranslations%}, Larastan\\Larastan\\Rules\\ModelAppendsRule: {phpstan.rules.rule: %checkModelAppends%}, Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule: {phpstan.rules.rule: %checkModelMethodVisibility%}, Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %generalizeEnvReturnType%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension: {phpstan.broker.dynamicMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension: {phpstan.broker.dynamicStaticMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\Rules\\ConfigCollectionRule: {phpstan.rules.rule: %checkConfigTypes%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], mixinExcludeClasses: [Eloquent], bootstrapFiles: [bootstrap.php, lazy/Carbon/UnprotectedDatePeriod.php], checkOctaneCompatibility: false, noEnvCallsOutsideOfConfig: true, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], noUnnecessaryEnumerableToArrayCalls: false, squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, configDirectories: [], viewDirectories: [], translationDirectories: [], checkModelProperties: false, checkUnusedViews: false, checkMissingTranslations: false, checkModelAppends: true, checkModelMethodVisibility: false, generalizeEnvReturnType: false, checkConfigTypes: false, checkAuthCallsWhenInRequestScope: false, parseModelCastsMethod: false, enableMigrationCache: false, paths: [C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app, C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\bootstrap\\app.php, C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\config, C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database, C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\routes], level: 7}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule], services: {{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ContractsMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\FacadesMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ManagersMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\AuthsMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelOnlyDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\LiteralExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterRejectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule, arguments: {configDirectories: %configDirectories%}}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule}, {class: Larastan\\Larastan\\Rules\\ModelAppendsRule}, {class: Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppFacadeEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Types\\CollectionOf\\CollectionOfTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @migrationsParser, reflectionProvider: @reflectionProvider}}, iamcalSqlParser: {class: Larastan\\Larastan\\SQL\\IamcalSqlParser, autowired: false}, sqlParserFactory: {class: Larastan\\Larastan\\SQL\\SqlParserFactory, arguments: {iamcalSqlParser: @iamcalSqlParser}}, sqlParser: {type: Larastan\\Larastan\\SQL\\SqlParser, factory: [@sqlParserFactory, create]}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper, arguments: {parser: @currentPhpVersionSimpleDirectParser, parseModelCastsMethod: %parseModelCastsMethod%}}, {class: Larastan\\Larastan\\Properties\\MigrationCache, arguments: {cacheDirectory: %tmpDir%, enabled: %enableMigrationCache%}}, {class: Larastan\\Larastan\\Properties\\ModelPropertyHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Properties\\Schema\\MySqlDataTypeToPhpTypeConverter}, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\Support\\ViewParser, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Rules\\NoMissingTranslationsRule, arguments: {translationDirectories: %translationDirectories%}}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationTranslatorCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFacadeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationViewCollector}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\LangGetReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeHelper}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationResolver}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationHelper}, {class: Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension}, {class: Larastan\\Larastan\\Support\\ConfigParser, arguments: {parser: @currentPhpVersionSimpleDirectParser, configPaths: %configDirectories%, treatPhpDocTypesAsCertain: %treatPhpDocTypesAsCertain%}}, {class: Larastan\\Larastan\\Internal\\ConfigHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\FormRequestSafeDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentCollectionMapDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\ConfigCollectionRule}, {class: Illuminate\\Filesystem\\Filesystem, autowired: self}, migrationsParser: {class: PHPStan\\Parser\\CachedParser, arguments: {originalParser: @currentPhpVersionSimpleDirectParser, cachedNodesByStringCountMax: %cache.nodesByStringCountMax%}, autowired: false}, {class: Carbon\\PHPStan\\MacroExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}}}',
  'analysedPaths' => 
  array (
    0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app',
    1 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\bootstrap\\app.php',
    2 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\config',
    3 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database',
    4 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\routes',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    'C:/Users/popot/Desktop/Delovna_Praksa/backend/hosting-app/composer.lock' => 'e9f90508b32421c1a688cbf796f3580cfe9b3e9de4f807f4d0666c4686ce301a',
  ),
  'composerInstalled' => 
  array (
    'C:/Users/popot/Desktop/Delovna_Praksa/backend/hosting-app/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'bacon/bacon-qr-code' => 
        array (
          'pretty_version' => 'v3.1.1',
          'version' => '3.1.1.0',
          'reference' => '4da2233e72eeecd9be3b62e0dc2cc9ed8e2e31c2',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../bacon/bacon-qr-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'brianium/paratest' => 
        array (
          'pretty_version' => 'v7.24.0',
          'version' => '7.24.0.0',
          'reference' => 'c63bfd148355e6aeb9e22697bae6c0fee2dfe96c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../brianium/paratest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'brick/math' => 
        array (
          'pretty_version' => '0.18.0',
          'version' => '0.18.0.0',
          'reference' => '82944324d1c1bdb2c2618e89978d4e2ad78d69ad',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../brick/math',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'carbonphp/carbon-doctrine-types' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '18ba5ddfec8976260ead6e866180bd5d2f71aa1d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../carbonphp/carbon-doctrine-types',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'dasprid/enum' => 
        array (
          'pretty_version' => '1.0.7',
          'version' => '1.0.7.0',
          'reference' => 'b5874fa9ed0043116c72162ec7f4fb50e02e7cce',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../dasprid/enum',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.3',
          'version' => '3.0.3.0',
          'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/deprecations' => 
        array (
          'pretty_version' => '1.1.6',
          'version' => '1.1.6.0',
          'reference' => 'd4fe3e6fd9bb9e72557a19674f44d8ac7db4c6ca',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../doctrine/deprecations',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '6d6c96277ea252fc1304627204c3d5e6e15faa3b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../doctrine/inflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => 'd61a8a9604ec1f8c3d150d09db6ce98b32675013',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => 'd42c8731f0624ad6bdc8d3e5e9a4524f68801cfa',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.24.1',
          'version' => '1.24.1.0',
          'reference' => 'e0ee18eb1e6dc3cda3ce9fd97e5a0689a88a64b5',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fidry/cpu-core-counter' => 
        array (
          'pretty_version' => '1.3.0',
          'version' => '1.3.0.0',
          'reference' => 'db9508f7b1474469d9d3c53b86f817e344732678',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../fidry/cpu-core-counter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.18.4',
          'version' => '2.18.4.0',
          'reference' => 'd2102955e48b9fd9ab24280a7ad12ed552752c4d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.4.0',
          'version' => '1.4.0.0',
          'reference' => '38aaa6c3fd4c157ffe2a4d10aa8b9b16ba8de379',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.4',
          'version' => '1.1.4.0',
          'reference' => 'e01f4a821471308ba86aa202fed6698b6b695e3b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.15.3',
          'version' => '7.15.3.0',
          'reference' => 'ae311b8f045ea93ce7b1c9cdb7cec06c53f944bc',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.5.2',
          'version' => '2.5.2.0',
          'reference' => '2823687acff28b2dbe67b2508a6b300e2c3fa4ce',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.13.0',
          'version' => '2.13.0.0',
          'reference' => 'dad89620b7a6edb60c15858442eb2e408b45d8f4',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' => 
        array (
          'pretty_version' => 'v1.0.10',
          'version' => '1.0.10.0',
          'reference' => 'f6c24c21f42b990e9a58912b332d0874df6ba839',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../guzzlehttp/uri-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v3.0.0',
          'version' => '3.0.0.0',
          'reference' => 'b61cd040da1a4925bc90a51c074f5297e7c0fa52',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'iamcal/sql-parser' => 
        array (
          'pretty_version' => 'v0.7',
          'version' => '0.7.0.0',
          'reference' => '610392f38de49a44dab08dc1659960a29874c4b8',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../iamcal/sql-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'illuminate/auth' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/concurrency' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/image' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/json-schema' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/process' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/reflection' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.25.0',
          ),
        ),
        'inertiajs/inertia-laravel' => 
        array (
          'pretty_version' => 'v3.3.1',
          'version' => '3.3.1.0',
          'reference' => '7bfd75e352938b703180574b943d81963555a0aa',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../inertiajs/inertia-laravel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'jean85/pretty-package-versions' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '4d7aa5dab42e2a76d99559706022885de0e18e1a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../jean85/pretty-package-versions',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'larastan/larastan' => 
        array (
          'pretty_version' => 'v3.10.0',
          'version' => '3.10.0.0',
          'reference' => '2970f83398154178a739609c244577267c7ee8eb',
          'type' => 'phpstan-extension',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../larastan/larastan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/agent-detector' => 
        array (
          'pretty_version' => 'v2.0.2',
          'version' => '2.0.2.0',
          'reference' => '90694b9256099591cf9e55d08c18ba7a00bf099f',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../laravel/agent-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/chisel' => 
        array (
          'pretty_version' => 'v0.1.1',
          'version' => '0.1.1.0',
          'reference' => 'c2ac11cd1c6b763b412aa26b9d95fce70a489d31',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../laravel/chisel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/fortify' => 
        array (
          'pretty_version' => 'v1.38.0',
          'version' => '1.38.0.0',
          'reference' => 'c04ca2998631e1816f2e94a78b668f3a59b3962d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../laravel/fortify',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v13.25.0',
          'version' => '13.25.0.0',
          'reference' => 'ed36fe882bd4eed4e6ff75343cbad8dbda03fdba',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/pail' => 
        array (
          'pretty_version' => 'v1.2.7',
          'version' => '1.2.7.0',
          'reference' => '2f7d27dada8effc48b8c424445a69cca7007daaa',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../laravel/pail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/pao' => 
        array (
          'pretty_version' => 'v1.1.4',
          'version' => '1.1.4.0',
          'reference' => '5aee99c8c37565e9c457c33f4d36aa363a389dc8',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../laravel/pao',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/passkeys' => 
        array (
          'pretty_version' => 'v0.2.1',
          'version' => '0.2.1.0',
          'reference' => 'a76656ada41b2b4a591f075eddae5ddc67e8ab9c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../laravel/passkeys',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/pint' => 
        array (
          'pretty_version' => 'v1.30.5',
          'version' => '1.30.5.0',
          'reference' => 'fe4148c503a0e266353d61396b79bbf7f35122df',
          'type' => 'project',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../laravel/pint',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/prompts' => 
        array (
          'pretty_version' => 'v0.3.22',
          'version' => '0.3.22.0',
          'reference' => '02b89b39e8972a998db4d5d4ad4719239dd4aee4',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../laravel/prompts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/sail' => 
        array (
          'pretty_version' => 'v1.66.0',
          'version' => '1.66.0.0',
          'reference' => 'ebf286104306c50c8fd060cbc57de35b9dffa779',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../laravel/sail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v2.0.15',
          'version' => '2.0.15.0',
          'reference' => 'dccd8bcb851bb03fcc005df650b708b57cc52661',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/tinker' => 
        array (
          'pretty_version' => 'v3.0.2',
          'version' => '3.0.2.0',
          'reference' => '4faba77764bd33411735936acdf30446d058c78b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../laravel/tinker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/wayfinder' => 
        array (
          'pretty_version' => 'v0.1.21',
          'version' => '0.1.21.0',
          'reference' => 'a85a996cea189f59cac14854f8b13319a29007f3',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../laravel/wayfinder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.10.0',
          'version' => '2.10.0.0',
          'reference' => 'd2d1aa8b35e072966c89bc0c66cf926e56767dc4',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../league/commonmark',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/config' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../league/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.35.2',
          'version' => '3.35.2.0',
          'reference' => 'b277b5dc3d56650b68904117124e79c851e12376',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem-local' => 
        array (
          'pretty_version' => '3.31.0',
          'version' => '3.31.0.0',
          'reference' => '2f669db18a4c20c755c2bb7d3a7b0b2340488079',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../league/flysystem-local',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.17.0',
          'version' => '1.17.0.0',
          'reference' => 'f5f47eff7c48ed1003069a2ca67f316fb4021c76',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri' => 
        array (
          'pretty_version' => '7.8.1',
          'version' => '7.8.1.0',
          'reference' => '08cf38e3924d4f56238125547b5720496fac8fd4',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../league/uri',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri-interfaces' => 
        array (
          'pretty_version' => '7.8.1',
          'version' => '7.8.1.0',
          'reference' => '85d5c77c5d6d3af6c54db4a78246364908f3c928',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../league/uri-interfaces',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.6.13',
          'version' => '1.6.13.0',
          'reference' => '9cb54414cdcd2ec5ca292e7ba19dba3a3444885d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '3.10.0',
          'version' => '3.10.0.0',
          'reference' => 'b321dd6749f0bf7189444158a3ce785cc16d69b0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mtdowling/cron-expression' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '^1.0',
          ),
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.14.0',
          'version' => '1.14.0.0',
          'reference' => '8680aa248f8e07bc8fb43f56f0f5fc77a0c96aae',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '3.13.2',
          'version' => '3.13.2.0',
          'reference' => 'a1c54919f5fff9800cd03c32bd01defd5a4061cb',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.3.5',
          'version' => '1.3.5.0',
          'reference' => 'f0ab1a3cda782dbc5da270d28545236aa80c4002',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v4.1.5',
          'version' => '4.1.5.0',
          'reference' => 'b043439dbdf954e6c28b5ea7e34b0100f83165e0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.8.0',
          'version' => '5.8.0.0',
          'reference' => '044a6a392ff8ad0d61f14370a5fbbd0a0107152f',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v8.9.5',
          'version' => '8.9.5.0',
          'reference' => 'fb53eacd509a1d303858e2d20cfebf2d630254ec',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => '712a31b768f5daea284c2169a7d227031001b9a8',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'paragonie/constant_time_encoding' => 
        array (
          'pretty_version' => 'v3.1.3',
          'version' => '3.1.3.0',
          'reference' => 'd5b01a39b3415c2cd581d3bd3a3575c1ebbd8e77',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../paragonie/constant_time_encoding',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'pestphp/pest' => 
        array (
          'pretty_version' => 'v5.1.1',
          'version' => '5.1.1.0',
          'reference' => '208f447a10fc416397edf00a5fc6380aa284d393',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../pestphp/pest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin' => 
        array (
          'pretty_version' => 'v5.0.0',
          'version' => '5.0.0.0',
          'reference' => '87283f41aafa2561b7618be53eab00f2d06f4140',
          'type' => 'composer-plugin',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../pestphp/pest-plugin',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-arch' => 
        array (
          'pretty_version' => 'v5.0.0',
          'version' => '5.0.0.0',
          'reference' => '244465d5dc9ea9fb5ac5c9badb7eb47d1594e4c1',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../pestphp/pest-plugin-arch',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-laravel' => 
        array (
          'pretty_version' => 'v5.0.1',
          'version' => '5.0.1.0',
          'reference' => 'd1564646e3198f1b607e64a36501d6edff7d104e',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../pestphp/pest-plugin-laravel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-mutate' => 
        array (
          'pretty_version' => 'v5.0.2',
          'version' => '5.0.2.0',
          'reference' => 'd0c87110416b699413cc073b8dcc92e440d81931',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../pestphp/pest-plugin-mutate',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-profanity' => 
        array (
          'pretty_version' => 'v5.0.0',
          'version' => '5.0.0.0',
          'reference' => '3dedf9ea6e2876b5b31f7733d3eacbd86f4653b9',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../pestphp/pest-plugin-profanity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/reflection-common' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../phpdocumentor/reflection-common',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpdocumentor/reflection-docblock' => 
        array (
          'pretty_version' => '6.0.3',
          'version' => '6.0.3.0',
          'reference' => '7bae67520aa9f5ecc506d646810bd40d9da54582',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../phpdocumentor/reflection-docblock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpdocumentor/type-resolver' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => '327a05bbee54120d4786a0dc67aad30226ad4cf9',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../phpdocumentor/type-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.5',
          'version' => '1.9.5.0',
          'reference' => '75365b91986c2405cf5e1e012c5595cd487a98be',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpdoc-parser' => 
        array (
          'pretty_version' => '2.3.3',
          'version' => '2.3.3.0',
          'reference' => 'fb19eedd2bb67ff8cf7a5502ad329e701d6398a3',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../phpstan/phpdoc-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.2.8',
          'version' => '2.2.8.0',
          'reference' => 'e285254e60f33c21902efef4a926ca0987c06804',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '14.3.0',
          'version' => '14.3.0.0',
          'reference' => '060a5c93e81afb01e97dbe8930a5d0c9bd46e54e',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '7.0.1',
          'version' => '7.0.1.0',
          'reference' => '3ccaa29123548190af12fee7af078dcd7f3ddfab',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '7.0.0',
          'version' => '7.0.0.0',
          'reference' => '42e5c5cae0c65df12d1b1a3ab52bf3f50f244d88',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '6.0.0',
          'version' => '6.0.0.0',
          'reference' => 'a47af19f93f76aa3368303d752aa5272ca3299f4',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '9.0.0',
          'version' => '9.0.0.0',
          'reference' => 'a0e12065831f6ab0d83120dc61513eb8d9a966f6',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '13.3.0',
          'version' => '13.3.0.0',
          'reference' => '346fcba6ce7ab89bb1b0675feac6bc29c0f7711b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pragmarx/google2fa' => 
        array (
          'pretty_version' => 'v9.1.0',
          'version' => '9.1.0.0',
          'reference' => 'f00bc788c555adfb6765c437ff3538e59cd88af1',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../pragmarx/google2fa',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../psr/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1 || 2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0 || 2.0 || 3.0',
            1 => '1.0|2.0|3.0',
            2 => '3.0.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../psr/simple-cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0 || 2.0 || 3.0',
          ),
        ),
        'psy/psysh' => 
        array (
          'pretty_version' => 'v0.12.24',
          'version' => '0.12.24.0',
          'reference' => 'ca0fdcf8a7617afa3adfdf1b5fef573dffb69ca1',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../psy/psysh',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '344572933ad0181accbf4ba763e85a0306a8c5e2',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.9.3',
          'version' => '4.9.3.0',
          'reference' => '1df15849d00943a67d677dc9cfd80795f038c9f8',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '4.9.3',
          ),
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '5.0.1',
          'version' => '5.0.1.0',
          'reference' => 'eeb759ad3146b7096fb59c3195d39e071cd409e3',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '8.4.0',
          'version' => '8.4.0.0',
          'reference' => '3b070e608146cba00fd6fd1f0ffba89e5a8897fb',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '6.0.0',
          'version' => '6.0.0.0',
          'reference' => 'c5651c795c98093480df79350cb050813fc7a2f3',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '9.0.0',
          'version' => '9.0.0.0',
          'reference' => 'a3fb6a298a265ff487a91bbea46e03cd01dbb226',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '9.3.2',
          'version' => '9.3.2.0',
          'reference' => '6c9e487c9eb706a8d258102a1c0b0a3e53e86c2e',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '8.2.1',
          'version' => '8.2.1.0',
          'reference' => '24a3b69bba4a12ab615fca9d34680c5598d9ab7a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/file-filter' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => '33a26f394330f6faa7684bb9cc73afb7727aae93',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../sebastian/file-filter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/git-state' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => '792a952e0eba55b6960a48aeceb9f371aad1f76b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../sebastian/git-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '9.0.1',
          'version' => '9.0.1.0',
          'reference' => 'ba68ba79da690cf7eddefd3ce5b78b20b9ba9945',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '5.0.2',
          'version' => '5.0.2.0',
          'reference' => 'd1b6f8fce682505dbd048977f1abedf1b8ad3ff8',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '8.1.0',
          'version' => '8.1.0.0',
          'reference' => '511064ecde82bd747e2ba2fab3dda8d977b59576',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '6.1.0',
          'version' => '6.1.0.0',
          'reference' => 'f71bbcdc4f95456b4622810bec64eb06372e25b2',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '8.0.1',
          'version' => '8.0.1.0',
          'reference' => '32dba72f2b4642d6a93db22d6c0a9280ff2e3ca0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '7.0.2',
          'version' => '7.0.2.0',
          'reference' => 'bd1df467864cb95140414059a535b2d906173fcf',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '7.0.0',
          'version' => '7.0.0.0',
          'reference' => 'ad37a5552c8e2b88572249fdc19b6da7792e021b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/once' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'spomky-labs/cbor-php' => 
        array (
          'pretty_version' => '3.3.0',
          'version' => '3.3.0.0',
          'reference' => '013d13da69cf28b1ae501887daceccc850ca1c76',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../spomky-labs/cbor-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spomky-labs/pki-framework' => 
        array (
          'pretty_version' => '1.6.0',
          'version' => '1.6.0.0',
          'reference' => '80778a25426288acd2e3a7cde2def41a3d59cddf',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../spomky-labs/pki-framework',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'staabm/side-effects-detector' => 
        array (
          'pretty_version' => '1.0.5',
          'version' => '1.0.5.0',
          'reference' => 'd8334211a140ce329c13726d4a715adbddd0a163',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../staabm/side-effects-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/clock' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => '701ef4de9705d6c32292ebee5e8044094a09fbf6',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v8.1.4',
          'version' => '8.1.4.0',
          'reference' => '68efa2ebfd9a362951eb5a8b09fd177c66ddec24',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => 'dc0e2be45c9b5588c82414f02ac574b4b986abcd',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.7.1',
          'version' => '3.7.1.0',
          'reference' => 'f3202fa1b5097b0af062dc978b32ecf63404e31d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v8.1.2',
          'version' => '8.1.2.0',
          'reference' => 'dc98404be5e8c949815e23fee1928f5de4f3f5d3',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v8.1.2',
          'version' => '8.1.2.0',
          'reference' => 'c14c05a9e6da7f5e375e6efc28952c7e7dbddffb',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.7.1',
          'version' => '3.7.1.0',
          'reference' => 'c7de7a00ffb67842132da02ea92988a39ccd9f4e',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v8.1.1',
          'version' => '8.1.1.0',
          'reference' => 'e2989e762c70f9490fa3a00a0ac0fae5aa97a531',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v8.1.4',
          'version' => '8.1.4.0',
          'reference' => '57e712b75f2d0bc8844edbdb18a81dab6f9d55c2',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v8.1.4',
          'version' => '8.1.4.0',
          'reference' => '69d81d8a5dac32a5d94e4eb063b7d97dc42c792a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v8.1.2',
          'version' => '8.1.2.0',
          'reference' => '221c7f326ace1ac2baee8331d829d5b7f04f4d53',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v8.1.4',
          'version' => '8.1.4.0',
          'reference' => '8f8ac859d369fe3d18e3837998b1c992bbee92c9',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => '141046a8f9477948ff284fa65be2095baafb94f2',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.41.0',
          'version' => '1.41.0.0',
          'reference' => 'bb899c1db0aa8127dc3afe8cda4a67eb24915f8d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => 'dc21118016c039a66235cf93d96b435ffb282412',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.38.0',
          'version' => '1.38.0.0',
          'reference' => '2d446c214bdbe5b71bde5011b060a05fece3ae6b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.38.2',
          'version' => '1.38.2.0',
          'reference' => 'd3d318bad5e7a1bfbd026009c8bfb8d8f99ae6b6',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => 'dfb55726c3a76ea3b6459fcfda1ec2d80a682411',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php84' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => 'f4e1dfaee5b74aba5964fe1fd4dfc7ba5e3085fa',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/polyfill-php84',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php85' => 
        array (
          'pretty_version' => 'v1.41.0',
          'version' => '1.41.0.0',
          'reference' => '255fab485aaa1006ed411040c42aecd7b5302d7a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/polyfill-php85',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php86' => 
        array (
          'pretty_version' => 'v1.41.0',
          'version' => '1.41.0.0',
          'reference' => '6bc356ed3d8dbfeea8f0de235e34d670704e880e',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/polyfill-php86',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-uuid' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => '26dfec253c4cf3e51b541b52ddf7e42cb0908e94',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => 'c4a9e58f235a6bf7f97ffbfedae2687353ac79e5',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/property-access' => 
        array (
          'pretty_version' => 'v8.1.4',
          'version' => '8.1.4.0',
          'reference' => '1a41232c678972b93ce499a504e19ea09dfcd0b2',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/property-access',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/property-info' => 
        array (
          'pretty_version' => 'v8.1.4',
          'version' => '8.1.4.0',
          'reference' => 'd3b1ba3e69dd9fbfff3e00416d2fc60c600c599d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/property-info',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v8.1.2',
          'version' => '8.1.2.0',
          'reference' => '1058d4e13bb81dd9a6f7565686df7e13b880cdbd',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/serializer' => 
        array (
          'pretty_version' => 'v8.1.4',
          'version' => '8.1.4.0',
          'reference' => 'ec3ae778e49a4cee5b937a779056fa23c3e834fb',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/serializer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.7.1',
          'version' => '3.7.1.0',
          'reference' => 'c0a284bab1ed8aa0417e3d69250ab437739563a0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v8.1.2',
          'version' => '8.1.2.0',
          'reference' => '286a76b7255e5cc4bf0101a0bc5388ecf1c38ccc',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v8.1.4',
          'version' => '8.1.4.0',
          'reference' => 'c0955eb4aa417a110e65c8162237b8a5c7d910bf',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.7.1',
          'version' => '3.7.1.0',
          'reference' => 'ccb206b98faccc511ebae8e5fad50f2dc0b30621',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.3|3.0',
          ),
        ),
        'symfony/type-info' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => '9f24df8a79781b9b9f030fea7dfd2f3bd1e7e7e7',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/type-info',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/uid' => 
        array (
          'pretty_version' => 'v8.1.4',
          'version' => '8.1.4.0',
          'reference' => '50e98f8bc4c3fcdaf925545a65150fb42cf0caf2',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v8.1.2',
          'version' => '8.1.2.0',
          'reference' => '865103cf742a039f34645b971fc3ace308d6c167',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v8.1.2',
          'version' => '8.1.2.0',
          'reference' => 'faabdbe998e8c5c599dceffa27aa265b185c0736',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'ta-tikoma/phpunit-architecture-test' => 
        array (
          'pretty_version' => '0.8.7',
          'version' => '0.8.7.0',
          'reference' => '1248f3f506ca9641d4f68cebcd538fa489754db8',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../ta-tikoma/phpunit-architecture-test',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '2.0.1',
          'version' => '2.0.1.0',
          'reference' => '7989e43bf381af0eac72e4f0ca5bcbfa81658be4',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tightenco/ziggy' => 
        array (
          'pretty_version' => 'v2.6.4',
          'version' => '2.6.4.0',
          'reference' => 'c32a3eaad1574df8b953281680bba89bd3217dc2',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../tightenco/ziggy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => 'f0292ccf0ec75843d65027214426b6b163b48b41',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.6.4',
          'version' => '5.6.4.0',
          'reference' => '416df702837983f8d5ff48c9c3fee4f5f57b980b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '8e1051fe39379367aecf014f41744ce7539a856f',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'web-auth/cose-lib' => 
        array (
          'pretty_version' => '4.6.0',
          'version' => '4.6.0.0',
          'reference' => '3afe04df137baf97c5c3e28c5ee6f05536405148',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../web-auth/cose-lib',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'web-auth/webauthn-lib' => 
        array (
          'pretty_version' => '5.3.5',
          'version' => '5.3.5.0',
          'reference' => '9e0986d999f4102e24ac8a598d3a80d98b56c19f',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../web-auth/webauthn-lib',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'webmozart/assert' => 
        array (
          'pretty_version' => '2.4.1',
          'version' => '2.4.1.0',
          'reference' => '2ccb7c2e821038c03a3e6e1700c570c158c55f70',
          'type' => 'library',
          'install_path' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\composer/../webmozart/assert',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\larastan\\larastan\\bootstrap.php' => '5a3eacbf63b3e41659adfee92facededf8e020a932800f93c9a8b0e67f235805',
    'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\nesbot\\carbon\\lazy\\Carbon\\UnprotectedDatePeriod.php' => 'a5aa8ee50d1b999eddced70f94f8d759d7fe0575e7d583d94ea119483a6fc6ae',
    'phar://C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\Attribute85.php' => 'cb8b31e82c61ce197871c9e8a6f122256751f2ab606dd2be90846d4fa5f8933e',
    'phar://C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionAttribute.php' => 'c0068e383717870a304781d462f7e2afe1c6f24e9133851852a2aca96b4fa26f',
    'phar://C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionIntersectionType.php' => '65fe0a8bc6fe285d8ddc8798ab5b9299920af70db5ad74596bc08df823e7c5d9',
    'phar://C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionUnionType.php' => '1e2fe940e4ba4e00d9ee6adb2af3ee1bf333e6f8afe61c61deb038886d293427',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'FFI',
    2 => 'PDO',
    3 => 'Phar',
    4 => 'Reflection',
    5 => 'SPL',
    6 => 'SimpleXML',
    7 => 'Zend OPcache',
    8 => 'bcmath',
    9 => 'bz2',
    10 => 'calendar',
    11 => 'ctype',
    12 => 'curl',
    13 => 'date',
    14 => 'dom',
    15 => 'exif',
    16 => 'fileinfo',
    17 => 'filter',
    18 => 'gd',
    19 => 'gmp',
    20 => 'hash',
    21 => 'herd',
    22 => 'iconv',
    23 => 'intl',
    24 => 'json',
    25 => 'libxml',
    26 => 'mbstring',
    27 => 'mongodb',
    28 => 'mysqli',
    29 => 'mysqlnd',
    30 => 'openssl',
    31 => 'pcre',
    32 => 'pdo_mysql',
    33 => 'pdo_pgsql',
    34 => 'pdo_sqlite',
    35 => 'pgsql',
    36 => 'random',
    37 => 'readline',
    38 => 'redis',
    39 => 'session',
    40 => 'shmop',
    41 => 'soap',
    42 => 'sockets',
    43 => 'sodium',
    44 => 'sqlite3',
    45 => 'standard',
    46 => 'tokenizer',
    47 => 'xml',
    48 => 'xmlreader',
    49 => 'xmlwriter',
    50 => 'zip',
    51 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '7',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\Admin\\AdminDashboardController::index() has no return type specified.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'line' => 20,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 20,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\Admin\\AdminDashboardController::update_subscription_status() has no return type specified.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'line' => 49,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 49,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\Admin\\AdminDashboardController::update_virtual_machine_status() has no return type specified.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'line' => 58,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 58,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\Admin\\AdminDashboardController::promote_user() has no return type specified.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'line' => 67,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 67,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\Admin\\AdminDashboardController::demote_user() has no return type specified.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'line' => 74,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 74,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\Admin\\AdminDashboardController::store_user() has no return type specified.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'line' => 83,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 83,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\Admin\\AdminDashboardController::destroy_user() has no return type specified.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'line' => 101,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 101,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\Admin\\AdminDashboardController::updateUser() has no return type specified.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'line' => 110,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 110,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\Admin\\AdminDashboardController::store_offer() has no return type specified.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'line' => 125,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 125,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\Admin\\AdminDashboardController::update_offer() has no return type specified.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'line' => 134,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 134,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\Admin\\AdminDashboardController::destroy_offer() has no return type specified.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'line' => 141,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 141,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    11 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\Admin\\AdminDashboardController::update_feature() has no return type specified.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'line' => 148,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 148,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    12 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\Admin\\AdminDashboardController::store_feature() has no return type specified.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'line' => 155,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 155,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    13 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\Admin\\AdminDashboardController::destroy_feature() has no return type specified.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'line' => 170,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 170,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    14 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\Admin\\AdminDashboardController::mark_contact_read() has no return type specified.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'line' => 177,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 177,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    15 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\Admin\\AdminDashboardController::reply_to_ticket() has no return type specified.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'line' => 184,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 184,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    16 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\Admin\\AdminDashboardController::close_ticket() has no return type specified.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'line' => 199,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 199,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    17 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\Admin\\AdminDashboardController::validateOffer() return type has no value type specified in iterable type array.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'line' => 206,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 206,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    18 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\Admin\\AdminDashboardController::validateFeature() return type has no value type specified in iterable type array.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'line' => 228,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 228,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\CheckoutController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\CheckoutController::show() has no return type specified.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\CheckoutController.php',
       'line' => 15,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\CheckoutController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 15,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\CheckoutController::store() has no return type specified.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\CheckoutController.php',
       'line' => 26,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\CheckoutController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 26,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\ContactController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\ContactController::store() has no return type specified.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\ContactController.php',
       'line' => 17,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\ContactController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 17,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Settings\\SecurityController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter $request of method App\\Http\\Controllers\\Settings\\SecurityController::edit() has invalid type App\\Http\\Requests\\Settings\\TwoFactorAuthenticationRequest.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Settings\\SecurityController.php',
       'line' => 19,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Settings\\SecurityController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 19,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'class.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to method ensureStateIsValid() on an unknown class App\\Http\\Requests\\Settings\\TwoFactorAuthenticationRequest.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Settings\\SecurityController.php',
       'line' => 27,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Settings\\SecurityController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 27,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'class.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to method user() on an unknown class App\\Http\\Requests\\Settings\\TwoFactorAuthenticationRequest.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Settings\\SecurityController.php',
       'line' => 29,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Settings\\SecurityController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 29,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'class.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\SupportTicketController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $callback of method Illuminate\\Database\\Eloquent\\Collection<int,Illuminate\\Database\\Eloquent\\Model>::map() contains unresolvable type.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\SupportTicketController.php',
       'line' => 36,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\SupportTicketController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 36,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.unresolvableType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Return type of call to method Illuminate\\Database\\Eloquent\\Collection<int,Illuminate\\Database\\Eloquent\\Model>::map() contains unresolvable type.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\SupportTicketController.php',
       'line' => 36,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\SupportTicketController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 36,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.unresolvableReturnType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$id.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\SupportTicketController.php',
       'line' => 37,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\SupportTicketController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 37,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Using nullsafe property access "?->name" on left side of ?? is unnecessary. Use -> instead.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\SupportTicketController.php',
       'line' => 38,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\SupportTicketController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 38,
       'nodeType' => 'PHPStan\\Node\\CoalesceExpressionNode',
       'identifier' => 'nullsafe.neverNull',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Using nullsafe property access "?->ip_address" on left side of ?? is unnecessary. Use -> instead.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\SupportTicketController.php',
       'line' => 39,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\SupportTicketController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 39,
       'nodeType' => 'PHPStan\\Node\\CoalesceExpressionNode',
       'identifier' => 'nullsafe.neverNull',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\SupportTicketController::store() has no return type specified.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\SupportTicketController.php',
       'line' => 55,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\SupportTicketController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 55,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method Illuminate\\Database\\Eloquent\\Model::messages().',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\SupportTicketController.php',
       'line' => 73,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\SupportTicketController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 73,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\UserDashboardController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\UserDashboardController::index() has no return type specified.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\UserDashboardController.php',
       'line' => 17,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\UserDashboardController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 17,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\UserDashboardController::toggle_power() has no return type specified.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\UserDashboardController.php',
       'line' => 108,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\UserDashboardController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 108,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$status.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\UserDashboardController.php',
       'line' => 114,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\UserDashboardController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 114,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\UserDashboardController::cancel() has no return type specified.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\UserDashboardController.php',
       'line' => 120,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\UserDashboardController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 120,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\AvailableApp.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Class App\\Models\\AvailableApp uses generic trait Illuminate\\Database\\Eloquent\\Factories\\HasFactory but does not specify its types: TFactory',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\AvailableApp.php',
       'line' => 11,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\AvailableApp.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 11,
       'nodeType' => 'PhpParser\\Node\\Stmt\\TraitUse',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\AvailableApp::virtualMachines() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany does not specify its types: TRelatedModel, TDeclaringModel, TPivotModel, TAccessor (2-4 required)',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\AvailableApp.php',
       'line' => 29,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\AvailableApp.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 29,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Contact.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Class App\\Models\\Contact uses generic trait Illuminate\\Database\\Eloquent\\Factories\\HasFactory but does not specify its types: TFactory',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Contact.php',
       'line' => 10,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Contact.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 10,
       'nodeType' => 'PhpParser\\Node\\Stmt\\TraitUse',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Dockerfile.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Class App\\Models\\Dockerfile uses generic trait Illuminate\\Database\\Eloquent\\Factories\\HasFactory but does not specify its types: TFactory',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Dockerfile.php',
       'line' => 12,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Dockerfile.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 12,
       'nodeType' => 'PhpParser\\Node\\Stmt\\TraitUse',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\Dockerfile::user() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\BelongsTo does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Dockerfile.php',
       'line' => 16,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Dockerfile.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 16,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\Dockerfile::userContainers() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\HasMany does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Dockerfile.php',
       'line' => 21,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Dockerfile.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 21,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$status.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Dockerfile.php',
       'line' => 28,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Dockerfile.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 28,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Using nullsafe property access "?->status" on left side of ?? is unnecessary. Use -> instead.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Dockerfile.php',
       'line' => 28,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Dockerfile.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 28,
       'nodeType' => 'PHPStan\\Node\\CoalesceExpressionNode',
       'identifier' => 'nullsafe.neverNull',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Features.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Class App\\Models\\Features uses generic trait Illuminate\\Database\\Eloquent\\Factories\\HasFactory but does not specify its types: TFactory',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Features.php',
       'line' => 11,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Features.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 11,
       'nodeType' => 'PhpParser\\Node\\Stmt\\TraitUse',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\Features::server_offer() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\BelongsTo does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Features.php',
       'line' => 28,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Features.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 28,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\OperatingSystem.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Class App\\Models\\OperatingSystem uses generic trait Illuminate\\Database\\Eloquent\\Factories\\HasFactory but does not specify its types: TFactory',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\OperatingSystem.php',
       'line' => 11,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\OperatingSystem.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 11,
       'nodeType' => 'PhpParser\\Node\\Stmt\\TraitUse',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\OperatingSystem::virtualMachines() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\HasMany does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\OperatingSystem.php',
       'line' => 42,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\OperatingSystem.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 42,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\ServerOffer.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Class App\\Models\\ServerOffer uses generic trait Illuminate\\Database\\Eloquent\\Factories\\HasFactory but does not specify its types: TFactory',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\ServerOffer.php',
       'line' => 12,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\ServerOffer.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 12,
       'nodeType' => 'PhpParser\\Node\\Stmt\\TraitUse',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\ServerOffer::subscriptions() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\HasMany does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\ServerOffer.php',
       'line' => 52,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\ServerOffer.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 52,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\ServerOffer::featured_offer() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\HasOne does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\ServerOffer.php',
       'line' => 57,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\ServerOffer.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 57,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Subscription.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Class App\\Models\\Subscription uses generic trait Illuminate\\Database\\Eloquent\\Factories\\HasFactory but does not specify its types: TFactory',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Subscription.php',
       'line' => 12,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Subscription.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 12,
       'nodeType' => 'PhpParser\\Node\\Stmt\\TraitUse',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method isFuture() on string.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Subscription.php',
       'line' => 38,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Subscription.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 38,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Match arm comparison between \'2_years\' and \'2_years\' is always true.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Subscription.php',
       'line' => 50,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Subscription.php',
       'traitFilePath' => NULL,
       'tip' => 'Remove remaining cases below this one and this error will disappear too.',
       'nodeLine' => 46,
       'nodeType' => 'PHPStan\\Node\\MatchExpressionNode',
       'identifier' => 'match.alwaysTrue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\Subscription::user() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\BelongsTo does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Subscription.php',
       'line' => 58,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Subscription.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 58,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\Subscription::serverOffer() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\BelongsTo does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Subscription.php',
       'line' => 66,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Subscription.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 66,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\Subscription::virtualMachine() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\HasOne does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Subscription.php',
       'line' => 74,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Subscription.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 74,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Ticket.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Class App\\Models\\Ticket uses generic trait Illuminate\\Database\\Eloquent\\Factories\\HasFactory but does not specify its types: TFactory',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Ticket.php',
       'line' => 14,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Ticket.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 14,
       'nodeType' => 'PhpParser\\Node\\Stmt\\TraitUse',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\Ticket::user() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\BelongsTo does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Ticket.php',
       'line' => 35,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Ticket.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 35,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\Ticket::subscription() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\BelongsTo does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Ticket.php',
       'line' => 40,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Ticket.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 40,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\Ticket::messages() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\HasMany does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Ticket.php',
       'line' => 48,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Ticket.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 48,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\Ticket::latestMessage() has no return type specified.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Ticket.php',
       'line' => 56,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Ticket.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 56,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\TicketMessage.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Class App\\Models\\TicketMessage uses generic trait Illuminate\\Database\\Eloquent\\Factories\\HasFactory but does not specify its types: TFactory',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\TicketMessage.php',
       'line' => 13,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\TicketMessage.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 13,
       'nodeType' => 'PhpParser\\Node\\Stmt\\TraitUse',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\TicketMessage::ticket() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\BelongsTo does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\TicketMessage.php',
       'line' => 24,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\TicketMessage.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 24,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\TicketMessage::user() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\BelongsTo does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\TicketMessage.php',
       'line' => 32,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\TicketMessage.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 32,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\User.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\User::subscriptions() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\HasMany does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\User.php',
       'line' => 53,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\User.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 53,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\User::tickets() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\HasMany does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\User.php',
       'line' => 58,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\User.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 58,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\User::dockerfiles() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\HasMany does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\User.php',
       'line' => 63,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\User.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 63,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\User::userContainers() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\HasMany does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\User.php',
       'line' => 68,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\User.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 68,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\UserContainer.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Class App\\Models\\UserContainer uses generic trait Illuminate\\Database\\Eloquent\\Factories\\HasFactory but does not specify its types: TFactory',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\UserContainer.php',
       'line' => 11,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\UserContainer.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 11,
       'nodeType' => 'PhpParser\\Node\\Stmt\\TraitUse',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\UserContainer::user() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\BelongsTo does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\UserContainer.php',
       'line' => 25,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\UserContainer.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 25,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\UserContainer::dockerfile() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\BelongsTo does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\UserContainer.php',
       'line' => 30,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\UserContainer.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 30,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\VirtualMachine.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Class App\\Models\\VirtualMachine uses generic trait Illuminate\\Database\\Eloquent\\Factories\\HasFactory but does not specify its types: TFactory',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\VirtualMachine.php',
       'line' => 12,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\VirtualMachine.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 12,
       'nodeType' => 'PhpParser\\Node\\Stmt\\TraitUse',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\VirtualMachine::subscription() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\BelongsTo does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\VirtualMachine.php',
       'line' => 49,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\VirtualMachine.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 49,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\VirtualMachine::operatingSystem() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\BelongsTo does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\VirtualMachine.php',
       'line' => 57,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\VirtualMachine.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 57,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\VirtualMachine::preinstalledApps() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany does not specify its types: TRelatedModel, TDeclaringModel, TPivotModel, TAccessor (2-4 required)',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\VirtualMachine.php',
       'line' => 65,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\VirtualMachine.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 65,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\DockerContainerService.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $path of method Illuminate\\Filesystem\\FilesystemAdapter::path() expects string, string|false given.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\DockerContainerService.php',
       'line' => 33,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\DockerContainerService.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 33,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$container_id.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\DockerContainerService.php',
       'line' => 87,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\DockerContainerService.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 87,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$container_id.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\DockerContainerService.php',
       'line' => 105,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\DockerContainerService.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 105,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #3 $subject of function str_replace expects array<string>|string, string|false given.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\DockerContainerService.php',
       'line' => 148,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\DockerContainerService.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 148,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Services\\DockerContainerService::runDocker() has parameter $arguments with no value type specified in iterable type array.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\DockerContainerService.php',
       'line' => 167,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\DockerContainerService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 167,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Services\\DockerContainerService::runDocker() return type has no value type specified in iterable type array.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\DockerContainerService.php',
       'line' => 167,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\DockerContainerService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 167,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $command of function proc_open expects list<string>|string, non-empty-array given.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\DockerContainerService.php',
       'line' => 175,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\DockerContainerService.php',
       'traitFilePath' => NULL,
       'tip' => 'Type #1 from the union: non-empty-array might not be a list.',
       'nodeLine' => 175,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\SubscriptionService.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Services\\SubscriptionService::create_subscription() has parameter $app_ids with no value type specified in iterable type array.',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\SubscriptionService.php',
       'line' => 17,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\SubscriptionService.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 17,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Match expression does not handle remaining value: string',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\SubscriptionService.php',
       'line' => 20,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\SubscriptionService.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 20,
       'nodeType' => 'PHPStan\\Node\\MatchExpressionNode',
       'identifier' => 'match.unhandled',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Match expression does not handle remaining value: string',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\SubscriptionService.php',
       'line' => 27,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\SubscriptionService.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 27,
       'nodeType' => 'PHPStan\\Node\\MatchExpressionNode',
       'identifier' => 'match.unhandled',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method Illuminate\\Database\\Eloquent\\Model::preinstalledApps().',
       'file' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\SubscriptionService.php',
       'line' => 74,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\SubscriptionService.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 74,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
); },
	'linesToIgnore' => array (
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Actions\\Fortify\\CreateNewUser.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\ConstantConditionInTraitCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Concerns\\PasswordValidationRules',
        2 => '\\Illuminate\\Validation\\Rules\\Password::default():17',
        3 => NULL,
      ),
      1 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Concerns\\ProfileValidationRules',
        2 => '$this->nameRules():19',
        3 => NULL,
      ),
      2 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Concerns\\ProfileValidationRules',
        2 => '$this->nameRules():20',
        3 => NULL,
      ),
      3 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Concerns\\ProfileValidationRules',
        2 => '$this->emailRules($userId):21',
        3 => NULL,
      ),
      4 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\TernaryOperatorConstantConditionRule',
        1 => 'App\\Concerns\\ProfileValidationRules',
        2 => '$userId === null:49',
        3 => NULL,
      ),
      5 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\StrictComparisonOfDifferentTypesRule',
        1 => 'App\\Concerns\\ProfileValidationRules',
        2 => '$userId === null:49',
        3 => NULL,
      ),
      6 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Concerns\\ProfileValidationRules',
        2 => '\\Illuminate\\Validation\\Rule::unique(\\App\\Models\\User::class):50',
        3 => NULL,
      ),
      7 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Concerns\\ProfileValidationRules',
        2 => '\\Illuminate\\Validation\\Rule::unique(\\App\\Models\\User::class):51',
        3 => NULL,
      ),
      8 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Concerns\\ProfileValidationRules',
        2 => '\\Illuminate\\Validation\\Rule::unique(\\App\\Models\\User::class)->ignore($userId):51',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Actions\\Fortify\\CreateNewUser',
        1 => 'passwordRules',
        2 => 'App\\Actions\\Fortify\\CreateNewUser',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\validation\\rules\\password' . "\0" . 'default',
        ),
      ),
      1 => 
      array (
        0 => 'App\\Actions\\Fortify\\CreateNewUser',
        1 => 'currentPasswordRules',
        2 => 'App\\Actions\\Fortify\\CreateNewUser',
        3 => 
        array (
        ),
      ),
      2 => 
      array (
        0 => 'App\\Actions\\Fortify\\CreateNewUser',
        1 => 'nameRules',
        2 => 'App\\Actions\\Fortify\\CreateNewUser',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Concerns\\PasswordValidationRules',
        1 => 'App\\Concerns\\ProfileValidationRules',
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Actions\\Fortify\\ResetUserPassword.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\ConstantConditionInTraitCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Concerns\\PasswordValidationRules',
        2 => '\\Illuminate\\Validation\\Rules\\Password::default():17',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Actions\\Fortify\\ResetUserPassword',
        1 => 'passwordRules',
        2 => 'App\\Actions\\Fortify\\ResetUserPassword',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\validation\\rules\\password' . "\0" . 'default',
        ),
      ),
      1 => 
      array (
        0 => 'App\\Actions\\Fortify\\ResetUserPassword',
        1 => 'currentPasswordRules',
        2 => 'App\\Actions\\Fortify\\ResetUserPassword',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Concerns\\PasswordValidationRules',
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Concerns\\PasswordValidationRules.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Concerns\\PasswordValidationRules',
        1 => 8,
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Concerns\\ProfileValidationRules.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Concerns\\ProfileValidationRules',
        1 => 9,
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 96,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 129,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 165,
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\ContactController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 27,
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Settings\\ProfileController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector' => 
    array (
      0 => 
      array (
        0 => 'Profile updated.',
        1 => 41,
      ),
    ),
    'PHPStan\\Rules\\Comparison\\FunctionCallConstantConditionCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\IfConstantConditionRule',
        1 => NULL,
        2 => '$request->user()->isDirty(\'email\'):35',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Inertia\\Inertia',
        1 => 'flash',
        2 => 41,
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Settings\\SecurityController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector' => 
    array (
      0 => 
      array (
        0 => 'Password updated.',
        1 => 45,
      ),
    ),
    'PHPStan\\Rules\\Comparison\\FunctionCallConstantConditionCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\IfConstantConditionRule',
        1 => NULL,
        2 => '\\Laravel\\Fortify\\Features::canManageTwoFactorAuthentication():26',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Inertia\\Inertia',
        1 => 'flash',
        2 => 45,
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\UserDashboardController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'abort',
        1 => 132,
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Middleware\\HandleAppearance.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\View',
        1 => 'share',
        2 => 19,
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Middleware\\HandleInertiaRequests.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\FunctionCallConstantConditionCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\TernaryOperatorConstantConditionRule',
        1 => NULL,
        2 => '$request->user():41',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Middleware\\HandleInertiaRequests',
        1 => 'version',
        2 => 'App\\Http\\Middleware\\HandleInertiaRequests',
        3 => 
        array (
          0 => 'm' . "\0" . 'inertia\\middleware' . "\0" . 'version',
        ),
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Requests\\Settings\\PasswordUpdateRequest.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\ConstantConditionInTraitCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Concerns\\PasswordValidationRules',
        2 => '\\Illuminate\\Validation\\Rules\\Password::default():17',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\Settings\\PasswordUpdateRequest',
        1 => 'passwordRules',
        2 => 'App\\Http\\Requests\\Settings\\PasswordUpdateRequest',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\validation\\rules\\password' . "\0" . 'default',
        ),
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\Settings\\PasswordUpdateRequest',
        1 => 'currentPasswordRules',
        2 => 'App\\Http\\Requests\\Settings\\PasswordUpdateRequest',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Concerns\\PasswordValidationRules',
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Requests\\Settings\\ProfileDeleteRequest.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\ConstantConditionInTraitCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Concerns\\PasswordValidationRules',
        2 => '\\Illuminate\\Validation\\Rules\\Password::default():17',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\Settings\\ProfileDeleteRequest',
        1 => 'passwordRules',
        2 => 'App\\Http\\Requests\\Settings\\ProfileDeleteRequest',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\validation\\rules\\password' . "\0" . 'default',
        ),
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\Settings\\ProfileDeleteRequest',
        1 => 'currentPasswordRules',
        2 => 'App\\Http\\Requests\\Settings\\ProfileDeleteRequest',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Concerns\\PasswordValidationRules',
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Requests\\Settings\\ProfileUpdateRequest.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\ConstantConditionInTraitCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Concerns\\ProfileValidationRules',
        2 => '$this->nameRules():19',
        3 => NULL,
      ),
      1 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Concerns\\ProfileValidationRules',
        2 => '$this->nameRules():20',
        3 => NULL,
      ),
      2 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Concerns\\ProfileValidationRules',
        2 => '$this->emailRules($userId):21',
        3 => NULL,
      ),
      3 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\TernaryOperatorConstantConditionRule',
        1 => 'App\\Concerns\\ProfileValidationRules',
        2 => '$userId === null:49',
        3 => NULL,
      ),
      4 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\StrictComparisonOfDifferentTypesRule',
        1 => 'App\\Concerns\\ProfileValidationRules',
        2 => '$userId === null:49',
        3 => NULL,
      ),
      5 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Concerns\\ProfileValidationRules',
        2 => '\\Illuminate\\Validation\\Rule::unique(\\App\\Models\\User::class):50',
        3 => NULL,
      ),
      6 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Concerns\\ProfileValidationRules',
        2 => '\\Illuminate\\Validation\\Rule::unique(\\App\\Models\\User::class):51',
        3 => NULL,
      ),
      7 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Concerns\\ProfileValidationRules',
        2 => '\\Illuminate\\Validation\\Rule::unique(\\App\\Models\\User::class)->ignore($userId):51',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\Settings\\ProfileUpdateRequest',
        1 => 'nameRules',
        2 => 'App\\Http\\Requests\\Settings\\ProfileUpdateRequest',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Concerns\\ProfileValidationRules',
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\AvailableApp.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\AvailableApp',
        1 => 'casts',
        2 => 'App\\Models\\AvailableApp',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Contact.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Dockerfile.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Features.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\Features',
        1 => 'casts',
        2 => 'App\\Models\\Features',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\OperatingSystem.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\OperatingSystem',
        1 => 'casts',
        2 => 'App\\Models\\OperatingSystem',
        3 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 'App\\Models\\OperatingSystem',
        1 => 'getFullNameAttribute',
        2 => 'App\\Models\\OperatingSystem',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\ServerOffer.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\ServerOffer',
        1 => 'casts',
        2 => 'App\\Models\\ServerOffer',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Subscription.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\FunctionCallConstantConditionCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\BooleanAndConstantConditionRule',
        1 => NULL,
        2 => '$this->ends_at->isFuture():38',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\Subscription',
        1 => 'casts',
        2 => 'App\\Models\\Subscription',
        3 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 'App\\Models\\Subscription',
        1 => 'getMonthlyEquivalentCostAttribute',
        2 => 'App\\Models\\Subscription',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Ticket.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\Ticket',
        1 => 'isClosed',
        2 => 'App\\Models\\Ticket',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\TicketMessage.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\User.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\User',
        1 => 'casts',
        2 => 'App\\Models\\User',
        3 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 'App\\Models\\User',
        1 => 'is_admin',
        2 => 'App\\Models\\User',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Notifications\\Notifiable',
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\UserContainer.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\UserContainer',
        1 => 'casts',
        2 => 'App\\Models\\UserContainer',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\VirtualMachine.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\VirtualMachine',
        1 => 'casts',
        2 => 'App\\Models\\VirtualMachine',
        3 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 'App\\Models\\VirtualMachine',
        1 => 'isRunning',
        2 => 'App\\Models\\VirtualMachine',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Providers\\AppServiceProvider.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\FunctionCallConstantConditionCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\IfConstantConditionRule',
        1 => NULL,
        2 => 'app()->runningInConsole():31',
        3 => NULL,
      ),
      1 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\TernaryOperatorConstantConditionRule',
        1 => NULL,
        2 => 'app()->isProduction():61',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\DevCommands',
        1 => 'register',
        2 => 35,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Foundation\\DevCommands',
        1 => 'register',
        2 => 39,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Gate',
        1 => 'define',
        2 => 45,
      ),
      3 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Date',
        1 => 'use',
        2 => 55,
      ),
      4 => 
      array (
        0 => 'Illuminate\\Validation\\Rules\\Password',
        1 => 'defaults',
        2 => 61,
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Providers\\FortifyServiceProvider.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\RateLimiter',
        1 => 'for',
        2 => 80,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\RateLimiter',
        1 => 'for',
        2 => 84,
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\DockerContainerService.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\FunctionCallConstantConditionCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\IfConstantConditionRule',
        1 => NULL,
        2 => '\\App\\Models\\UserContainer::where(\'host_port\', $port)->exists():121',
        3 => NULL,
      ),
      1 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\IfConstantConditionRule',
        1 => NULL,
        2 => 'is_resource($socket):127',
        3 => NULL,
      ),
      2 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\BooleanOrConstantConditionRule',
        1 => NULL,
        2 => 'str_starts_with($normalized, \'/\'):150',
        3 => NULL,
      ),
      3 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\BooleanOrConstantConditionRule',
        1 => NULL,
        2 => 'str_contains($normalized, \'../\'):150',
        3 => NULL,
      ),
      4 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\BooleanOrConstantConditionRule',
        1 => NULL,
        2 => 'preg_match(\'/^[A-Za-z]:/\', $normalized):150',
        3 => NULL,
      ),
      5 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\BooleanNotConstantConditionRule',
        1 => NULL,
        2 => '$zip->extractTo($contextPath):159',
        3 => NULL,
      ),
      6 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\BooleanNotConstantConditionRule',
        1 => NULL,
        2 => 'is_resource($process):177',
        3 => NULL,
      ),
      7 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\TernaryOperatorConstantConditionRule',
        1 => NULL,
        2 => 'file_get_contents($outputPath):183',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'App\\Services\\DockerContainerService',
        ),
        1 => 'runDocker',
        2 => 106,
      ),
      1 => 
      array (
        0 => 
        array (
          0 => 'App\\Services\\DockerContainerService',
        ),
        1 => 'runDocker',
        2 => 111,
      ),
      2 => 
      array (
        0 => 
        array (
          0 => 'ZipArchive',
        ),
        1 => 'close',
        2 => 163,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\File',
        1 => 'deleteDirectory',
        2 => 80,
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\SubscriptionService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Connection',
        1 => 'transaction',
        2 => 71,
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\bootstrap\\app.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\FunctionCallConstantConditionCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\BooleanOrConstantConditionRule',
        1 => NULL,
        2 => '$request->is(\'api/*\'):28',
        3 => NULL,
      ),
      1 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\BooleanOrConstantConditionRule',
        1 => NULL,
        2 => '$request->expectsJson():28',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\Methods\\NamedArgumentParameterMethodCallsCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\Configuration\\ApplicationBuilder',
        1 => 'withRouting',
        2 => 'web',
        3 => 13,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Foundation\\Configuration\\ApplicationBuilder',
        1 => 'withRouting',
        2 => 'commands',
        3 => 14,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Foundation\\Configuration\\ApplicationBuilder',
        1 => 'withRouting',
        2 => 'health',
        3 => 15,
      ),
      3 => 
      array (
        0 => 'Illuminate\\Foundation\\Configuration\\Middleware',
        1 => 'encryptCookies',
        2 => 'except',
        3 => 18,
      ),
      4 => 
      array (
        0 => 'Illuminate\\Foundation\\Configuration\\Middleware',
        1 => 'web',
        2 => 'append',
        3 => 20,
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\config\\database.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\FunctionCallConstantConditionCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\TernaryOperatorConstantConditionRule',
        1 => NULL,
        2 => '\\extension_loaded(\'pdo_mysql\'):62',
        3 => NULL,
      ),
      1 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\TernaryOperatorConstantConditionRule',
        1 => NULL,
        2 => '\\extension_loaded(\'pdo_mysql\'):82',
        3 => NULL,
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\seeders\\DatabaseSeeder.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 20,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 31,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 32,
      ),
      3 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 33,
      ),
      4 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 36,
      ),
      5 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 37,
      ),
      6 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 38,
      ),
      7 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 55,
      ),
      8 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 130,
      ),
      9 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 138,
      ),
      10 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 146,
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\seeders\\FeaturesSeeder.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 91,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 99,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 107,
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\routes\\settings.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'redirect',
        2 => 9,
      ),
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\routes\\web.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'post',
        2 => 18,
      ),
    ),
  ),
); },
	'dependencies' => array (
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Actions\\Fortify\\CreateNewUser.php' => 
  array (
    'fileHash' => 'caaaa98a8867c44ddaa45a1f58fd388f3b46f781d22cd9f8af67e292d3b82e60',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Providers\\FortifyServiceProvider.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Actions\\Fortify\\ResetUserPassword.php' => 
  array (
    'fileHash' => '8ec7f8a74a7f30b729bf77578d1b6a9add3c48643c92d584f7bb69e5b81c0996',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Providers\\FortifyServiceProvider.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Concerns\\PasswordValidationRules.php' => 
  array (
    'fileHash' => 'bc156c8d3556c45784ff6a319d02d7fb52ba2678ac4e4d6bf17d04861c4ebef7',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Actions\\Fortify\\CreateNewUser.php',
      1 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Actions\\Fortify\\ResetUserPassword.php',
      2 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Settings\\ProfileController.php',
      3 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Settings\\SecurityController.php',
      4 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Requests\\Settings\\PasswordUpdateRequest.php',
      5 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Requests\\Settings\\ProfileDeleteRequest.php',
      6 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Providers\\FortifyServiceProvider.php',
    ),
    'usedTraitDependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Actions\\Fortify\\CreateNewUser.php',
      1 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Actions\\Fortify\\ResetUserPassword.php',
      2 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Requests\\Settings\\PasswordUpdateRequest.php',
      3 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Requests\\Settings\\ProfileDeleteRequest.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Concerns\\ProfileValidationRules.php' => 
  array (
    'fileHash' => '9992586543ff46b6586d11a97de1754bcf4332e81f0cb6e0575e5de93628abd6',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Actions\\Fortify\\CreateNewUser.php',
      1 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Settings\\ProfileController.php',
      2 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Requests\\Settings\\ProfileUpdateRequest.php',
      3 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Providers\\FortifyServiceProvider.php',
    ),
    'usedTraitDependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Actions\\Fortify\\CreateNewUser.php',
      1 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Requests\\Settings\\ProfileUpdateRequest.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php' => 
  array (
    'fileHash' => '779652313f548d6890430e6aa58708aba378497ed1e94e70f07b60b5ee8f823c',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\routes\\web.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\CatalogController.php' => 
  array (
    'fileHash' => 'd478920ef5d89b94004508fa2517726679422053d14bc91e61ba3ab37a23dfa6',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\routes\\web.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\CheckoutController.php' => 
  array (
    'fileHash' => '6c8dafd5b6023b4ff91a261494604848382f8d4c4744741267f63c6b1c5dd0d1',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\routes\\web.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\ContactController.php' => 
  array (
    'fileHash' => '805528be32cfcaf60c2a497eb5e1cc9dbad2f35b7804a51a9a7f2a27b6b6c5d6',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\routes\\web.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Controller.php' => 
  array (
    'fileHash' => '25d1c1ef8e6cc8a376553faacfba2b07d9dfaee9bdbb84f14f77517580e9deb1',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
      1 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\CatalogController.php',
      2 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\CheckoutController.php',
      3 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\ContactController.php',
      4 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\RegisteredUserController.php',
      5 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Settings\\ProfileController.php',
      6 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Settings\\SecurityController.php',
      7 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\SupportTicketController.php',
      8 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\UserDashboardController.php',
      9 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\routes\\settings.php',
      10 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\routes\\web.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\RegisteredUserController.php' => 
  array (
    'fileHash' => 'c93402f9fa3a4ceec85a6007fb00520472c7dcda350fcc4cbd7a490555ba4087',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\routes\\web.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Settings\\ProfileController.php' => 
  array (
    'fileHash' => '8cb12604ca4f35c35bb9672683c9590a3e3b520bd7e89cbeeaa6c27e7e931708',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\routes\\settings.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Settings\\SecurityController.php' => 
  array (
    'fileHash' => '1d1c34539702c352839cb820e59b331cbc5c4137958c2f13b7d3d89d4b0d3bd3',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\routes\\settings.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\SupportTicketController.php' => 
  array (
    'fileHash' => '4cd28c5e33a738f282868a3c30c1e249ef49d598f84d0dff3d64585af1962a86',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\routes\\web.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\UserDashboardController.php' => 
  array (
    'fileHash' => '8b95af2f254bc67b255a35e5f00553f31def341cf880f21f69136490293d09b8',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\routes\\web.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Middleware\\HandleAppearance.php' => 
  array (
    'fileHash' => '0615a413bb12e39cb1c4a6baa93dfc2877c0988bfe31732d9e9cb8ef2b0523df',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\bootstrap\\app.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Middleware\\HandleInertiaRequests.php' => 
  array (
    'fileHash' => '349aa6ebe436e0e97f2eab35b0c39d85a68fe610c89a99f82b64ae30dec0b1d1',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\bootstrap\\app.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Requests\\Settings\\PasswordUpdateRequest.php' => 
  array (
    'fileHash' => 'a32e9198f1e25363834ff12a1a7d1cc5ec0bcfda3f32cf1c1d03530315cf2bf5',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Settings\\SecurityController.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Requests\\Settings\\ProfileDeleteRequest.php' => 
  array (
    'fileHash' => 'f4d89321b0b482797c3fd5325f907ab4809b06ca3b60ffa8ea6d13540643b00e',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Settings\\ProfileController.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Requests\\Settings\\ProfileUpdateRequest.php' => 
  array (
    'fileHash' => '846e47b3ad44f7d7cea00c6c6b5744552cb894e82e8f5ed5a9a7244a5c8b2c6c',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Settings\\ProfileController.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\AvailableApp.php' => 
  array (
    'fileHash' => '168657c8e0b0ec416924ada9606a77c03728e332aefbe79242b946ceb454bb40',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\CheckoutController.php',
      1 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\VirtualMachine.php',
      2 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\seeders\\DatabaseSeeder.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Contact.php' => 
  array (
    'fileHash' => 'b6103b7a60983d3e4b31551528729754b63b196fc53c8bb9d0c7933335d2850c',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
      1 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\ContactController.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Dockerfile.php' => 
  array (
    'fileHash' => '4c646262a515774afe2c638500ebafdee5e613e1c32797b2c913230d8c40de27',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\UserDashboardController.php',
      1 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\User.php',
      2 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\UserContainer.php',
      3 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\DockerContainerService.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Features.php' => 
  array (
    'fileHash' => '7fa5a95761fdfe74e38315a7544ffe18eef43750c45fc7e5d256609abcd1fa8c',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
      1 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\ServerOffer.php',
      2 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\seeders\\DatabaseSeeder.php',
      3 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\seeders\\FeaturesSeeder.php',
      4 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\routes\\web.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\OperatingSystem.php' => 
  array (
    'fileHash' => '363fa10ee6b2c8d274bdf87c3aae1e2feb8ebd528cb5b37d65877bef44197a89',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
      1 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\CheckoutController.php',
      2 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\VirtualMachine.php',
      3 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\seeders\\DatabaseSeeder.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\ServerOffer.php' => 
  array (
    'fileHash' => '02f50d8fb43af9d19abcd2fce90c212d8cfd92e8755aff4c12a7b22fe7acc6cd',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
      1 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\CatalogController.php',
      2 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\CheckoutController.php',
      3 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Features.php',
      4 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Subscription.php',
      5 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\SubscriptionService.php',
      6 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\seeders\\DatabaseSeeder.php',
      7 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\seeders\\FeaturesSeeder.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Subscription.php' => 
  array (
    'fileHash' => '1979ee2b56c60a0780320f840aef3ace206d357b1209f6e1a44cf96ac413e2bd',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
      1 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\CheckoutController.php',
      2 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\UserDashboardController.php',
      3 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\ServerOffer.php',
      4 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Ticket.php',
      5 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\User.php',
      6 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\VirtualMachine.php',
      7 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\SubscriptionService.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Ticket.php' => 
  array (
    'fileHash' => 'a4062cb93c65fb99e14b7367154eb0a288b032f13f707214e3923f0e056ca175',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
      1 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\SupportTicketController.php',
      2 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\TicketMessage.php',
      3 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\User.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\TicketMessage.php' => 
  array (
    'fileHash' => 'd7539c0a8819d873d3e979b32dfa0cddb674c40ed8311e8cc43b211f1ca78853',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Ticket.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\User.php' => 
  array (
    'fileHash' => '3e289979547004c4ba00b0ec43cba316089a94ec1f70303cde0d86287a170c96',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Actions\\Fortify\\CreateNewUser.php',
      1 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Actions\\Fortify\\ResetUserPassword.php',
      2 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
      3 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\CheckoutController.php',
      4 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\RegisteredUserController.php',
      5 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Settings\\ProfileController.php',
      6 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Settings\\SecurityController.php',
      7 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\SupportTicketController.php',
      8 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\UserDashboardController.php',
      9 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Middleware\\HandleInertiaRequests.php',
      10 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Requests\\Settings\\ProfileUpdateRequest.php',
      11 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Dockerfile.php',
      12 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Subscription.php',
      13 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Ticket.php',
      14 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\TicketMessage.php',
      15 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\UserContainer.php',
      16 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Providers\\AppServiceProvider.php',
      17 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\DockerContainerService.php',
      18 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\SubscriptionService.php',
      19 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\config\\auth.php',
      20 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\factories\\UserFactory.php',
      21 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\seeders\\DatabaseSeeder.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\UserContainer.php' => 
  array (
    'fileHash' => 'de5d61ce18f1517349f05e73a57bcb413755030702bfdd9725d88b09967be120',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Dockerfile.php',
      1 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\User.php',
      2 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\DockerContainerService.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\VirtualMachine.php' => 
  array (
    'fileHash' => '53d7ce5c27d4ca7e1bc9ab89eae1a32cc0b9b07c7d2fa5ef5e891c7b9e651a96',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php',
      1 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\AvailableApp.php',
      2 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\OperatingSystem.php',
      3 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Subscription.php',
      4 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\SubscriptionService.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Providers\\AppServiceProvider.php' => 
  array (
    'fileHash' => '743e53553a187ccc5ceab57c6a5d5f2cfb43ae28bcda1fbc5f6e4f8b4c7b1461',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Providers\\FortifyServiceProvider.php' => 
  array (
    'fileHash' => 'bf4e96d821a93723375a3905ee5590f2b9aed7720e6fc2d2429899385b7a626d',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\DockerContainerService.php' => 
  array (
    'fileHash' => '080c52bf7511d439de222b07acbca76b69b0cecb2e4ae9c86e674d6974d4849c',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\UserDashboardController.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\SubscriptionService.php' => 
  array (
    'fileHash' => 'a1955fe3fd82282c9e26244454616b834dc784a061fff739227cbe0af5a417ae',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\CheckoutController.php',
      1 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\UserDashboardController.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\bootstrap\\app.php' => 
  array (
    'fileHash' => 'ec5a1c3f8ae9b836138a16d9cdb0844d0e077eb41f94ed7d29cd1303fd1a31c2',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\config\\app.php' => 
  array (
    'fileHash' => 'eacf313dcf76c1ca917065784eeac291e0cfabae8e52e19306103b2bab0ca583',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\config\\auth.php' => 
  array (
    'fileHash' => 'c7e204e9785c9f596d66fb884b493f658f2327f157646bdb4088efd6b3a7773f',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\config\\cache.php' => 
  array (
    'fileHash' => 'ee4ad2bba1edfcff52e9599f37371f2370d0b167cc226ce72d46cdf6edf2dc55',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\config\\database.php' => 
  array (
    'fileHash' => '02cd62f589b43d33f9ceac740705dac1dec9740eb2bb9e6e202d4b66a15244cf',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\config\\filesystems.php' => 
  array (
    'fileHash' => '7e51d9aed3ee11bd8e15b6cdda38d02eebb378166cbe7c9f23980e1e6e3964b5',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\config\\fortify.php' => 
  array (
    'fileHash' => '50b0e6b3e10bc8e2994cbda74db9067272bf05f14198f49de99c737ddb8a6e9f',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\config\\inertia.php' => 
  array (
    'fileHash' => '45994a9035e8e10d2fbb82f9fc18756cfb1ba403c9597d334122181b6b29839b',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\config\\logging.php' => 
  array (
    'fileHash' => '04b7ad582c4b433cc897e84d310475b7576519be665601a0ed925e63c7fd4f75',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\config\\mail.php' => 
  array (
    'fileHash' => 'c43ff49a31c5f32ce21eb7159f2a4b3cd2f4074eaed5838d265646dbfedd3474',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\config\\queue.php' => 
  array (
    'fileHash' => '6101774da7c8b79af46d0028f2b8b31a484c3f7eda10b76e5b27b6093ad364a4',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\config\\services.php' => 
  array (
    'fileHash' => 'b7ee786ea1adbc92db9f229f479431c94503527c47051da3862eb0e4d7db70aa',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\config\\session.php' => 
  array (
    'fileHash' => '272de4fd3ad8b806f5726a34d2a4ad11cbdbd4184fcad17143280ee2a8d4c7d6',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\factories\\UserFactory.php' => 
  array (
    'fileHash' => 'fddaf3080194aac395bc4d69a6d751ab61185a1895c642fcf453ba081bc2a84f',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\User.php',
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\migrations\\0000_create_users_table.php' => 
  array (
    'fileHash' => '5c1757970f15165dd2c76993650ce56b0ae7270d1db2dba389611c0972ecf4d2',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\migrations\\0001_create_operating_systems_table.php' => 
  array (
    'fileHash' => 'c8fba9c0f81f3600fbf966b9084bd9b886a2bdd8c69af83b06f27da242f86cfd',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\migrations\\0002_create_server_offers_table.php' => 
  array (
    'fileHash' => 'dd5f267d2839e1f89c2615076b1664457e4b13c95e575e74bbbf60bbd53cbf04',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\migrations\\0003_create_subscriptions_table.php' => 
  array (
    'fileHash' => 'a1f1945d61c8561ba2e259a4a1d43b9d2662a09ce124bc4cc5b5dd4e529ba96e',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\migrations\\0004_create_virtual_machines_table.php' => 
  array (
    'fileHash' => '470bb0cb02e0a9b98afe021cc54de739497883fb1c98063ec3027fe8e9069dc0',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\migrations\\0005_create_preinstallable_apps_table.php' => 
  array (
    'fileHash' => '8ab0551905e4b8d1218c23755ed5af3016650fb885b93503359911f50da7c5be',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\migrations\\0006_create_tickets_tables.php' => 
  array (
    'fileHash' => '2f17daf698d8cc4d9f77e433ef21cf473668eb857bb5489c4f5d4b76ddb06e83',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\migrations\\0007_create_features_table.php' => 
  array (
    'fileHash' => '1edfd7ca43cd00c7c68d835d36d644630e131094053ef6998c8f8e63108a60ea',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\migrations\\0008_create_contacts_table.php' => 
  array (
    'fileHash' => '9b869d39689f7ca5ae8eb1e949c8e94ad820f58dd65eb2f962a49c2647b35242',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\migrations\\0009_add_ticket_filters_data.php' => 
  array (
    'fileHash' => '11f4562a9956647c83989eab6d387860b49350fcb33888a4659dee7c26a1e575',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\migrations\\0010_create_dockerfiles_table.php' => 
  array (
    'fileHash' => '5b8f3c7a7528788b968435a90687800e3f19e172fd64c700776a550fee89688a',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\migrations\\0011_create_user_containers_table.php' => 
  array (
    'fileHash' => 'c35c2e3c558e7f6fb564a6c198b82b62354d6d434b8898a22b3a1eb8953eccdb',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\migrations\\0012_add_ports_to_user_containers_table.php' => 
  array (
    'fileHash' => '98c128d581af2cf443171113e84a70453e4af0350dbc1cbe07ae99d6edf84f44',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\seeders\\DatabaseSeeder.php' => 
  array (
    'fileHash' => 'f46a1d39327b86dff0bf2778755ba8442139133ccc0e35e625e0880eca31c7c4',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\seeders\\FeaturesSeeder.php' => 
  array (
    'fileHash' => 'a14d47f976e5ea2e98e93c49fcd4e6e3b72abb9cef3b9692863dd240bb4a3f2a',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\routes\\console.php' => 
  array (
    'fileHash' => '9adccc33e7dd400683e434774077c7fdb2f299c5712cedf16a43fdf56f2850fa',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\routes\\settings.php' => 
  array (
    'fileHash' => '3a0c95c781446cc6d42e95318f3b0d58e96120a741607754b28bbda79de7e7ac',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\routes\\web.php' => 
  array (
    'fileHash' => '53c28580dd2220a1a7a9da23ca681c19ae9cbe92839b1c792591f2ec61068d42',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'packageDependencies' => array (
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Concerns\\PasswordValidationRules.php' => 
  array (
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'inertiajs/inertia-laravel',
    2 => 'symfony/http-foundation',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\CheckoutController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'inertiajs/inertia-laravel',
    2 => 'symfony/http-foundation',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\ContactController.php' => 
  array (
    0 => 'inertiajs/inertia-laravel',
    1 => 'laravel/framework',
    2 => 'symfony/http-foundation',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\RegisteredUserController.php' => 
  array (
    0 => 'inertiajs/inertia-laravel',
    1 => 'laravel/framework',
    2 => 'symfony/http-foundation',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Settings\\SecurityController.php' => 
  array (
    0 => 'inertiajs/inertia-laravel',
    1 => 'laravel/framework',
    2 => 'laravel/fortify',
    3 => 'symfony/http-foundation',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Requests\\Settings\\ProfileDeleteRequest.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\AvailableApp.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\User.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\bootstrap\\app.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'inertiajs/inertia-laravel',
    2 => 'symfony/http-foundation',
    3 => 'symfony/http-kernel',
    4 => 'psr/container',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\config\\cache.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\config\\fortify.php' => 
  array (
    0 => 'laravel/fortify',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\config\\mail.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\migrations\\0002_create_server_offers_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\migrations\\0004_create_virtual_machines_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\migrations\\0007_create_features_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\routes\\console.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/console',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Actions\\Fortify\\ResetUserPassword.php' => 
  array (
    0 => 'laravel/fortify',
    1 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Concerns\\ProfileValidationRules.php' => 
  array (
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\UserDashboardController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'inertiajs/inertia-laravel',
    3 => 'league/flysystem',
    4 => 'psr/http-message',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Requests\\Settings\\PasswordUpdateRequest.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Contact.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\OperatingSystem.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Providers\\FortifyServiceProvider.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/fortify',
    2 => 'symfony/http-foundation',
    3 => 'inertiajs/inertia-laravel',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\config\\auth.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\config\\inertia.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\config\\session.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\factories\\UserFactory.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'fakerphp/faker',
    2 => 'nesbot/carbon',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\migrations\\0000_create_users_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\migrations\\0005_create_preinstallable_apps_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\migrations\\0006_create_tickets_tables.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\migrations\\0010_create_dockerfiles_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\migrations\\0012_add_ports_to_user_containers_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\routes\\web.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'inertiajs/inertia-laravel',
    2 => 'symfony/http-foundation',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Actions\\Fortify\\CreateNewUser.php' => 
  array (
    0 => 'laravel/fortify',
    1 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\CatalogController.php' => 
  array (
    0 => 'inertiajs/inertia-laravel',
    1 => 'laravel/framework',
    2 => 'symfony/http-foundation',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Controller.php' => 
  array (
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Middleware\\HandleInertiaRequests.php' => 
  array (
    0 => 'inertiajs/inertia-laravel',
    1 => 'laravel/framework',
    2 => 'symfony/http-foundation',
    3 => 'tightenco/ziggy',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Requests\\Settings\\ProfileUpdateRequest.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Dockerfile.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Subscription.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\UserContainer.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\VirtualMachine.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\config\\app.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\config\\database.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\config\\filesystems.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\migrations\\0008_create_contacts_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\migrations\\0011_create_user_containers_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\seeders\\DatabaseSeeder.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\seeders\\FeaturesSeeder.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\routes\\settings.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Settings\\ProfileController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'inertiajs/inertia-laravel',
    3 => 'nesbot/carbon',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\SupportTicketController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'inertiajs/inertia-laravel',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Middleware\\HandleAppearance.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Features.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\ServerOffer.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Ticket.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\TicketMessage.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Providers\\AppServiceProvider.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-kernel',
    2 => 'psr/container',
    3 => 'nesbot/carbon',
    4 => 'symfony/translation-contracts',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\DockerContainerService.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'league/flysystem',
    3 => 'symfony/finder',
    4 => 'psr/http-message',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\SubscriptionService.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'nesbot/carbon',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\config\\logging.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'monolog/monolog',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\config\\queue.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\config\\services.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\migrations\\0001_create_operating_systems_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\migrations\\0003_create_subscriptions_table.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\migrations\\0009_add_ticket_filters_data.php' => 
  array (
    0 => 'laravel/framework',
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Actions\\Fortify\\CreateNewUser.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Fortify\\CreateNewUser',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Laravel\\Fortify\\Contracts\\CreatesNewUsers',
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Concerns\\PasswordValidationRules',
        1 => 'App\\Concerns\\ProfileValidationRules',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */',
             'namespace' => 'App\\Actions\\Fortify',
             'uses' => 
            array (
              'passwordvalidationrules' => 'App\\Concerns\\PasswordValidationRules',
              'profilevalidationrules' => 'App\\Concerns\\ProfileValidationRules',
              'user' => 'App\\Models\\User',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
              'createsnewusers' => 'Laravel\\Fortify\\Contracts\\CreatesNewUsers',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Models\\User',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'input',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Actions\\Fortify\\ResetUserPassword.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Fortify\\ResetUserPassword',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Laravel\\Fortify\\Contracts\\ResetsUserPasswords',
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Concerns\\PasswordValidationRules',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'reset',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Validate and reset the user\'s forgotten password.
     *
     * @param  array<string, string>  $input
     */',
             'namespace' => 'App\\Actions\\Fortify',
             'uses' => 
            array (
              'passwordvalidationrules' => 'App\\Concerns\\PasswordValidationRules',
              'user' => 'App\\Models\\User',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
              'resetsuserpasswords' => 'Laravel\\Fortify\\Contracts\\ResetsUserPasswords',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'input',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Concerns\\PasswordValidationRules.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'name' => 'App\\Concerns\\PasswordValidationRules',
       'phpDoc' => NULL,
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'passwordRules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules used to validate passwords.
     *
     * @return array<int, Password|ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Concerns',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'currentPasswordRules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules used to validate the current password.
     *
     * @return array<int, Password|ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Concerns',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Concerns\\ProfileValidationRules.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'name' => 'App\\Concerns\\ProfileValidationRules',
       'phpDoc' => NULL,
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'profileRules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules used to validate user profiles.
     *
     * @return array<string, array<int, ValidationRule|array<mixed>|string>>
     */',
             'namespace' => 'App\\Concerns',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'userId',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'nameRules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules used to validate user names.
     *
     * @return array<int, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Concerns',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'emailRules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules used to validate user emails.
     *
     * @return array<int, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Concerns',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'userId',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Admin\\AdminDashboardController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update_subscription_status',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'subscription',
               'type' => 'App\\Models\\Subscription',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update_virtual_machine_status',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'virtualMachine',
               'type' => 'App\\Models\\VirtualMachine',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'promote_user',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'demote_user',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store_user',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy_user',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'updateUser',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store_offer',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update_offer',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'offer',
               'type' => 'App\\Models\\ServerOffer',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy_offer',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'offer',
               'type' => 'App\\Models\\ServerOffer',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update_feature',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'feature',
               'type' => 'App\\Models\\Features',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store_feature',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy_feature',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'feature',
               'type' => 'App\\Models\\Features',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mark_contact_read',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'contact',
               'type' => 'App\\Models\\Contact',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'reply_to_ticket',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'ticket',
               'type' => 'App\\Models\\Ticket',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        16 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'close_ticket',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'ticket',
               'type' => 'App\\Models\\Ticket',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\CatalogController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\CatalogController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display the server offer catalog page.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'serveroffer' => 'App\\Models\\ServerOffer',
              'inertia' => 'Inertia\\Inertia',
              'response' => 'Inertia\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Inertia\\Response',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\CheckoutController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\CheckoutController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'offer',
               'type' => 'App\\Models\\ServerOffer',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'offer',
               'type' => 'App\\Models\\ServerOffer',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'App\\Services\\SubscriptionService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\ContactController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\ContactController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Inertia\\Response',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Controller.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Controller',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\RegisteredUserController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\RegisteredUserController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display the registration view.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'user' => 'App\\Models\\User',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'rules' => 'Illuminate\\Validation\\Rules',
              'inertia' => 'Inertia\\Inertia',
              'response' => 'Inertia\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Inertia\\Response',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle an incoming registration request.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'user' => 'App\\Models\\User',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'rules' => 'Illuminate\\Validation\\Rules',
              'inertia' => 'Inertia\\Inertia',
              'response' => 'Inertia\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Settings\\ProfileController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Settings\\ProfileController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the user\'s profile settings page.
     */',
             'namespace' => 'App\\Http\\Controllers\\Settings',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'profiledeleterequest' => 'App\\Http\\Requests\\Settings\\ProfileDeleteRequest',
              'profileupdaterequest' => 'App\\Http\\Requests\\Settings\\ProfileUpdateRequest',
              'mustverifyemail' => 'Illuminate\\Contracts\\Auth\\MustVerifyEmail',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'inertia' => 'Inertia\\Inertia',
              'response' => 'Inertia\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Inertia\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Update the user\'s profile information.
     */',
             'namespace' => 'App\\Http\\Controllers\\Settings',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'profiledeleterequest' => 'App\\Http\\Requests\\Settings\\ProfileDeleteRequest',
              'profileupdaterequest' => 'App\\Http\\Requests\\Settings\\ProfileUpdateRequest',
              'mustverifyemail' => 'Illuminate\\Contracts\\Auth\\MustVerifyEmail',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'inertia' => 'Inertia\\Inertia',
              'response' => 'Inertia\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Settings\\ProfileUpdateRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Delete the user\'s profile.
     */',
             'namespace' => 'App\\Http\\Controllers\\Settings',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'profiledeleterequest' => 'App\\Http\\Requests\\Settings\\ProfileDeleteRequest',
              'profileupdaterequest' => 'App\\Http\\Requests\\Settings\\ProfileUpdateRequest',
              'mustverifyemail' => 'Illuminate\\Contracts\\Auth\\MustVerifyEmail',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'inertia' => 'Inertia\\Inertia',
              'response' => 'Inertia\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Settings\\ProfileDeleteRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\Settings\\SecurityController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Settings\\SecurityController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the user\'s security settings page.
     */',
             'namespace' => 'App\\Http\\Controllers\\Settings',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'passwordupdaterequest' => 'App\\Http\\Requests\\Settings\\PasswordUpdateRequest',
              'twofactorauthenticationrequest' => 'App\\Http\\Requests\\Settings\\TwoFactorAuthenticationRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
              'inertia' => 'Inertia\\Inertia',
              'response' => 'Inertia\\Response',
              'features' => 'Laravel\\Fortify\\Features',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Inertia\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Settings\\TwoFactorAuthenticationRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Update the user\'s password.
     */',
             'namespace' => 'App\\Http\\Controllers\\Settings',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'passwordupdaterequest' => 'App\\Http\\Requests\\Settings\\PasswordUpdateRequest',
              'twofactorauthenticationrequest' => 'App\\Http\\Requests\\Settings\\TwoFactorAuthenticationRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
              'inertia' => 'Inertia\\Inertia',
              'response' => 'Inertia\\Response',
              'features' => 'Laravel\\Fortify\\Features',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Settings\\PasswordUpdateRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\SupportTicketController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\SupportTicketController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Inertia\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Inertia\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Inertia\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'ticket',
               'type' => 'App\\Models\\Ticket',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Controllers\\UserDashboardController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\UserDashboardController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'App\\Services\\DockerContainerService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'storeDockerfile',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'App\\Services\\DockerContainerService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'downloadDockerfile',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'dockerfile',
               'type' => 'App\\Models\\Dockerfile',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroyDockerfile',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'dockerfile',
               'type' => 'App\\Models\\Dockerfile',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'App\\Services\\DockerContainerService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toggle_power',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'subscription',
               'type' => 'App\\Models\\Subscription',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'cancel',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'subscription',
               'type' => 'App\\Models\\Subscription',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'App\\Services\\SubscriptionService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Middleware\\HandleAppearance.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\HandleAppearance',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'closure' => 'Closure',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\Support\\Facades\\View',
              'response' => 'Symfony\\Component\\HttpFoundation\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'next',
               'type' => 'Closure',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Middleware\\HandleInertiaRequests.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\HandleInertiaRequests',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Inertia\\Middleware',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'rootView',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The root template that\'s loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     *
     * @var string
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'middleware' => 'Inertia\\Middleware',
              'ziggy' => 'Tighten\\Ziggy\\Ziggy',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'version',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'middleware' => 'Inertia\\Middleware',
              'ziggy' => 'Tighten\\Ziggy\\Ziggy',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'share',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     *
     * @return array<string, mixed>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'middleware' => 'Inertia\\Middleware',
              'ziggy' => 'Tighten\\Ziggy\\Ziggy',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Requests\\Settings\\PasswordUpdateRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Settings\\PasswordUpdateRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Concerns\\PasswordValidationRules',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests\\Settings',
             'uses' => 
            array (
              'passwordvalidationrules' => 'App\\Concerns\\PasswordValidationRules',
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Requests\\Settings\\ProfileDeleteRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Settings\\ProfileDeleteRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Concerns\\PasswordValidationRules',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests\\Settings',
             'uses' => 
            array (
              'passwordvalidationrules' => 'App\\Concerns\\PasswordValidationRules',
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Http\\Requests\\Settings\\ProfileUpdateRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Settings\\ProfileUpdateRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Concerns\\ProfileValidationRules',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests\\Settings',
             'uses' => 
            array (
              'profilevalidationrules' => 'App\\Concerns\\ProfileValidationRules',
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\AvailableApp.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\AvailableApp',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'virtualMachines',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Virtual machines that opted for this preinstalled application.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Contact.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Contact',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Dockerfile.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Dockerfile',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'guarded',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'user',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'userContainers',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getRuntimeStatusAttribute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Features.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Features',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'server_offer',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\OperatingSystem.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\OperatingSystem',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'appends',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getFullNameAttribute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display name accessor (e.g. "Ubuntu 24.04 LTS").
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'virtualMachines',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Virtual machines provisioned using this OS.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\ServerOffer.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\ServerOffer',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'subscriptions',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Active subscriptions purchased from this server offer.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'hasone' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'featured_offer',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Subscription.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Subscription',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isActive',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Check if the subscription is currently active.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasone' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getMonthlyEquivalentCostAttribute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Calculate monthly equivalent cost for user dashboard spending totals.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasone' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'float',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'user',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The user who owns this subscription.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasone' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'serverOffer',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The server offer template this subscription was purchased from.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasone' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'virtualMachine',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The simulated virtual machine provisioned for this subscription.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasone' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\Ticket.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Ticket',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isClosed',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Check if ticket is closed.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'user',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The user who opened the support ticket.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'subscription',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * All messages/replies inside this ticket thread.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'latestMessage',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the latest reply in the ticket thread.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\TicketMessage.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\TicketMessage',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'ticket',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The parent ticket thread.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'user',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The user (regular user or admin) who sent this specific message.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\User.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\User',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property Carbon|null $two_factor_confirmed_at
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */',
         'namespace' => 'App\\Models',
         'uses' => 
        array (
          'userfactory' => 'Database\\Factories\\UserFactory',
          'fillable' => 'Illuminate\\Database\\Eloquent\\Attributes\\Fillable',
          'hidden' => 'Illuminate\\Database\\Eloquent\\Attributes\\Hidden',
          'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
          'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
          'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
          'notifiable' => 'Illuminate\\Notifications\\Notifiable',
          'carbon' => 'Illuminate\\Support\\Carbon',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Auth\\User',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Notifications\\Notifiable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'userfactory' => 'Database\\Factories\\UserFactory',
              'fillable' => 'Illuminate\\Database\\Eloquent\\Attributes\\Fillable',
              'hidden' => 'Illuminate\\Database\\Eloquent\\Attributes\\Hidden',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'carbon' => 'Illuminate\\Support\\Carbon',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'is_admin',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'subscriptions',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'tickets',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'dockerfiles',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'userContainers',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Illuminate\\Database\\Eloquent\\Attributes\\Fillable',
           'args' => 
          array (
            0 => '[\'first_name\', \'last_name\', \'email\', \'living_address\', \'phone_number\', \'password\', \'role\']',
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Illuminate\\Database\\Eloquent\\Attributes\\Hidden',
           'args' => 
          array (
            0 => '[\'password\', \'remember_token\']',
          ),
        )),
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\UserContainer.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\UserContainer',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'guarded',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'user',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'dockerfile',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Models\\VirtualMachine.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\VirtualMachine',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'guarded',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hidden',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isRunning',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Check if machine is running.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'subscription',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Parent subscription that owns this provisioned instance.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'operatingSystem',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Operating system installed on this instance.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'preinstalledApps',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Optional preinstalled software applications attached to this VM.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Providers\\AppServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\AppServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'carbonimmutable' => 'Carbon\\CarbonImmutable',
              'devcommands' => 'Illuminate\\Foundation\\DevCommands',
              'date' => 'Illuminate\\Support\\Facades\\Date',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
              'user' => 'App\\Models\\User',
              'gate' => 'Illuminate\\Support\\Facades\\Gate',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'carbonimmutable' => 'Carbon\\CarbonImmutable',
              'devcommands' => 'Illuminate\\Foundation\\DevCommands',
              'date' => 'Illuminate\\Support\\Facades\\Date',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
              'user' => 'App\\Models\\User',
              'gate' => 'Illuminate\\Support\\Facades\\Gate',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configureDefaults',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Configure default behaviors for production-ready applications.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'carbonimmutable' => 'Carbon\\CarbonImmutable',
              'devcommands' => 'Illuminate\\Foundation\\DevCommands',
              'date' => 'Illuminate\\Support\\Facades\\Date',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
              'user' => 'App\\Models\\User',
              'gate' => 'Illuminate\\Support\\Facades\\Gate',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Providers\\FortifyServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\FortifyServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'createnewuser' => 'App\\Actions\\Fortify\\CreateNewUser',
              'resetuserpassword' => 'App\\Actions\\Fortify\\ResetUserPassword',
              'limit' => 'Illuminate\\Cache\\RateLimiting\\Limit',
              'request' => 'Illuminate\\Http\\Request',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'str' => 'Illuminate\\Support\\Str',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
              'inertia' => 'Inertia\\Inertia',
              'features' => 'Laravel\\Fortify\\Features',
              'fortify' => 'Laravel\\Fortify\\Fortify',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'createnewuser' => 'App\\Actions\\Fortify\\CreateNewUser',
              'resetuserpassword' => 'App\\Actions\\Fortify\\ResetUserPassword',
              'limit' => 'Illuminate\\Cache\\RateLimiting\\Limit',
              'request' => 'Illuminate\\Http\\Request',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'str' => 'Illuminate\\Support\\Str',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
              'inertia' => 'Inertia\\Inertia',
              'features' => 'Laravel\\Fortify\\Features',
              'fortify' => 'Laravel\\Fortify\\Fortify',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\DockerContainerService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\DockerContainerService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'deploy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Models\\Dockerfile',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'archive',
               'type' => 'Illuminate\\Http\\UploadedFile',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'memoryLimitMb',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'cpuLimitCores',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'containerPort',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'syncStatuses',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'dockerfile',
               'type' => 'App\\Models\\Dockerfile',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'remove',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'dockerfile',
               'type' => 'App\\Models\\Dockerfile',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\app\\Services\\SubscriptionService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\SubscriptionService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create_subscription',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle purchasing a server offer and provisioning a simulated VM.
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'serveroffer' => 'App\\Models\\ServerOffer',
              'subscription' => 'App\\Models\\Subscription',
              'virtualmachine' => 'App\\Models\\VirtualMachine',
              'str' => 'Illuminate\\Support\\Str',
              'db' => 'Illuminate\\Support\\Facades\\DB',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Models\\Subscription',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'offer',
               'type' => 'App\\Models\\ServerOffer',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'osId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'cycle',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'machineName',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'app_ids',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'cancel_subscription',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Cancel an active subscription and power off VM.
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'serveroffer' => 'App\\Models\\ServerOffer',
              'subscription' => 'App\\Models\\Subscription',
              'virtualmachine' => 'App\\Models\\VirtualMachine',
              'str' => 'Illuminate\\Support\\Str',
              'db' => 'Illuminate\\Support\\Facades\\DB',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'subscription',
               'type' => 'App\\Models\\Subscription',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\factories\\UserFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\UserFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends Factory<User>
 */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'user' => 'App\\Models\\User',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'password',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The current password being used by the factory.
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the model\'s default state.
     *
     * @return array<string, mixed>
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'unverified',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicate that the model\'s email address should be unverified.
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'withTwoFactor',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicate that the model has two-factor authentication configured.
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\seeders\\DatabaseSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\DatabaseSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Run the database seeds.
     */',
             'namespace' => 'Database\\Seeders',
             'uses' => 
            array (
              'withoutmodelevents' => 'Illuminate\\Database\\Console\\Seeds\\WithoutModelEvents',
              'seeder' => 'Illuminate\\Database\\Seeder',
              'user' => 'App\\Models\\User',
              'operatingsystem' => 'App\\Models\\OperatingSystem',
              'availableapp' => 'App\\Models\\AvailableApp',
              'serveroffer' => 'App\\Models\\ServerOffer',
              'features' => 'App\\Models\\Features',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\popot\\Desktop\\Delovna_Praksa\\backend\\hosting-app\\database\\seeders\\FeaturesSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\FeaturesSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Run the database seeds.
     */',
             'namespace' => 'Database\\Seeders',
             'uses' => 
            array (
              'withoutmodelevents' => 'Illuminate\\Database\\Console\\Seeds\\WithoutModelEvents',
              'seeder' => 'Illuminate\\Database\\Seeder',
              'features' => 'App\\Models\\Features',
              'serveroffer' => 'App\\Models\\ServerOffer',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
