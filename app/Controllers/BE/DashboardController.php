<?php

namespace App\Controllers\BE;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index():string
    {
        return view('backend/dashboard/dashboard', [
            'pageTitle' => 'Dashboard Admin'
        ]);
    }
}
