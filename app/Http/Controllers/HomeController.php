<?php

namespace App\Http\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index(){
       return self::view('home');
    }
}