<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabung;

class SiswaController extends Controller
{
    public function index() {
      $data[1] = Tabung::with(['iduser','idpetugas'])->where('id_user',session('sessionUser')->id)->get();
      //dd($data[1]);
      return view('formadmin.tabungansiswa',compact('data'));
    }
}
