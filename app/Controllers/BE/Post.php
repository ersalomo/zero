<?php

namespace App\Controllers\BE;

use App\Controllers\BaseController;

class Post extends BaseController
{
    public function index():string
    {
        return view('backend/post/index', [
            'pageTitle' => 'All Posts'
        ]);
    }
}
