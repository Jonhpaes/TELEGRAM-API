<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit744b09af901ec552b0e1468c2463d086
{
    public static $files = array (
        '5c31900cccd53359ac8a2f475cd61a9e' => __DIR__ . '/../..' . '/config/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'T' => 
        array (
            'TelegramBot\\Api\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'TelegramBot\\Api\\' => 
        array (
            0 => __DIR__ . '/..' . '/telegram-bot/api/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit744b09af901ec552b0e1468c2463d086::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit744b09af901ec552b0e1468c2463d086::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit744b09af901ec552b0e1468c2463d086::$classMap;

        }, null, ClassLoader::class);
    }
}
