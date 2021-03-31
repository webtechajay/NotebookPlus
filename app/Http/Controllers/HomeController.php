<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notebook;
use DB;
use App\Photo;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $notebooks = $user->notebooks;
        $images = $user->images;
        $moviesImages = DB::Select("select movie_photo,movie_name,id from movies");
        // $notebooks = DB::Select("SELECT * FROM nbp.notebooks order by id desc;");

        
        // $images = DB::Select("SELECT * FROM nbp.photos order by id desc;");
        // dd($images);
        return view('home',compact('notebooks', 'images','moviesImages'));
    }

     public function adminHome()
    {
        return view('adminHome');
    }
}
