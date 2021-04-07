<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;
use App\Industry;
use App\MovieType;
use DB;



class MovieController extends Controller
{

  public function index()
  {
    $viewMovies = Movies::all();
    return view('admin.movies.index',compact('viewMovies'));
  }

    public function create()
    {
      $Industries = Industry::all();
      $movieTypes = MovieType::all();
    	return view('admin.movies.create',compact('Industries', 'movieTypes'));
    }

    public function store(Request $request)
    {
    	$storeMovies = new Movies();
    	$storeMovies->industry_id = $request->industry_id;
      $storeMovies->movie_type_id = $request->movie_type_id;
      $storeMovies->movie_title = $request->movie_title;
      $storeMovies->movie_name = $request->movie_name;

    	if($request->hasfile('movie_photo')){
          $img_tmp = $request->file('movie_photo');
          if($img_tmp->isValid()){

          //image path code
          $extension = $img_tmp->getClientOriginalExtension();
          $filename = rand(111,99999).'.'.$extension;
          $img_path = public_path('/uploads/movie_photo'); 
          $img_tmp->move($img_path,$filename);

          //image resize
          // image::make($img_tmp)->resize(500,500)->save($img_path);

          $storeMovies->movie_photo = $filename;
        }
        }

        $storeMovies->movie_desc = $request->movie_desc;

        if($request->hasfile('movie_screen_short')){
          $img_tmp = $request->file('movie_screen_short');
          if($img_tmp->isValid()){

          //image path code
          $extension = $img_tmp->getClientOriginalExtension();
          $filename = rand(111,99999).'.'.$extension;
          $img_path = public_path('/uploads/movie_screen_short'); 
          $img_tmp->move($img_path,$filename);

          //image resize
          // image::make($img_tmp)->resize(500,500)->save($img_path);

          $storeMovies->movie_screen_short = $filename;
        }
        }

        if($request->hasfile('movie_dawnload_photo')){
          $img_tmp = $request->file('movie_dawnload_photo');
          if($img_tmp->isValid()){

          //image path code
          $extension = $img_tmp->getClientOriginalExtension();
          $filename = rand(111,99999).'.'.$extension;
          $img_path = public_path('/uploads/movie_dawnload_photo'); 
          $img_tmp->move($img_path,$filename);

          //image resize
          // image::make($img_tmp)->resize(500,500)->save($img_path);

          $storeMovies->movie_dawnload_photo = $filename;
        }
        }

        $storeMovies->movie_source = $request->movie_source;

        $storeMovies->save();
        return redirect('/admin/view_movie');
    }


    public function show($movie)
    {
      $showMovies = Movies::find($movie);
      return view('admin.movies.show', compact('showMovies'));
    }

    public function edit($movie)
    {
      $editMovies = Movies::find($movie);
      return view('admin.movies.edit',compact('editMovies'));
    }

    public function update(Request $request, $movie)
    {
      $updateMovies = Movies::find($movie);
      $updateMovies->movie_title = $request->movie_title;
      $updateMovies->movie_name = $request->movie_name;

      if($request->hasfile('movie_photo')){
          $img_tmp = $request->file('movie_photo');
          if($img_tmp->isValid()){

          //image path code
          $extension = $img_tmp->getClientOriginalExtension();
          $filename = rand(111,99999).'.'.$extension;
          $img_path = public_path('/uploads/movie_photo'); 
          $img_tmp->move($img_path,$filename);

          //image resize
          // image::make($img_tmp)->resize(500,500)->save($img_path);

          $updateMovies->movie_photo = $filename;
        }
        }

        $updateMovies->movie_desc = $request->movie_desc;

        if($request->hasfile('movie_screen_short')){
          $img_tmp = $request->file('movie_screen_short');
          if($img_tmp->isValid()){

          //image path code
          $extension = $img_tmp->getClientOriginalExtension();
          $filename = rand(111,99999).'.'.$extension;
          $img_path = public_path('/uploads/movie_screen_short'); 
          $img_tmp->move($img_path,$filename);

          //image resize
          // image::make($img_tmp)->resize(500,500)->save($img_path);

          $updateMovies->movie_screen_short = $filename;
        }
        }

        if($request->hasfile('movie_dawnload_photo')){
          $img_tmp = $request->file('movie_dawnload_photo');
          if($img_tmp->isValid()){

          //image path code
          $extension = $img_tmp->getClientOriginalExtension();
          $filename = rand(111,99999).'.'.$extension;
          $img_path = public_path('/uploads/movie_dawnload_photo'); 
          $img_tmp->move($img_path,$filename);

          //image resize
          // image::make($img_tmp)->resize(500,500)->save($img_path);

          $updateMovies->movie_dawnload_photo = $filename;
        }
        }

        $updateMovies->movie_source = $request->movie_source;

        $updateMovies->save();
        return redirect('/admin/view_movie');
    }

