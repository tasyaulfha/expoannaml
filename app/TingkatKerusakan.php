<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TingkatKerusakan extends Model
{
    protected $table = 'tingkat_kerusakan';

    protected $fillable = [
    	'level'];
    protected $dates = ['deleted_at'];
}
