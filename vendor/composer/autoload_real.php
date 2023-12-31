<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitda9e33e98d97966a18dddf56fd906ecb
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

        spl_autoload_register(array('ComposerAutoloaderInitda9e33e98d97966a18dddf56fd906ecb', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitda9e33e98d97966a18dddf56fd906ecb', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitda9e33e98d97966a18dddf56fd906ecb::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
