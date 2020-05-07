<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Helhum\\ConfigLoader\\CachedConfigurationLoader' => $vendorDir . '/helhum/config-loader/src/CachedConfigurationLoader.php',
    'Helhum\\ConfigLoader\\Config' => $vendorDir . '/helhum/config-loader/src/Config.php',
    'Helhum\\ConfigLoader\\ConfigurationExporter' => $vendorDir . '/helhum/config-loader/src/ConfigurationExporter.php',
    'Helhum\\ConfigLoader\\ConfigurationLoader' => $vendorDir . '/helhum/config-loader/src/ConfigurationLoader.php',
    'Helhum\\ConfigLoader\\ConfigurationLoaderInterface' => $vendorDir . '/helhum/config-loader/src/ConfigurationLoaderInterface.php',
    'Helhum\\ConfigLoader\\ConfigurationReaderFactory' => $vendorDir . '/helhum/config-loader/src/ConfigurationReaderFactory.php',
    'Helhum\\ConfigLoader\\InvalidArgumentException' => $vendorDir . '/helhum/config-loader/src/InvalidArgumentException.php',
    'Helhum\\ConfigLoader\\InvalidConfigurationFileException' => $vendorDir . '/helhum/config-loader/src/InvalidConfigurationFileException.php',
    'Helhum\\ConfigLoader\\PathDoesNotExistException' => $vendorDir . '/helhum/config-loader/src/PathDoesNotExistException.php',
    'Helhum\\ConfigLoader\\Processor\\ConfigProcessorInterface' => $vendorDir . '/helhum/config-loader/src/Processor/ConfigProcessorInterface.php',
    'Helhum\\ConfigLoader\\Processor\\PlaceholderValue' => $vendorDir . '/helhum/config-loader/src/Processor/PlaceholderValue.php',
    'Helhum\\ConfigLoader\\Processor\\Placeholder\\ConfigurationPlaceholder' => $vendorDir . '/helhum/config-loader/src/Processor/Placeholder/ConfigurationPlaceholder.php',
    'Helhum\\ConfigLoader\\Processor\\Placeholder\\ConstantPlaceholder' => $vendorDir . '/helhum/config-loader/src/Processor/Placeholder/ConstantPlaceholder.php',
    'Helhum\\ConfigLoader\\Processor\\Placeholder\\EnvironmentPlaceholder' => $vendorDir . '/helhum/config-loader/src/Processor/Placeholder/EnvironmentPlaceholder.php',
    'Helhum\\ConfigLoader\\Processor\\Placeholder\\GlobalsPlaceholder' => $vendorDir . '/helhum/config-loader/src/Processor/Placeholder/GlobalsPlaceholder.php',
    'Helhum\\ConfigLoader\\Processor\\Placeholder\\PhpExportablePlaceholderInterface' => $vendorDir . '/helhum/config-loader/src/Processor/Placeholder/PhpExportablePlaceholderInterface.php',
    'Helhum\\ConfigLoader\\Processor\\Placeholder\\PlaceholderCollection' => $vendorDir . '/helhum/config-loader/src/Processor/Placeholder/PlaceholderCollection.php',
    'Helhum\\ConfigLoader\\Processor\\Placeholder\\PlaceholderInterface' => $vendorDir . '/helhum/config-loader/src/Processor/Placeholder/PlaceholderInterface.php',
    'Helhum\\ConfigLoader\\Processor\\Placeholder\\PlaceholderMatch' => $vendorDir . '/helhum/config-loader/src/Processor/Placeholder/PlaceholderMatch.php',
    'Helhum\\ConfigLoader\\Processor\\Placeholder\\PlaceholderMatcher' => $vendorDir . '/helhum/config-loader/src/Processor/Placeholder/PlaceholderMatcher.php',
    'Helhum\\ConfigLoader\\Reader\\ClosureConfigReader' => $vendorDir . '/helhum/config-loader/src/Reader/ClosureConfigReader.php',
    'Helhum\\ConfigLoader\\Reader\\CollectionReader' => $vendorDir . '/helhum/config-loader/src/Reader/CollectionReader.php',
    'Helhum\\ConfigLoader\\Reader\\ConfigReaderInterface' => $vendorDir . '/helhum/config-loader/src/Reader/ConfigReaderInterface.php',
    'Helhum\\ConfigLoader\\Reader\\EnvironmentReader' => $vendorDir . '/helhum/config-loader/src/Reader/EnvironmentReader.php',
    'Helhum\\ConfigLoader\\Reader\\ExcludedConfigReader' => $vendorDir . '/helhum/config-loader/src/Reader/ExcludedConfigReader.php',
    'Helhum\\ConfigLoader\\Reader\\GlobFileReader' => $vendorDir . '/helhum/config-loader/src/Reader/GlobFileReader.php',
    'Helhum\\ConfigLoader\\Reader\\NestedConfigReader' => $vendorDir . '/helhum/config-loader/src/Reader/NestedConfigReader.php',
    'Helhum\\ConfigLoader\\Reader\\PeclYamlFileReader' => $vendorDir . '/helhum/config-loader/src/Reader/PeclYamlFileReader.php',
    'Helhum\\ConfigLoader\\Reader\\PhpFileReader' => $vendorDir . '/helhum/config-loader/src/Reader/PhpFileReader.php',
    'Helhum\\ConfigLoader\\Reader\\RootConfigFileReader' => $vendorDir . '/helhum/config-loader/src/Reader/RootConfigFileReader.php',
    'Helhum\\ConfigLoader\\Reader\\YamlFileReader' => $vendorDir . '/helhum/config-loader/src/Reader/YamlFileReader.php',
    'Helhum\\Typo3Console\\Command\\AbstractConvertedCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/AbstractConvertedCommand.php',
    'Helhum\\Typo3Console\\Command\\Backend\\CreateBackendAdminUserCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Backend/CreateBackendAdminUserCommand.php',
    'Helhum\\Typo3Console\\Command\\Backend\\LockBackendCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Backend/LockBackendCommand.php',
    'Helhum\\Typo3Console\\Command\\Backend\\LockBackendForEditorsCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Backend/LockBackendForEditorsCommand.php',
    'Helhum\\Typo3Console\\Command\\Backend\\UnlockBackendCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Backend/UnlockBackendCommand.php',
    'Helhum\\Typo3Console\\Command\\Backend\\UnlockBackendForEditorsCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Backend/UnlockBackendForEditorsCommand.php',
    'Helhum\\Typo3Console\\Command\\Cache\\CacheFlushCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Cache/CacheFlushCommand.php',
    'Helhum\\Typo3Console\\Command\\Cache\\CacheFlushGroupsCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Cache/CacheFlushGroupsCommand.php',
    'Helhum\\Typo3Console\\Command\\Cache\\CacheFlushTagsCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Cache/CacheFlushTagsCommand.php',
    'Helhum\\Typo3Console\\Command\\Cache\\CacheListGroupsCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Cache/CacheListGroupsCommand.php',
    'Helhum\\Typo3Console\\Command\\Configuration\\ConfigurationRemoveCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Configuration/ConfigurationRemoveCommand.php',
    'Helhum\\Typo3Console\\Command\\Configuration\\ConfigurationSetCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Configuration/ConfigurationSetCommand.php',
    'Helhum\\Typo3Console\\Command\\Configuration\\ConfigurationShowActiveCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Configuration/ConfigurationShowActiveCommand.php',
    'Helhum\\Typo3Console\\Command\\Configuration\\ConfigurationShowCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Configuration/ConfigurationShowCommand.php',
    'Helhum\\Typo3Console\\Command\\Configuration\\ConfigurationShowLocalCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Configuration/ConfigurationShowLocalCommand.php',
    'Helhum\\Typo3Console\\Command\\Database\\DatabaseExportCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Database/DatabaseExportCommand.php',
    'Helhum\\Typo3Console\\Command\\Database\\DatabaseImportCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Database/DatabaseImportCommand.php',
    'Helhum\\Typo3Console\\Command\\Database\\DatabaseUpdateSchemaCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Database/DatabaseUpdateSchemaCommand.php',
    'Helhum\\Typo3Console\\Command\\Extension\\DumpAutoloadCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Extension/DumpAutoloadCommand.php',
    'Helhum\\Typo3Console\\Command\\Extension\\ExtensionListCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Extension/ExtensionListCommand.php',
    'Helhum\\Typo3Console\\Command\\Extension\\ExtensionSetupActiveCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Extension/ExtensionSetupActiveCommand.php',
    'Helhum\\Typo3Console\\Command\\Extension\\ExtensionSetupCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Extension/ExtensionSetupCommand.php',
    'Helhum\\Typo3Console\\Command\\Extension\\ExtensionStateCommandsHelper' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Extension/ExtensionStateCommandsHelper.php',
    'Helhum\\Typo3Console\\Command\\Frontend\\FrontendRequestCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Frontend/FrontendRequestCommand.php',
    'Helhum\\Typo3Console\\Command\\Install\\InstallActionNeedsExecutionCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Install/InstallActionNeedsExecutionCommand.php',
    'Helhum\\Typo3Console\\Command\\Install\\InstallDatabaseConnectCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Install/InstallDatabaseConnectCommand.php',
    'Helhum\\Typo3Console\\Command\\Install\\InstallDatabaseDataCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Install/InstallDatabaseDataCommand.php',
    'Helhum\\Typo3Console\\Command\\Install\\InstallDatabaseSelectCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Install/InstallDatabaseSelectCommand.php',
    'Helhum\\Typo3Console\\Command\\Install\\InstallDefaultConfigurationCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Install/InstallDefaultConfigurationCommand.php',
    'Helhum\\Typo3Console\\Command\\Install\\InstallEnvironmentAndFoldersCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Install/InstallEnvironmentAndFoldersCommand.php',
    'Helhum\\Typo3Console\\Command\\Install\\InstallExtensionSetupIfPossibleCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Install/InstallExtensionSetupIfPossibleCommand.php',
    'Helhum\\Typo3Console\\Command\\Install\\InstallFixFolderStructureCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Install/InstallFixFolderStructureCommand.php',
    'Helhum\\Typo3Console\\Command\\Install\\InstallGeneratePackageStatesCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Install/InstallGeneratePackageStatesCommand.php',
    'Helhum\\Typo3Console\\Command\\Install\\InstallSetupCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Install/InstallSetupCommand.php',
    'Helhum\\Typo3Console\\Command\\RelatableCommandInterface' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/RelatableCommandInterface.php',
    'Helhum\\Typo3Console\\Command\\Upgrade\\UpgradeCheckExtensionCompatibilityCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Upgrade/UpgradeCheckExtensionCompatibilityCommand.php',
    'Helhum\\Typo3Console\\Command\\Upgrade\\UpgradeCheckExtensionConstraintsCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Upgrade/UpgradeCheckExtensionConstraintsCommand.php',
    'Helhum\\Typo3Console\\Command\\Upgrade\\UpgradeListCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Upgrade/UpgradeListCommand.php',
    'Helhum\\Typo3Console\\Command\\Upgrade\\UpgradePrepareCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Upgrade/UpgradePrepareCommand.php',
    'Helhum\\Typo3Console\\Command\\Upgrade\\UpgradeRunCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Command/Upgrade/UpgradeRunCommand.php',
    'Helhum\\Typo3Console\\CompatibilityClassLoader' => $vendorDir . '/helhum/typo3-console/Classes/Compatibility/CompatibilityClassLoader.php',
    'Helhum\\Typo3Console\\Composer\\InstallerScript\\PopulateCommandConfiguration' => $vendorDir . '/helhum/typo3-console/Classes/Console/Composer/InstallerScript/PopulateCommandConfiguration.php',
    'Helhum\\Typo3Console\\Composer\\InstallerScripts' => $vendorDir . '/helhum/typo3-console/Classes/Console/Composer/InstallerScripts.php',
    'Helhum\\Typo3Console\\Composer\\PopulateCommands' => $baseDir . '/Classes/Console/Composer/PopulateCommands.php',
    'Helhum\\Typo3Console\\Composer\\ScriptHelper' => $vendorDir . '/helhum/typo3-console/Classes/Console/Composer/ScriptHelper.php',
    'Helhum\\Typo3Console\\Core\\Booting\\RunLevel' => $vendorDir . '/helhum/typo3-console/Classes/Console/Core/Booting/RunLevel.php',
    'Helhum\\Typo3Console\\Core\\Booting\\Scripts' => $vendorDir . '/helhum/typo3-console/Classes/Console/Core/Booting/Scripts.php',
    'Helhum\\Typo3Console\\Core\\Booting\\Sequence' => $vendorDir . '/helhum/typo3-console/Classes/Console/Core/Booting/Sequence.php',
    'Helhum\\Typo3Console\\Core\\Booting\\Step' => $vendorDir . '/helhum/typo3-console/Classes/Console/Core/Booting/Step.php',
    'Helhum\\Typo3Console\\Core\\Booting\\StepFailedException' => $vendorDir . '/helhum/typo3-console/Classes/Console/Core/Booting/StepFailedException.php',
    'Helhum\\Typo3Console\\Core\\Kernel' => $vendorDir . '/helhum/typo3-console/Classes/Console/Core/Kernel.php',
    'Helhum\\Typo3Console\\Database\\Configuration\\ConnectionConfiguration' => $vendorDir . '/helhum/typo3-console/Classes/Console/Database/Configuration/ConnectionConfiguration.php',
    'Helhum\\Typo3Console\\Database\\Process\\MysqlCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Database/Process/MysqlCommand.php',
    'Helhum\\Typo3Console\\Database\\Schema\\SchemaUpdate' => $vendorDir . '/helhum/typo3-console/Classes/Console/Database/Schema/SchemaUpdate.php',
    'Helhum\\Typo3Console\\Database\\Schema\\SchemaUpdateInterface' => $vendorDir . '/helhum/typo3-console/Classes/Console/Database/Schema/SchemaUpdateInterface.php',
    'Helhum\\Typo3Console\\Database\\Schema\\SchemaUpdateResult' => $vendorDir . '/helhum/typo3-console/Classes/Console/Database/Schema/SchemaUpdateResult.php',
    'Helhum\\Typo3Console\\Database\\Schema\\SchemaUpdateResultRenderer' => $vendorDir . '/helhum/typo3-console/Classes/Console/Database/Schema/SchemaUpdateResultRenderer.php',
    'Helhum\\Typo3Console\\Database\\Schema\\SchemaUpdateType' => $vendorDir . '/helhum/typo3-console/Classes/Console/Database/Schema/SchemaUpdateType.php',
    'Helhum\\Typo3Console\\Database\\Schema\\TableMatcher' => $vendorDir . '/helhum/typo3-console/Classes/Console/Database/Schema/TableMatcher.php',
    'Helhum\\Typo3Console\\Error\\ErrorHandler' => $vendorDir . '/helhum/typo3-console/Classes/Console/Error/ErrorHandler.php',
    'Helhum\\Typo3Console\\Error\\ExceptionHandler' => $vendorDir . '/helhum/typo3-console/Classes/Console/Error/ExceptionHandler.php',
    'Helhum\\Typo3Console\\Error\\ExceptionRenderer' => $vendorDir . '/helhum/typo3-console/Classes/Console/Error/ExceptionRenderer.php',
    'Helhum\\Typo3Console\\Exception' => $vendorDir . '/helhum/typo3-console/Classes/Console/Exception.php',
    'Helhum\\Typo3Console\\Exception\\ArgumentValidationFailedException' => $vendorDir . '/helhum/typo3-console/Classes/Console/Exception/ArgumentValidationFailedException.php',
    'Helhum\\Typo3Console\\Exception\\CommandNotAvailableException' => $vendorDir . '/helhum/typo3-console/Classes/Console/Exception/CommandNotAvailableException.php',
    'Helhum\\Typo3Console\\Extension\\ExtensionCompatibilityCheck' => $vendorDir . '/helhum/typo3-console/Classes/Console/Extension/ExtensionCompatibilityCheck.php',
    'Helhum\\Typo3Console\\Extension\\ExtensionConfiguration' => $vendorDir . '/helhum/typo3-console/Classes/Console/Extension/ExtensionConfiguration.php',
    'Helhum\\Typo3Console\\Extension\\ExtensionConstraintCheck' => $vendorDir . '/helhum/typo3-console/Classes/Console/Extension/ExtensionConstraintCheck.php',
    'Helhum\\Typo3Console\\Extension\\ExtensionSetup' => $vendorDir . '/helhum/typo3-console/Classes/Console/Extension/ExtensionSetup.php',
    'Helhum\\Typo3Console\\Extension\\ExtensionSetupResultRenderer' => $vendorDir . '/helhum/typo3-console/Classes/Console/Extension/ExtensionSetupResultRenderer.php',
    'Helhum\\Typo3Console\\Hook\\ExtensionInstallation' => $baseDir . '/Classes/Console/Hook/ExtensionInstallation.php',
    'Helhum\\Typo3Console\\Install\\Action\\CommandsAction' => $vendorDir . '/helhum/typo3-console/Classes/Console/Install/Action/CommandsAction.php',
    'Helhum\\Typo3Console\\Install\\Action\\ExtensionSetupAction' => $vendorDir . '/helhum/typo3-console/Classes/Console/Install/Action/ExtensionSetupAction.php',
    'Helhum\\Typo3Console\\Install\\Action\\InstallActionDispatcher' => $vendorDir . '/helhum/typo3-console/Classes/Console/Install/Action/InstallActionDispatcher.php',
    'Helhum\\Typo3Console\\Install\\Action\\InstallActionFactory' => $vendorDir . '/helhum/typo3-console/Classes/Console/Install/Action/InstallActionFactory.php',
    'Helhum\\Typo3Console\\Install\\Action\\InstallActionInterface' => $vendorDir . '/helhum/typo3-console/Classes/Console/Install/Action/InstallActionInterface.php',
    'Helhum\\Typo3Console\\Install\\Action\\InstallationFailedException' => $vendorDir . '/helhum/typo3-console/Classes/Console/Install/Action/InstallationFailedException.php',
    'Helhum\\Typo3Console\\Install\\Action\\InteractiveActionArguments' => $vendorDir . '/helhum/typo3-console/Classes/Console/Install/Action/InteractiveActionArguments.php',
    'Helhum\\Typo3Console\\Install\\Action\\PrepareInstallAction' => $vendorDir . '/helhum/typo3-console/Classes/Console/Install/Action/PrepareInstallAction.php',
    'Helhum\\Typo3Console\\Install\\Action\\Typo3InstallAction' => $vendorDir . '/helhum/typo3-console/Classes/Console/Install/Action/Typo3InstallAction.php',
    'Helhum\\Typo3Console\\Install\\Action\\WriteWebServerConfigAction' => $vendorDir . '/helhum/typo3-console/Classes/Console/Install/Action/WriteWebServerConfigAction.php',
    'Helhum\\Typo3Console\\Install\\CliMessageRenderer' => $vendorDir . '/helhum/typo3-console/Classes/Console/Install/CliMessageRenderer.php',
    'Helhum\\Typo3Console\\Install\\FolderStructure\\ExtensionFactory' => $vendorDir . '/helhum/typo3-console/Classes/Console/Install/FolderStructure/ExtensionFactory.php',
    'Helhum\\Typo3Console\\Install\\InstallStepActionExecutor' => $vendorDir . '/helhum/typo3-console/Classes/Console/Install/InstallStepActionExecutor.php',
    'Helhum\\Typo3Console\\Install\\InstallStepResponse' => $vendorDir . '/helhum/typo3-console/Classes/Console/Install/InstallStepResponse.php',
    'Helhum\\Typo3Console\\Install\\PackageStatesGenerator' => $vendorDir . '/helhum/typo3-console/Classes/Console/Install/PackageStatesGenerator.php',
    'Helhum\\Typo3Console\\Install\\StepsConfig' => $vendorDir . '/helhum/typo3-console/Classes/Console/Install/StepsConfig.php',
    'Helhum\\Typo3Console\\Install\\Upgrade\\SilentConfigurationUpgrade' => $vendorDir . '/helhum/typo3-console/Classes/Console/Install/Upgrade/SilentConfigurationUpgrade.php',
    'Helhum\\Typo3Console\\Install\\Upgrade\\UpgradeHandling' => $vendorDir . '/helhum/typo3-console/Classes/Console/Install/Upgrade/UpgradeHandling.php',
    'Helhum\\Typo3Console\\Install\\Upgrade\\UpgradeWizardExecutor' => $vendorDir . '/helhum/typo3-console/Classes/Console/Install/Upgrade/UpgradeWizardExecutor.php',
    'Helhum\\Typo3Console\\Install\\Upgrade\\UpgradeWizardFactory' => $vendorDir . '/helhum/typo3-console/Classes/Console/Install/Upgrade/UpgradeWizardFactory.php',
    'Helhum\\Typo3Console\\Install\\Upgrade\\UpgradeWizardList' => $vendorDir . '/helhum/typo3-console/Classes/Console/Install/Upgrade/UpgradeWizardList.php',
    'Helhum\\Typo3Console\\Install\\Upgrade\\UpgradeWizardListRenderer' => $vendorDir . '/helhum/typo3-console/Classes/Console/Install/Upgrade/UpgradeWizardListRenderer.php',
    'Helhum\\Typo3Console\\Install\\Upgrade\\UpgradeWizardResult' => $vendorDir . '/helhum/typo3-console/Classes/Console/Install/Upgrade/UpgradeWizardResult.php',
    'Helhum\\Typo3Console\\Install\\Upgrade\\UpgradeWizardResultRenderer' => $vendorDir . '/helhum/typo3-console/Classes/Console/Install/Upgrade/UpgradeWizardResultRenderer.php',
    'Helhum\\Typo3Console\\Log\\Writer\\ConsoleWriter' => $vendorDir . '/helhum/typo3-console/Classes/Console/Log/Writer/ConsoleWriter.php',
    'Helhum\\Typo3Console\\Mvc\\Cli\\CommandCollection' => $vendorDir . '/helhum/typo3-console/Classes/Console/Mvc/Cli/CommandCollection.php',
    'Helhum\\Typo3Console\\Mvc\\Cli\\CommandConfiguration' => $vendorDir . '/helhum/typo3-console/Classes/Console/Mvc/Cli/CommandConfiguration.php',
    'Helhum\\Typo3Console\\Mvc\\Cli\\CommandDispatcher' => $vendorDir . '/helhum/typo3-console/Classes/Console/Mvc/Cli/CommandDispatcher.php',
    'Helhum\\Typo3Console\\Mvc\\Cli\\CommandLoaderCollection' => $vendorDir . '/helhum/typo3-console/Classes/Console/Mvc/Cli/CommandLoaderCollection.php',
    'Helhum\\Typo3Console\\Mvc\\Cli\\ConsoleOutput' => $vendorDir . '/helhum/typo3-console/Classes/Console/Mvc/Cli/ConsoleOutput.php',
    'Helhum\\Typo3Console\\Mvc\\Cli\\FailedSubProcessCommandException' => $vendorDir . '/helhum/typo3-console/Classes/Console/Mvc/Cli/FailedSubProcessCommandException.php',
    'Helhum\\Typo3Console\\Mvc\\Cli\\FilteredCommandLoaderCollection' => $vendorDir . '/helhum/typo3-console/Classes/Console/Mvc/Cli/FilteredCommandLoaderCollection.php',
    'Helhum\\Typo3Console\\Mvc\\Cli\\InteractiveProcess' => $vendorDir . '/helhum/typo3-console/Classes/Console/Mvc/Cli/InteractiveProcess.php',
    'Helhum\\Typo3Console\\Mvc\\Cli\\SubProcessException' => $vendorDir . '/helhum/typo3-console/Classes/Console/Mvc/Cli/SubProcessException.php',
    'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Application' => $vendorDir . '/helhum/typo3-console/Classes/Console/Mvc/Cli/Symfony/Application.php',
    'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\HelpCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Mvc/Cli/Symfony/Command/HelpCommand.php',
    'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\ListCommand' => $vendorDir . '/helhum/typo3-console/Classes/Console/Mvc/Cli/Symfony/Command/ListCommand.php',
    'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Descriptor\\TextDescriptor' => $vendorDir . '/helhum/typo3-console/Classes/Console/Mvc/Cli/Symfony/Descriptor/TextDescriptor.php',
    'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Input\\ArgvInput' => $vendorDir . '/helhum/typo3-console/Classes/Console/Mvc/Cli/Symfony/Input/ArgvInput.php',
    'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Output\\TrackableOutput' => $vendorDir . '/helhum/typo3-console/Classes/Console/Mvc/Cli/Symfony/Output/TrackableOutput.php',
    'Helhum\\Typo3Console\\Package\\UncachedPackageManager' => $vendorDir . '/helhum/typo3-console/Classes/Console/Package/UncachedPackageManager.php',
    'Helhum\\Typo3Console\\Property\\TypeConverter\\ArrayConverter' => $vendorDir . '/helhum/typo3-console/Classes/Console/Property/TypeConverter/ArrayConverter.php',
    'Helhum\\Typo3Console\\Service\\CacheLowLevelCleaner' => $vendorDir . '/helhum/typo3-console/Classes/Console/Service/CacheLowLevelCleaner.php',
    'Helhum\\Typo3Console\\Service\\CacheService' => $vendorDir . '/helhum/typo3-console/Classes/Console/Service/CacheService.php',
    'Helhum\\Typo3Console\\Service\\Configuration\\ConfigurationService' => $vendorDir . '/helhum/typo3-console/Classes/Console/Service/Configuration/ConfigurationService.php',
    'Helhum\\Typo3Console\\Service\\Configuration\\ConfigurationValueNotFoundException' => $vendorDir . '/helhum/typo3-console/Classes/Console/Service/Configuration/ConfigurationValueNotFoundException.php',
    'Helhum\\Typo3Console\\Service\\Configuration\\ConsoleRenderer\\ConsoleRenderer' => $vendorDir . '/helhum/typo3-console/Classes/Console/Service/Configuration/ConsoleRenderer/ConsoleRenderer.php',
    'Helhum\\Typo3Console\\Service\\Configuration\\ConsoleRenderer\\DiffConsoleRenderer' => $vendorDir . '/helhum/typo3-console/Classes/Console/Service/Configuration/ConsoleRenderer/DiffConsoleRenderer.php',
    'Helhum\\Typo3Console\\Service\\Configuration\\TypesAreNotConvertibleException' => $vendorDir . '/helhum/typo3-console/Classes/Console/Service/Configuration/TypesAreNotConvertibleException.php',
    'Helhum\\Typo3Console\\Service\\Database\\Exception' => $vendorDir . '/helhum/typo3-console/Classes/Console/Service/Database/Exception.php',
    'Helhum\\Typo3Console\\Service\\Database\\SchemaService' => $vendorDir . '/helhum/typo3-console/Classes/Console/Service/Database/SchemaService.php',
    'Helhum\\Typo3Console\\Service\\Exception' => $vendorDir . '/helhum/typo3-console/Classes/Console/Service/Exception.php',
    'JsonException' => $vendorDir . '/symfony/polyfill-php73/Resources/stubs/JsonException.php',
    'Psr\\Container\\ContainerExceptionInterface' => $vendorDir . '/psr/container/src/ContainerExceptionInterface.php',
    'Psr\\Container\\ContainerInterface' => $vendorDir . '/psr/container/src/ContainerInterface.php',
    'Psr\\Container\\NotFoundExceptionInterface' => $vendorDir . '/psr/container/src/NotFoundExceptionInterface.php',
    'Symfony\\Component\\Console\\Application' => $vendorDir . '/symfony/console/Application.php',
    'Symfony\\Component\\Console\\CommandLoader\\CommandLoaderInterface' => $vendorDir . '/symfony/console/CommandLoader/CommandLoaderInterface.php',
    'Symfony\\Component\\Console\\CommandLoader\\ContainerCommandLoader' => $vendorDir . '/symfony/console/CommandLoader/ContainerCommandLoader.php',
    'Symfony\\Component\\Console\\CommandLoader\\FactoryCommandLoader' => $vendorDir . '/symfony/console/CommandLoader/FactoryCommandLoader.php',
    'Symfony\\Component\\Console\\Command\\Command' => $vendorDir . '/symfony/console/Command/Command.php',
    'Symfony\\Component\\Console\\Command\\HelpCommand' => $vendorDir . '/symfony/console/Command/HelpCommand.php',
    'Symfony\\Component\\Console\\Command\\ListCommand' => $vendorDir . '/symfony/console/Command/ListCommand.php',
    'Symfony\\Component\\Console\\Command\\LockableTrait' => $vendorDir . '/symfony/console/Command/LockableTrait.php',
    'Symfony\\Component\\Console\\ConsoleEvents' => $vendorDir . '/symfony/console/ConsoleEvents.php',
    'Symfony\\Component\\Console\\DependencyInjection\\AddConsoleCommandPass' => $vendorDir . '/symfony/console/DependencyInjection/AddConsoleCommandPass.php',
    'Symfony\\Component\\Console\\Descriptor\\ApplicationDescription' => $vendorDir . '/symfony/console/Descriptor/ApplicationDescription.php',
    'Symfony\\Component\\Console\\Descriptor\\Descriptor' => $vendorDir . '/symfony/console/Descriptor/Descriptor.php',
    'Symfony\\Component\\Console\\Descriptor\\DescriptorInterface' => $vendorDir . '/symfony/console/Descriptor/DescriptorInterface.php',
    'Symfony\\Component\\Console\\Descriptor\\JsonDescriptor' => $vendorDir . '/symfony/console/Descriptor/JsonDescriptor.php',
    'Symfony\\Component\\Console\\Descriptor\\MarkdownDescriptor' => $vendorDir . '/symfony/console/Descriptor/MarkdownDescriptor.php',
    'Symfony\\Component\\Console\\Descriptor\\TextDescriptor' => $vendorDir . '/symfony/console/Descriptor/TextDescriptor.php',
    'Symfony\\Component\\Console\\Descriptor\\XmlDescriptor' => $vendorDir . '/symfony/console/Descriptor/XmlDescriptor.php',
    'Symfony\\Component\\Console\\EventListener\\ErrorListener' => $vendorDir . '/symfony/console/EventListener/ErrorListener.php',
    'Symfony\\Component\\Console\\Event\\ConsoleCommandEvent' => $vendorDir . '/symfony/console/Event/ConsoleCommandEvent.php',
    'Symfony\\Component\\Console\\Event\\ConsoleErrorEvent' => $vendorDir . '/symfony/console/Event/ConsoleErrorEvent.php',
    'Symfony\\Component\\Console\\Event\\ConsoleEvent' => $vendorDir . '/symfony/console/Event/ConsoleEvent.php',
    'Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent' => $vendorDir . '/symfony/console/Event/ConsoleTerminateEvent.php',
    'Symfony\\Component\\Console\\Exception\\CommandNotFoundException' => $vendorDir . '/symfony/console/Exception/CommandNotFoundException.php',
    'Symfony\\Component\\Console\\Exception\\ExceptionInterface' => $vendorDir . '/symfony/console/Exception/ExceptionInterface.php',
    'Symfony\\Component\\Console\\Exception\\InvalidArgumentException' => $vendorDir . '/symfony/console/Exception/InvalidArgumentException.php',
    'Symfony\\Component\\Console\\Exception\\InvalidOptionException' => $vendorDir . '/symfony/console/Exception/InvalidOptionException.php',
    'Symfony\\Component\\Console\\Exception\\LogicException' => $vendorDir . '/symfony/console/Exception/LogicException.php',
    'Symfony\\Component\\Console\\Exception\\MissingInputException' => $vendorDir . '/symfony/console/Exception/MissingInputException.php',
    'Symfony\\Component\\Console\\Exception\\NamespaceNotFoundException' => $vendorDir . '/symfony/console/Exception/NamespaceNotFoundException.php',
    'Symfony\\Component\\Console\\Exception\\RuntimeException' => $vendorDir . '/symfony/console/Exception/RuntimeException.php',
    'Symfony\\Component\\Console\\Formatter\\OutputFormatter' => $vendorDir . '/symfony/console/Formatter/OutputFormatter.php',
    'Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface' => $vendorDir . '/symfony/console/Formatter/OutputFormatterInterface.php',
    'Symfony\\Component\\Console\\Formatter\\OutputFormatterStyle' => $vendorDir . '/symfony/console/Formatter/OutputFormatterStyle.php',
    'Symfony\\Component\\Console\\Formatter\\OutputFormatterStyleInterface' => $vendorDir . '/symfony/console/Formatter/OutputFormatterStyleInterface.php',
    'Symfony\\Component\\Console\\Formatter\\OutputFormatterStyleStack' => $vendorDir . '/symfony/console/Formatter/OutputFormatterStyleStack.php',
    'Symfony\\Component\\Console\\Formatter\\WrappableOutputFormatterInterface' => $vendorDir . '/symfony/console/Formatter/WrappableOutputFormatterInterface.php',
    'Symfony\\Component\\Console\\Helper\\DebugFormatterHelper' => $vendorDir . '/symfony/console/Helper/DebugFormatterHelper.php',
    'Symfony\\Component\\Console\\Helper\\DescriptorHelper' => $vendorDir . '/symfony/console/Helper/DescriptorHelper.php',
    'Symfony\\Component\\Console\\Helper\\Dumper' => $vendorDir . '/symfony/console/Helper/Dumper.php',
    'Symfony\\Component\\Console\\Helper\\FormatterHelper' => $vendorDir . '/symfony/console/Helper/FormatterHelper.php',
    'Symfony\\Component\\Console\\Helper\\Helper' => $vendorDir . '/symfony/console/Helper/Helper.php',
    'Symfony\\Component\\Console\\Helper\\HelperInterface' => $vendorDir . '/symfony/console/Helper/HelperInterface.php',
    'Symfony\\Component\\Console\\Helper\\HelperSet' => $vendorDir . '/symfony/console/Helper/HelperSet.php',
    'Symfony\\Component\\Console\\Helper\\InputAwareHelper' => $vendorDir . '/symfony/console/Helper/InputAwareHelper.php',
    'Symfony\\Component\\Console\\Helper\\ProcessHelper' => $vendorDir . '/symfony/console/Helper/ProcessHelper.php',
    'Symfony\\Component\\Console\\Helper\\ProgressBar' => $vendorDir . '/symfony/console/Helper/ProgressBar.php',
    'Symfony\\Component\\Console\\Helper\\ProgressIndicator' => $vendorDir . '/symfony/console/Helper/ProgressIndicator.php',
    'Symfony\\Component\\Console\\Helper\\QuestionHelper' => $vendorDir . '/symfony/console/Helper/QuestionHelper.php',
    'Symfony\\Component\\Console\\Helper\\SymfonyQuestionHelper' => $vendorDir . '/symfony/console/Helper/SymfonyQuestionHelper.php',
    'Symfony\\Component\\Console\\Helper\\Table' => $vendorDir . '/symfony/console/Helper/Table.php',
    'Symfony\\Component\\Console\\Helper\\TableCell' => $vendorDir . '/symfony/console/Helper/TableCell.php',
    'Symfony\\Component\\Console\\Helper\\TableRows' => $vendorDir . '/symfony/console/Helper/TableRows.php',
    'Symfony\\Component\\Console\\Helper\\TableSeparator' => $vendorDir . '/symfony/console/Helper/TableSeparator.php',
    'Symfony\\Component\\Console\\Helper\\TableStyle' => $vendorDir . '/symfony/console/Helper/TableStyle.php',
    'Symfony\\Component\\Console\\Input\\ArgvInput' => $vendorDir . '/symfony/console/Input/ArgvInput.php',
    'Symfony\\Component\\Console\\Input\\ArrayInput' => $vendorDir . '/symfony/console/Input/ArrayInput.php',
    'Symfony\\Component\\Console\\Input\\Input' => $vendorDir . '/symfony/console/Input/Input.php',
    'Symfony\\Component\\Console\\Input\\InputArgument' => $vendorDir . '/symfony/console/Input/InputArgument.php',
    'Symfony\\Component\\Console\\Input\\InputAwareInterface' => $vendorDir . '/symfony/console/Input/InputAwareInterface.php',
    'Symfony\\Component\\Console\\Input\\InputDefinition' => $vendorDir . '/symfony/console/Input/InputDefinition.php',
    'Symfony\\Component\\Console\\Input\\InputInterface' => $vendorDir . '/symfony/console/Input/InputInterface.php',
    'Symfony\\Component\\Console\\Input\\InputOption' => $vendorDir . '/symfony/console/Input/InputOption.php',
    'Symfony\\Component\\Console\\Input\\StreamableInputInterface' => $vendorDir . '/symfony/console/Input/StreamableInputInterface.php',
    'Symfony\\Component\\Console\\Input\\StringInput' => $vendorDir . '/symfony/console/Input/StringInput.php',
    'Symfony\\Component\\Console\\Logger\\ConsoleLogger' => $vendorDir . '/symfony/console/Logger/ConsoleLogger.php',
    'Symfony\\Component\\Console\\Output\\BufferedOutput' => $vendorDir . '/symfony/console/Output/BufferedOutput.php',
    'Symfony\\Component\\Console\\Output\\ConsoleOutput' => $vendorDir . '/symfony/console/Output/ConsoleOutput.php',
    'Symfony\\Component\\Console\\Output\\ConsoleOutputInterface' => $vendorDir . '/symfony/console/Output/ConsoleOutputInterface.php',
    'Symfony\\Component\\Console\\Output\\ConsoleSectionOutput' => $vendorDir . '/symfony/console/Output/ConsoleSectionOutput.php',
    'Symfony\\Component\\Console\\Output\\NullOutput' => $vendorDir . '/symfony/console/Output/NullOutput.php',
    'Symfony\\Component\\Console\\Output\\Output' => $vendorDir . '/symfony/console/Output/Output.php',
    'Symfony\\Component\\Console\\Output\\OutputInterface' => $vendorDir . '/symfony/console/Output/OutputInterface.php',
    'Symfony\\Component\\Console\\Output\\StreamOutput' => $vendorDir . '/symfony/console/Output/StreamOutput.php',
    'Symfony\\Component\\Console\\Question\\ChoiceQuestion' => $vendorDir . '/symfony/console/Question/ChoiceQuestion.php',
    'Symfony\\Component\\Console\\Question\\ConfirmationQuestion' => $vendorDir . '/symfony/console/Question/ConfirmationQuestion.php',
    'Symfony\\Component\\Console\\Question\\Question' => $vendorDir . '/symfony/console/Question/Question.php',
    'Symfony\\Component\\Console\\Style\\OutputStyle' => $vendorDir . '/symfony/console/Style/OutputStyle.php',
    'Symfony\\Component\\Console\\Style\\StyleInterface' => $vendorDir . '/symfony/console/Style/StyleInterface.php',
    'Symfony\\Component\\Console\\Style\\SymfonyStyle' => $vendorDir . '/symfony/console/Style/SymfonyStyle.php',
    'Symfony\\Component\\Console\\Terminal' => $vendorDir . '/symfony/console/Terminal.php',
    'Symfony\\Component\\Console\\Tester\\ApplicationTester' => $vendorDir . '/symfony/console/Tester/ApplicationTester.php',
    'Symfony\\Component\\Console\\Tester\\CommandTester' => $vendorDir . '/symfony/console/Tester/CommandTester.php',
    'Symfony\\Component\\Console\\Tester\\TesterTrait' => $vendorDir . '/symfony/console/Tester/TesterTrait.php',
    'Symfony\\Component\\Process\\Exception\\ExceptionInterface' => $vendorDir . '/symfony/process/Exception/ExceptionInterface.php',
    'Symfony\\Component\\Process\\Exception\\InvalidArgumentException' => $vendorDir . '/symfony/process/Exception/InvalidArgumentException.php',
    'Symfony\\Component\\Process\\Exception\\LogicException' => $vendorDir . '/symfony/process/Exception/LogicException.php',
    'Symfony\\Component\\Process\\Exception\\ProcessFailedException' => $vendorDir . '/symfony/process/Exception/ProcessFailedException.php',
    'Symfony\\Component\\Process\\Exception\\ProcessSignaledException' => $vendorDir . '/symfony/process/Exception/ProcessSignaledException.php',
    'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException' => $vendorDir . '/symfony/process/Exception/ProcessTimedOutException.php',
    'Symfony\\Component\\Process\\Exception\\RuntimeException' => $vendorDir . '/symfony/process/Exception/RuntimeException.php',
    'Symfony\\Component\\Process\\ExecutableFinder' => $vendorDir . '/symfony/process/ExecutableFinder.php',
    'Symfony\\Component\\Process\\InputStream' => $vendorDir . '/symfony/process/InputStream.php',
    'Symfony\\Component\\Process\\PhpExecutableFinder' => $vendorDir . '/symfony/process/PhpExecutableFinder.php',
    'Symfony\\Component\\Process\\PhpProcess' => $vendorDir . '/symfony/process/PhpProcess.php',
    'Symfony\\Component\\Process\\Pipes\\AbstractPipes' => $vendorDir . '/symfony/process/Pipes/AbstractPipes.php',
    'Symfony\\Component\\Process\\Pipes\\PipesInterface' => $vendorDir . '/symfony/process/Pipes/PipesInterface.php',
    'Symfony\\Component\\Process\\Pipes\\UnixPipes' => $vendorDir . '/symfony/process/Pipes/UnixPipes.php',
    'Symfony\\Component\\Process\\Pipes\\WindowsPipes' => $vendorDir . '/symfony/process/Pipes/WindowsPipes.php',
    'Symfony\\Component\\Process\\Process' => $vendorDir . '/symfony/process/Process.php',
    'Symfony\\Component\\Process\\ProcessUtils' => $vendorDir . '/symfony/process/ProcessUtils.php',
    'Symfony\\Contracts\\Service\\ResetInterface' => $vendorDir . '/symfony/service-contracts/ResetInterface.php',
    'Symfony\\Contracts\\Service\\ServiceLocatorTrait' => $vendorDir . '/symfony/service-contracts/ServiceLocatorTrait.php',
    'Symfony\\Contracts\\Service\\ServiceProviderInterface' => $vendorDir . '/symfony/service-contracts/ServiceProviderInterface.php',
    'Symfony\\Contracts\\Service\\ServiceSubscriberInterface' => $vendorDir . '/symfony/service-contracts/ServiceSubscriberInterface.php',
    'Symfony\\Contracts\\Service\\ServiceSubscriberTrait' => $vendorDir . '/symfony/service-contracts/ServiceSubscriberTrait.php',
    'Symfony\\Contracts\\Service\\Test\\ServiceLocatorTest' => $vendorDir . '/symfony/service-contracts/Test/ServiceLocatorTest.php',
    'Symfony\\Polyfill\\Php73\\Php73' => $vendorDir . '/symfony/polyfill-php73/Php73.php',
);
