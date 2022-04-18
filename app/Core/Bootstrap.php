<?php

namespace App\Core;

use Buki\Router\Router;
use Illuminate\Database\Capsule\Manager as Capsule;

class Bootstrap
{
    public $router;

    /**
     *
     */
    public function __construct()
    {
        $this->router = new Router(
            [
                'paths' => [
                    'controllers' => 'app/Http/Controllers',
                    'middlewares' => 'app/Http/Middlewares',
                ],
                'namespaces' => [
                    'controllers' => 'App\Http\Controllers',
                    'middlewares' => 'App\Http\Middlewares',
                ]
            ]
        );
        $capsule = new Capsule;
        $capsule->addConnection([
            'driver' => config('DB_DRIVER'),
            'host' => config('DB_HOST'),
            'database' => config('DB_NAME'),
            'username' => config('DB_USER'),
            'password' => config('DB_PASS'),
            'charset' => config('DB_CHARSET'),
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ]);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();

    }


    /**
     * @throws \Exception
     */
    public function run()
    {
        $this->router->run();
    }
}