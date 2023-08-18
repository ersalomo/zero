<?php

namespace App\Controllers\BE;

use App\Controllers\BaseController;
use App\Services\Post\PostService;
use App\Services\Post\PostServiceInterface;
use App\Services\storage\StorageService;

class Post extends BaseController
{

    private PostServiceInterface $postService;
    private $storageImage;

    public function __construct()
    {
        $this->postService = new PostService();
        $this->storageImage = new StorageService();
    }

    public function index(): string
    {
        return view('backend/post/index', [
            'pageTitle' => 'All Posts'
        ]);
    }

    public function create(): string
    {
        return view('backend/post/create', [
            'pageTitle' => 'Create new'
        ]);
    }

    public function store()
    {
        try {
            $req = \Config\Services::request();
            $validation = \Config\Services::validation();
            $this->validate([
                'title' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'masukkan {field}',
                    ],
                ],
                'content' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'masukkan {field}',
                    ],
                ],
                'poster' => [
                    'rules' => [
                        'is_image[poster]',
                        'mime_in[poster, image/jpg, image/jpeg, image/gif, image/png, image/webp]',
                        'max_size[poster, 4096]'
                    ],
                    'errors' => [
                        'is_image' => 'harus gambar',
                        'mime_in' => 'hanya menerima gambar dengan tipe: jpg, jpeg, gif, png, webp',
                        'max_size' => 'max 4mb'
                    ]
                ],
            ]);


            if (!$validation->run()) {
                return $this->response->setJSON([
                    'status' => 'fail',
                    'code' => 0,
                    'errors' => $this->validator->getErrors(),
                    'token' => csrf_hash(),
                ]);
            }

            $filename = $this->storageImage->saveImage($this->request->getFile('poster'));
            if (empty($filename) || $filename == '') {
                return json_encode([
                    'status' => 'fail',
                    'fail' => 'something went wrong',
                ]);
            }

            $title = $req->getVar('title');
            $data = array(
                'content' => $req->getVar('content'),
                'title' => $title,
                'slug' => url_title($title),
                'poster' => $filename,
            );

            $this->postService->create($data);
            return json_encode([
                'status' => 'success',
                'code' => 1,
                'message' => 'post added',
            ]);
        } catch (\Exception $e) {

        return $this->response->setJSON([
            'status' => 'fail',
            'code' => 0,
            'message' => $e->getMessage()
        ]);
        }
    }
}
