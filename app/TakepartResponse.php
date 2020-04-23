<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TakepartResponse extends Model
{
    protected $guarded = [];

    public function takepart()
    {
    	return $this->belongsTo(Takepart::class);
    }

    public function answer()
    {
    	return $this->belongsTo(Answer::class);
    }
    
    public function question()
    {
    	return $this->belongsTo(Question::class);
    }
}
