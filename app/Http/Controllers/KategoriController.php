<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $kategori = kategori::all();
        return view('kategori.index', compact('kategori'),[
            'title'=>'kategori'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('kategori.create',[
            'title'=>'kategori']);
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
            'kategori'=>'required',
            'urgensi'=>'required',
            
        ],[
            'kategori.required'=>'kategori harus di isi',
            'urgensi.required'=>'isi urgensi',
            
        ]);
        $kategori = new kategori();
        $kategori->kategori=$request->kategori;
        $kategori->urgensi=$request->urgensi;
        $kategori->save();
        return redirect()->route('kategori.index',[
            'title'=>'kategori'])->with('success', 'Data berhasil di buat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
         $kategori = kategori::findOrFail($id);
        return view('kategori.show',[
            'title'=>'kategori'], compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $kategori = kategori::findOrFail($id);
        return view('kategori.edit',[
            'title'=>'kategori'], compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $validated =$request->validate([
            'kategori'=>'required',
             'urgensi'=>'required',
            
        ]);

        $kategori = kategori::findOrFail($id);
        $kategori->kategori=$request->kategori;
        $kategori->urgensi=$request->urgensi;
        $kategori->save();
        return redirect()->route('kategori.index',[
            'title'=>'kategori'])->with('success', 'Data berhasil edit !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = kategori::findOrFail($id);
        $kategori->delete();
        return redirect()->route('kategori.index',[
            'title'=>'kategori'])->with('danger', 'Data berhasil di hapus !');
    }
}
