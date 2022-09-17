<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9e3313dd453dfe7efa8af2e14277c6b1
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'ConnectionControl\\' => 18,
        ),
        'A' => 
        array (
            'AppControl\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ConnectionControl\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'AppControl\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9e3313dd453dfe7efa8af2e14277c6b1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9e3313dd453dfe7efa8af2e14277c6b1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9e3313dd453dfe7efa8af2e14277c6b1::$classMap;

        }, null, ClassLoader::class);
    }
}
