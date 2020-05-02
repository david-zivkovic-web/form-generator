<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9fa6b9429b942d05c96d1964636d5aa3
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Davidzc\\Formgen\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Davidzc\\Formgen\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9fa6b9429b942d05c96d1964636d5aa3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9fa6b9429b942d05c96d1964636d5aa3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
