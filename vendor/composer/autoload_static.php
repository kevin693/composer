<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb24309b764a79747c3c8fd22337cc446
{
    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitb24309b764a79747c3c8fd22337cc446::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
