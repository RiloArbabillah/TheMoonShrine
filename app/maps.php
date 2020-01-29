<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maps extends Model
{
    //
    protected $table = 'map';

    protected $fillable = [
    	'nama_map',
    ];
}
