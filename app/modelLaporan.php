<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelLaporan extends Model
{
    protected $table = 'laporans';

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }
}
