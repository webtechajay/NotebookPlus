<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Industry;

class IndustryController extends Controller
{

	public function index()
	{
		$viewIndustries = Industry::all(); 
		return view('admin.industry.index')->with(compact('viewIndustries'));
	}
    public function create()
    {
    	return view('admin.industry.create');
    }

    public function store(Request $request)
    {	
    	// dd($request->all());
    	$storeIndustries = new Industry();
    	$storeIndustries->industry_name = $request->industry_name;
    	$storeIndustries->save();

    	return redirect('/admin/view_industry');
    }

    public function edit($industry)
    {
    	$editIndustries = Industry::find($industry);
    	return view('admin.industry.edit')->with(compact('editIndustries'));
    }

    public function update(Request $request, $industry)
    {	
    	// dd($request->all());
    	$updateIndustries = Industry::find($industry);
    	$updateIndustries->industry_name = $request->industry_name;
    	$updateIndustries->save();

    	return redirect('/admin/view_industry');
    }

    public function destroy($industry)
    {
    	$destroyIndustries = Industry::find($industry);
    	$destroyIndustries->delete();
    	return redirect('/admin/view_industry');
    }

    public function show($industry)
    {
    	$showIndustries = Industry::find($industry);
    	return view('admin.industry.show')->with(compact('showIndustries'));
    }
}
