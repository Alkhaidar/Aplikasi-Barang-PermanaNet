@extends('dashboard.layout.main')
@section('conten')

<!-- <div class="alert alert-light " role="alert">
  Selamat Datang <a href="#" class="alert-link">Tuan Al-Khaidar</a>. di Aplikasi Inventori Barang Permana
</div> -->

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Barang</p>
                <h5 class="font-weight-bolder">
                  
                </h5>
                <p class="mb-0">
                  <span class="text-success text-sm font-weight-bolder">+55%</span>
                  since yesterday
                </p>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Barang Masuk</p>
                <h5 class="font-weight-bolder">
                  4
                </h5>
                <p class="mb-0">
                  <span class="text-success text-sm font-weight-bolder">+3%</span>
                  Hari ini
                </p>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Barang Keluar</p>
                <h5 class="font-weight-bolder">
                  1
                </h5>
                <p class="mb-0">
                  <span class="text-danger text-sm font-weight-bolder">-2%</span>
                  Hari ini
                </p>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<div class="row mt-4">
  <div class="col-lg-7 mb-lg-0 mb-4">
    <div class="card z-index-2 h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize">Sales overview</h6>
        <p class="text-sm mb-0">
          <i class="fa fa-arrow-up text-success"></i>
          <span class="font-weight-bold">4% more</span> in 2021
        </p>
      </div>
      <div class="card-body p-3">
        <div class="chart">
          <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-5">
    <div class="card card-carousel overflow-hidden h-100 p-0">
      <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
        <div class="carousel-inner border-radius-lg h-100">
          <div class="carousel-item h-100 active" style="background-image: url('https://home.permana.net.id/wp-content/uploads/2022/06/Internet-Ultra-Cepat.jpg');
      background-size: cover;">
            <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
              <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                <i class="ni ni-camera-compact text-dark opacity-10"></i>
              </div>
              <h5 class="text-white mb-1">Internet Utra Cepat</h5>
              <p>Dengan mengutamakan layanan ultra cepat dan dihandalkan.</p>
            </div>
          </div>
          <div class="carousel-item h-100" style="background-image: url('https://home.permana.net.id/wp-content/uploads/2022/06/Kenyamanan-Sebagai-Prioritas.jpg');
      background-size: cover;">
            <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
              <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                <i class="ni ni-bulb-61 text-dark opacity-10"></i>
              </div>
              <h5 class="text-white mb-1">Kenyamanan Sebagai Prioritas</h5>
              <p>Menyediakan kenyamanan dan akses tanpa batas yang menunjang informasi yang tiada henti.</p>
            </div>
          </div>
          <div class="carousel-item h-100" style="background-image: url('https://home.permana.net.id/wp-content/uploads/2022/06/Customer-Support.jpg');
      background-size: cover;">
            <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
              <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                <i class="ni ni-trophy text-dark opacity-10"></i>
              </div>
              <h5 class="text-white mb-1">24 / 7 / 365 Customer Support</h5>
              <p>Memiliki tim yang baik dan kompeten agar memenuhi rasa aman dan nyaman sebagai prioritas kami.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
</div>

<footer class="footer pt-3   ">
  <div class="container-fluid">
    <div class="row align-items-center justify-content-lg-between">
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
          © <script>
                  document.write(new Date().getFullYear())
                </script>,
                Copyright <i class="fa fa-heart"></i> 
                <a href="https://permana.net.id/" class="font-weight-bold" target="_blank">PermanaNet</a>
                #Manjakanharimu #Samapermana
          </p>
        </div>
      </div>
    </div>
  </div>
  </div>

</footer>
</div>
@endsection