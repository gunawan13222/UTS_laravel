<?php

namespace App\Http\Controllers;

use App\Models\kebutuhan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KebutuhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kebutuhan = kebutuhan::all();
        return view('kebutuhan.index', compact('kebutuhan'),[
            'title'=>'kebutuhan'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('kebutuhan.create',[
            'title'=>'kebutuhan']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->foto);
        // $request->foto->store('galery');
        // dd('berhasil bro');

        
       
        $validated =$request->validate([
            'jenis_kebutuhan'=>'required',
            'kebutuhan'=>'required',
            'deskripsi'=>'required',
            'foto'=>'required',
            
        ],[
            'jenis_kebutuhan.required'=>'jenis_kebutuhan harus di isi',
            'kebutuhan.required'=>'isi kebutuhan',
            'deskripsi.required'=>'isi deskripsi',
            'foto.required'=>'upload foto',
            
        ]);
        
        
        
        $file_name = $request->foto->getClientOriginalName();
        $foto = $request->foto->storeAs('galery', $file_name);
        $kebutuhan = new kebutuhan();
        $kebutuhan->jenis_kebutuhan=$request->jenis_kebutuhan;
        $kebutuhan->kebutuhan=$request->kebutuhan;
        $kebutuhan->deskripsi=$request->deskripsi;
        $kebutuhan->foto= $foto;
        $kebutuhan->save();
        return redirect()->route('kebutuhan.index',[
            'title'=>'kebutuhan'])->with('success', 'Data berhasil di buat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kebutuhan  $kebutuhan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kebutuhan = kebutuhan::findOrFail($id);
        return view('kebutuhan.show',[
            'title'=>'kebutuhan'], compact('kebutuhan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kebutuhan  $kebutuhan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kebutuhan = kebutuhan::findOrFail($id);
        return view('kebutuhan.edit',[
            'title'=>'kebutuhan'], compact('kebutuhan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kebutuhan  $kebutuhan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
         $validated =$request->validate([
            'jenis_kebutuhan'=>'required',
            'kebutuhan'=>'required',
            'deskripsi'=>'required',
            
        ]);

        $kebutuhan = kebutuhan::findOrFail($id);
        $kebutuhan->jenis_kebutuhan=$request->jenis_kebutuhan;
        $kebutuhan->kebutuhan=$request->kebutuhan;
        $kebutuhan->deskripsi=$request->deskripsi;
        $kebutuhan->save();
        return redirect()->route('kebutuhan.index',[
            'title'=>'kebutuhan'])->with('success', 'Data berhasil edit !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kebutuhan  $kebutuhan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kebutuhan = kebutuhan::findOrFail($id);
        $kebutuhan->delete();
        return redirect()->route('kebutuhan.index',[
            'title'=>'kebutuhan'])->with('danger', 'Data berhasil di hapus !');
    }
}
