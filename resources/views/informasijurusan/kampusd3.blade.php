@extends('welcome')
@section('content')
<style>
     body {
            background: linear-gradient(to rigth, #f3d9df, rgb(138, 138, 243));           
         height: 100%;
        }   
        
    .logo {
      object-fit: contain;

    width: 100%;
    transition: height 0.5s ease;
    height: 300px;
}

/* Media query for mobile devices with a maximum width of 767px */
@media (max-width: 767px) {
    .logo {
        height: 100px;
    }
}

/* .card:hover .logo {
        height: 320px; /* Adjust the height as needed */
    } */

    .card {
        transition: transform 0.3s ease; /* Add a smooth transition effect for the whole card */
    }

    /* Add hover effect for the whole card */
    .card:hover {
        transform: scale(1.05);
        background-color: grey;
}
.btn{
    color: white;
}

.btn:hover{
    color: white;
    font-weight: bold;
}
</style>
<div style="padding-top: 77px"></div>
<div class="jurusan rounded-bottom text-center bg-primary">
    KAMPUS-KAMPUS DIPLOMA 3
</div>
<div class="container mt-3">          
    <div class="row mt-3">
        <div class="col">
            <a href="https://www.polsri.ac.id/" target="_blank">
            <div class="card">
                <div class="card-header">
                        <img src="https://tse2.mm.bing.net/th?id=OIP.vOuqAhHCvL6uUnqBVsFjiwAAAA&pid=Api&P=0&h=180" class="logo" alt="">  
                </div>
                <div class="text-center card-body">
                    <a href="" style="text-decoration: none">
                    <div class="btn btn-primary">Kunjungi</div>
                    </a>
                </div>
            </div>
        </a>                                                   
        </div>
        <div class="col">
            <a href="https://unsri.ac.id/en/" target="_blank">
            <div class="card">
                <div class="card-header">
                        <img src="https://unsri.ac.id/images/logo-unsri-gif9.gif" class="logo" alt="">  
                </div>
                <div class="text-center card-body">
                    <a href="" style="text-decoration: none">
                    <div class="btn btn-primary">Kunjungi</div>
                    </a>
                </div>
            </div>
        </a>                                                   
        </div>                                              
        </div>     
    <div class="row mt-3">
        <div class="col">
            <a href="https://www.binadarma.ac.id/" target="_blank">
            <div class="card">
                <div class="card-header">
                        <img src="https://www.binadarma.ac.id/wp-content/uploads/2016/03/logo-ok.png" class="logo" alt="">  
                </div>
                <div class="text-center card-body">
                    <a href="" style="text-decoration: none">
                    <div class="btn btn-primary">Kunjungi</div>
                    </a>
                </div>
            </div>
        </a>                                                   
        </div>
        <div class="col">
            <a href="https://unisti.ac.id/" target="_blank">
            <div class="card">
                <div class="card-header">
                        <img src="https://unisti.ac.id/img/logo.png" class="logo" alt="">  
                </div>
                <div class="text-center card-body">
                    <a href="" style="text-decoration: none">
                    <div class="btn btn-primary">Kunjungi</div>
                    </a>
                </div>
            </div>
        </a>                                                   
        </div>                                              
        </div>     
    </div>
</div>

@endsection