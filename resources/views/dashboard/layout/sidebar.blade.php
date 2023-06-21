<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="false" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" https://permana.net.id/ " target="_blank">
      <img src="https://permana.net.id/asset/logo/permananetlogo.png" class="ms-4">


    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="/">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
          </div>

          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{ route('barang.index') }}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-credit-card text-secondary text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Data Barang</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/barangmasuk">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-briefcase-24 text-primary text-sm opacity-10"></i>

          </div>
          <span class="nav-link-text ms-1">Barang Masuk</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/barangkeluar">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-briefcase-24 text-warning text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Barang Keluar</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/laporan">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-single-copy-04 text-danger text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Laporan</span>
        </a>
      </li>
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account </h6>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/user">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-single-02 text-success text-sm opacity-10"></i>
          </div>
          
          <span class="nav-link-text ms-1">User</span>
  
      </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/logout">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-button-power text-danger text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Logout</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/login">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-collection text-info text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Login</span>
        </a>
      </li>
    </ul>
  </div>

</aside>