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
    
    public function correct()
    {
        return $this->hasOne(Correct::class);
    }

    public function responses()
    {
    	return $this->hasMany(TakepartResponse::class);
    }
}
