<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Try extends Model
{
    protected $guarded = [];

    public function quiz()
    {
    	return $this->belongsTo(Quiz::class)
    }

    public function responses()
    {
    	return $this->hasMany(TryResponse::class);
    }
}
