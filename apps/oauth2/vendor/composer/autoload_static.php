<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf5e1569c48d15954ac923189c61ba6cb
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rowbot\\URL\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rowbot\\URL\\' => 
        array (
            0 => __DIR__ . '/..' . '/rowbot/url/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf5e1569c48d15954ac923189c61ba6cb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf5e1569c48d15954ac923189c61ba6cb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
