@extends('layouts.app')

@section('title', 'Edit Loker')

@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Edit Loker</li>
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <h5 class="card-title">@yield('title')</h5>
    </div>
    <div class="card-body">
        <form action="{{route('loker.update', $loker->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="name">Nama Loker</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') ?? $loker->name}}" required autocomplete="off">

                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>

            <div class="form-group">
                <label for="name">Pendidikan</label>
                <input type="text" class="form-control @error('pendidikan') is-invalid @enderror" id="pendidikan" name="pendidikan" value="{{ old('pendidikan') ?? $loker->name}}" required autocomplete="off">

                  @error('name')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror

            </div>

            <div class="form-group">
                <label for="name">Deskripsi</label>
                <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" value="{{ old('deskripsi') ?? $loker->name}}" required autocomplete="off">

                  @error('name')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror

            </div>

            <div class="form-group">
                <label for="name">Syarat</label>
                <input type="text" class="form-control @error('syarat') is-invalid @enderror" id="syarat" name="syarat" value="{{ old('syarat') ?? $loker->name}}" required autocomplete="off">

                  @error('name')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror

            </div>

            <div class="form-group">
                <label for="name">Tanggal Mulai</label>
                <input type="date" class="form-control @error('start_date') is-invalid @enderror" id="start_date" name="start_date" value="{{ old('start_date') ?? $loker->name}}" required autocomplete="off">

                  @error('name')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror

            </div>

            <div class="form-group">
                <label for="name">Tanggal Selesai</label>
                <input type="date" class="form-control @error('end_date') is-invalid @enderror" id="end_date" name="end_date" value="{{ old('end_date') ?? $loker->name}}" required autocomplete="off">

                  @error('name')
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
