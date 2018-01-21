<?php
// Made or Customized by DLEGER

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public $timestamps = true;
    protected $table = 't_skills';
    protected $primaryKey = 'id'; 
    protected $fillable = [
        'user_id', 'language', 'short_label', 'detail', 'level', 'order', 'logo'
    ];
}
