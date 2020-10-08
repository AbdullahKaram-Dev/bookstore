<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf2f57ae41efd5e7d5d22bf0fad3009a7
{
    public static $files = array (
        'e3d29885526bf36254b275f1e8720d97' => __DIR__ . '/../..' . '/env.php',
        '5ec26a44593cffc3089bdca7ce7a56c3' => __DIR__ . '/../..' . '/core/helpers.php',
        '49382141d4067a766a7a28a376aa9db6' => __DIR__ . '/../..' . '/config/dirs.php',
        '83de162ce801b02d8131032aab8acc7b' => __DIR__ . '/../..' . '/config/urls.php',
        'ddc6ef71139268dee904806434d8f323' => __DIR__ . '/../..' . '/config/seo.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'Core\\Db' => __DIR__ . '/../..' . '/core/Db.php',
        'Core\\File' => __DIR__ . '/../..' . '/core/File.php',
        'Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Core\\Route' => __DIR__ . '/../..' . '/core/Route.php',
        'Core\\Session' => __DIR__ . '/../..' . '/core/Session.php',
        'Core\\Validation\\Rules\\Email' => __DIR__ . '/../..' . '/core/Validation/Rules/Email.php',
        'Core\\Validation\\Rules\\Numeric' => __DIR__ . '/../..' . '/core/Validation/Rules/Numeric.php',
        'Core\\Validation\\Rules\\Required' => __DIR__ . '/../..' . '/core/Validation/Rules/Required.php',
        'Core\\Validation\\Rules\\Str' => __DIR__ . '/../..' . '/core/Validation/Rules/Str.php',
        'Core\\Validation\\Rules\\ValidationRule' => __DIR__ . '/../..' . '/core/Validation/Rules/ValidationRule.php',
        'Core\\Validation\\ValidationStrategy' => __DIR__ . '/../..' . '/core/Validation/ValidationStrategy.php',
        'Core\\Validation\\Validator' => __DIR__ . '/../..' . '/core/Validation/Validator.php',
        'Core\\View' => __DIR__ . '/../..' . '/core/View.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf2f57ae41efd5e7d5d22bf0fad3009a7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf2f57ae41efd5e7d5d22bf0fad3009a7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf2f57ae41efd5e7d5d22bf0fad3009a7::$classMap;

        }, null, ClassLoader::class);
    }
}