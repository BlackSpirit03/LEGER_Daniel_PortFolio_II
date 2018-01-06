<?php
// Made or Customized by DLEGER

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = true;
    protected $table = 'users';
    protected $primaryKey = 'id'; 
    protected $fillable = [
        'name', 'email', 'password', 'url'
    ];
}
