<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc48d42b61a005d33cc556281480aa933
{
    public static $prefixesPsr0 = array (
        'F' => 
        array (
            'Flow' => 
            array (
                0 => __DIR__ . '/..' . '/flowjs/flow-php-server/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitc48d42b61a005d33cc556281480aa933::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}