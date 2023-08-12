<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Services\Post\{PostServiceInterface, PostService};


class PostController extends BaseController
{
    private PostServiceInterface  $postService;
    public function __construct()
    {
        $this->postService = new PostService();
    }

    public function index(): string
    {
        $posts = $this->postService->all();
        if ($q = $this->request->getVar('q')) {


        }
        return view('frontend/pages/posts/index', [
            'posts' => $posts
        ]);
    }

    public function show($id): string
    {

        return view('frontend/pages/posts/show', [
            'id' => $id
        ]);

    }
}
