<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use App\Photo;
use Illuminate\Support\Facades\Auth;




class ImagesController extends Controller
{

    public function index()
    {   
       $user  = Auth::user();
       $images = $user->images;
    	// $images = Photo::all();
      
    	return view('images.index', compact('images'));
    }

    public function create()
    {
    	return view('images.create');
    }

    public function store(Request $request)
    {
       request()->validate([
            'profileImage.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
         
       if ($files = $request->file('profileImage')) {
       	// Define upload path
       
            

            $destinationPath = public_path('/profile_images/'); // upload path
            foreach($files as $img) {
				// Upload Orginal Image           
	           $profileImage =$img->getClientOriginalName();
	           $img->move($destinationPath, $profileImage);


	        	// Save In Database
              
               $user = Auth::user();
				$imagemodel= new Photo($request->all());
				$imagemodel->photo_name="$profileImage";
                $user->images()->save($imagemodel);
				// $imagemodel->save();
			}

        }
        return redirect('/image')->with('success', 'Image Upload successfully');
 
    }

    public function show($id)
    {
        $user  = Auth::user();
        $images = $user->images()->find($id);
    	// $images = Photo::find($id);
    	// dd($images);
    	return view('images.show', compact('images'));
    }

    public function destroy($id)
    {   
        $user  = Auth::user();
        $images = $user->images()->find($id);
    	// $images = Photo::find($id);
    	// dd($images);
    	$images->delete();

    	return redirect('/image')->with("danger","image delete successfuly");
    }
}
