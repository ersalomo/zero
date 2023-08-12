<?php

namespace App\Controllers\BE;

use App\Controllers\BaseController;

class Author extends BaseController
{
    public function index():string
    {
        return view('backend/author/index', [
            'pageTitle' => 'All Authors'
        ]);
    }
}
