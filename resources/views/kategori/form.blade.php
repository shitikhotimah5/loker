@extends('layouts.app')

@section('title', 'Form Kategori')

@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Form Kategori</li>
@endsection

@section('content')


<div class="card">
    <div class="card-header">
        <h5 class="card-title">@yield('title')</h5>
    </div>
    <div class="card-body">
        <form action="{{route('kategori.store')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="name">Nama Kategori</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">

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
