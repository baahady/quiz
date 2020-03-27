<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TryResponse extends Model
{
    protected $guarded = [];

    public function Takepart()
    {
    	return $this->belongsTo(Takepart::class);
    }
}
