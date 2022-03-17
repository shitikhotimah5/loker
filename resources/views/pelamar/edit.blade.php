@extends('layouts.app')

@section('title', 'Edit pelamar')

@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Edit pelamar</li>
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <h5 class="card-title">@yield('title')</h5>
    </div>
    <div class="card-body">
        <form action="{{route('pelamar.update', $pelamar->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="name">Nama pelamar</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') ?? $pelamar->name}}" required autocomplete="off">

                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>

            <div class="form-group">
                <label for="name">Tempat Lahir</label>
                <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir') ?? $pelamar->tempat_lahir}}" required autocomplete="off">

                  @error('tempat_lahir')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror

            </div>

            <div class="form-group">
                <label for="name">Tanggal Lahir</label>
                <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" value="{{ old('tgl_lahir') ?? $pelamar->tgl_lahir}}" required autocomplete="off">

                  @error('tgl_lahir')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror

            </div>

            <div class="form-group">
                <label for="name">Alamat</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') ?? $pelamar->alamat}}" required autocomplete="off">

                  @error('alamat')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror

            </div>

            <div class="form-group">
                <label for="pendidikan">Pendidikan</label>
                <input type="text" class="form-control @error('pendidikan') is-invalid @enderror" id="pendidikan" name="pendidikan" value="{{ old('pendidikan') ?? $pelamar->pendidikan}}" required autocomplete="off">

                @error('pendidikan')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>


            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') ?? $pelamar->email}}" required autocomplete="off">

                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>

            <div class="form-group">
                <label for="no_hp">No HP</label>
                <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" value="{{ old('no_hp') ?? $pelamar->no_hp}}" required autocomplete="off">

                @error('no_hp')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>

            <div class="form-group">
                <label for="file">File</label>
                <input type="text" class="form-control @error('file') is-invalid @enderror" id="file" name="file" value="{{ old('file') ?? $pelamar->file}}" required autocomplete="off">

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
