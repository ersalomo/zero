<?php
namespace App\Libraries;
class Hash
{
    public static function hash(string $password):string {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    public static function check(string $password, $hashedPwd):string {
        if (password_verify($password, $hashedPwd)) {
            return true;
        };
        return false;
    }
}