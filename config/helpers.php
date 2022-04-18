<?php
use App\Core\Controller;
use App\Core\App;
use Arrilot\DotEnv\DotEnv;
function view($viewName, $data = []){
    $controller = new Controller();
    return $controller->view($viewName, $data);
}
function getConfig($config){
    $app =  require('app.php');
    return $app[$config];
}

function app(){
    $app = new App();
    return $app;
}

function config($key){
    DotEnv::load('.env.php');
    return DotEnv::get($key);
}
function assets($url){
    return config('APP_URL').'public/'.$url;
}