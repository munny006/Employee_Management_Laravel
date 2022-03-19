<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
	public function  index(){
		return view('index');
	}
	public function login(){
		return view('login');
	}
	public function submit_login(Request $request){
		$request->validate([
			'username' => 'required',
			'password' => 'required',
		]);

$checkadmin = Admin::where(['username'=>$request->username,'password'=>$request->password])->count();
if($checkadmin > 0){
	session(['adminlogin',true]);
	return redirect('admin');
	}
	else{
		return redirect('admin/login')->with('msg','Invaild Usrname/password');
	}
}
public function logout(){
	session()->forget('adminlogin');
	return redirect('admin/login');
}
}
