<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3158b51cefd1824e0209402369543171
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
        'cf97c57bfe0f23854afd2f3818abb7a0' => __DIR__ . '/..' . '/zendframework/zend-diactoros/src/functions/create_uploaded_file.php',
        '9bf37a3d0dad93e29cb4e1b1bfab04e9' => __DIR__ . '/..' . '/zendframework/zend-diactoros/src/functions/marshal_headers_from_sapi.php',
        'ce70dccb4bcc2efc6e94d2ee526e6972' => __DIR__ . '/..' . '/zendframework/zend-diactoros/src/functions/marshal_method_from_sapi.php',
        'f86420df471f14d568bfcb71e271b523' => __DIR__ . '/..' . '/zendframework/zend-diactoros/src/functions/marshal_protocol_version_from_sapi.php',
        'b87481e008a3700344428ae089e7f9e5' => __DIR__ . '/..' . '/zendframework/zend-diactoros/src/functions/marshal_uri_from_sapi.php',
        '0b0974a5566a1077e4f2e111341112c1' => __DIR__ . '/..' . '/zendframework/zend-diactoros/src/functions/normalize_server.php',
        '1ca3bc274755662169f9629d5412a1da' => __DIR__ . '/..' . '/zendframework/zend-diactoros/src/functions/normalize_uploaded_files.php',
        '40360c0b9b437e69bcbb7f1349ce029e' => __DIR__ . '/..' . '/zendframework/zend-diactoros/src/functions/parse_cookie_header.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zend\\Diactoros\\' => 15,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Contracts\\Translation\\' => 30,
            'Symfony\\Component\\Translation\\' => 30,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
        ),
        'I' => 
        array (
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Database\\' => 20,
            'Illuminate\\Contracts\\' => 21,
            'Illuminate\\Container\\' => 21,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 26,
        ),
        'C' => 
        array (
            'Carbon\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\Diactoros\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-diactoros/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Contracts\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation-contracts',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/database',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Illuminate\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/container',
        ),
        'Doctrine\\Common\\Inflector\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/inflector/lib/Doctrine/Common/Inflector',
        ),
        'Carbon\\' => 
        array (
            0 => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3158b51cefd1824e0209402369543171::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3158b51cefd1824e0209402369543171::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
