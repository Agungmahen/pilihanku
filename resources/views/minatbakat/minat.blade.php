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

                <p class="mb-3">Bagaimana Anda mendeskripsikan kegiatan impian Anda di waktu luang?</p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal1" value="A">
                            Mengeksplorasi teknologi atau bermain game
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal1" value="B">
                            Melukis, menulis, atau berkreasi

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal1" value="C">
                            Bersosialisasi dengan teman atau berpartisipasi dalam olahraga

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal1" value="D">
                            Membaca buku atau menonton film

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Jika Anda dihadapkan pada masalah, cara mana yang lebih Anda sukai untuk mencari solusi?
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal2" value="A">
                            Menganalisis masalah dan mencari solusi dengan logika

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal2" value="B">
                            Berpikir kreatif dan menciptakan solusi inovatif

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal2" value="C">
                            Berdiskusi dan berkolaborasi dalam kelompok

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal2" value="D">
                            Mencari bantuan dari ahli atau otoritas 

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Apakah Anda senang belajar dan mencoba hal-hal baru di dunia teknologi?
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal3" value="A">
                            Sangat senang dan selalu ingin tahu perkembangan terbaru

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal3" value="B">
                            Senang, tetapi tidak terlalu obsesif
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal3" value="C">
                            Biasa saja, lebih suka berinteraksi dengan orang 

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal3" value="D">
                            Kurang senang, tidak terlalu tertarik pada teknologi
                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Bagaimana Anda menilai kemampuan komunikasi dan persuasi Anda?
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal4" value="A">
                            Mampu menyampaikan ide dengan jelas 

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal4" value="B">
                            Lebih suka menyampaikan ide dengan cara yang menarik 

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal4" value="C">
                            Cukup baik dalam berkomunikasi dan berdiskusi 

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal4" value="D">
                            Lebih suka menyampaikan ide secara tertulis daripada lisan

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Jika diberi pilihan antara pengembangan perangkat lunak atau keamanan siber, pilihan Anda adalah?
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal5" value="A">
                            Pengembangan perangkat lunak 

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal5" value="B">
                            Keduanya menarik 

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal5" value="C">
                            Keamanan siber 

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal5" value="D">
                            Tidak yakin 

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Bagaimana Anda biasanya menyelesaikan proyek atau tugas besar di sekolah?
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal6" value="A">
                            Dengan menganalisis dan menyusun algoritma 

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal6" value="B">
                            Dengan mendemonstrasikan kreativitas atau inovasi 

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal6" value="C">
                            Dengan bekerja dalam tim atau berkolaborasi 

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal6" value="D">
                            Dengan memahami konsep dasar dan teori 

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Apakah Anda lebih suka bekerja sendiri atau dalam tim?
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal7" value="A">
                            Bekerja sendiri 

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal7" value="B">
                            Bekerja dalam tim 

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal7" value="C">
                            Bergantung pada konteks atau tugas 

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal7" value="D">
                            Tidak yakin

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Jika diberi pilihan mata kuliah opsional, bidang mana yang lebih menarik bagi Anda?
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal8" value="A">
                            Kecerdasan buatan atau pemrograman

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal8" value="B">
                            Seni, desain, atau kreativitas

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal8" value="C">
                            Bisnis atau manajemen 

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal8" value="D">
                            Ilmu alam atau lingkungan 

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Bagaimana Anda melihat diri Anda menggunakan pengetahuan komputer di masa depan?
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal9" value="A">
                            Bekerja di industri teknologi 

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal9" value="B">
                            Mengembangkan aplikasi atau perangkat lunak 

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal9" value="C">
                            Menjadi admin perkantoran

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal9" value="D">
                            Belum yakin, tetapi ingin mempelajari lebih lanjut

                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">Apa yang paling menarik bagi Anda dalam dunia komputer?
                </p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal10" value="A">
                            Analisis dan pemecahan masalah 

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal10" value="B">
                            Kreativitas dan inovasi

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal10" value="C">
                            Keamanan dan resiko 

                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal10" value="D">
                            Pemahaman konsep dasar dan prinsip 

                        </label>
                    </li>
                </ul>                
              <center>
                <button type="submit" class="btn btn-primary">Submit</button>
              </center>
            </form>
        </div>
    </div>
</div>
@endsection
