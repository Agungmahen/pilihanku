@extends('welcome')
@section('content')
<style>
    body, html {
        height: 100%;
        margin: 0;
        background-color: blue; /* Warna latar belakang */
    }

    .container {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .row {
        width: 100%;
    }

    .card {
        margin-bottom: 20px;
    }

    .body {
        background-color: blue;
    }
</style>
<div style="padding-top: 90px"></div>
<div class="container">
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card text-white bg-primary">
                <div class="card-header text-center">
                    <h3 class="mb-0"><b>FREE</b></h3>
                </div>
                <div class="card-body">
                    <table class="table table-light">
                        <tr>
                            <td class="align-middle"><span class="badge badge-success text-success fw-bold" >&#10003;</span></td>
                            <td class="align-middle">Soal Minat</td>
                        </tr>
                        <tr>
                            <td class="align-middle"><span class="badge badge-danger text-danger fw-bold">&#10007;</span></td>
                            <td class="align-middle">Soal Bakat</td>
                        </tr>
                        <tr>
                            <td class="align-middle"><span class="badge badge-danger text-danger fw-bold">&#10007;</span></td>
                            <td class="align-middle">Rekomendasi Universitas/Sekolah Tinggi</td>
                        </tr>
                    </table>
                    <a href="{{url('minat')}}">
                        <div style="margin-top: 18px;margin-bottom: 8px" class="text-center btn btn-outline-light w-100 fw-bold">Coba Gratis</div>
                    </a>
                </div>            
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card text-dark bg-warning">
                <div class="card-header text-center">
                    <h3 class="mb-0"><b>HANYA 5000</b></h3>
                </div>
                <div class="card-body">
                    <table class="table table-light">
                        <tr>
                            <td class="align-middle"><span class="badge badge-success text-success fw-bold">&#10003;</span></td>
                            <td class="align-middle">Soal Minat</td>
                        </tr>
                        <tr>
                            <td class="align-middle"><span class="badge badge-danger text-success fw-bold">&#10003;</span></td>
                            <td class="align-middle">Soal Bakat</td>
                        </tr>
                        <tr>
                            <td class="align-middle"><span class="badge badge-danger text-success fw-bold">&#10003;</span></td>
                            <td class="align-middle">Rekomendasi Universitas/Sekolah Tinggi</td>
                        </tr>
                    </table>
                    <!-- Button trigger modal -->
<button type="button" class="text-center btn btn-outline-dark fw-bold w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Bayar
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <img style="object-fit: contain;margin-bottom: 30px"  src="https://tse4.mm.bing.net/th?id=OIP.5BSS8iiuo9Bb9hOwqgGqqwHaHa&pid=Api&P=0&h=220" alt="GAMBAR KODE QR">
            <form action="{{ url('bayar') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div style="margin-bottom: 15px;">
                    <label for="bukti" style="display: block; font-weight: bold;">Upload Bukti Pembayaran</label>
                    <input type="file" id="bukti" name="bukti" accept=".jpg, .png" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; width: 100%;">
                </div>
            <center>
                <button type="submit" style="padding: 10px 15px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">Submit</button>

            </center>
            </form>
            
        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <a href="{{url('soal1')}}">
            <div style="margin-top: 18px;margin-bottom: 8px" class="text-center btn btn-outline-light w-100 fw-bold">Kirim</div>
        </a>
        </div> --}}
      </div>
    </div>
  </div>
                    {{-- <div class="text-center btn btn-outline-dark fw-bold w-100">Bayar</div> --}}
                </div>  
            </div>
        </div>
    </div>
</div>
@endsection
