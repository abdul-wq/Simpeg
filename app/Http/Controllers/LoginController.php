<?php

namespace App\Http\Controllers;

use Alert;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
	public function login()
	{
	return view('/login');
	}

	public function proses(Request $request)
	{
	If(Auth::attempt($request->only('email', 'password'))){
	// Alert::toast('Berhasil Masuk Pak!','success');
     Alert::success('Selamat!','Berhasil Masuk pak, Selamat Datang!');
	return redirect('/admin/home');

	} else{
		Alert::error('Upss!','Email Atau Password Salah Pak!');
	return redirect('/login');
	}
	}
}
