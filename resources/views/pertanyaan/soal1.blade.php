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

{{-- INFORMATIKA --}}
<div style="padding-top: 100px"></div>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="" method="post">
                @csrf

                <p class="mb-3">Apa yang dimaksud dengan Informatika</p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal1" value="A">
                            Studi tentang perangkat keras komputer
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal1" value="B">
                            Analisis dan desain sistem informasi

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal1" value="C">
                            Penelitian tentang teori komunikasi

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal1" value="D">
                            Pengembangan perangkat lunak untuk media sosial

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Peran utama seorang analis sistem dalam pengembangan perangkat lunak adalah
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal2" value="A">
                            Menjalankan server web

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal2" value="B">
                            Membuat desain grafis untuk situs web

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal2" value="C">
                            Menganalisis kebutuhan sistem dan merancang solusi perangkat lunak

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal2" value="D">
                            Menyimpan data dalam database

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Metode pengembangan perangkat lunak yang menekankan kerja kolaboratif dan responsif terhadap perubahan adalah:
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal3" value="A">
                            Waterfall

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal3" value="B">
                            Spiral
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal3" value="C">
                            RAD (Rapid Application Development)

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal3" value="D">
                            V-Model
                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Apa yang dimaksud dengan algoritma dalam konteks komputer dan Informatika
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal4" value="A">
                            Proses menetapkan prioritas isu-isu media

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal4" value="B">
                            Serangkaian instruksi untuk menyelesaikan tugas tertentu

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal4" value="C">
                            Membuat strategi pemasaran online

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal4" value="D">
                            Menetapkan target pasar untuk produk baru

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
                            Meningkatkan kecepatan internet

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal5" value="B">
                            Menyimpan data dalam database

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal5" value="C">
                            Mengelola dan menganalisis volume besar dan kompleksitas data

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal5" value="D">
                            Meningkatkan keamanan informasi

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Apa yang dimaksud dengan arsitektur mikroprosesor dalam konteks Informatika
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal6" value="A">
                            Studi tentang desain antarmuka pengguna

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal6" value="B">
                            Perangkat keras yang mengintegrasikan fungsi CPU

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal6" value="C">
                            Teori komunikasi dalam pengembangan perangkat lunak

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal6" value="D">
                            Penggunaan metode agile dalam manajemen proyek

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Bagaimana sistem operasi berkontribusi pada fungsi komputer
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal7" value="A">
                            Membangun dan mengembangkan sistem yang dapat belajar sendiri

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal7" value="B">
                            Memahami kebutuhan pengguna dan merancang solusi sistem

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal7" value="C">
                            Mengelola sumber daya komputer dan menyediakan antarmuka

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal7" value="D">
                            Menyimpan data dalam database

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Peran seorang administrator basis data melibatkan
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal8" value="A">
                            Menulis kode program

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal8" value="B">
                            Menjalankan dan memelihara server

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal8" value="C">
                            Mempelajari dan mengelola interaksi online

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal8" value="D">
                            Mengelola dan menjaga performa basis data

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Apa yang dimaksud dengan pengembangan perangkat lunak berbasis "open source"
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal9" value="A">
                            Membangun aplikasi tanpa desain antarmuka pengguna

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal9" value="B">
                            Menggunakan kode sumber perangkat lunak yang tersedia untuk umum

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal9" value="C">
                            Menjalankan server web terbuka untuk pengguna umum

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal9" value="D">
                            Menerapkan kebijakan keamanan tertutup

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Konsep "cloud computing" dalam konteks Informatika melibatkan
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal10" value="A">
                            Pengembangan perangkat keras

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal10" value="B">
                            Penggunaan sumber daya komputasi melalui jaringan internet

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal10" value="C">
                            Membuat desain antarmuka pengguna

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal10" value="D">
                            Analisis kebutuhan pengguna dan merancang solusi sistem

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Apa peran utama seorang ahli kecerdasan buatan (AI) dalam konteks Informatika
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal11" value="A">
                            Menulis kode program

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal11" value="B">
                            Membuat desain antarmuka pengguna

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal11" value="C">
                            Membangun dan mengembangkan sistem yang dapat belajar sendiri

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal11" value="D">
                            Menjalankan dan memelihara server

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Bagaimana konsep keamanan informasi berdampak pada pengembangan perangkat lunak
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal12" value="A">
                            Meningkatkan kecepatan internet

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal12" value="B">
                            Menyimpan data dalam database

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal12" value="C">
                            Perlindungan terhadap kerahasiaan, integritas, dan ketersediaan informasi

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal12" value="D">
                            Memahami kebutuhan pengguna dan merancang solusi sistem

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Peran seorang analis keamanan informasi melibatkan
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal13" value="A">
                            Menulis kode program

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal13" value="B">
                            Menjaga keamanan data dan sistem

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal13" value="C">
                            Membuat desain grafis untuk situs web

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal13" value="D">
                            Mengelola basis data organisasi

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Apa yang dimaksud dengan "agile" dalam konteks pengembangan perangkat lunak
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal14" value="A">
                            Perencanaan dan dokumentasi yang rinci

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal14" value="B">
                            Kerja kolaboratif dan responsif terhadap perubahan

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal14" value="C">
                            Penggunaan metode waterfall

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal14" value="D">
                            Mengelola dan menjaga performa basis data

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Bagaimana teknologi informasi mendukung produksi dan distribusi konten media digital
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal15" value="A">
                            Meningkatkan kecepatan internet

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal15" value="B">
                            Menyimpan data dalam database

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal15" value="C">
                            Memfasilitasi komunikasi antarmanusia

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal15" value="D">
                            Mengelola jaringan komputer

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
