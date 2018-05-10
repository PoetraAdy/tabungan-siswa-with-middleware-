<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;
use App\Tabung;

class PetugasController extends Controller
{
    public function index() {
      $data[0] = User::with(['role'])->where('id_role','3')->get();
      //$data[1] = Tabung::with(['iduser','idpetugas'])->get();

      /*foreach($data[1] as $u) {
        echo $u->idpetugas[0]->nama . "<br>";
        echo $u->iduser[0]->nama . "<br>";
        echo $u->tabung . "<br>";
        echo $u->tanggal . "<br><br>";
      }*/
      return view('formadmin.petugas',compact('data'));
    }

    public function store(Request $request) {
      $check = User::with(['role'])->where('id_role','3')->where('id',$request->idsiswa)->count();
      if($check == 1 ) {
        $data = new Tabung();
        $data->id_user = $request->idsiswa;
        $data->id_petugas = session("sessionUser")->id;
        if($request->opsi == "menabung") {
          $data->tabung = $request->tabung;
        } else {
          $data->tabung = $request->tabung * -1;
        }
        $data->tanggal = date('Y-m-d H:i:s');
        $data->save();
        return redirect()->back();
      } else {
        return redirect()->back();
      }
    }

    public function transaksi() {
      $data[1] = Tabung::with(['iduser','idpetugas'])->get();
      return view('formadmin.transaksi',compact('data'));
    }
}
