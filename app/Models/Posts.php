<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $table = "posts";

    protected $fillable = [
        'user_id',
        'bodyContent',  
        'postImage'
    ];

    public function user(){ 
    	return $this->belongsTo('App\Models\User');
    }

}
