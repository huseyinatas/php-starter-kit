<?php

namespace App\Http\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    /**
     * @return string
     */
    public function index(): string
    {
        return view('example');
    }
}