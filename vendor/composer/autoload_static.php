<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit38c41451413a055ceab5561716aeca6b
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
        '94d107874694a1d3395d429300cc70be' => __DIR__ . '/../..' . '/src/cli.php',
        '5504fe99a7d036c23e14935837af5ec3' => __DIR__ . '/../..' . '/src/CheckToEvenNumber.php',
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'cli' => 
            array (
                0 => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit38c41451413a055ceab5561716aeca6b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
