@extends('layouts.app')

@section('title', 'Edit Kategori')

@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Edit Kategori</li>
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <h5 class="card-title">@yield('title')</h5>
    </div>
    <div class="card-body">
        <form action="{{route('kategori.update'), $kategori->id}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="name">Nama Kategori</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') ?? $kategori->name}}" required autocomplete="off">

                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="card-footer">
                <button type="reset" class="btn btn-primary">Submit</button>
            </div>
          </form>
    </div>
</div>
@endsection
