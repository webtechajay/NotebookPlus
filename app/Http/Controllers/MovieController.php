<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;

class MovieController extends Controller
{

  public function index()
  {
    $viewMovies = Movies::all();
    return view('admin.movies.index',compact('viewMovies'));
  }

    public function create()
    {
    	return view('admin.movies.create');
    }

    public function store(Request $request)
    {
    	$storeMovies = new Movies();
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
}
