<?php

namespace App\Services\storage;

use CodeIgniter\HTTP\Files\UploadedFile;

class StorageService
{
    public function saveImage(UploadedFile $fileImage): string
    {
        try {
            $filename = $fileImage->getRandomName();
            $fileImage->move('posts/images', $filename);
            return $filename;

        } catch (\Exception $e) {
            return '';
        }
    }
}