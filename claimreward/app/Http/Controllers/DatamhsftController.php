<?php

namespace App\Http\Controllers;

use App\Models\Datamhsft;
use Illuminate\Http\Request;

class DatamhsftController extends Controller
{
    public function index(){
        $data = Datamhsft::all();
        return view('mahasiswa.datamhsft',compact(['data']));
    }
}
