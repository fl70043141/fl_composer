<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit618d4a10a4de339ee3b110c556c357ca
{
    public static $prefixLengthsPsr4 = array (
        'f' => 
        array (
            'fl70043141\\HelloWorldPackage\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'fl70043141\\HelloWorldPackage\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit618d4a10a4de339ee3b110c556c357ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit618d4a10a4de339ee3b110c556c357ca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit618d4a10a4de339ee3b110c556c357ca::$classMap;

        }, null, ClassLoader::class);
    }
}
