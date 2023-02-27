<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function categories()
    {
    	$categories = Category::all();
    	//dd($brands);
    	return view('admin/category',compact('categories'));
    }

    public function add_category(Request $request)
    {
    	$category = new Category();
    	$category->name_ar = $request->get('category_name_arabic');
    	$category->name_en = $request->get('category_name_english');
    	$category->save();
    	return back();
    }

    public function edit_category_page($category_id)
    {
    	$categories = Category::all();
    	$category = Category::find($category_id);
    	return view('admin/category',compact('category','categories'));
    }

    public function update_category(Request $request,$category_id)
    {
    	$category = Category::find($category_id);
    	$category->name_ar = $request->get('category_name_arabic');
    	$category->name_en = $request->get('category_name_english');
    	$category->save();
    	return redirect()->route('categories');
    }

    public function delete_category($category_id)
    {
    	$brand = Category::find($category_id);
    	$brand->delete();
    	return back();
    }
}
