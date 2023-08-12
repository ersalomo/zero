<?php

namespace App\Services\Post;
use App\Models\Post;

class PostService implements PostServiceInterface
{
    private $post;
    public function __construct() {
        $this->post = new Post();
    }

    public function all()
    {
        return $this->post->findAll();
    }
}