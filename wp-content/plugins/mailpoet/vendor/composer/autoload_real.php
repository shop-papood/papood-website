<?php
if (!defined('ABSPATH')) exit;
// autoload_real.php @generated by Composer
class ComposerAutoloaderInit4992e04a4f183228095ed6426dcaa195
{
 private static $loader;
 public static function loadClassLoader($class)
 {
 if ('Composer\Autoload\ClassLoader' === $class) {
 require __DIR__ . '/ClassLoader.php';
 }
 }
 public static function getLoader()
 {
 if (null !== self::$loader) {
 return self::$loader;
 }
 require __DIR__ . '/platform_check.php';
 spl_autoload_register(array('ComposerAutoloaderInit4992e04a4f183228095ed6426dcaa195', 'loadClassLoader'), true, true);
 self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
 spl_autoload_unregister(array('ComposerAutoloaderInit4992e04a4f183228095ed6426dcaa195', 'loadClassLoader'));
 require __DIR__ . '/autoload_static.php';
 call_user_func(\Composer\Autoload\ComposerStaticInit4992e04a4f183228095ed6426dcaa195::getInitializer($loader));
 $loader->register(true);
 $includeFiles = \Composer\Autoload\ComposerStaticInit4992e04a4f183228095ed6426dcaa195::$files;
 foreach ($includeFiles as $fileIdentifier => $file) {
 composerRequire4992e04a4f183228095ed6426dcaa195($fileIdentifier, $file);
 }
 return $loader;
 }
}
function composerRequire4992e04a4f183228095ed6426dcaa195($fileIdentifier, $file)
{
 if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
 $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;
 require $file;
 }
}