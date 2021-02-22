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
    'reference' => '782ee8010c3a5040c134e4e2e54cb62cdb50335c',
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
      'reference' => 'caef614cb68b468f18c3c3bf333862e79caebbc5',
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
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
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
      'pretty_version' => 'v4.4.19',
      'version' => '4.4.19.0',
      'aliases' => 
      array (
      ),
      'reference' => '24026c44fc37099fa145707fecd43672831b837a',
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
      'pretty_version' => 'v4.4.19',
      'version' => '4.4.19.0',
      'aliases' => 
      array (
      ),
      'reference' => '7e950b6366d4da90292c2e7fa820b3c1842b965a',
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
      'reference' => '782ee8010c3a5040c134e4e2e54cb62cdb50335c',
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
return self::$installed;
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
