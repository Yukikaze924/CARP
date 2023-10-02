<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit367ed8ef3ef0b6ca62b3176047ae1462
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Model\\' => 10,
            'App\\Core\\' => 9,
            'App\\Controller\\' => 15,
            'App\\Api\\' => 8,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/models',
        ),
        'App\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/core',
        ),
        'App\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controllers',
        ),
        'App\\Api\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/apis',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Core\\App' => __DIR__ . '/../..' . '/app/core/App.php',
        'App\\Model\\ContactFormModel' => __DIR__ . '/../..' . '/app/models/ContactFormModel.php',
        'App\\Model\\LoginModel' => __DIR__ . '/../..' . '/app/models/LoginModel.php',
        'App\\Model\\RegisterModel' => __DIR__ . '/../..' . '/app/models/RegisterModel.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit367ed8ef3ef0b6ca62b3176047ae1462::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit367ed8ef3ef0b6ca62b3176047ae1462::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit367ed8ef3ef0b6ca62b3176047ae1462::$classMap;

        }, null, ClassLoader::class);
    }
}