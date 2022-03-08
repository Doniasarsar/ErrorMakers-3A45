<?php

// autoload_real.php @generated by Composer

<<<<<<< HEAD
class ComposerAutoloaderInitbb54aa9a21566f2aed37ce12a58efa65
=======
class ComposerAutoloaderInit08af09498a212aa26a79c6269c79791b
>>>>>>> 351638ea802c5edecaf927132ed678564d5af07e
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

<<<<<<< HEAD
        spl_autoload_register(array('ComposerAutoloaderInitbb54aa9a21566f2aed37ce12a58efa65', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(\dirname(__FILE__)));
        spl_autoload_unregister(array('ComposerAutoloaderInitbb54aa9a21566f2aed37ce12a58efa65', 'loadClassLoader'));
=======
        spl_autoload_register(array('ComposerAutoloaderInit08af09498a212aa26a79c6269c79791b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(\dirname(__FILE__)));
        spl_autoload_unregister(array('ComposerAutoloaderInit08af09498a212aa26a79c6269c79791b', 'loadClassLoader'));
>>>>>>> 351638ea802c5edecaf927132ed678564d5af07e

        $useStaticLoader = PHP_VERSION_ID >= 50600 && !defined('HHVM_VERSION') && (!function_exists('zend_loader_file_encoded') || !zend_loader_file_encoded());
        if ($useStaticLoader) {
            require __DIR__ . '/autoload_static.php';

<<<<<<< HEAD
            call_user_func(\Composer\Autoload\ComposerStaticInitbb54aa9a21566f2aed37ce12a58efa65::getInitializer($loader));
=======
            call_user_func(\Composer\Autoload\ComposerStaticInit08af09498a212aa26a79c6269c79791b::getInitializer($loader));
>>>>>>> 351638ea802c5edecaf927132ed678564d5af07e
        } else {
            $map = require __DIR__ . '/autoload_namespaces.php';
            foreach ($map as $namespace => $path) {
                $loader->set($namespace, $path);
            }

            $map = require __DIR__ . '/autoload_psr4.php';
            foreach ($map as $namespace => $path) {
                $loader->setPsr4($namespace, $path);
            }

            $classMap = require __DIR__ . '/autoload_classmap.php';
            if ($classMap) {
                $loader->addClassMap($classMap);
            }
        }

        $loader->register(true);

        if ($useStaticLoader) {
<<<<<<< HEAD
            $includeFiles = Composer\Autoload\ComposerStaticInitbb54aa9a21566f2aed37ce12a58efa65::$files;
=======
            $includeFiles = Composer\Autoload\ComposerStaticInit08af09498a212aa26a79c6269c79791b::$files;
>>>>>>> 351638ea802c5edecaf927132ed678564d5af07e
        } else {
            $includeFiles = require __DIR__ . '/autoload_files.php';
        }
        foreach ($includeFiles as $fileIdentifier => $file) {
<<<<<<< HEAD
            composerRequirebb54aa9a21566f2aed37ce12a58efa65($fileIdentifier, $file);
=======
            composerRequire08af09498a212aa26a79c6269c79791b($fileIdentifier, $file);
>>>>>>> 351638ea802c5edecaf927132ed678564d5af07e
        }

        return $loader;
    }
}

<<<<<<< HEAD
function composerRequirebb54aa9a21566f2aed37ce12a58efa65($fileIdentifier, $file)
=======
/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire08af09498a212aa26a79c6269c79791b($fileIdentifier, $file)
>>>>>>> 351638ea802c5edecaf927132ed678564d5af07e
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
