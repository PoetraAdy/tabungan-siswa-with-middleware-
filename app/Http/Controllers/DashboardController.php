<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Role;
use App\User;

class DashboardController extends Controller
{
    public function index() {
      $data[0] = Role::all();
      $data[1] = User::with(['role'])->get();

      return view('formadmin.user',compact('data'));
    }

    public function store(Request $request) {
      $data = new User();
      $data->nama = $request->nama;
      $data->id_role = $request->id_role;
      $data->username = $request->username;
      $data->password = $request->password;

      $this->validate($request, [
          'nama' => 'required|max:64',
          'id_role' => 'required|max:64',
          'username' => 'required|unique:user|max:64',
          'password' => 'required|max:64',
      ]);

      $data->save();

      return redirect()->back();
    }

    public function edit($id) {
      $data[0] = Role::all();
      $data[1] = User::where('id',$id)->with(['role'])->get();
      return view('formadmin.useredit',compact('data'));
    }

    public function update(Request $request, $id) {
      $data =  User::where('id',$id)->first();
      $data->nama = $request->nama;
      $data->username = $request->username;
      $data->password = $request->password;
      $data->id_role = $request->id_role;
      $data->save();
      return redirect('/dashboard');
    }

    public function delete($id) {
          $data = User::where('id',$id)->first();
          $data->delete();
          return redirect('/dashboard');
    }

    public function profile() {
        $data = User::where('id',session('sessionUser')->id)->with(['role'])->first();
        return view('formadmin.profile',compact('data'));
    }

    public function profileUpdate(Request $request, $id) {
      $data = User::where('id',$id)->first();
      $data->nama = $request->nama;
      $data->password = $request->password;
      $data->save();
      return redirect()->back();
    }

    public function statistic() {
      echo "coming soon";
    }
}
