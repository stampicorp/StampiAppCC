<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{
	protected $fillable = ['title','content'];
     public function user()
    {
        return $this->belongsTo('App\User');
    }
}
