@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
            <div class="card mx-4">
                <div class="card-body p-4">
                    <div style="text-align: center;">
                        <img src="assets\img\LogoMondayApp.jpeg" class="rounded" alt="Responsive image"><br><br>
                    </div>
                    <div style = "margin-left:15px">
                        <p> 
                            <a href="dashboard">
                            <button class="w3-button w3-blue w3-round-large w3-hover-white">
                                Pengembangan Aplikasi Berbasis Web
                            </button>
                            </a>
                        </p>    
                        <p> 
                            <a href=#>
                            <button class="w3-button w3-blue w3-round-large w3-hover-white" disabled>
                                Pengembangan Aplikasi Mobile
                            </button>
                            </a>
                        </p>
                        <p> 
                            <a href=#>
                            <button class="w3-button w3-blue w3-round-large w3-hover-white" disabled>
                                Probabilitas dan Statistika
                            </button>
                            </a>
                        </p>
                        <p> 
                            <a href=#>
                            <button class="w3-button w3-blue w3-round-large w3-hover-white" disabled>
                                Pengujian dan Penjaminan Mutu Perangkat Lunak
                            </button>
                            </a>
                        </p>
                        <p> 
                            <a href=#>
                            <button class="w3-button w3-blue w3-round-large w3-hover-white" disabled>
                                Kecerdasan Buatan
                            </button>
                            </a>
                        </p>
                        <p> 
                            <a href=#>
                            <button class="w3-button w3-blue w3-round-large w3-hover-white" disabled>
                                Analisis dan Perancangan Perangkat Lunak
                            </button>
                            </a>
                        </p>
                        <p> 
                            <a href=#>
                            <button class="w3-button w3-blue w3-round-large w3-border w3-border-black w3-hover-white">
                                Add more..
                            </button>
                            </a>
                        </p>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection