@extends('layouts.master')
@section('konten')
@extends('layouts.pesan')
<br>
<div class="d-flex justify-content-center">
  <div class="container">
    <div class="card">
      <ul class="list-group">
        <li class="list-group-item active">Detail pegawai</li>
        <li class="list-group-item ">Nama : {{ $pegawai->nama }}</li>
        <li class="list-group-item ">Nomer whatsapp : {{ $pegawai->whatsapp }}</li>
        <li class="list-group-item ">Bagian : {{ $pegawai->bagian }}</li>
      </ul>
    </div>
    <br>
    <a href="{{ route('pegawai.index') }}" type="submit"><button  type="button" class="btn btn-warning">kembali</button></a>
  </div>
</div>
@endsection