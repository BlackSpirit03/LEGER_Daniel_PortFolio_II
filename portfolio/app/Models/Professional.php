<?php
// Made or Customized by DLEGER

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    public $timestamps = true;
    protected $table = 't_professionals';
    protected $primaryKey = 'id'; 
    protected $fillable = [
        'user_id', 'language', 'short_label', 'detail', 'date_start', 'date_end'
    ];
}
