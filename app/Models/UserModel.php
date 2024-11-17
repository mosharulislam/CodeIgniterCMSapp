<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'password', 'email_verified_at', 'remember_token', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
}
