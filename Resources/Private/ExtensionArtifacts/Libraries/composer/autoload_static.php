<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit79644f7df08018d6ff0c645e662316a5
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Process\\' => 26,
        ),
        'H' => 
        array (
            'Helhum\\ConfigLoader\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit79644f7df08018d6ff0c645e662316a5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit79644f7df08018d6ff0c645e662316a5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit79644f7df08018d6ff0c645e662316a5::$classMap;

        }, null, ClassLoader::class);
    }
}
