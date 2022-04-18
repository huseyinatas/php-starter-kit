<?php

$router->get('/', 'HomeController@index', ['before' => 'Auth']);
