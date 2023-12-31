@extends('welcome')
@section('content')
<style>
     body {
            background: linear-gradient(to bottom, #f3d9df, rgb(138, 138, 243));           
         height: 100%;
        }   
        
    .logo {
        object-fit: contain;
    width: 100%;
    transition: height 0.5s ease;

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
        transform: scale(1.0);
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
    KAMPUS-KAMPUS SARJANA
</div>
<div class="container mt-3">          
    <div class="row mt-3">
        <div class="col">
            <a href="https://palcomtech.ac.id/informatika/" target="_blank">
            <div class="card">
                <div class="card-header">
                        <img src="../img/Logo.jpg" class="logo" alt="">  
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
            <a href="https://mdp.ac.id/" target="_blank">
            <div class="card">
                <div class="card-header">
                        <img src="https://mdp.ac.id/mdp2020/wp-content/uploads/2021/07/logo-umdp-1-300x248-2.png" class="logo" alt="">  
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
            <a href="https://unsri.ac.id/" target="_blank">
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
        <div class="col">
            <a href="https://uigm.ac.id/" target="_blank">
            <div class="card">
                <div class="card-header">
                        <img src="https://www.uigm.ac.id/medias/home/logo-uigm+impact.png" class="logo" alt="">  
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
            <a href="https://ukmc.ac.id/" target="_blank">
            <div class="card">
                <div class="card-header">
                        <img src="https://ukmc.ac.id/wp-content/themes/ukmc/images/logo.svg" class="logo" alt="">  
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
            <a href="https://binus.ac.id/" target="_blank">
            <div class="card">
                <div class="card-header">
                        <img src="https://binus.ac.id/wp-content/uploads/2022/08/logo-binus.svg" class="logo" alt="">  
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
