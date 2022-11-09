@extends('layouts.master')
@section('konten')
@extends('layouts.pesan')
<div class="container">
  <div class="card">
     <table class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 5%" >No</th>
          <th>Nama</th>
          <th>Nomer whatsapp</th>
          <th>bagian</th>
          <th><a href="{{ route('pegawai.create') }}"><button type="button" class="btn btn-success" >tambah data</button></a></th>
        </tr>
      </thead>
  <tbody>
    @php $no = 1 ; @endphp
    @foreach ($pegawai as $data)
    <tr>
      <td>{{ $no++ }}</td>
      <td>{{ $data->nama }}</td>
      <td>{{ $data->whatsapp }}</td>
      <td>{{ $data->bagian }}</td>
      <td>
        <form action="{{ route('pegawai.destroy', $data->id )}}" method='post'>
         @csrf
        @method('delete')
        <a href="{{ route('pegawai.show', $data->id) }}"><button type="button" class="btn btn-primary">detail</button></a>
        <a href="{{ route('pegawai.edit', $data->id) }}"><button type="button" class="btn btn-warning">edit</button></a>
        <button class="btn btn-danger btn-sm"  type="submit" onclick="return comfirm('apakah anda yakin ?')">Delete</button>
      </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
  </div>
</div>
@endsection