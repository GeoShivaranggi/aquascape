


<!DOCTYPE html>
<html lang="en">

@include('templates.head')


<body>
  @include('vendor.sweetalert.alert')
  <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
    <a class="navbar-brand" href="#">Jascape_bdl</a>
    <a class="btn btn-primary" href="{{ route('login') }}">Sign In</a>
    </div>
    </nav>

  <!-- Masthead -->
  <header class="masthead text-white text-center">
  <div class="overlay"></div>
  <div class="container">
  <div class="row">
  <div class="col-xl-9 mx-auto">
  <h1 class="mb-5">Selamat Datang Di Jasa Aquascape Lampung</h1>
  <h1></h1>
  <h1> ~ Melayani Berbagai Pembuatan, Perawatan, Perubahan, Alat - alat dan Bahan - bahan Untuk Aquascape ~</h1>
  </div>
  </div>
  </div>
  </header>

  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
  <div class="container">
  <div class="row">
  <div class="col-lg-4">
  <a href="{{ route('request')}}" class="text-dark">
  <div class="features-icons-item mx-auto mb-6 mb-lg-0 mb-lg-4 my-4" style="width: 200px;">
  <div class="features-icons-icon d-flex">
  <img src="{{asset('templates/img/Request.jpg')}}" alt="">
  </div>
  <h3>Request Aquascape</h3>
  <p class="lead mb-0 text-primary">Melayani Pembuatan Aquascape</p>
  </div>
  </a>
  </div>
  <div class="col-lg-4">
  <a href="{{ route('repair')}}" class="text-dark">
  <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3 my-4"  style="width: 200px;">
  <div class="features-icons-icon d-flex">
  <img src="{{asset('templates/img/repair.jpg')}}" alt="">
  </div>
  <h3>Repair / Perawatan</h3>
  <p class="lead mb-0 text-primary">Melayani Perbaikan dan penanganan Aquqscape</p>
  </div>
  </a>
  </div>
  <div class="col-lg-4">
  <a href="{{route('konsultasi')}}" class="text-dark">
  <div class="features-icons-item mx-auto mb-0 mb-lg-3 my-4"  style="width: 200px;">
  <div class="features-icons-icon d-flex">
  <img src="{{asset('templates/img/Konsultasi.jpg')}}" alt="">
  </div>
  <h3>Konsultasi Aquascape</h3>
  <p class="lead mb-0 text-primary">Melayani keluhan dalam membuat Aquascape</p>
  </div>
  </a>
  </div>
  <div class="col-lg-4">
  <a href="{{route('jenis')}}" class="text-dark">
  <div class="features-icons-item mx-auto mb-0 mb-lg-3 my-4"  style="width: 200px;">
  <div class="features-icons-icon d-flex">
  <img src="{{asset('templates/img/jenis.jpg')}}" alt="">
  </div>
  <h3>Jenis jenis Aquascape</h3>
  <p class="lead mb-0 text-primary">Melihat Jenis-jenis Aquascape sebagai referensi untuk membuat Aquascape</p>
  </div>
  </a>
  </div>
  </div>
 

 
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('templates/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{asset('templates/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
