<?php

namespace App\Models;

use CodeIgniter\Model;

class ResetPassword extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'reset_passwords';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'email',
        'token',
        'created_at'
    ];
}
