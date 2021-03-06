<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserIdentity;
use Validator;
use DB;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserIdentitiyController extends Controller
{
   public function store(Request $req)
    {
        $this->validate($req, [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required|min:10',
            'social' => 'required',
            'img_ktp' => 'required|image|mimes:jpeg,png,jpg,gif|max:4096']);

        $photo = "";
        if ($req->hasFile('img_ktp')) {
            $destination = "img_users";
            $image = $req->img_ktp;
            $ext = $image->getClientOriginalExtension();
            $fileName = time() . '.' . $ext;
            $image->move($destination, $fileName);
            $photo = $fileName;    
        }

        $id = Auth::user()->id;

        $data = [
            'id' => $id,
            'name' => $req->name,
            'address' => $req->address,
            'phone' => $req->phone,
            'social' => $req->social,
            'img_ktp' => $photo
        ];

        // UserIdentity::create($data);
        DB::table('users_identity')->insert($data);
        return redirect('make_event')->with('success', 'sucessfully uploaded');
        
    }

    public function show(){
        $acs = DB::table('users_identity')->get();

        return view('account_settings', ['acs' => $acs]);
    }

}
