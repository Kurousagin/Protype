<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentt extends Model
{
    use HasFactory;
    
    public function comentario(){ 
    	return $this->belongsTo('App\Models\User');
    }
}
