<?php











namespace Composer;

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
    'reference' => 'd4022142f7fdd36ce8c917af702ec7099d48a201',
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
      'pretty_version' => 'v6.4.0',
      'version' => '6.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9de18b4f65fcf575ceb1490ff16464fe84abc0aa',
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
      'pretty_version' => 'v4.4.18',
      'version' => '4.4.18.0',
      'aliases' => 
      array (
      ),
      'reference' => '12e071278e396cc3e1c149857337e9e192deca0b',
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
      'pretty_version' => 'v1.20.0',
      'version' => '1.20.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8ff431c517be11c78c48a39a66d37431e26a6bed',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.20.0',
      'version' => '1.20.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e70aa8b064c5b72d3df2abd5ab1e90464ad009de',
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v4.4.18',
      'version' => '4.4.18.0',
      'aliases' => 
      array (
      ),
      'reference' => '075316ff72233ce3d04a9743414292e834f2cb4a',
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
      'reference' => 'd4022142f7fdd36ce8c917af702ec7099d48a201',
    ),
    'typo3-ter/typo3-console' => 
    array (
      'replaced' => 
      array (
        0 => 'v6.4.0',
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







public static function getInstalledPackages()
{
return array_keys(self::$installed['versions']);
}









public static function isInstalled($packageName)
{
return isset(self::$installed['versions'][$packageName]);
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

$ranges = array();
if (isset(self::$installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = self::$installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', self::$installed['versions'][$packageName])) {
$ranges = array_merge($ranges, self::$installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', self::$installed['versions'][$packageName])) {
$ranges = array_merge($ranges, self::$installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', self::$installed['versions'][$packageName])) {
$ranges = array_merge($ranges, self::$installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}





public static function getVersion($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

if (!isset(self::$installed['versions'][$packageName]['version'])) {
return null;
}

return self::$installed['versions'][$packageName]['version'];
}





public static function getPrettyVersion($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

if (!isset(self::$installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return self::$installed['versions'][$packageName]['pretty_version'];
}





public static function getReference($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

if (!isset(self::$installed['versions'][$packageName]['reference'])) {
return null;
}

return self::$installed['versions'][$packageName]['reference'];
}





public static function getRootPackage()
{
return self::$installed['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
}
}