    public function destroy($movie)
    {
      $deleteMovies = Movies::find($movie);
      $deleteMovies->delete();
      return redirect('/admin/view_movie');
    }

    public  function showRecentlyAddMovies()
    {
      $showRecentlyAddMovies = DB::select("select * from movies order by id desc");
      return view('admin.movies.show_recent_add_movies',compact('showRecentlyAddMovies'));
    }

    public function showBollywoodRomanceMovies()
    {
      $bollywooodRomanceMovies = DB::select(" select movies.movie_name, movies.movie_photo,movies.id from movies
        left join movie_types
        on movies.movie_type_id = movie_types.id
        left join industries
        on movies.industry_id = industries.id
        where industries.industry_name='Bollywood' && movie_types.movie_type_name
        ='Romance' order by id desc");
      return view('admin.movies.bollywood_romance_movies',compact('bollywooodRomanceMovies'));
    }

    public function showHollywoodActionMovies()
    {
      $hollywoodActionMovies = DB::select("select movies.movie_name,movies.movie_photo,movies.id from movies left join
movie_types on movies.movie_type_id = movie_types.id
left join industries on movies.industry_id = industries.id
where industries.industry_name = 'Hollywood' && movie_types.movie_type_name = 'Action' order by id desc ");

      return view('admin.movies.hollywood_action_movies',compact('hollywoodActionMovies'));
    }

    public function showBollywoodActionMovies()
    {
      $BollywoodActionMovies = DB::select("select movies.movie_name,movies.movie_photo,movies.id from movies 
left join movie_types on movies.movie_type_id = movie_types.id
left join industries on movies.industry_id = industries.id
where industries.industry_name = 'Bollywood' && movie_types.movie_type_name = 'Action' order by id desc ");

      return view('admin.movies.bollywood_action_movies',compact('BollywoodActionMovies'));
    }


    public function showBollywoodComedyMovies()
    {
      $BollywoodComedyMovies = DB::select("select movies.movie_name,movies.movie_photo,movies.id from movies
left join movie_types on movie_types.id = movies.movie_type_id
left join industries on industries.id = movies.industry_id
where industries.industry_name ='Bollywood' && movie_types.movie_type_name='Comedy' order by id desc ");

      return view('admin.movies.bollywood_comedy_movies',compact('BollywoodComedyMovies'));
    }


    public function showHollywoodRomanceMovies()
    {
      $hollywoodRomanceMovies = DB::select("select movies.movie_name,movies.movie_photo,movies.id from movies
left join movie_types on movie_types.id = movies.movie_type_id
left join industries on industries.id = movies.industry_id
where industries.industry_name ='Hollywood' && movie_types.movie_type_name='Romance' order by id desc ");

      return view('admin.movies.hollywood_romance_movies',compact('hollywoodRomanceMovies'));
    }


    public function showHollywoodComedyMovies()
    {
      $hollywoodComedyMovies = DB::select("select movies.movie_name,movies.movie_photo,movies.id from movies
left join movie_types on movie_types.id = movies.movie_type_id
left join industries on industries.id = movies.industry_id
where industries.industry_name ='Hollywood' && movie_types.movie_type_name='Comedy' order by id desc ");

      return view('admin.movies.hollywood_comedy_movies',compact('hollywoodComedyMovies'));
    }





}
