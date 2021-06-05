<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\dokter134;
use App\Models\kamar134;
use App\Models\pasien134;
use App\Models\user;

class doktercontroller extends Controller
{
    // 
    public function index(){
        $pasien = pasien134::all();
        return view('pasien134',[
            'pasien' => $pasien
        ]);
    }

    public function search($key){
        $kamar = kamar134::where('');
        return view('kamar134',[
            'kamar' => $kamar
        ]);
        }
    public function tambah(){
        $kamar = kamar134::all();
        $pasien = pasien134::all();
        return view('tambah-dokter134',[
            'kamar' => $kamar,
            'pasien' => $pasien
        ]);
    }
    public function edit ($id){
        $kamar = kamar134::all();
        $pasien = pasien134::all();
        $dokter = dokter134::all();
        return view('edit-dokter134',[
            'dokter' => $dokter,
            'kamar' => $kamar,
            'pasien' => $pasien
        ]);
    }
    public function update(Request $request, $id){
        Transaksi::where('id',$id)->update([
            'id_pasien'=>$request->id_pasien,
            'id_kamar'=>$request->id_kamar

        ]);
    }

    public function destroy($id){
        $dokter = dokter134::where('id',$id)->first();
        $dokter->delete();
        return redirect()->route('');
    }
}
