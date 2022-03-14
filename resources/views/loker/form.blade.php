@extends('layouts.app')

@section('title', 'Form Loker')

@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Form Loker</li>
@endsection

@section('content')


<div class="card">
    <div class="card-header">
        <h5 class="card-title">@yield('title')</h5>
    </div>
    <div class="card-body">
        <form action="{{route('loker.store')}}" method="POST">
            @csrf

            <div class="form-group">
            <label for="name">Nama Loker</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">

                @error('name')
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
                <label for="deskripsi">Deskripsi</label>
                <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi">

                @error('deskripsi')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>


            <div class="form-group">
                <label for="syarat">Syarat</label>
                <input type="text" class="form-control @error('syarat') is-invalid @enderror" id="syarat" name="syarat">

                @error('syarat')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>


            <div class="form-group">
                <label for="start_date">Tanggal Mulai</label>
                <input type="date" class="form-control @error('start_date') is-invalid @enderror" id="start_date" name="start_date">

                @error('start_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>


            <div class="form-group">
                <label for="end_date">Tanggal Selesai</label>
                <input type="date" class="form-control @error('end_date') is-invalid @enderror" id="end_date" name="end_date">

                @error('end_date')
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
