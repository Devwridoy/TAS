<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    
    public function index()
    {
    	return view('admin.Category.categoryAdd');
    }

    public function save(Request $request)
    {
    	$categoryAdd = new Category();

    	$categoryAdd -> categoryName = $request -> catagoryName;
    	$categoryAdd -> shortDescription	 = $request -> shortDescription;
    	$categoryAdd -> publicationStatus = $request -> publicationStatus;

    	$categoryAdd ->save();

    	return redirect('/category/save')->with('message','Insert sucessfully');


    }

    public function manage(){

    	$categories = Category::all();

    	return view('admin.Category.categoryManage',['category'=>$categories]);
    }


}
