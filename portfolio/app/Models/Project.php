<?php
// Made or Customized by DLEGER

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $timestamps = true;
    protected $table = 't_projects';
    protected $primaryKey = 'id'; 
    protected $fillable = [
        'user_id', 'language', 'short_label', 'detail', 'photo', 'date_start', 'date_end'
    ];
}
