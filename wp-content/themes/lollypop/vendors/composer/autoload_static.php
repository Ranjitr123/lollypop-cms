<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8413fdac5d3ce75397a995bf7f40d06a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8413fdac5d3ce75397a995bf7f40d06a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8413fdac5d3ce75397a995bf7f40d06a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
