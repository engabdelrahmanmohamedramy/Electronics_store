<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

use App;


class MainController extends Controller
{
    
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

   
    public function index()
    {
        $categories = Category::all();
        return view('index',compact('categories'));
    }
}
