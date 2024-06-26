<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit805a2e8f610f90b1f6f9cf54af5155bd
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

        spl_autoload_register(array('ComposerAutoloaderInit805a2e8f610f90b1f6f9cf54af5155bd', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit805a2e8f610f90b1f6f9cf54af5155bd', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit805a2e8f610f90b1f6f9cf54af5155bd::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
