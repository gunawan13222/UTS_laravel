@extends('layouts.master')
@section('konten')
@extends('layouts.pesan')
<br>
<div class="d-flex justify-content-center">
  <div class="col-md-4 col-md-offset-6">
  <form action="{{ route('kebutuhan.store') }}" method='post' enctype="multipart/form-data">
  @csrf
<form >
  <div class="form-group">
    <label for="jenis_kebutuhan">jenis kebutuhan</label>
    <input type="text" class="form-control" id="jenis_kebutuhan" name="jenis_kebutuhan" >
  </div>
<form >
  <div class="form-group">
    <label for="kebutuhan">kebutuhan</label>
    <input type="text" class="form-control" id="kebutuhan" name="kebutuhan" >
  </div>
<form >
  <div class="form-group">
    <label for="deskripsi">deskripsi</label>
    <input type="text" class="form-control" id="deskripsi" name="deskripsi" >
  </div>
<form >
  <div class="form-group">
    <label for="foto"> masukan foto</label>
    <input type="file" class="form-control" id="foto" name="foto" >
  </div>
  @error('jenis_kebutuhan','kebutuhan','deskripsi','foto')
<strong>{{ $message }}</strong>
@enderror
<br>
<a href="{{ route('kebutuhan.index') }}" type="submit"><button class="btn btn-warning">kembali</button></a>
<button class="btn btn-primary" type="submit">Save</button>
</form>
</div>
</div>   
@endsection