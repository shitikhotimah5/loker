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
                <td></td>
                <td>
                    <form action="{{ route('kategori.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('DELETE')

                        <a href="{{ route('kategori.update', $item->id) }}" class=" btn btn-link text-info"><i
                                class="fas fa-edit"></i></a>
                        <button class="btn btn-link text-danger"
                            onclick="return confirm('Yakin ingin menghapus data?')"><i
                                class="fas fa-trash"></i></button>
                    </form>
              </tr>

              @endforeach ()
            </tbody>
          </table>

    </div>
  </div>



  @endsection
