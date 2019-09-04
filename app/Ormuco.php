<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ormuco extends Model
{
	protected $fillable
		= [
			'name',
			'color',
			'pet'
		];
}
