@extends('welcome')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- CSS DataTables -->
<link href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css" rel="stylesheet" />

<!-- JS DataTables -->
<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>

<style>
    .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #212529;
        background-color: #fff;
        border-collapse: collapse;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .table th,
    .table td {
        padding: 12px;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }

    .table thead th {
        background-color: #343a40;
        color: white;
        border-color: #dee2e6;
    }

    .table tbody tr:hover {
        background-color: #f8f9fa;
    }

    .card {
        margin: 20px;
        border: 1px solid #e2e2e2;
        border-radius: 8px;
    }

    .card-header {
        background-color: #343a40;
        color: white;
        padding: 10px;
        border-bottom: 1px solid #e2e2e2;
    }

    .card-body {
        padding: 20px;
    }

    .btn-danger,
    .btn-success {
        margin-top: 10px;
    }

    .bi {
        margin-right: 5px;
    }

    .penerima {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }
</style>
   <div class="penerima">User</div>  
    <div class="card">
        <div class="card-header">           
    </div>
        <div class="card-body">
            <table class="table table-bordered" style="width: 100%">
                <thead style="background-color: grey">
                    <tr>
                        <th class="text-center">Email</th>                       
                        <th class="text-center">Status</th>                       
                        <th class="text-center">Bukti Pembayaran</th>                       
                        <th class="text-center">Link Soal</th>                       
                    </tr>
                </thead>
                <tbody>
                       @foreach($data as $item)
                       @if ($item->level=="user")                                                 
                   <tr>                            
                      <td class="text-center">{{$item->email}}</td>  
                      <td class="text-center">{{$item->status}}</td>  
                      <td class="text-center">
                     @if ($item->bukti=="Belum")
                        Proses
                     @else                
                        <a href="bukti/{{$item->bukti}}">
                        <img src="bukti/{{$item->bukti}}" alt="">
                        </a>
                     @endif

                    </td>  
                      <td class="text-center">
                        {{-- <a  href="{{url('hapus_penerima')}}/{{$item->id}}" class="btn btn-danger btn-sm" onclick="return confirm ('Yakin Hapus Data ?');"><i class="bi bi-trash"></i> Delete</a>                         --}}                          

                            @if ($item->bukti==" ")
                            Silahkan lakukan pemesanan . <a href="{{url('minatbakat')}}" style="color: blue">DISINI</a>                                                     

                         @else                
                         @if ($item->status=="Bayar")
                                                      <a href="http://localhost:8000/soal"> http://localhost:8000/soal</a>
                                    
                               @else
                               Pembelian Kamu Sedang di Proses
                               @endif
                         @endif
                        </td>                   
                   </tr>
                   @endif
                   @endforeach
                </tbody> 
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.table').DataTable();
    });
    </script>
@endsection