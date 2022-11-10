@extends('layouts.master')
@section('konten')
@extends('layouts.pesan')
<br>
<div class="d-flex justify-content-center">
  <div class="col-md-4 col-md-offset-6">
  <form action="{{ route('pic.store') }}" method='post'>
  @csrf
<form >
  <div class="form-group">
    <label for="nama">Nama </label>
    <input type="text" class="form-control" id="nama" name="nama" >
  </div>
<form >
  <div class="form-group">
    <label for="progres">progres</label>
    <input type="text" class="form-control" id="progres" name="progres" >
  </div>
  @error('nama','progres')
<strong>{{ $message }}</strong>
@enderror
<br>
<a href="{{ route('pic.index') }}" type="submit"><button class="btn btn-warning">kembali</button></a>
<button class="btn btn-primary" type="submit">Save</button>
</form>
</div>
</div>   
@endsection