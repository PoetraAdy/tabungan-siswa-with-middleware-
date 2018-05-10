<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index() {
      if(!empty(session('sessionUser'))) {
        return redirect('/dashboard');
      }
      return view('login');
    }

    public function check(Request $request) {
      $data = User::where('username',$request->username)->where('password',$request->password)->with(['role'])->first();
      $request->session()->put('sessionUser', $data);
      if(!empty(session('sessionUser'))) {
          return redirect('/dashboard/profile');
      } else {
          return redirect()->back();
      }
    }

    public function logout() {
      session()->flush();
      if(empty(session('sessionUser'))) {
        return redirect('/masuk');
      }
    }


}
