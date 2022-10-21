<?php

namespace App\Http\Controllers;

use App\Models\Pmandiri;
use Illuminate\Http\Request;

class ValidasiController extends Controller
{
    public function index(){
        $validasi = Pmandiri::where('status',0)->get();
        return view('validasi.validasi', compact(['validasi']));
    }
    public function show($id){
        $validasi = Pmandiri::find($id);
        return view('validasi.show', compact(['validasi']));
    }
    public function rekap(){
        $validasi = Pmandiri::where('status',1)->get();
        return view('validasi.rekap', compact(['validasi']));
    }
    public function setuju($id){
        $setuju = Pmandiri::find($id);
        $setuju->status=1;
        $setuju->save();
        return redirect('/validasi');
    }
    public function tolak($id){
        $setuju = Pmandiri::find($id);
        $setuju->status=2;
        $setuju->save();
        return redirect('/pmandiri');
    }
    public function cetak(Pmandiri $pmandiri)
    {
        $validasi = Pmandiri::where('status',1)->get();
        return view('validasi.cetak',compact(['validasi']));
    }
}
