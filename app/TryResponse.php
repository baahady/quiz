<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TryResponse extends Model
{
    protected $guarded = [];

    public function try()
    {
    	return $this->belongsTo(Try::class);
    }
}
