<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit92d2a25f6664beb32e0ef0a5a316d222
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhotoPress\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhotoPress\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'photopress_framework' => __DIR__ . '/../..' . '/framework/class-pp-framework.php',
        'photopress_loader' => __DIR__ . '/../..' . '/framework/class-loader.php',
        'photopress_module' => __DIR__ . '/../..' . '/framework/class-module.php',
        'photopress_options' => __DIR__ . '/../..' . '/framework/class-options.php',
        'photopress_package' => __DIR__ . '/../..' . '/framework/class-package.php',
        'photopress_settingsPage' => __DIR__ . '/../..' . '/framework/class-settings.php',
        'photopress_settings_field' => __DIR__ . '/../..' . '/framework/class-settings.php',
        'photopress_settings_field_boolean' => __DIR__ . '/../..' . '/framework/class-settings.php',
        'photopress_settings_field_booleanarray' => __DIR__ . '/../..' . '/framework/class-settings.php',
        'photopress_settings_field_commaseparatedlist' => __DIR__ . '/../..' . '/framework/class-settings.php',
        'photopress_settings_field_integer' => __DIR__ . '/../..' . '/framework/class-settings.php',
        'photopress_settings_field_none' => __DIR__ . '/../..' . '/framework/class-settings.php',
        'photopress_settings_field_onoffarray' => __DIR__ . '/../..' . '/framework/class-settings.php',
        'photopress_settings_field_select' => __DIR__ . '/../..' . '/framework/class-settings.php',
        'photopress_settings_field_text' => __DIR__ . '/../..' . '/framework/class-settings.php',
        'photopress_settings_field_textarea' => __DIR__ . '/../..' . '/framework/class-settings.php',
        'photopress_settings_field_url' => __DIR__ . '/../..' . '/framework/class-settings.php',
        'photopress_settings_section' => __DIR__ . '/../..' . '/framework/class-settings.php',
        'photopress_util' => __DIR__ . '/../..' . '/framework/class-util.php',
        'pp_api' => __DIR__ . '/../..' . '/framework/class-pp-api.php',
        'pp_controller' => __DIR__ . '/../..' . '/framework/class-controller.php',
        'pp_meta' => __DIR__ . '/../..' . '/framework/class-metadata.php',
        'pp_post_meta' => __DIR__ . '/../..' . '/framework/class-metadata.php',
        'pp_taxonomy_meta' => __DIR__ . '/../..' . '/framework/class-metadata.php',
        'pp_view' => __DIR__ . '/../..' . '/framework/class-view.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit92d2a25f6664beb32e0ef0a5a316d222::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit92d2a25f6664beb32e0ef0a5a316d222::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit92d2a25f6664beb32e0ef0a5a316d222::$classMap;

        }, null, ClassLoader::class);
    }
}
