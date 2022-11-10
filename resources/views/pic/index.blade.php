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
          <th>progres</th>
          <th><a href="{{ route('pic.create') }}"><button type="button" class="btn btn-success" >tambah data</button></a></th>
        </tr>
      </thead>
  <tbody>
    @php $no = 1 ; @endphp
    @foreach ($pic as $data)
    <tr>
      <td>{{ $no++ }}</td>
      <td>{{ $data->nama }}</td>
      <td>{{ $data->progres }}</td>
      <td>
        <form action="{{ route('pic.destroy', $data->id )}}" method='post'>
         @csrf
        @method('delete')
        <a href="{{ route('pic.show', $data->id) }}"><button type="button" class="btn btn-primary">detail</button></a>
        <a href="{{ route('pic.edit', $data->id) }}"><button type="button" class="btn btn-warning">edit</button></a>
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