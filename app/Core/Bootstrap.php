<?php

namespace App\Core;

use Buki\Router\Router;

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
    }


    /**
     * @throws \Exception
     */
    public function run()
    {
        $this->router->run();
    }
}