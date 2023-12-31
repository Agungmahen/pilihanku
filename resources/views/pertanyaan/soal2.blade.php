@extends('welcome')
@section('content')
<!-- Di dalam view2.blade.php -->
<style>
    /* resources/css/styles.css */
    body {
        background: linear-gradient(to right, #8c52ff, #5ce1e6);           

    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    ul li {
        margin-bottom: 10px;
    }
</style>
<div style="padding-top: 100px"></div>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="{{url('soal1')}}" method="post">
                @csrf

                <p class="mb-3">Apa yang dimaksud dengan sistem informasi
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal1" value="A">
                            kemampuan individu dalam merancang dan mengembangkan ragam algorithma komputasi (teori komputasi dan algorithma)

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal1" value="B">
                            kemampuan individu dalam merancang dan mengembangkan perangkat keras berbasis digital (rekayasa perangkat keras/hardware)

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal1" value="C">
                            kemampuan individu dalam merancang, mengembangkan, dan menerapkan sistem informasi organisasi sebagai aset utama organisasi

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal1" value="D">
                            kemampuan dalam merancang dan mengembangkan perangkat lunak (software)

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Manakah dari berikut yang bukan merupakan tahapan dalam Siklus Pengembangan Sistem (SDLC)
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal2" value="A">
                            Analisis

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal2" value="B">
                            Desain

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal2" value="C">
                            Pemrograman

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal2" value="D">
                            Evaluasi

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Keamanan informasi dalam Sistem Informasi melibatkan perlindungan terhadap
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal3" value="A">
                            Hanya integritas data

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal3" value="B">
                            Hanya ketersediaan data

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal3" value="C">
                            Integritas, ketersediaan, dan kerahasiaan data

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal3" value="D">
                            Ketersediaan dan kerahasiaan data

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Apa tujuan utama dari business process reengineering (BPR)
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal4" value="A">
                            Meningkatkan efisiensi dan efektivitas bisnis

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal4" value="B">
                            Meningkatkan keamanan data

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal4" value="C">
                            Mengurangi biaya pengembangan

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal4" value="D">
                            Mempercepat siklus hidup pengembangan perangkat lunak

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Metode pengembangan perangkat lunak yang menekankan iterasi dan kolaborasi dengan pelanggan adalah
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal5" value="A">
                            SDLC

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal5" value="B">
                          RAD
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal5" value="C">
                            WATERFALL
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal5" value="D">
                            AGILE
                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Apa keuntungan utama dari teknologi cloud dalam konteks Sistem Informasi
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal6" value="A">
                            Keamanan data yang tinggi

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal6" value="B">
                            Ketergantungan pada infrastruktur internal

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal6" value="C">
                            Skalabilitas dan aksesibilitas tinggi

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal6" value="D">
                            Keterbatasan sumber daya

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Apa peran utama sistem pendukung keputusan (DSS) dalam suatu organisasi
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal7" value="A">
                            Meningkatkan produktivitas karyawan

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal7" value="B">
                            Mendukung pengambilan keputusan di tingkat manajerial

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal7" value="C">
                            Menangani transaksi harian

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal7" value="D">
                            Memproses data besar secara real-time

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Big data dikenal karena
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal8" value="A">
                            Ukuran dataset yang kecil

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal8" value="B">
                            Keterbatasan dalam jenis data yang dapat diproses

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal8" value="C">
                            Volume, kecepatan, dan keragaman data yang tinggi

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal8" value="D">
                            Ketersediaan data yang terbatas

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Middleware dalam konteks Sistem Informasi berperan sebagai
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal9" value="A">
                            Perangkat keras utama 

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal9" value="B">
                            Perangkat lunak penyimpanan data

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal9" value="C">
                            Perantara untuk komunikasi antara aplikasi

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal9" value="D">
                            Sistem manajemen basis data

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Apa yang menjadi fokus utama analisis kebutuhan pengguna dalam pengembangan Sistem Informasi
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal10" value="A">
                            Efisiensi operasional 

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal10" value="B">
                            Kepuasan pengguna

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal10" value="C">
                            Keamanan data

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal10" value="D">
                            Integrasi teknologi terbaru

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">E-commerce berkaitan dengan
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal11" value="A">
                            Pertukaran barang dan jasa secara elektronik

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal11" value="B">
                            Pertukaran uang secara fisik

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal11" value="C">
                            Pertukaran informasi hanya melalui surat

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal11" value="D">
                            Pertukaran data melalui jaringan lokal

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Bagaimana Sistem Informasi dapat mendukung integrasi berbagai aplikasi dan sistem dalam suatu organisasi
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal12" value="A">
                            Dengan membatasi akses ke data

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal12" value="B">
                            Melalui penggunaan database terpisah

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal12" value="C">
                            Dengan menggunakan middleware

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal12" value="D">
                            Dengan mengisolasi setiap aplikasi secara independen

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">SApa peran etika dalam pengembangan Sistem Informasi
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal13" value="A">
                            Memastikan keamanan data

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal13" value="B">
                            Mempertahankan kecepatan pengembangan

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal13" value="C">
                            Menjamin privasi pengguna

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal13" value="D">
                            Meningkatkan efisiensi operasional

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Dalam konteks Sistem Informasi, manakah yang bukan merupakan komponen teknologi cloud
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal14" value="A">
                            Infrastructure as a Service (IaaS)

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal14" value="B">
                            Platform as a Service (PaaS)

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal14" value="C">
                            Software as a Service (SaaS)

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal14" value="D">
                            Database as a Service (DBaaS)

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Dilema etika yang mungkin dihadapi oleh seorang profesional Sistem Informasi melibatkan
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal15" value="A">
                            Kecepatan pengembangan tanpa mempertimbangkan kualitas

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal15" value="B">
                            Pemrosesan data tanpa izin pengguna

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal15" value="C">
                            Ketergantungan pada sumber daya lokal

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal15" value="D">
                            Penggunaan teknologi cloud untuk keamanan maksimal

                        </label>
                    </li>
                </ul>
              <center>
                <button type="submit" class="btn btn-primary">Next Page</button>
              </center>
            </form>
        </div>
    </div>
</div>
@endsection
