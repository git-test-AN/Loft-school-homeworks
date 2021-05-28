<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9653007bbdb7459f2de820ed661312c9
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Base\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Base\\' => 
        array (
            0 => __DIR__ . '/../..' . '/base',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9653007bbdb7459f2de820ed661312c9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9653007bbdb7459f2de820ed661312c9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9653007bbdb7459f2de820ed661312c9::$classMap;

        }, null, ClassLoader::class);
    }
}
