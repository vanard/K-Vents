<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserIdentity extends Model
{
    protected $fillable = [
        'id', 'name', 'address', 'phone', 'social', 'img_ktp'
    ];
}
