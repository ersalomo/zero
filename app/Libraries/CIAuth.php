<?php
namespace App\Libraries;
class CIAuth
{
    public static function setCIAuth($data) {
        $session = session();

        $session->set('user', $data);
        $session->set(['logged_id' => true]);
    }

    public static function id() {
        $session = session();
        if (!self::check()) return null;

        if($user = $session->get('user')){
            return $user['id'];
        }
        return  null;
    }

    public static function check():bool {
        $session = session();
        return $session->has('logged_id');
    }
    public static function remove():void {
        $session = session();

        $session->remove('logged_id');
        $session->remove('user');

    }
    public static function user() {
        $session = session();
        if(!self::check()) return null;

        if($user = $session->get('user')) {
            return $user;
        }
        return null;
    }

}