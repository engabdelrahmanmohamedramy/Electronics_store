<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Favorite;

class FavouriteController extends Controller
{
    public function add_favourite(Request $request,$product_id)
    {
    		$favourite = new Favorite();
	    	$favourite->user_id = Auth::id();
	    	$favourite->product_id = $product_id;
	    	$favourite->save();
    	
    	return back();
    }


    public function favourite()
    {
    	$favourites = Favorite::where('user_id',Auth::id())->get();
    	
    	return view('favourite',compact('favourites'));
    }

}
