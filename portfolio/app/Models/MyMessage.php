<?php
// Made or Customized by DLEGER

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MyMessage extends Model
{
    public $timestamps = true;
    protected $table = 't_messages';
    protected $primaryKey = 'id'; 
    protected $fillable = [
        'user_id', 'name_contact', 'company_contact', 'phone_contact', 'email', 'message', 'flag_urgent'
    ];
}
