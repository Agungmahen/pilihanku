@extends('welcome')
@section('content')
<style>
    body {
        background-color: rgb(1, 1, 68); /* Dark background color */
        color: #ffffff; /* Light text color */
    }

    .card {
        background-color: #1f1f1f; /* Darker card background color */
        color: #ffffff; /* Light text color for card content */
        transition: background-color 0.3s ease; /* Smooth transition on background color change */
    }

    .card:hover {
        background-color: #2c2c2c; /* Darker background color on hover */
    }

    .card-header {
        background-color: #343a40; /* Dark header background color */
    }

    .btn-primary {
        background-color: #007bff; /* Primary button color */
    }

    .btn-primary:hover {
        background-color: #0056b3; /* Darker color on button hover */
    }

    a {
        color: #17a2b8; /* Link color */
    }

    a:hover {
        color: #117a8b; /* Darker color on link hover */
    }

    marquee {
        color: white; /* Text color for marquee */
    }
</style>

<marquee behavior="" direction="">
    SELAMAT DATANG DI WEBSITE PILIHANKU, PILIHAN TEPAT UNTUK MENCARI BAKAT DAN MINAT ANDA
</marquee>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card">
                <div class="card-header text-center">
                    Minat Bakat
                </div>
                <div class="card-body text-center">
                    <button class="btn btn-primary">Coba Sekarang</button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card">
                <div class="card-header text-center">
                    Jurusan
                </div>
                <div class="card-body text-center">
                    <a href="{{url('jurusan')}}" class="btn btn-primary">Coba Sekarang</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card">
                <div class="card-header text-center">
                    Konsultasi
                </div>
                <div class="card-body text-center">
                    <button class="btn btn-primary">Coba Sekarang</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
