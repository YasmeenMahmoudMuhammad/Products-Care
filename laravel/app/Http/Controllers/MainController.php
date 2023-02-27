<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use App\Models\Category;
use App\Models\Product;
use App\Models\Color;
use App\Models\Brand;

use Cache;

class MainController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('index',compact('categories'));
    }
    
    public function about()
    {
    	return  view('about-us');
    }

    public function language($lang)
    {
    	App::setLocale($lang);
        session()->put('locale', $lang);
        return redirect()->back();

    }

    public function search(Request $request)
    {

        if(!empty($request->get('search')))
        {
            $wordToSearch = $request->get('search');
            Cache::put('search_name', $request->get('search'));
        }
        else
        {
            $wordToSearch = Cache::get('search_name');
        }

        //$wordToSearch = $request->get('search');
        $products = Product::where('name_ar','like','%'.$wordToSearch.'%')->orWhere('name_en','like','%'.$wordToSearch.'%')->orWhereHas('brand', function($q) use($wordToSearch)
            {
                $q->where('name_ar','like','%'.$wordToSearch.'%')->orWhere('name_en','like','%'.$wordToSearch.'%');
            })->orWhereHas('category', function($q) use($wordToSearch)
            {
                $q->where('name_ar','like','%'.$wordToSearch.'%')->orWhere('name_en','like','%'.$wordToSearch.'%');
            })->get();
        //dd($products);


        return view('search',compact('products'));

    }



}
