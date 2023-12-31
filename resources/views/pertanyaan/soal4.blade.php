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
            <form action="{{url('soal3')}}" method="post">
                @csrf

                <p class="mb-3">SOAL 1</p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal1" value="A">
                            Opsi Jawaban A
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal1" value="B">
                            Opsi Jawaban B
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal1" value="C">
                            Opsi Jawaban C
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal1" value="D">
                            Opsi Jawaban D
                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">SOAL 2</p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal2" value="A">
                            Opsi Jawaban A
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal2" value="B">
                            Opsi Jawaban B
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal2" value="C">
                            Opsi Jawaban C
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal2" value="D">
                            Opsi Jawaban D
                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">SOAL 3</p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal3" value="A">
                            Opsi Jawaban A
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal3" value="B">
                            Opsi Jawaban B
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal3" value="C">
                            Opsi Jawaban C
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal3" value="D">
                            Opsi Jawaban D
                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">SOAL 3</p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal4" value="A">
                            Opsi Jawaban A
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal4" value="B">
                            Opsi Jawaban B
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal4" value="C">
                            Opsi Jawaban C
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal4" value="D">
                            Opsi Jawaban D
                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">SOAL 3</p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal5" value="A">
                            Opsi Jawaban A
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal5" value="B">
                            Opsi Jawaban B
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal5" value="C">
                            Opsi Jawaban C
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal5" value="D">
                            Opsi Jawaban D
                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">SOAL 3</p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal6" value="A">
                            Opsi Jawaban A
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal6" value="B">
                            Opsi Jawaban B
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal6" value="C">
                            Opsi Jawaban C
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal6" value="D">
                            Opsi Jawaban D
                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">SOAL 3</p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal7" value="A">
                            Opsi Jawaban A
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal7" value="B">
                            Opsi Jawaban B
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal7" value="C">
                            Opsi Jawaban C
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal7" value="D">
                            Opsi Jawaban D
                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">SOAL 3</p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal8" value="A">
                            Opsi Jawaban A
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal8" value="B">
                            Opsi Jawaban B
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal8" value="C">
                            Opsi Jawaban C
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal8" value="D">
                            Opsi Jawaban D
                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">SOAL 3</p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal9" value="A">
                            Opsi Jawaban A
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal9" value="B">
                            Opsi Jawaban B
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal9" value="C">
                            Opsi Jawaban C
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal9" value="D">
                            Opsi Jawaban D
                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">SOAL 3</p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal10" value="A">
                            Opsi Jawaban A
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal10" value="B">
                            Opsi Jawaban B
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal10" value="C">
                            Opsi Jawaban C
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal10" value="D">
                            Opsi Jawaban D
                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">SOAL 3</p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal11" value="A">
                            Opsi Jawaban A
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal11" value="B">
                            Opsi Jawaban B
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal11" value="C">
                            Opsi Jawaban C
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal11" value="D">
                            Opsi Jawaban D
                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">SOAL 3</p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal12" value="A">
                            Opsi Jawaban A
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal12" value="B">
                            Opsi Jawaban B
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal12" value="C">
                            Opsi Jawaban C
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal12" value="D">
                            Opsi Jawaban D
                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">SOAL 3</p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal13" value="A">
                            Opsi Jawaban A
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal13" value="B">
                            Opsi Jawaban B
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal13" value="C">
                            Opsi Jawaban C
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal13" value="D">
                            Opsi Jawaban D
                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">SOAL 3</p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal14" value="A">
                            Opsi Jawaban A
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal14" value="B">
                            Opsi Jawaban B
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal14" value="C">
                            Opsi Jawaban C
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal14" value="D">
                            Opsi Jawaban D
                        </label>
                    </li>
                </ul>
                <hr>
                <p class="mt-4 mb-3">SOAL 3</p>
                <ul>
                    <li>
                        <label>
                            <input required type="radio" name="soal15" value="A">
                            Opsi Jawaban A
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal15" value="B">
                            Opsi Jawaban B
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal15" value="C">
                            Opsi Jawaban C
                        </label>
                    </li>
                    <li>
                        <label>
                            <input required type="radio" name="soal15" value="D">
                            Opsi Jawaban D
                        </label>
                    </li>
                </ul>
              <center>
                <button type="submit" class="btn btn-primary">Kirim</button>
              </center>
            </form>
        </div>
    </div>
</div>
@endsection
