<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Correct extends Model
{
    protected $guarded = [];

    public function question()
    {
        $this->belongsTo(Question::class);
    }
}
