@extends('layouts.master')
@section('konten')
@extends('layouts.pesan')
<div class="container">
  <div class="card">
     <table class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 5%" >No</th>
          <th>kategori</th>
          <th>urgensi</th>
          <th><a href="{{ route('kategori.create') }}"><button type="button" class="btn btn-success" >tambah data</button></a></th>
        </tr>
      </thead>
  <tbody>
    @php $no = 1 ; @endphp
    @foreach ($kategori as $data)
    <tr>
      <td>{{ $no++ }}</td>
      <td>{{ $data->kategori }}</td>
      <td>{{ $data->urgensi }}</td>
      <td>
        <form action="{{ route('kategori.destroy', $data->id )}}" method='post'>
         @csrf
        @method('delete')
        <a href="{{ route('kategori.show', $data->id) }}"><button type="button" class="btn btn-primary">detail</button></a>
        <a href="{{ route('kategori.edit', $data->id) }}"><button type="button" class="btn btn-warning">edit</button></a>
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