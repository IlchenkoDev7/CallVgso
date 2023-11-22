<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5b99903254ce0f17576f5366f338df54
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Modules',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5b99903254ce0f17576f5366f338df54::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5b99903254ce0f17576f5366f338df54::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5b99903254ce0f17576f5366f338df54::$classMap;

        }, null, ClassLoader::class);
    }
}
