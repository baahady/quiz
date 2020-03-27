<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];

    public function quiz()
    {
    	return $this->belongsTo(Quiz::class);
    }

    public function answers()
    {
    	return $this->hasMany(Answer::class);
    }

    public function responses()
    {
    	return $this->hasMany(TakepartResponse::class);
    }
}
