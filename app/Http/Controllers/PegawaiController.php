<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           $pegawai = pegawai::all();
        return view('pegawai.index', compact('pegawai'),[
            'title'=>'pegawai'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view ('pegawai.create',[
            'title'=>'pegawai']);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $validated =$request->validate([
            'nama'=>'required',
            'whatsapp'=>'required',
            'bagian'=>'required',
        ],[
            'nama.required'=>'nama harus di isi',
            'whatsapp.required'=>'nomer whatsapp harus di isi',
            'bagian.required'=>'pilih bagian'
        ]);
        $pegawai = new pegawai();
        $pegawai->nama=$request->nama;
        $pegawai->whatsapp=$request->whatsapp;
        $pegawai->bagian=$request->bagian;
        $pegawai->save();
        return redirect()->route('pegawai.index',[
            'title'=>'pegawai'])->with('success', 'Data berhasil di buat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $pegawai = pegawai::findOrFail($id);
        return view('pegawai.show',[
            'title'=>'pegawai'], compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $pegawai = pegawai::findOrFail($id);
        return view('pegawai.edit',[
            'title'=>'pegawai'], compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $validated =$request->validate([
            'nama'=>'required',
            'whatsapp'=>'required',
            'bagian'=>'required',
        ]);

        $pegawai = pegawai::findOrFail($id);
        $pegawai->nama=$request->nama;
        $pegawai->whatsapp=$request->whatsapp;
        $pegawai->bagian=$request->bagian;
        $pegawai->save();
        return redirect()->route('pegawai.index',[
            'title'=>'pegawai'])->with('success', 'Data berhasil edit !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pegawai = pegawai::findOrFail($id);
        $pegawai->delete();
        return redirect()->route('pegawai.index',[
            'title'=>'pegawai'])->with('danger', 'Data berhasil di hapus !');
    }
}
