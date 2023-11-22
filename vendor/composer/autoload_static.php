<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc260da1a25965256240189ad05bdf8b7
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc260da1a25965256240189ad05bdf8b7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc260da1a25965256240189ad05bdf8b7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc260da1a25965256240189ad05bdf8b7::$classMap;

        }, null, ClassLoader::class);
    }
}