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
    'reference' => 'b4fba23447498c91b35f7582b01c7abadc749c28',
    'name' => 'typo3-console/extension',
  ),
  'versions' => 
  array (
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
      'reference' => 'e7be9e623a21ca612faf8073d18e94ba0dce4cab',
    ),
    'psr/log' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'symfony/console' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
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
    'symfony/polyfill-php80' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v5.2.7',
      'version' => '5.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '98cb8eeb72e55d4196dd1e36f1f16e7b3a9a088e',
    ),
    'typo3-console/extension' => 
    array (
      'pretty_version' => 'dev-latest',
      'version' => 'dev-latest',
      'aliases' => 
      array (
      ),
      'reference' => 'b4fba23447498c91b35f7582b01c7abadc749c28',
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
