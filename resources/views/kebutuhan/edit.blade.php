@extends('layouts.master')
@section('konten')
@extends('layouts.pesan')
    <br>
<div class="d-flex justify-content-center">
  <div class="col-md-4 col-md-offset-6">
    <form action="{{ route('kebutuhan.update', $kebutuhan->id) }}" method='post'>
  @csrf
  @method('put')
<form >
  <div class="form-group">
    <label for="jenis_kebutuhan">jenis kebutuhan</label>
    <input type="text" class="form-control" id="jenis_kebutuhan" name="jenis_kebutuhan" value="{{ $kebutuhan->jenis_kebutuhan }}" >
  </div>
<form>
<form >
  <div class="form-group">
    <label for="kebutuhan">kebutuhan</label>
    <input type="text" class="form-control" id="kebutuhan" name="kebutuhan" value="{{ $kebutuhan->kebutuhan }}" >
  </div>
<form>
  <div class="form-group">
    <label for="deskripsi">deskripsi</label>
    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $kebutuhan->deskripsi }}">
  </div>
<form>
  <br>
      <a href="{{ route('kebutuhan.index') }}" type="submit"><button class="btn btn-warning">kembali</button></a>
  <button  class="btn btn-primary" type="submit" >update</button>
  </div>
</div>
@error('kebutuhan','deskripsi','jenis_kebutuhan')
<strong>{{ $message }}</strong>
@enderror
</form>
@endsection