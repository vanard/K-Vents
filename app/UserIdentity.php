<?php

namespace App;

use Illuminate\Database\Eloquent\Model;	

class UserIdentity extends Model
{
// name	address	phone	social	img_ktp
	protected $fillable = [
		'name', 'address', 'phone', 'social', 'img_ktp'
	];

}
