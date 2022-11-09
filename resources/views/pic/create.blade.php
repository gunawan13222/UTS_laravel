@extends('layouts.master')
@section('konten')
@extends('layouts.pesan')
<br>
<div class="d-flex justify-content-center">
  <div class="col-md-4 col-md-offset-6">
  <form action="{{ route('pegawai.store') }}" method='post'>
  @csrf
<form >
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" >
  </div>
</form>
<form >
  <div class="form-group">
    <label for="whatsapp">Nomer whatsapp</label>
    <input type="text" class="form-control" id="whatsapp" name="whatsapp" >
  </div>
</form>
<form >
  <div class="form-group">
    <label for="bagian">bagian</label>
    <input type="text" class="form-control" id="bagian" name="bagian" >
  </div>
</form>
  @error('nama','whatsapp','bagian')
<strong>{{ $message }}</strong>
@enderror
<br>
<a href="{{ route('pegawai.index') }}" type="submit"><button class="btn btn-warning">kembali</button></a>
<button class="btn btn-primary" type="submit">Save</button>
</form>
</div>
</div>   
@endsection