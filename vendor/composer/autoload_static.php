<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc8d5846c2bd435f905fb2a5a03112e23
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc8d5846c2bd435f905fb2a5a03112e23::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc8d5846c2bd435f905fb2a5a03112e23::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc8d5846c2bd435f905fb2a5a03112e23::$classMap;

        }, null, ClassLoader::class);
    }
}