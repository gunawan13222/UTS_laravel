@extends('layouts.master')
@section('konten')
@extends('layouts.pesan')
    <br>
<div class="d-flex justify-content-center">
  <div class="col-md-4 col-md-offset-6">
    <form action="{{ route('pic.update', $pic->id) }}" method='post'>
  @csrf
  @method('put')
<form >
  <div class="form-group">
    <label for="nama">Nama </label>
    <input type="text" class="form-control" id="nama" name="nama" value="{{ $pic->nama }}" >
  </div>
<form>
  <div class="form-group">
    <label for="progres">nomer progres</label>
    <input type="text" class="form-control" id="progres" name="progres" value="{{ $pic->progres }}">
  </div>
<form>
  <br>
      <a href="{{ route('pic.index') }}" type="submit"><button class="btn btn-warning">kembali</button></a>
  <button  class="btn btn-primary" type="submit" >update</button>
  </div>
</div>
@error('nama','progres')
<strong>{{ $message }}</strong>
@enderror
</form>
@endsection