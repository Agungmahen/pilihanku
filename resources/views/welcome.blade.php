<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css">
  <title>PILIHAN KU</title>
</head>
<style>
  .m{
    color: blue;
    font-weight: bold;
  }
</style>
<body>
   <nav style="position: fixed;width: 100%;z-index: 1024;" class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <img style="width: 60px;height: 50px;" src="../img/bg.png" alt=""> 
      <a class="navbar-brand fw-bold text-black" href="#">PILIHANKU</a>
      <button class="navbar-toggler" style="width: 80px" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-2">
          @if (Auth()->user())              
          @if (!empty(Auth::user()->level))   
                @if(Auth::user()->level=="user") 
          <li class="nav-item">
            <a class="nav-link text-center w-100 btn btn-success mt-1 fw-bold rounded-pill text-light" href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-center w-100 btn btn-success mt-1 fw-bold rounded-pill text-light" href="{{url('pembelian')}}">Pembelian</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-center w-100 btn btn-success mt-1 fw-bold rounded-pill text-light" href="{{url('minatbakat')}}">Minat Bakat</a>
          </li>         
          <li class="nav-item">
            <a class="nav-link text-center w-100 btn btn-success mt-1 fw-bold rounded-pill text-light" href="{{url('jurusan')}}">Informasi Jurusan</a>
          </li>         
          <li class="nav-item">
            <a class="nav-link text-center w-100 btn btn-success mt-1 fw-bold rounded-pill text-light" href="https://api.whatsapp.com/send?phone=+6283178485184&text={{urlencode("Hai Pilihan ku")}}" target="_blank" >Konsultasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-center w-100 btn btn-success mt-1 fw-bold rounded-pill text-light" href="{{url('logout')}}" >Logout</a>
          </li>
          @endif
          @endif
          @if (!empty(Auth::user()->level))   
          @if(Auth::user()->level=="admin") 
          <li class="nav-item">
            <a class="nav-link text-center w-100 btn btn-success mt-1 fw-bold rounded-pill text-light" href="{{url('user')}}">Data User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-center w-100 btn btn-success mt-1 fw-bold rounded-pill text-light" href="{{url('logout')}}" >Logout</a>
          </li>
          @endif
          @endif
          @else
          <li class="nav-item">
            <a class="nav-link text-center w-100 btn btn-success mt-1 fw-bold rounded-pill text-light" href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-center w-100 btn btn-success mt-1 fw-bold rounded-pill text-light" href="{{url('minatbakat')}}">Minat Bakat</a>
          </li>         
          <li class="nav-item">
            <a class="nav-link text-center w-100 btn btn-success mt-1 fw-bold rounded-pill text-light" href="{{url('jurusan')}}">Informasi Jurusan</a>
          </li>         
          <li class="nav-item">
            <a class="nav-link text-center w-100 btn btn-success mt-1 fw-bold rounded-pill text-light" href="https://api.whatsapp.com/send?phone=+6283178485184&text={{urlencode("Hai Pilihan ku")}}" target="_blank" >Konsultasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-center w-100 btn btn-success mt-1 fw-bold rounded-pill text-light" href="{{url('login')}}" >Login</a>
          </li>
          @endif

        </ul>      
      </div>
    </div>
  </nav>
  {{-- <div class="position-absolute bottom-0 end-0">
    <a href="https://api.whatsapp.com/send?phone=+6283178485184&text={{urlencode("Hai Pilihan ku")}}" target="_blank" style="justify-content: spa">
      <div class="btn btn-success"> <div style="color: white;font-weight: bold"><i class="bi bi-whatsapp"></i> Konsultasi Sekarang</div></div>
    </a>
  </div> --}}

<div class="isi">
  @yield('content')
  @yield('footer')
</div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>
