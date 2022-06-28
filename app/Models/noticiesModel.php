<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class noticiesModel extends Model
{
    use HasFactory;

    protected $table = "noticias";

    protected $fillable = [
        'user_id',
        'tittle',  
        'noticiaImage'
    ];

    public function user(){ 
    	return $this->belongsTo('App\Models\User');
    }



}
