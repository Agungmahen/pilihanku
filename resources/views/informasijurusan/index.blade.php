@extends('welcome')

@section('content')
<style>
    body {
        background: linear-gradient(to right, #f3d9df, rgb(138, 138, 243));
        height: 100vh;
        margin: 0;
        font-family: 'Arial', sans-serif;
    }

    .logo {
      object-fit: contain;

        height: 200px;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    /* Media query for mobile devices with a maximum width of 767px */
    @media (max-width: 767px) {
        .logo {
            height: 80px;
        }
    }

    .mb-5 {
        margin-bottom: 5rem;
    }

    .jurusan {
        background-color: #fff;
        border-radius: 0.25rem;
        padding: 1rem;
    }

    .accordion-header {
        background-color: #fff;
    }

    .accordion-body {
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        border-top: none;
        border-radius: 0 0 0.25rem 0.25rem;
    }

    .accordion-item {
        border: 1px solid #dee2e6;
        border-radius: 0.25rem;
        margin-bottom: 0.5rem;
    }

    .accordion-button {
        color: #000;
        font-weight: bold;
    }

    .footer {
        margin-top: 100px;
        background-color: #f8f9fa;
        padding: 3rem 0;
    }

    .footer img {
        max-width: 60px;
        height: auto;
    }

    .footer p {
        text-align: justify;
    }
</style>

<div class="mb-5">
    <a href="{{ url('/') }}" style="width: 40px; top: 6rem; left: 1rem; position: fixed; z-index: 1029;">
        <div class="btn btn-light rounded-circle p-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Kembali">
            <i class="bi bi-arrow-left-circle"></i>
        </div>
    </a>
    <div style="padding-top: 80px"></div>
    <div style="color: white;black;font-weight: bold" class="jurusan bg-primary rounded-bottom text-center">
        INFORMASI PROGRAM STUDI PADA BIDANG KOMPUTER
    </div>
    <div class="container">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <!-- STRATA 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <div class="fw-bold">STRATA 1</div>
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="accordion" id="accordionExample">
                            <!-- KAMPUS TERKAIT -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        KAMPUS TERKAIT
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="text-center">Rekomendasi</div>
                                        <div class="row">
                                            <div class="col">
                                                <a href="https://if.binadarma.ac.id/" target="_blank"
                                                    style="text-decoration: none;color: black;font-weight: bold">
                                                    <img src="https://www.binadarma.ac.id/wp-content/uploads/2016/03/logo-ok.png"
                                                        class="logo" alt="">
                                                    <div class="text-center">Bina Darma</div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="https://palcomtech.ac.id/informatika/" target="_blank"
                                                    style="text-decoration: none;color: black;font-weight: bold">
                                                    <img
                                                        src="https://palcomtech.ac.id/wp-content/uploads/2021/12/logo-pct-inst.png"
                                                        class="logo" alt="">
                                                    <div class="text-center">Palcomtech</div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="https://mdp.ac.id/" target="_blank"
                                                    style="text-decoration: none;color: black;font-weight: bold">
                                                    <img src="../img/logo_mdp.png" class="logo" alt="">
                                                    <div class="text-center">MDP</div>
                                                </a>
                                            </div>
                                        </div>
                                        <br>
                                        <a href="{{url('kampuss1')}}">
                                            <div class="text-center">Selengkapnya</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- DIPLOMA 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <div class="fw-bold">DIPLOMA 4</div>
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="accordion" id="diploma4">
                            <!-- KAMPUS TERKAIT -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="kampus_d4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#kampusd4" aria-expanded="true" aria-controls="kampusd4">
                                        KAMPUS TERKAIT
                                    </button>
                                </h2>
                                <div id="kampusd4" class="accordion-collapse collapse" aria-labelledby="kampus_d4"
                                    data-bs-parent="#diploma4">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col">
                                                <a href="https://teknikkomputer.polsri.ac.id/teknologi-informatika-multimedia-digital-d4/"
                                                    target="_blank">
                                                    <img src="../img/polsri.png" class="logo" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <a href="https://teknikkomputer.polsri.ac.id/teknologi-informatika-multimedia-digital-d4/"
                                            target="_blank">
                                            <div class="text-center">Kunjungi</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- DIPLOMA 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        <div class="fw-bold">DIPLOMA 3</div>
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="accordion" id="D3">
                            <!-- KAMPUS TERKAIT -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="kampus_d3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#kampusd3" aria-expanded="true" aria-controls="kampusd3">
                                        KAMPUS TERKAIT
                                    </button>
                                </h2>
                                <div id="kampusd3" class="accordion-collapse collapse" aria-labelledby="kampus_d3"
                                    data-bs-parent="#D3">
                                    <div class="accordion-body">
                                        <div class="text-center">Rekomendasi</div>
                                        <div class="row">
                                            <div class="col">
                                                <img src="https://unsri.ac.id/images/logo-unsri-gif9.gif" class="logo"
                                                    alt="">
                                            </div>
                                            <div class="col">
                                                <img src="https://www.binadarma.ac.id/wp-content/uploads/2016/03/logo-ok.png"
                                                    class="logo" alt="">
                                            </div>
                                            <div class="col">
                                                <img src="https://unisti.ac.id/img/logo.png" class="logo" alt="">
                                            </div>
                                        </div>
                                        <a href="{{url('kampusd3')}}">
                                            <div class="text-center">Selengkapnya</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="d-flex mb-3 mt-3">
                    <img class="img-fluid" src="../img/bg.png" alt="PILIHANKU Logo">
                    <h5 class="mt-3 m">PILIHANKU</h5>
                </div>
                <p style="text-align: justify">PILIHANKU adalah sebuah platform inovatif yang didedikasikan untuk
                    membimbing calon mahasiswa dalam mengurangi risiko pemilihan jurusan yang tidak sesuai dan membantu
                    mereka menemukan program studi yang sesuai dengan potensi unik mereka.</p>
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
