<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acs = DB::table('users_identity')->get();

         return view('index', ['acs' => $acs]);
    }

    public function home_admin()
    {
      $acs = DB::table('users_identity')->get();

      return view('home_admin', ['acs' => $acs]);
    }

    public function home_user()
    {
      $acs = DB::table('users_identity')->get();

      return view('home_user', ['acs' => $acs]);
    }
}
