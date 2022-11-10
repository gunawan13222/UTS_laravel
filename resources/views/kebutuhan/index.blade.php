@extends('layouts.master')
@section('konten')
@extends('layouts.pesan')
<div class="card">
  <table class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 5%" >No</th>
          <th>Nama</th>
          <th>Kontak Whatsapp</th>
          <th>Bagian</th>
          <th>jenis kebutuhan</th>
          <th>kebutuhan tentang</th>
          <th>Deskripsi kebutuhan</th>
          <th>Deskripsi foto/video</th>
          <th>Urgensi</th>
          <th>kategori</th>
          <th>progres</th>
          <th>PIC</th>
          <th><a href="{{ route('kebutuhan.create') }}"><button type="button" class="btn btn-success" >tambah data</button></a></th>
        </tr>
      </thead>
  <tbody>
    @php $no = 1 ; @endphp
    @foreach ($kebutuhan as $data)
    <tr>
      <td>{{ $no++ }}</td>
      <td>Nama</td>
      <td>Kontak Whatsapp</td>
      <td>Bagian</td>
      <td>{{ $data->jenis_kebutuhan }}</td>
      <td>{{ $data->kebutuhan }}</td>
      <td>{{ $data->deskripsi }}</td>
      <td>{{ $data->foto }}</td>
      <td>Urgensi</td>
      <td>kategori</td>
      <td>progres</td>
      <td>PIC</td>
      <td>
        <form action="{{ route('kebutuhan.destroy', $data->id )}}" method='post'>
         @csrf
        @method('delete')
        <a href="{{ route('kebutuhan.show', $data->id) }}"><button type="button" class="btn btn-primary">detail</button></a>
        <a href="{{ route('kebutuhan.edit', $data->id) }}"><button type="button" class="btn btn-warning">edit</button></a>
        <button class="btn btn-danger btn-sm"  type="submit" onclick="return comfirm('apakah anda yakin ?')">Delete</button>
      </form>
    </td>
  </tr>
  @endforeach
</tbody>
</table>
<a href="#"><button type="button" class="btn btn-danger">export pdf</button></a>
<a href="#"><button type="button" class="btn btn-success">export exel</button></a>
</div>
@endsection