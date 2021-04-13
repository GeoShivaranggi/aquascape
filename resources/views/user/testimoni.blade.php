<!DOCTYPE html>
<html lang="en">
    @include('templates.head')
<body>

      <!-- Masthead -->
  <header class="masthead text-white text-center">
  <div class="overlay"></div>
  <div class="container">
  <div class="row">
  <div class="col-xl-9 mx-auto">
  <h1 class="mb-5">Hasil Dari Pengunjung Yang Telah Menggunakan Jascape.bdl</h1> <br>
      <h1></h1>
      </div>
      </div>
      </div>
      </header>

    <!-- Image Showcases -->
    <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-6 order-lg-2 text-white showcase-img my-4">
                    @guest
                        <div class="col-lg-4">
                            <a href="{{ route('login') }}" class="text-dark">
                            
                            <p class="lead mb-0 text-primary">Harap Login Sebelum Komentar</p>
                            </div>
                            </a>
                        </div>
                    @else
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="form-group">
                        <input type="text" name="user_id" hidden value="{{ Auth::user()->id }}">
                        <input type="file" name="gambar" class="form-control form-control-lg" placeholder="Alamat Tujuan">
                        </div>
                        <div class="form-group">
                        <textarea name="keterangan" class="form-control" id="w3review" rows="4" cols="50" placeholder="Keterangan!!"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        </div>
                        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Buatlah Aquascapemu Sesuai Keinginan</h2>
                        <p class="lead mb-0">Hasil Dari Aquascapemu Ada Disini, Yang Telah Menggunakan Jascape.bdl Dan Buat Aquascapemu Menjadi Nyata!</p>
                        </div>
                        </div>
                        </div>
                    @endguest
            
        </div>
    </section>

  <section class="features-icons bg-light text-center">
  <div class="container">
  <a href="{{ URL::previous() }}">Kembali</a>
</body>
</html>