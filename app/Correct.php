<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Correct extends Model
{
    protected $guarded = [];

    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
