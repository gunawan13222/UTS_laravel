<?php

namespace App\Http\Controllers;

use App\Models\pic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $pic = pic::all();
        return view('pic.index', compact('pic'),[
            'title'=>'pic'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view ('pic.create',[
            'title'=>'pic']);
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
            'progres'=>'required',
            
        ],[
            'nama.required'=>'nama harus di isi',
            'progres.required'=>'isi progres',
            
        ]);
        $pic = new pic();
        $pic->nama=$request->nama;
        $pic->progres=$request->progres;
        $pic->save();
        return redirect()->route('pic.index',[
            'title'=>'pic'])->with('success', 'Data berhasil di buat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pic  $pic
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
          $pic = pic::findOrFail($id);
        return view('pic.show',[
            'title'=>'pic'], compact('pic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pic  $pic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $pic = pic::findOrFail($id);
        return view('pic.edit',[
            'title'=>'pic'], compact('pic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pic  $pic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $validated =$request->validate([
            'nama'=>'required',
             'progres'=>'required',
            
        ]);

        $pic = pic::findOrFail($id);
        $pic->nama=$request->nama;
        $pic->progres=$request->progres;
        $pic->save();
        return redirect()->route('pic.index',[
            'title'=>'pic'])->with('success', 'Data berhasil edit !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pic  $pic
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $pic = pic::findOrFail($id);
        $pic->delete();
        return redirect()->route('pic.index',[
            'title'=>'pic'])->with('danger', 'Data berhasil di hapus !');
    }
}
