<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infrastruktur extends Model
{
    protected $table = 'nama_infrastruktur';

    protected $fillable = [
    	'nama'];
    protected $dates = ['deleted_at'];
}
