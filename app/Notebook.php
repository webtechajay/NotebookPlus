<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    protected $fillable = ['notebook_name'];

     public function notes()
    {
    	return $this->hasMany('App\Note');
    }
}
