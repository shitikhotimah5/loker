@extends('layouts.frond_end.index')

@section('title', 'Lowongan Kerja')



@push('css')
<style>
    /* Jumbotron */
    .jumbotron {
        height: 87.5vh;
        /* background-image: url('{{ asset("/img/bgcharity1.jpg") }}'); */
        /* background-image: url('/css/asset/logo1.png'); */
        background-size: cover;
        background-repeat: no-repeat;
        border-radius: 0;
    }
    .jumbotron .bg-white-50:hover {
        background: rgb(255, 255, 255, .15);
    }
    @media (max-width: 575.98px) {
        .jumbotron .btn.rounded {
            width: 100% !important;
        }
        .jumbotron.display-4 {
            font-size: 42px;
        }
    }
    /* info Campaign */
    @media (max-width: 575.98px) {
        .info-campaign .fa-2x.text {
            font-size: 24px;
        }
    }
    /* Dana Tersalurkan */
    .dana-tersalurkan.card {
        border: 0;
        box-shadow: 0 1rem 3rem rgb(0, 0, 0, .1) !important;
        transition: 1s;
    }
    .dana-tersalurkan .card:hover,
    .dana-tersalurkan .card:focus {
        transform: translateY(-5px);
    }
    /* Galang Dana 2 */
    @media (max-width: 575.98px) {
        .galang-dana2 .fa-3x {
            font-size: 32px;
        }
        .galang-dana2 h3 {
            font-size: 18px;
        }
    }

</style>
@endpush

@section('content')
{{-- Jumbotron --}}
<div class="jumbotron d-flex justify-content-center align-items-center mb-0">
    <div class="shadow-sm p-3 bg-white-50 rounded ">
        <div class="card p-4 border text-center img-card">
            <h1 class="display-4 font-weight-bold">Cirebon Power</h1>
            <p class="lead text-capitalize mt-3">Bergabung Bersama Kami</p>
            <a href="" class="btn btn-primary btn-lg rounded w-50 m-auto">Join</a>
        </div>
    </div>
</div>

{{-- Info Campaign --}}
<div class="info-campaign bg-dark">
    <div class="container text-white py-5">
        <div class="row text-center">
            <div class="col-lg-3 col-md-6">
                <p class="icon">
                    <i class="fas fa-smile fa-2x"></i>
                </p>
                <p class="fa-2x font-weight-bold">4</p>
                <p class="fa-2x text mb-0 text-uppercase">Loker</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <p class="icon">
                    <i class="fas fa-rocket fa-2x"></i>
                </p>
                <p class="fa-2x font-weight-bold">4</p>
                <p class="fa-2x text mb-0 text-uppercase">Kategori</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <p class="icon">
                    <i class="fas fa-user-plus fa-2x"></i>
                </p>
                <p class="fa-2x font-weight-bold">4</p>
                <p class="fa-2x text mb-0 text-uppercase">Info</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <p class="icon">
                    <i class="fas fa-globe fa-2x"></i>
                </p>
                <p class="fa-2x font-weight-bold">4</p>
                <p class="fa-2x text mb-0 text-uppercase">About</p>
            </div>
        </div>
    </div>
</div>
{{-- Dana Tersalurkan --}}
<div class="dana-tersalurkan">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="fa-3x mb-4">INFORMASI LOWONGAN</h2>
                <h3 class="font-weight-normal mb-3">
                    Jika Anda dapat bergabung dengan kami sekarang, <br>
                    maka semakin banyak yang terbantu
                </h3>
            </div>

            @for ($i =0; $i < 6; $i++) <div class="col-lg-4 col-md-6">
                <div class="card mt-4">
                    <img src="/img/default.png" class="card-img-top" alt="...">
                    <div class="card-body p-2">
                        <div class="d-flex justify-content-between text-dark">
                            <p class="mb-0">Terkumpul: <strong>1jt</strong></p>
                            <p class="mb-0">Goal: <strong>10jt</strong></p>
                        </div>
                    </div>
                    <div class="card-body p-2 border-top">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit sapiente
                            unde rem id, impedit ab quaerat autem ea ipsa error!</p>
                    </div>
                    <div class="card-footer bg-light p-2">
                        <a href="#" class="btn btn-primary d-block rounded"><i class="fas fa-donate mr-2"></i>Donasi
                            Sekarang</a>
                    </div>
                </div>
        </div>
        @endfor
    </div>
</div>

{{-- Galang Dana2 --}}
<div class="galang-dana2 bg-white">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="fa-3x m-4">GALANG DANA DI KAMI</h2>
                <h3 class="font-weight-normal mb-4">
                    Dari menolong anggota keluarga, hingga membangun jembatan di desa, <br>
                    ribuan orang telah menggunakan wabsite kami untuk menggalang dana.
                </h3>
                <a href="" class="btn btn-primary btn-lg rounded m-auto">Galang Dana Sekarang</a>
            </div>
        </div>
    </div>
</div>
@endsection
