@extends('halaman-admin.index')

@section('content')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Alamat</th>
        <th scope="col">Nomor HP</th>
        <th scope="col">Detail</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $item)
        <tr>
          <th scope="row">#</th>
          <td>{{$item->alamat}}</td>
          <td>{{$item->notlp}}</td>
          <td>{{$item->detail}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection