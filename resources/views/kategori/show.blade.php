@extends('layouts.master')
@section('konten')
@extends('layouts.pesan')
<br>
<div class="d-flex justify-content-center">
  <div class="container">
    <div class="card">
      <ul class="list-group">
        <li class="list-group-item active">Detail PIC</li>
        <li class="list-group-item ">Nama : {{ $kategori->nama }}</li>
        <li class="list-group-item ">progres : {{ $kategori->urgensi }}</li>
      </ul>
    </div>
    <br>
    <a href="{{ route('kategori.index') }}" type="submit"><button  type="button" class="btn btn-warning">kembali</button></a>
  </div>
</div>
@endsection