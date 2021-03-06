<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5b13bc01e843aa5996b0719646be3468
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sabre\\VObject\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sabre\\VObject\\' => 
        array (
            0 => __DIR__ . '/..' . '/sabre/vobject/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5b13bc01e843aa5996b0719646be3468::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5b13bc01e843aa5996b0719646be3468::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
