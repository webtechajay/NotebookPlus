<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

	protected $fillable = ['photo_name'];
	
    public function images()
    {
        return $this->belongsTo('App\Photo');    
    }
}
