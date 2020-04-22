<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd070168cf02feecb1434a13525e9a6bb
{
    public static $files = array (
        '9b552a3cc426e3287cc811caefa3cf53' => __DIR__ . '/..',
        '538ca81a9a966a6716601ecf48f4eaef' => __DIR__ . '/..',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..',
        '25072dd6e2470089de65ae7bf11d3109' => __DIR__ . '/..',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..',
    );

    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'think\\trace\\' => 12,
            'think\\' => 6,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php72\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
            'Psr\\Cache\\' => 10,
        ),
        'O' => 
        array (
            'Opis\\Closure\\' => 13,
        ),
        'L' => 
        array (
            'League\\Flysystem\\Cached\\' => 24,
            'League\\Flysystem\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\trace\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
        'think\\' => 
        array (
            0 => __DIR__ . '/..',
            1 => __DIR__ . '/..',
            2 => __DIR__ . '/..',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..',
        ),
        'Symfony\\Polyfill\\Php72\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
        'Opis\\Closure\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
        'League\\Flysystem\\Cached\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
        'League\\Flysystem\\' => 
        array (
            0 => __DIR__ . '/..',
        ),
    );

    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/../..',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd070168cf02feecb1434a13525e9a6bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd070168cf02feecb1434a13525e9a6bb::$prefixDirsPsr4;
            $loader->fallbackDirsPsr0 = ComposerStaticInitd070168cf02feecb1434a13525e9a6bb::$fallbackDirsPsr0;

        }, null, ClassLoader::class);
    }
}
