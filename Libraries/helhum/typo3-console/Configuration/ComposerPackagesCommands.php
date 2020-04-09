<?php
return array (
  0 => 
  array (
    0 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Backend\\CreateBackendAdminUserCommand',
      'name' => 'backend:createadmin',
      'nameSpacedName' => 'typo3_console:backend:createadmin',
    ),
    1 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Backend\\LockBackendCommand',
      'name' => 'backend:lock',
      'nameSpacedName' => 'typo3_console:backend:lock',
    ),
    2 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Backend\\LockBackendForEditorsCommand',
      'name' => 'backend:lockforeditors',
      'nameSpacedName' => 'typo3_console:backend:lockforeditors',
    ),
    3 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Backend\\UnlockBackendCommand',
      'name' => 'backend:unlock',
      'nameSpacedName' => 'typo3_console:backend:unlock',
    ),
    4 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Backend\\UnlockBackendForEditorsCommand',
      'name' => 'backend:unlockforeditors',
      'nameSpacedName' => 'typo3_console:backend:unlockforeditors',
    ),
    5 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Cache\\CacheFlushCommand',
      'runLevel' => 'buildEssentialSequence',
      'name' => 'cache:flush',
      'nameSpacedName' => 'typo3_console:cache:flush',
    ),
    6 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Cache\\CacheFlushGroupsCommand',
      'name' => 'cache:flushgroups',
      'nameSpacedName' => 'typo3_console:cache:flushgroups',
    ),
    7 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Cache\\CacheFlushTagsCommand',
      'name' => 'cache:flushtags',
      'nameSpacedName' => 'typo3_console:cache:flushtags',
    ),
    8 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Cache\\CacheListGroupsCommand',
      'name' => 'cache:listgroups',
      'nameSpacedName' => 'typo3_console:cache:listgroups',
    ),
    9 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Configuration\\ConfigurationRemoveCommand',
      'runLevel' => 'buildBasicRuntimeSequence',
      'name' => 'configuration:remove',
      'nameSpacedName' => 'typo3_console:configuration:remove',
    ),
    10 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Configuration\\ConfigurationSetCommand',
      'runLevel' => 'buildBasicRuntimeSequence',
      'name' => 'configuration:set',
      'nameSpacedName' => 'typo3_console:configuration:set',
    ),
    11 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Configuration\\ConfigurationShowCommand',
      'name' => 'configuration:show',
      'nameSpacedName' => 'typo3_console:configuration:show',
    ),
    12 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Configuration\\ConfigurationShowActiveCommand',
      'name' => 'configuration:showactive',
      'nameSpacedName' => 'typo3_console:configuration:showactive',
    ),
    13 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Configuration\\ConfigurationShowLocalCommand',
      'runLevel' => 'buildBasicRuntimeSequence',
      'name' => 'configuration:showlocal',
      'nameSpacedName' => 'typo3_console:configuration:showlocal',
    ),
    14 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Database\\DatabaseExportCommand',
      'runLevel' => 'buildBasicRuntimeSequence',
      'name' => 'database:export',
      'nameSpacedName' => 'typo3_console:database:export',
    ),
    15 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Database\\DatabaseImportCommand',
      'runLevel' => 'buildBasicRuntimeSequence',
      'name' => 'database:import',
      'nameSpacedName' => 'typo3_console:database:import',
    ),
    16 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Database\\DatabaseUpdateSchemaCommand',
      'runLevel' => 'buildBasicRuntimeSequence',
      'bootingSteps' => 
      array (
        0 => 'helhum.typo3console:persistence',
      ),
      'name' => 'database:updateschema',
      'nameSpacedName' => 'typo3_console:database:updateschema',
    ),
    17 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Extension\\DumpAutoloadCommand',
      'runLevel' => 'buildEssentialSequence',
      'name' => 'dumpautoload',
      'nameSpacedName' => 'typo3_console:dumpautoload',
    ),
    18 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Extension\\ExtensionListCommand',
      'schedulable' => false,
      'name' => 'extension:list',
      'nameSpacedName' => 'typo3_console:extension:list',
    ),
    19 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Extension\\ExtensionSetupCommand',
      'name' => 'extension:setup',
      'nameSpacedName' => 'typo3_console:extension:setup',
    ),
    20 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Extension\\ExtensionSetupActiveCommand',
      'name' => 'extension:setupactive',
      'nameSpacedName' => 'typo3_console:extension:setupactive',
    ),
    21 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Frontend\\FrontendRequestCommand',
      'name' => 'frontend:request',
      'nameSpacedName' => 'typo3_console:frontend:request',
    ),
    22 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Install\\InstallSetupCommand',
      'runLevel' => 'buildEssentialSequence',
      'name' => 'install:setup',
      'nameSpacedName' => 'typo3_console:install:setup',
    ),
    23 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Install\\InstallGeneratePackageStatesCommand',
      'runLevel' => 'buildEssentialSequence',
      'name' => 'install:generatepackagestates',
      'nameSpacedName' => 'typo3_console:install:generatepackagestates',
    ),
    24 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Install\\InstallFixFolderStructureCommand',
      'runLevel' => 'buildEssentialSequence',
      'name' => 'install:fixfolderstructure',
      'nameSpacedName' => 'typo3_console:install:fixfolderstructure',
    ),
    25 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Install\\InstallExtensionSetupIfPossibleCommand',
      'runLevel' => 'buildEssentialSequence',
      'name' => 'install:extensionsetupifpossible',
      'nameSpacedName' => 'typo3_console:install:extensionsetupifpossible',
    ),
    26 => 
    array (
      'class' => 'Helhum\\Typo3Console\\Command\\Install\\InstallEnvironmentAndFoldersCommand',
      'vendor' => 'typo3_console',
      'runLevel' => 'buildEssentialSequence',
      'name' => 'install:environmentandfolders',
      'nameSpacedName' => 'typo3_console:install:environmentandfolders',
    ),
    27 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Install\\InstallDatabaseConnectCommand',
      'runLevel' => 'buildEssentialSequence',
      'name' => 'install:databaseconnect',
      'nameSpacedName' => 'typo3_console:install:databaseconnect',
    ),
    28 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Install\\InstallDatabaseSelectCommand',
      'runLevel' => 'buildEssentialSequence',
      'name' => 'install:databaseselect',
      'nameSpacedName' => 'typo3_console:install:databaseselect',
    ),
    29 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Install\\InstallDatabaseDataCommand',
      'runLevel' => 'buildBasicRuntimeSequence',
      'bootingSteps' => 
      array (
        0 => 'helhum.typo3console:persistence',
      ),
      'name' => 'install:databasedata',
      'nameSpacedName' => 'typo3_console:install:databasedata',
    ),
    30 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Install\\InstallDefaultConfigurationCommand',
      'runLevel' => 'buildBasicRuntimeSequence',
      'bootingSteps' => 
      array (
        0 => 'helhum.typo3console:persistence',
      ),
      'name' => 'install:defaultconfiguration',
      'nameSpacedName' => 'typo3_console:install:defaultconfiguration',
    ),
    31 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Install\\InstallActionNeedsExecutionCommand',
      'runLevel' => 'buildEssentialSequence',
      'name' => 'install:actionneedsexecution',
      'nameSpacedName' => 'typo3_console:install:actionneedsexecution',
    ),
    32 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Upgrade\\UpgradeAllCommand',
      'runLevel' => 'buildEssentialSequence',
      'replace' => 
      array (
        0 => 'upgrade:run',
      ),
      'name' => 'upgrade:all',
      'nameSpacedName' => 'typo3_console:upgrade:all',
    ),
    33 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Upgrade\\UpgradeCheckExtensionConstraintsCommand',
      'runLevel' => 'buildEssentialSequence',
      'name' => 'upgrade:checkextensionconstraints',
      'nameSpacedName' => 'typo3_console:upgrade:checkextensionconstraints',
    ),
    34 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Upgrade\\UpgradeListCommand',
      'runLevel' => 'buildEssentialSequence',
      'name' => 'upgrade:list',
      'nameSpacedName' => 'typo3_console:upgrade:list',
    ),
    35 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Upgrade\\UpgradeWizardCommand',
      'runLevel' => 'buildEssentialSequence',
      'name' => 'upgrade:wizard',
      'nameSpacedName' => 'typo3_console:upgrade:wizard',
    ),
    36 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Upgrade\\UpgradeSubProcessCommand',
      'name' => 'upgrade:subprocess',
      'nameSpacedName' => 'typo3_console:upgrade:subprocess',
    ),
    37 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Upgrade\\UpgradeCheckExtensionCompatibilityCommand',
      'runLevel' => 'buildEssentialSequence',
      'name' => 'upgrade:checkextensioncompatibility',
      'nameSpacedName' => 'typo3_console:upgrade:checkextensioncompatibility',
    ),
  ),
);