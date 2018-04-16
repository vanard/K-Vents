<?php

namespace App\Http\Controllers;
use App\UserIdentity;
use Illuminate\Http\Request;


class UserIdentitiyController extends Controller
{
   protected function PostEvent()
    {
        return UserIdentity::create([
            'name' => request('name'),
            'address' =>request('address'),
            'phone' => request('phone'),
            'social' => request('social'),
            'img_ktp'=> request('img_ktp')
		]);

    }
}
