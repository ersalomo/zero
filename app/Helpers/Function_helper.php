<?php

use App\Libraries\CIAuth;

use App\Models\User;

if (!function_exists('get_user')) {
    function get_user()
    {
        if (!CIAuth::check()) return null;
        $user = new User();
        return $user->find(CIAuth::id());
    }
}