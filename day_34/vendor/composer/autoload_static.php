<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc6244f3dd8a2de5b1cd86ab23c1a41e5
{
    public static $prefixesPsr0 = array (
        'A' => 
        array (
            'App\\' => 
            array (
                0 => __DIR__ . '/../..' . '/app',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitc6244f3dd8a2de5b1cd86ab23c1a41e5::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc6244f3dd8a2de5b1cd86ab23c1a41e5::$classMap;

        }, null, ClassLoader::class);
    }
}
