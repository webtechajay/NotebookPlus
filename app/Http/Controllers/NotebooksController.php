<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notebook;
use Illuminate\Support\Facades\Auth;


class NotebooksController extends Controller
{
    public function index()
    {
        $user  = Auth::user();
        // dd($user);
        $notebooks = $user->notebooks;

        // dd($notebooks);
    	return view('notebooks.index')->with(compact('notebooks'));
    }

    public function create()
    {
    	return view('notebooks.create_notebook');
    }

    public function store(Request $request)
    {
    	$dataInput = $request->all();
        // dd($dataInput);
        $user = Auth::user();
        $user->notebooks()->create($dataInput);
       
    	// Notebook::create($dataInput);

    	return redirect('/notebooks')->with('success', 'Notebook created successfully !');
    }

    public function edit($id)
    {
        $user = Auth::user();
        $notebook = $user->notebooks()->where('id', $id)->first();
       // $notebook = Notebook::where('id', $id)->first();
        return view('notebooks.edit')->with(compact('notebook', $notebook));
    }

    public function update(Request $request, $id)
    {

        $user  = Auth::user();
        $notebook = $user->notebooks()->find($id);
        $notebook->update($request->all());
        // $notebook = Notebook::where('id', $id)->first();
        
        //  $notebook->update($request->all());


        return redirect('/notebooks')->with('success', 'Notebook updated successfully !');
    }

    public function destroy($id)
    {

        $user  = Auth::user();
        $notebook = $user->notebooks()->find($id);
        $notebook->delete();
        // $notebook = Notebook::where('id', $id)->first();

        // $notebook->delete();

        return redirect('/notebooks')->with('danger', 'Notebook deleted successfully !');
    }

    public function show($id)
    {
        $notebook = Notebook::findOrFail($id);
        $notes = $notebook->notes;
        // dd($notes);

        return view('notes.index', compact('notes', 'notebook'));
    }
}
