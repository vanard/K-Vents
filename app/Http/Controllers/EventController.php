<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Event;

class EventController extends Controller
{
    public function createEvent(Request $req)
    {
        $this->validate($req, [
            'judul' => 'required',
            'target' => 'required',
            'deadline' => 'required',
            'deskripsi' => 'required',
            'img_event' => 'required|image|mimes:jpeg,png,jpg,gif|max:4096']);

        $photo = "";
        if ($req->hasFile('img_event')) {
            $destination = "img_events";
            $image = $req->img_event;
            $ext = $image->getClientOriginalExtension();
            $fileName = time() . '.' . $ext;
            $image->move($destination, $fileName);
            $photo = $fileName;    
        }

        $data = [
            'judul' => $req->judul,
            'target' => $req->target,
            'deadline' => $req->deadline,
            'deskripsi' => $req->deskripsi,
            'img_event' => $photo
        ];

        // UserIdentity::create($data);
        DB::table('events')->insert($data);

        return redirect('join_event')->with('success', 'sucessfully uploaded');

    }
}
