<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
    protected $helpers = ['Function'];

    public function index(): string
    {
        return view('frontend/pages/home/home', [
            'pageTitle' => 'Home Page'
        ]);
    }
}
