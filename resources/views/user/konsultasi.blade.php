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
  <h1 class="mb-5">Isi Form Dibawah Ini Dengan Benar Untuk Melengkapi Formulir Konsultasi</h1> <br>
  <h1></h1>
  </div>
  </div>
  </div>
  </header>

    <!-- Image Showcases -->
    <section class="showcase">
    <div class="container-fluid p-0">
    <div class="row no-gutters">
    <div class="row no-gutters">
    <div class="col-lg-6 order-lg-2 text-white showcase-img my-4">
    <form action="" method="POST">
        @csrf
      <div class="form-group">
      <input type="text" name="alamat" class="form-control form-control-lg" placeholder="Alamat Tujuan">
      </div>
      <div class="form-group">
      <input type="text" name="notlp" class="form-control form-control-lg" placeholder="Nomor Telpon">
      </div>
      <div class="form-group">
      <textarea name="detail" class="form-control" id="w3review" rows="4" cols="50" placeholder="Jelaskan secara detail apa yang anda keluhkan"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
      <div class="col-lg-6 order-lg-1 my-auto showcase-text">
      <h2>Konsultasikan Keluhan Tentang Aquascapemu Sesuai Kebutuhan</h2>
      <p class="lead mb-0">Jelaskan Pada Kami Seperti Apa Keluhan Aquascape Yang Anda Miliki?</p>
      </div>
      </div>
      </div>
      </div>
      </section>
    <section class="features-icons bg-light text-center">
    <div class="container">
    <a href="{{ URL::previous() }}">Kembali</a>
    
</body>
</html>