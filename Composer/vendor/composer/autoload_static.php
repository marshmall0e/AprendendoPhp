<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3202811f94f445eb2d32e5baf11b2b79
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit3202811f94f445eb2d32e5baf11b2b79::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit3202811f94f445eb2d32e5baf11b2b79::$classMap;

        }, null, ClassLoader::class);
    }
}
