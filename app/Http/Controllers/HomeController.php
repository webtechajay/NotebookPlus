<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notebook;
use DB;
use App\Photo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Movies;

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

        // Bollywood romance movie
        // ==========================
       

        $user = Auth::user();
        $notebooks = $user->notebooks;
        $images = $user->images;

        $moviesImages = DB::Select("select movie_photo,movie_name,id from movies");
        
        $bollywooodRomanceMovies = DB::select(" select movies.movie_name, movies.movie_photo,movies.id from movies
        left join movie_types
        on movies.movie_type_id = movie_types.id
        left join industries
        on movies.industry_id = industries.id
        where industries.industry_name='Bollywood' && movie_types.movie_type_name
        ='Romance'");

        $hollywooodActionMovies = DB::select("select movies.movie_name,movies.movie_photo,movies.id from movies left join
movie_types on movies.movie_type_id = movie_types.id
left join industries on movies.industry_id = industries.id
where industries.industry_name = 'Hollywood' && movie_types.movie_type_name = 'Action'");

        return view('home',compact('notebooks', 'images','moviesImages','bollywooodRomanceMovies','hollywooodActionMovies'));
    }


    public function searchMovies()
    {
        $q = Input::get ( 'q' );
        // dd($q);
        if($q != ""){
            $showMovies = Movies::where ( 'movie_name','LIKE', '%' . $q . '%' )->get();
            // dd($showMovies);
            if (count ( $showMovies ) > 0)
                return view ( 'search_movies',compact('showMovies') )->withDetails ( $showMovies )->withQuery ( $q );
            else
                return view ( 'search_movies' )->withMessage ( 'No Details found. Try to search again !' );
        }
        return view ( 'search_movies' )->withMessage ( 'No Details found. Try to search again !' );
    }

     public function adminHome()
    {
        return view('adminHome');
    }
}
