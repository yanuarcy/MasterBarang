@extends('Layouts.basedApp')

@section('Konten')
    <section class="home" id="section-home">
        <div class="jumbotron jumbotron-fluid">
            <div class="container text-center">
                <div class="komponen">
                <img src="{{ Vite::asset('resources/images/profil1.jpg') }}" class="rounded-circle">
                    <h1 class="display-4">Yanuar Cahyo</h1>
                    <p class="lead">Scholar | Frontend  Developer | Beginner</p>
                </div>


                <div class="row justify-content-center pt-4 mx-5 px-5">
                    <div class="col-md">
                        <div class="WhatsApp">
                            <a href="https://api.whatsapp.com/send/?phone=%2B6282257508081&text&type=phone_number&app_absent=0">
                                <i class="bi bi-whatsapp text-white" style="font-size: 25px; margin-left: 100%;"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="Mail">
                            <a href="mailto:yanuarcahyo567@gmail.com">
                                <i class="bi bi-envelope-fill text-white" style="font-size: 25px;"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="github">
                        <a href="https://github.com/yanuarcy">
                            <i class="bi bi-github text-white" style="font-size: 25px; margin-right: 100%;"></i>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card my-5">
                    <div class="card-head">
                        <h1 class="px-4 my-3"><i class="bi bi-house-door"></i > {{ $Tittle }}</h1>
                    </div>
                    <div class="card-body">
                        <h1>My Biodata</h1>
                        <hr>
                        <h1>Nama : {{ $Nama }} </h1>
                        <h1>Alamat : {{ $Alamat }} </h1>
                        <h1>Institut : {{ $Institut }} </h1>
                        <h1>Jurusan : {{ $Jurusan }} </h1>
                        <h1>Kelas : {{ $Kelas }} </h1>
                        <h1>NIM : {{ $NIM }} </h1>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

