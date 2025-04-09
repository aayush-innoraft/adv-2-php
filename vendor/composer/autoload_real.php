<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf49de5ec9ea2e23b1bad9b35a7f085ae
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

        spl_autoload_register(array('ComposerAutoloaderInitf49de5ec9ea2e23b1bad9b35a7f085ae', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf49de5ec9ea2e23b1bad9b35a7f085ae', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf49de5ec9ea2e23b1bad9b35a7f085ae::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
