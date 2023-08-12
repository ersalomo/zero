<?php

namespace App\Services\User;
use App\Models\User;
class UserServices
{
    private User $user;

    public function __construct() {
        $this->user = new User();
    }

    public function find($id) {
        return $this->user->find($id);
    }

    public function findBy(string $attr, $value) {
        $user = $this->user->where($attr ,$value)->first();
        return $user;}



    public function create(array $data) {
        $user = $this->user->insert($data);
        return $user;
    }

    public function update(array  $data) {
        $this->user->where('email', $data['email'])->set([
            'password' => $data['new_password']
        ])->update();
    }
}