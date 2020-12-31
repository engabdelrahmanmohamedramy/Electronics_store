<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Color;


class ColorController extends Controller
{
   public function colors()
    {
    	$colors = Color::all();
    	//dd($brands);
    	return view('admin/color',compact('colors'));
    }

    public function add_color(Request $request)
    {
    	$color = new Color();
    	$color->name_ar = $request->get('color_name_arabic');
    	$color->name_en = $request->get('color_name_english');
    	$color->save();
    	return back();
    }

    public function edit_color_page($color_id)
    {
    	$colors = Color::all();
    	$color = Color::find($color_id);
    	return view('admin/color',compact('color','colors'));
    }

    public function update_color(Request $request,$color_id)
    {
    	$color = Color::find($color_id);
    	$color->name_ar = $request->get('color_name_arabic');
    	$color->name_en = $request->get('color_name_english');
    	$color->save();
    	return redirect()->route('colors');
    }

    public function delete_color($color_id)
    {
    	$color = Color::find($color_id);
    	$color->delete();
    	return back();
    }

}
