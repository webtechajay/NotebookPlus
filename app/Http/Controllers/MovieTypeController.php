<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MovieType;

class MovieTypeController extends Controller
{

	public function index()
	{
		$viewMovieTypes = MovieType::all();
		return view('admin.movietype.index')->with(compact('viewMovieTypes'));
	}
    public function create()
    {
    	return view('admin.movietype.create');
    }

    public function store(Request $request)
    {
    	$storeMovieTypes = new MovieType();
    	$storeMovieTypes->movie_type_name = $request->movie_type_name;
    	$storeMovieTypes->save();
    	return redirect('/admin/view_movie_type');
    }

    public function edit($movietype)
    {	
    	$editMovieTypes = MovieType::find($movietype);
    	return view('admin.movietype.edit')->with(compact('editMovieTypes'));
    }

    public function update(Request $request,$movietype)
    {
    	$updateMovieTypes = MovieType::find($movietype);
    	$updateMovieTypes->movie_type_name = $request->movie_type_name;
    	$updateMovieTypes->save();
    	return redirect('/admin/view_movie_type');
    }

    public function destroy($movietype)
    {
    	$destroyMovieTypes = MovieType::find($movietype);
    	$destroyMovieTypes->delete();
    	return redirect('admin/view_movie_type');
    }

    public function show($movietype)
    {
    	$showMovieTypes = MovieType::find($movietype);
    	return view('admin.movietype.show')->with(compact('showMovieTypes'));
    }
}
