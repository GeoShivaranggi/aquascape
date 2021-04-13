@extends('halaman-admin.index')

@section('content')

<form action="" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="card-body">
                        <h4 class="card-title">Personal Info</h4>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Gambar</label>
                            <div class="col-sm-9">
                                <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" id="gambar">
                                    @error('gambar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">judul</label>
                            <div class="col-sm-9">
                                <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="judul" value="{{$data->judul}}">
                                @error('judul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-right control-label col-form-label" >Message</label>
                            <div class="col-sm-9">
                                <textarea name="keterangan" class="form-control @error('judul') is-invalid @enderror">{{$data->keterangan}}</textarea>
                                @error('keterangan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</form>

@endsection