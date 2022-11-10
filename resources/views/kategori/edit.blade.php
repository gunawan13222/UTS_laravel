@extends('layouts.master')
@section('konten')
@extends('layouts.pesan')
    <br>
<div class="d-flex justify-content-center">
  <div class="col-md-4 col-md-offset-6">
    <form action="{{ route('kategori.update', $kategori->id) }}" method='post'>
  @csrf
  @method('put')
<form >
  <div class="form-group">
    <label for="kategori">kategori</label>
    <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $kategori->kategori }}" >
  </div>
<form>
  <div class="form-group">
    <label for="urgensi">urgensi</label>
    <input type="text" class="form-control" id="urgensi" name="urgensi" value="{{ $kategori->urgensi }}">
  </div>
<form>
  <br>
      <a href="{{ route('kategori.index') }}" type="submit"><button class="btn btn-warning">kembali</button></a>
  <button  class="btn btn-primary" type="submit" >update</button>
  </div>
</div>
@error('kategori','urgensi')
<strong>{{ $message }}</strong>
@enderror
</form>
@endsection