<?php

namespace App\Core;
use Jenssegers\Blade\Blade;

class Controller extends Bootstrap
{
    static function view($viewName, $data = []){
        $blade = new Blade('./resources/views', './cache');
        return $blade->render($viewName, $data);
    }
}