<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit55e58410e088d56ce69764fdd2f9fcab
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit55e58410e088d56ce69764fdd2f9fcab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit55e58410e088d56ce69764fdd2f9fcab::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit55e58410e088d56ce69764fdd2f9fcab::$classMap;

        }, null, ClassLoader::class);
    }
}