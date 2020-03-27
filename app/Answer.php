<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $guarded = [];

    public function question()
    {
    	return $this->belongsTo(Question::class);
    }

    public function reponses()
    {
    	return $this->hasMany(TakepartResponse::class);
    }
}
