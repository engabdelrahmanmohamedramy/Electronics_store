<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function users()
    {
    	$users = User::where('role',0)->get();
    	//dd($users);
    	return view('admin/user',compact('users'));
    }

    public function admins()
    {
    	$users = User::where('role',1)->get();
    	//dd($admins);
    	return view('admin/user',compact('users'));
    }


    public function add_user(Request $request)
    {

        $user = new User();
        $user->name_ar = $request->get('user_name_arabic');
        $user->name_en = $request->get('user_name_english');
        $user->role = 0;
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->save();
        return back();
    }

    public function add_admin(Request $request)
    {

        $user = new User();
        $user->name_ar = $request->get('user_name_arabic');
        $user->name_en = $request->get('user_name_english');
        $user->role = 1;
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->save();
        return back();
    }

    public function edit_user_page($user_id)
    {
        $users = User::all();
        $user = User::find($user_id);
        return view('admin/user',compact('user','users'));
    }

    public function update_user(Request $request,$user_id)
    {
        $this->validator($request->all())->validate();

        $user = User::find($user_id);
        $user->name_ar = $request->get('user_name_arabic');
        $user->name_en = $request->get('user_name_english');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->save();
        return redirect()->route('users');
    }


    public function edit_admin_page($user_id)
    {
        $users = User::all();
        $user = User::find($user_id);
        return view('admin/user',compact('user','users'));
    }

    public function update_admin(Request $request,$user_id)
    {
        $this->validator($request->all())->validate();

        $user = User::find($user_id);
        $user->name_ar = $request->get('user_name_arabic');
        $user->name_en = $request->get('user_name_english');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->save();
        return redirect()->route('admins');
    }

    public function delete_user($user_id)
    {
        $user = User::find($user_id);
        $user->delete();
        return back();
    }

    
}
