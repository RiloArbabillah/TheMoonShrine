<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class elemen extends Model
{
    //
    protected $tables = 'elemen';
    protected $fillable = [
    	'name', 'strong_to',
	];
}
