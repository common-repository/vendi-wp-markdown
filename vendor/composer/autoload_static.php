<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf343d4f53b452610c959aba5fbd2a8d3
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vendi\\WPMarkdown\\' => 17,
            'Vendi\\Shared\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vendi\\WPMarkdown\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Vendi\\Shared\\' => 
        array (
            0 => __DIR__ . '/..' . '/vendi-advertising/vendi-shared-utils/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Michelf' => 
            array (
                0 => __DIR__ . '/..' . '/michelf/php-markdown',
            ),
        ),
    );

    public static $classMap = array (
        'Michelf\\Markdown' => __DIR__ . '/..' . '/michelf/php-markdown/Michelf/Markdown.php',
        'Michelf\\MarkdownExtra' => __DIR__ . '/..' . '/michelf/php-markdown/Michelf/MarkdownExtra.php',
        'Michelf\\MarkdownInterface' => __DIR__ . '/..' . '/michelf/php-markdown/Michelf/MarkdownInterface.php',
        'Vendi\\Shared\\fs_utils' => __DIR__ . '/..' . '/vendi-advertising/vendi-shared-utils/src/fs_utils.php',
        'Vendi\\Shared\\utils' => __DIR__ . '/..' . '/vendi-advertising/vendi-shared-utils/src/utils.php',
        'Vendi\\Shared\\utils_exception' => __DIR__ . '/..' . '/vendi-advertising/vendi-shared-utils/src/utils_exception.php',
        'Vendi\\WPMarkdown\\settings' => __DIR__ . '/../..' . '/src/settings.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf343d4f53b452610c959aba5fbd2a8d3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf343d4f53b452610c959aba5fbd2a8d3::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf343d4f53b452610c959aba5fbd2a8d3::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitf343d4f53b452610c959aba5fbd2a8d3::$classMap;

        }, null, ClassLoader::class);
    }
}
