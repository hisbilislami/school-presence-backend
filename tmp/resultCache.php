<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1702002711,
	'meta' => array (
  'cacheVersion' => 'v10-collectedData',
  'phpstanVersion' => '1.10.46',
  'phpVersion' => 80125,
  'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\ModelProperties\\ModelPropertyRule: {phpstan.rules.rule: %checkModelProperties%}, Larastan\\Larastan\\Rules\\ModelProperties\\ModelPropertyStaticCallRule: {phpstan.rules.rule: %checkModelProperties%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], excludePaths: {analyseAndScan: [*.blade.php], analyse: []}, mixinExcludeClasses: [Eloquent], bootstrapFiles: [/home/hisbil/Workspace/school-presence-backend/vendor/nunomaduro/larastan/bootstrap.php], checkOctaneCompatibility: false, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, viewDirectories: [], checkModelProperties: false, checkPhpDocMissingReturn: false, checkUnusedViews: false, paths: [/home/hisbil/Workspace/school-presence-backend/app], level: 5, tmpDir: /home/hisbil/Workspace/school-presence-backend/tmp, checkMissingIterableValueType: false}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule], services: [{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\Extension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Types\\RelationDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelRelationsDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationFindExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFindExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\BuilderModelFindExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionGenericStaticMethodDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionGenericStaticMethodDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\ModelProperties\\ModelPropertyRule}, {class: Larastan\\Larastan\\Rules\\ModelProperties\\ModelPropertyStaticCallRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Types\\RelationParserHelper, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @currentPhpVersionSimpleDirectParser, reflectionProvider: @reflectionProvider}}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper}, {class: Larastan\\Larastan\\Rules\\ModelProperties\\ModelPropertiesRuleHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, Larastan\\Larastan\\Properties\\Schema\\PhpMyAdminDataTypeToPhpTypeConverter, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, Larastan\\Larastan\\ReturnTypes\\AppMakeHelper, Larastan\\Larastan\\Internal\\ConsoleApplicationResolver, Larastan\\Larastan\\Internal\\ConsoleApplicationHelper, Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper, {class: Timeweb\\PHPStan\\Reflection\\EnumMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Timeweb\\PHPStan\\Rule\\EnumAlwaysUsedConstantsExtension, tags: [phpstan.constants.alwaysUsedClassConstantsExtension]}]}',
  'analysedPaths' => 
  array (
    0 => '/home/hisbil/Workspace/school-presence-backend/app',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    '/home/hisbil/Workspace/school-presence-backend/composer.lock' => '6de503cfdbb41757bb81cf2aacdd5aad95c0ac48',
  ),
  'composerInstalled' => 
  array (
    '/home/hisbil/Workspace/school-presence-backend/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'barryvdh/laravel-ide-helper' => 
        array (
          'pretty_version' => 'v2.13.0',
          'version' => '2.13.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../barryvdh/laravel-ide-helper',
          'aliases' => 
          array (
          ),
          'reference' => '81d5b223ff067a1f38e14c100997e153b837fe4a',
          'dev_requirement' => true,
        ),
        'barryvdh/reflection-docblock' => 
        array (
          'pretty_version' => 'v2.1.1',
          'version' => '2.1.1.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../barryvdh/reflection-docblock',
          'aliases' => 
          array (
          ),
          'reference' => 'e6811e927f0ecc37cc4deaa6627033150343e597',
          'dev_requirement' => true,
        ),
        'brainmaestro/composer-git-hooks' => 
        array (
          'pretty_version' => 'v3.0.0-alpha.1',
          'version' => '3.0.0.0-alpha1',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../brainmaestro/composer-git-hooks',
          'aliases' => 
          array (
          ),
          'reference' => 'd230a0060a330b8f4d8bd99f602aad4d3ad763ee',
          'dev_requirement' => true,
        ),
        'brick/math' => 
        array (
          'pretty_version' => '0.11.0',
          'version' => '0.11.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../brick/math',
          'aliases' => 
          array (
          ),
          'reference' => '0ad82ce168c82ba30d1c01ec86116ab52f589478',
          'dev_requirement' => false,
        ),
        'composer/class-map-generator' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/./class-map-generator',
          'aliases' => 
          array (
          ),
          'reference' => '953cc4ea32e0c31f2185549c7d216d7921f03da9',
          'dev_requirement' => true,
        ),
        'composer/pcre' => 
        array (
          'pretty_version' => '3.1.1',
          'version' => '3.1.1.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/./pcre',
          'aliases' => 
          array (
          ),
          'reference' => '00104306927c7a0919b4ced2aaa6782c1e61a3c9',
          'dev_requirement' => true,
        ),
        'composer/semver' => 
        array (
          'pretty_version' => '3.4.0',
          'version' => '3.4.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/./semver',
          'aliases' => 
          array (
          ),
          'reference' => '35e8d0af4486141bc745f23a29cc2091eb624a32',
          'dev_requirement' => true,
        ),
        'composer/xdebug-handler' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/./xdebug-handler',
          'aliases' => 
          array (
          ),
          'reference' => 'ced299686f41dce890debac69273b47ffe98a40c',
          'dev_requirement' => true,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
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
          'pretty_version' => 'v3.0.2',
          'version' => '3.0.2.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'reference' => 'f41715465d65213d644d3141a6a93081be5d3549',
          'dev_requirement' => false,
        ),
        'doctrine/cache' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../doctrine/cache',
          'aliases' => 
          array (
          ),
          'reference' => '1ca8f21980e770095a31456042471a57bc4c68fb',
          'dev_requirement' => true,
        ),
        'doctrine/dbal' => 
        array (
          'pretty_version' => '3.7.2',
          'version' => '3.7.2.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../doctrine/dbal',
          'aliases' => 
          array (
          ),
          'reference' => '0ac3c270590e54910715e9a1a044cc368df282b2',
          'dev_requirement' => true,
        ),
        'doctrine/deprecations' => 
        array (
          'pretty_version' => '1.1.2',
          'version' => '1.1.2.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../doctrine/deprecations',
          'aliases' => 
          array (
          ),
          'reference' => '4f2d4f2836e7ec4e7a8625e75c6aa916004db931',
          'dev_requirement' => true,
        ),
        'doctrine/event-manager' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../doctrine/event-manager',
          'aliases' => 
          array (
          ),
          'reference' => '750671534e0241a7c50ea5b43f67e23eb5c96f32',
          'dev_requirement' => true,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.0.8',
          'version' => '2.0.8.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../doctrine/inflector',
          'aliases' => 
          array (
          ),
          'reference' => 'f9301a5b2fb1216b2b08f02ba04dc45423db6bff',
          'dev_requirement' => false,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'reference' => '84a527db05647743d50373e0ec53a152f2cde568',
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.3.3',
          'version' => '3.3.3.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'reference' => 'adfb1f505deb6384dc8b39804c5065dd3c8c8c0a',
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '4.0.2',
          'version' => '4.0.2.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'reference' => 'ebaaf5be6c0286928352e054f2d5125608e5405e',
          'dev_requirement' => false,
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.23.0',
          'version' => '1.23.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'reference' => 'e3daa170d00fde61ea7719ef47bb09bb8f1d9b01',
          'dev_requirement' => true,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.15.4',
          'version' => '2.15.4.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'reference' => 'a139776fa3f5985a50b509f2a02ff0f709d2a546',
          'dev_requirement' => true,
        ),
        'friendsofphp/php-cs-fixer' => 
        array (
          'pretty_version' => 'v3.40.0',
          'version' => '3.40.0.0',
          'type' => 'application',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../friendsofphp/php-cs-fixer',
          'aliases' => 
          array (
          ),
          'reference' => '27d2b3265b5d550ec411b4319967ae7cfddfb2e0',
          'dev_requirement' => true,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.3.0',
          'version' => '1.3.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'reference' => '3d158f36e7875e2f040f37bc0573956240a5a38b',
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.2',
          'version' => '1.1.2.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'reference' => 'fbd48bce38f73f8a4ec8583362e732e4095e5862',
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.8.0',
          'version' => '7.8.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'reference' => '1110f66a6530a40fe7aea0378fe608ee2b2248f9',
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.0.1',
          'version' => '2.0.1.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'reference' => '111166291a0f8130081195ac4556a5587d7f1b5d',
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.6.1',
          'version' => '2.6.1.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'reference' => 'be45764272e8873c72dbe3d2edcfdfcc3bc9f727',
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' => 
        array (
          'pretty_version' => 'v1.0.2',
          'version' => '1.0.2.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../guzzlehttp/uri-template',
          'aliases' => 
          array (
          ),
          'reference' => '61bf437fc2197f587f6857d3ff903a24f1731b5d',
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.0.1',
          'version' => '2.0.1.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'reference' => '8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
          'dev_requirement' => true,
        ),
        'illuminate/auth' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/process' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.34.2',
          ),
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'krlove/code-generator' => 
        array (
          'pretty_version' => '1.0.1',
          'version' => '1.0.1.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../krlove/code-generator',
          'aliases' => 
          array (
          ),
          'reference' => '1ac521f5ef79a376282e3315ba6a13a83c63fb9a',
          'dev_requirement' => true,
        ),
        'krlove/eloquent-model-generator' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../krlove/eloquent-model-generator',
          'aliases' => 
          array (
          ),
          'reference' => '7d0036f86a4731d81cbefce84b6ae04ff174a47c',
          'dev_requirement' => true,
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v10.34.2',
          'version' => '10.34.2.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'reference' => 'c581caa233e380610b34cc491490bfa147a3b62b',
          'dev_requirement' => false,
        ),
        'laravel/pint' => 
        array (
          'pretty_version' => 'v1.13.6',
          'version' => '1.13.6.0',
          'type' => 'project',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../laravel/pint',
          'aliases' => 
          array (
          ),
          'reference' => '3e3d2ab01c7d8b484c18e6100ecf53639c744fa7',
          'dev_requirement' => true,
        ),
        'laravel/prompts' => 
        array (
          'pretty_version' => 'v0.1.13',
          'version' => '0.1.13.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../laravel/prompts',
          'aliases' => 
          array (
          ),
          'reference' => 'e1379d8ead15edd6cc4369c22274345982edc95a',
          'dev_requirement' => false,
        ),
        'laravel/sail' => 
        array (
          'pretty_version' => 'v1.26.2',
          'version' => '1.26.2.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../laravel/sail',
          'aliases' => 
          array (
          ),
          'reference' => 'c0177786b1cd05b687b0fa11364aeeecb42cd3d8',
          'dev_requirement' => true,
        ),
        'laravel/sanctum' => 
        array (
          'pretty_version' => 'v3.3.2',
          'version' => '3.3.2.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../laravel/sanctum',
          'aliases' => 
          array (
          ),
          'reference' => 'e1a272893bec13cf135627f7e156030b3afe1e60',
          'dev_requirement' => false,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v1.3.3',
          'version' => '1.3.3.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'reference' => '3dbf8a8e914634c48d389c1234552666b3d43754',
          'dev_requirement' => false,
        ),
        'laravel/tinker' => 
        array (
          'pretty_version' => 'v2.8.2',
          'version' => '2.8.2.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../laravel/tinker',
          'aliases' => 
          array (
          ),
          'reference' => 'b936d415b252b499e8c3b1f795cd4fc20f57e1f3',
          'dev_requirement' => false,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.4.1',
          'version' => '2.4.1.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../league/commonmark',
          'aliases' => 
          array (
          ),
          'reference' => '3669d6d5f7a47a93c08ddff335e6d945481a1dd5',
          'dev_requirement' => false,
        ),
        'league/config' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../league/config',
          'aliases' => 
          array (
          ),
          'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.21.0',
          'version' => '3.21.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'reference' => 'a326d8a2d007e4ca327a57470846e34363789258',
          'dev_requirement' => false,
        ),
        'league/flysystem-local' => 
        array (
          'pretty_version' => '3.21.0',
          'version' => '3.21.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../league/flysystem-local',
          'aliases' => 
          array (
          ),
          'reference' => '470eb1c09eaabd49ebd908ae06f23983ba3ecfe7',
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.14.0',
          'version' => '1.14.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'reference' => 'b6a5854368533df0295c5761a0253656a2e52d9e',
          'dev_requirement' => false,
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.6.6',
          'version' => '1.6.6.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'reference' => 'b8e0bb7d8c604046539c1115994632c74dcb361e',
          'dev_requirement' => true,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '3.5.0',
          'version' => '3.5.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'reference' => 'c915e2634718dbc8a4a15c61b0e62e7a44e14448',
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
          'pretty_version' => '1.11.1',
          'version' => '1.11.1.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'reference' => '7284c22080590fb39f2ffa3e9057f10a4ddd0e0c',
          'dev_requirement' => true,
        ),
        'myclabs/php-enum' => 
        array (
          'pretty_version' => '1.8.4',
          'version' => '1.8.4.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../myclabs/php-enum',
          'aliases' => 
          array (
          ),
          'reference' => 'a867478eae49c9f59ece437ae7f9506bfaa27483',
          'dev_requirement' => false,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '2.71.0',
          'version' => '2.71.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'reference' => '98276233188583f2ff845a0f992a235472d9466a',
          'dev_requirement' => false,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.2.5',
          'version' => '1.2.5.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'reference' => '0462f0166e823aad657c9224d0f849ecac1ba10a',
          'dev_requirement' => false,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v4.0.3',
          'version' => '4.0.3.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'reference' => 'a9d127dd6a203ce6d255b2e2db49759f7506e015',
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v4.17.1',
          'version' => '4.17.1.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'reference' => 'a6303e50c90c355c7eeee2c4a8b27fe8dc8fef1d',
          'dev_requirement' => false,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v7.10.0',
          'version' => '7.10.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'reference' => '49ec67fa7b002712da8526678abd651c09f375b2',
          'dev_requirement' => true,
        ),
        'nunomaduro/larastan' => 
        array (
          'pretty_version' => 'v2.7.0',
          'version' => '2.7.0.0',
          'type' => 'phpstan-extension',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../nunomaduro/larastan',
          'aliases' => 
          array (
          ),
          'reference' => 'a2610d46b9999cf558d9900ccb641962d1442f55',
          'dev_requirement' => false,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v1.15.1',
          'version' => '1.15.1.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'reference' => '8ab0b32c8caa4a2e09700ea32925441385e4a5dc',
          'dev_requirement' => false,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'reference' => '97803eca37d319dfa7826cc2437fc020857acb53',
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'dev_requirement' => true,
        ),
        'phpdocumentor/reflection-common' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../phpdocumentor/reflection-common',
          'aliases' => 
          array (
          ),
          'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
          'dev_requirement' => true,
        ),
        'phpdocumentor/type-resolver' => 
        array (
          'pretty_version' => '1.7.3',
          'version' => '1.7.3.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../phpdocumentor/type-resolver',
          'aliases' => 
          array (
          ),
          'reference' => '3219c6ee25c9ea71e3d9bbaf39c67c9ebd499419',
          'dev_requirement' => true,
        ),
        'phpmyadmin/sql-parser' => 
        array (
          'pretty_version' => '5.8.2',
          'version' => '5.8.2.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../phpmyadmin/sql-parser',
          'aliases' => 
          array (
          ),
          'reference' => 'f1720ae19abe6294cb5599594a8a57bc3c8cc287',
          'dev_requirement' => false,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.2',
          'version' => '1.9.2.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'reference' => '80735db690fe4fc5c76dfa7f9b770634285fa820',
          'dev_requirement' => false,
        ),
        'phpstan/phpdoc-parser' => 
        array (
          'pretty_version' => '1.24.4',
          'version' => '1.24.4.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../phpstan/phpdoc-parser',
          'aliases' => 
          array (
          ),
          'reference' => '6bd0c26f3786cd9b7c359675cb789e35a8e07496',
          'dev_requirement' => true,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '1.10.46',
          'version' => '1.10.46.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'reference' => '90d3d25c5b98b8068916bbf08ce42d5cb6c54e70',
          'dev_requirement' => false,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '10.1.9',
          'version' => '10.1.9.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'reference' => 'a56a9ab2f680246adcf3db43f38ddf1765774735',
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '4.1.0',
          'version' => '4.1.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'reference' => 'a95037b6d9e608ba092da1b23931e537cadc3c3c',
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '4.0.0',
          'version' => '4.0.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'reference' => 'f5e568ba02fa5ba0ddd0f618391d5a9ea50b06d7',
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'reference' => '0c7b06ff49e3d5072f057eb1fa59258bf287a748',
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '6.0.0',
          'version' => '6.0.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'reference' => 'e2a2d67966e740530f4a3343fe2e030ffdc1161d',
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '10.4.2',
          'version' => '10.4.2.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'reference' => 'cacd8b9dd224efa8eb28beb69004126c7ca1a1a1',
          'dev_requirement' => true,
        ),
        'psr/cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../psr/cache',
          'aliases' => 
          array (
          ),
          'reference' => 'aa5030cfa5405eccfdcb1083ce040c2cb8d253bf',
          'dev_requirement' => true,
        ),
        'psr/clock' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../psr/clock',
          'aliases' => 
          array (
          ),
          'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
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
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../psr/container',
          'aliases' => 
          array (
          ),
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1|2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
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
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
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
          'pretty_version' => '1.0.2',
          'version' => '1.0.2.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'reference' => 'e616d01114759c4c489f93b099585439f795fe35',
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
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
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
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../psr/log',
          'aliases' => 
          array (
          ),
          'reference' => 'fe5ea303b0887d5caefd3d431c3e61ad47037001',
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '3.0.0',
            1 => '1.0|2.0|3.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../psr/simple-cache',
          'aliases' => 
          array (
          ),
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'dev_requirement' => false,
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
          ),
        ),
        'psy/psysh' => 
        array (
          'pretty_version' => 'v0.11.22',
          'version' => '0.11.22.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../psy/psysh',
          'aliases' => 
          array (
          ),
          'reference' => '128fa1b608be651999ed9789c95e6e2a31b5802b',
          'dev_requirement' => false,
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'reference' => 'a4b48764bfbb8f3a6a4d1aeb1a35bb5e9ecac4a5',
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.7.5',
          'version' => '4.7.5.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'reference' => '5f0df49ae5ad6efb7afa69e6bfab4e5b1e080d8e',
          'dev_requirement' => false,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '4.7.5',
          ),
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'reference' => 'efdc130dbbbb8ef0b545a994fd811725c5282cae',
          'dev_requirement' => true,
        ),
        'sebastian/code-unit' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../sebastian/code-unit',
          'aliases' => 
          array (
          ),
          'reference' => 'a81fee9eef0b7a76af11d121767abc44c104e503',
          'dev_requirement' => true,
        ),
        'sebastian/code-unit-reverse-lookup' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../sebastian/code-unit-reverse-lookup',
          'aliases' => 
          array (
          ),
          'reference' => '5e3a687f7d8ae33fb362c5c0743794bbb2420a1d',
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '5.0.1',
          'version' => '5.0.1.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'reference' => '2db5010a484d53ebf536087a70b4a5423c102372',
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '3.1.0',
          'version' => '3.1.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'reference' => '68cfb347a44871f01e33ab0ef8215966432f6957',
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '5.0.3',
          'version' => '5.0.3.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'reference' => '912dc2fbe3e3c1e7873313cc801b100b6c68c87b',
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'reference' => '43c751b41d74f96cbbd4e07b7aec9675651e2951',
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '5.1.1',
          'version' => '5.1.1.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'reference' => '64f51654862e0f5e318db7e9dcc2292c63cdbddc',
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'reference' => '7ea9ead78f6d380d2a667864c132c2f7b83055e4',
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '2.0.1',
          'version' => '2.0.1.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'reference' => '649e40d279e243d985aa8fb6e74dd5bb28dc185d',
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'reference' => '202d0e344a580d7f7d04b3fafce6933e59dae906',
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'reference' => '24ed13d98130f0e7122df55d06c5c4942a577957',
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'reference' => '05909fb5bc7df4c52992396d0116aed689f93712',
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '4.0.0',
          'version' => '4.0.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'reference' => '462699a16464c3944eefc02ebdd77882bd3925bf',
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'reference' => 'c51fa83a5d8f43f1402e3f32a005e6262244ef17',
          'dev_requirement' => true,
        ),
        'spatie/backtrace' => 
        array (
          'pretty_version' => '1.5.3',
          'version' => '1.5.3.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../spatie/backtrace',
          'aliases' => 
          array (
          ),
          'reference' => '483f76a82964a0431aa836b6ed0edde0c248e3ab',
          'dev_requirement' => true,
        ),
        'spatie/flare-client-php' => 
        array (
          'pretty_version' => '1.4.3',
          'version' => '1.4.3.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../spatie/flare-client-php',
          'aliases' => 
          array (
          ),
          'reference' => '5db2fdd743c3ede33f2a5367d89ec1a7c9c1d1ec',
          'dev_requirement' => true,
        ),
        'spatie/ignition' => 
        array (
          'pretty_version' => '1.11.3',
          'version' => '1.11.3.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../spatie/ignition',
          'aliases' => 
          array (
          ),
          'reference' => '3d886de644ff7a5b42e4d27c1e1f67c8b5f00044',
          'dev_requirement' => true,
        ),
        'spatie/laravel-ignition' => 
        array (
          'pretty_version' => '2.3.1',
          'version' => '2.3.1.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../spatie/laravel-ignition',
          'aliases' => 
          array (
          ),
          'reference' => 'bf21cd15aa47fa4ec5d73bbc932005c70261efc8',
          'dev_requirement' => true,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v6.4.0',
          'version' => '6.4.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'reference' => 'cd9864b47c367450e14ab32f78fdbf98c44c26b6',
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v6.4.0',
          'version' => '6.4.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'reference' => 'd036c6c0d0b09e24a14a35f8292146a658f986e4',
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.4.0',
          'version' => '3.4.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'reference' => '7c3aff79d10325257a001fcf92d991f24fc967cf',
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v6.4.0',
          'version' => '6.4.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'reference' => 'c873490a1c97b3a0a4838afc36ff36c112d02788',
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v6.4.0',
          'version' => '6.4.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'reference' => 'd76d2632cfc2206eecb5ad2b26cd5934082941b6',
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.4.0',
          'version' => '3.4.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'reference' => 'a76aed96a42d2b521153fb382d418e30d18b59df',
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
        'symfony/filesystem' => 
        array (
          'pretty_version' => 'v6.4.0',
          'version' => '6.4.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/filesystem',
          'aliases' => 
          array (
          ),
          'reference' => '952a8cb588c3bc6ce76f6023000fb932f16a6e59',
          'dev_requirement' => true,
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v6.4.0',
          'version' => '6.4.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'reference' => '11d736e97f116ac375a81f96e662911a34cd50ce',
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v6.4.0',
          'version' => '6.4.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'reference' => '44a6d39a9cc11e154547d882d5aac1e014440771',
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v6.4.0',
          'version' => '6.4.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'reference' => '16a29c453966f29466ad34444ce97970a336f3c8',
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v6.4.0',
          'version' => '6.4.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'reference' => 'ca8dcf8892cdc5b4358ecf2528429bb5e706f7ba',
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v6.4.0',
          'version' => '6.4.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'reference' => 'ca4f58b2ef4baa8f6cecbeca2573f88cd577d205',
          'dev_requirement' => false,
        ),
        'symfony/options-resolver' => 
        array (
          'pretty_version' => 'v6.4.0',
          'version' => '6.4.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/options-resolver',
          'aliases' => 
          array (
          ),
          'reference' => '22301f0e7fdeaacc14318928612dee79be99860e',
          'dev_requirement' => true,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.28.0',
          'version' => '1.28.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'reference' => 'ea208ce43cbb04af6867b4fdddb1bdbf84cc28cb',
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.28.0',
          'version' => '1.28.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'reference' => '875e90aeea2777b6f135677f618529449334a612',
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.28.0',
          'version' => '1.28.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'reference' => 'ecaafce9f77234a6a449d29e49267ba10499116d',
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.28.0',
          'version' => '1.28.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'reference' => '8c4ad05dd0120b6a53c1ca374dca2ad0a1c4ed92',
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.28.0',
          'version' => '1.28.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'reference' => '42292d99c55abe617799667f454222c54c60e229',
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php72' => 
        array (
          'pretty_version' => 'v1.28.0',
          'version' => '1.28.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/polyfill-php72',
          'aliases' => 
          array (
          ),
          'reference' => '70f4aebd92afca2f865444d30a4d2151c13c3179',
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.28.0',
          'version' => '1.28.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'reference' => '6caa57379c4aec19c0a12a38b59b26487dcfe4b5',
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php81' => 
        array (
          'pretty_version' => 'v1.28.0',
          'version' => '1.28.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/polyfill-php81',
          'aliases' => 
          array (
          ),
          'reference' => '7581cd600fa9fd681b797d00b02f068e2f13263b',
          'dev_requirement' => true,
        ),
        'symfony/polyfill-php83' => 
        array (
          'pretty_version' => 'v1.28.0',
          'version' => '1.28.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/polyfill-php83',
          'aliases' => 
          array (
          ),
          'reference' => 'b0f46ebbeeeda3e9d2faebdfbf4b4eae9b59fa11',
          'dev_requirement' => false,
        ),
        'symfony/polyfill-uuid' => 
        array (
          'pretty_version' => 'v1.28.0',
          'version' => '1.28.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'reference' => '9c44518a5aff8da565c8a55dbe85d2769e6f630e',
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v6.4.0',
          'version' => '6.4.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'reference' => '191703b1566d97a5425dc969e4350d32b8ef17aa',
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v6.4.0',
          'version' => '6.4.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'reference' => 'ae014d60d7c8e80be5c3b644a286e91249a3e8f4',
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.4.0',
          'version' => '3.4.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'reference' => 'b3313c2dbffaf71c8de2934e2ea56ed2291a3838',
          'dev_requirement' => false,
        ),
        'symfony/stopwatch' => 
        array (
          'pretty_version' => 'v6.4.0',
          'version' => '6.4.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/stopwatch',
          'aliases' => 
          array (
          ),
          'reference' => 'fc47f1015ec80927ff64ba9094dfe8b9d48fe9f2',
          'dev_requirement' => true,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v6.4.0',
          'version' => '6.4.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'reference' => 'b45fcf399ea9c3af543a92edf7172ba21174d809',
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v6.4.0',
          'version' => '6.4.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'reference' => 'b1035dbc2a344b21f8fa8ac451c7ecec4ea45f37',
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.4.0',
          'version' => '3.4.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'reference' => 'dee0c6e5b4c07ce851b462530088e64b255ac9c5',
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
        'symfony/uid' => 
        array (
          'pretty_version' => 'v6.4.0',
          'version' => '6.4.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'reference' => '8092dd1b1a41372110d06374f99ee62f7f0b9a92',
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v6.4.0',
          'version' => '6.4.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'reference' => 'c40f7d17e91d8b407582ed51a2bbf83c52c367f6',
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v6.4.0',
          'version' => '6.4.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'reference' => '4f9237a1bb42455d609e6687d2613dde5b41a587',
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '1.2.2',
          'version' => '1.2.2.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'reference' => 'b2ad5003ca10d4ee50a12da31de12a5774ba6b96',
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => '2.2.6',
          'version' => '2.2.6.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'reference' => 'c42125b83a4fa63b187fdf29f9c93cb7733da30c',
          'dev_requirement' => false,
        ),
        'timeweb/phpstan-enum' => 
        array (
          'pretty_version' => 'v3.1.1',
          'version' => '3.1.1.0',
          'type' => 'phpstan-extension',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../timeweb/phpstan-enum',
          'aliases' => 
          array (
          ),
          'reference' => '72f54c981431039ee194ffdf46e8340fea49195a',
          'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.6.0',
          'version' => '5.6.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'reference' => '2cf9fb6054c2bb1d59d1f3817706ecdb9d2934c4',
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.0.1',
          'version' => '2.0.1.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'reference' => 'b56450eed252f6801410d810c8e1727224ae0743',
          'dev_requirement' => false,
        ),
        'webmozart/assert' => 
        array (
          'pretty_version' => '1.11.0',
          'version' => '1.11.0.0',
          'type' => 'library',
          'install_path' => '/home/hisbil/Workspace/school-presence-backend/vendor/composer/../webmozart/assert',
          'aliases' => 
          array (
          ),
          'reference' => '11cb2199493b2f8a3b53e7f19068fc6aac760991',
          'dev_requirement' => false,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    '/home/hisbil/Workspace/school-presence-backend/vendor/nunomaduro/larastan/bootstrap.php' => '7ec7406cae3f706d3c160e03d7967840a5d9f98c',
    'phar:///home/hisbil/Workspace/school-presence-backend/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php' => 'eaf9127f074e9c7ebc65043ec4050f9fed60c2bb',
    'phar:///home/hisbil/Workspace/school-presence-backend/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
    'phar:///home/hisbil/Workspace/school-presence-backend/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
    'phar:///home/hisbil/Workspace/school-presence-backend/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
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
    8 => 'calendar',
    9 => 'ctype',
    10 => 'curl',
    11 => 'date',
    12 => 'dom',
    13 => 'exif',
    14 => 'fileinfo',
    15 => 'filter',
    16 => 'ftp',
    17 => 'gd',
    18 => 'gettext',
    19 => 'gmp',
    20 => 'hash',
    21 => 'iconv',
    22 => 'igbinary',
    23 => 'intl',
    24 => 'json',
    25 => 'libxml',
    26 => 'mbstring',
    27 => 'memcache',
    28 => 'memcached',
    29 => 'msgpack',
    30 => 'openssl',
    31 => 'pcntl',
    32 => 'pcre',
    33 => 'pdo_pgsql',
    34 => 'pgsql',
    35 => 'posix',
    36 => 'readline',
    37 => 'session',
    38 => 'shmop',
    39 => 'sockets',
    40 => 'sodium',
    41 => 'standard',
    42 => 'sysvmsg',
    43 => 'sysvsem',
    44 => 'sysvshm',
    45 => 'tokenizer',
    46 => 'xml',
    47 => 'xmlreader',
    48 => 'xmlwriter',
    49 => 'xsl',
    50 => 'zip',
    51 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '5',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
  '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/MClassController.php' => 
  array (
    0 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Variable $results might not be defined.',
       'file' => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/MClassController.php',
       'line' => 68,
       'canBeIgnored' => true,
       'filePath' => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/MClassController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 68,
       'nodeType' => 'PhpParser\\Node\\Expr\\Variable',
       'identifier' => 'variable.maybeUndefined',
       'metadata' => 
      array (
        'variableName' => 'results',
        'statementDepth' => 5,
        'statementOrder' => 0,
        'depth' => 2,
        'order' => 0,
        'variables' => 
        array (
          0 => 'request',
          1 => 'this',
        ),
        'parentVariables' => 
        array (
        ),
      ),
    )),
    1 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Variable $results might not be defined.',
       'file' => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/MClassController.php',
       'line' => 109,
       'canBeIgnored' => true,
       'filePath' => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/MClassController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 109,
       'nodeType' => 'PhpParser\\Node\\Expr\\Variable',
       'identifier' => 'variable.maybeUndefined',
       'metadata' => 
      array (
        'variableName' => 'results',
        'statementDepth' => 5,
        'statementOrder' => 0,
        'depth' => 2,
        'order' => 0,
        'variables' => 
        array (
          0 => 'request',
          1 => 'this',
        ),
        'parentVariables' => 
        array (
        ),
      ),
    )),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/UserController.php' => 
  array (
    0 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc tag @param has invalid value ([boolean] remember_me): Unexpected token "[", expected type at offset 125',
       'file' => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/UserController.php',
       'line' => 25,
       'canBeIgnored' => true,
       'filePath' => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/UserController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 25,
       'nodeType' => 'PhpParser\\Node\\Stmt\\ClassMethod',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc tag @param has invalid value ([string] email): Unexpected token "[", expected type at offset 62',
       'file' => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/UserController.php',
       'line' => 25,
       'canBeIgnored' => true,
       'filePath' => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/UserController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 25,
       'nodeType' => 'PhpParser\\Node\\Stmt\\ClassMethod',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc tag @param has invalid value ([string] password): Unexpected token "[", expected type at offset 92',
       'file' => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/UserController.php',
       'line' => 25,
       'canBeIgnored' => true,
       'filePath' => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/UserController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 25,
       'nodeType' => 'PhpParser\\Node\\Stmt\\ClassMethod',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Models/MClass.php' => 
  array (
    0 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc type array of property App\\Models\\MClass::$fillable is not covariant with PHPDoc type array<string> of overridden property Illuminate\\Database\\Eloquent\\Model::$fillable.',
       'file' => '/home/hisbil/Workspace/school-presence-backend/app/Models/MClass.php',
       'line' => 46,
       'canBeIgnored' => true,
       'filePath' => '/home/hisbil/Workspace/school-presence-backend/app/Models/MClass.php',
       'traitFilePath' => NULL,
       'tip' => 'You can fix 3rd party PHPDoc types with stub files:
   <fg=cyan>https://phpstan.org/user-guide/stub-files</>',
       'nodeLine' => 46,
       'nodeType' => 'PHPStan\\Node\\ClassPropertyNode',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Models/MPerson.php' => 
  array (
    0 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc type array of property App\\Models\\MPerson::$fillable is not covariant with PHPDoc type array<string> of overridden property Illuminate\\Database\\Eloquent\\Model::$fillable.',
       'file' => '/home/hisbil/Workspace/school-presence-backend/app/Models/MPerson.php',
       'line' => 47,
       'canBeIgnored' => true,
       'filePath' => '/home/hisbil/Workspace/school-presence-backend/app/Models/MPerson.php',
       'traitFilePath' => NULL,
       'tip' => 'You can fix 3rd party PHPDoc types with stub files:
   <fg=cyan>https://phpstan.org/user-guide/stub-files</>',
       'nodeLine' => 47,
       'nodeType' => 'PHPStan\\Node\\ClassPropertyNode',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Models/MStudent.php' => 
  array (
    0 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc type array of property App\\Models\\MStudent::$fillable is not covariant with PHPDoc type array<string> of overridden property Illuminate\\Database\\Eloquent\\Model::$fillable.',
       'file' => '/home/hisbil/Workspace/school-presence-backend/app/Models/MStudent.php',
       'line' => 48,
       'canBeIgnored' => true,
       'filePath' => '/home/hisbil/Workspace/school-presence-backend/app/Models/MStudent.php',
       'traitFilePath' => NULL,
       'tip' => 'You can fix 3rd party PHPDoc types with stub files:
   <fg=cyan>https://phpstan.org/user-guide/stub-files</>',
       'nodeLine' => 48,
       'nodeType' => 'PHPStan\\Node\\ClassPropertyNode',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Models/RelPersonUser.php' => 
  array (
    0 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc type array of property App\\Models\\RelPersonUser::$fillable is not covariant with PHPDoc type array<string> of overridden property Illuminate\\Database\\Eloquent\\Model::$fillable.',
       'file' => '/home/hisbil/Workspace/school-presence-backend/app/Models/RelPersonUser.php',
       'line' => 42,
       'canBeIgnored' => true,
       'filePath' => '/home/hisbil/Workspace/school-presence-backend/app/Models/RelPersonUser.php',
       'traitFilePath' => NULL,
       'tip' => 'You can fix 3rd party PHPDoc types with stub files:
   <fg=cyan>https://phpstan.org/user-guide/stub-files</>',
       'nodeLine' => 42,
       'nodeType' => 'PHPStan\\Node\\ClassPropertyNode',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Models/User.php' => 
  array (
    0 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc type array of property App\\Models\\User::$fillable is not covariant with PHPDoc type array<string> of overridden property Illuminate\\Database\\Eloquent\\Model::$fillable.',
       'file' => '/home/hisbil/Workspace/school-presence-backend/app/Models/User.php',
       'line' => 67,
       'canBeIgnored' => true,
       'filePath' => '/home/hisbil/Workspace/school-presence-backend/app/Models/User.php',
       'traitFilePath' => NULL,
       'tip' => 'You can fix 3rd party PHPDoc types with stub files:
   <fg=cyan>https://phpstan.org/user-guide/stub-files</>',
       'nodeLine' => 67,
       'nodeType' => 'PHPStan\\Node\\ClassPropertyNode',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
  ),
); },
	'collectedDataCallback' => static function (): array { return array (
); },
	'dependencies' => array (
  '/home/hisbil/Workspace/school-presence-backend/app/Console/Kernel.php' => 
  array (
    'fileHash' => '7d926c7ff8b1b064600aea59ccd4a4f716fb7149',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Enums/Constants.php' => 
  array (
    'fileHash' => '69d6491b8be78687a44e6050627a063b2510832a',
    'dependentFiles' => 
    array (
      0 => '/home/hisbil/Workspace/school-presence-backend/app/Models/HIModel.php',
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Enums/DefaultMessages.php' => 
  array (
    'fileHash' => '581e59021dfd5948f25dc7d493d613aad9ecd648',
    'dependentFiles' => 
    array (
      0 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/Controller.php',
      1 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/MClassController.php',
      2 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/MStudentController.php',
      3 => '/home/hisbil/Workspace/school-presence-backend/app/Models/HIModel.php',
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Exceptions/Handler.php' => 
  array (
    'fileHash' => 'b4d003396f5f19ce1d92d0acc9a968336b35afeb',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Helpers/HttpResponse.php' => 
  array (
    'fileHash' => '58820be72efc2f965fb99aac1639fdd1142179fc',
    'dependentFiles' => 
    array (
      0 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/Controller.php',
      1 => '/home/hisbil/Workspace/school-presence-backend/app/Models/HIModel.php',
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Helpers/HttpStatus.php' => 
  array (
    'fileHash' => '7abc0cd6d9af1fa3ac4ccb6f0e72c91febf0db8a',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/Controller.php' => 
  array (
    'fileHash' => '2625e384476c138a9d6bb3b7411e19fc0d2413ce',
    'dependentFiles' => 
    array (
      0 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/MClassController.php',
      1 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/MStudentController.php',
      2 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/UserController.php',
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/MClassController.php' => 
  array (
    'fileHash' => '5bb72206e43a56c7a26f1c174f027270b3aee86a',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/MStudentController.php' => 
  array (
    'fileHash' => 'bafca21b1993e27abab703b1475006157af08af6',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/UserController.php' => 
  array (
    'fileHash' => 'ff61a2a14268a924d0c53a9929aaed0e5047f4f4',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Http/Kernel.php' => 
  array (
    'fileHash' => '070a4a244059d57bc8c44135451ef62fa8a0dc3b',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Http/Middleware/Authenticate.php' => 
  array (
    'fileHash' => 'dd93e88bf119d09043d1bf7bbedd93302bbf5df5',
    'dependentFiles' => 
    array (
      0 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Kernel.php',
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Http/Middleware/EncryptCookies.php' => 
  array (
    'fileHash' => '2f3bf90a67d62016c877485dc9ee316faa63365e',
    'dependentFiles' => 
    array (
      0 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Kernel.php',
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Http/Middleware/PreventRequestsDuringMaintenance.php' => 
  array (
    'fileHash' => '770337746128ea1c448bf6e0b666c360d248010d',
    'dependentFiles' => 
    array (
      0 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Kernel.php',
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Http/Middleware/RedirectIfAuthenticated.php' => 
  array (
    'fileHash' => 'bd1dee5557f5c9e742310bc2fed267e02c692f03',
    'dependentFiles' => 
    array (
      0 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Kernel.php',
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Http/Middleware/TrimStrings.php' => 
  array (
    'fileHash' => 'cf9b9cc384e83535b685e687c138ac209cf3a146',
    'dependentFiles' => 
    array (
      0 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Kernel.php',
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Http/Middleware/TrustHosts.php' => 
  array (
    'fileHash' => '2f7104c02cccf31ee51f1a0af273839dc8b2c8e9',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Http/Middleware/TrustProxies.php' => 
  array (
    'fileHash' => '03a1f278ee9d46445766a91fb45afc938dcd5f73',
    'dependentFiles' => 
    array (
      0 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Kernel.php',
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Http/Middleware/ValidateSignature.php' => 
  array (
    'fileHash' => 'e052d0bd9dc92e2a1c6ebcd945aad9fd3e2cc0b3',
    'dependentFiles' => 
    array (
      0 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Kernel.php',
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Http/Middleware/VerifyCsrfToken.php' => 
  array (
    'fileHash' => 'afa2e6b39583ac83ebd6a4eb105aa2df48c98cfc',
    'dependentFiles' => 
    array (
      0 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Kernel.php',
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Models/HIModel.php' => 
  array (
    'fileHash' => 'a2343c8358ee31490a72f12dd6ef32f1f7dc065d',
    'dependentFiles' => 
    array (
      0 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/Controller.php',
      1 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/MClassController.php',
      2 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/MStudentController.php',
      3 => '/home/hisbil/Workspace/school-presence-backend/app/Models/MClass.php',
      4 => '/home/hisbil/Workspace/school-presence-backend/app/Models/MPerson.php',
      5 => '/home/hisbil/Workspace/school-presence-backend/app/Models/MStudent.php',
      6 => '/home/hisbil/Workspace/school-presence-backend/app/Models/RelPersonUser.php',
      7 => '/home/hisbil/Workspace/school-presence-backend/app/Models/User.php',
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Models/MClass.php' => 
  array (
    'fileHash' => '4b33c108550052b62fdce20b23f7324c072b0428',
    'dependentFiles' => 
    array (
      0 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/Controller.php',
      1 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/MClassController.php',
      2 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/MStudentController.php',
      3 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/UserController.php',
      4 => '/home/hisbil/Workspace/school-presence-backend/app/Models/HIModel.php',
      5 => '/home/hisbil/Workspace/school-presence-backend/app/Models/MPerson.php',
      6 => '/home/hisbil/Workspace/school-presence-backend/app/Models/MStudent.php',
      7 => '/home/hisbil/Workspace/school-presence-backend/app/Models/RelPersonUser.php',
      8 => '/home/hisbil/Workspace/school-presence-backend/app/Models/User.php',
      9 => '/home/hisbil/Workspace/school-presence-backend/app/Providers/RouteServiceProvider.php',
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Models/MPerson.php' => 
  array (
    'fileHash' => '2e8a5f32ccd96105ded9c9b68c9ba72de779a825',
    'dependentFiles' => 
    array (
      0 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/Controller.php',
      1 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/MClassController.php',
      2 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/MStudentController.php',
      3 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/UserController.php',
      4 => '/home/hisbil/Workspace/school-presence-backend/app/Models/HIModel.php',
      5 => '/home/hisbil/Workspace/school-presence-backend/app/Models/MClass.php',
      6 => '/home/hisbil/Workspace/school-presence-backend/app/Models/MStudent.php',
      7 => '/home/hisbil/Workspace/school-presence-backend/app/Models/RelPersonUser.php',
      8 => '/home/hisbil/Workspace/school-presence-backend/app/Models/User.php',
      9 => '/home/hisbil/Workspace/school-presence-backend/app/Providers/RouteServiceProvider.php',
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Models/MStudent.php' => 
  array (
    'fileHash' => '39f3a8d9ff61b4b98ea6a3968904fd775e18289f',
    'dependentFiles' => 
    array (
      0 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/Controller.php',
      1 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/MClassController.php',
      2 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/MStudentController.php',
      3 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/UserController.php',
      4 => '/home/hisbil/Workspace/school-presence-backend/app/Models/HIModel.php',
      5 => '/home/hisbil/Workspace/school-presence-backend/app/Models/MClass.php',
      6 => '/home/hisbil/Workspace/school-presence-backend/app/Models/MPerson.php',
      7 => '/home/hisbil/Workspace/school-presence-backend/app/Models/RelPersonUser.php',
      8 => '/home/hisbil/Workspace/school-presence-backend/app/Models/User.php',
      9 => '/home/hisbil/Workspace/school-presence-backend/app/Providers/RouteServiceProvider.php',
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Models/RelPersonUser.php' => 
  array (
    'fileHash' => '30dc0ce006581dcf942c6c466d30156382801a40',
    'dependentFiles' => 
    array (
      0 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/Controller.php',
      1 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/MClassController.php',
      2 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/MStudentController.php',
      3 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/UserController.php',
      4 => '/home/hisbil/Workspace/school-presence-backend/app/Models/HIModel.php',
      5 => '/home/hisbil/Workspace/school-presence-backend/app/Models/MClass.php',
      6 => '/home/hisbil/Workspace/school-presence-backend/app/Models/MPerson.php',
      7 => '/home/hisbil/Workspace/school-presence-backend/app/Models/MStudent.php',
      8 => '/home/hisbil/Workspace/school-presence-backend/app/Models/User.php',
      9 => '/home/hisbil/Workspace/school-presence-backend/app/Providers/RouteServiceProvider.php',
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Models/User.php' => 
  array (
    'fileHash' => '62d757ccc1c478eefc262af78816b0e145122341',
    'dependentFiles' => 
    array (
      0 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/Controller.php',
      1 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/MClassController.php',
      2 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/MStudentController.php',
      3 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/UserController.php',
      4 => '/home/hisbil/Workspace/school-presence-backend/app/Models/HIModel.php',
      5 => '/home/hisbil/Workspace/school-presence-backend/app/Models/MClass.php',
      6 => '/home/hisbil/Workspace/school-presence-backend/app/Models/MPerson.php',
      7 => '/home/hisbil/Workspace/school-presence-backend/app/Models/MStudent.php',
      8 => '/home/hisbil/Workspace/school-presence-backend/app/Models/RelPersonUser.php',
      9 => '/home/hisbil/Workspace/school-presence-backend/app/Providers/RouteServiceProvider.php',
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Providers/AppServiceProvider.php' => 
  array (
    'fileHash' => '89241dd248b22d5bde9de99053e1d9395b950064',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Providers/AuthServiceProvider.php' => 
  array (
    'fileHash' => '1d37f64a1cc4fe3616d8b6e4fc4a7c2efd55cbc5',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Providers/BroadcastServiceProvider.php' => 
  array (
    'fileHash' => '7fdf058418b9663c68cc3a3423f14dc24da30bdf',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Providers/DatabaseServiceProvider.php' => 
  array (
    'fileHash' => '7f165da47a889269b5834125a742ac0138efe6f1',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Providers/EventServiceProvider.php' => 
  array (
    'fileHash' => '4c57d85b5875786c45b587bd35c667969b4754d7',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Providers/RouteServiceProvider.php' => 
  array (
    'fileHash' => 'efa4ae67d4ea252d1536bef4260e7fdf58903d81',
    'dependentFiles' => 
    array (
      0 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Middleware/RedirectIfAuthenticated.php',
    ),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Traits/ApiResponse.php' => 
  array (
    'fileHash' => 'bafda58feb8edd138ff843a68bddf5542ed68401',
    'dependentFiles' => 
    array (
      0 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/Controller.php',
      1 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/MClassController.php',
      2 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/MStudentController.php',
      3 => '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/UserController.php',
      4 => '/home/hisbil/Workspace/school-presence-backend/app/Models/HIModel.php',
      5 => '/home/hisbil/Workspace/school-presence-backend/app/Models/MClass.php',
      6 => '/home/hisbil/Workspace/school-presence-backend/app/Models/MPerson.php',
      7 => '/home/hisbil/Workspace/school-presence-backend/app/Models/MStudent.php',
      8 => '/home/hisbil/Workspace/school-presence-backend/app/Models/RelPersonUser.php',
      9 => '/home/hisbil/Workspace/school-presence-backend/app/Models/User.php',
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  '/home/hisbil/Workspace/school-presence-backend/app/Console/Kernel.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Kernel',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Console\\Kernel',
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
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'schedule',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the application\'s command schedule.
     */',
             'namespace' => 'App\\Console',
             'uses' => 
            array (
              'schedule' => 'Illuminate\\Console\\Scheduling\\Schedule',
              'consolekernel' => 'Illuminate\\Foundation\\Console\\Kernel',
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
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'schedule',
               'type' => 'Illuminate\\Console\\Scheduling\\Schedule',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'commands',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register the commands for the application.
     */',
             'namespace' => 'App\\Console',
             'uses' => 
            array (
              'schedule' => 'Illuminate\\Console\\Scheduling\\Schedule',
              'consolekernel' => 'Illuminate\\Foundation\\Console\\Kernel',
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
  '/home/hisbil/Workspace/school-presence-backend/app/Enums/Constants.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedEnumNode::__set_state(array(
       'name' => 'App\\Enums\\Constants',
       'scalarType' => 'string',
       'phpDoc' => NULL,
       'implements' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'PHONE_CONTACT_DB_NAME',
           'value' => '\'CELLULAR PHONE NUMBER\'',
           'phpDoc' => NULL,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'ORDER_CANCELLED',
           'value' => '\'ORDER WAS CANCELED\'',
           'phpDoc' => NULL,
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'SAP_ACC_RECEIVABLE_THIRD_ACCOUNT',
           'value' => '\'1102010002\'',
           'phpDoc' => NULL,
        )),
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'SAP_ACC_RECEIVABLE_RELATED_ACCOUNT',
           'value' => '\'1102010001\'',
           'phpDoc' => NULL,
        )),
        4 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'SAP_ACC_PAYABLE_THIRD_ACCOUNT',
           'value' => '\'2101010002\'',
           'phpDoc' => NULL,
        )),
        5 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'SAP_ACC_PAYABLE_RELATED_ACCOUNT',
           'value' => '\'2101010001\'',
           'phpDoc' => NULL,
        )),
        6 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'OFFICE_CARE_TIME_START',
           'value' => '\' 08:00:00\'',
           'phpDoc' => NULL,
        )),
        7 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'OFFICE_CARE_TIME_END',
           'value' => '\' 17:00:00\'',
           'phpDoc' => NULL,
        )),
        8 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'HOMECARE_TYPE',
           'value' => '\'1\'',
           'phpDoc' => NULL,
        )),
        9 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'OFFICECARE_TYPE',
           'value' => '\'2\'',
           'phpDoc' => NULL,
        )),
        10 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'OFFICECARE_WALKIN_TYPE',
           'value' => '\'3\'',
           'phpDoc' => NULL,
        )),
        11 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'DEFAULT_EMAIL_VIRTU',
           'value' => '\'care@virtudigilab.com\'',
           'phpDoc' => NULL,
        )),
        12 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'DEFAULT_URL_VIRTU',
           'value' => '\'https://virtudigilab.com/\'',
           'phpDoc' => NULL,
        )),
        13 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'SUBJECT_EMAIL_WELCOME_MESSAGE',
           'value' => '\'Account Activated\'',
           'phpDoc' => NULL,
        )),
        14 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'SUBJECT_EMAIL_EXPIRED_CONTRACT',
           'value' => '\'Corporate Contract Reminder\'',
           'phpDoc' => NULL,
        )),
        15 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'VIEW_EMAIL_WELCOME_MESSAGE',
           'value' => '\'mail.digilab-registration-confirmed\'',
           'phpDoc' => NULL,
        )),
        16 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'VIEW_EMAIL_SERVED_MESSAGE',
           'value' => '\'mail.served-treatment\'',
           'phpDoc' => NULL,
        )),
        17 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'SUBJECT_EMAIL_SERVED_MESSAGE',
           'value' => '\'Thank you, We Have Received Your Sample\'',
           'phpDoc' => NULL,
        )),
        18 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'VIEW_EMAIL_COMPLETE_OUTPATIENT',
           'value' => '\'mail.outpatient-result\'',
           'phpDoc' => NULL,
        )),
        19 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'SUBJECT_EMAIL_SERVICE_LATE',
           'value' => '\'Late Notification\'',
           'phpDoc' => NULL,
        )),
        20 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'VIEW_EMAIL_SERVICE_LATE',
           'value' => '\'mail.digilab-servicecare-late\'',
           'phpDoc' => NULL,
        )),
        21 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'SUBJECT_EMAIL_SERVICE_UPDATE',
           'value' => '\'Homecare Notification\'',
           'phpDoc' => NULL,
        )),
        22 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'VIEW_EMAIL_SERVICE_UPDATE_PROGRESS',
           'value' => '\'mail.digilab-servicecare-update-progress\'',
           'phpDoc' => NULL,
        )),
        23 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'VIEW_EMAIL_SERVICE_UPDATE_DONE',
           'value' => '\'mail.digilab-servicecare-update-done\'',
           'phpDoc' => NULL,
        )),
        24 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'VIEW_EMAIL_SERVICE_UPDATE_CANCEL',
           'value' => '\'mail.digilab-servicecare-update-cancel\'',
           'phpDoc' => NULL,
        )),
        25 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'SUBJECT_EMAIL_PAYMENT_MIDTRANS',
           'value' => '\'Payment Successful\'',
           'phpDoc' => NULL,
        )),
        26 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'SUBJECT_EMAIL_BOOKING_MIDTRANS',
           'value' => '\'Booking Detail Confirmation\'',
           'phpDoc' => NULL,
        )),
        27 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'SUBJECT_EMAIL_RESCHEDULE_HOMECARE',
           'value' => '\'Reschedule Detail Confirmation\'',
           'phpDoc' => NULL,
        )),
        28 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'VIEW_EMAIL_PAYMENT_MIDTRANS',
           'value' => '\'mail.payment-successfull\'',
           'phpDoc' => NULL,
        )),
        29 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'STR_PHFC',
           'value' => '\'PRIVATE HEALTH FACILITY\'',
           'phpDoc' => NULL,
        )),
        30 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'SUBJECT_EMAIL_REQUEST_FAMILY_MEMBER',
           'value' => '\'Add Family Member - Confirmation\'',
           'phpDoc' => NULL,
        )),
        31 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'VIEW_EMAIL_REQUEST_FAMILY_MEMBER',
           'value' => '\'mail.digilab-request-family-member\'',
           'phpDoc' => NULL,
        )),
        32 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'VIEW_EMAIL_REGENERATE_REMUN',
           'value' => '\'mail.remuneration\'',
           'phpDoc' => NULL,
        )),
        33 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'SUBJECT_EMAIL_REGENERATE_REMUN',
           'value' => '\'We have got some remuneration news for you!\'',
           'phpDoc' => NULL,
        )),
        34 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'VIEW_EMAIL_CANCEL_NURSE',
           'value' => '\'mail.cancel-service-nurse\'',
           'phpDoc' => NULL,
        )),
        35 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'SUBJECT_EMAIL_CANCEL_NURSE',
           'value' => '\'Our team couldn’t reach you\'',
           'phpDoc' => NULL,
        )),
        36 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'USERNAME_FIRST_FORMAT',
           'value' => '\'virtu\'',
           'phpDoc' => NULL,
        )),
        37 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'PG_DUPLICATE_ERROR_CODE',
           'value' => '\'23505\'',
           'phpDoc' => NULL,
        )),
        38 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'DEFAULT_QUEUE_WAITING_TIME',
           'value' => '\'10\'',
           'phpDoc' => NULL,
        )),
        39 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'BASE_PATH_PHOTO',
           'value' => '\'app/uploads/\'',
           'phpDoc' => NULL,
        )),
        40 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'HEADER_MCU_REPORT_RADIOLOGY',
           'value' => '\'mcu-report.header.radiology\'',
           'phpDoc' => NULL,
        )),
        41 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'HEADER_MCU_REPORT_PATOLOGY',
           'value' => '\'mcu-report.header.pathology-anatomy\'',
           'phpDoc' => NULL,
        )),
        42 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'HEADER_MCU_REPORT_MICROBIOLOGY',
           'value' => '\'mcu-report.header.microbiology\'',
           'phpDoc' => NULL,
        )),
        43 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'HEADER_MCU_REPORT_SUPPORTIVE',
           'value' => '\'mcu-report.header.supportive\'',
           'phpDoc' => NULL,
        )),
        44 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'SUBJECT_EMAIL_SUBSCRIPTION_BOOKING',
           'value' => '\'DEAL - Booking Confirmation\'',
           'phpDoc' => NULL,
        )),
        45 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'VIEW_EMAIL_SUBSCRIPTION_BOOKING',
           'value' => '\'mail.digilab-subscription-booking\'',
           'phpDoc' => NULL,
        )),
        46 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'SUBJECT_EMAIL_GIFT_SUBSCRIPTION_ASSIGNED',
           'value' => '\'Family Package - Assign Successful\'',
           'phpDoc' => NULL,
        )),
        47 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'VIEW_EMAIL_GIFT_SUBSCRIPTION_ASSIGNED',
           'value' => '\'mail.digilab-subscription-gift-assigned\'',
           'phpDoc' => NULL,
        )),
        48 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'SUBJECT_EMAIL_GIFT_SUBSCRIPTION_SUCCESS',
           'value' => '\'DEAL - Assign Confirmation\'',
           'phpDoc' => NULL,
        )),
        49 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'VIEW_EMAIL_GIFT_SUBSCRIPTION_SUCCESS',
           'value' => '\'mail.digilab-subscription-gift-success\'',
           'phpDoc' => NULL,
        )),
        50 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'VIEW_EMAIL_DEPOSIT_TRANSFFER',
           'value' => '\'mail.deposit-transfer-reminder\'',
           'phpDoc' => NULL,
        )),
        51 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'SUBJECT_EMAIL_DEPOSIT_TRANSFFER',
           'value' => '\'Expiration Reminder\'',
           'phpDoc' => NULL,
        )),
        52 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'SUBJECT_COMPANY_REGISTRATION_CONFIRMATION',
           'value' => '\'Company Registration Confirmation\'',
           'phpDoc' => NULL,
        )),
        53 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'VIEW_COMPANY_REGISTRATION_CONFIRMATION',
           'value' => '\'mail.company-registration-confirmed\'',
           'phpDoc' => NULL,
        )),
        54 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'USER_ACCESS_HIS_VALUE',
           'value' => '\'HIS\'',
           'phpDoc' => NULL,
        )),
        55 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'USER_ACCESS_VIRTU_VALUE',
           'value' => '\'VIRTU\'',
           'phpDoc' => NULL,
        )),
        56 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'VIEW_CONFIRM_BOOKING_EMPLOYEE',
           'value' => '\'mail.confirm-booking\'',
           'phpDoc' => NULL,
        )),
        57 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'VIEW_CONFIRM_BOOKING_COMPANY',
           'value' => '\'mail.confirm-booking-company\'',
           'phpDoc' => NULL,
        )),
        58 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'VIEW_CONFIRM_BOOKING_RESCHEDULE',
           'value' => '\'mail.confirm-booking-reschedule\'',
           'phpDoc' => NULL,
        )),
        59 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'VIEW_CONFIRM_HOMECARE_RESCHEDULE',
           'value' => '\'mail.confirm-homecarereschedule\'',
           'phpDoc' => NULL,
        )),
        60 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'VIEW_EMAIL_TELEMEDICINE',
           'value' => '\'mail.telemedicine\'',
           'phpDoc' => NULL,
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Enums/DefaultMessages.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedEnumNode::__set_state(array(
       'name' => 'App\\Enums\\DefaultMessages',
       'scalarType' => 'string',
       'phpDoc' => NULL,
       'implements' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'ACTION_SUCCESS',
           'value' => '\'Success.\'',
           'phpDoc' => NULL,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'ACTION_FAILED',
           'value' => '\'Cannot perform this action. We will fix this shortly.\'',
           'phpDoc' => NULL,
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'INVALID_REQUEST',
           'value' => '\'Cannot perform your invalid request.\'',
           'phpDoc' => NULL,
        )),
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'REGISTRATION_NOT_FOUND',
           'value' => '\'Cannot perform this action. Current registration not found / has been voided.\'',
           'phpDoc' => NULL,
        )),
        4 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'ACCOUNT_ALREADY_EXIST',
           'value' => '\'Cannot create this user. Account already exists.\'',
           'phpDoc' => NULL,
        )),
        5 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'CODE_ALREADY_EXIST',
           'value' => '\'Cannot create this data. Code already exists.\'',
           'phpDoc' => NULL,
        )),
        6 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'ERR_VALIDATION_PATIENT',
           'value' => '\'Cannot Validation Patient\'',
           'phpDoc' => NULL,
        )),
        7 => 
        PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'ERR_CONTRACT_EMAIL',
           'value' => '"You\'re not allowed to send email until your contract billing is paid!"',
           'phpDoc' => NULL,
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Exceptions/Handler.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Exceptions\\Handler',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Exceptions\\Handler',
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
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'dontFlash',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Exceptions',
             'uses' => 
            array (
              'exceptionhandler' => 'Illuminate\\Foundation\\Exceptions\\Handler',
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
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register the exception handling callbacks for the application.
     */',
             'namespace' => 'App\\Exceptions',
             'uses' => 
            array (
              'exceptionhandler' => 'Illuminate\\Foundation\\Exceptions\\Handler',
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
  '/home/hisbil/Workspace/school-presence-backend/app/Helpers/HttpResponse.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Helpers\\HttpResponse',
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
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_CONTINUE',
               'value' => '100',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_SWITCHING_PROTOCOLS',
               'value' => '101',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_PROCESSING',
               'value' => '102',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_EARLY_HINTS',
               'value' => '103',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        4 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_OK',
               'value' => '200',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        5 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_CREATED',
               'value' => '201',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        6 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_ACCEPTED',
               'value' => '202',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        7 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_NON_AUTHORITATIVE_INFORMATION',
               'value' => '203',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        8 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_NO_CONTENT',
               'value' => '204',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        9 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_RESET_CONTENT',
               'value' => '205',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        10 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_PARTIAL_CONTENT',
               'value' => '206',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        11 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_MULTI_STATUS',
               'value' => '207',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        12 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_ALREADY_REPORTED',
               'value' => '208',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        13 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_IM_USED',
               'value' => '226',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        14 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_MULTIPLE_CHOICES',
               'value' => '300',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        15 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_MOVED_PERMANENTLY',
               'value' => '301',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        16 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_FOUND',
               'value' => '302',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        17 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_SEE_OTHER',
               'value' => '303',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        18 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_NOT_MODIFIED',
               'value' => '304',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        19 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_USE_PROXY',
               'value' => '305',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        20 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_RESERVED',
               'value' => '306',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        21 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_TEMPORARY_REDIRECT',
               'value' => '307',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        22 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_PERMANENTLY_REDIRECT',
               'value' => '308',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        23 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_BAD_REQUEST',
               'value' => '400',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        24 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_UNAUTHORIZED',
               'value' => '401',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        25 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_PAYMENT_REQUIRED',
               'value' => '402',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        26 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_FORBIDDEN',
               'value' => '403',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        27 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_NOT_FOUND',
               'value' => '404',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        28 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_METHOD_NOT_ALLOWED',
               'value' => '405',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        29 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_NOT_ACCEPTABLE',
               'value' => '406',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        30 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_PROXY_AUTHENTICATION_REQUIRED',
               'value' => '407',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        31 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_REQUEST_TIMEOUT',
               'value' => '408',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        32 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_CONFLICT',
               'value' => '409',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        33 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_GONE',
               'value' => '410',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        34 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_LENGTH_REQUIRED',
               'value' => '411',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        35 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_PRECONDITION_FAILED',
               'value' => '412',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        36 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_REQUEST_ENTITY_TOO_LARGE',
               'value' => '413',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        37 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_REQUEST_URI_TOO_LONG',
               'value' => '414',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        38 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_UNSUPPORTED_MEDIA_TYPE',
               'value' => '415',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        39 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_REQUESTED_RANGE_NOT_SATISFIABLE',
               'value' => '416',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        40 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_EXPECTATION_FAILED',
               'value' => '417',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        41 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_I_AM_A_TEAPOT',
               'value' => '418',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        42 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_MISDIRECTED_REQUEST',
               'value' => '421',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        43 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_UNPROCESSABLE_ENTITY',
               'value' => '422',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        44 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_LOCKED',
               'value' => '423',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        45 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_FAILED_DEPENDENCY',
               'value' => '424',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        46 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_TOO_EARLY',
               'value' => '425',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        47 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_UPGRADE_REQUIRED',
               'value' => '426',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        48 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_PRECONDITION_REQUIRED',
               'value' => '428',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        49 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_TOO_MANY_REQUESTS',
               'value' => '429',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        50 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE',
               'value' => '431',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        51 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_UNAVAILABLE_FOR_LEGAL_REASONS',
               'value' => '451',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        52 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_INTERNAL_SERVER_ERROR',
               'value' => '500',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        53 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_NOT_IMPLEMENTED',
               'value' => '501',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        54 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_BAD_GATEWAY',
               'value' => '502',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        55 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_SERVICE_UNAVAILABLE',
               'value' => '503',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        56 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_GATEWAY_TIMEOUT',
               'value' => '504',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        57 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_VERSION_NOT_SUPPORTED',
               'value' => '505',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        58 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL',
               'value' => '506',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        59 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_INSUFFICIENT_STORAGE',
               'value' => '507',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        60 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_LOOP_DETECTED',
               'value' => '508',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        61 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_NOT_EXTENDED',
               'value' => '510',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        62 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_NETWORK_AUTHENTICATION_REQUIRED',
               'value' => '511',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        63 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'statusTexts',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => true,
           'readonly' => false,
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
  '/home/hisbil/Workspace/school-presence-backend/app/Helpers/HttpStatus.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Helpers\\HttpStatus',
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
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_CONTINUE',
               'value' => '100',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_SWITCHING_PROTOCOLS',
               'value' => '101',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_PROCESSING',
               'value' => '102',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_OK',
               'value' => '200',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        4 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_CREATED',
               'value' => '201',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        5 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_ACCEPTED',
               'value' => '202',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        6 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_NON_AUTHORITATIVE_INFORMATION',
               'value' => '203',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        7 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_NO_CONTENT',
               'value' => '204',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        8 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_RESET_CONTENT',
               'value' => '205',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        9 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_PARTIAL_CONTENT',
               'value' => '206',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        10 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_MULTI_STATUS',
               'value' => '207',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        11 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_ALREADY_REPORTED',
               'value' => '208',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        12 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_IM_USED',
               'value' => '226',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        13 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_MULTIPLE_CHOICES',
               'value' => '300',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        14 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_MOVED_PERMANENTLY',
               'value' => '301',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        15 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_FOUND',
               'value' => '302',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        16 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_SEE_OTHER',
               'value' => '303',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        17 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_NOT_MODIFIED',
               'value' => '304',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        18 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_USE_PROXY',
               'value' => '305',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        19 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_RESERVED',
               'value' => '306',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        20 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_TEMPORARY_REDIRECT',
               'value' => '307',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        21 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_PERMANENTLY_REDIRECT',
               'value' => '308',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        22 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_BAD_REQUEST',
               'value' => '400',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        23 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_UNAUTHORIZED',
               'value' => '401',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        24 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_PAYMENT_REQUIRED',
               'value' => '402',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        25 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_FORBIDDEN',
               'value' => '403',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        26 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_NOT_FOUND',
               'value' => '404',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        27 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_METHOD_NOT_ALLOWED',
               'value' => '405',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        28 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_NOT_ACCEPTABLE',
               'value' => '406',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        29 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_PROXY_AUTHENTICATION_REQUIRED',
               'value' => '407',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        30 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_REQUEST_TIMEOUT',
               'value' => '408',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        31 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_CONFLICT',
               'value' => '409',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        32 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_GONE',
               'value' => '410',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        33 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_LENGTH_REQUIRED',
               'value' => '411',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        34 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_PRECONDITION_FAILED',
               'value' => '412',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        35 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_REQUEST_ENTITY_TOO_LARGE',
               'value' => '413',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        36 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_REQUEST_URI_TOO_LONG',
               'value' => '414',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        37 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_UNSUPPORTED_MEDIA_TYPE',
               'value' => '415',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        38 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_REQUESTED_RANGE_NOT_SATISFIABLE',
               'value' => '416',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        39 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_EXPECTATION_FAILED',
               'value' => '417',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        40 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_I_AM_A_TEAPOT',
               'value' => '418',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        41 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_MISDIRECTED_REQUEST',
               'value' => '421',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        42 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_UNPROCESSABLE_ENTITY',
               'value' => '422',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        43 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_LOCKED',
               'value' => '423',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        44 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_FAILED_DEPENDENCY',
               'value' => '424',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        45 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_RESERVED_FOR_WEBDAV_ADVANCED_COLLECTIONS_EXPIRED_PROPOSAL',
               'value' => '425',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        46 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_UPGRADE_REQUIRED',
               'value' => '426',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        47 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_PRECONDITION_REQUIRED',
               'value' => '428',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        48 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_TOO_MANY_REQUESTS',
               'value' => '429',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        49 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE',
               'value' => '431',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        50 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_UNAVAILABLE_FOR_LEGAL_REASONS',
               'value' => '451',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        51 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_INTERNAL_SERVER_ERROR',
               'value' => '500',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        52 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_NOT_IMPLEMENTED',
               'value' => '501',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        53 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_BAD_GATEWAY',
               'value' => '502',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        54 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_SERVICE_UNAVAILABLE',
               'value' => '503',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        55 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_GATEWAY_TIMEOUT',
               'value' => '504',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        56 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_VERSION_NOT_SUPPORTED',
               'value' => '505',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        57 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL',
               'value' => '506',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        58 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_INSUFFICIENT_STORAGE',
               'value' => '507',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        59 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_LOOP_DETECTED',
               'value' => '508',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        60 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_NOT_EXTENDED',
               'value' => '510',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        61 => 
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_NETWORK_AUTHENTICATION_REQUIRED',
               'value' => '511',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        62 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'statusTexts',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => true,
           'readonly' => false,
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
  '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/Controller.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Controller',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Routing\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Traits\\ApiResponse',
        1 => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
        2 => 'Illuminate\\Foundation\\Validation\\ValidatesRequests',
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
  '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/MClassController.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\v1\\MClassController',
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
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
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
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'get',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get data (single / bulk).
     */',
             'namespace' => 'App\\Http\\Controllers\\v1',
             'uses' => 
            array (
              'defaultmessages' => 'App\\Enums\\DefaultMessages',
              'controller' => 'App\\Http\\Controllers\\Controller',
              'mclass' => 'App\\Models\\MClass',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
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
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'insert',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Insert data batch or single.
     */',
             'namespace' => 'App\\Http\\Controllers\\v1',
             'uses' => 
            array (
              'defaultmessages' => 'App\\Enums\\DefaultMessages',
              'controller' => 'App\\Http\\Controllers\\Controller',
              'mclass' => 'App\\Models\\MClass',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
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
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'Update',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Update data batch or single.
     */',
             'namespace' => 'App\\Http\\Controllers\\v1',
             'uses' => 
            array (
              'defaultmessages' => 'App\\Enums\\DefaultMessages',
              'controller' => 'App\\Http\\Controllers\\Controller',
              'mclass' => 'App\\Models\\MClass',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
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
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Delete data.
     */',
             'namespace' => 'App\\Http\\Controllers\\v1',
             'uses' => 
            array (
              'defaultmessages' => 'App\\Enums\\DefaultMessages',
              'controller' => 'App\\Http\\Controllers\\Controller',
              'mclass' => 'App\\Models\\MClass',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
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
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
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
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/MStudentController.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\v1\\MStudentController',
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
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'personModel',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
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
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'get',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get data (single / bulk).
     */',
             'namespace' => 'App\\Http\\Controllers\\v1',
             'uses' => 
            array (
              'defaultmessages' => 'App\\Enums\\DefaultMessages',
              'controller' => 'App\\Http\\Controllers\\Controller',
              'mperson' => 'App\\Models\\MPerson',
              'mstudent' => 'App\\Models\\MStudent',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
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
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'insert',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Insert data batch or single.
     */',
             'namespace' => 'App\\Http\\Controllers\\v1',
             'uses' => 
            array (
              'defaultmessages' => 'App\\Enums\\DefaultMessages',
              'controller' => 'App\\Http\\Controllers\\Controller',
              'mperson' => 'App\\Models\\MPerson',
              'mstudent' => 'App\\Models\\MStudent',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
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
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Update data batch or single.
     */',
             'namespace' => 'App\\Http\\Controllers\\v1',
             'uses' => 
            array (
              'defaultmessages' => 'App\\Enums\\DefaultMessages',
              'controller' => 'App\\Http\\Controllers\\Controller',
              'mperson' => 'App\\Models\\MPerson',
              'mstudent' => 'App\\Models\\MStudent',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
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
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Delete data.
     */',
             'namespace' => 'App\\Http\\Controllers\\v1',
             'uses' => 
            array (
              'defaultmessages' => 'App\\Enums\\DefaultMessages',
              'controller' => 'App\\Http\\Controllers\\Controller',
              'mperson' => 'App\\Models\\MPerson',
              'mstudent' => 'App\\Models\\MStudent',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
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
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
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
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Http/Controllers/v1/UserController.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\v1\\UserController',
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
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
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
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'login',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Login user and create token.
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [boolean] remember_me
     */',
             'namespace' => 'App\\Http\\Controllers\\v1',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
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
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
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
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Http/Kernel.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Kernel',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\Kernel',
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
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'middleware',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The application\'s global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array<int, class-string|string>
     */',
             'namespace' => 'App\\Http',
             'uses' => 
            array (
              'httpkernel' => 'Illuminate\\Foundation\\Http\\Kernel',
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
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'middlewareGroups',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The application\'s route middleware groups.
     *
     * @var array<string, array<int, class-string|string>>
     */',
             'namespace' => 'App\\Http',
             'uses' => 
            array (
              'httpkernel' => 'Illuminate\\Foundation\\Http\\Kernel',
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
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'middlewareAliases',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The application\'s middleware aliases.
     *
     * Aliases may be used instead of class names to conveniently assign middleware to routes and groups.
     *
     * @var array<string, class-string|string>
     */',
             'namespace' => 'App\\Http',
             'uses' => 
            array (
              'httpkernel' => 'Illuminate\\Foundation\\Http\\Kernel',
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
  '/home/hisbil/Workspace/school-presence-backend/app/Http/Middleware/Authenticate.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\Authenticate',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Auth\\Middleware\\Authenticate',
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
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'redirectTo',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the path the user should be redirected to when they are not authenticated.
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Auth\\Middleware\\Authenticate',
              'request' => 'Illuminate\\Http\\Request',
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
           'returnType' => '?string',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
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
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Http/Middleware/EncryptCookies.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\EncryptCookies',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Cookie\\Middleware\\EncryptCookies',
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
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'except',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The names of the cookies that should not be encrypted.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Cookie\\Middleware\\EncryptCookies',
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
  '/home/hisbil/Workspace/school-presence-backend/app/Http/Middleware/PreventRequestsDuringMaintenance.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\PreventRequestsDuringMaintenance',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
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
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'except',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The URIs that should be reachable while maintenance mode is enabled.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
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
  '/home/hisbil/Workspace/school-presence-backend/app/Http/Middleware/RedirectIfAuthenticated.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\RedirectIfAuthenticated',
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
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle an incoming request.
     *
     * @param \\Closure(\\Illuminate\\Http\\Request): (\\Symfony\\Component\\HttpFoundation\\Response) $next
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
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
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'next',
               'type' => 'Closure',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'guards',
               'type' => 'string',
               'byRef' => false,
               'variadic' => true,
               'hasDefault' => false,
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
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Http/Middleware/TrimStrings.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\TrimStrings',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\Middleware\\TrimStrings',
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
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'except',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The names of the attributes that should not be trimmed.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Foundation\\Http\\Middleware\\TrimStrings',
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
  '/home/hisbil/Workspace/school-presence-backend/app/Http/Middleware/TrustHosts.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\TrustHosts',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Middleware\\TrustHosts',
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
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'hosts',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Http\\Middleware\\TrustHosts',
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
  '/home/hisbil/Workspace/school-presence-backend/app/Http/Middleware/TrustProxies.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\TrustProxies',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Middleware\\TrustProxies',
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
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'proxies',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The trusted proxies for this application.
     *
     * @var array<int, string>|string|null
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Http\\Middleware\\TrustProxies',
              'request' => 'Illuminate\\Http\\Request',
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
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'headers',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Http\\Middleware\\TrustProxies',
              'request' => 'Illuminate\\Http\\Request',
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
  '/home/hisbil/Workspace/school-presence-backend/app/Http/Middleware/ValidateSignature.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\ValidateSignature',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Routing\\Middleware\\ValidateSignature',
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
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'except',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The names of the query string parameters that should be ignored.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Routing\\Middleware\\ValidateSignature',
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
  '/home/hisbil/Workspace/school-presence-backend/app/Http/Middleware/VerifyCsrfToken.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\VerifyCsrfToken',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken',
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
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'except',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken',
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
  '/home/hisbil/Workspace/school-presence-backend/app/Models/HIModel.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\HIModel',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * App\\Models\\HIModel.
 *
 * @property \\Illuminate\\Database\\Eloquent\\Collection|\\Spatie\\Permission\\Models\\Permission[] $permissions
 * @property int|null                                                                        $permissions_count
 * @property \\Illuminate\\Database\\Eloquent\\Collection|\\Spatie\\Permission\\Models\\Role[]       $roles
 * @property int|null                                                                        $roles_count
 *
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|HIModel newModelQuery()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|HIModel newQuery()
 * @method static \\Illuminate\\Database\\Query\\Builder|HIModel    onlyTrashed()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|HIModel permission($permissions)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|HIModel query()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|HIModel role($roles, $guard = null)
 * @method static \\Illuminate\\Database\\Query\\Builder|HIModel    withTrashed()
 * @method static \\Illuminate\\Database\\Query\\Builder|HIModel    withoutTrashed()
 *
 * @mixin \\Eloquent
 */',
         'namespace' => 'App\\Models',
         'uses' => 
        array (
          'constants' => 'App\\Enums\\Constants',
          'defaultmessages' => 'App\\Enums\\DefaultMessages',
          'apiresponse' => 'App\\Traits\\ApiResponse',
          'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'queryexception' => 'Illuminate\\Database\\QueryException',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
          'db' => 'Illuminate\\Support\\Facades\\DB',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Traits\\ApiResponse',
        1 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'uniqueColumns',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'checkRelation',
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
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'listData',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'listRelation',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'batchOperations',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Batch operations (insert / update / delete).
     *
     * @return array|Model
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'constants' => 'App\\Enums\\Constants',
              'defaultmessages' => 'App\\Enums\\DefaultMessages',
              'apiresponse' => 'App\\Traits\\ApiResponse',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'queryexception' => 'Illuminate\\Database\\QueryException',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
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
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'items',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'ops',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'config',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'updateOnlyByFk',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Function Update batch only.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'constants' => 'App\\Enums\\Constants',
              'defaultmessages' => 'App\\Enums\\DefaultMessages',
              'apiresponse' => 'App\\Traits\\ApiResponse',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'queryexception' => 'Illuminate\\Database\\QueryException',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
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
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'items',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
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
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Models/MClass.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\MClass',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @property int                $id
 * @property int                $school_id
 * @property int                $created_by
 * @property int                $updated_by
 * @property string             $code
 * @property string             $name
 * @property bool               $active
 * @property string             $created_at
 * @property string             $updated_at
 * @property string             $deleted_at
 * @property MHomeroomTeacher[] $mHomeroomTeachers
 * @property User               $user
 * @property MSchool            $mSchool
 * @property User               $user
 */',
         'namespace' => 'App\\Models',
         'uses' => 
        array (
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'db' => 'Illuminate\\Support\\Facades\\DB',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Models\\HIModel',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The table associated with the model.
     *
     * @var string
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'db' => 'Illuminate\\Support\\Facades\\DB',
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
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'keyType',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'db' => 'Illuminate\\Support\\Facades\\DB',
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
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var array
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'db' => 'Illuminate\\Support\\Facades\\DB',
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
           'attributes' => 
          array (
          ),
        )),
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getData',
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
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mHomeroomTeachers',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
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
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'userCreatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\BelongsTo
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
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
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mSchool',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\BelongsTo
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
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
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'userUpdatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\BelongsTo
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
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
  '/home/hisbil/Workspace/school-presence-backend/app/Models/MPerson.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\MPerson',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @property int                $id
 * @property int                $created_by
 * @property int                $updated_by
 * @property string             $first_name
 * @property string             $last_name
 * @property string             $address
 * @property string             $gender
 * @property bool               $active
 * @property string             $created_at
 * @property string             $updated_at
 * @property string             $deleted_at
 * @property MHomeroomTeacher[] $mHomeroomTeachers
 * @property RelPersonUser[]    $relPersonUsers
 * @property User               $user
 * @property User               $user
 * @property MParent[]          $mParents
 */',
         'namespace' => 'App\\Models',
         'uses' => 
        array (
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Models\\HIModel',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The table associated with the model.
     *
     * @var string
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
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
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'keyType',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
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
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var array
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
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
           'attributes' => 
          array (
          ),
        )),
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mHomeroomTeachers',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
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
        4 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'relPersonUsers',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
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
        5 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'userCreatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\BelongsTo
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
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
        6 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'userUpdatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\BelongsTo
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
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
        7 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mParents',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
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
  '/home/hisbil/Workspace/school-presence-backend/app/Models/MStudent.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\MStudent',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @property int                $id
 * @property int                $created_by
 * @property int                $updated_by
 * @property int                $school_id
 * @property int                $person_id
 * @property string             $nis
 * @property string             $email
 * @property bool               $active
 * @property string             $created_at
 * @property string             $updated_at
 * @property string             $deleted_at
 * @property RelParentStudent[] $relParentStudents
 * @property User               $user
 * @property MSchool            $mSchool
 * @property User               $user
 * @property TPresence[]        $tPresences
 */',
         'namespace' => 'App\\Models',
         'uses' => 
        array (
          'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
          'db' => 'Illuminate\\Support\\Facades\\DB',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Models\\HIModel',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The table associated with the model.
     *
     * @var string
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'db' => 'Illuminate\\Support\\Facades\\DB',
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
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'keyType',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'db' => 'Illuminate\\Support\\Facades\\DB',
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
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var array
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'db' => 'Illuminate\\Support\\Facades\\DB',
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
           'attributes' => 
          array (
          ),
        )),
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getData',
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
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'relParentStudents',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
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
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'userCreatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\BelongsTo
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
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
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mSchool',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\BelongsTo
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
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
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'userUpdatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\BelongsTo
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
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
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'tPresences',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
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
  '/home/hisbil/Workspace/school-presence-backend/app/Models/RelPersonUser.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\RelPersonUser',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @property int     $id
 * @property int     $person_id
 * @property int     $user_id
 * @property int     $school_id
 * @property int     $created_by
 * @property int     $updated_by
 * @property string  $created_at
 * @property string  $updated_at
 * @property string  $deleted_at
 * @property User    $user
 * @property MPerson $mPerson
 * @property MSchool $mSchool
 * @property User    $user
 * @property User    $user
 */',
         'namespace' => 'App\\Models',
         'uses' => 
        array (
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Models\\HIModel',
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
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The table associated with the model.
     *
     * @var string
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
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
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'keyType',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
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
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var array
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
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
           'attributes' => 
          array (
          ),
        )),
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'userCreatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\BelongsTo
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
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
        4 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mPerson',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\BelongsTo
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
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
        5 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mSchool',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\BelongsTo
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
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
        6 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'userUpdatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\BelongsTo
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
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
        7 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'user',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\BelongsTo
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
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
  '/home/hisbil/Workspace/school-presence-backend/app/Models/User.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\User',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @property int                $id
 * @property int                $created_by
 * @property int                $updated_by
 * @property string             $username
 * @property string             $email
 * @property string             $email_verified_at
 * @property string             $password
 * @property string             $type
 * @property bool               $active
 * @property string             $remember_token
 * @property string             $created_at
 * @property string             $updated_at
 * @property string             $deleted_at
 * @property MHomeroomTeacher[] $mHomeroomTeachers
 * @property MHomeroomTeacher[] $mHomeroomTeachers
 * @property MClass[]           $mClasses
 * @property MClass[]           $mClasses
 * @property RelPersonUser[]    $relPersonUsers
 * @property RelPersonUser[]    $relPersonUsers
 * @property RelPersonUser[]    $relPersonUsers
 * @property RelParentStudent[] $relParentStudents
 * @property RelParentStudent[] $relParentStudents
 * @property MStudent[]         $mStudents
 * @property MStudent[]         $mStudents
 * @property MPerson[]          $mPeople
 * @property MPerson[]          $mPeople
 * @property TPresenceDetail[]  $tPresenceDetails
 * @property TPresenceDetail[]  $tPresenceDetails
 * @property TPresence[]        $tPresences
 * @property TPresence[]        $tPresences
 * @property MConfig[]          $mConfigs
 * @property MConfig[]          $mConfigs
 * @property MSchool[]          $mSchools
 * @property MSchool[]          $mSchools
 * @property User               $user
 * @property User               $user
 * @property MParent[]          $mParents
 * @property MParent[]          $mParents
 */',
         'namespace' => 'App\\Models',
         'uses' => 
        array (
          'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
          'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
          'notifiable' => 'Illuminate\\Notifications\\Notifiable',
          'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
        0 => 'Laravel\\Sanctum\\HasApiTokens',
        1 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        2 => 'Illuminate\\Notifications\\Notifiable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'keyType',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var array
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hidden',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
           'attributes' => 
          array (
          ),
        )),
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
           'attributes' => 
          array (
          ),
        )),
        4 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mHomeroomTeachersCreatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
        5 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mHomeroomTeachersUpdatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
        6 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mClassesCreatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
        7 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mClassesUpdatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
        8 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'relPersonUsersCreatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
        9 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'relPersonUsersUpdatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
        10 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'relPersonUsers',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
        11 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'relParentStudentsCreatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
        12 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'relParentStudentsUpdatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
        13 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mStudentsCreatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
        14 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mStudentsUpdatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
        15 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mPeopleCreatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
        16 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mPeopleUpdatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
        17 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'tPresenceDetailsCreatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
        18 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'tPresenceDetailsUpadatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
        19 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'tPresencesCreatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
        20 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'tPresencesUpdatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
        21 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mConfigsCreatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
        22 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mConfigsUpdatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
        23 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mSchoolsCreatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
        24 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mSchoolsUpdatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
        25 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'userCreatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\BelongsTo
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
        26 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'userUpdatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\BelongsTo
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
        27 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mParentsCreatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
        28 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mParentsUpdatedBy',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
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
  '/home/hisbil/Workspace/school-presence-backend/app/Providers/AppServiceProvider.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
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
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
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
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
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
  '/home/hisbil/Workspace/school-presence-backend/app/Providers/AuthServiceProvider.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\AuthServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Support\\Providers\\AuthServiceProvider',
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
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'policies',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\AuthServiceProvider',
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
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any authentication / authorization services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\AuthServiceProvider',
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
  '/home/hisbil/Workspace/school-presence-backend/app/Providers/BroadcastServiceProvider.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\BroadcastServiceProvider',
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
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
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
  '/home/hisbil/Workspace/school-presence-backend/app/Providers/DatabaseServiceProvider.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\DatabaseServiceProvider',
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
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
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
  '/home/hisbil/Workspace/school-presence-backend/app/Providers/EventServiceProvider.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\EventServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
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
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'listen',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'registered' => 'Illuminate\\Auth\\Events\\Registered',
              'sendemailverificationnotification' => 'Illuminate\\Auth\\Listeners\\SendEmailVerificationNotification',
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
              'event' => 'Illuminate\\Support\\Facades\\Event',
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
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any events for your application.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'registered' => 'Illuminate\\Auth\\Events\\Registered',
              'sendemailverificationnotification' => 'Illuminate\\Auth\\Listeners\\SendEmailVerificationNotification',
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
              'event' => 'Illuminate\\Support\\Facades\\Event',
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
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'shouldDiscoverEvents',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if events and listeners should be automatically discovered.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'registered' => 'Illuminate\\Auth\\Events\\Registered',
              'sendemailverificationnotification' => 'Illuminate\\Auth\\Listeners\\SendEmailVerificationNotification',
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
              'event' => 'Illuminate\\Support\\Facades\\Event',
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
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/hisbil/Workspace/school-presence-backend/app/Providers/RouteServiceProvider.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\RouteServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
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
        PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HOME',
               'value' => '\'/home\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The path to your application\'s "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'limit' => 'Illuminate\\Cache\\RateLimiting\\Limit',
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
              'request' => 'Illuminate\\Http\\Request',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'route' => 'Illuminate\\Support\\Facades\\Route',
            ),
             'constUses' => 
            array (
            ),
          )),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define your route model bindings, pattern filters, and other route configuration.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'limit' => 'Illuminate\\Cache\\RateLimiting\\Limit',
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
              'request' => 'Illuminate\\Http\\Request',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'route' => 'Illuminate\\Support\\Facades\\Route',
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
  '/home/hisbil/Workspace/school-presence-backend/app/Traits/ApiResponse.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'traitName' => 'App\\Traits\\ApiResponse',
    )),
  ),
); },
];
