<?php

namespace App\Http\Middlewares;
use Buki\Router\Http\Middleware;

class Auth extends Middleware
{
    public function handle(){
            return true;
    }
}