<?php

namespace App\Http\Controllers;

use App\Models\Pmandiri;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index(){
        $status = Pmandiri::all();
        return view('status.table', compact(['status']));
    }
}
