<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1b6adc455166df842cde16375920beb4
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\Form\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\Form\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Modules\\Form\\Database\\Seeders\\ClientsTableSeeder' => __DIR__ . '/../..' . '/Database/Seeders/ClientsTableSeeder.php',
        'Modules\\Form\\Database\\Seeders\\FormDatabaseSeeder' => __DIR__ . '/../..' . '/Database/Seeders/FormDatabaseSeeder.php',
        'Modules\\Form\\Entities\\Client' => __DIR__ . '/../..' . '/Entities/Client.php',
        'Modules\\Form\\Http\\Controllers\\Auth\\RegisterController' => __DIR__ . '/../..' . '/Http/Controllers/Auth/RegisterController.php',
        'Modules\\Form\\Http\\Controllers\\FormController' => __DIR__ . '/../..' . '/Http/Controllers/FormController.php',
        'Modules\\Form\\Http\\Requests\\ClientRequest' => __DIR__ . '/../..' . '/Http/Requests/ClientRequest.php',
        'Modules\\Form\\Providers\\FormServiceProvider' => __DIR__ . '/../..' . '/Providers/FormServiceProvider.php',
        'Modules\\Form\\Providers\\RouteServiceProvider' => __DIR__ . '/../..' . '/Providers/RouteServiceProvider.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1b6adc455166df842cde16375920beb4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1b6adc455166df842cde16375920beb4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1b6adc455166df842cde16375920beb4::$classMap;

        }, null, ClassLoader::class);
    }
}
