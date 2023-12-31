<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit67db9f3d64fceca93a19e5d9f25df795
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dell\\SignupPackage\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dell\\SignupPackage\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit67db9f3d64fceca93a19e5d9f25df795::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit67db9f3d64fceca93a19e5d9f25df795::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit67db9f3d64fceca93a19e5d9f25df795::$classMap;

        }, null, ClassLoader::class);
    }
}
