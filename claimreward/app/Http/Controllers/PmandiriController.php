<?php

namespace App\Http\Controllers;

use App\Models\Pmandiri;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class PmandiriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pmandiri = Pmandiri::all();
        return view('prestasimandiri.index', compact(['pmandiri']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = IdGenerator::generate(['table'=>'formulir','field'=>'id','length'=>6,'prefix'=>'P']);
        return view('prestasimandiri.create',compact(['id']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'foto' => 'required|mimes:png,jpg,jpeg',
            'sertifikat' => 'required|mimes:png,jpg,jpeg',
            'buku_tabungan' => 'required|mimes:png,jpg,jpeg']);
        $nm = $request->foto;
        $sf = $request->sertifikat;
        $bk = $request->buku_tabungan;
        $namafile = $nm->getClientOriginalName();
        $sertif = $sf->getClientOriginalName();
        $buku = $bk->getClientOriginalName();
            $dtUpload = Pmandiri::create($request->except(['_token','submit']));
            $dtUpload->id=$request->id;
            $dtUpload->npm=$request->npm;
            $dtUpload->nm_mhsw=$request->nm_mhsw;
            $dtUpload->nm_kompetisi=$request->nm_kompetisi;
            $dtUpload->nm_penyelenggara=$request->nm_penyelenggara;
            $dtUpload->bidang=$request->bidang;
            $dtUpload->capaian=$request->capaian;
            $dtUpload->tingkat=$request->tingkat;
            $dtUpload->tgl=$request->tgl;
            $dtUpload->url=$request->url;
            $dtUpload->sertifikat= $sertif;
            $dtUpload->foto = $namafile;
            $dtUpload->buku_tabungan = $buku;
            $nm->move(public_path().'/image',$namafile);
            $sf->move(public_path().'/image',$sertif);
            $bk->move(public_path().'/image',$buku);
            $dtUpload->save();
        return redirect('/pmandiri');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pmandiri  $pmandiri
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pmandiri  $pmandiri
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pmandiri = Pmandiri::find($id);
        return view('prestasimandiri.edit',compact(['pmandiri']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pmandiri  $pmandiri
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $pmandiri = Pmandiri::find($id); 
        $pmandiri->update($request->except(['_token','submit']));
        return redirect('/pmandiri');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pmandiri  $pmandiri
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pmandiri = Pmandiri::find($id);
        $pmandiri->delete();
        return redirect('/pmandiri');
    }
    public function setuju($id){
        $setuju = Pmandiri::find($id);
        $setuju->status=1;
        $setuju->save();
        return redirect('/pmandiri');
    }
    public function tolak($id){
        $setuju = Pmandiri::find($id);
        $setuju->status=2;
        $setuju->save();
        return redirect('/pmandiri');
    }
}