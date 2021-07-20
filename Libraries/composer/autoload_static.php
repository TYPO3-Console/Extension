<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7db286f40525b4cd41aba2cd425aa099
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Process\\' => 26,
        ),
        'H' => 
        array (
            'Helhum\\Typo3Console\\' => 20,
            'Helhum\\ConfigLoader\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Helhum\\Typo3Console\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Classes/Console',
            1 => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console',
            2 => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Compatibility',
        ),
        'Helhum\\ConfigLoader\\' => 
        array (
            0 => __DIR__ . '/..' . '/helhum/config-loader/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Helhum\\ConfigLoader\\CachedConfigurationLoader' => __DIR__ . '/..' . '/helhum/config-loader/src/CachedConfigurationLoader.php',
        'Helhum\\ConfigLoader\\Config' => __DIR__ . '/..' . '/helhum/config-loader/src/Config.php',
        'Helhum\\ConfigLoader\\ConfigurationExporter' => __DIR__ . '/..' . '/helhum/config-loader/src/ConfigurationExporter.php',
        'Helhum\\ConfigLoader\\ConfigurationLoader' => __DIR__ . '/..' . '/helhum/config-loader/src/ConfigurationLoader.php',
        'Helhum\\ConfigLoader\\ConfigurationLoaderInterface' => __DIR__ . '/..' . '/helhum/config-loader/src/ConfigurationLoaderInterface.php',
        'Helhum\\ConfigLoader\\ConfigurationReaderFactory' => __DIR__ . '/..' . '/helhum/config-loader/src/ConfigurationReaderFactory.php',
        'Helhum\\ConfigLoader\\InvalidArgumentException' => __DIR__ . '/..' . '/helhum/config-loader/src/InvalidArgumentException.php',
        'Helhum\\ConfigLoader\\InvalidConfigurationFileException' => __DIR__ . '/..' . '/helhum/config-loader/src/InvalidConfigurationFileException.php',
        'Helhum\\ConfigLoader\\PathDoesNotExistException' => __DIR__ . '/..' . '/helhum/config-loader/src/PathDoesNotExistException.php',
        'Helhum\\ConfigLoader\\Processor\\ConfigProcessorInterface' => __DIR__ . '/..' . '/helhum/config-loader/src/Processor/ConfigProcessorInterface.php',
        'Helhum\\ConfigLoader\\Processor\\PlaceholderValue' => __DIR__ . '/..' . '/helhum/config-loader/src/Processor/PlaceholderValue.php',
        'Helhum\\ConfigLoader\\Processor\\Placeholder\\ConfigurationPlaceholder' => __DIR__ . '/..' . '/helhum/config-loader/src/Processor/Placeholder/ConfigurationPlaceholder.php',
        'Helhum\\ConfigLoader\\Processor\\Placeholder\\ConstantPlaceholder' => __DIR__ . '/..' . '/helhum/config-loader/src/Processor/Placeholder/ConstantPlaceholder.php',
        'Helhum\\ConfigLoader\\Processor\\Placeholder\\EnvironmentPlaceholder' => __DIR__ . '/..' . '/helhum/config-loader/src/Processor/Placeholder/EnvironmentPlaceholder.php',
        'Helhum\\ConfigLoader\\Processor\\Placeholder\\GlobalsPlaceholder' => __DIR__ . '/..' . '/helhum/config-loader/src/Processor/Placeholder/GlobalsPlaceholder.php',
        'Helhum\\ConfigLoader\\Processor\\Placeholder\\PhpExportablePlaceholderInterface' => __DIR__ . '/..' . '/helhum/config-loader/src/Processor/Placeholder/PhpExportablePlaceholderInterface.php',
        'Helhum\\ConfigLoader\\Processor\\Placeholder\\PlaceholderCollection' => __DIR__ . '/..' . '/helhum/config-loader/src/Processor/Placeholder/PlaceholderCollection.php',
        'Helhum\\ConfigLoader\\Processor\\Placeholder\\PlaceholderInterface' => __DIR__ . '/..' . '/helhum/config-loader/src/Processor/Placeholder/PlaceholderInterface.php',
        'Helhum\\ConfigLoader\\Processor\\Placeholder\\PlaceholderMatch' => __DIR__ . '/..' . '/helhum/config-loader/src/Processor/Placeholder/PlaceholderMatch.php',
        'Helhum\\ConfigLoader\\Processor\\Placeholder\\PlaceholderMatcher' => __DIR__ . '/..' . '/helhum/config-loader/src/Processor/Placeholder/PlaceholderMatcher.php',
        'Helhum\\ConfigLoader\\Reader\\ClosureConfigReader' => __DIR__ . '/..' . '/helhum/config-loader/src/Reader/ClosureConfigReader.php',
        'Helhum\\ConfigLoader\\Reader\\CollectionReader' => __DIR__ . '/..' . '/helhum/config-loader/src/Reader/CollectionReader.php',
        'Helhum\\ConfigLoader\\Reader\\ConfigReaderInterface' => __DIR__ . '/..' . '/helhum/config-loader/src/Reader/ConfigReaderInterface.php',
        'Helhum\\ConfigLoader\\Reader\\EnvironmentReader' => __DIR__ . '/..' . '/helhum/config-loader/src/Reader/EnvironmentReader.php',
        'Helhum\\ConfigLoader\\Reader\\ExcludedConfigReader' => __DIR__ . '/..' . '/helhum/config-loader/src/Reader/ExcludedConfigReader.php',
        'Helhum\\ConfigLoader\\Reader\\GlobFileReader' => __DIR__ . '/..' . '/helhum/config-loader/src/Reader/GlobFileReader.php',
        'Helhum\\ConfigLoader\\Reader\\NestedConfigReader' => __DIR__ . '/..' . '/helhum/config-loader/src/Reader/NestedConfigReader.php',
        'Helhum\\ConfigLoader\\Reader\\PeclYamlFileReader' => __DIR__ . '/..' . '/helhum/config-loader/src/Reader/PeclYamlFileReader.php',
        'Helhum\\ConfigLoader\\Reader\\PhpFileReader' => __DIR__ . '/..' . '/helhum/config-loader/src/Reader/PhpFileReader.php',
        'Helhum\\ConfigLoader\\Reader\\RootConfigFileReader' => __DIR__ . '/..' . '/helhum/config-loader/src/Reader/RootConfigFileReader.php',
        'Helhum\\ConfigLoader\\Reader\\YamlFileReader' => __DIR__ . '/..' . '/helhum/config-loader/src/Reader/YamlFileReader.php',
        'Helhum\\Typo3Console\\Command\\AbstractConvertedCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/AbstractConvertedCommand.php',
        'Helhum\\Typo3Console\\Command\\Backend\\CreateBackendAdminUserCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Backend/CreateBackendAdminUserCommand.php',
        'Helhum\\Typo3Console\\Command\\Backend\\LockBackendCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Backend/LockBackendCommand.php',
        'Helhum\\Typo3Console\\Command\\Backend\\LockBackendForEditorsCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Backend/LockBackendForEditorsCommand.php',
        'Helhum\\Typo3Console\\Command\\Backend\\UnlockBackendCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Backend/UnlockBackendCommand.php',
        'Helhum\\Typo3Console\\Command\\Backend\\UnlockBackendForEditorsCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Backend/UnlockBackendForEditorsCommand.php',
        'Helhum\\Typo3Console\\Command\\Cache\\CacheFlushCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Cache/CacheFlushCommand.php',
        'Helhum\\Typo3Console\\Command\\Cache\\CacheFlushGroupsCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Cache/CacheFlushGroupsCommand.php',
        'Helhum\\Typo3Console\\Command\\Cache\\CacheFlushTagsCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Cache/CacheFlushTagsCommand.php',
        'Helhum\\Typo3Console\\Command\\Cache\\CacheListGroupsCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Cache/CacheListGroupsCommand.php',
        'Helhum\\Typo3Console\\Command\\Configuration\\ConfigurationRemoveCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Configuration/ConfigurationRemoveCommand.php',
        'Helhum\\Typo3Console\\Command\\Configuration\\ConfigurationSetCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Configuration/ConfigurationSetCommand.php',
        'Helhum\\Typo3Console\\Command\\Configuration\\ConfigurationShowActiveCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Configuration/ConfigurationShowActiveCommand.php',
        'Helhum\\Typo3Console\\Command\\Configuration\\ConfigurationShowCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Configuration/ConfigurationShowCommand.php',
        'Helhum\\Typo3Console\\Command\\Configuration\\ConfigurationShowLocalCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Configuration/ConfigurationShowLocalCommand.php',
        'Helhum\\Typo3Console\\Command\\Database\\DatabaseExportCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Database/DatabaseExportCommand.php',
        'Helhum\\Typo3Console\\Command\\Database\\DatabaseImportCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Database/DatabaseImportCommand.php',
        'Helhum\\Typo3Console\\Command\\Database\\DatabaseUpdateSchemaCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Database/DatabaseUpdateSchemaCommand.php',
        'Helhum\\Typo3Console\\Command\\Extension\\DumpAutoloadCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Extension/DumpAutoloadCommand.php',
        'Helhum\\Typo3Console\\Command\\Extension\\ExtensionListCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Extension/ExtensionListCommand.php',
        'Helhum\\Typo3Console\\Command\\Extension\\ExtensionSetupActiveCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Extension/ExtensionSetupActiveCommand.php',
        'Helhum\\Typo3Console\\Command\\Extension\\ExtensionSetupCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Extension/ExtensionSetupCommand.php',
        'Helhum\\Typo3Console\\Command\\Extension\\ExtensionStateCommandsHelper' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Extension/ExtensionStateCommandsHelper.php',
        'Helhum\\Typo3Console\\Command\\Frontend\\FrontendRequestCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Frontend/FrontendRequestCommand.php',
        'Helhum\\Typo3Console\\Command\\InstallTool\\LockInstallToolCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/InstallTool/LockInstallToolCommand.php',
        'Helhum\\Typo3Console\\Command\\InstallTool\\UnlockInstallToolCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/InstallTool/UnlockInstallToolCommand.php',
        'Helhum\\Typo3Console\\Command\\Install\\InstallActionNeedsExecutionCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Install/InstallActionNeedsExecutionCommand.php',
        'Helhum\\Typo3Console\\Command\\Install\\InstallDatabaseConnectCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Install/InstallDatabaseConnectCommand.php',
        'Helhum\\Typo3Console\\Command\\Install\\InstallDatabaseDataCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Install/InstallDatabaseDataCommand.php',
        'Helhum\\Typo3Console\\Command\\Install\\InstallDatabaseSelectCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Install/InstallDatabaseSelectCommand.php',
        'Helhum\\Typo3Console\\Command\\Install\\InstallDefaultConfigurationCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Install/InstallDefaultConfigurationCommand.php',
        'Helhum\\Typo3Console\\Command\\Install\\InstallEnvironmentAndFoldersCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Install/InstallEnvironmentAndFoldersCommand.php',
        'Helhum\\Typo3Console\\Command\\Install\\InstallExtensionSetupIfPossibleCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Install/InstallExtensionSetupIfPossibleCommand.php',
        'Helhum\\Typo3Console\\Command\\Install\\InstallFixFolderStructureCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Install/InstallFixFolderStructureCommand.php',
        'Helhum\\Typo3Console\\Command\\Install\\InstallGeneratePackageStatesCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Install/InstallGeneratePackageStatesCommand.php',
        'Helhum\\Typo3Console\\Command\\Install\\InstallSetupCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Install/InstallSetupCommand.php',
        'Helhum\\Typo3Console\\Command\\RelatableCommandInterface' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/RelatableCommandInterface.php',
        'Helhum\\Typo3Console\\Command\\Upgrade\\UpgradeCheckExtensionCompatibilityCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Upgrade/UpgradeCheckExtensionCompatibilityCommand.php',
        'Helhum\\Typo3Console\\Command\\Upgrade\\UpgradeCheckExtensionConstraintsCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Upgrade/UpgradeCheckExtensionConstraintsCommand.php',
        'Helhum\\Typo3Console\\Command\\Upgrade\\UpgradeListCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Upgrade/UpgradeListCommand.php',
        'Helhum\\Typo3Console\\Command\\Upgrade\\UpgradePrepareCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Upgrade/UpgradePrepareCommand.php',
        'Helhum\\Typo3Console\\Command\\Upgrade\\UpgradeRunCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Command/Upgrade/UpgradeRunCommand.php',
        'Helhum\\Typo3Console\\CompatibilityClassLoader' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Compatibility/CompatibilityClassLoader.php',
        'Helhum\\Typo3Console\\Compatibility\\EmConfReader' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Compatibility/EmConfReader.php',
        'Helhum\\Typo3Console\\Composer\\InstallerScript\\PopulateCommandConfiguration' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Composer/InstallerScript/PopulateCommandConfiguration.php',
        'Helhum\\Typo3Console\\Composer\\InstallerScripts' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Composer/InstallerScripts.php',
        'Helhum\\Typo3Console\\Composer\\PopulateCommands' => __DIR__ . '/../..' . '/Classes/Console/Composer/PopulateCommands.php',
        'Helhum\\Typo3Console\\Composer\\ScriptHelper' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Composer/ScriptHelper.php',
        'Helhum\\Typo3Console\\Composer\\Util\\PackageSorter' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Composer/Util/PackageSorter.php',
        'Helhum\\Typo3Console\\Core\\Booting\\ContainerBuildFailedException' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Core/Booting/ContainerBuildFailedException.php',
        'Helhum\\Typo3Console\\Core\\Booting\\RunLevel' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Core/Booting/RunLevel.php',
        'Helhum\\Typo3Console\\Core\\Booting\\Scripts' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Core/Booting/Scripts.php',
        'Helhum\\Typo3Console\\Core\\Booting\\Sequence' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Core/Booting/Sequence.php',
        'Helhum\\Typo3Console\\Core\\Booting\\Step' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Core/Booting/Step.php',
        'Helhum\\Typo3Console\\Core\\Booting\\StepFailedException' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Core/Booting/StepFailedException.php',
        'Helhum\\Typo3Console\\Core\\Kernel' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Core/Kernel.php',
        'Helhum\\Typo3Console\\Database\\Configuration\\ConnectionConfiguration' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Database/Configuration/ConnectionConfiguration.php',
        'Helhum\\Typo3Console\\Database\\Process\\MysqlCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Database/Process/MysqlCommand.php',
        'Helhum\\Typo3Console\\Database\\Schema\\SchemaUpdate' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Database/Schema/SchemaUpdate.php',
        'Helhum\\Typo3Console\\Database\\Schema\\SchemaUpdateInterface' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Database/Schema/SchemaUpdateInterface.php',
        'Helhum\\Typo3Console\\Database\\Schema\\SchemaUpdateResult' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Database/Schema/SchemaUpdateResult.php',
        'Helhum\\Typo3Console\\Database\\Schema\\SchemaUpdateResultRenderer' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Database/Schema/SchemaUpdateResultRenderer.php',
        'Helhum\\Typo3Console\\Database\\Schema\\SchemaUpdateType' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Database/Schema/SchemaUpdateType.php',
        'Helhum\\Typo3Console\\Database\\Schema\\TableMatcher' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Database/Schema/TableMatcher.php',
        'Helhum\\Typo3Console\\Error\\ErrorHandler' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Error/ErrorHandler.php',
        'Helhum\\Typo3Console\\Error\\ExceptionHandler' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Error/ExceptionHandler.php',
        'Helhum\\Typo3Console\\Error\\ExceptionRenderer' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Error/ExceptionRenderer.php',
        'Helhum\\Typo3Console\\Exception' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Exception.php',
        'Helhum\\Typo3Console\\Exception\\ArgumentValidationFailedException' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Exception/ArgumentValidationFailedException.php',
        'Helhum\\Typo3Console\\Exception\\CommandNotAvailableException' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Exception/CommandNotAvailableException.php',
        'Helhum\\Typo3Console\\Extension\\DatabaseSchemaUpdateEvent' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Extension/DatabaseSchemaUpdateEvent.php',
        'Helhum\\Typo3Console\\Extension\\ExtensionCompatibilityCheck' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Extension/ExtensionCompatibilityCheck.php',
        'Helhum\\Typo3Console\\Extension\\ExtensionConfiguration' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Extension/ExtensionConfiguration.php',
        'Helhum\\Typo3Console\\Extension\\ExtensionConstraintCheck' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Extension/ExtensionConstraintCheck.php',
        'Helhum\\Typo3Console\\Extension\\ExtensionSetup' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Extension/ExtensionSetup.php',
        'Helhum\\Typo3Console\\Extension\\ExtensionSetupEventDispatcher' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Extension/ExtensionSetupEventDispatcher.php',
        'Helhum\\Typo3Console\\Extension\\ExtensionSetupResultRenderer' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Extension/ExtensionSetupResultRenderer.php',
        'Helhum\\Typo3Console\\Hook\\ExtensionInstallation' => __DIR__ . '/../..' . '/Classes/Console/Hook/ExtensionInstallation.php',
        'Helhum\\Typo3Console\\Install\\Action\\CommandsAction' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Install/Action/CommandsAction.php',
        'Helhum\\Typo3Console\\Install\\Action\\ExtensionSetupAction' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Install/Action/ExtensionSetupAction.php',
        'Helhum\\Typo3Console\\Install\\Action\\InstallActionDispatcher' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Install/Action/InstallActionDispatcher.php',
        'Helhum\\Typo3Console\\Install\\Action\\InstallActionFactory' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Install/Action/InstallActionFactory.php',
        'Helhum\\Typo3Console\\Install\\Action\\InstallActionInterface' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Install/Action/InstallActionInterface.php',
        'Helhum\\Typo3Console\\Install\\Action\\InstallationFailedException' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Install/Action/InstallationFailedException.php',
        'Helhum\\Typo3Console\\Install\\Action\\InteractiveActionArguments' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Install/Action/InteractiveActionArguments.php',
        'Helhum\\Typo3Console\\Install\\Action\\PrepareInstallAction' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Install/Action/PrepareInstallAction.php',
        'Helhum\\Typo3Console\\Install\\Action\\Typo3InstallAction' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Install/Action/Typo3InstallAction.php',
        'Helhum\\Typo3Console\\Install\\Action\\WriteWebServerConfigAction' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Install/Action/WriteWebServerConfigAction.php',
        'Helhum\\Typo3Console\\Install\\CliMessageRenderer' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Install/CliMessageRenderer.php',
        'Helhum\\Typo3Console\\Install\\InstallStepActionExecutor' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Install/InstallStepActionExecutor.php',
        'Helhum\\Typo3Console\\Install\\InstallStepResponse' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Install/InstallStepResponse.php',
        'Helhum\\Typo3Console\\Install\\PackageStatesGenerator' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Install/PackageStatesGenerator.php',
        'Helhum\\Typo3Console\\Install\\StepsConfig' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Install/StepsConfig.php',
        'Helhum\\Typo3Console\\Install\\Upgrade\\SilentConfigurationUpgrade' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Install/Upgrade/SilentConfigurationUpgrade.php',
        'Helhum\\Typo3Console\\Install\\Upgrade\\UpgradeHandling' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Install/Upgrade/UpgradeHandling.php',
        'Helhum\\Typo3Console\\Install\\Upgrade\\UpgradeWizardExecutor' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Install/Upgrade/UpgradeWizardExecutor.php',
        'Helhum\\Typo3Console\\Install\\Upgrade\\UpgradeWizardFactory' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Install/Upgrade/UpgradeWizardFactory.php',
        'Helhum\\Typo3Console\\Install\\Upgrade\\UpgradeWizardList' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Install/Upgrade/UpgradeWizardList.php',
        'Helhum\\Typo3Console\\Install\\Upgrade\\UpgradeWizardListRenderer' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Install/Upgrade/UpgradeWizardListRenderer.php',
        'Helhum\\Typo3Console\\Install\\Upgrade\\UpgradeWizardResult' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Install/Upgrade/UpgradeWizardResult.php',
        'Helhum\\Typo3Console\\Install\\Upgrade\\UpgradeWizardResultRenderer' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Install/Upgrade/UpgradeWizardResultRenderer.php',
        'Helhum\\Typo3Console\\Log\\Writer\\ConsoleWriter' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Log/Writer/ConsoleWriter.php',
        'Helhum\\Typo3Console\\Mvc\\Cli\\CommandCollection' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Mvc/Cli/CommandCollection.php',
        'Helhum\\Typo3Console\\Mvc\\Cli\\CommandConfiguration' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Mvc/Cli/CommandConfiguration.php',
        'Helhum\\Typo3Console\\Mvc\\Cli\\CommandDispatcher' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Mvc/Cli/CommandDispatcher.php',
        'Helhum\\Typo3Console\\Mvc\\Cli\\ConsoleOutput' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Mvc/Cli/ConsoleOutput.php',
        'Helhum\\Typo3Console\\Mvc\\Cli\\FailedSubProcessCommandException' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Mvc/Cli/FailedSubProcessCommandException.php',
        'Helhum\\Typo3Console\\Mvc\\Cli\\InteractiveProcess' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Mvc/Cli/InteractiveProcess.php',
        'Helhum\\Typo3Console\\Mvc\\Cli\\SubProcessException' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Mvc/Cli/SubProcessException.php',
        'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Application' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Mvc/Cli/Symfony/Application.php',
        'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\ErroredCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Mvc/Cli/Symfony/Command/ErroredCommand.php',
        'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\HelpCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Mvc/Cli/Symfony/Command/HelpCommand.php',
        'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\ListCommand' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Mvc/Cli/Symfony/Command/ListCommand.php',
        'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Descriptor\\TextDescriptor' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Mvc/Cli/Symfony/Descriptor/TextDescriptor.php',
        'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Input\\ArgvInput' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Mvc/Cli/Symfony/Input/ArgvInput.php',
        'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Output\\TrackableOutput' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Mvc/Cli/Symfony/Output/TrackableOutput.php',
        'Helhum\\Typo3Console\\Mvc\\Cli\\Typo3CommandRegistry' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Mvc/Cli/Typo3CommandRegistry.php',
        'Helhum\\Typo3Console\\Package\\UncachedPackageManager' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Package/UncachedPackageManager.php',
        'Helhum\\Typo3Console\\Property\\TypeConverter\\ArrayConverter' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Property/TypeConverter/ArrayConverter.php',
        'Helhum\\Typo3Console\\Service\\CacheLowLevelCleaner' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Service/CacheLowLevelCleaner.php',
        'Helhum\\Typo3Console\\Service\\CacheService' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Service/CacheService.php',
        'Helhum\\Typo3Console\\Service\\Configuration\\ConfigurationService' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Service/Configuration/ConfigurationService.php',
        'Helhum\\Typo3Console\\Service\\Configuration\\ConfigurationValueNotFoundException' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Service/Configuration/ConfigurationValueNotFoundException.php',
        'Helhum\\Typo3Console\\Service\\Configuration\\ConsoleRenderer\\ConsoleRenderer' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Service/Configuration/ConsoleRenderer/ConsoleRenderer.php',
        'Helhum\\Typo3Console\\Service\\Configuration\\ConsoleRenderer\\DiffConsoleRenderer' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Service/Configuration/ConsoleRenderer/DiffConsoleRenderer.php',
        'Helhum\\Typo3Console\\Service\\Configuration\\TypesAreNotConvertibleException' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Service/Configuration/TypesAreNotConvertibleException.php',
        'Helhum\\Typo3Console\\Service\\Database\\Exception' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Service/Database/Exception.php',
        'Helhum\\Typo3Console\\Service\\Database\\SchemaService' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Service/Database/SchemaService.php',
        'Helhum\\Typo3Console\\Service\\Exception' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Console/Service/Exception.php',
        'Helhum\\Typo3Console\\TYPO3v104\\Mvc\\Cli\\Typo3CommandRegistry' => __DIR__ . '/..' . '/helhum/typo3-console/Classes/Compatibility/TYPO3v104/Mvc/Cli/Typo3CommandRegistry.php',
        'Symfony\\Component\\Process\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/process/Exception/ExceptionInterface.php',
        'Symfony\\Component\\Process\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/symfony/process/Exception/InvalidArgumentException.php',
        'Symfony\\Component\\Process\\Exception\\LogicException' => __DIR__ . '/..' . '/symfony/process/Exception/LogicException.php',
        'Symfony\\Component\\Process\\Exception\\ProcessFailedException' => __DIR__ . '/..' . '/symfony/process/Exception/ProcessFailedException.php',
        'Symfony\\Component\\Process\\Exception\\ProcessSignaledException' => __DIR__ . '/..' . '/symfony/process/Exception/ProcessSignaledException.php',
        'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException' => __DIR__ . '/..' . '/symfony/process/Exception/ProcessTimedOutException.php',
        'Symfony\\Component\\Process\\Exception\\RuntimeException' => __DIR__ . '/..' . '/symfony/process/Exception/RuntimeException.php',
        'Symfony\\Component\\Process\\ExecutableFinder' => __DIR__ . '/..' . '/symfony/process/ExecutableFinder.php',
        'Symfony\\Component\\Process\\InputStream' => __DIR__ . '/..' . '/symfony/process/InputStream.php',
        'Symfony\\Component\\Process\\PhpExecutableFinder' => __DIR__ . '/..' . '/symfony/process/PhpExecutableFinder.php',
        'Symfony\\Component\\Process\\PhpProcess' => __DIR__ . '/..' . '/symfony/process/PhpProcess.php',
        'Symfony\\Component\\Process\\Pipes\\AbstractPipes' => __DIR__ . '/..' . '/symfony/process/Pipes/AbstractPipes.php',
        'Symfony\\Component\\Process\\Pipes\\PipesInterface' => __DIR__ . '/..' . '/symfony/process/Pipes/PipesInterface.php',
        'Symfony\\Component\\Process\\Pipes\\UnixPipes' => __DIR__ . '/..' . '/symfony/process/Pipes/UnixPipes.php',
        'Symfony\\Component\\Process\\Pipes\\WindowsPipes' => __DIR__ . '/..' . '/symfony/process/Pipes/WindowsPipes.php',
        'Symfony\\Component\\Process\\Process' => __DIR__ . '/..' . '/symfony/process/Process.php',
        'Symfony\\Component\\Process\\ProcessUtils' => __DIR__ . '/..' . '/symfony/process/ProcessUtils.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7db286f40525b4cd41aba2cd425aa099::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7db286f40525b4cd41aba2cd425aa099::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7db286f40525b4cd41aba2cd425aa099::$classMap;

        }, null, ClassLoader::class);
    }
}
