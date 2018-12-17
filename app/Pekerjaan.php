<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pekerjaan extends Model
{
    protected $table = 'pekerjaan';

    protected $fillable = [
    	'posisi'];
    protected $dates = ['deleted_at'];
}
