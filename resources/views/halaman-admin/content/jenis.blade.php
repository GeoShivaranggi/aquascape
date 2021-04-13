@extends('halaman-admin.index')

@section('content')

@include('vendor.sweetalert.alert')

<button type="button" class="btn btn-success my-4" data-toggle="modal" data-target="#exampleModal">
    Upload
</button>

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Gambar</th>
        <th scope="col">Judul</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $item)
        <tr>
            <th scope="row">#</th>
            <td>
                <img src="{{asset(''. $item->gambar)}}" width="90" alt="">
            </td>
            <td>{{$item->judul}}</td>
            <td>{{$item->keterangan}}</td>
            <td>
                <a href="{{route('admin.jenisedit' , $item->id)}}" class="btn btn-warning">Edit</a>
                <a href="{{route('admin.deletejenis' , $item->id)}}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">

                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="file" class="form-control" name="gambar" id="gambar" required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul" required >
                    </div>
                    
                    <div class="form-group">
                        <textarea class="form-control" name="keterangan" id="keterangan" placeholder="Masukkan Keterangan" required></textarea>
                    </div>

                

                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
        </div>
    </div>
@endsection