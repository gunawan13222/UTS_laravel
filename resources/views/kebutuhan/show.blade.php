@extends('layouts.master')
@section('konten')
@extends('layouts.pesan')
<br>
<div class="d-flex justify-content-center">
  <div class="container">
    <div class="card">
      <ul class="list-group">
        <li class="list-group-item active">Detail kebutuhan</li>
        <li class="list-group-item ">jenis_kebutuhan : {{ $kebutuhan->jenis_kebutuhan}}</li>
        <li class="list-group-item ">kebutuhan : {{ $kebutuhan->kebutuhan }}</li>
        <li class="list-group-item ">deskripsi : {{ $kebutuhan->deskripsi }}</li>
      </ul>
    </div>
    <br>
    <a href="{{ route('kebutuhan.index') }}" type="submit"><button  type="button" class="btn btn-warning">kembali</button></a>
  </div>
</div>
@endsection