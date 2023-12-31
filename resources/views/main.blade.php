@extends('welcome')
@section('content')
<style>
    body {
            background: linear-gradient(to right, #8c52ff, #5ce1e6);           
         height: 100%;
        }
    .gm {
        height: 300px;
    }
        .logo {
            width : 70%;
    height: 300px;
}

/* Media query for mobile devices with a maximum width of 767px */
@media (max-width: 767px) {
    .logo {
        width :100%;
        height: 100px;
    }
    
    .gm {
        width : 70%;
        height: 100px;
        
    }

}
        .j {
    height: 200px;
}

/* Media query for mobile devices with a maximum width of 767px */
@media (max-width: 767px) {
    .j {
        height: 80px;
    }
}
@media (max-width: 767px) {
    .h {
        height: 50%;
    }
}
</style>

<div class="container" style="padding-top: 80px">
    {{-- <img src="../img/aw.jpg" class="img-fluid" alt="Responsive Image"> --}}
</div>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <table>
                <thead>
                    <tr>
                        <td class="text-center fw-bold fs-4" colspan="2">KENALI DIRIMU</td>
                    </tr>
                    <tr>
                        <td class="text-center" colspan="2"><i>Dengan berbagai fitur yang kami sediakan</i></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <center>
                        <td class="text-center fw-bold" colspan="2">
                            <div style="padding-top: 30px"></div>
                            <div class="fw-bold" style="padding: 10px;background-color: blue;color: white;border-radius: 30px">TEST MINAT BAKAT</div>
                        </td>
                        </center>
                    </tr>
                    <tr>
                        <td >
                            <img src="img/ifj.png" alt="" class="h img-fluid">
                        </td>
                        <td class="text-center fw-bold">Melalui fitur ini, kamu bisa mengeksplor minat dan bakatmu melalui tes yang kami sediakan, sekaligus kami akan menampilkan program studi komputer yang paling cocok untukmu berdasarkan hasil tes minat dan bakatmu.</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center">
                            <a href="{{url('minatbakat')}}" class="btn rounded btn-primary">COBA SEKARANG</a>
                        </td>
                    </tr>
                    <tr>
                        <center>
                        <td class="text-center" colspan="2">
                            <div style="padding-top: 30px"></div>
                            <div class="fw-bold" style="padding: 10px;background-color: blue;color: white;border-radius: 30px">INFORMASI JURUSAN</div>
                        </td>
                        </center>
                    </tr>
                    <tr>
                        <td class="text-center fw-bold">Fitur ini menampilkan Program studi ilmu komputer dari berbagai Perguruan Tinggi di daerah Sumatera Selatan.</td>
                        <td rowspan="2">
                            <img src="img/ifjh.png" width="100px" alt="" class="img-fluid">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a href="{{url('jurusan')}}" style="width: 200px" class="btn rounded btn-primary">COBA SEKARANG</a>
                        </td>
                    </tr>
                    <tr>
                        <center>
                            <td class="text-center" colspan="2">
                                <div style="padding-top: 30px"></div>
                                <div class="fw-bold" style="padding: 10px;background-color: blue;color: white;border-radius: 30px">KONSULTASI</div>
                            </td>
                            </center>
                    </tr>
                    <tr>
                        <td rowspan="2">
                            <img src="img/knsl.png" alt="" class="img-fluid">
                        </td>
                        <td class="text-center fw-bold  ">Fitur ini memungkinkanmu untuk berdiskusi langsung dengan pakar di bidang ilmu komputer tentang program studi yang ingin kamu tempuh..</td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a href="https://api.whatsapp.com/send?phone=+6283178485184&text={{urlencode("Hai Pilihan ku")}}" target="_blank"  class="btn rounded btn-success"><i class="bi bi-whatsapp"></i> KONSULTASI</a>
                        </td>
                    </tr>                
                </tbody>
            </table>
            <div style="padding: 40px"></div>
        {{-- <div class="row">
            <div class="text-center" >MEDIA PARTNER</div>
            <div class="col">
                <img src="img/knsl.png" class="j" alt="">
            </div>
            <div class="col">
                <img src="img/knsl.png" class="j" alt="">
            </div>
            <div class="col">
                <img src="img/knsl.png" class="j" alt="">
            </div>
            <div class="col">
                <img src="img/knsl.png" class="j" alt="">
            </div>
        </div> --}}
        <hr>
        <!--<div style="padding: 30px"></div>-->
        <div class="row">
            <div class="text-center">
               <b>PRODUK MANAGER</b>
            </div>
            <hr>
             <div style="padding: 10px"></div>
            <div class="col">
                <center>
                    <div><img src="img/yarza.jpg" class="gm" style="border-radius: 50%;width : 30%" alt=""></div>
                </center>
                <div class="fw-bold text-center">YARZA APRIZAL S.Kom M.Kom</div>
                <!--<div class="text-center">SOFTWARE ENGINERING</div>-->
            </div>
          
        </div>   
        <div style ="padding-top : 20px">
            
        </div>
        </div>
        <hr>
        <!--<div style="padding: 30px"></div>-->
        <div class="row">
            <div class="text-center">
               <b>TEAM</b>
            </div>
            <hr>
             <div style="padding: 20px"></div>
            <div class="col">
                <center><div><img src="img/ag.jpg" style="border-radius: 50%" class="logo" alt=""></div></center>
                <div class="fw-bold text-center">AGUNG MAHENDRA</div>
                <div class="text-center">SOFTWARE ENGINERING</div>
            </div>
            <div class="col">
                <center><div><img src="img/e.jpg" style="border-radius: 50%" class="logo" alt=""></div></center>
                <div class="fw-bold text-center">ELICIA SERLIYAWATI</div>
                <div class="text-center">SOFTWARE ENGINERING</div>
            </div>
            <div class="col">
                <center><div><img src="img/b.jpg" style="border-radius: 50%" class="logo" alt=""></div></center>
                <div class="fw-bold text-center">BILLY KRISTIAN</div>
                <div class="text-center">SOFTWARE ENGINERING</div>
            </div>
          
        </div>          
        </div>
    </div>
</div>
<div style="padding-bottom: 10px"></div>
@endsection
@section('footer')
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
