<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Takepart extends Model
{
    protected $guarded = [];

    public function quiz()
    {
    	return $this->belongsTo(Quiz::class);
    }

    public function responses()
    {
    	return $this->hasMany(TakepartResponse::class);
    }
}
