@extends('welcome')
@section('title')
    Form Pengembalian
@endsection
@section('content')
<style>
    .atas{
        font-weight: bold;
        text-align: center;
        background-color: rgb(123, 223, 253);
        color: black;
        padding: 20px;
    }
</style>
<div class="containe-fluid">
        <div class="atas"><h2><b>DINAS PARIWISATA KOTA PALEMBANG</b></h2></div>
        <img src="assets/foto.jfif" style="width: 100%;height: 500px" alt="">
    <div style="display: flex;gap: 10px;margin-top: 10px">
    <div class="card text-center w-50">
        <div class="card-header" style="background-color:rgb(123, 223, 253) ">
            <h4><b>Surat Masuk</b></h4>
        </div>
        <div class="card-body">            
            <h4><b>{{$masuk}}</b></h4>
        </div>
    </div>
    <div class="card text-center w-50">
        <div class="card-header" style="background-color: rgb(123, 223, 253)">
           <h4><b> Surat Keluar</b></h4>
        </div>
        <div class="card-body">
            <h4><b>{{$keluar}}</b></h4>
        </div>
    </div>
    </div>
</div>
@endsection