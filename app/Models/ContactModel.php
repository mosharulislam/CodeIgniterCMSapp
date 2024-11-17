<?php namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contacts';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'name', 'email', 'phone', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
}
