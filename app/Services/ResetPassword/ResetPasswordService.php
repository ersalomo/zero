<?php

namespace App\Services\ResetPassword;

use App\Models\ResetPassword;
use App\Models\User;
use CodeIgniter\Model;

class ResetPasswordService
{
    private Model $resetPwd;

    public function __construct()
    {
        $this->resetPwd = new ResetPassword();
        $this->user = new User();
    }

    public function findByEmail(string $email) {
      return $this->resetPwd->where('email', $email)->first();
    }
    public function findByToken(string $token) {
      return $this->resetPwd->where('token', $token)->first();
    }

    public function create(array $data) {
        return $this->resetPwd->insert($data);
    }

    public function update(string $email, array $data): bool {
        return $this->resetPwd->where('email', $email)->set([
            'token' => $data['token'],
            'created_at' => $data['created_at']
        ])->update();
    }

}