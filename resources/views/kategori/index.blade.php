@extends('layouts.app')

@section('title', 'Kategori')

@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Kategori</li>
@endsection

@section('content')

<div class="card">
    <div class="card-header">
      <a href="{{route('kategori.create')}}" class="btn btn-primary">Tambah</a>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Slug</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($kategori as $key => $item)
              <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$item -> name}}</td>
                <td>{{$item -> slug}}</td>
                <td>@mdo</td>
              </tr>
              @endforeach ()
            </tbody>
          </table>

    </div>
  </div>



  @endsection
