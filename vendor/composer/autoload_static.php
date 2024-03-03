<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita0435024c505a25f9444fba40d078cf5
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mr0re\\ToDoList\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mr0re\\ToDoList\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita0435024c505a25f9444fba40d078cf5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita0435024c505a25f9444fba40d078cf5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita0435024c505a25f9444fba40d078cf5::$classMap;

        }, null, ClassLoader::class);
    }
}