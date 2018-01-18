<?php
// Made or Customized by DLEGER

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = true;
    protected $table = 'users';
    protected $primaryKey = 'id'; 
    protected $api_token = 'api_token';
    protected $fillable = [
        'name', 'email', 'phone', 'password', 'url', 'api_token'
    ];
}
