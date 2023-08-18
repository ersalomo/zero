<?php

namespace App\Services\Post;

interface PostServiceInterface
{
    public function all();
    public function create(array $data);
}