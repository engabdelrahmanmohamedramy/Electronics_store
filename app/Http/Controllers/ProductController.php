<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Color;
use App\Models\Category;
use App\Models\Brand;
use App\Models\ProductColor;
use App\Models\Image;

class ProductController extends Controller
{
    public function products()
    {
    	$products = Product::all();
    	$colors = Color::all();
    	$categories = Category::all();
    	$brands = Brand::all();
    	//dd($brands);
    	return view('admin/product',compact('products','colors','categories','brands'));
    }

    public function add_product(Request $request)
    {
    	$product = new Product();
    	$product->name_en = $request->get('product_name_english');
    	$product->name_ar = $request->get('product_name_arabic');
        $product->price = $request->get('price');
        $product->quantity = $request->get('Quantity');
        $product->description_en = $request->get('description_en');
        $product->description_ar = $request->get('description_ar');
        $product->category_id = $request->get('category');
        $product->brand_id = $request->get('brand');
        $product->screen_size = $request->get('size');
        $product->rating = 0;
        if($request->hasFile('main_image')) 
        {
            $file = $request->file('main_image');
            
            $image_name = time().$file->getClientOriginalName();
            $image_path = 'images/main_images/';
            $file->move($image_path,$image_name); // upload image to spacific folder main_images on my server
            $image = $image_path.$image_name;
            $product->main_image = $image;
        }
        $product->save();

        if($request->has('color')) 
        {
            foreach ($request->get('color') as $color) 
            {
                $product_color =  new ProductColor();
                $product_color->product_id = $product->id;
                $product_color->color_id = $color;
                $product_color->save();
            }
        }

        if($request->hasFile('multiple_images')) 
        {
            foreach ($request->file('multiple_images') as $file)
            {
                $image_name = time().$file->getClientOriginalName();
                $image_path = 'images/another_images'.$product->id.'/';
                $file->move($image_path,$image_name); // upload image to spacific folder on my server
                $image = $image_path.$image_name;
                $multiple_image = new Image();
                $multiple_image->image = $image;
                $multiple_image->product_id = $product->id;
                $multiple_image->save();
            }
            
            
        }

       
    	return back();
    }

    public function edit_product_page($product_id)
    {
        $colors = Color::all();
        $categories = Category::all();
        $brands = Brand::all();

    	$product = Product::find($product_id);
    	return view('admin/edit_product',compact('product','colors','categories','brands'));
    }

    public function update_product(Request $request,$product_id)
    {
    	$product = Product::find($product_id);
    	$product->name_en = $request->get('product_name_english');
        $product->name_ar = $request->get('product_name_arabic');
        $product->price = $request->get('price');
        $product->quantity = $request->get('Quantity');
        $product->description_en = $request->get('description_en');
        $product->description_ar = $request->get('description_ar');
        $product->category_id = $request->get('category');
        $product->brand_id = $request->get('brand');
        $product->screen_size = $request->get('size');
        $product->rating = 0;
        if($request->hasFile('main_image')) 
        {
            $file = $request->file('main_image');
            
            $image_name = time().$file->getClientOriginalName();
            $image_path = 'images/main_images/';
            $file->move($image_path,$image_name); // upload image to spacific folder main_images on my server
            $image = $image_path.$image_name;
            $product->main_image = $image;
        }
        $product->save();

        if($request->has('color')) 
        {
            ProductColor::where('product_id',$product->id)->delete();//or don't use delete and use after foreach firstOrUpdate funciton

            foreach ($request->get('color') as $color) 
            {
                $product_color =  new ProductColor();
                $product_color->product_id = $product->id;
                $product_color->color_id = $color;
                $product_color->save();
            }
        }

        if($request->hasFile('multiple_images')) 
        {
            
            Image::where('product_id',$product->id)->delete();//or don't use delete and use after foreach firstOrUpdate funciton

            foreach ($request->file('multiple_images') as $file)
            {
                $image_name = time().$file->getClientOriginalName();
                $image_path = 'images/another_images'.$product->id.'/';
                $file->move($image_path,$image_name); // upload image to spacific folder on my server
                $image = $image_path.$image_name;
                $multiple_image = new Image(); //Image::firstOrUpdaete($product->id);
                $multiple_image->image = $image;
                $multiple_image->product_id = $product->id;
                $multiple_image->save();
            }
            
            
        }
    	return redirect()->route('products');
    }

    public function delete_product($product_id)
    {
    	$product = Product::find($product_id);
    	$product->delete();
    	return back();
    }

    public function shop()
    {
        $products = Product::paginate(2);
        $brands = Brand::all();
        $colors = Color::all();
        $categories = Category::all();
        $max_price = $products->max('price'); 
        $min_price = $products->min('price');
        $sizes =  $products->unique('screen_size');
        $popular_products = Product::orderBy('rating')->paginate(5);


        return view('shop',compact('products','brands','colors','categories','max_price','min_price','sizes','popular_products'));
    }

    public function details($product_id)
    {
        $product = Product::find($product_id);
        $popular_products = Product::orderBy('rating')->paginate(5);
        $related_products = Product::where('category_id',$product->category_id)->where('brand_id',$product->brand_id)->paginate(5);


        return view('details',compact('product','related_products','popular_products'));
    }
}
