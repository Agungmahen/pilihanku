<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/all.min.css">
  <title>Project Pkl</title>
</head>
<style>
    .sidebar {
    overflow-y: scroll;
    z-index: 1024;
  width: 250px;
  height: 100vh;
  background-color: rgb(123, 223, 253);
  color: black;
  position: fixed;
  top: 0;
  left: 0;
  padding-top: 20px;
}

.sidebar-header {
  padding: 10px 20px;
}

.sidebar-header h3 {
  margin: 0;
  font-size: 24px;
}

.sidebar-menu {
  list-style: none;
  padding: 0;
  margin: 20px 0;
}

.sidebar-menu li {
  padding: 10px 20px;
}

.sidebar-menu li a {
  text-decoration: none;
  /* font-weight: bold; */
  color: black;
  font-size: 18px;
  transition: color 0.3s ease;
}

.sidebar-menu li a:hover {
background-color: #989797;
  color: white;
  font-weight: bold;
}
.sidebar-menu li a:focus {
background-color: #333;
  color: black;
}

.isi {
  margin-left: 240px;
  background-image: url('bg/bg_bidar1.jpg');
}

.sidebar-menu li a span i:hover{
  transform: scaleY(-1);
}


footer {
    background-color: #333;
    color: #fff;
    padding: 20px;
}

.footer-content {
    display: flex;
    flex-wrap: wrap;
}

.footer-section {
    flex: 1 1 300px;
    margin: 10px;
}

.footer-section h2 {
    color: #fff;
    margin-bottom: 10px;
}

.footer-section p {
    font-size: 14px;
}

.footer-section ul {
    list-style-type: none;
    padding: 0;
}

.footer-section ul li a {
    color: #fff;
    text-decoration: none;
    display: block;
    margin-bottom: 5px;
}

.footer-bottom {
    border-top: 1px solid #fff;
    padding-top: 10px;
    font-size: 12px;
    text-align: center;
    font-size: 15px;
    width: 1200px;
}
 
 body{
  background-color: grey;
 }
</style>
<body>
  <div class="sidebar">
  <div class="sidebar-header">
<center>
  <div style="padding-top: 20px"><img src="{{url('')}}/assets/logo2.png" alt="" style=" ; padding-bottom: 20px; width: 80%;-webkit-filter: drop-shadow(-4px 4px 4px white )"> </div>
</div>
</center>
@if (Auth::user())
<center>
 <div> <b>Halo, {{Auth::user()->name}}</b></div>
</center>
@endif
<hr>            
  <div>
    <ul class="sidebar-menu" >
      <li>
        <a href="{{url('/')}}" class="nav-link px-0 align-middle">
          <i class="fs-5 bi-house"></i><span class="ms-1 d-none d-sm-inline">Beranda</span></a>
    </li>
                    @if((Auth::user())) 
                      @if (!empty(Auth::user()->level))   
                      @if(Auth::user()->level=="admin")                       
                    <li>
                      <a href="{{url('suratmasuk')}}" class="nav-link px-0">  <i class="fs-6 bi-table"></i> <span class="d-none d-sm-inline">Data Surat Masuk</span>  </a>
                  </li>
                    <li>
                      <a href="{{url('suratkeluar')}}" class="nav-link px-0">  <i class="fs-6 bi-table"></i> <span class="d-none d-sm-inline">Data Surat Keluar</span>  </a>
                  </li>                             
                    @endif
                    @endif
                  </a>                                              
                      <li>
                          <a href="{{url('/logout')}}" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-person-down"></i><span class="ms-1 d-none d-sm-inline">Log out</span></a>
                      </li>
                      @else
                      <li>
                        <a href="{{url('/login')}}" class="nav-link px-0 align-middle">
                          <i class="fs-4 bi-person-up"></i><span class="ms-1 d-none d-sm-inline">Login</span></a>
                    </li>
                  </ul>
                    @endif
                   
      </ul>
      <hr>
  </div>
</div>

<div class="isi">
  @yield('content')
</div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>
