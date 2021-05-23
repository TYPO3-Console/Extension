<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;








class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'dev-latest',
    'version' => 'dev-latest',
    'aliases' => 
    array (
    ),
    'reference' => '7416801e5bfb2b26d5ea6122450fb8564a466ab8',
    'name' => 'typo3-console/extension',
  ),
  'versions' => 
  array (
    'doctrine/annotations' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'doctrine/cache' => 
    array (
      'pretty_version' => '1.11.2',
      'version' => '1.11.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '9c53086695937c50c47936ed86d96150ffbcf60d',
    ),
    'doctrine/dbal' => 
    array (
      'pretty_version' => '2.10.4',
      'version' => '2.10.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '47433196b6390d14409a33885ee42b6208160643',
    ),
    'doctrine/event-manager' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '41370af6a30faa9dc0368c4a6814d596e81aba7f',
    ),
    'helhum/config-loader' => 
    array (
      'pretty_version' => 'v0.12.2',
      'version' => '0.12.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '1faf12146c505f3b929b10f09aabb8b675d7842d',
    ),
    'helhum/typo3-console' => 
    array (
      'pretty_version' => 'dev-latest',
      'version' => 'dev-latest',
      'aliases' => 
      array (
        0 => '6.x-dev',
      ),
      'reference' => 'cbd56f0803a2e382df8fce63bbed8f54d6c43baa',
    ),
    'helhum/typo3-console-plugin' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8622567409010282b7aeebe4bb841fe98b58dcaf',
    ),
    'psr/log' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v4.4.24',
      'version' => '4.4.24.0',
      'aliases' => 
      array (
      ),
      'reference' => '1b15ca1b1bedda86f98064da9ff5d800560d4c6d',
    ),
    'symfony/debug' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'symfony/polyfill-php73' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a678b42e92f86eca04b7fa4c0f6f19d097fb69e2',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dc3063ba22c2a1fd2f45ed856374d79114998f91',
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v4.4.22',
      'version' => '4.4.22.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f5481b22729d465acb1cea3455fc04ce84b0148b',
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v1.1.9',
      'version' => '1.1.9.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b776d18b303a39f56c63747bcb977ad4b27aca26',
    ),
    'typo3-console/extension' => 
    array (
      'pretty_version' => 'dev-latest',
      'version' => 'dev-latest',
      'aliases' => 
      array (
      ),
      'reference' => '7416801e5bfb2b26d5ea6122450fb8564a466ab8',
    ),
    'typo3-ter/typo3-console' => 
    array (
      'replaced' => 
      array (
        0 => 'dev-latest',
        1 => '6.x-dev',
      ),
    ),
    'typo3/cms-backend' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'typo3/cms-core' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'typo3/cms-extbase' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'typo3/cms-extensionmanager' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'typo3/cms-fluid' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'typo3/cms-frontend' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'typo3/cms-install' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'typo3/cms-saltedpasswords' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}

if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}









public static function isInstalled($packageName)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return true;
}
}

return false;
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}








public static function getRawData()
{
@trigger_error('getRawData only returns the first dataset loaded, which may not be what you expect. Use getAllRawData() instead which returns all datasets for all autoloaders present in the process.', E_USER_DEPRECATED);

return self::$installed;
}







public static function getAllRawData()
{
return self::getInstalled();
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}





private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {
foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}
