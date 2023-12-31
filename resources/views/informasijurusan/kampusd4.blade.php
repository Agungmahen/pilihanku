@extends('welcome')
@section('content')
<style>
     body {
            background: linear-gradient(to bottom, #f3d9df, rgb(138, 138, 243));           
         height: 100%;
        }   
        
    .logo {
    width: 100%;
    transition: height 0.5s ease;
}

/* Media query for mobile devices with a maximum width of 767px */
@media (max-width: 767px) {
    .logo {
        height: 300px;
    }
}

.card:hover .logo {
        height: 320px; /* Adjust the height as needed */
    }

    .card {
        transition: transform 0.3s ease; /* Add a smooth transition effect for the whole card */
    }

    /* Add hover effect for the whole card */
    .card:hover {
        transform: scale(1.05);
        background-color: grey;
}
.btn{
    color: white;
}

.btn:hover{
    color: white;
    font-weight: bold;
}
</style>
<div style="padding-top: 77px"></div>
<div class="jurusan rounded-bottom text-center">
    KAMPUS-KAMPUS SARJANA
</div>
<div class="container mt-3 mb-3">          
    <div class="row mt-3">
        <div class="col">
            <a href="https://palcomtech.ac.id/informatika/" target="_blank">
            <div class="card">
                <div class="card-header">
                        <img src="../img/Logo.jpg" class="logo" alt="">  
                </div>
                <div class="text-center card-body">
                    <a href="" style="text-decoration: none">
                    <div class="btn btn-primary">Kunjungi</div>
                    </a>
                </div>
            </div>
        </a>                                                   
        </div>                                            
        </div>     
    </div>
</div>
<footer class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="d-flex mb-3 mt-3">
            <img class="img-fluid" src="../img/bg.png" alt="PILIHANKU Logo" style="max-width: 60px; height: auto;">
          <h5 class="mt-3 m">PILIHANKU</h5>
          </div>
          <p style="text-align: justify">PILIHANKU adalah sebuah platform inovatif yang didedikasikan untuk membimbing calon mahasiswa dalam mengurangi risiko pemilihan jurusan yang tidak sesuai dan membantu mereka menemukan program studi yang sesuai dengan potensi unik mereka.</p>
        </div>
        <div class="col-md-6 col-lg-2 mb-4 mt-4">
          <h5 class="mb-3 m">Kontak kami</h5>
          <p><i class="bi bi-whatsapp"></i> +6234567898</p>
        </div>
        <div class="col-md-6 col-lg-2 mb-4 mt-4">
          <h5 class="mb-3 m">Email</h5>
          <p><i class="bi bi-envelope"></i> Pilihaku@gmail.com</p>
        </div>
        <div class="col-md-6 col-lg-2 mb-4 mt-4">
          <h5 class="mb-3 m">Layanan</h5>
          <p>Universitas</p>
          <p>Konselor</p>
        </div>
        <div class="col-md-6 col-lg-2 mb-4 mt-4">
          <h5 class="mb-3 m">Informasi</h5>
          <p>Kebijakan Privasi</p>
          <p>Syarat & Ketentuan</p>
          <p>Peluang Karir</p>
        </div>
      </div>
    </div>
  </footer>
@endsection