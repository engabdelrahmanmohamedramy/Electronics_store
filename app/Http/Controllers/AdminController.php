<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;


class AdminController extends Controller
{
 
    public function admin()
    {
        $products = Product::count();
        $brands = Brand::count();
        $categories = Category::count();
        $users = User::where('role',0)->count();
        $admins = User::where('role',1)->count();


        return view('admin/admin',compact('products','brands','categories','users','admins'));
    }

}
