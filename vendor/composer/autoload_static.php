<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit38c41451413a055ceab5561716aeca6b
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
        '79edc1773484ce058f0a4b3c7e626460' => __DIR__ . '/../..' . '/src/GameStarter.php',
        '4ef7921a3aa9ae03557bfabf68c929ad' => __DIR__ . '/../..' . '/src/games/CheckToEvenNumber.php',
        '1d12d59e027ca08e627dbdf0c6524f74' => __DIR__ . '/../..' . '/src/games/Calc.php',
        '2e22ce71de25ad7c117f5b804c230aeb' => __DIR__ . '/../..' . '/src/games/Gcd.php',
        '3735e1b69a4a5861fffc987e3fc4d653' => __DIR__ . '/../..' . '/src/games/Progression.php',
        'e2806817ec0f43a8ed73616550d4b786' => __DIR__ . '/../..' . '/src/games/PrimeNumber.php',
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
