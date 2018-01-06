<?php
// Made or Customized by DLEGER

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    public $timestamps = true;
    protected $table = 't_personals';
    protected $primaryKey = 'id'; 
    protected $fillable = [
        'user_id', 'language', 'short_label', 'detail', 'date_start', 'date_end'
    ];
}
