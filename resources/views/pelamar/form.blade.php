@extends('layouts.app')

@section('title', 'Form Pelamar')

@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Form Pelamar</li>
@endsection

@section('content')


<div class="card">
    <div class="card-header">
        <h5 class="card-title">@yield('title')</h5>
    </div>
    <div class="card-body">
        <form action="{{route('pelamar.store')}}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">User ID</label>
                <input type="text" class="form-control @error('user_id') is-invalid @enderror" id="user_id" name="user_id">

                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

            </div>

            <div class="form-group">
                 <label for="name">Nama Pelamar</label>
                 <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">

                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

            </div>


            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir">

                @error('tempat_lahir')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>



            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir">

                @error('tgl_lahir')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>


            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat">

                @error('alamat')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>


            <div class="form-group">
                <label for="pendidikan">Pendidikan</label>
                <input type="text" class="form-control @error('pendidikan') is-invalid @enderror" id="pendidikan" name="pendidikan">

                @error('pendidikan')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>


            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email">

                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>

            <div class="form-group">
                <label for="no_hp">No HP</label>
                <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp">

                @error('no_hp')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>

            <div class="form-group">
                <label for="file">File</label>
                <input type="text" class="form-control @error('file') is-invalid @enderror" id="file" name="file">

                @error('file')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>


            <div class="card-footer">

                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
    </div>
</div>
@endsection
